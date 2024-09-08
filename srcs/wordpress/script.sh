#!/bin/bash


dbname=wordpress
dbuser=aymen
dbpass=aymen
dbhost=mariadb



wp core download  --allow-root

wp core config --dbname=$dbname --dbuser=$dbuser --dbpass=$dbpass --dbhost=$dbhost --allow-root

wp core install --url="http://localhost/my-site" --title="My Awesome Site" --admin_user="admin" --admin_password="adminpassword" --admin_email="admin@example.com" --allow-root
 
wp user create "$WP_USER" "$WORDPRESS_USER_EMAIL" --role=author --user_pass="$WORDPRESS_USER_PASSWORD" --allow-root

service php7.4-fpm start

#sleep 2

sed -i 's|listen = /run/php/php7.4-fpm.sock|listen = 0.0.0.0:9000|' /etc/php/7.4/fpm/pool.d/www.conf

exec  /usr/sbin/php-fpm7.4 -F
# 
