
# Setup Docker Laravel 10 com PHP 8.1
[Assine a Academy, e Seja VIP!](https://academy.especializati.com.br)

### Step by step
Clone Repository
```sh
git clone -b laravel-10-com-php-8.1 https://github.com/especializati/setup-docker-laravel.git app-laravel
```
```sh
cd app-laravel
```

Create .env file
```sh
cp .env.example .env
```

Update the environment variables of the .env file
```dosini
APP_NAME=EspecializaTi
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```

upload the project containers
```sh
docker-compose up -d
```

Access the container app
```sh
docker-compose exec app bash
```

Install the project dependecies
```sh
composer install
```

Generate the key from the laravel project
```sh
php artisan key:generate
```

Access the project:
[http://localhost:8989](http://localhost:8989)
