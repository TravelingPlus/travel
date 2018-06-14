<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
        return view('home');
    }

    public function json(Request $request)
    {
        $currency = $request->input('currency');

        if ($currency == 'usd') {
            $curr = 'usd';
        } elseif ($currency == 'eur') {
            $curr = 'eur';
        } elseif ($currency == 'rub') {
            $curr = 'rub';
        } else {
            echo 'Выберите валюту из выше перечисленных';
        }  

        $depa = $request->input('depart');
        $retu = $request->input('return');

        $from = $request->input('frm');
        $to = $request->input('too');


        //City codes in format IATA
        $codeCity = file_get_contents('https://www.travelpayouts.com/widgets_suggest_params?q=' . urlencode("Из {$from} в {$to}"));
        $decodeCity = json_decode($codeCity, true);

        $a = $decodeCity['origin']['iata'];
        $b = $decodeCity['destination']['iata'];

        //Departures from and to. According to the calendar and without. Currency
        return file_get_contents("https://api.travelpayouts.com/v1/prices/calendar?depart_date={$depa}&return_date={$retu}&currency={$curr}&origin={$a}&destination={$b}&calendar_type=departure_date&token=ff86a5b4622103a85185456756893056");
    }
}
