<?php

namespace App\Http\Controllers;

use App\Apod;
use Illuminate\Http\Request;
use GuzzleHttp;

class ApodController extends Controller
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
        $apod = Apod::select('*')->orderBy('date', 'desc')->first();
        return view('apod')->with(
            [
                'title' => $apod->title,
                'copyright' => $apod->copyright,
                'date' => $apod->date,
                'explanation' => $apod->explanation,
                'media_type' => $apod->media_type,
                'service_version' => $apod->service_version,
                'url' => $apod->url,
                'hd_url' => $apod->hd_url
            ]
        );
    }
}
