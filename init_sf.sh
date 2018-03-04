#!/usr/bin/env bash
# Composer Init
ls -l && pwd
pwd 
#composer install
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
#
#sh clear-dev.sh
#chown -R www-data:www-data . 
#chmod -R 777 var/*
#chmod -R 777 app/*



