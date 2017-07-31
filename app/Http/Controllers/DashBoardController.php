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
    	$name = $request->name;
        return view('inventory-info',compact('inventory'));
    }
    
}
