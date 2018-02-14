FROM python:3-alpine

ARG PGADMIN_VERSION=2.1
RUN apk add --no-cache libpq postgresql-dev gcc musl-dev && \
    pip install https://ftp.postgresql.org/pub/pgadmin/pgadmin4/v${PGADMIN_VERSION}/pip/pgadmin4-${PGADMIN_VERSION}-py2.py3-none-any.whl && \
    apk del --no-cache postgresql-dev gcc musl-dev && \
    rm -rf /root/.cache

RUN pip install gunicorn && \
    rm -rf /root/.cache

COPY docker-entrypoint.sh /docker-entrypoint.sh

EXPOSE 8000

VOLUME /var/lib/pgadmin /var/log/pgadmin

CMD [ "/docker-entrypoint.sh" ]

