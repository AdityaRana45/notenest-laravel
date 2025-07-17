# Step 1: Use official PHP image with FPM
FROM php:8.2-fpm

# Step 2: Set working directory inside container
WORKDIR /var/www

# Step 3: Install required system packages and PHP extensions
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Step 4: Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Step 5: Copy project files to container
COPY . .

# Step 6: Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Step 7: Set file permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Step 8: Expose PHP-FPM port
EXPOSE 9000

# Step 9: Start PHP-FPM
CMD ["php-fpm"]
