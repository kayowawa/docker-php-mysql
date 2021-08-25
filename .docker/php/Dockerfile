FROM php:7.4-fpm-alpine

ENV TZ Asia/Tokyo
ENV COMPOSER_ALLOW_SUPERUSER 1

# install Lib
RUN apk update && \
    apk add --no-cache --virtual .php-builds oniguruma-dev git zip unzip

# add php,apache-module
RUN docker-php-ext-install mbstring && \
    docker-php-ext-enable mbstring

RUN apk add libzip-dev
RUN docker-php-ext-install pdo_mysql zip

# RUN a2enmod rewrite

WORKDIR /var/www/html

# Install opcache apcu
# RUN docker-php-ext-install opcache
# RUN pecl install apcu
# RUN docker-php-ext-enable apcu

#COPY php.ini /usr/local/etc/php/

# install Composer
# RUN curl -sS https://getcomposer.org/installer | php && \
#     mv composer.phar /usr/local/bin/composer && \
#     chmod +x /usr/local/bin/composer

# WORKDIR /app

