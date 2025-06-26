#!/bin/bash

# Get the current Codespace root URL
if [ -z "$CODESPACE_NAME" ]; then
  echo "CODESPACE_NAME environment variable not set. Are you running in Codespaces?"
  exit 1
fi

NEW_URL="https://${CODESPACE_NAME}-80.app.github.dev"

# Use sed to replace any URL matching the pattern with the new URL
# This matches https://<anything>-80.app.github.dev
sed -E -i "s|https://[a-zA-Z0-9.-]+-80\.app\.github\.dev|$NEW_URL|g" db-dumps/wordpress.sql

echo "Replaced all Codespace URLs with $NEW_URL in db-dumps/wordpress.sql"