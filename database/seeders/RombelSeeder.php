<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RombelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_rombel')->insert([
            'name_rombel' => ('RPL X-4'),
        ]);
        DB::table('master_rombel')->insert([
            'name_rombel' => ('MMD X-4'),
        ]);
        DB::table('master_rombel')->insert([
            'name_rombel' => ('OTKP X-4'),
        ]);
        DB::table('master_rombel')->insert([
            'name_rombel' => ('TKJ X-4'),
        ]);
        DB::table('master_rombel')->insert([
            'name_rombel' => ('RPL XII-4'),
        ]);
        DB::table('master_rombel')->insert([
            'name_rombel' => ('RPL XI-4'),
        ]);
        DB::table('master_rombel')->insert([
            'name_rombel' => ('OTKP XII-4'),
        ]);
        DB::table('master_rombel')->insert([
            'name_rombel' => ('TKJ XII-4'),
        ]);
        DB::table('master_rombel')->insert([
            'name_rombel' => ('BDP XII-4'),
        ]);
    }
}
