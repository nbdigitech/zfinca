@extends('layouts.Master')
@section('MainSection')

<div class="page-title">
   <div class="container">
       <div>
           <div class="row">
               <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h1>
                           <a href="#">About Us</a>
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li>
                                <a href="#">HOME</a>
                            </li>
                            <li>
                                <a href="#">ABOUT DIRECTOR</a>
                            </li>
                        </ul>
                    </div>
               </div>
           </div>
       </div>
   </div>
</div>
<div class="main-about">
    <section class="flat-about2" style="background:#F8F8FF">
        <div class="container">
            <div class="row" >
                <div class="col-md-7 col-sm-12">
                    <div class="row" style="margin-bottom:40px">
                        <div class="col-sm-6 col-md-6 col-6 col-xs-6">
                            <img src="{{url('/')}}/public/assets/image/services/services7.jpg" style="width:100%">
                        </div>
                        <div class="col-sm-6 col-md-6 col-6 col-xs-6">
                            <img src="{{url('/')}}/public/assets/image/services/services6.jpg" style="width:100%">
                        </div>
                    </div>
                    <div class="image-about featured-post">
                        <img src="{{url('/')}}/public/assets/image/services/services5.jpg" >
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="content-about2">
                        <div class="wrap-content-about2">
                            <h5>ABOUT US</h5>
                            <h2><a href="index-2.html">About Zfinca Insurance Brokers Private Limited</a></h2>
                            <p class="one">Zfinca Insurance Brokers Private Limited is a Private incorporated on 21 February 2019. It is classified as a Non-govt company and is registered at Registrar of Companies, Chhattisgarh. Its authorized share capital is Rs. 10,000,000 and its paid up capital is Rs. 7,500,000. It is involved in Insurance and pension funding, except compulsory social security.
</p>
                            <p class="two">Zfinca is promoted by a team of Professionals with  experience in the Insurance industry – LIFE,GENERAL & REINSURANCE. We have a full service team comprising of a blend of experience and we are one of the fastest growing insurance broking company.
</p>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
  
</div>
@endsection