# Setup Project

## Requirements

### Application requirements

These are must have application requiremnets.

- PHP version 7.4.x or above
- MySql version 8 or above

## Setup

copy .env.example as .env

add your database configuration in .env file (db name, db user, password and host)

Run below commands:

```
composer install

php artisan key:generate
php artisan migrate
php artisan storage:link
./magic-commands.sh

php artisan serve

## Import dummy data if require

php artisan tinker

Product::factory()->count(50)->create();

Review::factory()->count(50)->create();

exit

## api

Register API:       URL:http://localhost:8000/api/register
Login API:          URL:http://localhost:8000/api/login
Product API:        URL:http://127.0.0.1:8000/api/products
Product Single API: URL:http://127.0.0.1:8000/api/products/4
Product Review API: URL:http://127.0.0.1:8000/api/products/4/reviews

## Run api collection in postman
--see file Test api.postman_collection.json import in postman
