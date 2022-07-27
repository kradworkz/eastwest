<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'cluster',
                'email' => 'cluster@yahoo.com',
                'email_verified_at' => '2022-07-26 12:29:37',
                'password' => '$2y$10$n2nXpnXv9tUNSL7mWuwUGeu4Gy/otMxqoG59O3xvHiVs77Vh07FS.',
                'avatar' => 'avatar.jpg',
                'role' => 'Cluster Leader',
                'is_active' => 1,
                'welcome_valid_until' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-26 12:29:37',
                'updated_at' => '2022-07-26 12:29:37',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'mindanao-group',
                'email' => 'mindanao-group@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YBwt8vPEgajdCYqnT.xKIu/uaS7DL4RKoJfCn9cSB3TxDHyHFY5Au',
                'avatar' => 'avatar.jpg',
                'role' => 'Group Leader',
                'is_active' => 0,
                'welcome_valid_until' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-26 12:31:06',
                'updated_at' => '2022-07-26 12:31:06',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'luzon-group',
                'email' => 'luzon-group@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$P4t0P/wgJj4Rv.f5tMBAe.KA.8ZY0q03y/37db6mZ15qljT0rQiIe',
                'avatar' => 'avatar.jpg',
                'role' => 'Group Leader',
                'is_active' => 0,
                'welcome_valid_until' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-26 12:31:33',
                'updated_at' => '2022-07-26 12:31:33',
            ),
            3 => 
            array (
                'id' => 4,
                'username' => 'visayas-group',
                'email' => 'visayas-group@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sri3e8tK1P.O8q8HwNIh/OYEgTAVhZYXcrSYBYC6d/D1bs8vEVjT.',
                'avatar' => 'avatar.jpg',
                'role' => 'Group Leader',
                'is_active' => 0,
                'welcome_valid_until' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-26 12:31:48',
                'updated_at' => '2022-07-26 12:31:48',
            ),
            4 => 
            array (
                'id' => 5,
                'username' => 'zds-team',
                'email' => 'zds-team@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4QAlI0E1tVRiLgm9x6gk/exUbHHI4ohTcBS5Y8aXSpLIP12RxCpDC',
                'avatar' => 'avatar.jpg',
                'role' => 'Team Leader',
                'is_active' => 0,
                'welcome_valid_until' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-26 12:49:27',
                'updated_at' => '2022-07-26 12:49:27',
            ),
            5 => 
            array (
                'id' => 6,
                'username' => 'one-specialist',
                'email' => 'one-specialist@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wBw6mZz2/SEfO6bEB3XUlelNirSzZtsewGk6/nq8lqwPycPVxgGgO',
                'avatar' => 'avatar.jpg',
                'role' => 'Loan Specialist',
                'is_active' => 0,
                'welcome_valid_until' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-26 12:51:19',
                'updated_at' => '2022-07-26 12:51:19',
            ),
        ));
        
        
    }
}