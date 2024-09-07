FROM debian:bullseye

RUN apt-get update && apt-get  -y install php7.4  php-fpm php-mysql

COPY ./script.sh  ./script.sh

RUN chmod +x ./script.sh

CMD  ["./script.sh"]