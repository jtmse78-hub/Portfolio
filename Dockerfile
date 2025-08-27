# Use an official PHP image with common extensions
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy Laravel project files into container
COPY . .

# Set file permissions (basic, optional improvement later)
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www

# Generate Laravel app key (optional if APP_KEY is already set in env)
# RUN php artisan key:generate

# Expose port 80 to the outside world
EXPOSE 80

# Start Laravel development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
