## Laravel 7 Dev Test

## Setup
 Markup : - Run composer install on your cmd or terminal
          - Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
          - Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
          - Run php artisan key:generate
          - Run php artisan migrate:fresh --seed
          - Run php artisan serve

## Laravel Features Used
Markup : - Resource Collection
         - Form Request Validation
         - Migrations & Seeders
         - Auth Modification
         - Route Prefix, Group, Middleware
         - Eloquent ORM
         - Resource Controller
         - Service Container
         - Route Model Binding
         - Pagination