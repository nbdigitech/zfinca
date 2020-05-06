<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use Session;
use Storage;
use File;

class BannerController extends Controller
{
    public function Index(request $request){
    	$data = Banner::orderBy('id','desc')->get();
    	return view('Admin.Banner.Index',compact('data'));
    }

    public function Create(request $request){
    	return view('Admin.Banner.Add');
    }

    public function Store(request $request){
    	$data = new Banner;
    	$data->Title = $request->Title;
        $data->SubTitle = $request->SubTitle;
    	if($request->hasfile('Image')){
    		$file = $request->file('Image');
    		$name = time().$file->getClientOriginalName();
    		$filepath = public_path('assets/uploads');
    		$file->move($filepath,$name);
    		$data->Image = $name;
    	}
        if($request->hasfile('MobileImage')){
            $filem = $request->file('MobileImage');
            $namem = time().$filem->getClientOriginalName();
            $filepathm = public_path('assets/uploads');
            $filem->move($filepathm,$namem);
            $data->MobileImage = $namem;
        }
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','File Submited.');
    	return redirect()->route('Admin/Banner');
    }

    public function Return(request $request){
    	return redirect('Admin/Banner');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/Banner/Edit');
    }

    public function Edit(request $request){
    	$id = Session::get('id');
    	$edit = Banner::where('id',$id)->first();
    	return view('Admin.Banner.Add',compact('edit'));
    }

    public function Update(request $request){
    	$data = Banner::where('id',$request->Update)->first();
    	$data->Title = $request->Title;
        $data->SubTitle = $request->SubTitle;
    	$data->Status = $request->Status;
        $filepath_delete = public_path('assets/uploads/'.$data->Image);
    	if($request->hasfile('Image')){
            if(File::exists($filepath_delete)){
            File::delete($filepath_delete);
            }
    		$file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filepath = public_path('assets/uploads');
            $file->move($filepath,$name);
            $data->Image = $name;
    	}
         $filepathm_delete = public_path('assets/uploads/'.$data->MobileImage);
        if($request->hasfile('MobileImage')){
            if(File::exists($filepathm_delete)){
            File::delete($filepathm_delete);
            }
            $filem = $request->file('MobileImage');
            $namem = time().$filem->getClientOriginalName();
            $filepathm = public_path('assets/uploads');
            $filem->move($filepathm,$namem);
            $data->MobileImage = $namem;
        }
    	$data->save();
    	$request->session()->flash('success','File Updated.');
    	return redirect()->route('Admin/Banner');
    }

   public function Delete(request $request){
   		$data = Banner::where('id',$request->Delete)->first();
   		$filepath = public_path('assets/uploads/'.$data->Image);
        $filepathm = public_path('assets/uploads/'.$data->MobileImage);
   		if(File::exists($filepath)){
   			File::delete($filepath);
   		}
        if(File::exists($filepathm)){
            File::delete($filepathm);
        }
        $data->delete();
   		
   		$request->session()->flash('success','File Deleted.');
    	return redirect()->route('Admin/Banner');
   }
}