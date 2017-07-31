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

//Auth::routes();

Route::get('/dashboard', 'DashBoardController@index');

Route::get('/', 'AccessController@getLogin');

Route::post('/','AccessController@setLogin');

Route::get('/inventory-info','DashBoardController@showInventory');

Route::get('/supplier-info','DashBoardController@showSupplier');

Route::get('/inventory-info/add-new-inventory','InventoryController@showAddNewItem');

Route::post('/inventory-info/add-new-inventory','InventoryController@addNewItem');

Route::get('/supplier-info/add-new-supplier','InventoryController@showAddNewSupplier');

Route::post('/supplier-info/add-new-supplier','InventoryController@addNewSupplier');

//Route::get('/inventory-info','InventoryController@showInventoryInfo');

//Route::get('/supplier-info','InventoryController@showSupplierInfo');

Route::post('/inventory/add-new-supplier','InventoryController@addNewSupplier');

Route::post('/inventory/searchInventory','InventoryController@searchInventory');

/*Route::get('/',function(){
	return view('welcome');
});*/