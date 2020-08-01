<?php

use Illuminate\Database\Seeder;
use App\Apod;
use App\County;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // City|State short name|State full name|County|City Alias Mixed Case
        $inputFile = base_path('database/seeds/us_cities_states_counties.csv');
        $file = fopen($inputFile, "r");
        $header = fgetcsv($file, 200, "|");
        while (($csv = fgetcsv($file, 200, "|")) !== FALSE) {
            if (count($csv) == 5 && $csv[1] === 'TN') {
                [$city, $state, $state_full_name, $county, $city_alias] = $csv;
                try {
                    County::create([
                        'city' => $city,
                        'state' => $state,
                        'state_full_name' => $state_full_name,
                        'county' => $county,
                        'city_alias' => $city_alias
                    ]);
                } catch (Exception $e) {

                }
            }
        }
    }
}
