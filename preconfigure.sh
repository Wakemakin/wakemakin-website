#!/bin/bash
# Init
FILE="/tmp/out.$$"
GREP="/bin/grep"
#....
# Make sure only root can run our script
if [[ $EUID -ne 0 ]]; then
   echo "This script must be run as root" 1>&2
   exit 1
fi
apt-get update
apt-get install -y apache2 mysql-server phpmyadmin elinks
mkdir -vp /var/www/vhost 
# Handle apache configuration
mkdir -vp /tmp/conf/apache2
cp ./configurations/apache2.tar /tmp/conf/apache2
cd /tmp/conf/apache2
tar -xvf apache2.tar
rm apache2.tar
rm -rf /etc/apache2
mv ./* /etc
cd -
rm -rf /tmp/conf/apache2
# Handle php configuration
mkdir -vp /tmp/conf/php
cp ./configurations/php5.tar /tmp/conf/php
cd /tmp/conf/php
tar -xvf php5.tar
rm php5.tar
rm -rf /etc/php5
mv ./* /etc
cd -
rm -rf /tmp/conf/php
# HAndle phpmyadmin configuration
mkdir -vp /tmp/conf/phpmyadmin
cp ./configurations/phpmyadmin.tar /tmp/conf/phpmyadmin
cd /tmp/conf/phpmyadmin
tar -xvf phpmyadmin.tar
rm phpmyadmin.tar
rm -rf /etc/phpmyadmin
mv ./* /etc
cd -
rm -rf /tmp/conf/phpmyadmin
# Handle vhost directories (this could be split out)
mkdir -vp /var/www/vhost/wakemakin.com/htdocs
mkdir -vp /var/www/vhost/wakemakin.com/backups
mkdir -vp /var/www/vhost/wakemakin.com/cgi-bin
mkdir -vp /var/www/vhost/wakemakin.com/logs
cp -r htdocs/* /var/www/vhost/wakemakin.com/htdocs/
chown -R www-data:www-data /var/www/vhost/wakemakin.com/htdocs
chown -R www-data:www-data /var/www/vhost/wakemakin.com/backups
chown -R www-data:www-data /var/www/vhost/wakemakin.com/cgi-bin
chown -R www-data:www-data /var/www/vhost/wakemakin.com/logs
/etc/init.d/apache2 restart
elinks http://localhost/
