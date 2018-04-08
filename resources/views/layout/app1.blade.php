<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>EVent</title>
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
  <!-- Animate -->
  <link rel="stylesheet" href="{{ asset('magazine/css/animate.css') }}">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="{{ asset('magazine/css/bootstrap.css') }}">

  <link rel="stylesheet" href="{{ asset('magazine/css/style.css') }}">
  <!-- Styles G-Spot-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.bxslider.min.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type='text/javascript' src="{{ asset('js/bootstrap.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/gspot.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,500" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">


  <!-- Modernizr JS -->
  <script src="{{ asset('magazine/js/modernizr-2.6.2.min.js') }}"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
<body data-spy="scroll" data-target="#navbar-scroll">
<div id="menu">
    <nav class="navbar-wrapper navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand site-name" href="#top"><img src="{{ asset('img/logo2.jpg') }}" alt="logo"></a>
            </div>

            <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}#home">Home</a></li>
                    <li><a href="{{ url('/about') }}#about">About</a></li>
                    <li><a href="{{ url('/cari') }}">Cari</a></li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                    <li><a href="{{ url('/') }}#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
@yield('content')
<footer id="fh5co-footer">
  <p><small>&copy; 2016. Magazine Free HTML5. All Rights Reserverd. <br> Designed by <a href="http://freehtml5.co" target="_blank">FREEHTML5.co</a>  Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
</footer>
  
  <!-- jQuery -->
	<script src="{{ asset('magazine/js/jquery.min.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('magazine/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('magazine/js/jquery.waypoints.min.js') }}"></script>
	<!-- Main JS -->
	<script src="{{ asset('magazine/js/main.js') }}"></script>
</body>

</html>
