# clone repo
git clone https://github.com/Sjiht/project0

# chmod all directories 711
find ~/project0/ -type d -exec chmod 711 {} \;

# chmod all PHP files 600
find ~/project0/ -type f -name *.php -exec chmod 600 {} \;

# chmod most everything else 644
find ~/project0/ -type f \( -name *.css -o -name *.gif -o -name *.html -o -name *.js -o -name *.jpg -o -name *.png -o -name .htaccess \) -exec chmod 644 {} \;

# run script to make database
in Chrome, type in the url: http://project0/create_database 



# append '127.0.0.1 project0' to /etc/hosts
sudo gedit /etc/hosts
add the line: 127.0.0.1 project0

# to view the website
to view the website go to http://project0/


