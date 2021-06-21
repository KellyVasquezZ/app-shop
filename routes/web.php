<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products', 'ProductController@index'); //Listar productos
Route::get('/admin/products/create', 'ProductController@create'); //Crear productos
Route::post('/admin/products', 'ProductController@store'); //Registrar productos

// CR
// UD