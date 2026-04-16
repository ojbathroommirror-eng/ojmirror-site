#!/bin/zsh

set -euo pipefail

ROOT_DIR="$(cd "$(dirname "$0")/.." && pwd)"
MODEL="${MODEL:-gemma4:e2b}"

"$ROOT_DIR/scripts/start.sh" >/dev/null

curl http://127.0.0.1:11434/api/generate \
  -H "Content-Type: application/json" \
  -d "{\"model\":\"$MODEL\",\"prompt\":\"用一句中文说明本地运行大模型的优点。\",\"stream\":false}"
