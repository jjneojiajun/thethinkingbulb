<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TheThinkingBulb</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css') }}">

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


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
                    TheThinkingBulb
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/tutors') }}">Tutor</a></li>
                    <li><a href="{{ url('/parent_registration') }}">Parents Registration</a></li>
                    <li><a href="{{ url('/tutor_registration') }}">Tutor Registration</a></li>
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

    <!--footer start from here-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 footer-col">
                    <div class="logofooter"> The Thinking Bulb</div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                    <p><i class="fa fa-map-pin"></i> Blk 109B #10-123 Edgedale Plains</p>
                    <p><i class="fa fa-phone"></i> Phone (Singapore) : +65 9123 4567</p>
                    <p><i class="fa fa-envelope"></i> E-mail : info@thethinkingbulb.com</p>

                </div>
                <div class="col-md-3 col-sm-6 footer-col">
                    <h6 class="heading7">GENERAL LINKS</h6>
                    <ul class="footer-ul">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/tutors') }}">Tutor</a></li>
                        <li><a href="{{ url('/parent_registration') }}">Parents Registration</a></li>
                        <li><a href="{{ url('/tutor_registration') }}">Tutor Registration</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-col">
                    <h6 class="heading7">LATEST POST</h6>
                    <div class="post">
                        <p>Why is Education Important in Today World? <span>August 10,2015</span></p>
                        <p>How to Score A easily? <span>July 10,2015</span></p>
                        <p>How to give your Child the best years of their life? <span>January 2, 2015</span></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 footer-col">
                    <h6 class="heading7">Social Media</h6>
                    <ul class="footer-social">
                        <li><i class="fa fa-linkedin social-icon linked-in" aria-hidden="true"></i></li>
                        <li><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i></li>
                        <li><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i></li>
                        <li><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer start from here-->

    <div class="copyright">
        <div class="container">
            <div class="col-md-6">
                <p>© 2017 - All rights goes to TheThinkingBulb</p>
            </div>
            <div class="col-md-6">
                <ul class="bottom_ul">
                    <li><a href="#">TheThinkingBulb</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
