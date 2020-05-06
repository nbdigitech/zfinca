<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Session;

class ContactController extends Controller
{
     public function Index(request $request){
    	$data = Contact::orderBy('id','desc')->get();
    	return view('Admin.Contact.Index',compact('data'));
    }

    public function Create(request $request){
    	return view('Admin.Contact.Add');
    }

    public function Store(request $request){
    	$data = new Contact;
    	$data->Title = $request->Title;
    	$data->URL = $request->URL;
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','Contact Link Submited.');
    	return redirect()->route('Admin/Contact');
    }

    public function Return(request $request){
    	return redirect('Admin/Contact');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/Contact/AllDetails');
    }

    public function AllDetails(request $request){
    	$id = Session::get('id');
    	$edit = Contact::where('id',$id)->first();
    	return view('Admin.Contact.Add',compact('edit'));
    }

    public function Update(request $request){
    	$data = Contact::where('id',$request->Update)->first();
    	$data->Remark = $request->Remark;
    	$data->save();
    	$request->session()->flash('success','Contact Remark Updated.');
    	return redirect()->route('Admin/Contact');
    }

   public function Delete(request $request){
    Contact::where('id',$request->Delete)->delete();	
   		$request->session()->flash('success','Contact Link Deleted.');
    	return redirect()->route('Admin/Contact');
   }
}
