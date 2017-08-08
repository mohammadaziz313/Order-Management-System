<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function showAddNewItem(Request $request){
    	$name = $request->name;
    	$users= DB::select("select * from users where username = '$name'");
    	$suppliers = DB::select('select name from supplier');
    	return view('add-sales',compact('suppliers'));
    }

     public function showAddNewItemContinue(Request $request){
        $name = $request->name;
        $users= DB::select("select * from users where username = '$name'");
        $suppliers = DB::select('select name from supplier');
        return view('add-salesContinue',compact('suppliers'));
    }

    public function addNewItem(Request $request){
    	$sku = $request->sku;
    	$productDescription = $request->productDescription;
    	
    	$quantity = $request->quantity;
    	
    	#perform validity check.
    	DB::insert('insert into sales (sku,productDescription,quantity) values (?,?,?)',
            	[$sku,$productDescription,$quantity]);
    	return redirect()->action('DashBoardController@showSales');
    	
    	//return redirect()->action('DashBoardController@showProduct');
    }

    public function showAddNewSupplier(Request $request){
    	$name = $request->name;
    	return view('add-new-supplier',compact('name'));
    }

    public function addNewSupplier(Request $request){
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

    public function searchProduct(Request $request){
    	$sku = $request->id;
    	$items = DB::select("select * from sales where sku = '$sku'");
    	return view('sales-search',compact('items'));
    }}