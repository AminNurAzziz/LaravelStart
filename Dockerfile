FROM laravel-app

WORKDIR /var/www/html

# Install dependensi yang dibutuhkan
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && apt-get clean

# Enable ekstensi yang diperlukan untuk Laravel
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Instal Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy semua file proyek ke dalam image Docker
COPY . .

# Install dependensi proyek dengan Composer
RUN composer install

# Jalankan perintah Artisan yang diperlukan (misalnya: php artisan migrate)
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
