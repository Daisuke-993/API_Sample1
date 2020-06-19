<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('form');
    }

    public function request(Request $request)
    {
        $base = "https://api.openweathermap.org/data/2.5/weather";
        $api_key = "e753db02de38e5d06f1fdb54a251f5d1";
        $url = $base . "?q=$request->location&appid=" . $api_key;
        dd(json_decode(file_get_contents($url), true));
        
    }
}
