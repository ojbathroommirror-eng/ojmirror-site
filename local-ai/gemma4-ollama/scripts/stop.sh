#!/bin/zsh

set -euo pipefail

ROOT_DIR="$(cd "$(dirname "$0")/.." && pwd)"
PID_FILE="$ROOT_DIR/ollama.pid"

if [[ ! -f "$PID_FILE" ]]; then
  echo "No PID file found. Nothing to stop."
  exit 0
fi

PID="$(cat "$PID_FILE")"

if kill -0 "$PID" >/dev/null 2>&1; then
  kill "$PID"
  echo "Stopped Ollama PID $PID"
else
  echo "Process $PID is not running"
fi

rm -f "$PID_FILE"
