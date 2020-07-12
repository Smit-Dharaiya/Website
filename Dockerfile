FROM php:7.4.7-apache

RUN apt-get update
RUN apt-get install nano
RUN docker-php-ext-install mysqli
RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini
RUN chmod -R 755 /var/www/html/*

WORKDIR /var/www/html

COPY ./ ./

EXPOSE 3306/tcp
