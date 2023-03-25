# menggunakan image PHP 8 dengan FPM (FastCGI Process Manager)
FROM php:8.2.4-cli

# menambahkan dependency yang diperlukan
RUN apt-get update && \
    apt-get install -y \
    libicu-dev \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl && \
    rm -rf /var/lib/apt/lists/*

# menginstall composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# menentukan working directory
WORKDIR /var/www/html

# menyalin kode aplikasi ke dalam container
COPY . .

# menjalankan perintah php artisan saat container dijalankan
CMD php artisan serve --host=0.0.0.0 --port=8000

