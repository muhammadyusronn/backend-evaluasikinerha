# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).<br>
Documentation for the API can be found on the [Lumen website](https://documenter.getpostman.com/view/12244527/TzecDQxJ).<br>
COllections for the API can be found on the [Lumen website](https://www.getpostman.com/collections/dce5cc690086bdbd3f37).<br>

## How to run this repository
<ul>
    <li>Clone this repository with this command-> git clone https://github.com/muhammadyusronn/backend-evaluasikinerja.git</li>
    <li>Run this command -> cd backend-evaluasikinerja</li>
    <li>Run this command -> cp .env.example .env</li>
    <li>Checkout to branch development -> git checkout development</li>
    <li>Run this command -> composer install</li>
    <li>Run this command -> php artisan jwt:scret</li>
    <li>Set your database in .env -> DB_DATABASE=evaluasikinerja DB_USERNAME=root DB_PASSWORD=</li>
    <li>Run this command -> php artisan migrate:fresh --seed</li>
    <li>Run this command -> php -S localhost:8000 -t public</li>
</ul>

