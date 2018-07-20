<?php

namespace App\Http\Controllers;

use App\AllInfo;
use App\dateTrips;
use App\Saave;
use Illuminate\Http\Request;
use App\Trips;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//use App\Save as ExemplarOfModel;
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

    public function prepareToSave(Request $request)
    {

        $add = new Saave();
        $add->airline= $request['airline'];
        $add->price= $request['price'];
        $add->origin= $request['origin'];
        $add->destination= $request['destination'];
        $add->transfers= $request['transfers'];
        $add->flight_number= $request['flight_number'];
        $add->departure_at= $request['departure_at'];
        $add->return_at= $request['return_at'];
        $add->expires_at= $request['expires_at'];
        $user = Auth::user();
        $user_email= $user['email'];
        $add->email_user= $user_email;

        $add->save();
        return ($add);
    }

    public function json(Request $request)
    {

        $exemlarTrips = new Trips();
        $exemlarDateTrips = new dateTrips();
        $exemlarAllInfo = new AllInfo();

        $origin = $request['name'][0];
        $destination = $request['name'][1];
        $departure_at = $request['depart'];
        $return_at = $request['return'];

        $resultWhere = DB::table('info_trip')->where('from_city', $origin)->where('to_city', $destination)->where('date_from', $departure_at)->where('date_to', $return_at)->first();

        $flag=0;
        if (isset($resultWhere)){
            $flag=1;
        }else $flag=0;

        if ($flag==0)
        {
            $resultTrips = $exemlarTrips->getInformationApi($request);
            $exemlarDateTrips->to_city = $destination;
            $exemlarDateTrips->from_city = $origin;
            $exemlarDateTrips->date_from = $departure_at;
            $exemlarDateTrips->date_to = $return_at;

            $exemlarDateTrips->save();

        }

        //$resultTrips = $exemlarTrips->getInformationApi($request);

        //$exemlarAllInfo->coordinates =   serialize( $resultTrips[1] );
        //$exemlarAllInfo->info_trip =  $resultTrips[0] ;
        //$exemlarAllInfo->date_trip = $resultTrips[2];
        //$exemlarAllInfo->save();
        //$check=serialize( $resultTrips[1] );
        //$resss=unserialize( $check );

        //return $resss;
        //return $flag;
    }

    public function popular(Request $request)
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



//        if ($request->input('popularCities') == 'KhKvLv'){
        $Kharkov = 'Харьков';
        $Kiev = 'Киев';
//        }
//        else {
//            echo 'Это не популярный маршрут';
//        }

        $departureDate = $request->input('depart');
        $ArrivalDate = $request->input('return');


        $codeCity = file_get_contents('https://www.travelpayouts.com/widgets_suggest_params?q=' . urlencode("Из {$Kharkov} в {$Kiev}"));
        $decodeCity = json_decode($codeCity, true);


        $cityOfDeparture = $decodeCity['origin']['iata'];
        $cityOfArrival = $decodeCity['destination']['iata'];

        $a = $cityOfDeparture;
        $b = $cityOfArrival;


        $cities = file_get_contents("http://api.travelpayouts.com/data/cities.json");
        $infoOnCities = json_decode($cities, true);

// echo '<pre>' . print_r($infoOnCities, true) . '</pre>';


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
        $res = [0 => $codeTickets, 1 => $info];
        return $res;


    }


}
