@extends('layouts.Master')
@section('MainSection')
<div class="page-title">
   <div class="container">
       <div>
           <div class="row">
               <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h1>
                           <a href="#"> Videos</a>
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li>
                                <a href="{{route('Index')}}">HOME</a>
                            </li>
                            <li>
                                <a href="#">Gallery</a>
                            </li>
                        </ul>
                    </div>
               </div>
           </div>
       </div>
   </div>
</div>

 <div class="main-team">
 	<div class="container">
 		<div class="row">
 		    @foreach($videos as $row)
 			<div class="col-sm-4">
 				<iframe width="100%" height="315" src="{{$row->URL}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 			</div>
 			@endforeach
 		</div>
 	</div>
 </div>

@endsection