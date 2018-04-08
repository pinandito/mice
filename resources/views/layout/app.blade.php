<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EVENT') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.bxslider.min.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type='text/javascript' src="{{ asset('js/bootstrap.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/gspot.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,500" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    
</head>
<body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('img/logo3.jpeg') }}" alt=""/></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <li class=""><a href="{{ url('/')}}">Home</a></li>
                <li class="dropdown">
                    <a href="{{ url('/faqs') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Help<span class="caret"></span>
                    </a>
                </li>
                
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="{{ url('/profile') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Profile
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{ url('/account/'.Auth::user()->id) }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Account Settings<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/account/contactin') }}">
                                Contact Info
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/account/password') }}">
                                Password
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/account/emailpref') }}">
                                Email Preferences
                            </a>
                        </li>
                    </ul>
                </li>
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
                </ul>
            </div>
        </nav>

        @yield('content')

    <footer>
            <ul class="list-inline">
            <li class="list-inline-item">
                <a href="{{ url('/home') }}">Home</a>
            </li>
            <li class="footer-menu-divider list-inline-item">&sdot;</li>
            <li class="list-inline-item">
                <a href="{{ url('/about') }}">About</a>
            </li>
            <li class="footer-menu-divider list-inline-item">&sdot;</li>
            <li class="list-inline-item">
                <a href="{{ url('/contact') }}">Contact</a>
            </li>
            </ul>
        <p class="copyright text-muted small">Copyright &copy; Your Company 2017. All Rights Reserved</p>
    </footer>

    <!-- Scripts -->
    @yield('javascript')
</body>
</html>
