#!/bin/bash

source ./.env

# prod (lolipop)

if [ $APP_ENV = 'local' ]; then
  echo 'ENV::'$APP_ENV;
    find ./ -name "* 2.php" -type f -exec rm -f {} +;
    find ./ -name "* 3.php" -type f -exec rm -f {} +;
    find ./ -name "* 4.php" -type f -exec rm -f {} +;
    find ./ -name "* 5.php" -type f -exec rm -f {} +;
    # composer
    ./vendor/bin/sail php composer.phar update;
    # laravel
    ./vendor/bin/sail artisan optimize:clear;
    ./vendor/bin/sail artisan optimize;
    ./vendor/bin/sail artisan view:cache;
    ./vendor/bin/sail php composer.phar dump-autoload;
    
elif [ $APP_ENV = 'dev' ]; then
  echo 'ENV::dev';

    # composer
    /usr/local/php/8.2/bin/php composer.phar update;
    # laravel
    /usr/local/php/8.2/bin/php artisan clear-compiled;
    /usr/local/php/8.2/bin/php artisan clear;
    /usr/local/php/8.2/bin/php artisan cache:clear;
    /usr/local/php/8.2/bin/php artisan view:clear;
    /usr/local/php/8.2/bin/php artisan route:clear;
    /usr/local/php/8.2/bin/php artisan config:clear;
    # schedule(cron)
    /usr/local/php/8.2/bin/php artisan schedule:run;
else
  echo 'ENV::prod';

    # composer
    /usr/local/php/8.2/bin/php composer.phar update;
    # laravel
    /usr/local/php/8.2/bin/php artisan clear-compiled;
    /usr/local/php/8.2/bin/php artisan clear;
    /usr/local/php/8.2/bin/php artisan cache:clear;
    /usr/local/php/8.2/bin/php artisan view:clear;
    /usr/local/php/8.2/bin/php artisan route:clear;
    /usr/local/php/8.2/bin/php artisan config:clear;
    # schedule(cron)
    /usr/local/php/8.2/bin/php artisan schedule:run;
fi

# /usr/local/php/7.4/bin/php composer.phar update

# start up