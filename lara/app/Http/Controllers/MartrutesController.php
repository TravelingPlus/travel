<?php

namespace App\Http\Controllers;

use App\AllInfo;
use App\dateTrips;
use App\Saave;
use App\SaveDataInfoTrip;
use Illuminate\Http\Request;
use App\Trips;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//use App\Save as ExemplarOfModel;
class MartrutesController extends Controller
{
    public function allMartrutes()
    {
        $user = Auth::user();
        $user_email = $user['email'];
        $exemlarDateTrips = DB::table('DataInfoTrip')->where('email', $user_email)->get();
        //$exemlarDateTrips = dateTrips::where('email', $user_email);


        return view('site.allInfoTrip', compact('exemlarDateTrips'));
        //return $exemlarDateTrips;
    }


}
