#!/bin/bash

#On error for windows no such file entrypoint.sh, execute in terminal - dos2unix .docker\entrypoint.sh
composer install
php artisan key:generate
php artisan migrate

php-fpm