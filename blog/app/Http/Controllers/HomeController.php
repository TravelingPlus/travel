<?php

namespace App\Http\Controllers;

use App\AllHotel;
use App\HotelModel;
use App\tableHotel;
use App\AllRequest;
use App\AllInfo;
use App\dateTrips;
use App\Saave;
use App\SaveDataInfoTrip;
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
        $add->airline = $request['airline'];
        $add->price = $request['price'];
        $add->origin = $request['origin'];
        $add->destination = $request['destination'];
        $add->transfers = $request['transfers'];
        $add->flight_number = $request['flight_number'];
        $add->departure_at = $request['departure_at'];
        $add->return_at = $request['return_at'];
        $add->expires_at = $request['expires_at'];
        $user = Auth::user();
        $user_email = $user['email'];
        $add->email_user = $user_email;

        $add->save();
        return ($add);
    }

    public function prepareToDataInfoTrip(Request $request)
    {
        $resData = new SaveDataInfoTrip();

        $count = 0;
        $i = 0;
        while (isset($request->input('name')[$i])) {
            $count++;
            $i++;
        }

        $departure = $request->input('name')[$count - 2];
        $arrival = $request->input('name')[$count - 1];
        $transfer = 'Fly';
        $hotel = 'anybody hotel';
        $user = Auth::user();
        $user_email = $user['email'];

        $res = DB::table('DataInfoTrip')->where('city_of_departure', $departure)->where('email', $user_email)->where('city_of_departure', $departure)->where('city_of_arrival', $arrival)->where('transfer', $transfer)->where('hotel', $hotel)->first();

        $flag = 0;
        if (isset($res)) {
            $flag = 1;
        } else $flag = 0;

        if ($flag == 0) {
            $resData->city_of_departure = $departure;
            $resData->city_of_arrival = $arrival;
            $resData->transfer = $transfer;
            $resData->hotel = $hotel;
            $resData->email = $user_email;

            $resData->save();
        }
        return $user_email;

    }

    public function hotel_find($request_all)
    {
        //return $request;
        $hot = new HotelModel();
        $tableHotel = new tableHotel();
        $exempAllHotel = new AllHotel();

        $count_element = 0;
        $k = 0;
        while (isset($request_all->input('city')[$k])) {
            $count_element++;
            $k++;
        }

        $hotel = $request_all->input('city')[$count_element - 1];
        //return $hotel;

        $resultWhereAllHotel = DB::table('info_hotel')->get();
        foreach ($resultWhereAllHotel as $allInfo) {
            $time = $allInfo->created_at;
            $time = strtotime(date('Y-m-d H:i:s')) - strtotime($time);
            if ($time > 1000) {
                DB::table('info_hotel')->where('id', $allInfo->id)->delete();
                DB::table('all_information_hotel')->where('id', $allInfo->id)->delete();
            }
        }

        //$resultWhere = DB::table('info_hotel')->where('city', 'Москва')->first();

        $resultWhere = DB::table('info_hotel')->where('city', $hotel)->first();

        $flag = 0;
        if (isset($resultWhere)) {
            $flag = 1;
        } else $flag = 0;

        if ($flag == 0) {
            $resultHotel = $hot->getHotelApi($request_all);
            $tableHotel->city = $hotel;

            $tableHotel->save();

//            return $resultHotel;

            $exempAllHotel->json_info = $resultHotel;

            $exempAllHotel->save();

            return $resultHotel;
        } else {
            $resultAllHotel = DB::table('all_information_hotel')->where('id', $resultWhere->id)->first();
            $res = $resultAllHotel->json_info;

            return $res;
        }
    }

    public function json(Request $request)
    {   $mas_hotel = '';
        $out_input=$request->input('out');
        if($out_input !== null){
            $mas_hotel = $this->hotel_find($request);
        }else{
            //return '0000';
        }
        //$exemlar_info = new AllRequest();
        //$exemlar_info->all_request_info = ;
        //$exemlar_info->save();

        //return $request;
        //$mas_hotel = $this->hotel_find($request);
        //return $mas_hotel;

        $exemlarTrips = new Trips();
        $exemlarDateTrips = new dateTrips();
        $exemlarAllInfo = new AllInfo();

        $this->prepareToDataInfoTrip($request);

        $count = 0;
        $i = 0;
        while (isset($request->input('name')[$i])) {
            $count++;
            $i++;
        }

        $origin = $request->input('name')[$count - 2];
        $destination = $request->input('name')[$count - 1];

        //$origin = $request['name'][0];
        //$destination = $request['name'][1];

        $departure_at = $request['depart'];
        $return_at = $request['return'];

        $currency_check = $request->input('currency');

        $resultWhereAllInfo = DB::table('info_trip_update')->get();
        foreach ($resultWhereAllInfo as $allInfo) {
            $time = $allInfo->created_at;
            $time = strtotime(date('Y-m-d H:i:s')) - strtotime($time);
            if ($time > 1000) {
                DB::table('info_trip_update')->where('id', $allInfo->id)->delete();
                DB::table('all_information_trips')->where('id', $allInfo->id)->delete();
            }
        }


        $resultWhere = DB::table('info_trip_update')->where('curr', $currency_check)->where('from_city', $origin)->where('to_city', $destination)->where('date_from', $departure_at)->where('date_to', $return_at)->first();


        $flag = 0;
        if (isset($resultWhere)) {
            $flag = 1;
        } else $flag = 0;

        if ($flag == 0) {
            $resultTrips = $exemlarTrips->getInformationApi($request);
            $exemlarDateTrips->to_city = $destination;
            $exemlarDateTrips->from_city = $origin;
            $exemlarDateTrips->date_from = $departure_at;
            $exemlarDateTrips->date_to = $return_at;
            $exemlarDateTrips->curr = $currency_check;

            $exemlarDateTrips->save();

            $exemlarAllInfo->coordinates = serialize($resultTrips[1]);
            $exemlarAllInfo->info_trip = $resultTrips[0];
            $exemlarAllInfo->date_trip = $resultTrips[2];
            $exemlarAllInfo->save();

            array_push($resultTrips, $mas_hotel);
            //$res_new=[0=>$resultTrips, 1=>$mas_hotel];
            return $resultTrips;
            //return $res_new;
        } else {
            $resultAllInfo = DB::table('all_information_trips')->where('id', $resultWhere->id)->first();
            $res = [0 => $resultAllInfo->info_trip, 1 => unserialize($resultAllInfo->coordinates), 2 => $resultAllInfo->date_trip, 3=> $mas_hotel];

            return $res;
        }

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


        $kharkov = DB::table('popularcities')->where('id', '=', 1)->first();
        $kiev = DB::table('popularcities')->where('id', '=', 2)->first();
        $lvov = DB::table('popularcities')->where('id', '=', 3)->first();
        $odessa = DB::table('popularcities')->where('id', '=', 4)->first();
        $new_york = DB::table('popularcities')->where('id', '=', 5)->first();
        $miami = DB::table('popularcities')->where('id', '=', 6)->first();
        $moscow = DB::table('popularcities')->where('id', '=', 7)->first();
        $london = DB::table('popularcities')->where('id', '=', 8)->first();


        $citysPopular = $request->input('popularsCities');
        if ($citysPopular == 'KhKv') {
            $cityDepart = $kharkov->cities;
            $cityArriv = $kiev->cities;
        }
        if ($citysPopular == 'KvLv') {
            $cityDepart = $kiev->cities;
            $cityArriv = $lvov->cities;
        }

        if ($citysPopular == 'KvOd') {
            $cityDepart = $kiev->cities;
            $cityArriv = $odessa->cities;
        }

        if ($citysPopular == 'NyMi') {
            $cityDepart = $new_york->cities;
            $cityArriv = $miami->cities;
        }

        if ($citysPopular == 'MoLn') {
            $cityDepart = $moscow->cities;
            $cityArriv = $london->cities;
        }


//        }
//        else {
//            echo 'Это не популярный маршрут';
//        }

        $departureDate = $request->input('depart');
        $ArrivalDate = $request->input('return');


        $codeCity = file_get_contents('https://www.travelpayouts.com/widgets_suggest_params?q=' . urlencode("Из {$cityDepart} в {$cityArriv}"));
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

        $codeCity = file_get_contents('https://www.travelpayouts.com/widgets_suggest_params?q=' . urlencode("Из {$city} в Киев"));
        $decodeCity = json_decode($codeCity, true);


        $cityOfDeparture = $decodeCity['origin']['iata'];


        $res = file_get_contents("http://engine.hotellook.com/api/v2/cache.json?location={$cityOfDeparture}&language=ru&customerIp&currency={$currency}&checkIn={$arrival}&checkOut={$out}&limit=10");
        return $res;

    }


}
