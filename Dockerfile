FROM php:7.4.7-apache

RUN apt-get update
RUN apt-get install nano
RUN docker-php-ext-install mysqli

WORKDIR /var/www/html

COPY ./ ./

EXPOSE 3306/tcp
