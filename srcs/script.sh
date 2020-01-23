#!/bin/bash

# Installations
apt-get -y update
apt-get -y upgrade
apt-get -y install wget
apt-get -y install nginx
apt-get -y install mariadb-server mariadb-client
apt-get install -y php php-cgi php-mysqli php-pear php-mbstring php-gettext libapache2-mod-php php-common php-phpseclib php-mysql
apt-get -y install php-fpm php-mysql
mkdir /var/www/monsite
mv /perso/index.php /var/www/monsite
# SSL
apt-get -y install libnss3-tools
wget https://github.com/FiloSottile/mkcert/releases/download/v1.1.2/mkcert-v1.1.2-linux-amd64 -P /tmp
mv /tmp/mkcert-v1.1.2-linux-amd64 /tmp/mkcert
chmod 777 /tmp/mkcert
cp /tmp/mkcert /usr/local/bin/
mkcert -install
mkcert localhost
mv localhost-key.pem localhost.pem /var/www/monsite
#Config NGINX
mv /perso/monsite /etc/nginx/sites-available/
ln -s /etc/nginx/sites-available/monsite /etc/nginx/sites-enabled/
rm /etc/nginx/sites-available/default
rm /etc/nginx/sites-enabled/default
service nginx start
service nginx restart
service php7.3-fpm start
service mysql start
## MYSQL
#Creation d'une data-base pour lancer wordpress
echo "CREATE DATABASE wordpress" | mysql -u root
echo "CREATE USER 'User' IDENTIFIED BY 'password'" | mysql -u root
echo "GRANT USAGE ON *.* TO 'User'@localhost IDENTIFIED BY 'password'" | mysql -u root
echo "GRANT ALL privileges ON wordpress.* TO User@localhost" | mysql -u root
echo "FLUSH PRIVILEGES" | mysql -u root
service nginx restart
## Installation WordPress
wget https://wordpress.org/latest.tar.gz -P /tmp
mkdir /var/www/monsite/wordpress
tar xzf /tmp/latest.tar.gz --strip-components=1 -C /var/www/monsite/wordpress
mv /perso/wp-config.php /var/www/monsite/wordpress
## INSTALL PHPMYADMIN
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz -P /tmp
tar -zxvf /tmp/phpMyAdmin-4.9.0.1-all-languages.tar.gz -C /var/www/monsite/
mv /var/www/monsite/phpMyAdmin-4.9.0.1-all-languages /var/www/monsite/phpmyadmin
service nginx restart
service php7.3-fpm restart
service mysql restart
#boucle infinie 
tail -f /var/log/nginx/access.log /var/log/nginx/error.log
 