<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05.06.2018
 * Time: 1:02
 */

require_once('trip.php');

class TravelpayoutsParamsSuggester {
    static $url = 'https://www.travelpayouts.com/widgets_suggest_params?q=';

    public function suggest($query) {
        $url = self::$url . urlencode($query);
        return self::get_json($url);
    }

    private function get_json($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);

        $answer = curl_exec($ch);
        curl_close($ch);

        return json_decode($answer, true);
    }
}

$city = TravelpayoutsParamsSuggester::suggest("Из {$otkuda} в {$kuda}");

echo '<pre>' . print_r($city, true) . '</pre>';

print_r($city['origin']['iata']);

