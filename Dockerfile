FROM php:8.4-fpm

ENV LANG=ja_JP.UTF-8 \
    LANGUAGE=ja_JP:ja \
    LC_ALL=ja_JP.UTF-8 \
    COMPOSER_ALLOW_SUPERUSER=1

RUN apt-get update && apt-get install -y --no-install-recommends \
        curl \
        unzip \
        libzip-dev \
        locales \
        bash \
    && docker-php-ext-install -j$(nproc) zip opcache \
    && pecl install xdebug \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && echo "ja_JP.UTF-8 UTF-8" >> /etc/locale.gen \
    && locale-gen

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /app

RUN echo "alias phpunit='vendor/bin/phpunit'" >> ~/.bashrc \
    && echo "alias pest='vendor/bin/pest'" >> ~/.bashrc