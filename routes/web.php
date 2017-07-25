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

Route::get('/', 'LoginController@getLogin');

Route::post('/','LoginController@setLogin');

Route::get('/tables','HomeController@showTable');

Auth::routes();

Route::get('/tables', 'LoginController@index')->name('home');
