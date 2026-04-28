#!/usr/bin/env bash
# Called by deploy.ps1 after git pull when Node/npm is installed on the server.
set -euo pipefail
cd "$(dirname "$0")/.."
if command -v npm >/dev/null 2>&1; then
  npm ci
  npm run build
fi
