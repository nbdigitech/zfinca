<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use Session;
use Storage;
use File;

class ImageController extends Controller
{
    public function Index(request $request){
    	$data = Image::orderBy('id','desc')->get();
    	return view('Admin.Image.Index',compact('data'));
    }

    public function Create(request $request){
    	return view('Admin.Image.Add');
    }

    public function Store(request $request){
    	$data = new Image;
    	$data->Title = $request->Title;
        $data->Description = $request->Description;
    	if($request->hasfile('Image')){
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filepath = public_path('assets/uploads');
            $file->move($filepath,$name);
            $data->Image = $name;
        }
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','File Submited.');
    	return redirect()->route('Admin/Image');
    }

    public function Return(request $request){
    	return redirect('Admin/Video');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/Image/Edit');
    }

    public function Edit(request $request){
    	$id = Session::get('id');
    	$edit = Image::where('id',$id)->first();
    	return view('Admin.Image.Add',compact('edit'));
    }

    public function Update(request $request){
    	$data = Image::where('id',$request->Update)->first();
    	$data->Title = $request->Title;
        $data->Description = $request->Description;
        $data->Status = $request->Status;
        if($request->hasfile('Image')){
            $filepath = public_path('assets/uploads/'.$data->Image);
            if(File::exists($filepath)){
            File::delete($filepath);
            }
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filepath = public_path('assets/uploads');
            $file->move($filepath,$name);
            $data->Image = $name;
        }
    	$data->save();
    	$request->session()->flash('success','File Updated.');
    	return redirect()->route('Admin/Image');
    }

   public function Delete(request $request){
   		$data = Image::where('id',$request->Delete)->first();
   		$filepath = public_path('assets/uploads/'.$data->Image);
        if(File::exists($filepath)){
            File::delete($filepath);
        }
        $data->delete();
   		$request->session()->flash('success','File Deleted.');
    	return redirect()->route('Admin/Image');
   }
}
