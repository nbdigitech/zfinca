<style>
@-webkit-keyframes float {
  0% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
  50% {
    transform: translatey(-30px);
    transform: translatex(20px);
  }
  100% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
}
@-moz-keyframes float {
  0% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
  50% {
    transform: translatey(-30px);
    transform: translatex(20px);
  }
  100% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
}
@-o-keyframes float {
  0% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
  50% {
    transform: translatey(-30px);
    transform: translatex(20px);
  }
  100% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
}
@keyframes float {
  0% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
  50% {
    transform: translatey(-30px);
    transform: translatex(20px);
  }
  100% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
}
/* RESET
========================================== */
*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


/* BUTTON
========================================== */
.button {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 11002;
}
.button button {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-family: inherit;
  background-color: #ffffff;
  border: 0;
  padding: 15px 25px;
  color: #000000;
  text-transform: uppercase;
  font-size: 21px;
  letter-spacing: 1px;
  width: 200px;
  overflow: hidden;
  outline: 0;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
  visibility: visible;
  opacity: 1;
  font-weight: bold;
  box-shadow: 0px 6px 30px rgba(0, 0, 0, 0.6);
}
.button button:hover {
  cursor: pointer;
  background-color: #8e6ac1;
  color: #ffffff;
}
.button button span {
  opacity: 1;
}
.button.clicked button {
  visibility: hidden;
  oacity: 0;
}

/* POP-UP
========================================== */
.pop-up {
  position: absolute;
  top: 50%;
  border-radius:8px;
  left: 50%;
  -webkit-transform: translate(-50%, -50%) scale(0.9);
  -moz-transform: translate(-50%, -50%) scale(0.9);
  -ms-transform: translate(-50%, -50%) scale(0.9);
  -o-transform: translate(-50%, -50%) scale(0.9);
  transform: translate(-50%, -50%) scale(0.9);
  overflow-y: auto;
  box-shadow: 0px 6px 30px rgba(0, 0, 0, 0.4);
  visibility: hidden;
  opacity: 0;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  z-index: 1100;;
  background-color: #ffffff;
  width: 100%;
  
}
@media (min-width: 768px) {
  .pop-up {
    width: calc(100% - 40px);
    height: auto;
    max-width: 500px;
    border-radius:8px;
  }
}
.pop-up .content {
  width: 100%;
  max-width: 500px;
  overflow: hidden;
  text-align: center;
  position: relative;
  
}
@media (min-width: 768px) {
  .pop-up .content {
    min-height: inherit;
  }
}
.pop-up .content .container {
  padding: 30px 20px 40px;
}
@media (min-width: 568px) {
  .pop-up .content .container {
    padding: 50px 20px 80px;
  }
}
@media (min-width: 768px) {
  .pop-up .content .container {
    padding: 70px 0px 90px;
    max-width: 520px;
    margin: 0 auto;
  }
}
.pop-up .content .close {
  position: absolute;
  top: 20px;
  right: 20px;
  font-size: 1.8rem;
  letter-spacing: 0.05rem;
  color: black;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
}
.pop-up .content .close:hover {
  cursor: pointer;
  color: #f66867;
}
.pop-up .content .dots .dot {
  position: absolute;
  border-radius: 100%;
  z-index: 1100;
}
.pop-up .content .dots .dot:nth-of-type(1) {
  top: -80px;
  right: -80px;
  width: 160px;
  height: 160px;
  background-color: #689bf6;
  -webkit-animation: float 6s ease-in-out infinite;
  -moz-animation: float 6s ease-in-out infinite;
  -o-animation: float 6s ease-in-out infinite;
  animation: float 6s ease-in-out infinite;
}
@media (min-width: 768px) {
  .pop-up .content .dots .dot:nth-of-type(1) {
    top: -190px;
    right: -190px;
    width: 380px;
    height: 380px;
  }
}
.pop-up .content .dots .dot:nth-of-type(2) {
  bottom: -120px;
  left: -120px;
  width: 240px;
  height: 240px;
  background-color: #f66867;
  -webkit-animation: float 8s ease-in-out infinite;
  -moz-animation: float 8s ease-in-out infinite;
  -o-animation: float 8s ease-in-out infinite;
  animation: float 8s ease-in-out infinite;
}
.pop-up .content .dots .dot:nth-of-type(3) {
  bottom: -50px;
  right: -50px;
  width: 100px;
  height: 100px;
  background-color: #ffd84c;
  -webkit-animation: float 4s ease-in-out infinite;
  -moz-animation: float 4s ease-in-out infinite;
  -o-animation: float 4s ease-in-out infinite;
  animation: float 4s ease-in-out infinite;
}
.pop-up .content .title h1 {
  text-align: center;
  color: #f66867;
  text-transform: uppercase;
  font-weight: 900;
  font-size: 2.8rem;
  letter-spacing: 0.05rem;
}
.pop-up .content img {
  width: 100%;
  max-width: 220px;
  display: inline-block;
  margin: 30px 0 40px 0;
  opacity: 0;
  -webkit-transform: translateX(60px);
  -moz-transform: translateX(60px);
  -ms-transform: translateX(60px);
  -o-transform: translateX(60px);
  transform: translateX(60px);
  -webkit-transition: 0.2s;
  -moz-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
  -webkit-backface-visibility: hidden;
}
@media (min-width: 768px) {
  .pop-up .content img {
    max-width: 300px;
  }
}
.pop-up .content .subscribe h1 {
  font-size: 1.5rem;
  color: #3e4146;
  line-height: 130%;
  letter-spacing: 0.07rem;
  margin-bottom: 30px;
}
.pop-up .content .subscribe h1 span {
  color: #f66867;
}
.pop-up .content .subscribe form {
  overflow: hidden;
}
.pop-up .content .subscribe form input {
  width:80%;
  margin:auto;
  padding: 15px 20px;
  font-family: inherit;
  font-size: 1.1rem;
  border: 0.5px solid #e6e6e6;
  letter-spacing: 0.05rem;
  outline: 0;
}
.pop-up .content .subscribe form input[type=email] {
  margin-bottom: 15px;
  border: 0.5px solid #e6e6e6;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
}
@media (min-width: 768px) {
  .pop-up .content .subscribe form input[type=email] {
    margin-bottom: 0px;
    width: 75%;
    border-right-width: 0px;
  }
}
.pop-up .content .subscribe form input[type=email]:focus {
  border-color: #3e4146;
}
.pop-up .content .subscribe form input[type=submit] {
  background-color: #8e6ac1;
  color: #ffffff;
  border: 1px solid #8e6ac1;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
}
@media (min-width: 768px) {
  .pop-up .content .subscribe form input[type=submit] {
    width: 25%;
  }
}
.pop-up .content .subscribe form input[type=submit]:hover {
  cursor: pointer;
  background-color: #7349af;
  border-color: #7349af;
}
.pop-up.open {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translate(-50%, -50%) scale(1);
  -moz-transform: translate(-50%, -50%) scale(1);
  -ms-transform: translate(-50%, -50%) scale(1);
  -o-transform: translate(-50%, -50%) scale(1);
  transform: translate(-50%, -50%) scale(1);
}
.pop-up.open img {
  opacity: 1;
  -webkit-transition: 1s;
  -moz-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
  -webkit-transition-delay: 0.3s;
  -moz-transition-delay: 0.3s;
  -o-transition-delay: 0.3s;
  transition-delay: 0.3s;
  -webkit-transform: translateX(0px);
  -moz-transform: translateX(0px);
  -ms-transform: translateX(0px);
  -o-transform: translateX(0px);
  transform: translateX(0px);
}

</style>
<footer class="style1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="widget-text">
                   <a href="#"><img src="{{url('/')}}/public/assets/Logo.png" alt="Zfinca"></a>
                    <p>Zfinca Insurance Brokers Private Limited is a Private incorporated on 21 February 2019. It is classified as a Non-govt company and is registered at Registrar of Companies, Chhattisgarh.</p>
                </div>

            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="widget-privecy widget-list">
                    <h2 class="widget-title">Important Link</h2>
                    <ul>
                        <li><a href="#"><span class="letter-spacing-08"> General Insurance  </span></a></li>
                        <li><a href="#"><span class="letter-spacing-08"> Health Insurance  </span></a></li>
                        <li><a href="#"><span class="letter-spacing-08"> Travel Insurance  </span></a></li>
                        <li><a href="#"><span class="letter-spacing-08"> Fire Insurance  </span></a></li>
                        <li><a href="#"><span class="letter-spacing-08"> Motor Insurance  </span></a></li>
                        <li><a href="#"><span class="letter-spacing-08"> Industrial Insurance   </span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="widget-blog-feeds">
                    <h2 class="widget-title">Office Address</h2>
                    <ul>
                        <li class="top clearfix">
                            <div class="text">
                                <h3><a href="#">2nd Floor, Gokul Heights VIP Estate, Khamardih, Raipur, Chhattisgarh</a></h3>
                            </div>
                        </li>
                       <ul>
                        <li style="color:white"><span class="letter-spacing-08" style="color:white"> Phone : 8655555582</span></li>
                        <li style="color:white"><span style="color:white">Email : zfincainsurance@gmail.com

</span></li>
                    </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrap-bottom clearfix">
                    <div class="title-bottom">
                        <p>Developed by NB Digital Technologies</p>
                    </div>
                    <div class="social-bottom">
                        <ul>
                            <li class="social-share"><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li class="social-share"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <!--<li class="social-share"><a href="#"><i class="fab fa-behance" aria-hidden="true"></i></a></li> -->
                            <!--<li class="social-share"><a href="#"><i class="fab fa-pinterest"></i></a></li>-->
                            <li class="social-share"><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pop-up">
  <div class="content">
    <div class="container">
      
      <span class="close" >X</span>
      
      
      <div class="title">
        <h1 style="font-size:25px">Enquire Now</h1>
      </div>
      <br>
      <br>
      <div class="subscribe">
        <form action={{route('Enquire/Store')}} method="post">
            {{csrf_field()}}
          <input type="text" placeholder="Name" name="Name"><br>
          <input type="text" placeholder="Email" name="Email"><br>
          <input type="number" placeholder="Mobile" name="Mobile"><br>
          <input type="hidden" name="ProductName" id="ProductName">
          <input type="submit" value="Submit Now" style="width:80%; background:#303948">
        </form>
      </div>
    </div>
  </div>
</div>
@include('layouts.Javascript')
    <script>
$('.enq').click(function(){
  $('.pop-up').addClass('open');
});

$('.pop-up .close').click(function(){
  $('.pop-up').removeClass('open');
});
</script>
<script>
    function product(name){
        document.getElementById('ProductName').value=name
    }
</script>
@if(session()->has('success'))
<script>
    alert('Form Submited');
</script>
@endif
</body>
</html>