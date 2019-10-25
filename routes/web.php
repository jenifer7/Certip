<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();


Route::get('/employee', 'EmployeeController@create');

Route::get('/product', 'ProductController@create');

Route::get('/supplier', 'SupplierController@create');
Route::post('/supplier', 'SupplierController@store');