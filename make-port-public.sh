#!/bin/bash
# Usage: ./make-port-public.sh <port>
PORT=$1

# Get the current Codespace name
CODESPACE_NAME=$(gh codespace view --json name -q .name)
# Make the port public using the GitHub CLI
gh api \
  -X PATCH \
  "user/codespaces/$CODESPACE_NAME/ports/$PORT" \
  -f visibility=public