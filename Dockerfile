FROM php:8.2-apache

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    zip \
    git \
    libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql xml

# Habilitar mod_rewrite para Laravel
RUN a2enmod rewrite

# Crear espacio de trabajo y pegar los archivos
WORKDIR /var/www/html
COPY . /var/www/html
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Descargar composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-interaction


# Establecer permisos en el directorio storage
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
