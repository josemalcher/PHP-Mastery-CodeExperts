FROM php:8.3

# Instalar dependências
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip

# Instalar extensões do PHP
RUN docker-php-ext-install zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

CMD composer install; php -S 0.0.0.0:8000

EXPOSE 8000
