<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/{dato}', function ($dato) {
    $apiKey = config('services.apiKey.key');
    $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$dato}&appid={$apiKey}&units=metric");
    return view('weatherview', ['weather' => $response->json()]);
});
