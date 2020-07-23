FROM laradock/php-fpm:latest-7.4
RUN apt-get update && apt-get install unzip
RUN (php -r "readfile('https://getcomposer.org/installer');" | php) && mv composer.phar /usr/local/bin/composer
RUN composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
RUN (mkdir /usr/local/phpcs && cd /usr/local/phpcs && composer require squizlabs/php_codesniffer && composer require phpcompatibility/php-compatibility)
RUN (/usr/local/phpcs/vendor/bin/phpcs --config-set installed_paths /usr/local/phpcs/vendor/phpcompatibility/php-compatibility/PHPCompatibility && ln -s /usr/local/phpcs/vendor/bin/phpcs /usr/bin/phpcs)
EXPOSE 9000