<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 31.05.2018
 * Time: 23:44
 */

//require_once ("del.php");

$curr = null;

if ($_GET['currency'] == 'usd') {
    $curr = 'usd';
} elseif ($_GET['currency'] == 'eur') {
    $curr = 'eur';
} elseif ($_GET['currency'] == 'rub') {
    $curr = 'rub';
} else {
    echo 'Выберите валюту из выше перечисленных';
}

$depa = $_GET['depart'];
$retu = $_GET['return'];

$from = $_GET['frm'];
$to = $_GET['too'];


//City codes in format IATA
$codeCity = file_get_contents('https://www.travelpayouts.com/widgets_suggest_params?q=' . urlencode("Из {$from} в {$to}"));
$decodeCity = json_decode($codeCity, true);

$a = $decodeCity['origin']['iata'];
$b = $decodeCity['destination']['iata'];

//Departures from and to. According to the calendar and without. Currency
$tickets = file_get_contents("https://api.travelpayouts.com/v1/prices/calendar?depart_date={$depa}&return_date={$retu}&currency={$curr}&origin={$a}&destination={$b}&calendar_type=departure_date&token=ff86a5b4622103a85185456756893056");
$travel = json_decode($tickets, true);

echo '<pre>' . print_r($travel, true) . '</pre>';
//echo '<pre>' . print_r($decodeCity, true) . '</pre>';



//Will print only the prices
//foreach ($travel['data'] as $i) {
//    echo $i['price'] . "<br/>";
//}



