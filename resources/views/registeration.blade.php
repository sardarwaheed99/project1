<!DOCTYPE html>
<html>
<head>
<title>SparesHub</title>
<link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="public/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="public/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="public/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="public/js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="search">
					<form>
						<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="Go">
					</form>
			</div>
			<div class="header-left">		
					<ul>
						<li ><a class="lock"  href="login"  >Login</a></li>
						<li><a class="lock" href="registeration"  >Register</a></li>
					</ul>
				<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="/project"><img src="public/images/logo.png" alt style="height:50px"></a>	
				</div>
		  <div class=" h_menu4">
					<ul class="memenu skyblue">
					  	
				      <li><a class="color1" href="login">Manager</a>
				      	<div class="mepanel">
						<div class="row">
							
							
							<div class="col1">
								<div class="h_nav">
									
								</div>												
							</div>
						  </div>
						</div>
					</li>
				    <li class="grid"><a class="color2" href="#">	Application</a>
					  	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									
								</div>												
							</div>
						  </div>
						</div>
			    </li>
				<!-- <li><a class="color4" href="partner">Our Services</a></li>				 -->
				<li><a class="color6" href="contact">Contact</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	
<!--content-->

<div class=" container">
<div class=" register">
	<h1>Registeration</h1>
		  	  <form  method="POST" action="{{ route('register') }}"> 
				{{ csrf_field() }}
				<div class="col-md-6 register-top-grid">
					<h3>Personal infomation</h3>
					 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<span>Name</span>
						<input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus> 
						@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
        
					 </div>
					 
					 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<span>Email Adress</span>
						<input type="text" name="email" value="{{ old('email') }}" required> 
						@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					 </div>
					 
					  
					 </div>
				     <div class="col-md-6 register-bottom-grid">
						    <h3>Login information</h3>
							 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<span>Password</span>
								<input type="password" name="password" required>
								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
			
							 </div>
							 <div>
								<span>Confirm Password</span>
								<input id="password-confirm" type="password"  name="password_confirmation" required>
							 </div>
							 <input type="submit" value="submit">
							
					 </div>
					 <div class="clearfix"> </div>
				</form>
			</div>
</div>
<!--//content-->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="#">How to USE</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact">Location</a></li>
					    <li><a href="#">Membership</a></li>	
					</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>
				
				    <p>BS IT F 15 </p>
					<p>International Islamic University</p>
					<p>office:  0313-5510512</p>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
						
					</ul>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p >© 2020 All Rights Reserved | Design by  <a href="http://www.technocation.pk/" target="_blank">Technocation</a> </p>
		</div>
		</div>
</body>
</html>
			