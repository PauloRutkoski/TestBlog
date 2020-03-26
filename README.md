# Test Blog



> ### Example of a totally functional blog using MVC architecture with Laravel Framework.


### Motivation 
> This website is a way to show my knowledges in MVC architecture using MySql, HTML 5, CSS 3, PHP 7 and frameworks like Laravel and Bootstrap 4.

------------

# Getting started

## Installation

Check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/6.x/installation)


Clone the repository

    https://github.com/PauloRutkoski/TestBlog.git

Switch to the repo folder

    cd Test-Blog

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**Command list**

    git clone https://github.com/PauloRutkoski/TestBlog.git
    cd Test-Blog
    composer install
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Database seeding

**Populate the database with seed data with relationships which includes posts and authors. This can help you to quickly start testing the website.** 

**Note** : The posts and authors are automatically created by [Faker](https://faker.readthedocs.io/en/master/). With Lorem Ipsum texts and titles, random images and random authors' names.   

Open the AuthorTableSeeder and PostTableSeeder set the property values as per your requirement

    database/seeds/AuthorTableSeeder.php
    database/seeds/PostTableSeeder.php

Run the database seeder and you're done

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh


----------

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------

### Third-Party Library

> This README file is based on a github user's one, [Thinkster](https://github.com/gothinkster) | [File](https://github.com/gothinkster/laravel-realworld-example-app/blob/master/readme.md).



