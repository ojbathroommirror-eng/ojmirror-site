#!/bin/zsh

set -euo pipefail

ROOT_DIR="$(cd "$(dirname "$0")/.." && pwd)"
BIN_PATH="$ROOT_DIR/bin/ollama"
PID_FILE="$ROOT_DIR/ollama.pid"
LOG_FILE="$ROOT_DIR/ollama.log"

if [[ ! -x "$BIN_PATH" ]]; then
  echo "Ollama binary not found at $BIN_PATH"
  echo "Install it first, then rerun this script."
  exit 1
fi

if [[ -f "$PID_FILE" ]]; then
  PID="$(cat "$PID_FILE")"
  if kill -0 "$PID" >/dev/null 2>&1; then
    echo "Ollama is already running with PID $PID"
    exit 0
  fi
  rm -f "$PID_FILE"
fi

export OLLAMA_HOST="127.0.0.1:11434"
export OLLAMA_MODELS="$ROOT_DIR/.ollama/models"
export OLLAMA_HOME="$ROOT_DIR/.ollama"

mkdir -p "$OLLAMA_MODELS"

nohup "$BIN_PATH" serve >"$LOG_FILE" 2>&1 &
echo $! >"$PID_FILE"

sleep 2

if kill -0 "$(cat "$PID_FILE")" >/dev/null 2>&1; then
  echo "Ollama started on http://127.0.0.1:11434"
  echo "Log file: $LOG_FILE"
else
  echo "Failed to start Ollama. Check $LOG_FILE"
  exit 1
fi
