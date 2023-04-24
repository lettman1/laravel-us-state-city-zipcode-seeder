# Laravel US State, City & Zipcode Seeder
Laravel migrations and seeders for the United States' states, cities and zipcodes tables.

## Introduction
To reduce bloat, since these are just migrations to get all US states, cities and zipcodes, only take the migrations and seeders that are needed for your project. Initially it was states and cities, however zipcodes were needed later. Because of this there is overlap between cities and zipcodes.

## Requirements
* PHP 7+
* Laravel 7+

## Usage Steps
1. Clone the repo and move the contents of helpers, migrations, seeders and sql folders in the database folder into your project in the correct places.
2. Run migrations with `php artisan migrate`
3. Add a state model `php artisan make:model State`
* Check app/Models/State.php for how the file should look once complete. (feel free to make any changes based on project requirements)
4. Run the state seeder `php artisan db:seed --class=StateSeeder`
5. Run the city seeder `php artisan db:seed --class=CitySeeder`
6. Add a zipcode model `php artisan make:model Zipcode`
* Check app/Models/Zipcode.php for how the file should look.
7. Run the zipcode seeder `php artisan db:seed --class=ZipcodeSeeder`

## Notes
* I am looking for some php/laravel/lumen/yii/wordpress/drupal etc. work I can do 30 hours a week email me (alettmandevwork@gmail.com).
* Once the steps are complete all 3 tables should be funcitonal and ready to go. Let me know if there is anything that would make this better or more funcitonal to use in projects and I will try to get to it.