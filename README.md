# Laravel demo app

## Setup instructions

1. Clone this repository into your html folder
2. cd into the repo and run `composer install`
3. Then run `php artisan key:generate` - this generates a security key that laravel uses internally to secure the application
4. Create an empty database
5. Make a copy of .env.example called .env and edit the DB connection details (same creds you would use in normal PDO)
6. Run `php artisan migrate` to generate your database structure
7. Run `php artisan serve --host=0.0.0.0 --port=8080` to run the app
