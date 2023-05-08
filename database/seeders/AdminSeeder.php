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
        DB::table('users')->insert([
            'name' => ('Admin'),
            'username' => ('admin '),
            'password' => ('admin'),
            'role' => ('admin'),
        ]);
        DB::table('users')->insert([
            'name' => ('Guru'),
            'username' => ('guru '),
            'password' => ('guru'),
            'role' => ('guru'),
        ]);
        DB::table('users')->insert([
            'name' => ('Muhamad Kosasih'),
            'username' => ('12007932 '),
            'password' => ('12007932'),
            'role' => ('murid'),
        ]);
        DB::table('users')->insert([
            'name' => ('Abdul Mana'),
            'username' => ('12008181 '),
            'password' => ('12008181'),
            'role' => ('murid'),
        ]);
    }
}
