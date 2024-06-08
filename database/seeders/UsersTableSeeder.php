<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'full_name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
               // 'remember_token' => null,
                // 'locale'         => '',
                'country_code'   => '',
                'fcm_token'      => '',
                'login_type'     => '',
                'phone_number'   => '',
                'profile_pic'    => '',
                'reviews_count'  => '',
                'reviews_sum'    => '',
                'wallet_amount'  => '',
            ],
        ];

        User::insert($users);
    }
}
