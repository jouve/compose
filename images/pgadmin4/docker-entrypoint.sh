#!/bin/sh

if [ ! -f /var/lib/pgadmin/pgadmin4.db ]; then
    if [ -z "${PGADMIN_SETUP_EMAIL}" -o -z "${PGADMIN_SETUP_PASSWORD}" ]; then
        echo 1>&2 "set PGADMIN_SETUP_EMAIL and PGADMIN_SETUP_PASSWORD to initialize the qlite db"
        exit 1
    fi
    python /usr/local/lib/python3.6/site-packages/pgadmin4/setup.py
fi

exec gunicorn \
  --workers 1 \
  --bind 0.0.0.0 \
  --access-logfile - \
  --error-logfile - \
  pgadmin4.pgAdmin4:app

