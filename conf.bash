#!/bin/bash

sudo chmod 777 -R easytourApi/storage
sudo chmod 777 -R easytourApi/bootstrap/cache
sudo chmod 777 -R easytourWeb/storage
sudo chmod 777 -R easytourWeb/bootstrap/cache

sudo docker-compose up -d

sudo docker $( printf 'exec' ) -it easytourapi bash #!/usr/bin/env bash
php artisan migrate
'exit'
