FROM php:8.2-fpm-alpine

LABEL maintainer="TheDarkNine <thedarknine@gmail.com>"

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