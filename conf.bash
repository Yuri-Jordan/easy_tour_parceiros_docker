#!/bin/bash
# Dá permissões à estas pastas pra o Servidor
sudo chmod 777 -R easytourApi/storage
sudo chmod 777 -R easytourApi/bootstrap/cache
sudo chmod 777 -R easytourWeb/storage
sudo chmod 777 -R easytourWeb/bootstrap/cache
# Roda o docker-compose que sobe os containers
sudo docker-compose up -d

sleep 5 # Espera 5 segundos para que o servidor de banco possa inicializar
idContainer=$(sudo docker ps -aqf "name=easytourapi") # Salva o id do container da api
sudo docker exec $idContainer php artisan migrate # Cria tabelas no banco
