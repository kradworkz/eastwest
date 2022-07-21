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
                'username' => 'administrator',
                'email' => 'admin@eastwest.com',
                'email_verified_at' => '2022-07-20 05:54:50',
                'password' => '$2y$10$./aBocCZlxVCkQ1Y0gpNT.CEvuc6jIOCesumE5FMR4DENE31EY/em',
                'avatar' => 'avatar.jpg',
                'role' => 'Cluster Leader',
                'is_active' => 1,
                'welcome_valid_until' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-20 05:54:50',
                'updated_at' => '2022-07-20 05:54:50',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'group',
                'email' => 'group@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$T7VHqxyhptrhy.bF25mCO.SVN/i3nPQKgNMbnrW0XY0ErnUebmbKm',
                'avatar' => 'avatar.jpg',
                'role' => 'Group Leader',
                'is_active' => 0,
                'welcome_valid_until' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-20 05:55:27',
                'updated_at' => '2022-07-20 05:55:27',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'team',
                'email' => 'team@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qCQ0x5J9oLmT0T.8.qeMn.rxvwrB1Yfxf8OktKH1Gxv8uV7JYuguW',
                'avatar' => 'avatar.jpg',
                'role' => 'Team Leader',
                'is_active' => 0,
                'welcome_valid_until' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-20 05:56:23',
                'updated_at' => '2022-07-20 05:56:23',
            ),
            3 => 
            array (
                'id' => 4,
                'username' => 'one',
                'email' => 'one@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pMMdcwYJ9gqwc9r98gZd2.WxEitJbohI8xFRR0kvQXlRCeRzREjnW',
                'avatar' => 'avatar.jpg',
                'role' => 'Loan Specialist',
                'is_active' => 0,
                'welcome_valid_until' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-20 05:56:58',
                'updated_at' => '2022-07-20 05:56:58',
            ),
            4 => 
            array (
                'id' => 5,
                'username' => 'two',
                'email' => 'two@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gqEBE2Z4kmC38b0pGQjeNeFhWzNo/9aMfHpr9pxbjijZtd2yvngHK',
                'avatar' => 'avatar.jpg',
                'role' => 'Loan Specialist',
                'is_active' => 0,
                'welcome_valid_until' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-20 06:21:44',
                'updated_at' => '2022-07-20 06:21:44',
            ),
            5 => 
            array (
                'id' => 6,
                'username' => 'three',
                'email' => 'three@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3hOxPcnyupXPlMH5NHc13eFhlb2BGpP.p2gqbHsGZwc7aIuKBy/Ia',
                'avatar' => 'avatar.jpg',
                'role' => 'Loan Specialist',
                'is_active' => 0,
                'welcome_valid_until' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-20 06:21:56',
                'updated_at' => '2022-07-20 06:21:56',
            ),
        ));
        
        
    }
}