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

                        <div id="result_form"></div>
                            </div>
            </div>
        </div>


        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-взлет-самолета-80.png" style="width:100%;"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Plane</div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-поезд-80.png" style="width:100%;"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Train</div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-автобус-80.png" style="width:100%;"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Bus</div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-автомобиль-80.png" style="width:100%;"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Car</div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-кровать-80.png" style="width:100%;"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Hotel</div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-детская-80.png" style="width:100%;"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Hostel</div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-коттедж-80.png" style="width:100%;"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">House</div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-трейлер-80.png" style="width:100%;"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Trailer</div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">

        </div>
    </div>
</div>




@endsection


<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        #map
        {
            width: 100%;
            height: 600px;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<div  id="map"></div>
<script src="js/addForm.js"></script>
<form name="form" id="ajax_form" action="" method="post">
    {{ csrf_field() }}
            <select name="currency">
            <option value="usd">USD</option>
            <option value="rub">RUB</option>
            <option value="eur">EUR</option>
        </select>
        <br><br><br><br>
        <input type="date" name="depart" max="2020-12-01" min="now">
        <input type="date" name="return" max="2020-12-01" min="now">
        <!--<input type="search" name="frm" placeholder="Откуда">
        <input type="search" name="too" placeholder="Куда">!-->
		<div class="inputs">
			<input id=1 name="name[]" placeholder="from"/>
			<input id=2 name="name[]" placeholder="to"/>
        </div>
		<input type="submit" value="Отправить" id="btn">
		<input type="button" onclick="add_input()" value="Добавить" />

</form>




<a href="#">+</div>
<div id="result_form"></div>
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
<script>
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    jQuery( document ).ready(function() {
        jQuery("#btn").click(
            function(){
                sendAjaxForm('result_form', 'ajax_form', 'http://travel/public/home/json');
                return false;
            }
        );
    });

    function sendAjaxForm(result_form, ajax_form, url) {
        jQuery.ajax({
            url:  url, //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: jQuery("#"+ajax_form).serialize(),  // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно
                result = jQuery.parseJSON(response);
                console.log(result);
                //jQuery('#result_form').html('ОТ: '+result.a+'<br>До: '+result.b);
            },
            error: function(response) { // Данные не отправлены
                jQuery('#result_form').html('Ошибка. Данные не отправлены.');
            }
        });
    }
</script>
</body>
</html>

