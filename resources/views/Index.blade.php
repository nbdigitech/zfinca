@extends('layouts.Master')
@section('MainSection')
<style>
.flat-features-1 .wrap-features{
    padding:49px 40px 42px 47px;
}
</style>
  
   <div class="flat-slider style1">
        <!-- SLIDER -->
        <div class="rev_slider_wrapper fullwidthbanner-container" >
            <div id="rev-slider3" class="rev_slider fullwidthabanner">
                <ul>
                    <!-- Slide 1 -->
                    <li data-transition="random">
                        <!-- Main Image -->
                        <img src="{{url('/')}}/public/assets/image/home/home1.jpg" alt="" data-bgposition="center center" data-no-retina>
                        <div class="overlay"></div>
                        <div class="tp-caption tp-resizeme text-ffb922 font-rubik font-weight-500 wellcome make text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-105','0','0','-20']"
                        data-fontsize="['30','20','20','16']"
                        data-lineheight="['90','48','28','22']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="700" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">One stop solution for all your insurance and claim related need.</div>

                        <div class="tp-caption tp-resizeme font-rubik font-weight-700 text-white style1 text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','-2','-2','-2']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['12','50','50','30']"
                        data-fontsize="['120','60','40','32']"
                        data-lineheight="['150','80','45','43']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on">Fire Insurance</div>

                        <div class="tp-caption tp-resizeme text-white font-rubik font-weight-400 text-wizym text-center"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['29','180','180','120']"
                        data-fontsize="['18','18','16','14']"
                        data-lineheight="['30','30','26','22']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-paddingleft = "['280','180','180','10']"
                        data-paddingright = "['280','180','180','10']"
                        data-margintop = "['20','20','20','0']"  
                        data-marginbottom = "['20','20','20','0']" > </div>

                        <div class="tp-caption text-center"
                        data-x="['center','center','center','center']" data-hoffset="['-7','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['170','130','130','110']"
                        data-width="full"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];" 
                        data-mask_out="x:inherit;y:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        data-paddingtop= "['50','50','50','50']"
                        data-paddingbottom= "['50','50','50','50']"><div class="button-btn elm-btn slider1 hvr-shutter-out-vertical">
                            <a href="#" class="enq" onclick="product('Contact Purpose')">Enquire Now</a>
                            <div class="submit-btn style1">
                                <i class="fas fa-arrow-right"></i>

                            </div>
                            <div class="submit-btn style2">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                       
                    </div>
                </li><!-- /End Slide 1 -->

                <!-- Slide 2 -->
                <li data-transition="random">
                    <!-- Main Image -->
                    <img src="{{url('/')}}/public/assets/image/home/home2.jpg" alt="" data-bgposition="center center" data-no-retina>
                    <div class="overlay"></div>

                    <!-- Layers -->
                    <div class="tp-caption tp-resizeme text-ffb922 font-rubik font-weight-500 wellcome make text-center"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-105','0','0','-20']"
                    data-fontsize="['30','20','20','16']"
                    data-lineheight="['90','48','28','22']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="700" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on">LIFE is Full of Surprises Secure it Through INSURANCE</div>

                    <div class="tp-caption tp-resizeme font-rubik font-weight-700 text-white style1 text-center"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['12','50','50','30']"
                    data-fontsize="['120','60','40','32']"
                    data-lineheight="['150','80','45','43']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:[100%];" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on">Health Insurance </div>

                    <div class="tp-caption tp-resizeme text-white font-rubik font-weight-400 text-wizym text-center"
                    data-x="['center','center','center','center']" data-hoffset="['0','-2','-2','-2']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['29','180','180','120']"
                    data-fontsize="['18','18','16','14']"
                    data-lineheight="['30','30','26','22']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    data-paddingleft = "['280','180','180','10']"
                    data-paddingright = "['280','180','180','10']"
                    data-margintop = "['20','20','20','0']"  
                    data-marginbottom = "['20','20','20','0']" > </div>

                    <div class="tp-caption text-center"
                    data-x="['center','center','center','center']" data-hoffset="['-7','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['170','130','130','110']"
                    data-width="full"
                    data-height="none"
                    data-whitespace="normal"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    data-paddingtop= "['50','50','50','50']"
                    data-paddingbottom= "['50','50','50','50']"><div class="button-btn elm-btn slider1 hvr-shutter-out-vertical">
                        <a href="#" class="enq" onclick="product('Contact Purpose')">Contact Us</a>
                        <div class="submit-btn style1">
                            <i class="fas fa-arrow-right"></i>

                        </div>
                        <div class="submit-btn style2">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                    
                </div>
            </li><!-- /End Slide 2 -->
        </ul>
    </div>
</div> 
</div> <!-- /.flat-slider -->
   
<div class="main-homepage1 mobi-mt30" style="background:#F8F8FF">
      <section class="flat-features-1" style="padding-top:70px; margin-top:-60px">
       <div class="container">
           <div class="row">
               <div class="col-md-4 col-sm-6">
                   <a href="#" class="enq" onclick="product('General Insurance')">
                   <div class="wrap-features">
                       <img src="{{url('/')}}/public/assets/icons/general.png" alt="image">
                       <h2 class="active">General Insurance</h2>
                       <p>It is a long established fact that a read
                        her will be distracted by the readable
                        content of a page when looking.</p>
                        <div class="row"><br>
                            <div class="col-sm-6 col-xs-6 col-6" style="margin-top:10px">
                                <a href="#" style="color:#303948;">Download PDF</a>
                            </div>
                            <div class="col-sm-6 col-xs-6 col-6">
                        <a href="#" class="enq" onclick="product('General Insurance')" class="active" style="float:right; color:white; background:#161616; padding:10px; border-radius:2px"> Enquire Now</a>
                   </div></div>
                        </div>
                   </a>
               </div>
               <div class="col-md-4 col-sm-6"><a href="#" class="enq" onclick="product('Health Insurance')">
                   <div class="wrap-features">
                       <img src="{{url('/')}}/public/assets/icons/healthwhite.png" alt="image">
                       <h2>Health Insurance</h2>
                       <p>It is a long established fact that a read
                        her will be distracted by the readable
                        content of a page when looking.</p>
                        <div class="row"><br>
                            <div class="col-sm-6 col-xs-6 col-6" style="margin-top:10px">
                                <a href="#" style="color:#303948;">Download PDF</a>
                            </div>
                            <div class="col-sm-6 col-xs-6 col-6">
                                <a href="#" class="enq" onclick="product('Health Insurance')" style="float:right; color:white; background:#161616; padding:10px; border-radius:2px">Enquire Now</a>
                            </div>
                        </div>
                        
                   </div> </a>
               </div>
               <div class="col-md-4 col-sm-6"><a href="#" class="enq" onclick="product('Travel Insurance')">
                   <div class="wrap-features">
                       <img src="{{url('/')}}/public/assets/icons/travelwhite.png" alt="image">
                       <h2>Travel Insurance</h2>
                       <p>It is a long established fact that a read
                        her will be distracted by the readable
                        content of a page when looking.</p>
                        <div class="row"><br>
                            <div class="col-sm-6 col-xs-6 col-6" style="margin-top:10px">
                                <a href="#" style="color:#303948;">Download PDF</a>
                            </div>
                            <div class="col-sm-6 col-xs-6 col-6">
                        <a href="#" class="enq" onclick="product('Travel Insurance')" style="float:right; color:white; background:#161616; padding:10px; border-radius:2px">Enquire Now</a>
                   </div> </div>
                        </div></a>
               </div>
               <div class="col-md-4 col-sm-6"><a href="#" class="enq" onclick="product('Fire Insurance')">
                   <div class="wrap-features">
                       <img src="{{url('/')}}/public/assets/icons/fire.png" alt="image">
                       <h2>Fire Insurance</h2>
                       <p>It is a long established fact that a read
                        her will be distracted by the readable
                        content of a page when looking.</p>
                        <div class="row"><br>
                            <div class="col-sm-6 col-xs-6 col-6" style="margin-top:10px">
                                <a href="#" style="color:#303948;">Download PDF</a>
                            </div>
                            <div class="col-sm-6 col-xs-6 col-6">
                        <a href="#" class="enq" onclick="product('Fire Insurance')" style="float:right; color:white; background:#161616; padding:10px; border-radius:2px"> Enquire Now</a>
                   </div> </div>
                        </div></a>
               </div>
               <div class="col-md-4 col-sm-6"><a href="#" class="enq" onclick="product('Motor Insurance')">
                   <div class="wrap-features"> 
                       <img src="{{url('/')}}/public/assets/icons/motor.png" alt="image">
                       <h2>Motor Insurance</h2>
                       <p>It is a long established fact that a read
                        her will be distracted by the readable
                        content of a page when looking.</p>
                        <div class="row"><br>
                            <div class="col-sm-6 col-xs-6 col-6" style="margin-top:10px">
                                <a href="#" style="color:#303948;">Download PDF</a>
                            </div>
                            <div class="col-sm-6 col-xs-6 col-6">
                        <a href="#" class="enq" onclick="product('Motor Insurance')" style="float:right; color:white; background:#161616; padding:10px; border-radius:2px"> Enquire Now</a>
                   </div> </div>
                        </div></a>
               </div>
               <div class="col-md-4 col-sm-6"><a href="#" class="enq" onclick="product('Industrial all Policy Risk')">
                   <div class="wrap-features">
                       <img src="{{url('/')}}/public/assets/icons/industrial.png" alt="image">
                       <h2>Industrial Policy</h2>
                       <p>It is a long established fact that a read
                        her will be distracted by the readable
                        content of a page when looking.</p>
                        <div class="row"><br>
                            <div class="col-sm-6 col-xs-6 col-6" style="margin-top:10px">
                                <a href="#" style="color:#303948;">Download PDF</a>
                            </div>
                            <div class="col-sm-6 col-xs-6 col-6">
                        <a href="#" class="enq" onclick="product('Industrial all Policy Risk')" style="float:right; color:white; background:#161616; padding:10px; border-radius:2px"> Enquire Now</a>
                   </div>
               </div> </div>
                        </a>
           </div>
       </div>
   </section>
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
    <section class="flat-services">
        <div class="container">
            <div class="row fix-height-box">
                <div class="col-sm-12">
                    <div class="title-section style1">
                        <p>OUR SERVICES</p>
                        <div class="content-inner clearfix">
                            <div class="wrap-contentt">
                                <h2><a href="index-2.html">What We Offer for You</a></h2>       
                            </div>
                            
                            <div class="wrap-btn">
                                <a href="{{route('Services')}}" class="flat-button-arrow" >Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-6">
                    <div class="wrap-services clearfix mobi-mt40">
                        <div class="image-services">
                            <img src="{{url('/')}}/public/assets/icons/generalwhite.png" alt="image" style="width:60px">
                        </div>
                        <div class="content-services">
                            <h2><a class="enq" onclick="product('General')" href="#">General Insurance</a></h2>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-6">
                    <div class="wrap-services clearfix mobi-mt40">
                        <div class="image-services">
                            <img src="{{url('/')}}/public/assets/icons/health.png" alt="image" style="width:60px">
                        </div>
                        <div class="content-services">
                            <h2><a class="enq" onclick="product('Health Insurance')" href="#">Health insurance</a></h2>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-6">
                    <div class="wrap-services clearfix mobi-mt40">
                        <div class="image-services">
                            <img src="{{url('/')}}/public/assets/icons/travel.png" alt="image" style="width:60px">
                        </div>
                        <div class="content-services">
                            <h2><a class="enq" onclick="product('Travel Insurance')" href="#">Travel insurance</a></h2>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-6">
                    <div class="wrap-services bt clearfix mobi-mt40">
                        <div class="image-services">
                            <img src="{{url('/')}}/public/assets/icons/motorwhite.png" alt="image" style="width:60px">
                        </div>
                        <div class="content-services">
                            <h2><a class="enq" onclick="product('Motor Insurance')" href="#">Motor insurance</a></h2>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-6">
                    <div class="wrap-services bt clearfix mobi-mt40">
                        <div class="image-services">
                            <img src="{{url('/')}}/public/assets/icons/firewhite.png" alt="image" style="width:60px">
                        </div>
                        <div class="content-services">
                            <h2><a class="enq" onclick="product('Fire Insurance')"  href="#">Fire insurance</a></h2>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-6">
                    <div class="wrap-services bt clearfix mobi-mt40">
                        <div class="image-services">
                            <img src="{{url('/')}}/public/assets/icons/industrialwhite.png" style="width:60px" alt="image">
                        </div>
                        <div class="content-services">
                            <h2><a class="enq" onclick="product('Industrial all Policy Risk')" href="#">Industrial All Risk Policy</a></h2>
                        </div>
                    </div>
                </div>
                  <div class=" col-md-4 col-sm-6">
                    <div class="wrap-services bt clearfix mobi-mt40">
                        <div class="image-services">
                            <img src="{{url('/')}}/public/assets/icons/marinewhite.png" alt="image" style="width:60px">
                        </div>
                        <div class="content-services">
                            <h2><a class="enq" onclick="product('Marine Insurance')" href="#">Marine Insurance</a></h2>
                        </div>
                        </div>
                    
                </div>
                <div class=" col-md-4 col-sm-6">
                    <div class="wrap-services bt clearfix mobi-mt40">
                        <div class="image-services">
                            <img src="{{url('/')}}/public/assets/icons/liabilitywhite.png" alt="image" style="width:60px">
                        </div>
                        <div class="content-services">
                            <h2><a class="enq" onclick="product('Liability Insurance')" href="#">Liability Insurance</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <section class="flat-testimonials">  
       <div class="container">
        <div class="row"><br><br><br>
            <center><h1>Testimonials</h1></center><br><br>
        </div>
           <div class="row fix-height-box" >
               <div class=" col-md-4 col-sm-6 ">
                   <div class="wrap-testimonials" style="background:white">
                     
                       <div class="content-testimonials">
                           <p>“We are very thankful to the entire zfinca Team who has guided us in each stage of the claim and supported us to complete the entire procedure of the claim”
</p>
                       </div>
                   </div>
               </div>
               <div class="col-md-4 col-sm-6">
                   <div class="wrap-testimonials" style="background:white">
                     
                       <div class="content-testimonials">
                         
                           <p>“We appreciate the service and support extended to our company to get our insurance claim settled. Looking forward to our earliest settlement of our claim”</p>
                       </div>
                   </div>
               </div>
               <div class="col-md-4 col-sm-6">
                   <div class="wrap-testimonials" style="background:white">
                     
                       <div class="content-testimonials" >
                       
                           <p>“Appreciation and Thanks for your long support for getting the claim settlement hassle free. Expecting this same service always”</p><br>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
</div>

@endsection
