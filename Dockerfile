# 1. Gunakan PHP 8.3 FPM resmi sebagai base image
FROM php:8.3-fpm

# 2. Set working directory di dalam container
WORKDIR /var/www

# 3. Install dependensi sistem dan ekstensi PHP yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# 4. Install ekstensi PHP yang diperlukan (pdo_mysql, mbstring, zip, exif, pcntl, gd)
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# 5. Download dan install Composer resmi
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 6. Salin seluruh source code proyek ke dalam container
COPY . /var/www

# 7. Atur izin akses (permissions) folder storage & bootstrap/cache agar bisa diakses Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# 8. Expose port 9000 untuk PHP-FPM
EXPOSE 9000

# 9. Jalankan PHP-FPM server
CMD ["php-fpm"]