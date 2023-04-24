<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zipcode;

class ZipcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*DATA FROM TXT FILE FORMAT
            0: Country
            1: Zip
            2: City
            3: State
            4: State Abbr
            5: County
            6: 
            7: 
            8: 
            9: Lat
            10: Long
        */
        $path = realpath($_SERVER["DOCUMENT_ROOT"]);
        $zipsPath = $path . '/database/helpers/US.txt';
        $zipText = file_get_contents($zipsPath);
        $zipsArray = [];
        $lines = explode(PHP_EOL, $zipText);
        $i = 0;
        foreach($lines as $line) {
            $lineArray = explode("\t", $line);
            if(!empty($lineArray[1])) {
                $lineArrFixed = [
                    "country"    => $lineArray[0],
                    "zipcode"    => $lineArray[1],
                    "city"       => $lineArray[2],
                    "state"      => $lineArray[3],
                    "state_abbr" => $lineArray[4],
                    "county"     => $lineArray[5],
                    "latitude"   => $lineArray[9],
                    "longitude"  => $lineArray[10],
                ];

                Zipcode::create($lineArrFixed);
            }
        }
    }
}
