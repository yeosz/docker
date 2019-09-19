
FROM laradock/php-fpm:2.2-7.1
RUN apt-get update && apt-get install unzip
RUN (php -r "readfile('https://getcomposer.org/installer');" | php) && mv composer.phar /usr/local/bin/composer
RUN curl -L -o /tmp/phptrace.tar.gz "https://github.com/Qihoo360/phptrace/archive/v1.0.1-beta.tar.gz" \
    && mkdir -p phptrace \
    && tar -C phptrace -zxvf /tmp/phptrace.tar.gz \
    && ( \
        cd phptrace/phptrace-1.0.1-beta/extension \
        && phpize \
        && ./configure \
        && make \
        && make install \
    ) \
    && rm -r phptrace \
    && rm /tmp/phptrace.tar.gz \
    && docker-php-ext-enable trace
RUN pecl install redis-5.0.1 && docker-php-ext-enable redis
EXPOSE 9000