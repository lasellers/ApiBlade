<?php

namespace App\Http\Controllers;

use App\Apod;
use Illuminate\Http\Request;
use GuzzleHttp;
use Illuminate\Support\Facades\Redis;

class WeatherController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $list = Redis::keys('*');

        $cityName = "London";
        $appid = env('WEATHER_API_KEY');
        $redisString = "weather-{$cityName}-{$appid}";

        $weather = json_decode(Redis::get($redisString));

        if (empty($weather)) {
            $client = new GuzzleHttp\Client();
            //  try {
            $res = $client->request('GET', 'http://api.openweathermap.org/data/2.5/weather?q=' . $cityName . '&appid=' . env('WEATHER_API_KEY'), [
            ]);

            $content = $res->getBody()->getContents();
            $weather = json_decode($content, false);

            Redis::set($redisString, json_encode($weather));
        } else {
            if (is_string($weather))
                $weather = json_decode($weather);
        }

        return view('weather', [
            'icon' => $weather->weather[0]->main,
            'description' => $weather->weather[0]->description,
            'temperature' => $weather->main->temp,
            'feels_like' => $weather->main->feels_like,
            'min_temperature' => $weather->main->temp_min,
            'max_temperature' => $weather->main->temp_max,
            'pressure' => $weather->main->pressure,
            'humidity' => $weather->main->humidity,
            'visibility' => $weather->visibility,
            'wind_speed' => $weather->wind->speed,
            'wind_direction' => $weather->wind->deg,
            'cloud_coverage' => $weather->clouds->all,
            'sunrise' => $weather->sys->sunrise,
            'sunset' => $weather->sys->sunset,
        ]);
    }
}
