<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;


class WeatherController extends Controller
{
    public function ShowWeather ($city)
    {
        $apiKey = config('services.apiKey.key');
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric");
        if($response['cod'] == 200) {
            return view('weatherview', ['weather' => $response->json()]);
        } else {
            dd('The city is not exists, please search another city.');
        }
       
    }
}

