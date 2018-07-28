<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class HotelModel extends Model
{


    public function getHotelApi($request){

        $currency = $request->input('currency_hotel');

        if ($currency == 'usd') {
            $curr = 'usd';
        } elseif ($currency == 'eur') {
            $curr = 'eur';
        } elseif ($currency == 'rub') {
            $curr = 'rub';
        } else {
            echo 'Выберите валюту из выше перечисленных';
        }

        $arrival = $request->input('arrival');
        $out = $request->input('out');
        $city = $request->input('city');

        $codeCity = file_get_contents('https://www.travelpayouts.com/widgets_suggest_params?q=' . urlencode("Из {$city} в Харьков"));
        $decodeCity = json_decode($codeCity, true);

        $cityOfDeparture = $decodeCity['origin']['iata'];

        /**
         * Другие API отелей(работает)
         */
//        $res = file_get_contents("http://engine.hotellook.com/api/v2/cache.json?location={$cityOfDeparture}&language=ru&customerIp&currency={$currency}&checkIn={$arrival}&checkOut={$out}&limit=10");
//        return $res;

        $res = file_get_contents("http://engine.hotellook.com/api/v2/lookup.json?query={$cityOfDeparture}&lang=en&lookFor=hotel&limit=3");
        return $res;

    }
}
