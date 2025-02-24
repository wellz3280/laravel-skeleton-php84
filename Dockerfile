FROM php:8.4-fpm

ARG APP_DIR=/var/www/app

RUN apt-get update -y && apt-get install -y --no-install-recommends \
    apt-utils \
    wget \
    sudo \
    supervisor

RUN apt-get update && apt-get install -y \
    autoconf \
    libpng-dev \
    libpq-dev \
    libxml2-dev \
    libzip-dev \
    unzip \
    zlib1g-dev \
    libssl-dev \
    libonig-dev \
    libicu-dev \
    git \
    nginx \
    supervisor \
    && docker-php-ext-install mysqli pdo pdo_mysql pdo_pgsql pgsql session xml bcmath intl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR $APP_DIR

COPY . $APP_DIR

RUN chown -R www-data:www-data $APP_DIR/storage $APP_DIR/bootstrap/cache \
    && chmod -R 775 $APP_DIR/storage $APP_DIR/bootstrap/cache

RUN composer install --no-dev --optimize-autoloader

RUN mkdir -p /etc/nginx/sites-available

COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf
COPY ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80 443 9000

CMD ["supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
