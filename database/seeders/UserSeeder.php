<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                'name' => 'Gohar Ashraf',
                'email' => 'gohar123@gmail.com',
                'password' => Hash::make('gohar')
            ],
            [
                'name' => 'Peter Parker',
                'email' => 'peter@gmail.com',
                'password' => Hash::make('gohar')
            ],

        ]);
    }
}
