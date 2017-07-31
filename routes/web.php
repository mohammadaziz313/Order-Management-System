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

Route::get('/supplier-info/delete-supplier','InventoryController@deleteSupplier');

//Route::get('/inventory-info','InventoryController@showInventoryInfo');

//Route::get('/supplier-info','InventoryController@showSupplierInfo');

<<<<<<< HEAD
/*Route::post('/inventory/add-new-supplier','InventoryController@addNewSupplier');
=======

Route::post('/inventory/add-new-supplier','InventoryController@addNewSupplier');
>>>>>>> origin/temp

Route::post('/inventory/searchInventory','InventoryController@searchInventory');*/


// Purchase Routes
Route::get('/purchase','DashBoardController@showPurchase');

/*Route::get('/purchase/add-new-product','PurchaseController@showAddNewItem');

Route::post('/purchase/add-new-product','PurchaseController@addNewItem');*/

Route::get('/purchase/add-new-supplier','PurchaseController@showAddNewSupplier');

Route::post('/purchase/add-new-supplier','PurchaseController@addNewSupplier');

Route::post('/purchase/searchProduct','PurchaseController@searchProduct');

//New_purchase Routes
Route::get('/purchase','DashBoardController@showPurchase');
Route::get('/purchase/add-purchase','PurchaseController@showAddNewItem');

Route::post('/purchase/add-purchase','PurchaseController@addNewItem');

Route::get('/purchase/add-purchaseContinue','PurchaseController@showAddNewItemContinue');

Route::post('/purchase/add-purchaseContinue','PurchaseController@addNewItem');


/*Route::get('/',function(){
	return view('welcome');
});*/