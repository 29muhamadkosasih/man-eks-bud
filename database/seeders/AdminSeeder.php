<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'name' => ('Admin Admin'),
            'username' => ('admin '),
            'password' => ('admin'),
            'role' => ('admin'),
        ]);
        DB::table('admin')->insert([
            'name' => ('Guru Guru'),
            'username' => ('guru '),
            'password' => ('guru'),
            'role' => ('guru'),
        ]);
        DB::table('admin')->insert([
            'name' => ('Murid Murid'),
            'username' => ('murid '),
            'password' => ('murid'),
            'role' => ('murid'),
        ]);
    }
}
