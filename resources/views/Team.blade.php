@extends('layouts.Master')
@section('MainSection')
<div class="page-title">
   <div class="container">
       <div>
           <div class="row">
               <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h1>
                           <a href="#">Our Team</a>
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li>
                                <a href="#">HOME</a>
                            </li>
                            <li>
                                <a href="#">TEAM</a>
                            </li>
                        </ul>
                    </div>
               </div>
           </div>
       </div>
   </div>
</div>
<div class="main-team">
   <section class="flat-team">
       <div class="container">
           <div class="row">
              @foreach($data as $row)
               <div class=" col-md-4 col-sm-6">
                   <div class="wrap-team">
                       <div class="image-team">
                           <img src="{{url('/')}}/public/assets/uploads/{{$row->Image}}" alt="image">
                       </div>
                       <div class="info-team">
                           <h4>{{$row->Post}}</h4>
                           <h2>{{$row->Name}}</h2>
                           <p>{{$row->Description}}</p>
                           <!--<ul>-->
                           <!-- <li class="social-share"><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>-->
                           <!-- <li class="social-share"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>-->
                           <!-- <li class="social-share"><a href="#"><i class="fab fa-behance" aria-hidden="true"></i></a></li> -->
                           <!-- <li class="social-share"><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>      -->
                           <!-- <li class="social-share"><a href="#"><i class="fab fa-pinterest-square" aria-hidden="true"></i></a></li>-->
                           <!--</ul>-->
                       </div>
                   </div>
               </div>
               @endforeach
            
           </div>
       </div>
   </section>
</div>
@endsection