#!/bin/bash
# filepath: /workspaces/DSWP/export-db.sh
# to download database from MYSQL to repository run in Command line : ./export-db.sh

set -a
source .env
set +a

DB_CONTAINER="wordpress-test-db-1"
DB_NAME="${DATABASE:-wordpress}"
DB_USER="root"
DB_PASS="${ROOT_PASSWORD}"

if [ -z "$DB_USER" ] || [ -z "$DB_PASS" ]; then
  echo "Error: USERNAME and USER_PASSWORD environment variables must be set."
  exit 1
fi

docker exec "$DB_CONTAINER" \
  mysqldump -u"$DB_USER" -p"$DB_PASS" "$DB_NAME" > db-dumps/wordpress.sql

echo "Database exported to db-dumps/wordpress.sql"