<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Image;
use App\Video;
class GalleryController extends Controller
{
    public function images(request $request){
        $image = Image::where('id','desc')->get();
    	return view('Images',compact('image'));
    }

    public function videos(request $request){
        $videos = Video::where('id','desc')->get();
    	return view('Videos',compact('videos'));
    }
}
