<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Contact;
use App\EnquiryForm;
class ContactController extends Controller
{
    public function index(request $request){
    	return view('Contact');
    }

     public function store(request $request){
    	$check = Contact::where('Mobile',$request->Mobile)->orwhere('Email',$request->Email)->count();
    	
    	if($check==0){
    	$data = new Contact();
    	$data->Name = $request->Name;
    	$data->Email = $request->Email;
    	$data->Mobile = $request->Mobile;
    	$data->Subject = $request->Subject;
    	$data->Message = $request->Message;
    	$data->save();
    // 	$data = array('Name'=>$request->Name, 'Email'=>$request->Email, 'Mobile'=>$request->Mobile, 'Subject'=>$request->Subject, 'Message'=>$request->Message);
    // 	Mail::send('mail.Contact',$data,function($message){
    // 	    $message->to('kunal1071996@gmail.com','Miracle Waters')->subject('Enquiry From Website');
    // 	    $message->from('kunal1071996@gmail.com','Miracle Waters');
    // 	});
    	}
    	$request->session()->flash('success','success');
    	return redirect()->route('Contact');
    }

    public function store_enquiry(request $request){
    	$check = EnquiryForm::where('Mobile',$request->Mobile)->orwhere('Email',$request->Email)->count();
    	if($check==0){
    	$data = new EnquiryForm();
    	$data->Name = $request->Name;
    	$data->ProductId = $request->ProductName;
    	$data->Email = $request->Email;
    	$data->Mobile = $request->Mobile;
    	$data->save();
    // 	$data = array('Name'=>$request->Name, 'Email'=>$request->Email, 'Mobile'=>$request->Mobile, 'Message'=>$request->Message);
    // 	Mail::send('mail.Enquiry',$data,function($message){
    // 	    $message->to('sumitkhandelwal2010@yahoo.in','Miracle Waters')->subject('Product Enquiry');
    // 	    $message->from('sumitkhandelwal2010@yahoo.in','Miracle Waters');
    // 	});
    	}
    	$request->session()->flash('success','success');
    	return redirect()->route('Index');
    }
}
