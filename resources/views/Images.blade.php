@extends('layouts.Master')
@section('MainSection')
<style type="text/css">


.container__img-holder {
	z-index: 10000;
  max-width: 100%;
 	margin:auto;
  display: inline-block;
  vertical-align: top;
  margin-bottom: 20px;
  margin-left: 16px;
  cursor: pointer;
}

.container .container__img-holder:nth-child(3n+1) {
  margin-left: 0;
}

.container__img-holder img {
  width: 100%;
  height: 220px;
  display: block;z-index: 10000;
}


/* Popup Styling */
.img-popup {
  position: fixed;z-index: 10000;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(255, 255, 255, .5);
  display: flex;
  justify-content: center;
  align-items: center;
  display: none;
}

.img-popup img {
  max-width: 900px;z-index: 10000;
  width: 100%;
  opacity: 0;
  transform: translateY(-100px);
  -webkit-transform: translateY(-100px);
  -moz-transform: translateY(-100px);
  -ms-transform: translateY(-100px);
  -o-transform: translateY(-100px);
}

.close-btn {
  width: 35px;
  height: 30px;z-index: 10000;
  display: flex;
  justify-content: center;
  flex-direction: column;
  position: absolute;
  top: 20px;
  right: 20px;
  cursor: pointer;
}

.close-btn .bar {
  height: 4px;
  background: #333;
}

.close-btn .bar:nth-child(1) {
  transform: rotate(45deg);
}

.close-btn .bar:nth-child(2) {
  transform: translateY(-4px) rotate(-45deg);
}

.opened {
  display: flex;
}

.opened img {
  animation: animatepopup 1s ease-in-out .8s;
  -webkit-animation: animatepopup .3s ease-in-out forwards;
}

@keyframes animatepopup {

  to {
    opacity: 1;
    transform: translateY(0);
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
  }

}

@media screen and (max-width: 880px) {

  .container .container__img-holder:nth-child(3n+1) {
    margin-left: 16px;
  }

}
</style>
<div class="page-title">
   <div class="container">
       <div>
           <div class="row">
               <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h1>
                           <a href="#"> Images</a>
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li>
                                <a href="{{route('Index')}}">HOME</a>
                            </li>
                            <li>
                                <a href="#">Galllery</a>
                            </li>
                        </ul>
                    </div>
               </div>
           </div>
       </div>
   </div>
</div>
<div class="container">
 <div class="main-team">
 	<div class="row">
 	@foreach($image as $row)
 	<div class="col-sm-3">
 	<div class="container__img-holder">
    <img src="{{url('/')}}/public/assets/uploads/{{$row->Image}}" alt="Image">
    </div>
    </div>
    @endforeach
  </div>
</div>

<div class="img-popup">
  <img src="" alt="Popup Image">
  <div class="close-btn">
    <div class="bar"></div>
    <div class="bar"></div>
  </div>


 </div>
 </div>
@endsection

@section('js')
<script type="text/javascript">
	$(document).ready(function() {

  // required elements
  var imgPopup = $('.img-popup');
  var imgCont  = $('.container__img-holder');
  var popupImage = $('.img-popup img');
  var closeBtn = $('.close-btn');

  // handle events
  imgCont.on('click', function() {
    var img_src = $(this).children('img').attr('src');
    imgPopup.children('img').attr('src', img_src);
    imgPopup.addClass('opened');
  });

  $(imgPopup, closeBtn).on('click', function() {
    imgPopup.removeClass('opened');
    imgPopup.children('img').attr('src', '');
  });

  popupImage.on('click', function(e) {
    e.stopPropagation();
  });
  
});
</script>
@endsection