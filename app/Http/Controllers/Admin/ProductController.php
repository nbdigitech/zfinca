<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\MasterCategory;
use Session;
use Storage;
use File;

class ProductController extends Controller
{
    public function Index(request $request){
    	$data = Product::join('master_categories','master_categories.id','products.MasterCategoryId')->select('master_categories.Name as MasterCategory','products.*')->orderBy('products.id','desc')->get();
    	return view('Admin.Product.Index',compact('data'));
    }

    public function Create(request $request){
    	$m_cat = MasterCategory::where('Status',1)->get();
    	return view('Admin.Product.Add',compact('m_cat'));
    }

    public function Store(request $request){
    	$data = new Product;
    	$data->Title = $request->Title;
    	$data->MasterCategoryId = $request->MasterCategoryId;
        $data->SubTitle = $request->SubTitle;
        $data->Specification = $request->Specification;
        $data->ModelNo = $request->ModelNo;
        $data->Price = $request->Price;
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
    	return redirect()->route('Admin/Product');
    }

    public function Return(request $request){
    	return redirect('Admin/Product');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/Product/Edit');
    }

    public function Edit(request $request){
    	$id = Session::get('id');
        $m_cat = MasterCategory::where('Status',1)->get();
   
        $edit = Product::join('master_categories','master_categories.id','products.MasterCategoryId')->select('master_categories.Name as MasterCategory','products.*')->orderBy('master_categories.id','desc')->where('products.id',$id)->first();
    	return view('Admin.Product.Add',compact('edit','m_cat'));
    }

    public function Update(request $request){
    	$data = Product::where('id',$request->Update)->first();
    	$data->Title = $request->Title;
        $data->MasterCategoryId = $request->MasterCategoryId;
        $data->SubTitle = $request->SubTitle;
        $data->Specification = $request->Specification;
        $data->ModelNo = $request->ModelNo;
        $data->Price = $request->Price;
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
    	return redirect()->route('Admin/Product');
    }

   public function Delete(request $request){
   		$data = Product::where('id',$request->Delete)->first();
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
    	return redirect()->route('Admin/Product');
   }

}
