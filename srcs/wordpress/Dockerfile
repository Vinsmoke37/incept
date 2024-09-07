FROM debian:bullseye

RUN apt-get update && apt-get upgrade

RUN apt-get -y install -y curl php7.4 php-fpm  php7.4-mysql 

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x wp-cli.phar

RUN mv wp-cli.phar /usr/local/bin/wp

WORKDIR /var/www/html


