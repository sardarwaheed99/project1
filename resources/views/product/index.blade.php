@extends('layouts.admin')


@section('content')

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
		<h1>NEW RELEASED</h1>
    <a href="{{route('product-list')}}" >Add More Products </a>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="  " class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="public/images/pi.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>T-Shirt</span>	
									</h3>
								</div>
				</a>
		

			<p><a href="  ">Contrary to popular</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="  " class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="public/images/pi1.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Shoe</span>	
									</h3>
								</div>
				</a>
			<p><a href="  ">classical Latin</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="  " class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="public/images/pi2.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Bag</span>	
									</h3>
								</div>
				</a>
			<p><a href="  ">undoubtable</a></p>
			</div>
					<div class="clearfix"> </div>
		</div>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="  " class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="public/images/pi3.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Shirt</span>	
									</h3>
								</div>
				</a>
			<p><a href="  ">suffered alteration</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="  " class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="public/images/pi4.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Bag</span>	
									</h3>
								</div>
				</a>
			<p><a href="  ">Content here</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="  " class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="public/images/pi5.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Shoe</span>	
									</h3>
								</div>
				</a>
			<p><a href="  ">readable content</a></p>
			</div>
					<div class="clearfix"> </div>
		</div>
	</div>
	<!----->
	
	<div class="content-top-bottom">
		<h2>Featured Collections</h2>
		<div class="col-md-6 men">
			<a href="#" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t1.jpg" alt="">
				<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
			</a>
			
			
		</div>
		<div class="col-md-6">
			<div class="col-md1 ">
				<a href="#" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t2.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in1   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
				</a>
				
			</div>
			<div class="col-md2">
				<div class="col-md-6 men1">
					<a href="#" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t3.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
					</a>
					
				</div>
				<div class="col-md-6 men2">
					<a href="#" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t4.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
					</a>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
    <!---->
 

    </div>
</div>


      </div>
</section>
</div>
@endsection