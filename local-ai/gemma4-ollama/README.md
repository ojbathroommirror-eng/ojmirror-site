# Gemma 4 Local Deployment

This directory contains an isolated local setup for running Gemma 4 with Ollama on macOS Apple Silicon.

## Layout

- `bin/` stores the Ollama binary after download
- `.ollama/` stores pulled models and local Ollama state
- `scripts/start.sh` starts the Ollama server from this directory
- `scripts/pull-model.sh` pulls the default Gemma 4 model
- `scripts/test.sh` sends a simple prompt to confirm inference works
- `scripts/stop.sh` stops the local Ollama server started by this setup

## Default model

The scripts default to `gemma4:e2b`, which is the safest starting point when system memory is unknown.

You can override it at runtime:

```bash
MODEL=gemma4:e4b ./scripts/pull-model.sh
MODEL=gemma4:e4b ./scripts/test.sh
```

## Usage

Start the local service:

```bash
./scripts/start.sh
```

Pull the model:

```bash
./scripts/pull-model.sh
```

Run a quick test:

```bash
./scripts/test.sh
```

Stop the service:

```bash
./scripts/stop.sh
```

## API

Once started, the local API listens on `http://127.0.0.1:11434`.

Example:

```bash
curl http://127.0.0.1:11434/api/generate \
  -d '{"model":"gemma4:e2b","prompt":"用一句话介绍你自己。","stream":false}'
```
