FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
        libpq-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev

# Install the PHP iconv library
RUN docker-php-ext-install -j$(nproc) iconv
# Configure GD library
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
# Install the PHP GD library
RUN docker-php-ext-install -j$(nproc) gd

# Install the PHP pdo_pgsql extention
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
        && docker-php-ext-install -j$(nproc) \
        	pdo \
        	pdo_pgsql \
        	pgsql