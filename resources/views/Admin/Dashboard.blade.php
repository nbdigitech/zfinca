@extends('Admin.layouts.Master')

@section('MainSection')
   <div class="content">
<div class="content">
<div class="container-fluid">
  <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon" style="box-shadow: none;">
                          <i class="fa fa-phone"></i>
                        </div>
                        <p class="card-category">Total Product Enquiry</p>
                        <h3 class="card-title"><span class="badge badge-secondary" style="background:#303948;">{{$enquiryform}}</span></h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                            <a href="{{route('Admin/EnquiryForm')}}" style="display: block; ">View All</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon" style="box-shadow: none;">
                          <i class="fa fa-mobile"></i>
                        </div>
                        <p class="card-category">Total Contact </p>
                        <h3 class="card-title"><span class="badge badge-secondary" style="background:#303948;">{{$contact}}</span></h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                            <a href="{{route('Admin/Contact')}}" style="display: block;">View All</a>
                        </div>
                      </div>
                    </div>
                  </div>

                 

                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon" style="box-shadow: none;">
                          <i class="fa fa-mobile"></i>
                        </div>
                        <p class="card-category">Total Products</p>
                        <h3 class="card-title"><span class="badge badge-secondary" style="background:#303948;">{{$product}}</span></h3>
                      </div>
                      <div class="card-footer">
                        <div class="stats">
                            <a href="{{route('Admin/Product')}}" style="display: block; ">View All</a>
                        </div>
                      </div>
                    </div>
                  </div>
               
</div>
</div>
</div>
</div>
@endsection