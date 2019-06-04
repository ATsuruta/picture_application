FROM php:7.3-fpm-alpine

COPY php.ini /usr/local/etc/php/

RUN apk update && apk add --no-cache \
    freetype-dev libjpeg-turbo-dev libpng-dev libmcrypt-dev \
    git vim unzip tzdata \
    libmcrypt-dev \
    libltdl \
    && cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime \
    && apk del tzdata \
    && rm -rf /var/cache/apk/*

#Composer install
# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
# RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
# RUN php composer-setup.php
# RUN php -r "unlink('composer-setup.php');"
# RUN mv composer.phar /usr/local/bin/composer
# 
# ENV COMPOSER_ALLOW_SUPERUSER 1
# 
# ENV COMPOSER_HOME /composer
# 
# ENV PATH $PATH:/composer/vendor/bin
# 
WORKDIR /var/www

# RUN composer global require "laravel/installer"
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
