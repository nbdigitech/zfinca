<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
class ProductController extends Controller
{
    public function product(request $request){
        $data = Product::where('id','desc')->get();
    	return view('Product',compact('data'));
    }

    public function productdetails(request $request){
        $data = Product::where('id','desc')->get();
    	return view('ProductDetails',compact('data'));
    }
}
