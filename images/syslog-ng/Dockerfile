FROM alpine:latest

RUN apk add --no-cache syslog-ng && \
    rm /etc/syslog-ng/*

COPY syslog-ng.conf /etc/syslog-ng

CMD [ "syslog-ng", "--stderr", "--foreground" ]

