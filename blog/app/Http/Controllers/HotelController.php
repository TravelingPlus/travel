<?php

namespace App\Http\Controllers;

use App\AllHotel;
use Illuminate\Http\Request;
use App\HotelModel;
use App\tableHotel;
use Illuminate\Support\Facades\DB;

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

        $hot = new HotelModel();
        $tableHotel = new tableHotel();
        $exempAllHotel = new AllHotel();

        $hotel = $request->input('city');


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
            $resultHotel = $hot->getHotelApi($request);
            $tableHotel->city = $hotel;

            $tableHotel->save();

//            return $resultHotel;

            $exempAllHotel->json_info = serialize($resultHotel[0]);

            $exempAllHotel->save();

            return $resultHotel;
        } else {
            $resultAllHotel = DB::table('all_information_hotel')->where('id', $resultWhere->id)->first();
            $res = [0 => unserialize($resultAllHotel->json_info)];

            return $res;
        }

    }

}
