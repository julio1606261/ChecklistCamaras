FROM php:8.1.18-apache

ARG user
ARG uid

RUN apt-get update && apt-get install -y \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        libzip-dev

RUN docker-php-ext-install gd zip pdo_mysql mbstring exif pcntl bcmath

RUN a2enmod rewrite

RUN curl -sS http://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin --filename=composer

COPY default.conf /etc/apache2/sites-enabled/000-default.conf

RUN useradd -G www-data -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && chown -R $user:$user /home/$user

WORKDIR /var/www/html

USER $user