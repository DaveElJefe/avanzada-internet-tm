<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Facades\Hash;
use Illuminate\Facades\DB;

class Users_Seeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "David Buenrostro",
            'email' => "david_e_b_01@hotmail.com",
            'password' => Hash::make('password')
        ]);
    }
}
