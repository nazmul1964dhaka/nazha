Lesson 1
-------------------------------------

create project
composer create-project --prefer-dist
   laravel/laravel naha

run - 
http://localhost:8081/naha/public/

run server
php artisan serve
   127.0.0.1:8000

M - app->Models
V - resources->views
C - app->Http->Controllers

routes->web.php
	
	Route::get('rootName',function(){echo "Hello";});
	Route::get('rootName',function(){ return view('welcome');});
	
Route::get('h/',function(){ echo "Hello"; });
Route::get('/', function(){ return view('welcome'); });
Route::get('hello', function(){ return view('hello'); });

resources->views->hello.blade.php

Lesson 2
-----------------------------------
