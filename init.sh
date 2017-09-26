#!/bin/bash

chmod -R o+w storage
chmod -R o+w bootstrap/cache

docker-compose exec app bash

php artisan key:generate
php artisan optimize
