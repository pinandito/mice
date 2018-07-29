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
<title>eventbeta.com | Dashboard - Home</title>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
</script>
</head>
<body>
	@yield('content')
    <!-- FOOTER -->
    <footer class="directify_fn_footer_wrap">
		<div class="directify_fn_footer">
			<div class="footer_wrap">
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
								<li>Directify 2017 — Designed by <a href="#">Flab Team</a></li>
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
</div>
<!-- /WRAPPER ALL -->
<!-- SCRIPTS -->
<script type="text/javascript" src="{{asset('directify/js/plugins.js') }}"></script>
<script type="text/javascript" src="{{asset('directify/js/carousel.js') }}"></script>
<script type="text/javascript" src="{{asset('directify/js/leaflet.js') }}"></script>
<script type="text/javascript" src="{{asset('directify/js/MarkerClusterGroup.js') }}"></script>
<script type="text/javascript" src="{{asset('directify/js/markers.js') }}"></script>

</body>
</html>