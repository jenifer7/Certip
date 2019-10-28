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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/suppliers', 'SupplierController@index')->name('index');
Route::get('/supplier', 'SupplierController@create')->name('create');
Route::post('/supplier', 'SupplierController@store')->name('store');
Route::get('/supplier{suppl}', 'SupplierController@show')->name('show');
Route::get('/supplier/{suppl}', 'SupplierController@edit')->name('edit');
Route::patch('/supplier/{suppl}', 'SupplierController@update')->name('update');
Route::delete('/supplier/{suppl}', 'SupplierController@destroy')->name('destroy');
