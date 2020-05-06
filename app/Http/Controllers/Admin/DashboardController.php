<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Image;
use App\EnquiryForm;
use App\Video;
use App\Product;

class DashboardController extends Controller
{
    public function Index(request $request){
      
    	$contact = Contact::count();
    	$image = Image::count();
    	$enquiryform = EnquiryForm::count();
    	$video = Video::count();
    	$product = Product::count();
    	return view('Admin.Dashboard',compact('image','enquiryform','video','product','contact'));
    }
}