<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //KETIGA DATA INI AKAN DIJADIKAN DUMMY USER DENGAN MASING-MASING ROLE YANG DIMILIKINYA
        User::create([
            'name' => 'Agung Suro Santoso',
            'email' => 'agung@sahabatabadi.com',
            'password' => bcrypt('agungsan'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Samsul Maarif',
            'email' => 'samsul@sahabatabadi.com',
            'password' => bcrypt('samsul'),
            'role' => 'user'
        ]);
    }
}
