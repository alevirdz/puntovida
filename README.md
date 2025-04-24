# Laravel + React Starter Kit

## Introduction

Our React starter kit provides a robust, modern starting point for building Laravel applications with a React frontend using [Inertia](https://inertiajs.com).

Inertia allows you to build modern, single-page React applications using classic server-side routing and controllers. This lets you enjoy the frontend power of React combined with the incredible backend productivity of Laravel and lightning-fast Vite compilation.

This React starter kit utilizes React 19, TypeScript, Tailwind, and the [shadcn/ui](https://ui.shadcn.com) and [radix-ui](https://www.radix-ui.com) component libraries.

## Official Documentation

Documentation for all Laravel starter kits can be found on the [Laravel website](https://laravel.com/docs/starter-kits).

## Contributing

Thank you for considering contributing to our starter kit! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## License

The Laravel + React starter kit is open-sourced software licensed under the MIT license.

# Settings to Docker

## Docker image creation
```bash
docker build -t laravel-app .
```

## Running Docker
```bash
docker compose up 
```

## Accessing to Docker Container with Bash
```bash
docker exec -it 98123862... bash
```

## Installing Dependencies 
```
composer install
```

## Restarting Apache2 Service
```
service apache2 restart
```

## Updating Package List NODE & NPM 
```
apt-get update
apt-get install -y nodejs npm
```


## Database Configuration for Docker Environment
```
DB_CONNECTION=mysql
DB_HOST=mysql-db-laravel
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=app
DB_PASSWORD=example_root_
```

# THEN

## Generate Laravel Application Key
This key will automatically be added to your .env file:
```
php artisan key:generate
```

```
service apache2 restart
```

## Running Database Migrations
```
php artisan migrate
```

## Installing Dependencies with npm
```
npm install 
```
## Running the enviroment server
```bash
npm run dev
```


### Some trouble: 

❌ **Error**: The stream or file "/var/www/html/storage/logs/laravel.log" could not be opened in append mode: Failed to open stream: Permission denied The exception occurred while attempting to log:

> Grant permissions on the folder...
```bash
chown -R www-data:www-data /var/www/html/storage
chmod -R 775 /var/www/html/storage
```


# 
Con docker exec corre php artisan serve
y desde la consola normal sin entrar al contenedor, ejecuta el run dev