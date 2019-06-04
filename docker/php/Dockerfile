FROM php:7.3-fpm-alpine

COPY php.ini /usr/local/etc/php/

RUN apk update && apk add --no-cache \
    freetype-dev libjpeg-turbo-dev libpng-dev libmcrypt-dev \
    git vim unzip tzdata \
    libmcrypt-dev \
    libltdl \
    && cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime \
    && apk del tzdata \
    && docker-php-ext-install pdo_mysql

WORKDIR /var/www/src

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
