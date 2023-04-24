<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = realpath($_SERVER["DOCUMENT_ROOT"]);
        $path1 = $path . '/database/sql/citySeed1.sql';
        $path2 = $path . '/database/sql/citySeed2.sql';
        $path3 = $path . '/database/sql/citySeed3.sql';
        $path4 = $path . '/database/sql/citySeed4.sql';
        $path5 = $path . '/database/sql/citySeed5.sql';
        $path6 = $path . '/database/sql/citySeed6.sql';
        $path7 = $path . '/database/sql/citySeed7.sql';
        $path8 = $path . '/database/sql/citySeed8.sql';
        $path9 = $path . '/database/sql/citySeed9.sql';
        $path10 = $path . '/database/sql/citySeed10.sql';

        $sql1 = file_get_contents($path1);
        DB::unprepared($sql1);

        $sql2 = file_get_contents($path2);
        DB::unprepared($sql2);

        $sql3 = file_get_contents($path3);
        DB::unprepared($sql3);

        $sql4 = file_get_contents($path4);
        DB::unprepared($sql4);

        $sql5 = file_get_contents($path5);
        DB::unprepared($sql5);

        $sql6 = file_get_contents($path6);
        DB::unprepared($sql6);

        $sql7 = file_get_contents($path7);
        DB::unprepared($sql7);

        $sql8 = file_get_contents($path8);
        DB::unprepared($sql8);

        $sql9 = file_get_contents($path9);
        DB::unprepared($sql9);

        $sql10 = file_get_contents($path10);
        DB::unprepared($sql10);
    }
}
