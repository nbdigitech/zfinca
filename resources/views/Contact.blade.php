@extends('layouts.Master')
@section('MainSection')
       
    <div class="page-title">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h1>
                                <a href="#"> Contact </a>
                            </h1>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li>
                                    <a href="{{route('Index')}}">HOME</a>
                                </li>
                                <li>
                                    <a href="#">CONTACT</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.253266361612!2d81.67521071488736!3d21.26144008587284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dd5bed00fa63%3A0x5cb750185083cbdd!2sVIP%20Rd%2C%20Raipur%2C%20Chhattisgarh%20492007!5e0!3m2!1sen!2sin!4v1588225829318!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <section class="flat-get-in-touch clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrap-get-in-touch">
                            <div class="get-in-touch">
                                <p>ANY QUERY</p>
                                <h2>Get In Touch</h2>
                                <form  action="{{route('Contact/Store')}}" method="post" accept-charset="utf-8" class="form-submit contact-form wpcf7-form">
                                    {{csrf_field()}}
                                    <span class="wpcf7-form-control-wrap your-name">
                                        <input type="text" tabindex="1" id="name" name="Name" value="" class="wpcf7-form-control name" placeholder="Enter your name...." required>
                                    </span>
                                    <div class="flat-divider-margintop10px"></div>                                                           
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" tabindex="3" id="email" name="Email" value="" class="wpcf7-form-control email" placeholder="Enter your email...." required>
                                    </span>
                                    <div class="flat-divider-margintop10px"></div>                                                           
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="text" tabindex="3" id="email" name="Subject" value="" class="wpcf7-form-control email" placeholder="Enter your Subject...." required>
                                    </span>
                                    <div class="flat-divider-margintop12px"></div>
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea name="Message" tabindex="5" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea message" placeholder="Enter your message...." required ></textarea>
                                    </span> 
                                    <div class="flat-divider-margintop12px "></div>                                                            
                                    <div class="wrap-submit submit-form">
                                        <div class="wrap-btn">
                                            <button type="submit" class="flat-button-arrow">Submit Now</button>
                                        </div>
                                    </div>                                                         
                                </form>
                            </div>
                            <div class="contact-info">
                                <p>ANYTHING ON MIND</p>
                                <h3>Contact Info</h3>
                                <ul>
                                    <li class="clearfix">
                                        <div class="wrap-icon">
                                            <!--<img src="{{url('/')}}/public/image/contact/contact3.png" alt="consulty">-->
                                        </div>
                                        <div class="wrap-info">
                                            <h2>Phone Number</h2>
                                            <p class="top">86555 55582</p>
                                        </div>
                                    </li>
                                    <li class="center clearfix">
                                        <div class="wrap-icon">
                                            <!--<img src="{{url('/')}}/public/image/contact/contact4.png" alt="consulty">-->
                                        </div>
                                        <div class="wrap-info">
                                            <h2>Email Address</h2>
                                            <p class="top">zfincainsurance@gmail.com</p>
                                        </div>
                                    </li>
                                    <li class="bottom clearfix">
                                        <div class="wrap-icon">
                                            <!--<img src="{{url('/')}}/public/image/contact/contact5.png" alt="consulty">-->
                                        </div>
                                        <div class="wrap-info">
                                            <h2>Office Address</h2>
                                            <p class="top">2nd Floor, Gokul Heights VIP Estate, Khamardih, Raipur, Chhattisgarh</p>
                                            
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection