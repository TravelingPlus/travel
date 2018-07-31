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

        #map {
            width: 100%;
            height: 450px;
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
            background-color: rgba(255, 255, 255, 1);
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
            width: 100%;
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
            background-color: rgba(55, 55, 55, 0.7);
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#app-navbar-collapse" aria-expanded="false">
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
                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true" v-pre style="color: #fff">
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="http://trip.trip.php.a-level.com.ua/logout"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="https://trip.trip.php.a-level.com.ua/"
                                          method="POST" style="display: none;">
                                        <input type="hidden" name="_token"
                                               value="myoiQq8CyPGrq0b15KNZFqtpnyOAJaazVs85F6IF">
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
                        <a href="https://trip.trip.php.a-level.com.ua/home">
                        <img src="img/icons8-взлет-самолета-80.png" style="width:100%;">
                        </a>
                    </div>
                    <div style="padding:0;text-align:center;color: #fff" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                         style="text-align:center;">Plane
                    </div>
                </div>
                <div class="icon col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="icons col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <a href="https://trip.trip.php.a-level.com.ua/hotel">
                        <img src="img/icons8-кровать-80.png" style="width:100%;">
                        </a>
                    </div>
                    <div style="padding:0;color: #fff;text-align:center;"
                         class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">Hotel
                    </div>
                </div>

                <br><br>
                <h1><label>Hotel serch:</label></h1>

                <form class="col-lg-12 col-md-12 col-sm-12 col-xs-12" name="form" id="ajax_form_hotel" action=""
                      method="post"
                      style="margin: 0;">
                    {{ csrf_field() }}
                    {{--<hr class="hr">--}}
                    <label>Select currency:</label>
                    <select name="currency_hotel" class="form-control">
                        <option value="usd">USD</option>
                        <option value="rub">RUB</option>
                        <option value="eur">EUR</option>
                    </select>
                    <hr class="hr">
                    <div class="form-group">
                        <label>Arrival date:</label>
                        <input type="date" name="arrival" class="input form-control text-muted" max="2020-12-01"
                               min="now">
                    </div>

                    <div class="form-group">
                        <label>Out of hotel date:</label>
                        <input type="date" name="out" class="input form-control text-muted" max="2020-12-01"
                               min="now">
                    </div>


                    <div class="form-group">
                        <div class="inputs">
                            <label>City:</label>
                            <input type="search" class="input form-control text-muted" name="city" id="city"
                                   placeholder="city for hotel"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-4">
                                <input class="btn btn-primary send form-text text-muted" type="submit" value="Отправить"
                                       id="btnHotel">
                            </div>
                            {{--<div class="col-lg-8">--}}
                            {{--<input type="button" class="btn btn-success add form-text text-muted"--}}
                            {{--onclick="add_input()" value="Добавить"/>--}}
                            {{--</div>--}}

                        </div>
                    </div>
                </form>

                <h1 class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="time" style="width:190px; margin: 0;">
                    <hr>

                </h1>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="result_form"></div>

            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <div id="map"></div>
                <div id="allHotel" style="padding:0; text-align:left; font-size: 18px;color: #fff;margin-top: 5px;"></div>
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

    function initMap(allCoordinates) {
        var element = document.getElementById('map');
        var options = {
            zoom: 3,
            center: {lat: 49.98081, lng: 36.25272}
        };

        var myMap = new google.maps.Map(element, options);
        for (var i = 0; i < allCoordinates.length; i++) {
            console.log(allCoordinates[i]);
        }

        var coords;

        if (coords == undefined) {
            coords = [];
        }

        for (var i = 0; i < allCoordinates.length; i += 2) {
            addMarker({lat: allCoordinates[i], lng: allCoordinates[i + 1]});
            coords.push({lat: allCoordinates[i], lng: allCoordinates[i + 1]});
        }

        function addMarker(coordinates) {
            var marker = new google.maps.Marker({
                position: coordinates,
                map: myMap,
                icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
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


{{--<script>--}}
{{--jQuery.ajaxSetup({--}}
{{--headers: {--}}
{{--'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')--}}
{{--}--}}
{{--});--}}


{{--jQuery(document).ready(function () {--}}
{{--jQuery("#btn1").click(--}}
{{--function () {--}}
{{--sendAjaxForm1('result_form1', 'ajax_form1', 'http://travel-sergey/public/home/allmartrutes');--}}
{{--return false;--}}
{{--}--}}
{{--);--}}
{{--});--}}

{{--function sendAjaxForm1(result_form, ajax_form, url) {--}}

{{--jQuery.ajax({--}}
{{--url: url, //url страницы (action_ajax_form.php)--}}
{{--type: "POST", //метод отправки--}}
{{--dataType: "html", //формат данных--}}
{{--data: jQuery("#" + ajax_form).serialize(),  // Сеарилизуем объект--}}
{{--success: function (response) { //Данные отправлены успешно--}}
{{--console.log('yeeeees');--}}
{{--console.log(response);--}}
{{--},--}}
{{--error: function (response) { // Данные не отправлены--}}
{{--jQuery('#result_form').html('Ошибка. Данные не отправлены.');--}}
{{--}--}}
{{--});--}}
{{--}--}}
{{--</script>--}}



<script>
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    jQuery(document).ready(function () {
        jQuery("#btnHotel").click(
            function () {
                sendAjaxFormHotel('result_formHotel', 'ajax_form_hotel', 'https://trip.trip.php.a-level.com.ua/home/apihotel');
                return false;
            }
        );
    });

    function sendAjaxFormHotel(result_form, ajax_form, url) {

        // location.reload(false);
        window.coordPopular = []; // обнулить переменную для того что бы можно было выбирать разные популярные маршруты


        jQuery.ajax({
            url: url, //url страницы (action_ajax_form.php)
            type: "POST", //метод отправки
            dataType: "html", //формат данных
            data: jQuery("#" + ajax_form).serialize(),  // Сеарилизуем объект
            success: function (response) { //Данные отправлены успешно
                console.log(response);
                console.log('yeeeees');
                var result = jQuery.parseJSON(response);
                console.log(result);

                if (window.AllHotel == undefined) {
                    window.AllHotel = [];
                }
                for (var i = 0; i < result.length; i++) {
                    console.log(result[i]['hotelName']);
                    window.AllHotel.push(result[i]['hotelName']);
                }
                var elementByIdAllHotel = document.getElementById('allHotel');

                if (window.AllHotelstr == undefined) {
                    window.AllHotelstr = 'All Hotels:'+"<br>";
                }

                for (var i = 0; i < window.AllHotel.length; i++) {
                    var count=i+1;
                    window.AllHotelstr+=count+". " + window.AllHotel[i]+"<br>";
                    //window.AllHotelstr+="<a href="">"+ window.AllHotel[i]+"</a>"+"<br>";
                }

                elementByIdAllHotel.innerHTML = window.AllHotelstr;

                console.log(result[0]['location']['geo']['lat']);
                console.log(result[0]['location']['geo']['lon']);
                if (window.coordCity == undefined) {
                    window.coordCity = [];
                }

                window.coordCity.push(result[0]['location']['geo']['lat']);
                window.coordCity.push(result[0]['location']['geo']['lon']);
                console.log(window.coordCity);
                initMap(window.coordCity);

                /*information = jQuery.parseJSON(result[0]);
                console.log(information);

                coordinatesInformPopular = result[1];
                if (window.coordPopular == undefined) {
                    window.coordPopular = [];
                }
                for (var i = 0; i < coordinatesInformPopular.length; i++) {
                    window.coordPopular.push(coordinatesInformPopular[i]);
                }
                initMap(window.coordPopular);
                // console.log(response);
                */
            },
            error: function (response) { // Данные не отправлены
                jQuery('#result_form').html('Ошибка. Данные не отправлены.');
                console.log(response);
            }
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhZNdBlfHjvqdPZ4z5Uk3hGeyZYCaXzZY&callback=initMap">
</script>

<script>
    // var citiesInDB = ("${$citiesInDB}");
    var countries = ["Киев", "Москва", "Лондон", "Вашингтон", "Минск", "Венгрия", "Прага", "Варшава", "Берлин", "Рим", "Харьков", "Анкара", "Хургада", "Париж", "Мадрид", "Шри-Ланка", "Шанхай"];
</script>

<script>
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }
</script>

<script>
    autocomplete(document.getElementById("city"), countries);


</script>


</div>

<!-- Scripts -->
<script src="https://trip.trip.php.a-level.com.ua/js/app.js"></script>
</body>
</html>
