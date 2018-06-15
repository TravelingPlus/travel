<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 31.05.2018
 * Time: 23:44
 */

require_once("index.html");


//Выбор валюты
if ($_POST['currency'] == 'usd') {
    $currency = 'usd';
} elseif ($_POST['currency'] == 'eur') {
    $currency = 'eur';
} elseif ($_POST['currency'] == 'rub') {
    $currency = 'rub';
} else {
    echo 'Выберите валюту из выше перечисленных';
}

//
$departureDate = $_POST['departureDate'];
$ArrivalDate = $_POST['ArrivalDate'];

$departurePoint = $_POST['departurePoint'];
$arrivalPoint = $_POST['arrivalPoint'];


//City codes in format IATA
$codeCity = file_get_contents('https://www.travelpayouts.com/widgets_suggest_params?q=' . urlencode("Из {$departurePoint} в {$arrivalPoint}"));
$decodeCity = json_decode($codeCity, true);


$cityOfDeparture = $decodeCity['origin']['iata'];
$cityOfArrival = $decodeCity['destination']['iata'];

$a = $cityOfDeparture;
$b = $cityOfArrival;

echo '<pre>' . print_r($decodeCity, true) . '</pre>';

//Данные о городах в json формате
$cities = file_get_contents("http://api.travelpayouts.com/data/cities.json");
$infoOnCities = json_decode($cities, true);

// echo '<pre>' . print_r($infoOnCities, true) . '</pre>';

foreach ($infoOnCities as $city) {
    if ($city['code'] == $a) {
        $latitude1 = $city['coordinates']['lat'];
        $longtude1 = $city['coordinates']['lon'];
    }
}

foreach ($infoOnCities as $city) {
    if ($city['code'] == $b) {
        $latitude2 = $city['coordinates']['lat'];
        $longtude2 = $city['coordinates']['lon'];
    }
}

echo "<script type=\"text/javascript\"> var latitude1=$latitude1;var longtude1=$longtude1;</script>";
echo "<script type=\"text/javascript\"> var latitude2=$latitude2;var longtude2=$longtude2;</script>";


//Departures from and to. According to the calendar and without. Currency
$codeTickets = file_get_contents("https://api.travelpayouts.com/v1/prices/calendar?depart_date={$departureDate}&return_date={$ArrivalDate}&currency={$currency}&origin={$cityOfDeparture}&destination={$cityOfArrival}&calendar_type=departure_date&token=ff86a5b4622103a85185456756893056");
//$codeTickets = file_get_contents("http://api.travelpayouts.com/v1/prices/calendar?depart_date={$departureDate}&origin={$a}&destination={$b}&calendar_type=departure_date&token=ff86a5b4622103a85185456756893056");

$decodeTickets = json_decode($codeTickets, true);

//echo '<pre>' . print_r($decodeTickets, true) . '</pre>';
//echo '<pre>' . print_r($decodeCity, true) . '</pre>';




