## Prerequisitos

###Executar os comandos no terminal:

* Instalar o sail

    ```sh
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
    ```


* Setar arquivo de configuração do ambiente do Docker
  ```sh
  cp .env.example .env
  ```


* Instanciar os containers do docker via sail
  ```sh
  ./vendor/bin/sail up -d
  ```


* Gerar chave da aplicação
  ```sh
  ./vendor/bin/sail php artisan key:generate
  ```


* Rodar a migração do banco
  ```sh
  ./vendor/bin/sail php artisan migrate:fresh --seed 
  ```


## Testando as rotas

### Abaixo são as rotas da api para consulta

* Visualizar a lista de todas as abelhas e as plantas que cada uma poliniza
```
http://localhost/api/polinizacao
```

* Visualizar a abelha 1 e as plantas que ela poliniza

```
http://localhost/api/polinizacao/1
```

* Visualizar  a lista de todas as plantas e seus respectivos meses de floração

```
http://localhost/api/floracao
```

* Visualizar  a lista de plantas que florescem em Janeiro e Fevereiro

```
http://localhost/api/floracao/[1,2]
```

## Visualizando na prática

### Clonar o repositório abaixo em outro diretorio no servidor onde a API está rodando!
 ### [Testa Apiário](https://github.com/rafacarv2/testa_apiario)
