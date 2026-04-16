#!/usr/bin/env python3

from __future__ import annotations

import argparse
import base64
import hmac
import json
import os
import subprocess
import sys
import time
from dataclasses import dataclass
from datetime import datetime, time as clock_time
import hashlib
from pathlib import Path
from typing import Any, Dict, Iterable, List, Optional, Tuple
from urllib import error, parse, request
from zoneinfo import ZoneInfo


EASTMONEY_QUOTE_URL = "https://push2.eastmoney.com/api/qt/ulist.np/get"
EASTMONEY_FIELDS = "f2,f3,f4,f5,f6,f7,f8,f12,f13,f14,f15,f16,f17,f18"
DEFAULT_TRADING_TZ = "Asia/Shanghai"


@dataclass
class QuoteSnapshot:
    code: str
    name: str
    market: str
    price: Optional[float]
    pct_change: Optional[float]
    change: Optional[float]
    volume: Optional[float]
    amount: Optional[float]
    amplitude: Optional[float]
    turnover_rate: Optional[float]
    high: Optional[float]
    low: Optional[float]
    open_price: Optional[float]
    prev_close: Optional[float]
    fetched_at: datetime


def parse_args() -> argparse.Namespace:
    script_dir = Path(__file__).resolve().parent
    parser = argparse.ArgumentParser(description="A-share polling monitor with optional Ollama summaries.")
    parser.add_argument(
        "--config",
        default=str(script_dir / "watchlist.json"),
        help="Path to the monitor config JSON file.",
    )
    parser.add_argument("--once", action="store_true", help="Fetch and evaluate one round, then exit.")
    parser.add_argument(
        "--interval",
        type=float,
        help="Override poll interval seconds from the config file.",
    )
    parser.add_argument(
        "--ignore-trading-hours",
        action="store_true",
        help="Run even outside the CN A-share trading windows.",
    )
    parser.add_argument(
        "--show-quotes",
        action="store_true",
        help="Print every fetched quote snapshot, not only alerts.",
    )
    parser.add_argument(
        "--no-ollama",
        action="store_true",
        help="Skip calling the local Ollama API even if enabled in config.",
    )
    return parser.parse_args()


def load_config(path: Path) -> Dict[str, Any]:
    with path.open("r", encoding="utf-8") as handle:
        config = json.load(handle)

    if not isinstance(config, dict):
        raise ValueError("Top-level config must be a JSON object.")
    if not isinstance(config.get("symbols"), list) or not config["symbols"]:
        raise ValueError("Config must include a non-empty symbols list.")
    return config


def resolve_config_value(config: Dict[str, Any], value_key: str, env_key: str) -> str:
    direct_value = str(config.get(value_key, "") or "").strip()
    if direct_value:
        return direct_value

    env_name = str(config.get(env_key, "") or "").strip()
    if env_name:
        return str(os.environ.get(env_name, "")).strip()
    return ""


def now_in_trading_hours(tz_name: str) -> bool:
    now = datetime.now(ZoneInfo(tz_name))
    if now.weekday() >= 5:
        return False

    current = now.time()
    morning_start = clock_time(9, 30)
    morning_end = clock_time(11, 30)
    afternoon_start = clock_time(13, 0)
    afternoon_end = clock_time(15, 0)
    return (morning_start <= current <= morning_end) or (afternoon_start <= current <= afternoon_end)


def infer_market(code: str, market_hint: Optional[str] = None) -> str:
    if market_hint:
        lowered = market_hint.strip().lower()
        if lowered in {"sh", "sz", "bj"}:
            return lowered
        raise ValueError(f"Unsupported market value for {code}: {market_hint}")

    if code.startswith(("5", "6", "9", "11", "13")):
        return "sh"
    if code.startswith(("0", "1", "2", "3", "4", "8")):
        return "sz"
    raise ValueError(f"Could not infer exchange from code: {code}")


def symbol_key(symbol: Dict[str, Any]) -> str:
    return str(symbol.get("id") or symbol["code"]).strip()


def symbol_strategy(symbol: Dict[str, Any]) -> str:
    return str(symbol.get("strategy") or "").strip()


def display_symbol_name(quote: QuoteSnapshot, symbol: Dict[str, Any]) -> str:
    strategy = symbol_strategy(symbol)
    if strategy:
        return f"{quote.name} [{strategy}]"
    return quote.name


def to_secid(code: str, market: str) -> str:
    market_id = {"sh": "1", "sz": "0", "bj": "0"}[market]
    return f"{market_id}.{code}"


def to_float(value: Any) -> Optional[float]:
    if value in (None, "", "-", "--"):
        return None
    try:
        return float(value)
    except (TypeError, ValueError):
        return None


def fetch_quotes(symbols: Iterable[Dict[str, Any]], timeout_seconds: int) -> Dict[str, QuoteSnapshot]:
    code_to_symbol: Dict[str, Dict[str, Any]] = {}
    secids: List[str] = []
    for symbol in symbols:
        code = str(symbol["code"]).strip()
        market = infer_market(code, symbol.get("market"))
        code_to_symbol[code] = symbol
        secids.append(to_secid(code, market))

    params = {
        "ut": "fa5fd1943c7b386f172d6893dbfba10b",
        "fltt": "2",
        "invt": "2",
        "fields": EASTMONEY_FIELDS,
        "secids": ",".join(secids),
        "_": str(int(time.time() * 1000)),
    }
    headers = {
        "User-Agent": "Mozilla/5.0",
        "Referer": "https://www.eastmoney.com/",
        "Accept": "application/json,text/plain,*/*",
    }

    url = f"{EASTMONEY_QUOTE_URL}?{parse.urlencode(params)}"
    req = request.Request(url, headers=headers)
    with request.urlopen(req, timeout=timeout_seconds) as resp:
        payload = json.loads(resp.read().decode("utf-8"))

    diff = (((payload or {}).get("data") or {}).get("diff"))
    if not diff:
        raise RuntimeError(f"Eastmoney returned no quote data: {payload}")

    items = diff.values() if isinstance(diff, dict) else diff
    fetched_at = datetime.now()
    quotes: Dict[str, QuoteSnapshot] = {}
    for item in items:
        code = str(item.get("f12", "")).strip()
        if not code:
            continue

        market_value = str(item.get("f13", "")).strip()
        market = "sh" if market_value == "1" else "sz"
        fallback_name = str(code_to_symbol.get(code, {}).get("name", "")).strip()
        quotes[code] = QuoteSnapshot(
            code=code,
            name=str(item.get("f14") or fallback_name or code),
            market=market,
            price=to_float(item.get("f2")),
            pct_change=to_float(item.get("f3")),
            change=to_float(item.get("f4")),
            volume=to_float(item.get("f5")),
            amount=to_float(item.get("f6")),
            amplitude=to_float(item.get("f7")),
            turnover_rate=to_float(item.get("f8")),
            high=to_float(item.get("f15")),
            low=to_float(item.get("f16")),
            open_price=to_float(item.get("f17")),
            prev_close=to_float(item.get("f18")),
            fetched_at=fetched_at,
        )
    return quotes


def format_percent(value: Optional[float]) -> str:
    return "n/a" if value is None else f"{value:.2f}%"


def format_price(value: Optional[float]) -> str:
    return "n/a" if value is None else f"{value:.2f}"


def format_amount_yi(value: Optional[float]) -> str:
    return "n/a" if value is None else f"{value / 100000000:.2f}亿"


def compute_metric(quote: QuoteSnapshot, rule_name: str) -> Tuple[Optional[float], str, str]:
    if rule_name.startswith("pct_change_"):
        return quote.pct_change, "%", "涨跌幅"
    if rule_name.startswith("price_"):
        return quote.price, "", "最新价"
    if rule_name.startswith("turnover_rate_"):
        return quote.turnover_rate, "%", "换手率"
    if rule_name.startswith("amplitude_"):
        return quote.amplitude, "%", "振幅"
    if rule_name.startswith("amount_"):
        amount_yi = None if quote.amount is None else quote.amount / 100000000
        return amount_yi, "亿", "成交额"
    if rule_name.startswith("from_open_pct_"):
        if quote.price is None or quote.open_price in (None, 0):
            return None, "%", "相对开盘涨跌"
        move_pct = ((quote.price - quote.open_price) / quote.open_price) * 100
        return move_pct, "%", "相对开盘涨跌"
    raise ValueError(f"Unsupported rule: {rule_name}")


def rule_direction(rule_name: str) -> str:
    if "_gte" in rule_name:
        return "gte"
    if "_lte" in rule_name:
        return "lte"
    raise ValueError(f"Rule must contain _gte or _lte: {rule_name}")


def evaluate_rules(quote: QuoteSnapshot, symbol: Dict[str, Any]) -> Tuple[bool, List[str]]:
    rules = symbol.get("rules") or {}
    if not rules:
        return False, []

    checks: List[bool] = []
    reasons: List[str] = []

    for rule_name, threshold in rules.items():
        metric, unit, label = compute_metric(quote, rule_name)
        if metric is None:
            checks.append(False)
            continue

        threshold_value = float(threshold)
        direction = rule_direction(rule_name)
        if direction == "gte":
            matched = metric >= threshold_value
            op = ">="
        else:
            matched = metric <= threshold_value
            op = "<="

        checks.append(matched)
        if matched:
            reasons.append(f"{label} {metric:.2f}{unit} {op} {threshold_value:.2f}{unit}")

    if not checks:
        return False, []

    match_mode = str(symbol.get("match", "all")).strip().lower()
    if match_mode == "any":
        matched = any(checks)
    else:
        matched = all(checks)
    return matched, reasons


def build_snapshot_line(quote: QuoteSnapshot) -> str:
    return (
        f"{quote.code} {quote.name} | 价={format_price(quote.price)} | 涨跌幅={format_percent(quote.pct_change)} | "
        f"开={format_price(quote.open_price)} | 高={format_price(quote.high)} | 低={format_price(quote.low)} | "
        f"换手={format_percent(quote.turnover_rate)} | 成交额={format_amount_yi(quote.amount)}"
    )


def build_ollama_prompt(quote: QuoteSnapshot, reasons: List[str]) -> str:
    return (
        "你是A股盘中监控助手。基于下面快照，用不超过3条中文短句回答：\n"
        "1. 盘中发生了什么；\n"
        "2. 这通常意味着什么；\n"
        "3. 现在最值得继续盯的两个点。\n"
        "不要编造新闻、公告或资金流细节；不知道就明确说不知道。\n\n"
        f"股票：{quote.name} ({quote.code})\n"
        f"触发原因：{'；'.join(reasons)}\n"
        f"最新价：{format_price(quote.price)}\n"
        f"涨跌幅：{format_percent(quote.pct_change)}\n"
        f"开盘价：{format_price(quote.open_price)}\n"
        f"最高价：{format_price(quote.high)}\n"
        f"最低价：{format_price(quote.low)}\n"
        f"换手率：{format_percent(quote.turnover_rate)}\n"
        f"成交额：{format_amount_yi(quote.amount)}\n"
    )


def call_ollama(quote: QuoteSnapshot, reasons: List[str], ollama_cfg: Dict[str, Any], symbol: Dict[str, Any]) -> Optional[str]:
    strategy = symbol_strategy(symbol)
    strategy_line = f"策略：{strategy}\n" if strategy else ""
    payload = {
        "model": ollama_cfg.get("model", "gemma4:e2b"),
        "prompt": strategy_line + build_ollama_prompt(quote, reasons),
        "stream": False,
    }
    data = json.dumps(payload).encode("utf-8")
    req = request.Request(
        ollama_cfg.get("url", "http://127.0.0.1:11434/api/generate"),
        data=data,
        headers={"Content-Type": "application/json"},
    )
    try:
        with request.urlopen(req, timeout=int(ollama_cfg.get("timeout_seconds", 20))) as resp:
            response_payload = json.loads(resp.read().decode("utf-8"))
    except (error.URLError, TimeoutError, json.JSONDecodeError):
        return None

    text = str(response_payload.get("response", "")).strip()
    return text or None


def log_alert(log_path: Path, payload: Dict[str, Any]) -> None:
    log_path.parent.mkdir(parents=True, exist_ok=True)
    with log_path.open("a", encoding="utf-8") as handle:
        handle.write(json.dumps(payload, ensure_ascii=False) + "\n")


def send_desktop_notification(title: str, body: str) -> None:
    script = f'display notification "{body.replace(chr(34), chr(39))}" with title "{title.replace(chr(34), chr(39))}"'
    try:
        subprocess.run(
            ["osascript", "-e", script],
            check=False,
            capture_output=True,
            text=True,
        )
    except OSError:
        return


def build_feishu_text(
    quote: QuoteSnapshot,
    symbol: Dict[str, Any],
    reasons: List[str],
    summary: Optional[str],
    keyword: str,
) -> str:
    display_name = display_symbol_name(quote, symbol)
    lines = [f"{display_name} ({quote.code})"]
    if keyword:
        lines.insert(0, keyword)
    lines.extend(
        [
            f"触发原因：{'；'.join(reasons)}",
            f"最新价：{format_price(quote.price)}",
            f"涨跌幅：{format_percent(quote.pct_change)}",
            f"换手率：{format_percent(quote.turnover_rate)}",
            f"成交额：{format_amount_yi(quote.amount)}",
            f"快照：{build_snapshot_line(quote)}",
        ]
    )
    if summary:
        lines.append(f"小龙虾总结：{summary}")
    return "\n".join(lines)


def build_feishu_payload(text: str, secret: str) -> Dict[str, Any]:
    payload: Dict[str, Any] = {
        "msg_type": "text",
        "content": {"text": text},
    }
    if secret:
        timestamp = int(time.time())
        string_to_sign = f"{timestamp}\n{secret}"
        sign = base64.b64encode(
            hmac.new(string_to_sign.encode("utf-8"), digestmod=hashlib.sha256).digest()
        ).decode("utf-8")
        payload["timestamp"] = timestamp
        payload["sign"] = sign
    return payload


def send_feishu_alert(
    quote: QuoteSnapshot,
    symbol: Dict[str, Any],
    reasons: List[str],
    summary: Optional[str],
    feishu_cfg: Dict[str, Any],
) -> Optional[str]:
    webhook_url = resolve_config_value(feishu_cfg, "webhook_url", "webhook_url_env")
    if not webhook_url:
        return "feishu enabled but no webhook URL configured"

    secret = resolve_config_value(feishu_cfg, "secret", "secret_env")
    keyword = str(feishu_cfg.get("keyword", "") or "").strip()
    message_text = build_feishu_text(quote, symbol, reasons, summary, keyword)
    payload = build_feishu_payload(message_text, secret)
    data = json.dumps(payload, ensure_ascii=False).encode("utf-8")
    req = request.Request(
        webhook_url,
        data=data,
        headers={"Content-Type": "application/json; charset=utf-8"},
    )
    try:
        with request.urlopen(req, timeout=int(feishu_cfg.get("timeout_seconds", 10))) as resp:
            response_payload = json.loads(resp.read().decode("utf-8"))
    except (error.URLError, TimeoutError, json.JSONDecodeError) as exc:
        return f"feishu request failed: {exc}"

    if response_payload.get("code") not in (None, 0):
        return f"feishu send failed: {response_payload.get('msg', response_payload)}"
    return None


def run_monitor(args: argparse.Namespace) -> int:
    config_path = Path(args.config).resolve()
    config = load_config(config_path)
    config_dir = config_path.parent

    poll_interval = float(args.interval or config.get("poll_interval_seconds", 15))
    cooldown_seconds = float(config.get("cooldown_seconds", 180))
    trading_tz = str(config.get("trading_timezone", DEFAULT_TRADING_TZ))
    request_timeout = int(config.get("request_timeout_seconds", 10))
    only_trading_hours = bool(config.get("only_trading_hours", True)) and not args.ignore_trading_hours
    log_file = config_dir / str(config.get("log_file", "alerts.log"))
    desktop_notifications = bool(config.get("desktop_notifications", False))
    feishu_cfg = dict(config.get("feishu") or {})
    feishu_enabled = bool(feishu_cfg.get("enabled", False))
    ollama_cfg = dict(config.get("ollama") or {})
    ollama_enabled = bool(ollama_cfg.get("enabled", True)) and not args.no_ollama

    symbols: List[Dict[str, Any]] = list(config["symbols"])
    active_states: Dict[str, bool] = {}
    last_alert_times: Dict[str, float] = {}

    while True:
        try:
            if only_trading_hours and not now_in_trading_hours(trading_tz):
                timestamp = datetime.now(ZoneInfo(trading_tz)).strftime("%Y-%m-%d %H:%M:%S")
                print(f"[{timestamp}] 非交易时段，等待下一轮。")
                if args.once:
                    return 0
                time.sleep(poll_interval)
                continue

            quotes = fetch_quotes(symbols, timeout_seconds=request_timeout)
            timestamp = datetime.now(ZoneInfo(trading_tz)).strftime("%Y-%m-%d %H:%M:%S")

            if args.show_quotes:
                print(f"[{timestamp}] 已抓取 {len(quotes)} 支股票")
                printed_codes = set()
                for symbol in symbols:
                    code = str(symbol["code"])
                    if code in printed_codes:
                        continue
                    quote = quotes.get(code)
                    if quote:
                        print(f"  {build_snapshot_line(quote)}")
                        printed_codes.add(code)

            alerts_sent = 0
            for symbol in symbols:
                code = str(symbol["code"])
                monitor_id = symbol_key(symbol)
                quote = quotes.get(code)
                if not quote:
                    active_states[monitor_id] = False
                    continue

                matched, reasons = evaluate_rules(quote, symbol)
                was_active = active_states.get(monitor_id, False)
                active_states[monitor_id] = matched

                if not matched:
                    continue

                if was_active and (time.time() - last_alert_times.get(monitor_id, 0)) < cooldown_seconds:
                    continue

                if was_active:
                    continue

                summary = call_ollama(quote, reasons, ollama_cfg, symbol) if ollama_enabled else None
                last_alert_times[monitor_id] = time.time()
                alerts_sent += 1
                display_name = display_symbol_name(quote, symbol)

                print(f"\n[{timestamp}] 触发提醒: {display_name} ({quote.code})")
                print(f"  原因: {'；'.join(reasons)}")
                print(f"  快照: {build_snapshot_line(quote)}")
                if summary:
                    print(f"  小龙虾总结: {summary}")
                elif ollama_enabled:
                    print("  小龙虾总结: 未返回内容，先保留原始快照。")

                if desktop_notifications:
                    brief = f"{quote.code} {display_name} | {'；'.join(reasons[:2])}"
                    send_desktop_notification("A股监控提醒", brief[:180])

                if feishu_enabled:
                    feishu_error = send_feishu_alert(quote, symbol, reasons, summary, feishu_cfg)
                    if feishu_error:
                        print(f"  飞书提醒: {feishu_error}", file=sys.stderr)
                    else:
                        print("  飞书提醒: 已发送")

                log_alert(
                    log_file,
                    {
                        "timestamp": timestamp,
                        "monitor_id": monitor_id,
                        "strategy": symbol_strategy(symbol),
                        "code": quote.code,
                        "name": display_name,
                        "reasons": reasons,
                        "price": quote.price,
                        "pct_change": quote.pct_change,
                        "turnover_rate": quote.turnover_rate,
                        "amount": quote.amount,
                        "summary": summary,
                    },
                )

            if args.once:
                if alerts_sent == 0:
                    print(f"[{timestamp}] 本轮未命中任何规则。")
                return 0

            time.sleep(poll_interval)

        except KeyboardInterrupt:
            print("\n监控已停止。")
            return 0
        except FileNotFoundError as exc:
            print(f"配置文件不存在: {exc}", file=sys.stderr)
            return 1
        except json.JSONDecodeError as exc:
            print(f"JSON 解析失败: {exc}", file=sys.stderr)
            return 1
        except (ValueError, RuntimeError, error.URLError) as exc:
            now = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
            print(f"[{now}] 拉取或解析失败: {exc}", file=sys.stderr)
            if args.once:
                return 1
            time.sleep(min(poll_interval, 30))


def main() -> int:
    return run_monitor(parse_args())


if __name__ == "__main__":
    raise SystemExit(main())
