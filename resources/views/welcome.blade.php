@extends('menu')

<!DOCTYPE html>
<html>
<head>
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

</head>
<body>
<!--header-->

       <!-- herjkejrekrj -->
       @section('content')

    <div class="banner">
        <div class="container">
              <script src="public/js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
            <div  id="top" class="callbacks_container fluid">
            <ul class="rslides" id="slider">
                <li>
                    
                        <div class="banner-text">
                            <h3>General  </h3>
                        <p style="color:white;font-size:20px; padding:20px;">SparesHub IS E Commerce Spares parts Website which inform about products.
</p>
                        <a href=" ">Learn More</a>
                        </div>
                
                </li>
                <li>
                    
                        <div class="banner-text">
                            <h3>Our Aim </h3>
                        <p style="color:whites;font-size:20px; padding:20px;" > Ships auto parts and body parts from over 300 manufacturers to customers' doors.
</p>
                         <a href="aboutus">Learn More</a>

                        </div>
                    
                </li>
                <li>
                        <div class="banner-text" style="margin-left:40px">
                            <h3>PARTNERS</h3>
                        <p style="color:whte;font-size:20px; padding:20px;">For Partnership. Kndly visit Us</b> </p>
                                <a href="partner">Learn More</a>

                        </div>
                    
                </li>
            </ul>
        </div>

    </div>
    </div>

<!--content-->
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>NEW RELEASED</h1>
		
		<div class="grid-in">
		@foreach($product as $y)
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
</div>
<div class="content-top-bottom"><br>
<br>
		<h2>Featured Collections</h2>
		<div class="col-md-6 men">
			<a href="/project/login" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t1.jpg" alt="">
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
<div class="content-bottom">
		<ul>
			<li><a href="#"><img class="img-responsive" src="public/images/download.jfif" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="public/images/download1.jfif" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="public/images/download3.jfif" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="public/images/download4.jfif" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="public/images/download5.PNG" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="public/images/download6.jfif" alt=""></a></li>
		<div class="clearfix"> </div>
		</ul>
	</div>
</div>

<div class="footer">
                <div class="container">
            <div class="footer-top-at">
            
                <div class="col-md-4 amet-sed">
                <h4>MORE INFO</h4>
                <ul class="nav-bottom">
                        <li><a href="#">How to Use</a></li>
                        <li><a href="contact">FAQ</a></li>
                        <li><a href="contact">Location</a></li>
                        <li><a href="#">Membership</a></li> 
                    </ul>   
                </div>
                <div class="col-md-4 amet-sed ">
                <h4>CONTACT US</h4>
                
                    <p>BS IT F 15 </p>
                    <p>International Islamic University</p>
                    <p>Office:  0313-5510512</p>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/"><i class="facebook"> </i></a></li>                       
                        <li><a href="https://twitter.com/login?lang=en"><i class="twitter"> </i></a></li>
                        <li><a href="#"><i class="rss"> </i></a></li>
                        <li><a href="https://www.google.com/intl/en-GB/gmail/about/#"><i class="gmail"> </i></a></li>
                        
                    </ul>
                </div>
        
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer-class">
        <p >© 2020 All Rights Reserved | Design by  <a href="http://www.technocation.pk/" target="_blank">Technocation</a> </p>
        </div>
        </div>
        @endsection
        <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
            