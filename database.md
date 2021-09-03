1/
CREATE DATABASE `migration_test`
USE `migration_test`;

php artisan make:migration customer
php artisan make:factory CustomerFactory
php artisan make:seeder CustomerSeeder
php artisan make:model CustomerModel

php artisan migrate;
php artisan db:seed