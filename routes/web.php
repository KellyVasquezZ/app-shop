<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products', 'ProductController@index'); //Listar productos
Route::get('/admin/products/create', 'ProductController@create'); //Crear productos
Route::post('/admin/products', 'ProductController@store'); //Registrar productos
Route::get('/admin/products/{id}/edit', 'ProductController@edit'); //Editar productos
Route::post('/admin/products/{id}/edit', 'ProductController@update'); //Actualizar productos
Route::delete('/admin/products/{id}', 'ProductController@destroy'); //Eliminar productos

// CR
// UD