<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MasterCategory;
use Session;
use Storage;

class MasterCategoryController extends Controller
{
    public function Index(request $request){
    	$data = MasterCategory::orderBy('id','desc')->get();
    	return view('Admin.MasterCategory.Index',compact('data'));
    }

    public function Create(request $request){
    	return view('Admin.MasterCategory.Add');
    }

    public function Store(request $request){
    	$data = new MasterCategory;
    	$data->Name = $request->Name;
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','MasterCategory Submited.');
    	return redirect()->route('Admin/MasterCategory');
    }

    public function Return(request $request){
    	return redirect('Admin/MasterCategory');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/MasterCategory/Edit');
    }

    public function Edit(request $request){
    	$id = Session::get('id');
    	$edit = MasterCategory::where('id',$id)->first();
    	return view('Admin.MasterCategory.Add',compact('edit'));
    }

    public function Update(request $request){
    	$data = MasterCategory::where('id',$request->Update)->first();
    	$data->Name = $request->Name;
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','MasterCategory Updated.');
    	return redirect()->route('Admin/MasterCategory');
    }

   public function Delete(request $request){
   		$data = MasterCategory::where('id',$request->Delete)->first();
        $data->delete();
   		$request->session()->flash('success','MasterCategory Deleted.');
    	return redirect()->route('Admin/MasterCategory');
   }
}
