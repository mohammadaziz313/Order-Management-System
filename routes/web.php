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

Route::get('/inventory','DashBoardController@showInventory');

Route::get('/inventory/add-new-inventory','InventoryController@showAddNewItem');

Route::post('/inventory/add-new-inventory','InventoryController@addNewItem');

Route::get('/inventory/add-new-supplier','InventoryController@showAddNewSupplier');

Route::post('/inventory/add-new-supplier','InventoryController@addNewSupplier');

Route::post('/inventory/searchInventory','InventoryController@searchInventory');
//Purchse Order Routes
Route::get('/purchase','DashBoardController@showPurchase');

Route::get('/purchase/add-new-product','PurchaseController@showAddNewItem');

Route::post('/purchase/add-new-product','PurchaseController@addNewItem');

Route::get('/purchase/add-new-supplier','PurchaseController@showAddNewSupplier');

Route::post('/purchase/add-new-supplier','PurchaseController@addNewSupplier');

Route::post('/purchase/searchProduct','PurchaseController@searchProduct');

/*Route::get('/',function(){
	return view('welcome');
});*/