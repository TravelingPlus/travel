@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-взлет-самолета-80.png" style="width:100%;"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Plane</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-поезд-80.png" style="width:100%;"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Train</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-автобус-80.png" style="width:100%;"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Bus</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-автомобиль-80.png" style="width:100%;"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Car</div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-кровать-80.png" style="width:100%;"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Hotel</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-детская-80.png" style="width:100%;"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Hostel</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-коттедж-80.png" style="width:100%;"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">House</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:1px solid #000;"><img src="img/icons8-трейлер-80.png" style="width:100%;"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Trailer</div>
            </div>
            <form class="col-lg-12 col-md-12 col-sm-12 col-xs-12" name="form" id="ajax_form" action="" method="post">
    {{ csrf_field() }}
        <select name="currency">
            <option value="usd">USD</option>
            <option value="rub">RUB</option>
            <option value="eur">EUR</option>
        </select>
        <br><br><br><br>
        <input type="date" name="depart" max="2020-12-01" min="now">
        <input type="date" name="return" max="2020-12-01" min="now">
        <!-- <div class="inputs">
        <input id=1  type="search" name="frm" placeholder="from"/>
        <input id=2  type="search" name="too" placeholder="to"/>
         </div> -->
        <div class="inputs">
             <input  type="search" name="name[]" placeholder="from"/>
             <input  type="search" name="name[]" placeholder="to"/>
        </div>
        <input type="submit" value="Отправить" id="btn">
        <input type="button" onclick="add_input()" value="Добавить" />

</form>

<h1 class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="time">Итог - <div id="min"></div> </h1>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="result_form"></div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <div id="map"></div>
        </div>
    </div>
</div>

<script src="js/addForm.js"></script>
    <script>
    function initMap(allCoordinates)
    {
        var element = document.getElementById('map');
        var options = {
            zoom: 3,
            center: {lat: 30.988358, lng: 25.232341}
        };

        var myMap = new google.maps.Map(element, options);

        for (var i = 0; i < allCoordinates.length; i++)
        {
            console.log(allCoordinates[i]);
        }

        var coords;
        
        if(coords == undefined){
            coords=[];
        }

        for (var i = 0; i < allCoordinates.length; i+=2)
        {
             addMarker({lat: allCoordinates[i], lng: allCoordinates[i+1]});
             coords.push({lat:allCoordinates[i], lng:allCoordinates[i+1]});
        }
        function addMarker(coordinates) {
            var marker = new google.maps.Marker({
                position: coordinates,
                map: myMap
            });
        }

        var flightPath = new google.maps.Polyline({
            path: coords,
            geodesic: true,
            strokeColor: '#FF0000',
            strokeOpacity: 1.0,
            strokeWeight: 2,
        });

        flightPath.setMap(myMap);
    }
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
                sendAjaxForm('result_form', 'ajax_form', 'http://localhost/lara2/blog/public/home/json');
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
                //console.log(response);
                result = jQuery.parseJSON(response);
                information = jQuery.parseJSON(result[0]);
                console.log(information);
                coordinatesInform = result[1];
                if(window.coord == undefined)
                {
                    window.coord=[];
                }
                for (var i = 0; i < coordinatesInform.length; i++)
                {
                    window.coord.push(coordinatesInform[i]);
                }
                document.getElementById("min").innerHTML = JSON.stringify(information);
                //initMap(coordinatesInform);
                initMap(window.coord);
                //jQuery('#result_form').html('ОТ: '+result.a+'<br>До: '+result.b);
            },
            error: function(response) { // Данные не отправлены
                jQuery('#result_form').html('Ошибка. Данные не отправлены.');
            }
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhZNdBlfHjvqdPZ4z5Uk3hGeyZYCaXzZY&callback=initMap">
</script>

@endsection

