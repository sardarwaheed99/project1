


@extends('layouts.admin')

@section('content')
<?php if(Auth::user()->admin==1)
{ ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Products</h3>
                <div style="float:right"class="col-md-2">
                <a class="btn btn-block bg-gradient-primary" href="{{route('product-create')}}" > Add Product</a>  
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                  <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
                  </thead>
                  <tbody>
  @foreach($data as $y)
  <tr>
  <th>{{$y->id}} </th>
  <td>{{$y->p_name}} </td>
  <td>{{$y->p_type}} </td>
  <td>{{$y->p_price}} </td>
  <td>{{$y->quantity}}</td>
  <td> <a class="btn" href="/project/product/delete/{{$y->id}}"><i class="fa fa-trash"></i></a> 
   <a class="btn" href="/project/product/edit/{{$y->id}}"><i class="fa fa-pencil"></i></a> </td>   
</tr>
  @endforeach
    
  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
             
            </div>


          </div>
        </div>
      </div>
</section>
</div>
<?php } else{ ?>
  <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3 s;
  animation-name: fade;
  animation-duration: 3 s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">

      <div class="content">
	<div class="container">
	<div class="content-top">
		<h1>Products</h1>
    <div class="grid-in">
    @foreach($data as $y)
		
			<div class="col-md-3 grid-top " style="width:23%">
				<a href="{{route('product-view',$y->id)}}" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{ asset('public/images/'.$y->image) }}" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>{{$y->p_name}}</span>	
									</h3>
								</div>
				</a>
		

			<p style="margin:10px;">{{$y->p_name}}</p>
			</div>

	
	@endforeach
</div>
	</div>
    <!---->
 

    </div>
</div>


      </div>
</section>
</div>
<?php } ?>
@endsection
