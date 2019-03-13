FROM php:7.2-fpm


#RUN apt-get update
#RUN pecl install yaml

RUN apt-get update \
    && apt-get install -y gcc make autoconf libc-dev pkg-config \
    && apt-get install -y libyaml-dev \
    && pecl install yaml

RUN docker-php-ext-install mysqli

COPY ./php.ini-development /usr/local/etc/php/php.ini