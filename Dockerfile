FROM php:8.2-fpm-alpine

# Install dependencies
# RUN apt-get update && apt-get install -y \
#     build-essential \
#     libpng-dev \
#     libonig-dev \
#     libxml2-dev \
#     zip \
#     curl \
#     unzip \
#     git \
#     libzip-dev \
#     libfreetype6-dev \
#     libjpeg62-turbo-dev \
#     libpng-dev && \
#     docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Expose port 9000 and start php-fpm server
# EXPOSE 9000
# CMD ["php-fpm"]


RUN apk update && apk add \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip 

RUN docker-php-ext-install pdo pdo_mysql \
    && apk --no-cache add nodejs npm

# Clear cache
#RUN apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www

# Remove default server definition
RUN rm -rf /var/www/html

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www

# Change current user to www
USER www-data
