
FROM laradock/php-fpm:2.2-7.2
RUN apt-get update && apt-get install unzip
RUN (php -r "readfile('https://getcomposer.org/installer');" | php) && mv composer.phar /usr/local/bin/composer
RUN pecl install redis-5.0.1 && docker-php-ext-enable redis
RUN pecl install swoole-4.4.2 && docker-php-ext-enable swoole
EXPOSE 9000