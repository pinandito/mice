<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Directify">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>eventbeta.com | Homepage</title>

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Work+Sans:300,400,500,600,700,800,900" rel="stylesheet">

<!-- STYLES -->
<link rel="stylesheet" type="text/css" href="{{asset('directify/css/skeleton.css') }}" />
<link rel="stylesheet" type="text/css" href="{{asset('directify/css/base.css') }}" />
<link rel="stylesheet" type="text/css" href="{{asset('directify/css/fontello.css') }}" />
<link rel="stylesheet" type="text/css" href="{{asset('directify/css/carousel.css') }}" />
<link rel="stylesheet" type="text/css" href="{{asset('directify/css/select.css') }}" />
<link rel="stylesheet" type="text/css" href="{{asset('directify/css/colors.css') }}" />
<link rel="stylesheet" type="text/css" href="{{asset('directify/css/magnific-popup.css') }}" />
<link rel="stylesheet" type="text/css" href="{{asset('directify/css/leaflet.css') }}" />
<link rel="stylesheet" type="text/css" href="{{asset('directify/css/hamburgers.css') }}" />
<link rel="stylesheet" type="text/css" href="{{asset('directify/css/range.css') }}" />
<link rel="stylesheet" type="text/css" href="{{asset('directify/css/style.css') }}" />
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
</head>
<body>
<!-- WRAPPER ALL -->
<div class="directify_fn_wrapper_all">
	<!-- SIGN IN POPUP -->
	<div class="directify_fn_sign_in">
		<div class="directify_fn_sign_in_content">
			<div class="aaa">
				<div class="sign_in_box effect-1">
					<div class="sign_in_box_content">
						<div class="closer">
							<a href="#"><i class="xcon-cancel"></i></a>
						</div>
						<h3>Sign In</h3>
						<input type="text" placeholder="Your Login" />
						<input type="password" placeholder="Your Password" />
						<input type="submit" value="Continue" />
						<h5>Or</h5>
						<a href="#" class="facebook">Continue with Facebook</a>
						<a href="#" class="google">Sign In by Google</a>
						<p>Nullam commodo arcu lorem, id posuere lorem viverra vel. Aenean mollis ante.</p>
					</div>
				</div>
				<div class="directify_fn_sign_in_closer"></div>
			</div>
		</div>
	</div>
	<!-- /SIGN IN POPUP -->
    <!-- MOBILE MENU -->
   	<div class="directify_fn_mobile_menu_wrap absolute" data-bg-type="translight">
   	
   		<div class="directify_fn_mobile_menu">
   			<div class="mobile_logo">
				<a class="dark" href="index.html"><img src="{{asset('img/logo3.jpeg') }}" alt="" /></a>
				<a class="light" href="index.html"><img src="{{asset('img/logo3.jpeg') }}" alt="" /></a>
			</div>
  			<div class="mobile_search">
  				<a href="#">
					<img class="svg" src="{{asset('directify/img/svg/search.svg') }}" alt="" />
					Search
				</a>
  			</div>
			<div class="hamburger hamburger--collapse-r">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
  			<div class="s-search">
  				<a href="#">
  					<img class="svg" src="{{asset('directify/img/svg/search.svg') }}" alt="" />
  				</a>
  			</div>
   		</div>
   		<div class="directify_fn_mobile_nav">
   			<ul class="nav">
                <li>
					<a href="{{url('/') }}" style="color:#000">Home<i class="xcon-angle-down"></i></a>
				</li>
                <li>
					<a href="{{url('/blog') }}" style="color:#000">Blog<i class="xcon-angle-down"></i></a>
				</li>
				@if (Auth::guest())
				<li class="log-in">
					<a href="{{route('login')}}" style="color:#000">Register / Log In</a>
				</li>
				@else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#000">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" style="color:#000">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" style="color:#000">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
				<li class="add_listing">
					<a href="submit.html"><span>Add Listings</span></a>
				</li>
			</ul>
   		</div>
   		@yield('contentmobile')	
   	</div>
	<!-- /MOBILE MENU -->
   
    <!-- HEADER -->
    <header class="directify_fn_header_wrap absolute" data-bg-type="translight">
    	<div>
			<div class="directify_fn_header">
				<div class="header">
					<div class="directify_fn_header_logo">
						<a class="dark" href="index.html"><img src="{{asset('img/logo3.jpeg') }}" alt="" /></a>
						<a class="light" href="index.html"><img src="{{asset('img/logo3.jpeg') }}" alt="" /></a>
					</div>
                    @yield('contentheader')	
                    <div class="directify_fn_header_nav_list">
						<ul class="nav__hor">
                            <li>
								<a href="{{url('/')}}" style="color:#000">Home</a>
							</li>
                            <li>
								<a href="{{url('/blog')}}" style="color:#000">Blog</a>
							</li>
							@if (Auth::guest())
							<li class="log-in">
								<a href="{{route('login')}}" style="color:#000">Register / Log In</a>
							</li>
							@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#000">
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li>
										<a href="{{ route('logout') }}"
											onclick="event.preventDefault();
														document.getElementById('logout-form').submit();" style="color:#000">
											Logout
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form>
									</li>
								</ul>
							</li>
							@endif	
							<li class="add_listing">
								<a href="submit.html" style="color:#000"><img class="svg" src="{{asset('directify/img/svg/pencil.svg') }}" alt="" /><span>Add Listings</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </header>
    <!-- /HEADER -->
    @yield('contentcon')
    <!-- FOOTER -->
    <footer class="directify_fn_footer_wrap">
		<div class="directify_fn_footer">
			<div class="footer_wrap">
				<div class="footer_location_wrap">
					<div class="container">
						<div class="footer_location">
							<div class="footer_location_rows">
								<div class="footer_location_row">
									<div class="footer_logo">
										<a href="index.html">
											<img class="dark" src="{{asset('img/logo3.jpeg') }}" alt="" />
										</a>
									</div>
								</div>
								<div class="footer_location_row">
									<span>Jl. BSD Green Office Park, GOP 9 - Ground Floor BSD City, Serpong, Tangerang, Indonesia 15345 </span>
								</div>
								<div class="footer_location_row">
									<span>Map : https://bit.ly/2HxTy13</span>
								</div>
								<div class="footer_location_row">
									<span>Telp: 021 28675035, 0813 751 00376</span>
								</div>
								<div class="footer_location_row">
									<span>Email: i.pinandito@gmail.com</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer_nav_list_wrap">
					<div class="container">
						<div class="footer_nav_list">
							<ul class="social_icons">
								<li><a href="#"><i class="xcon-facebook"></i></a></li>
								<li><a href="#"><i class="xcon-twitter"></i></a></li>
								<li><a href="#"><i class="xcon-instagram"></i></a></li>
								<li><a href="#"><i class="xcon-pinterest"></i></a></li>
								<li><a href="#"><i class="xcon-gplus"></i></a></li>
							</ul>
							<ul class="menu_list">
								<li>eventbeta.com 2018<a href="#"></a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms</a></li>
								<li><a href="#">Help</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
    </footer>
    <!-- /FOOTER -->
    
    <a class="totop" href="#"><i class="xcon-angle-up"></i></a>
    <a class="listed" href="submit.html"><img class="svg" src="{{asset('directify/img/svg/pencil.svg') }}" alt="" /></a>
   
</div>
<!-- /WRAPPER ALL -->

<!-- SCRIPTS -->
<script type="text/javascript" src="((asset('directify/js/jquery.js') }}"></script>
<!--[if lt IE 11]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->	
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('directify/js/plugins.js') }}"></script>
<script type="text/javascript" src="{{asset('directify/js/carousel.js') }}"></script>
<script type="text/javascript" src="{{asset('directify/js/leaflet.js') }}"></script>
<script type="text/javascript" src="{{asset('directify/js/MarkerClusterGroup.js') }}"></script>
<script type="text/javascript" src="{{asset('directify/js/markers.js') }}"></script>
<script type="text/javascript" src="{{asset('directify/js/map.js') }}"></script>
<script type="text/javascript" src="{{asset('directify/js/init.js') }}"></script>

</body>
</html>