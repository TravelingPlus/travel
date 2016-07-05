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
     {{--<link href="{{ URL::asset('css/foundation.css') }}" rel="stylesheet">--}}

    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.1/foundation.min.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>

    <!-- Compressed JavaScript -->
    <script src="https://cdn.jsdelivr.net/foundation/6.2.1/foundation.min.js"></script>


    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">

</head>
<body id="app-layout">
    <div class="top-bar">
        <div class="top-bar-right">
            <ul class="menu">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li>
                        <a href="{{ url('/partners')  }}">Partners</a>
                    </li>
                    <li>
                        <a href="#">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>

                    </li>
                @endif
            </ul>
        </div>
    </div>


    @yield('content');

    <div class="row">
        тут футер
    </div>



    <script src='{{ URL::asset('js/lib/lodash.min.js') }}'></script>
    <script src='{{ URL::asset('js/lib/angular.min.js') }}'></script>
    <script src='{{ URL::asset('js/lib/angular-simple-logger.light.min.js') }}'></script>
    <script src="{{ URL::asset('js/lib/angular-maps.js') }}"></script>
    {{--<script src="{{ URL::asset('js/app.js') }}"></script>--}}
    {{--<script src="{{ URL::asset('js/controllers/homeCtrl.js') }}"></script>--}}
    <script src="{{ URL::asset('js/controllers/mainCtrl.js') }}"></script>

    <script>
        $(document).foundation();
    </script>

    <script src='//maps.googleapis.com/maps/api/js?key=AIzaSyA9ryo3MwUUszyGD4G6OBe_c-TL-38AkGI'></script>

</body>
</html>
