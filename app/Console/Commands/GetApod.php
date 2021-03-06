<?php

namespace App\Console\Commands;

use App\Apod;
use Illuminate\Console\Command;
use GuzzleHttp;

/**
 * php artisan apod:get
 *
 * Class GetApod
 * @package App\Console\Commands
 */
class GetApod extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'apod:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get NASA APOD';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new GuzzleHttp\Client();
        try {
            $res = $client->request('GET', 'https://api.nasa.gov/planetary/apod?api_key=' . env('NASA_API_KEY'), [
            ]);

            $content = $res->getBody()->getContents();
            $json = json_decode($content, false);

            $apod = new Apod();
            $apod->title = $json->title;
            $apod->copyright = $json->copyright;
            $apod->date = $json->date;
            $apod->explanation = $json->explanation;
            $apod->media_type = $json->media_type;
            $apod->service_version = $json->service_version;
            $apod->url = $json->url;
            $apod->hd_url = $json->hdurl;
            $apod->save();

            return 0;
        } catch (\Exception $e) {
            return 1;
        }
    }
}
