# clone repo into ~/vhosts/sjiht
cd ~/vhosts
git clone https://github.com/Sjiht/project0

# chmod all directories 711
find ~/vhosts/sjiht -type d -exec chmod 711 {} \;

# chmod all PHP files 600
find ~/vhosts/sjiht -type f -name *.php -exec chmod 600 {} \;

# chmod most everything else 644
find ~/vhosts/sjiht -type f \( -name *.css -o -name *.gif -o -name *.html -o -name *.js -o -name *.jpg -o -name *.png -o -name .htaccess \) -exec chmod 644 {} \;

# create a MySQL database for project
mysql -u mse_project0 -p -e 'CREATE DATABASE mse_project0'

# import SQL dump into database
mysql -u mse_project0 -p jharvard_alice < ~/vhosts/sjiht/mysql/mse_project0.sql

# change the value of $db['default']['database'] to be 'mse_project0'
gedit ~/vhosts/sjiht/application/config/database.php

# append '127.0.0.1 sjiht' to /etc/hosts
sudo gedit /etc/hosts
