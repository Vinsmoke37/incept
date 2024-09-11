#!/bin/bash



service mariadb start 


echo $dbname

mariadb -e "CREATE DATABASE IF NOT EXISTS $dbname;"
mariadb -e "CREATE USER IF NOT EXISTS '$dbuser'@'%' IDENTIFIED BY '$dbpass';"
mariadb -e "GRANT ALL PRIVILEGES ON $dbname.* TO '$dbuser'@'%';"
mariadb -e "FLUSH PRIVILEGES;"

sed -i "s/bind-address/#bind-address/g" /etc/mysql/mariadb.conf.d/50-server.cnf

service mariadb stop

mysqld --bind 0.0.0.0