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

                    <!-- Authentication Links -->
                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <a href="{{URL::to('logoutt')}}">
                                    Logout
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                                <a class="nav-link" href="contact">Contct</a>
                            </li>
                        </ul>
                        </div>
                        </div>
                        </nav>



                    
                    <div class="clearfix"> </div>
            </div>
                <div class="clearfix"> </div>
        </div>
        </div>
<div class="container-fluid">
            <div class="head-top">
                <div class="logo">
                    <a href="/project"><img src="public/images/logo.png" alt style="height:50px"></a> 
                </div>
          <div class=" h_menu4">
                <ul class="memenu skyblue">
                      
                    <li>
                    </li>
                    <li class="grid">
                </li>
                <!-- <li><a class="color4" href="partner">Our Services</a></li>  -->
                <!-- <li><a class="color6" href="contact">Contact</a></li> -->
              </ul> 
            </div>
                
                <div class="clearfix"> </div>
        </div>
        </div>

    </div>
    <div class="container">
        @yield('content');
    </div>
    </body>
</html>