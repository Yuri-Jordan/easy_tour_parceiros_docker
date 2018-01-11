#!/bin/bash

sudo chmod 777 -R easytourApi/storage
sudo chmod 777 -R easytourApi/bootstrap/cache
sudo chmod 777 -R easytourWeb/storage
sudo chmod 777 -R easytourWeb/bootstrap/cache

sudo docker-compose up -d

comando="sudo docker exec -it easytourapi bash"
exec $comando
php artisan migrate
'exit'
