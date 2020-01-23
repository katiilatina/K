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


Route::get('/', 'PagesController@welcome');
Route::get('/cars', 'PagesController@cars');
Route::get('/brands', 'PagesController@brands');
Route::get('/workers', 'PagesController@workers');
Route::get('/clients', 'PagesController@clients');
Route::get('/orders_cars', 'PagesController@orders_cars');
Route::get('/workers_orders', 'PagesController@workers_orders');

Route::get('/client', 'FormClientsController@client');
Route::post('/clients', 'FormClientsController@form');

Route::get('/worker', 'FormWorkersController@worker');
Route::post('/workers', 'FormWorkersController@form');

Route::get('/brand', 'FormBrandsController@brand');
Route::post('/brands', 'FormBrandsController@form');

Route::get('/car', 'FormCarsController@car');
Route::post('/cars', 'FormCarsController@form');

Route::get('/order', 'FormOrdersController@order');
Route::post('/orders_cars', 'FormOrdersController@form');