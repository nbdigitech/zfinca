<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ServicesController extends Controller
{
    public function index(request $request){
    	return view('Services');
    }
}
