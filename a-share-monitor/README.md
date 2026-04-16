# A 股实时监控最小版

这个目录提供一个不依赖第三方 Python 包的最小可用监控器：

- 用东方财富接口轮询自选股行情
- 命中规则后输出提醒
- 可选调用本地 Ollama 生成中文盘中解释
- 把提醒历史写入 `alerts.log`

## 文件

- `monitor.py`: 主程序
- `watchlist.json`: 示例配置，改成你的自选股和规则即可
- `alerts.log`: 运行后自动生成

## 快速开始

默认的 [watchlist.json](/Users/james/Documents/New%20project%204/a-share-monitor/watchlist.json) 已经换成“短线异动模板”，包含：

- 放量拉升
- 大振幅异动
- 放量回落

示例股票池先放了几只高流动性的常见 A 股大票，方便你先看效果，后面再替换成你的自选池。

如果你只想盯单只股票，目录里也可以放专用配置。当前已经附带一份人民同泰的激进短线版：

- [watchlist-renmintongtai.json](/Users/james/Documents/New%20project%204/a-share-monitor/watchlist-renmintongtai.json)

它更适合半路、板前加速和高换手震荡这类盘中信号。

先做一次单轮测试：

```bash
python3 a-share-monitor/monitor.py \
  --config a-share-monitor/watchlist.json \
  --once \
  --ignore-trading-hours \
  --show-quotes
```

正式盯盘：

```bash
python3 a-share-monitor/monitor.py --config a-share-monitor/watchlist.json
```

如果你暂时还没启动本地模型，可以先关掉 Ollama：

```bash
python3 a-share-monitor/monitor.py \
  --config a-share-monitor/watchlist.json \
  --no-ollama
```

## 配置说明

`watchlist.json` 支持这些顶层字段：

- `poll_interval_seconds`: 轮询间隔，默认 12 秒
- `cooldown_seconds`: 同一只股票再次提醒前的冷却时间
- `only_trading_hours`: 是否只在 A 股交易时段运行
- `trading_timezone`: 默认 `Asia/Shanghai`
- `request_timeout_seconds`: 行情请求超时秒数
- `log_file`: 提醒日志文件名
- `desktop_notifications`: 是否弹出 macOS 桌面提醒
- `feishu`: 飞书自定义机器人配置
- `ollama`: 本地模型配置
- `symbols`: 股票列表

每只股票支持：

- `id`: 可选，监控项唯一标识；同一只股票挂多套策略时建议填写
- `code`: 6 位代码
- `name`: 自定义名称，可省略
- `market`: 可选，`sh` / `sz` / `bj`
- `strategy`: 可选，提醒里展示的策略名
- `match`: `all` 或 `any`
- `rules`: 告警规则

支持的规则键：

- `pct_change_gte` / `pct_change_lte`: 涨跌幅
- `price_gte` / `price_lte`: 最新价
- `turnover_rate_gte` / `turnover_rate_lte`: 换手率
- `amplitude_gte` / `amplitude_lte`: 振幅
- `amount_gte_yi` / `amount_lte_yi`: 成交额，单位是亿元
- `from_open_pct_gte` / `from_open_pct_lte`: 相对开盘价的涨跌幅

示例：

```json
{
  "code": "300750",
  "name": "宁德时代",
  "match": "any",
  "rules": {
    "pct_change_gte": 3.0,
    "amplitude_gte": 5.0,
    "turnover_rate_gte": 2.5
  }
}
```

## 小龙虾接法

这里按“本地 Ollama 就是你的小龙虾入口”来接：

- 默认请求地址是 `http://127.0.0.1:11434/api/generate`
- 默认模型是 `gemma4:e2b`
- 如果接口没启动，脚本会继续监控，只是不输出模型总结

你当前仓库里已经有本地模型目录：

- [local-ai/gemma4-ollama/README.md](/Users/james/Documents/New%20project%204/local-ai/gemma4-ollama/README.md)

注意：现在 `local-ai/gemma4-ollama/bin` 还是空的，说明 Ollama 二进制还没放进去；先把本地模型服务准备好，再打开 `watchlist.json` 里的 `ollama.enabled`。

## 飞书提醒

监控器已经支持飞书自定义机器人 Webhook。

先在飞书群里添加一个“自定义机器人”，拿到 Webhook 地址；如果你给机器人开了“自定义关键词”或“安全密钥”，把对应值也配上。

官方资料里明确提到：

- 自定义机器人支持 `text`、`post`、`interactive` 等消息类型
- 安全策略可以叠加设置：关键词、IP 白名单、安全密钥
- 安全密钥的签名流程是“时间戳 + 换行 + secret”，再做 `HMAC-SHA256` 和 `Base64`

推荐把敏感信息放环境变量，不直接写进 JSON：

```bash
export FEISHU_BOT_WEBHOOK='https://open.feishu.cn/open-apis/bot/v2/hook/你的机器人地址'
export FEISHU_BOT_SECRET='你的安全密钥'
```

然后把配置里的 `feishu.enabled` 改成 `true`。默认配置已经预留好环境变量名：

```json
"feishu": {
  "enabled": true,
  "webhook_url_env": "FEISHU_BOT_WEBHOOK",
  "secret_env": "FEISHU_BOT_SECRET",
  "keyword": "A股提醒",
  "timeout_seconds": 10
}
```

如果你在飞书机器人里配置了“自定义关键词”，这里的 `keyword` 必须和飞书那边要求的词一致，因为飞书会检查消息里是否包含这个关键词。

跑起来之后，命中规则会同时：

- 打印到终端
- 写入日志
- 弹桌面通知
- 发一条飞书文本消息

## 适用范围

这个版本适合“秒级轮询 + 条件提醒 + 模型解释”。

如果你要的是更强的真实时推送，比如盘口级订阅、逐笔、毫秒级回调，更建议后续换到 Futu OpenD 或券商/行情终端的订阅式接口。
