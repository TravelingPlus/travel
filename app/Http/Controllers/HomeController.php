<?php

namespace App\Http\Controllers;

use App\Hotelsinfo;
use App\Findhotel;
use App\Hotellist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $id = Auth::id();
        $user = DB::table('users')->where('id', $id)->first();
        return view('home', ['name' => $user->name]);
    }


    public function prepareToSave(Request $request)
    {
        //$d = $request['from'];
        //print('hiiiiii');
        //return '777778';
        return $request;
    }

    public function addUser(Request $request)
    {
        //$d = $request['from'];
        //print('hiiiiii');
        //return '777778';
        return $request;
    }

    public function hotels(Request $request)
    {
        $findhotel = new Findhotel();
        $hotels = new Hotelsinfo();
        $list = new Hotellist();

        $to = $request['to'];
        $from = $request['from'];
        $city = $request['city'];

        $hoteldb = DB::table('find_hotel')->where('city', $city)->where('checkin', $to)->where('checkout', $from)->first();

        if(isset($hoteldb)){
            $result = DB::table('hotelslist')->where('id',$hoteldb->id)->first();
            return $result->hotels;
        }else{
            $res = $hotels->Getihotelsinfo($request);
            $serres = json_decode($res, true);
            foreach ($serres as $serr){
                $resultarr[] = $serr['hotelName'];
            }
            $resultstr = implode(',', $resultarr);
            $findhotel->checkin = $to;
            $findhotel->checkout = $from;
            $findhotel->city = $city;
            $findhotel->save();

            $list->hotels = $resultstr;
            $list->save();
            return $resultstr;
        }

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

        $departureDate = $request->input('depart');
        $ArrivalDate = $request->input('return');

        //$rrr = count($request);
        $count = 0;
        $i = 0;
        while (isset($request->input('name')[$i])) {
            $count++;
            $i++;
        }
        $departurePoint = $request->input('name')[$count - 2];
        $arrivalPoint = $request->input('name')[$count - 1];


        //City codes in format IATA
        $codeCity = file_get_contents('https://www.travelpayouts.com/widgets_suggest_params?q=' . urlencode("Из {$departurePoint} в {$arrivalPoint}"));
        $decodeCity = json_decode($codeCity, true);


        $cityOfDeparture = $decodeCity['origin']['iata'];
        $cityOfArrival = $decodeCity['destination']['iata'];

        $a = $cityOfDeparture;
        $b = $cityOfArrival;

        //Данные о городах в json формате
        $cities = file_get_contents("http://api.travelpayouts.com/data/cities.json");
        $infoOnCities = json_decode($cities, true);
        $latitude1 = null;
        $longtude1 = null;
        $latitude2 = null;
        $longtude2 = null;
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

        //Departures from and to. According to the calendar and without. Currency
        $codeTickets = file_get_contents("https://api.travelpayouts.com/v1/prices/calendar?depart_date={$departureDate}&return_date={$ArrivalDate}&currency={$currency}&origin={$cityOfDeparture}&destination={$cityOfArrival}&calendar_type=departure_date&token=ff86a5b4622103a85185456756893056");
        $info = [0 => $latitude1, 1 => $longtude1, 2 => $latitude2, 3 => $longtude2];
        $res = [0 => $codeTickets, 1 => $info, 2 => $departureDate];
        return $res;
        //return $count;
    }

}
