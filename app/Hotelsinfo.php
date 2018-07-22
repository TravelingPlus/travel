<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotelsinfo extends Model
{
    public function Getihotelsinfo($request){
        $to = $request->input('to');
        $from = $request->input('from');
        $city = $request->input('city');
        $res = file_get_contents("http://engine.hotellook.com/api/v2/cache.json?location={$city}&currency=rub&checkIn={$to}&checkOut={$from}&limit=10");
        return $res;
    }
}
