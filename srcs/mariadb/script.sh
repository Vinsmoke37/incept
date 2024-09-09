#!/bin/bash



service mariadb start 

mariadb -e "CREATE DATABASE IF NOT EXISTS wordpress;"
mariadb -e "CREATE USER IF NOT EXISTS 'aymen'@'%' IDENTIFIED BY 'aymen';"
mariadb -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'aymen'@'%';"
mariadb -e "FLUSH PRIVILEGES;"

sed -i "s/bind-address/#bind-address/g" /etc/mysql/mariadb.conf.d/50-server.cnf

service mariadb stop

mysqld --bind 0.0.0.0