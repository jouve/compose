FROM php:apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN mkdir -p /var/testlink/logs /var/testlink/upload_area && \
    chown -R www-data:www-data . /var/testlink/logs /var/testlink/upload_area

USER www-data

ARG TESTLINK_VERSION
RUN curl -L https://github.com/TestLinkOpenSourceTRMS/testlink-code/archive/$TESTLINK_VERSION.tar.gz | tar xz --strip 1

COPY config_db.inc.php .

USER root

VOLUME /var/testlink/logs /var/testlink/upload_area

