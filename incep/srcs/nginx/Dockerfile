FROM debian:bullseye

RUN apt-get -y update && apt-get -y install nginx

RUN apt-get -y install php7.4 && apt  -y install curl php-fpm php-mysql

RUN curl -O https://wordpress.org/latest.tar.gz && \
    tar xzvf latest.tar.gz && \
    rm latest.tar.gz && \
    mv wordpress /var/www/html/

#RUN apt  -y install mariadb-server && mysql_secure_installation



COPY ./conf/default.conf /etc/nginx/conf.d/default.conf
# COPY ./conf/wp-config.php /var/www/html/wordpress/wp-config.php
COPY ./tools/script.sh /script.sh

RUN  chmod 777 script.sh

#EXPOSE 8080

CMD [ "./script.sh"]