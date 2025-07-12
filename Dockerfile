FROM php:8.2-fpm

# تثبيت بعض المتطلبات
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    libzip-dev \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# نسخ ملفات المشروع
COPY . /var/www
COPY .env /var/www/.env
WORKDIR /var/www

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader

EXPOSE 8080
CMD php artisan serve --host=0.0.0.0 --port=8080
