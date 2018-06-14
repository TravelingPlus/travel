<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 31.05.2018
 * Time: 23:44
 */

require_once ("index.html");


$id = 1111111;

if ($_POST['currency'] == 'usd') {
    $curr = 'usd';
} elseif ($_POST['currency'] == 'eur') {
    $curr = 'eur';
} elseif ($_POST['currency'] == 'rub') {
    $curr = 'rub';
} else {
    echo 'Выберите валюту из выше перечисленных';
}

$depa = $_POST['depart'];
$retu = $_POST['return'];

$from = $_POST['frm'];
$to = $_POST['too'];


//City codes in format IATA
$codeCity = file_get_contents('https://www.travelpayouts.com/widgets_suggest_params?q=' . urlencode("Из {$from} в {$to}"));
$decodeCity = json_decode($codeCity, true);


$gorodOtpravki = $decodeCity['origin']['iata'];
$gorodPribitiya = $decodeCity['destination']['iata'];

$a = $gorodOtpravki;
$b = $gorodPribitiya;

echo '<pre>' . print_r($decodeCity, true) . '</pre>';


//Данные о городах в json формате
$goroda = file_get_contents("http://api.travelpayouts.com/data/cities.json");
$dannieOgorodax = json_decode($goroda,true);

//if ($dannieOgorodax['code'] == $a){
//}



// echo '<pre>' . print_r($dannieOgorodax, true) . '</pre>';

foreach($dannieOgorodax as $city){
    if($city['code'] == $a){
        $lat = $city['coordinates']['lat'];
        $lon = $city['coordinates']['lon'];
        echo $lat;
        echo $lon;
    }
}



//Departures from and to. According to the calendar and without. Currency
$tickets = file_get_contents("https://api.travelpayouts.com/v1/prices/calendar?depart_date={$depa}&return_date={$retu}&currency={$curr}&origin={$gorodOtpravki}&destination={$gorodPribitiya}&calendar_type=departure_date&token=ff86a5b4622103a85185456756893056");
//$tickets = file_get_contents("http://api.travelpayouts.com/v1/prices/calendar?depart_date={$depa}&origin={$a}&destination={$b}&calendar_type=departure_date&token=ff86a5b4622103a85185456756893056");

$travel = json_decode($tickets, true);

//echo '<pre>' . print_r($travel, true) . '</pre>';
//echo '<pre>' . print_r($decodeCity, true) . '</pre>';




//Will print only the prices
foreach ($dannieOgorodax as $i) {
    $xex[] = $i['code'] . "<br/>";
}


foreach($xex as $xe) {
    if ($xe == $a) {
        foreach ($dannieOgorodax as $x) {
            echo $x['coordinates']['lat'] . "<br>";
        }
    }
}


