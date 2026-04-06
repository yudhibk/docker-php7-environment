FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    git curl zip unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libsodium-dev \
    libicu-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        mysqli \
        zip \
        mbstring \
        sodium \
        intl \
        gd

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite

RUN echo '<Directory /var/www/html>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' > /etc/apache2/conf-available/custom.conf \
    && a2enconf custom

WORKDIR /var/www/html