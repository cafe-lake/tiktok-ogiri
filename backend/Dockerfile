FROM php:8.1-fpm

COPY --from=composer:2.3.5 /usr/bin/composer /usr/bin/composer
COPY php.ini /etc/php/8.1/cli/conf.d/99-etc.ini

ADD docker-entrypoint.sh ./
# pdo_mysql（mysqlのドライバ）をインストールする
RUN docker-php-ext-install pdo_mysql
RUN chmod 755 ./docker-entrypoint.sh
RUN apt-get update
RUN apt-get -y install libzip-dev
RUN docker-php-ext-install zip
CMD ["./docker-entrypoint.sh"]

WORKDIR /var/www/laravel