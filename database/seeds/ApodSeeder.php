<?php

use Illuminate\Database\Seeder;
use App\Apod;

class ApodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apod::create([
            'title' => 'Title Test',
            'date' => '2020-01-02',
            'copyright' => 'Copyright',
            'explanation' => 'Explanation',
            'media_type' => 'Media_type',
            'service_version' => 'Service_version',
            'url' => 'Url',
            'hd_url' => 'Hd Url',
        ]);

        \Artisan::call('apod:get');
    }
}
