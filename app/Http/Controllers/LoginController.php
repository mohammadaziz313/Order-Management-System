<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //This class enables us to login into the order management system

    public function setLogin(Request $request)
    {
    	$name= $request->input('name');
    	$password= $request->input('password');
    	if($name === "admin" && $password === "1234"){
    		//Auth::loginUsingId($name);
    		$request->session()->flash('success', 'Login successful!');
    	}
    	else{
    		return Redirect::back()->with('error',"Couldn't Login");
    	}
    	return redirect()->action('LoginController@getLogin',['name'=>$name]);
    }
    #Method need to be sent to HomeController
    public function getLogin(){
    	return view('index');
    }
    public function showTable()
    {
        return view('tables');
    }
    
}
