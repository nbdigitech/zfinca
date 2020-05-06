<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class IndexController extends Controller
{
    public function index(request $request){
        return view('Index');
    }
}
