<div class="sidebar" data-color="rose" data-background-color="black">

      <div class="logo">

        <a href="{{route('Admin/Dashboard')}}" class="simple-text logo-normal">
        <center> 
          <img src="{{url('/')}}/public/assets/Logo.png" style="width: 150px">
        </center>
        </a>
      </div>
      <div class="sidebar-wrapper">
    
        <ul class="nav">
          <li class="nav-item active" >
            <a style="box-shadow: none; background: #303948" class="nav-link" href="{{route('Admin/Dashboard')}}">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          
                 <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples14">
              <i class="fa fa-phone"></i>
              <p> Product Enquiry
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples14">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/EnquiryForm')}}">
                    <span class="sidebar-mini"> ED </span>
                    <span class="sidebar-normal"> Manage </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          
             <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples12">
              <i class="fa fa-mobile"></i>
              <p> Contact Details
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples12">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Contact')}}">
                    <span class="sidebar-mini"> ED </span>
                    <span class="sidebar-normal"> Manage </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples4">
              <i class="fa fa-asterisk"></i>
              <p> Master Category
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples4">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/MasterCategory')}}">
                    <span class="sidebar-mini"> MC </span>
                    <span class="sidebar-normal">Manage</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/MasterCategory/Add')}}">
                    <span class="sidebar-mini"> MC </span>
                    <span class="sidebar-normal"> Add </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples10">
              <i class="fa fa-product-hunt"></i>
              <p>  Product
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples10">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Product')}}">
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Manage </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Product/Add')}}">
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Add </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <!--<li class="nav-item ">-->
          <!--  <a class="nav-link" data-toggle="collapse" href="#pagesExamples1">-->
          <!--    <i class="fa fa-picture-o"></i>-->
          <!--    <p> Banner-->
          <!--      <b class="caret"></b>-->
          <!--    </p>-->
          <!--  </a>-->
          <!--  <div class="collapse" id="pagesExamples1">-->
          <!--    <ul class="nav">-->
          <!--      <li class="nav-item ">-->
          <!--        <a class="nav-link" href="{{route('Admin/Banner')}}">-->
          <!--          <span class="sidebar-mini"> B </span>-->
          <!--          <span class="sidebar-normal"> Manage </span>-->
          <!--        </a>-->
          <!--      </li>-->
          <!--      <li class="nav-item ">-->
          <!--        <a class="nav-link" href="{{route('Admin/Banner/Add')}}">-->
          <!--          <span class="sidebar-mini"> B </span>-->
          <!--          <span class="sidebar-normal"> Add </span>-->
          <!--        </a>-->
          <!--      </li>-->
          <!--    </ul>-->
          <!--  </div>-->
          <!--</li>-->


           <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples2">
              <i class="fa fa-file-o"></i>
              <p> Images
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples2">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Image')}}">
                    <span class="sidebar-mini"> I </span>
                    <span class="sidebar-normal"> Manage </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Image/Add')}}">
                    <span class="sidebar-mini"> I </span>
                    <span class="sidebar-normal"> Add </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>


           <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples3">
              <i class="fa fa-video-camera"></i>
              <p> Videos
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples3">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Video')}}">
                    <span class="sidebar-mini"> V </span>
                    <span class="sidebar-normal"> Manage </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/Video/Add')}}">
                    <span class="sidebar-mini"> V </span>
                    <span class="sidebar-normal"> Add  </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

           <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples9">
              <i class="fa fa-file"></i>
              <p> Team Member
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples9">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/TeamMember')}}">
                    <span class="sidebar-mini"> C </span>
                    <span class="sidebar-normal"> Manage </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('Admin/TeamMember/Add')}}">
                    <span class="sidebar-mini"> C </span>
                    <span class="sidebar-normal"> Add  </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

    

         <!--<li class="nav-item ">-->
         <!--   <a class="nav-link" data-toggle="collapse" href="#pagesExamples16">-->
         <!--     <i class="fa fa-bell"></i>-->
         <!--     <p> Notification-->
         <!--       <b class="caret"></b>-->
         <!--     </p>-->
         <!--   </a>-->
         <!--   <div class="collapse" id="pagesExamples16">-->
         <!--     <ul class="nav">-->
         <!--       <li class="nav-item ">-->
         <!--         <a class="nav-link" href="{{route('Admin/Notification')}}">-->
         <!--           <span class="sidebar-mini"> C </span>-->
         <!--           <span class="sidebar-normal"> Manage </span>-->
         <!--         </a>-->
         <!--       </li>-->
         <!--       <li class="nav-item ">-->
         <!--         <a class="nav-link" href="{{route('Admin/Notification/Add')}}">-->
         <!--           <span class="sidebar-mini"> C </span>-->
         <!--           <span class="sidebar-normal"> Add  </span>-->
         <!--         </a>-->
         <!--       </li>-->
         <!--     </ul>-->
         <!--   </div>-->
         <!-- </li>-->
       
          
         <form action="{{route('logout')}}" method="post">
            {{csrf_field()}}            <li class="nav-item">
              <a class="nav-link">
              <i class="fa fa-power-off"></i>
                <p>
                  <input type="submit" style="cursor: pointer;color:white;background-color:transparent;border:none;outline:none;margin-left:-7px;" value="Log out">
                </p>
              </a>
            </li>
          </form>
           <br><br><br><br>
<br><br>
<br><br>


        </ul>
      </div>
    </div>