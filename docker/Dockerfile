FROM dfox288/partymeister-php-82-prod:1.0.1

WORKDIR /var/www
COPY . /var/www

RUN cp .env.example .env
RUN composer install --no-dev
RUN php artisan key:generate

USER www-data
COPY docker/config/crontab-www-data /tmp
COPY docker/config/entrypoint.sh /var/www

RUN crontab /tmp/crontab-www-data

WORKDIR /var/www/screenshot

USER root
RUN npm install
RUN chmod +x /var/www/entrypoint.sh

WORKDIR /var/www

ENTRYPOINT /var/www/entrypoint.sh
