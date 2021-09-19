<?php

namespace Database\Seeders;
use App\Models\user;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create
        (
            [
                'id'=>'1',
                'full_name'=>'Admin',
                'role'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('123456'),
                'mobile_number'=>'01825449021',
                'NID_Number'=>'123456',
                'present_address'=>'Uttara',
                'permanent_address'=> 'Dhaka',
                'occupation'=>'Moderator',
                'images'=>'',

    
            ]);
    }
}
