<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notification;
use Session;
use Storage;
use File;

class NotificationController extends Controller
{
    public function Index(request $request){
    	$data = Notification::orderBy('id','desc')->get();
    	return view('Admin.Notification.Index',compact('data'));
    }

    public function Create(request $request){
    	return view('Admin.Notification.Add');
    }

    public function Store(request $request){
    	$data = new Notification;
    	$data->Title = $request->Title;
        $data->SubTitle = $request->SubTitle;
        $data->Description = $request->Description;
        $data->Date = $request->Date;
    	if($request->hasfile('Image')){
            $file = $request->file('Image');
            $name = time().'.'.$file->getClientOriginalExtension();
            $filepath = public_path('assets/uploads');
            $file->move($filepath,$name);
            $data->Image  = $name;
        }
        if($request->hasfile('PDF')){
                $pdf = $request->file('PDF');
                $name_pdf = time().'.'.$pdf->getClientOriginalExtension();
                $filepath_pdf = public_path('assets/uploads');
                $pdf->move($filepath_pdf,$name_pdf);
                $data->PDF  = $name_pdf;
        }
       
    	$data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','File Submited.');
    	return redirect()->route('Admin/Notification');
    }

    public function Return(request $request){
    	return redirect('Admin/Notification');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/Notification/Edit');
    }

    public function Edit(request $request){
    	$id = Session::get('id');
        $edit = Notification::where('id',$id)->first();
    	return view('Admin.Notification.Add',compact('edit'));
    }

    public function Update(request $request){
    	$data = Notification::where('id',$request->Update)->first();
    	$data->Title = $request->Title;
        $data->SubTitle = $request->SubTitle;
        $data->Description = $request->Description;
        $data->Date = $request->Date;
        $image_path = public_path('assets/uploads/'.$data->Image);
        $pdf_path = public_path('assets/uploads/'.$data->PDF);
        if($request->hasfile('Image')){
            if(File::exists($image_path)){
                File::delete($image_path);
            }
                $file = $request->file('Image');
                $name = time().'.'.$file->getClientOriginalExtension();
                $filepath = public_path('assets/uploads');
                $file->move($filepath,$name);
                $data->Image  = $name;
        }
        if($request->hasfile('PDF')){
            if(File::exists($pdf_path)){
                File::delete($pdf_path);
            }
                $pdf = $request->file('PDF');
                $name_pdf = time().'.'.$pdf->getClientOriginalExtension();
                $filepath_pdf = public_path('assets/uploads');
                $pdf->move($filepath_pdf,$name_pdf);
                $data->PDF  = $name_pdf;
        }

        $data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','File Updated.');
    	return redirect()->route('Admin/Notification');
    }

   public function Delete(request $request){
   		$data = Notification::where('id',$request->Delete)->first();
        $filepath_image = public_path('assets/uploads/'.$data->Image);
        $filepath_pdf = public_path('assets/uploads/'.$data->PDF); 
        if(File::exists($filepath_image)){
            File::delete($filepath_image);
        }

        if(File::exists($filepath_pdf)){
            File::delete($filepath_pdf);
        }
        $data->Delete();
   		$request->session()->flash('success','File Deleted.');
    	return redirect()->route('Admin/Notification');
   }

}
