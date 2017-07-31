<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashBoardController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function showInventory(Request $request)
    {
    	#optimize this query.
    	$inventory = DB::select('select * from inventory');
    	$suppliers = DB::select('select * from supplier');
    	$name = $request->name;
        return view('inventory',compact('suppliers','inventory'));
    }

    public function showPurchase(Request $request)
    {
        #optimize this query.
        $purchase = DB::select('select * from purchase');
        $suppliers = DB::select('select * from supplier');
        $name = $request->name;
        return view('purchase',compact('suppliers','purchase'));
    }
    
}
