<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="myoiQq8CyPGrq0b15KNZFqtpnyOAJaazVs85F6IF">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        body {
            background-image: url('http://www.hopeindustrysglobaltravels.com/Banner_2.jpg');
        }
        #map
        {
            width: 100%;
            height: 600px;
        }
        .add {
            margin-left: 18px;
        }
        .send {
            margin-left: -2px;
        }
        .result {
            font-size: 20px;
            color: #fff;
            margin-bottom: 15px;
        }
        .form-control {
            margin-top: 0;
            width: 78px;
        }
        .logo-plane {
            margin-top: 10px;
        }
        label {
            color: #fff;
            margin-top: 5px;
        }
        .input {
            margin-top: 0;
            width: 160px;
        }
        .icon {
            cursor: pointer;
        }
        .navbar {
            background: linear-gradient(to left, #341348 20%, #6fbbe6 50%, #341348 80%);
        }
        .icons {
            background-color: rgba(255,255,255,1);
            border: 1px solid #fff;
        }
        .icons:hover {
            border: 1px solid #6fbbe6;
        }
        .logo-text {

            font-size: 20px;
            color: #fff;
        }
        .link:hover {
            margin-top: 15px;
            text-decoration: none;
        }
        .user .dropdown-toggle {
            color: #fff;
        }
        .caret {
            color: #fff;
        }
        .footer {
            border-top: 1px solid #fff;
            background: #280f38;
            width:100%;
            height: 60px;
        }
        .content {
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        .content div:first-child {
            margin-top: 7px;
        }
        .my-content {
            padding: 20px 20px 0 0;
            margin-bottom: 20px;
            background-color: rgba(55,55,55,0.7);
        }
        .hr {
            width: 160px;
        }

    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="row">
                <div class=" col-lg-4 col-md-4 col-sm-12 col-xs-12 navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <div>
                        <a class="link" href="http://trip.trip.php.a-level.com.ua">
                            <span class="logo-text">Trip optimizer</span>
                        </a>
                        <img class="logo-plane" src="img/logo-plane.png" style="width:15%;">
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li class="dropdown">
                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre style="color: #fff">
                                 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="http://trip.trip.php.a-level.com.ua/logout"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="http://trip.trip.php.a-level.com.ua/logout" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="myoiQq8CyPGrq0b15KNZFqtpnyOAJaazVs85F6IF">
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>
</nav>

<div class="container">
    <div class="my-content">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="icon col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="icons col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="img/icons8-взлет-самолета-80.png" style="width:100%;">
                    </div>
                    <div style="padding:0;text-align:center;color: #fff" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Plane</div>
                </div>
                <div class="icon col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="icons col-lg-12 col-md-12 col-sm-12 col-xs-12"><img src="img/icons8-кровать-80.png" style="width:100%;"></div>
                    <div style="padding:0;color: #fff;text-align:center;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Hotel</div>
                </div>

                <script src="js/prepareToSave.js"></script>


                <form class="col-lg-12 col-md-12 col-sm-12 col-xs-12" name="form" id="ajax_form" action="" method="post" style="margin: 0;">
                    {{ csrf_field() }}
                    <hr class="hr">
                    <label>Select currency:</label>
                    <select name="currency" class="form-control">
                        <option value="usd">USD</option>
                        <option value="rub">RUB</option>
                        <option value="eur">EUR</option>
                    </select>
                    <hr class="hr">
                        <div class="form-group">
                        <label>Depart date:</label>
                            <input type="date" name="depart" class="input form-control text-muted dep" max="2020-12-01" min="now">
                        </div>

                        <div class="form-group">
                        <label>Return date:</label>
                            <input type="date" class="input form-control text-muted ret" name="return" max="2020-12-01" min="now">
                        </div>


                    <div class="form-group">
                        <div class="inputs">
                            <label>Go from:</label>
                            <input  type="search" class="input form-control text-muted from" name="name[]" placeholder="from"/>
                            <label>To:</label>
                            <input  type="search" class="input form-control to" name="name[]" placeholder="to"/>
                            <span style="color:white;" class="bron">Book hotel</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-4">
                                <input class="btn btn-primary send form-text text-muted" type="submit" value="Отправить" id="btn">
                            </div>
                            <div class="col-lg-8">
                                <input type="button" class="btn btn-success add form-text text-muted" value="Добавить" />
                                </div>

                        </div>
                    </div>
                    </form>
                    <form name="form" id="ajax_form4" action="" method="post">
                    {{ csrf_field() }}
                    <input type="text" value="to" name="to" class="to">
                    <input type="text" value="from" name="from" class="from">
                    <input type="text" value="city" name="city" class="city">
                    <input class="btn btn-primary send form-text text-muted" type="submit" value="Отправить" id="btn4">
                    </form>
                    <ul id="hotel" style="color:white;"></ul>
                <form name="form" id="ajax_form1" action="" method="post">
                    {{ csrf_field() }}
                    <input type="button" value="Save in db" id="btn1"/>
                </form>
                <hr>
                <h1 class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="time" style="width:190px; margin: 0;">
                    <hr>
                    <div class="result">Result:</div>
                    <span class="got-result"></span>
                    <div id="min" style="color:white;"></div>
                </h1>
                <form name="form" id="ajax_form3" action="" method="post">
                <span style="color:white;">Planes</span>
                <input class="bookdep" type="date" name="departureddate" value="" disabled>
                <input class="bookret" type="date" name="returndate" value="" disabled>
                <input class="bookfrom" type="text" name="from" value="" disabled>
                <input class="bookto" type="text" name="to" value="" disabled>
                <input class="bookfirstname" type="text" name="firstname" value="{{$name}}" disabled>
                <input class="bookpersons" type="number" name="persons">
                <input type="button" value="Отправить">
                </form>

                <form name="form" id="ajax_form5" action="" method="post">
                <span style="color:white;">Hotels</span>
                {{ csrf_field() }}
                <input class="booktitle" type="text" name="title" value="">
                <input class="bookdeph" type="date" name="checkin" value="">
                <input class="bookreth" type="date" name="checkout" value="">
                <input class="booklastnameh" type="text" name="name" value="{{$name}}">
                <input class="bookpersonsh" type="number" name="persons" value="">
                <input class="bookpriceh" type="number" name="price" value="">
                <input type="button" value="Отправить" id="btn5">
                </form>



                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="result_form"></div>

            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="content" style="color: #fff; font-size: 14px;">
        <div>All rights reserved by MEGO</div>
        <div>©Copywrite 2018</div>
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
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });


    jQuery( document ).ready(function() {
        jQuery("#btn1").click(
            function(){
                sendAjaxForm1('result_form1', 'ajax_form1', 'http://localhost/lara2/blog/public/home/prepareToSave');
                return false;
            }
        );
    });

    function sendAjaxForm1(result_form, ajax_form, url) {
        //var dataString = 'from=' + '7777' + '&to=' + '999999';
        //var dataString='';
        if(window.dataString == undefined)
        {
            window.dataString='';
        }
        for (var i = 0; i < window.informationToSaveInDB.length; i++)
        {
            /*if (window.dataString=''){
            window.dataString= '&airline'+i+"="+window.informationToSaveInDB[i]['airline']+
                '&departure_at'+i+"="+window.informationToSaveInDB[i]['departure_at']+
                '&destination'+i+"="+window.informationToSaveInDB[i]['destination']+
                '&expires_at'+i+"="+window.informationToSaveInDB[i]['expires_at']+
                '&flight_number'+i+"="+window.informationToSaveInDB[i]['flight_number']+
                '&origin'+i+"="+window.informationToSaveInDB[i]['origin']+
                '&price'+i+"="+window.informationToSaveInDB[i]['price']+
                '&return_at'+i+"="+window.informationToSaveInDB[i]['return_at']+
                '&transfers'+i+"="+window.informationToSaveInDB[i]['transfers'];
            }else{*/
                window.dataString+='&airline'+i+"="+window.informationToSaveInDB[i]['airline']+
                    '&departure_at'+i+"="+window.informationToSaveInDB[i]['departure_at']+
                    '&destination'+i+"="+window.informationToSaveInDB[i]['destination']+
                    '&expires_at'+i+"="+window.informationToSaveInDB[i]['expires_at']+
                    '&flight_number'+i+"="+window.informationToSaveInDB[i]['flight_number']+
                    '&origin'+i+"="+window.informationToSaveInDB[i]['origin']+
                    '&price'+i+"="+window.informationToSaveInDB[i]['price']+
                    '&return_at'+i+"="+window.informationToSaveInDB[i]['return_at']+
                    '&transfers'+i+"="+window.informationToSaveInDB[i]['transfers'];
           // }
           /* expires_at: "2018-07-13T20:35:00Z"
​​              flight_number: 678
​​            origin: "MOW"
            price: 492
​​              return_at: "2018-07-15T06:30:00Z"
​​          transfers
            */
            //console.log(window.informationToSaveInDB[i]['airline']);
            //console.log(window.informationToSaveInDB[i]['departure_at']);
            //console.log(window.informationToSaveInDB[i]['destination']);
        }
        console.log(dataString);
        console.log(window.informationToSaveInDB);
        jQuery.ajax({
            url:  url, //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: jQuery("#"+ajax_form).serialize()+ dataString,  // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно
                console.log('yeeeees');
                console.log(response);
            },
            error: function(response) { // Данные не отправлены
                jQuery('#result_form').html('Ошибка. Данные не отправлены.');
            }
        });
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
        var bookdep = jQuery('.dep').val();
        var bookret = jQuery('.ret').val();
        var bookfrom = jQuery('.from').val();
        var bookto = jQuery('.to').val();
        jQuery('.bookdep').attr('value', bookdep);
        jQuery('.bookret').attr('value', bookret);
        jQuery('.bookfrom').attr('value', bookfrom);
        jQuery('.bookto').attr('value', bookto);
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

                //informationToSaveInDB=information['data'];
                //console.log(informationToSaveInDB);
                //console.log(result[2]);
                //console.log(informationToSaveInDB[result[2]]['origin']);

                if(window.informationToSaveInDB == undefined)
                {
                    window.informationToSaveInDB=[];
                }
                window.informationToSaveInDB.push(information['data'][result[2]]);
                console.log(window.informationToSaveInDB);


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

<script>
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });


    jQuery( document ).ready(function() {
        jQuery("#btn4").click(
            function(){
                sendAjaxForm4('result_form1', 'ajax_form4', 'http://localhost/lara2/blog/public/home/hotels');
                jQuery(document).on('click','#hotel li',function(){
                    var booktitle = jQuery('#hotel li').text();
                    jQuery('#ajax_form5 .booktitle').attr('value', booktitle);
                });
                return false;
            }
        );
    });

    function sendAjaxForm4(result_form, ajax_form, url) {
        jQuery.ajax({
            url:  url, //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: jQuery("#"+ajax_form).serialize(),  // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно
                res = response.split(',');
                for (var i = 0; i < res.length; i++)
                {
                    var newLi = document.createElement('li');
                    newLi.innerHTML = res[i];
                    hotel.appendChild(newLi);
                }
                console.log(response);
            },
            error: function(response) { // Данные не отправлены
                jQuery('#result_form').html('Ошибка. Данные не отправлены.');
            }
        });
    }
</script>destination

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhZNdBlfHjvqdPZ4z5Uk3hGeyZYCaXzZY&callback=initMap">
</script>

<script>
jQuery(document).on('click','.btn-success',function(){
    add_input();
    jQuery(document).on('click','.bron',function(){
        var bookdep = jQuery('.dep').val();
        jQuery('#ajax_form4 .to, .bookdeph').attr('value', bookdep);
    });
});
</script>
<script>
jQuery(document).on('click','.bron',function(){
        var bookdep = jQuery('.dep').val();
        jQuery('#ajax_form4 .to, .bookdeph').attr('value', bookdep);
    });


</script>

<script>
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });


    jQuery( document ).ready(function() {
        jQuery("#btn5").click(
            function(){
                sendAjaxForm5('result_form1', 'ajax_form5', 'http://localhost/lara2/blog/public/hotels');
                return false;
            }
        );
    });

    function sendAjaxForm5(result_form, ajax_form, url) {
        jQuery.ajax({
            url:  url, //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: jQuery("#"+ajax_form).serialize(),  // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно
                alert('uraaaaaaaaa');
            },
            error: function(response) { // Данные не отправлены
                jQuery('#result_form').html('Ошибка. Данные не отправлены.');
            }
        });
    }
</script>

</div>

<!-- Scripts -->
<script src="http://trip.trip.php.a-level.com.ua/js/app.js"></script>
</body>
</html>
