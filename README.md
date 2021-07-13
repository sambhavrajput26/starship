<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Star Wars Project

Below are the steps to install the Project on your Local Machine.

- Clone this Project to your local machine by using "git clone https://github.com/sambhavrajput26/starship.git" command.
- Once project is cloned open the project via command line and enter into the project root directory via command "cd starship".
- Next step once you inside the main folder directory enter "composer update" command via CLI and wait until all packages get installed.
- Open your MYSQL and create database with name "starships_api". Then open ".env" file from the main root of the project and update your "DB_USERNAME" and "DB_PASSWORD" according to your local machine as of mine username was "root" and password was blank.
- After that enter "php artisan migrate" command which will create the tables through migrations automatically.
- Once Migration is done successfully then enter "php artisan db:seed --class=StarshipTableSeeder" to run the seeder to enter the details in the created table.
- After this run the server by entering "php artisan serve" command and project will start running.
- Yayy!! Project is UP now and you can hit "http://localhost:8000/starships" in the URL bar to list all the Starwarships.

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Requirements for Project

- PHP version 7.4
- Laravel version 8 (Latest)
- XAMPP
- MYSQL Database


