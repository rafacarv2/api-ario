### Prerequisitos

Executar os comandos no terminal:

* Instalar o sail

    ```sh
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
    ```


* Instanciar os containers do docker via sail
  ```sh
  cp .env.example .env
  ```


* Instanciar os containers do docker via sail
  ```sh
  ./vendor/bin/sail up -d
  ```


* Instanciar os containers do docker via sail
  ```sh
  ./vendor/bin/sail php artisan key:generate
  ```


* Rodar a migração do banco
  ```sh
  ./vendor/bin/sail php artisan migrate:fresh --seed 
  ```
