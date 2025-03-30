FROM php:8.2-apache

RUN apt-get update && \
    apt-get install -y procps && \
    docker-php-ext-install pdo pdo_mysql && \
    mkdir /var/www/html/uploads && \
    chmod 777 /var/www/html/uploads

COPY www/ /var/www/html/

EXPOSE 80
