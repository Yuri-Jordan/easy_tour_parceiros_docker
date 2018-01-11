#!/bin/bash

cd easy_tour_parceiros_docker

sudo chmod 777 -R easytourApi/storage
sudo chmod 777 -R easytourApi/bootstrap/cache
sudo chmod 777 -R easytourWeb/storage
sudo chmod 777 -R easytourWeb/bootstrap/cache

sudo docker-compose up -d

sudo docker exec -it easytourapi #!/usr/bin/env bash
php artisan migrate
exit
