#!/usr/bin/env bash
service mysql start 
composer install
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
chown -R www-data:www-data . 
chmod -R 777 var/*
chmod -R 777 app/*
