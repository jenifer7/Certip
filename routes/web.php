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

Route::get('/customer', 'CustomerController@create')->name('cliente.create');
Route::get('/customers', 'CustomerController@index')->name('cliente.index');
Route::post('/customer', 'CustomerController@store')->name('cliente.store');
Route::get('/customer{custom}', 'CustomerController@show')->name('cliente.show');
Route::get('/customer/{custom}', 'CustomerController@edit')->name('cliente.edit');
Route::patch('/customer/{custom}', 'CustomerController@update')->name('cliente.update');
Route::delete('/customer/{custom}', 'CustomerController@destroy')->name('cliente.destroy');

Route::get('/employee', 'EmployeeController@create')->name('emplea.create');
Route::get('/employees', 'EmployeeController@index')->name('emplea.index');
Route::post('/employee', 'EmployeeController@store')->name('emplea.store');
Route::get('/employee{emple}', 'EmployeeController@show')->name('emplea.show');
Route::get('/employee/{emple}', 'EmployeeController@edit')->name('emplea.edit');
Route::patch('/employee/{emple}', 'EmployeeController@update')->name('emplea.update');
Route::delete('/employee/{emple}', 'EmployeeController@destroy')->name('emplea.destroy');

Route::get('/user', 'UserController@create')->name('usuario.create');
Route::get('/users', 'UserController@index')->name('usuario.index');
Route::post('/user', 'UserController@store')->name('usuario.store');
Route::get('/user{use}', 'UserController@show')->name('usuario.show');
Route::get('/user/{use}', 'UserController@edit')->name('usuario.edit');
Route::patch('/user/{use}', 'UserController@update')->name('usuario.update');
Route::delete('/user/{use}', 'UserController@destroy')->name('usuario.destroy');

Route::get('/product', 'ProductController@create')->name('pro.create');
Route::get('/products', 'ProductController@index')->name('pro.index');
Route::post('/product', 'ProductController@store')->name('pro.store');
Route::get('/product{prod}', 'ProductController@show')->name('pro.show');
Route::get('/product/{prod}', 'ProductController@edit')->name('pro.edit');
Route::patch('/product/{prod}', 'ProductController@update')->name('pro.update');
Route::delete('/product/{prod}', 'ProductController@destroy')->name('pro.destroy');

Route::get('/sale', 'SaleController@create')->name('sale.create');
Route::get('/sales', 'SaleController@index')->name('sale.index');
Route::post('/sale', 'SaleController@store')->name('sale.store');
Route::get('/sale{vent}', 'SaleController@show')->name('sale.show');
Route::get('/sale/{venta}', 'SaleController@destroy')->name('sale.destroy');

