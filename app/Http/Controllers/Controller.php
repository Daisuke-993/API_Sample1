<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('form');
    }

    public function weather($location)
    {
        $base = "https://api.openweathermap.org/data/2.5/weather?";
        $query = array (
            'q' => $location,
            'units' => 'metric',
            'appid' => 'e753db02de38e5d06f1fdb54a251f5d1'
        );
        $url = $base . Arr::query($query);
        $weather = json_decode(file_get_contents($url), true);
        $weather_json = json_encode(array(
            'weather' => $weather['weather'][0]['main'],
            'temp' => $weather['main']['temp'],
            'wind' => $weather['wind']['speed']
        ));
        return $weather_json;
        
    }

    public function request(Request $request)
    {
        $base = "https://api.openweathermap.org/data/2.5/weather";
        $api_key = "e753db02de38e5d06f1fdb54a251f5d1";
        $url = $base . "?q=$request->location&units=metric&appid=" . $api_key;
        $weather = json_decode(file_get_contents($url), true);
        $weather_json = json_encode(array(
            'weather' => $weather['weather'][0]['main'],
            'temp' => $weather['main']['temp'],
            'wind' => $weather['wind']['speed']
        ));
        return $weather_json;
        
    }
}
