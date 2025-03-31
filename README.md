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

## Creación de la imagen docker

docker build -t laravel-app .

# Ejecutamos el contenedor
docker compose up 

# entrar al contenedor
docker exec -it 98123862192 bash

# Instalar el composer
composer install

# Reinciar el servidor de apache para que reconozca la instalación de composer
service apache2 restart

# descargar node sino existe:
apt-get update
apt-get install -y nodejs npm




# Crear tu archivo de conexión con env
tu archivo env:

DB_CONNECTION=mysql
DB_HOST=mysql-db-laravel
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=app
DB_PASSWORD=root_


# genera la clave de cifrado de laravel
php artisan key:generate

- automaticamente se agregará esa clave en tu env
APP_KEY=base64:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx=

- Reinicia:
service apache2 restart

# Instalar las migraciones
php artisan migrate


# npm para react asi descargar las dependencias
npm install 

# ejecuta tu npm 
npm run dev





# algunos problemas: 

The stream or file "/var/www/html/storage/logs/laravel.log" could not be opened in append mode: Failed to open stream: Permission denied The exception occurred while attempting to log:
otorgar persmisos:
chown -R www-data:www-data /var/www/html/storage
chmod -R 775 /var/www/html/storage
