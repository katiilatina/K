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



Route::get('/form', 'FormController@index');
Route::post('/', 'FormController@inde');
Route::get('/', 'FormController@ind');
Route::get('/list', 'ListController@index');