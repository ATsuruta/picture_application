FROM php:7.3.6-fpm-alpine3.9

COPY php.ini /usr/local/etc/php/

RUN apk update && apk add --no-cache \
    freetype-dev libjpeg-turbo-dev libpng-dev libmcrypt-dev \
    git vim unzip tzdata nodejs-npm \
    libltdl \
    && cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime \
    && apk del tzdata libltdl libmcrypt-dev \
    && docker-php-ext-install pdo_mysql \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/src
