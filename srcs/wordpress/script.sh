#!/bin/bash


$dbname =wordpress
$dbuser =user
$dbpass =password
$dbhost =mariadb


wp core download  --allow-root

wp core config --dbname=$dbname --dbuser=$dbuser --dbpass=$dbpass --dbhost=$dbhost --allow-root

wp core install --url="http://localhost/my-site" --title="My Awesome Site" --admin_user="admin" --admin_password="adminpassword" --admin_email="admin@example.com" --allow-root
 
wp user create "$WP_USER" "$WORDPRESS_USER_EMAIL" --role=author --user_pass="$WORDPRESS_USER_PASSWORD" --allow-root

