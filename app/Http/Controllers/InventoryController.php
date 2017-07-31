<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function showAddNewItem(Request $request)
    {
    	$name = $request->name;
    	$users= DB::select("select * from users where username = '$name'");
    	$suppliers = DB::select('select name from supplier');
    	return view('add-new-inventory',compact('suppliers'));
    }

    public function addNewItem(Request $request)
    {
    	$sku = $request->sku;
    	$title = $request->title;
    	$supplier = $request->supplier;
    	$price = $request->price;
    	$quantity = $request->quantity;
    	$producttype = $request->producttype;
    	$description = $request->description;
    	#perform validity check.
    	DB::insert('insert into inventory (sku,title,supplier,price,quantity,producttype,description) values (?,?,?,?,?,?,?)',
            	[$sku,$title,$supplier,$price,$quantity,$producttype,$description]);
    	
    	return redirect()->action('DashBoardController@showInventory');
    }

    public function showInventoryInfo(Request $request)
    {
    	$inventory = DB::select('select * from inventory');
    	return view('inventory-info',compact('inventory'));
    }

    public function showSupplierInfo(Request $request)
    {
    	$suppliers = DB::select('select * from supplier');
    	return view('supplier-info',compact('suppliers'));
    }

    public function showAddNewSupplier(Request $request)
    {
    	$name = $request->name;
    	return view('add-new-supplier',compact('name'));
    }

    public function addNewSupplier(Request $request)
    {
    	$name = $request->name;
    	$company = $request->company;
    	$address = $request->address;
    	$email = $request->email;
    	$phone = $request->phone;
    	#perform validity check.
    	DB::insert('insert into supplier (name,company,email,address,phone) values (?,?,?,?,?)',
            	[$name,$company,$email,$address,$phone]);
    	return redirect()->action('DashBoardController@showInventory');
    }

    public function searchInventory(Request $request)
    {
    	$sku = $request->id;
    	$items = DB::select("select * from inventory where sku = '$sku'");
    	return view('inventory-search',compact('items'));
    }
}