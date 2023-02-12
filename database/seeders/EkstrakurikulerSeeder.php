<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_ekskul')->insert([
            'name_ekskul' => ('Futsal'),
            'kouta' => ('30 '),
            'mas_kouta' => ('30 '),
            'day' => ('sabtu'),
            'time' => ('08:00:00'),
            'desc' => ('desc'),
        ]);
        DB::table('master_ekskul')->insert([
            'name_ekskul' => ('Sepak Bola'),
            'kouta' => ('30 '),
            'mas_kouta' => ('30 '),
            'day' => ('sabtu'),
            'time' => ('10:00:00'),
            'desc' => ('desc'),
        ]);
        DB::table('master_ekskul')->insert([
            'name_ekskul' => ('Renang'),
            'kouta' => ('30 '),
            'mas_kouta' => ('30 '),
            'day' => ('minggu'),
            'time' => ('09:00:00'),
            'desc' => ('desc'),
        ]);
    }
}
