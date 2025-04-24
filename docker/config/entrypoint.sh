#cd /var/www/screenshot
#npm install
#service cron start
#service supervisor start
#pm2 start /var/www/screenshot/server.js -i 3
php-fpm &
tail -f /dev/null
