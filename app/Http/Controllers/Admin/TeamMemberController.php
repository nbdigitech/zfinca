<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeamMember;
use Session;
use File;

class TeamMemberController extends Controller
{
    public function Index(request $request){
    	$data = TeamMember::orderBy('id','desc')->get();
    	return view('Admin.TeamMember.Index',compact('data'));
    }

    public function Create(request $request){
    	return view('Admin.TeamMember.Add');
    }

    public function Store(request $request){
    	$data = new TeamMember;
    	$data->Name = $request->Name;
        $data->Post = $request->Post;
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
    	return redirect()->route('Admin/TeamMember');
    }

    public function Return(request $request){
    	return redirect('Admin/TeamMember');
    }

    public function EditSession(request $request){
    	Session::put('id',$request->Edit);
    	return redirect('Admin/TeamMember/Edit');
    }

    public function Edit(request $request){
    	$id = Session::get('id');
    	$edit = TeamMember::where('id',$id)->first();
    	return view('Admin.TeamMember.Add',compact('edit'));
    }

    public function Update(request $request){
    	$data = TeamMember::where('id',$request->Update)->first();
    	$data->Name = $request->Name;
        $data->Post = $request->Post;
        $data->Description = $request->Description;
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
        $data->Status = $request->Status;
    	$data->save();
    	$request->session()->flash('success','File Updated.');
    	return redirect()->route('Admin/TeamMember');
    }

   public function Delete(request $request){
   		$data = TeamMember::where('id',$request->Delete)->first();
   		$filepath = public_path('assets/uploads/'.$data->Image);
        if(File::exists($filepath)){
            File::delete($filepath);
        }
        $data->delete();
   		$request->session()->flash('success','File Deleted.');
    	return redirect()->route('Admin/TeamMember');
   }
}
