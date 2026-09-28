# ── Stage 1: Build Frontend Assets (Vite) ─────────────────────
FROM node:22-alpine AS frontend
WORKDIR /app

# Copy manifest package manager
COPY package.json package-lock.json* ./
RUN npm install

# Copy aset & konfigurasi Vite
COPY resources/ resources/
COPY public/ public/
COPY vite.config.js ./

# Build aset JS/CSS
RUN npm run build

# ── Stage 2: Build Composer Dependencies ────────────────────
FROM composer:latest AS vendor
WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --no-interaction \
    --no-progress \
    --prefer-dist \
    --optimize-autoloader \
    --no-scripts

# ── Stage 3: Final Production PHP-FPM Image ─────────────────
FROM php:8.3-fpm-alpine AS production

# Install dependensi sistem minimal & ekstensi PHP
RUN apk add --no-cache \
    bash \
    curl \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libxml2-dev \
    libzip-dev \
    oniguruma-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        zip

# Copy biner Composer dari image resmi composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy source code aplikasi
COPY . .

# Copy vendor & hasil build frontend dari stage sebelumnya
COPY --from=vendor /app/vendor ./vendor
COPY --from=frontend /app/public/build ./public/build

# Set permission folder storage & cache untuk www-data
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]