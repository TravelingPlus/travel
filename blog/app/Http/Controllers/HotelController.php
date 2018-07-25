<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HotelModel;

class HotelController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hotel');
    }

    public function apihotel(Request $request)
    {
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


        $res = file_get_contents("http://engine.hotellook.com/api/v2/cache.json?location={$cityOfDeparture}&language=ru&customerIp&currency={$currency}&checkIn={$arrival}&checkOut={$out}&limit=10");
        return $res;

    }

    public function InfHotel(Request $request)
    {

        $hot = new HotelModel();

    }


}
