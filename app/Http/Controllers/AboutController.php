<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\TeamMember;
class AboutController extends Controller
{
    public function aboutdirector(request $request){
    	return view('AboutDirector');
    }

    public function team(request $request){
        $data = TeamMember::where('id','desc')->get();
    	return view('Team',compact('data'));
    }
}
