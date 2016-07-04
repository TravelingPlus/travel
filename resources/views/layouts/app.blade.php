<!DOCTYPE html>
<html lang="en" ng-app="allYoWays">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AllYoWays</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
     <link href="{{ URL::asset('css/foundation.css') }}" rel="stylesheet">
     <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">

</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="row">
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
                    LOGOtip
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Maps</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li>
                            <a href="{{ url('/partners')  }}">Partners</a>
                        </li>
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

    @yield('content');

    <div class="row">
        тут футер
    </div>


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src='{{ URL::asset('js/lib/lodash.min.js') }}'></script>
    <script src='{{ URL::asset('js/lib/angular.min.js') }}'></script>
    <script src='{{ URL::asset('js/lib/angular-simple-logger.light.min.js') }}'></script>
    <script src="{{ URL::asset('js/lib/angular-maps.js') }}"></script>
    {{--<script src="{{ URL::asset('js/app.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('js/controllers/homeCtrl.js') }}"></script>--}}
    <script src="{{ URL::asset('js/controllers/mainCtrl.js') }}"></script>


    <script src='//maps.googleapis.com/maps/api/js?key=AIzaSyA9ryo3MwUUszyGD4G6OBe_c-TL-38AkGI'></script>

</body>
</html>
