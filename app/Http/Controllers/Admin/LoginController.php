<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class LoginController extends Controller
{
    public function attempt(request $request){
    	if(auth()->attempt(['email'=>$request->Email, 'password'=>$request->Password])){
    		return redirect()->route('Admin/Dashboard');
    	}
    	else{
    		return redirect()->route('login');
    	}
    }

    public function index(){
    	return view('Admin.Login');
    }
}
