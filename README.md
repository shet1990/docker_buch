# Запуск Docker

docker-composer up --build

# Настройки для Laravel

docker exec -it app-back bash

php artisan key:generate

php artisan migrate

php artisan db:seed

php artisan queue:work