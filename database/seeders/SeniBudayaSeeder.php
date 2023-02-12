<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeniBudayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_senbud')->insert([
            'name_senbud' => ('Musik'),
            'kouta' => ('30 '),
            'mas_kouta' => ('30 '),
            'day' => ('sabtu'),
            'time' => ('08:00:00'),
            'desc' => ('desc'),
        ]);
        DB::table('master_senbud')->insert([
            'name_senbud' => ('Band'),
            'kouta' => ('30 '),
            'mas_kouta' => ('30 '),
            'day' => ('sabtu'),
            'time' => ('10:00:00'),
            'desc' => ('desc'),
        ]);
        DB::table('master_senbud')->insert([
            'name_senbud' => ('Drama'),
            'kouta' => ('30 '),
            'mas_kouta' => ('30 '),
            'day' => ('minggu'),
            'time' => ('09:00:00'),
            'desc' => ('desc'),
        ]);
    }
}
