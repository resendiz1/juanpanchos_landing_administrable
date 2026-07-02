FROM php:8.3-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    nodejs \
    libcurl4-openssl-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        mbstring \
        zip \
        xml \
        curl \
        bcmath \
        gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN COMPOSER_MEMORY_LIMIT=-1 composer install \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader
    --no-dev









# Instalar dependencias JS y generar public/build/manifest.json
RUN npm install
RUN npm run build

RUN php artisan config:clear || true
RUN php artisan route:clear || true
RUN php artisan view:clear || true


RUN chmod -R 777 storage bootstrap/cache

CMD php artisan serve --host=0.0.0.0 --port=$PORT