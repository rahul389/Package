# This is for role management package

## This is to create custom package for role management.

Install via composer
composer require rsoftech/role

Then publish it 
php artisan vendor:publish

Then run migration and seeder
php artisan migrate
php artisan db:seed --class=PermissionsTableSeeder