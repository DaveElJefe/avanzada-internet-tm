<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        
        $client->name = "David";
        $client->phone_number = "6120000000";
        $client->email = "daveeljefe01@gmail.com";
        $client->save();

        $client = new Client();
        
        $client->name = "Tester";
        $client->phone_number = "6120000000";
        $client->email = "tester01@gmail.com";
        $client->save();
    }
}
