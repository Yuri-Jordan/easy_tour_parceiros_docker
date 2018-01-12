#!/bin/bash

sudo chmod 777 -R easytourApi/storage
sudo chmod 777 -R easytourApi/bootstrap/cache
sudo chmod 777 -R easytourWeb/storage
sudo chmod 777 -R easytourWeb/bootstrap/cache

sudo docker-compose up -d

sleep 10
idContainer=$(sudo docker ps -aqf "name=easytourapi")
sudo docker exec $idContainer php artisan migrate
