#!/bin/bash

# Export the database before shutting down containers
./export-db.sh

# Now bring down the containers (with or without -v)
docker compose down "$@"