#!/usr/bin/env bash

chown -R www-data:www-data app/logs
rm -rf app/logs/*
# Pause pour permettre au container mysql de se lancer
sleep 15
# Mise en place de la base de données avec doctrine
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
php bin/console cache:clear --env=prod
php bin/console doctrine:database:import symfony.sql
chmod 777 -R app/logs

source /etc/apache2/envvars
exec apache2 -D FOREGROUND
