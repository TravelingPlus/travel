@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!!!
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="js/find.js"></script>
                    <form name="form">
                         <label>From: </label>
                         <input id="from" >
                         <label>To: </label>
                         <input id="to" >
                         <input id="submit" onclick="myFunction()" type="button" value="Submit">
                    </form>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection




<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        #map
        {
            width: 100%;
            height: 600px;
        }
    </style>
</head>

<body>
<div  id="map"></div>

<script>
    function initMap()
    {
        //var position_lat;
        //var position_lon;
        if (navigator.geolocation) {
            var timeoutVal = 10 * 1000 * 1000;
            navigator.geolocation.getCurrentPosition(
                displayPosition,
                displayError,
                {enableHighAccuracy: true, timeout: timeoutVal, maximumAge: 0 }
            );
        }
        else {
            alert("Geolocation не поддерживается данным браузером");
        }

        function displayPosition(position) {
            alert("Широта: " + position.coords.latitude + ", Долгота: " + position.coords.longitude);
            var  position_lat = position.coords.latitude;
            var  position_lon = position.coords.longitude;
            addMarker({
                //coordinates: {lat: 49.988358, lng: 36.232845},
                coordinates: {lat: position_lat, lng: position_lon},
                info: '<h1>Hey there</h1>'
            });
        }

        function displayError(error) {
            var errors = {
                1: 'Нет прав доступа',
                2: 'Местоположение невозможно определить',
                3: 'Таймаут соединения'
            };
            alert("Ошибка: " + errors[error.code]);
        }

        var element = document.getElementById('map');
        var options = {
            zoom: 3,
            center: {lat: 55.7558, lng: 37.6173}
        };
        var myMap = new google.maps.Map(element, options);
        //addMarker({
        //coordinates: {lat: 49.988358, lng: 36.232845},
        //	coordinates: {lat: position_lat, lng: position_lon},
        //	info: '<h1>Hey there</h1>'
        //});
        addMarker({
            coordinates: {lat: 38.736946, lng: -9.142685},
            info: '<h1>Hey there 1</h1>'
        });
        function addMarker(properties){
            var marker = new google.maps.Marker({
                position: properties.coordinates,
                map: myMap
            });
            if(properties.info)
            {
                var InfoWindow = new google.maps.InfoWindow({
                    content: properties.info
                });

                marker.addListener('click', function(){
                    InfoWindow.open(myMap, marker);
                });
            }
        }
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhZNdBlfHjvqdPZ4z5Uk3hGeyZYCaXzZY&callback=initMap">
</script>
</body>
</html>

