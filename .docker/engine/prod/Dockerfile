FROM php:7.1.0-fpm
MAINTAINER Laurent Masforne <laurent.masforne@gmail.com>
ENV PHP_APCU_VERSION 5.1.8
RUN apt-get update \
    && apt-get install -y \
        libicu-dev \
        zlib1g-dev \
    && docker-php-source extract \
    && curl -L -o /tmp/apcu-$PHP_APCU_VERSION.tgz https://pecl.php.net/get/apcu-$PHP_APCU_VERSION.tgz \
    && tar xfz /tmp/apcu-$PHP_APCU_VERSION.tgz \
    && rm -r \
        /tmp/apcu-$PHP_APCU_VERSION.tgz \
    && mv apcu-$PHP_APCU_VERSION /usr/src/php/ext/apcu \
    && docker-php-ext-install \
        apcu \
        intl \
        mbstring \
        mysqli \
        zip \
    && pecl install apcu_bc-1.0.3 \
    && docker-php-source delete \
    && php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/local/bin --filename=composer \
    && chmod +x /usr/local/bin/composer

