<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccessController extends Controller
{
    public function setLogin(Request $request)
    {
    	$name= $request->input('name');
    	$password= $request->input('password');
        //$info = DB::select("select * from users where email = '$email'");
        $users= DB::select("select * from users where username = '$name'");
        $flag = false;
        if($users){
            foreach ($users as $user) {
                if($user->username === $name && $user->password === $password){
                    $flag = true;
                    break;
                }
            }
            if($flag){
                $request->session()->flash('success', 'Login successful!');
                return redirect()->action('DashBoardController@index',['name'=>$name]);
            }
            else{
                return Redirect::back()->with('error',"Couldn't Login");   
            }
        }
/*
    	if($name === "admin" && $password === "1234"){
    		//Auth::loginUsingId($name);
    		$request->session()->flash('success', 'Login successful!');
    	}
    	else{
    		return Redirect::back()->with('error',"Couldn't Login");
    	}
    	return redirect()->action('DashBoardController@index',['name'=>$name]);*/
    }
    public function getLogin(){
    	return view('login');
    }
}
