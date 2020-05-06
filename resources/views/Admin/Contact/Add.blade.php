@extends('Admin.layouts.Master')

@section('MainSection')
     <div class="content">
<div class="content">
<div class="container-fluid">
  <div class="row">
        <div class="col-md-12">
              <form action="{{route('Admin/Contact/Update')}}" method="post">
                {{csrf_field()}}
               <input type="hidden" name="Update" value="@if(isset($edit->id)) {{$edit->id}} @endif">
                <div class="card ">
                  <div class="card-header card-header-primary card-header-icon" style="margin-top: -15px;">
                  <div style="background-color: #303948; padding: 10px; padding-left: 16px; padding-top:16px; border-radius: 3px;" style="width: 100%;">
                    <h4>
                      @if(isset($edit->id)) Update Enquiry Details @else Create Enquiry Details @endif                                       
                       <a href="{{route('Admin/Contact')}}" class="btn btn-success pull-right" style="margin-top: -7px; background-color: white; box-shadow: none; color:black; box-shadow:none;">Manage</a></h4>
                  </div>

                </div>
                  <div class="card-body">
                   @if(session()->has('success'))
                <div class="alert alert-success" style="background: #303948; font-size: 18px;">
                  {{session()->get('success')}}
                 <a href="#" class="close" data-dismiss="alert" aria-label="close" >X</a>
                </div>
                @endif
                   <div class="row" style="margin-bottom: 30px;">
                       <label class="col-sm-2 col-form-label">Name :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                           <input type="text" required name="Name" disabled value="@if(isset($edit->id)) {{$edit->Name}} @endif" class="form-control">
                        </div>
                      </div>

                      <label class="col-sm-2 col-form-label">Email :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                           <input type="email" required name="Email" disabled value="@if(isset($edit->id)) {{$edit->Email}} @endif" class="form-control">
                        </div>
                      </div>

                       <label class="col-sm-2 col-form-label">Mobile Number :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                           <input type="text" required name="Mobile" disabled value="@if(isset($edit->id)) {{$edit->Mobile}} @endif" class="form-control">
                        </div>
                      </div>

                      <label class="col-sm-2 col-form-label">FillUp Date :</label>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <a href="{{$edit->created_at}}" target="_blank">
                             <input type="text" required name="created_at" disabled value="@if(isset($edit->id)) {{$edit->created_at}} @endif" class="form-control">
                          </a>
                        </div>
                      </div>

                      <label class="col-sm-2 col-form-label">Subject/Purpose :</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <a href="{{$edit->created_at}}" target="_blank">
                             <input type="text" required name="created_at" disabled value="@if(isset($edit->id)) {{$edit->Subject}} @endif" class="form-control">
                          </a>
                        </div>
                      </div>

                      <label class="col-sm-2 col-form-label">Message :</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                             <input type="text" required name="Message" disabled value="@if(isset($edit->id)) {{$edit->Message}} @endif" class="form-control">
                        </div>
                      </div>
                </div>
            </div>
          </div>
</div>
</div>

</div>
</div>

@endsection