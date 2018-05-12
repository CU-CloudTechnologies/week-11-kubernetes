FROM php:7.1.8-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends libpq-dev \
    && docker-php-ext-install mysqli pdo_pgsql pdo_mysql

COPY ./src/* /var/www/html
EXPOSE 80