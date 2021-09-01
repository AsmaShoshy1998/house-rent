<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
        [
            'full_name'=>'Admin',
            'role'=>'admin',
            'email'=>'admin@gmail.com',
            'passoword'=>bcrypt('1234'),
            'mobile_number'=>'01825449021',

        ]);
    }
}
