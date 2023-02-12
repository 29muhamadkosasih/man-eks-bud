<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RayonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_rayon')->insert([
            'name_rayon' => ('Ciawi 1'),
            'pembimbing' => ('Juliana Mansyur ')
        ]);
        DB::table('master_rayon')->insert([
            'name_rayon' => ('Ciawi 2'),
            'pembimbing' => ('Acep Rahmat ')
        ]);
        DB::table('master_rayon')->insert([
            'name_rayon' => ('Ciawi 3'),
            'pembimbing' => ('Muslih ')
        ]);
        DB::table('master_rayon')->insert([
            'name_rayon' => ('Ciawi 5'),
            'pembimbing' => ('Yayu')
        ]);
        DB::table('master_rayon')->insert([
            'name_rayon' => ('Ciawi 4'),
            'pembimbing' => ('Asiah ')
        ]);
    }
}
