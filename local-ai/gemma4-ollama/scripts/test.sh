#!/bin/zsh

set -euo pipefail

ROOT_DIR="$(cd "$(dirname "$0")/.." && pwd)"
BIN_PATH="$ROOT_DIR/bin/ollama"
MODEL="${MODEL:-gemma4:e2b}"
PROMPT="${PROMPT:-用两句话介绍 Gemma 4 的本地部署优势。}"

export OLLAMA_HOST="127.0.0.1:11434"
export OLLAMA_MODELS="$ROOT_DIR/.ollama/models"
export OLLAMA_HOME="$ROOT_DIR/.ollama"

if [[ ! -x "$BIN_PATH" ]]; then
  echo "Ollama binary not found at $BIN_PATH"
  exit 1
fi

"$ROOT_DIR/scripts/start.sh" >/dev/null
"$BIN_PATH" run "$MODEL" "$PROMPT"
