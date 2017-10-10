<!DOCTYPE html>
<html>
    <head>

        <!-- /.website title -->
        <title>Magang.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS Files -->
        <link href="{{ asset('template/backyard/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('template/backyard/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/backyard/fonts/icon-7-stroke/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
        <link href="{{ asset('template/backyard/css/animate.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('template/backyard/css/owl.theme.css') }}" rel="stylesheet">
        <link href="{{ asset('template/backyard/css/owl.carousel.css') }}" rel="stylesheet">

        <!-- Colors -->
        <link href="{{ asset('template/backyard/css/css-index.css') }}" rel="stylesheet" media="screen">
        <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />
    </head>

    <body data-spy="scroll" data-target="#navbar-scroll">
    <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>

        <!-- NAVIGATION -->
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
                        <a class="navbar-brand site-name" href="#top"><img src="{{ asset('template/backyard/images/magang7.jpg') }}" alt="logo"></a>
                    </div>

                    <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/crmag') }}">Cari Magang</a></li>
                            <li><a href="{{ url('/') }}#intro">About</a></li>
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login/Register</a></li>
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
                            <li><a href="{{ url('/') }}#package">Pricing</a></li>
                            <li><a href="{{ url('/') }}#testi">Reviews</a></li>
                            <li><a href="{{ url('/') }}#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    @yield('content')
        <!-- /.footer -->
        <footer id="footer">
            <div class="container">
                <div class="col-sm-4 col-sm-offset-4">
                    <!-- /.social links -->
                    <div class="social text-center">
                        <ul>
                            <li><a class="wow fadeInUp" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="wow fadeInUp" href="https://plus.google.com/" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>	
                    <div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright Magang 2017<a href="" target="_blank"></a></div>
                    <a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
                </div>	
            </div>	
        </footer>
        <!-- /.javascript files -->
        <script src="{{ asset('template/backyard/js/jquery.js') }}"></script>
        <script src="{{ asset('template/backyard/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('template/backyard/js/custom.js') }}"></script>
        <script src="{{ asset('template/backyard/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('template/backyard/js/wow.min.js') }}"></script>
        <script src="{{ asset('template/backyard/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('template/backyard/js/ekko-lightbox-min.js') }}"></script>
        <script type="{{ asset('template/backyard/text/javascript') }}">
                                    $( document ).delegate( '*[data-toggle="lightbox"]', 'click', function ( event ) {
                                        event.preventDefault();
                                        $( this ).ekkoLightbox();
                                    } );
        </script>
        <script>
            new WOW().init();
        </script>
        @yield('script')
    </body>
</html>