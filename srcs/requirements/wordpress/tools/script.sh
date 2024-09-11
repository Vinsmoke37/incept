#!/bin/bash





while ! mariadb -h mariadb -u $dbuser -p$dbpass $dbname -e "SELECT 1;" &>/dev/null; do
    echo "I Sleep hh"
    sleep 1
done



echo "MariaDB is up and running!"


if [ ! -f /var/www/html/wp-config.php ];then
wp core download  --allow-root

wp core config --dbname=$dbname --dbuser=$dbuser --dbpass=$dbpass --dbhost=$dbhost --allow-root

wp core install --url="$url" --title="$title" --admin_user="$uadmin" --admin_password="$padmin" --admin_email="$emailadmin" --allow-root
 
wp user create "$WP_USER" "$WPEMAIL" --role=author --user_pass="$WPPASSWORD" --allow-root

fi

mkdir -p /run/php

sed -i 's|listen = /run/php/php7.4-fpm.sock|listen = 0.0.0.0:9000|' /etc/php/7.4/fpm/pool.d/www.conf



exec  /usr/sbin/php-fpm7.4 -F

