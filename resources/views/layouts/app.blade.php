<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .section-steps {
            background-color: #f4f4f4;
        }

        section{
            padding: 40px;
            font-weight: 300;
            font-size: 20px;
            text-rendering: optimizeLegibility;
            color: #555;
        }

        .fa-btn {
            margin-right: 6px;
        }

        .navbar{
            margin-bottom: 0px;
        }

        .jumbotron{
            background-image: linear-gradient(rgba(0,0,0,0.5), #000), url('https://pixabay.com/get/e83db20a2ff1023ed1584d05fb0938c9bd22ffd41db8194293f0c77fa7/books-1835753_1280.jpg');
            background-size:cover;
            background-position: center;

            height: 55vh;

            color:white;
        }

        .icon-big {
            font-size: 500%;
            display: block;
            margin-bottom: 10px;
            text-align: center;
        }

        h2 {
            font-size: 180%;
            word-spacing: 2px;
            text-align: center;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }

        h2:after {
            display: block;
            height: 2px;
            background-color: #76b852;
            content: " ";
            width: 100px;
            margin: 0 auto;
            margin-top: 30px;
        }

        h3 {
            font-size: 110%;
            margin-bottom: 15px;
            text-align: center;
        }

        .long-copy {
            line-height: 145%;
            width: 70%;
            margin-left: 15%;
        }

        /*-------------Footer-------------*/
        footer {
            background-color: #333;
            padding: 50px;
            font-size: 16px;
        }

        .footer-nav {
            list-style: none;
            float: left;
        }

        .social-links {
            list-style: none;
            float: right;
        }

        .footer-nav li,
        .social-links li {
            display: inline-block;
            margin-right: 20px;
        }

        .footer-nav li:last-child,
        .social-links li:last-child {
            margin-right: 0;
        }

        .footer-nav li a:link,
        .footer-nav li a:visited,
        .social-links li a:link,
        .social-links li a:visited {
            text-decoration: none;
            border: 0;
            color: #888;
            -webkit-transition: color 0.2s;
            transition: color 0.2s;
        }

        .footer-nav li a:hover,
        .footer-nav li a:active {
            color: #ddd;
        }

        .social-links li a:link,
        .social-links li a:visited {
            font-size: 160%;
        }

        .ion-social-facebook,
        .ion-social-twitter,
        .ion-social-googleplus,
        .ion-social-instagram {
            -webkit-transition: color 0.2s;
            transition: color 0.2s;
        }

        .ion-social-facebook:hover {
            color: #3b5998;
        }

        .ion-social-twitter:hover {
            color: #00aced;
        }

        .ion-social-googleplus:hover {
            color: #dd4b39;
        }

        .ion-social-instagram:hover {
            color: #517fa4;
        }


        footer p {
            color: #888;
            text-align: center;
            margin-top: 20px;
        }



    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/tutors') }}">Tutor</a></li>
                    <li><a href="{{ url('/parentsreg') }}">Parents Registration</a></li>
                    <li><a href="{{ url('/tutorsreg') }}">Tutor Registration</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
