<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Trip-optimizer</title>
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="media.css">
    <!-- CSRF Token -->

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<header class="header_section">
        <div class="inner_wrapper">
            <section class="header_links">
                <div class="logo" style="width: 30%;">
                        <img src="img/trip optimizer logo.png"" alt="I-travel logo">
                        <span class="haa">Trip-optimizer</span>
                </div>
                <nav>
                    <ul class="main_navigation nav">
                        <li class="main_navigation_item">
                            Перелеты
                        </li>
                        <li class="main_navigation_item">
                            Отели
                        </li>
                        <li class="main_navigation_item">
                            Отзывы
                        </li>
                        <li class="main_navigation_item">
                            <input class="clos" type="button" value="Популярное" id="click_me">
                        </li>
                        <li onClick="openCollapse()" id="dr-panel" style="position: relative;">
                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true" v-pre style="position: absolute; left: 225px; color: #fff">
                                <span class="caret"></span>
                            </a>
                            <ul class="navbar dropdown-menu"  style="display: none; background: #341348; width: 250px;top: 23px; left: 11px;">
                                <li style="margin: 0 0 5px 7px; width: 250px;">
                                    <div class="phone" style="width: 250px;margin: 0;">
                                        <a href="{{ url('add') }}" style=" text-decoration: none;">Информация пользователя</a>
                                    </div>
                                    
                                </li>
                                <li style="margin: 0 0 5px 7px; width: 250px;">
                                    <div class="phone" style="width: 250px;margin: 0;">
                                    <a href="{{ url('allmartrutes') }}" style=" text-decoration: none;">Мои маршруты</a>
                                </div>
                                    </li>
                                    <li style="margin: 0 0 3px 7px; width: 250px;">
                                        <div class="phone" style="width: 250px; margin: 0;">
                                    <a href="http://trip.trip.php.a-level.com.ua/logout"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" style=" text-decoration: none;">
                                        Выйти
                                    </a></div></li>
                                    <form id="logout-form" action="http://trip.trip.php.a-level.com.ua/logout"
                                          method="POST" style="display: none;">
                                        <input type="hidden" name="_token"
                                               value="myoiQq8CyPGrq0b15KNZFqtpnyOAJaazVs85F6IF">
                                    </form>
                                
                            </ul>
                        </li>
                    </ul>
                </nav>
            </section>
            <section class="first_screen_content">
                <div class="banner">
                    <div class="text_content">
                        <h2 class="main_header">Открывай мир заново!</h2>
                        <p class="paragraph" style="font-style: italic;">Сотни стран ждут, когда вы посетите их! Не откладывайте путешествие на завтра, если можно полететь уже сегодня!</p>
                    </div>
                    <img src="imga/banner_backpack.png" alt="Backpack">
                    <button class="btn_btn_inverse_angled">Исследуй</button>
                </div>
            </section>
        </div>
    </header>

    <div class="container">
    <div class="my-content">
        <section class="offer_description" id="experiance">
                <h2 class="main_header">Мы предлагаем</h2>
                <h3 class="subheader">путешествие вашей мечты!</h3>
        </section>
        <hr>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-2 col-xs-12">
                <div id="scrol">
                    <form class="col-lg-12 col-md-12 col-sm-12 col-xs-12 for" name="form" id="ajax_form2" action="" method="post" style="margin: 0;">
                        {{ csrf_field() }}
                        <div class="row forms">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
                                <div>Валюта:</div>
                                <select name="currency" class="form-control">
                                    <option value="usd">USD</option>
                                    <option value="rub">RUB</option>
                                    <option value="eur">EUR</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 some-form-gr form-group">
                                <div class="labels">Популярные маршруты:</div>
                                <select name="popularsCities" class="form-control my-form-control">
                                    <option value="KhKv">Харьков-Киев</option>
                                    <option value="KvLv">Киев-Львов</option>
                                    {{--<option value="Cities">Cities</option>--}}
                                    {{--<option value="Cities">Cities</option>--}}
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
                                <div>Отправление:</div>
                                <input type="date" name="depart" class="input form-control text-muted" max="2020-12-01"
                                       min="now">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
                                <div>Возвращение:</div>
                                <input type="date" class="input form-control text-muted" name="return" max="2020-12-01"
                                       min="now">
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-group">
                                <div class="send">
                                    <input class="btn btn-primary send form-text" type="submit" value="Найти" id="btn2" style="color: #fff">
                                </div>
                            </div>
                        </div>
                    </form> 
                    
                </div>

                {{--<a href="{{ route('add') }}">Login</a>--}}
                {{--<a href="{{ url('add') }}">ADD INFORMATION</a>--}}
                {{--<a href="{{ url('allmartrutes') }}">ALL MY MARTRUTES</a>--}}

                <script src="js/scrolForm.js"></script>
                <script src="js/prepareToSave.js"></script>
                </form>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-10 col-xs-12">
                    <div id="map"></div>
                </div>
            </div>
    </div>

    <main class="main_content_section">
        <div class="row">
            <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="somet">Окунись в увлекательный мир путешествий!</h2><br>
            </section>
            <div class="dir">
            <form class="col-lg-12 col-md-12 col-sm-12 col-xs-12" name="form" id="ajax_form" action="" method="post"
                      style="margin: 0;">
                    {{ csrf_field() }}
                    <hr style="color: #fff; height: 1px;">
                    <div class="row forms">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
                            <label>Валюта:</label>
                            <select name="currency" class="form-control">
                                <option value="usd">USD</option>
                                <option value="rub">RUB</option>
                                <option value="eur">EUR</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
                            <label>Откуда:</label>
                            <input type="search" class="input form-control text-muted" name="name[]"
                                       placeholder="from"/>
                        </div>    
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
                            <label>Куда:</label>
                            <input type="search" class="input form-control" name="name[]" placeholder="to"/>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">
                            <label>Отправление:</label>
                            <input type="date" name="depart" class="input form-control text-muted" max="2020-12-01" min="now">
                        </div>
                        <div>
                            <label>Возвращение:</label>
                            <input type="date" class="input form-control text-muted" name="return" max="2020-12-01" min="now">
                        </div>
                        <div class="try d-flex justify-content-center">
                            <div class="true">
                                    <input type="button" class="form-text btn btn-success"
                                       onclick="add_input()" value="Добавить"/>
                            </div>
                            <div class="true">
                                <div class="sfr">
                                <input class="btn btn-primary send form-text" type="submit" value="Отправить"id="btn">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </form>
                </div>
        </div>
        <div class="inner_wrapper">
            <section class="offer_description" id="experiance">
                <div class="video_wrapper">
                    <video controls height="225" width="400" src="media/Iceland.mp4"></video>
                </div>
                <section class="experiance">
                    <h3 class="cta_header">Горячее предложение</h3>
                    <ul class="experiance_list">
                        <li class="experiance_list_item">7-14 дней приключений</li>
                        <li class="experiance_list_item">Прекрасные виды, водопады великолепной Ирландии!</li>
                        <li class="experiance_list_item">Комфортабельный перелет</li>
                        <li class="experiance_list_item">Культурные и тематические туры</li>
                        <li class="experiance_list_item">Экскурсии</li>
                    </ul>
                    <button class="btn-angled">Подробнее</button>
                </section>
            </section>
            <section class="image_gallery" id="explore">
                <h2 class="cta_header">Исследуй!</h2>
                <div class="hero_image">
                    <img src="imga/slider/1.jpg" alt="Landscape 1">
                </div>
                <div class="image_slider">
                    <ul>
                        <li class="slide_item-active_slide">
                            <img src="imga/slider/1.jpg" alt="Landscape 2">
                        </li>
                        <li class="slide_item">
                            <img src="imga/slider/2.jpg" alt="Landscape 2">
                        </li>
                        <li class="slide_item">
                            <img src="imga/slider/3.jpg" alt="Landscape 3">
                        </li>
                        <li class="slide_item">
                            <img src="imga/slider/4.jpg" alt="Landscape 4">
                        </li>
                    </ul>
                    <div class="slider_controls">
                        <span class="prev"></span>
                        <span class="next"></span>
                    </div>
                </div>
            </section>
        </div>
    </main>
    </div>
    <footer class="footer_section">
        <div class="inner_wrapper">
            <section class="contact_info" id="contacts">
                <h2 class="main_header-header_inverse">Наши контакты</h2>
                <div class="email">
                    <a href="mailto:iceland@i-travel.com?subject=Want_to_attend_for_an_Iceland_tour">optimizer@trip.com</a>
                </div>
                <div class="phone">тел:
                    <a href="tel:+354727272">+38095 72 726 72</a>
                </div>
                <div class="phone">тел:
                    <a href="tel:+354272727">+38097 27 275 27</a>
                </div>
            </section>
            <section class="social">
                <ul class="social_links">
                    <li class="social_item">
                        <a class="twitter" href="#"></a>
                    </li>
                    <li class="social_item">
                        <a class="facebook" href="#"></a>
                    </li>
                    <li class="social_item">
                        <a class="instagram" href="#"></a>
                    </li>
                </ul>
            </section>
        </div>
    </footer>

<script src="js/addForm.js"></script>
<script>
function openCollapse() {
    var parentEl = document.getElementById('dr-panel');
    var el = parentEl.childNodes[3];
    el.style.display = el.style.display === 'none' ? 'flex' : 'none';
}

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
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    jQuery(document).ready(function () {
        jQuery("#btn").click(
            function () {
                sendAjaxForm('result_form', 'ajax_form', 'http://localhost:8888/home/json');
                return false;
            }
        );
    });

    function sendAjaxForm(result_form, ajax_form, url) {
        jQuery.ajax({
            url: url, //url страницы (action_ajax_form.php)
            type: "POST", //метод отправки
            dataType: "html", //формат данных
            data: jQuery("#" + ajax_form).serialize(),  // Сеарилизуем объект
            success: function (response) { //Данные отправлены успешно
                console.dir(response);
                result = jQuery.parseJSON(response);
                information = jQuery.parseJSON(result[0]);
                console.log(information);

                //informationToSaveInDB=information['data'];
                //console.log(informationToSaveInDB);
                //console.log(result[2]);
                //console.log(informationToSaveInDB[result[2]]['origin']);

                if (window.informationToSaveInDB == undefined) {
                    window.informationToSaveInDB = [];
                }
                window.informationToSaveInDB.push(information['data'][result[2]]);
                console.log(window.informationToSaveInDB);

                areaCoust = document.getElementsByTagName("textAreaAllCoust");
                //areaCoust.value=window.informationToSaveInDB[0]['price'];
                console.log(areaCoust);
                //var sum=null;
                //var strCoust;

                if (window.strCoust == undefined) {
                    window.strCoust = '';
                }
                if (window.sum == undefined) {
                    window.sum = 0;
                }
                window.strCoust = '';
                window.sum = 0;
                //console.log(window.informationToSaveInDB[0]['price']);
                var areaCoust = document.getElementById('123');
                var k = 0;
                for (var i = 0; i < informationToSaveInDB.length; i++) {
                    if (i == 0) {
                        strCoust += informationToSaveInDB[i]['price'];
                    }
                    else {
                        strCoust += "+" + informationToSaveInDB[i]['price'];
                    }
                    sum += informationToSaveInDB[i]['price'];
                    k++;
                }

                //console.log('555555555555');
                console.log(window.sum);
                console.log(window.strCoust);
                areaCoust.value = '';
                if (k == 1) {
                    areaCoust.value = window.strCoust;
                } else {
                    areaCoust.value = window.strCoust + '=' + window.sum;
                }
                coordinatesInform = result[1];
                if (window.coord == undefined) {
                    window.coord = [];
                }
                for (var i = 0; i < coordinatesInform.length; i++) {
                    window.coord.push(coordinatesInform[i]);
                }
                document.getElementById("min").innerHTML = JSON.stringify(information);
                //initMap(coordinatesInform);
                initMap(window.coord);
                //jQuery('#result_form').html('ОТ: '+result.a+'<br>До: '+result.b);
            },
            error: function (response) { // Данные не отправлены
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

    jQuery(document).ready(function () {
        jQuery("#btn2").click(
            function () {
                sendAjaxForm2('result_form2', 'ajax_form2', 'http://localhost:8888/home/popular');
                return false;
            }
        );
    });

    function sendAjaxForm2(result_form, ajax_form, url) {

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
                result = jQuery.parseJSON(response);
                information = jQuery.parseJSON(result[0]);
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

            },
            error: function (response) { // Данные не отправлены
                jQuery('#result_form').html('Ошибка. Данные не отправлены.');
            }
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhZNdBlfHjvqdPZ4z5Uk3hGeyZYCaXzZY&callback=initMap">
</script>

<!-- Scripts -->
<script src="http://trip.trip.php.a-level.com.ua/js/app.js"></script>
</body>
</html>
