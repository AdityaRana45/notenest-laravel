# Step 1: Use official PHP image
FROM php:8.2

# Step 2: Set working directory
WORKDIR /var/www

# Step 3: Install dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Step 4: Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Step 5: Copy project files
COPY . .

# Step 6: Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Step 7: Permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Step 8: Expose port (Render uses this)
EXPOSE 8000

# ✅ Step 9: Serve public folder properly
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
