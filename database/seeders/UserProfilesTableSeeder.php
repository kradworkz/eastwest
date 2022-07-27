<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserProfilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_profiles')->delete();
        
        \DB::table('user_profiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstname' => 'Ra-ouf',
                'lastname' => 'Jumli',
                'middlename' => 'Indanan',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09557650801',
                'user_id' => 1,
                'added_by' => 1,
                'created_at' => '2022-07-26 12:29:37',
                'updated_at' => '2022-07-26 12:29:37',
            ),
            1 => 
            array (
                'id' => 2,
                'firstname' => 'group',
                'lastname' => 'mindanao',
                'middlename' => 'l',
                'suffix' => NULL,
                'gender' => 'M',
                'mobile' => '09123458769',
                'user_id' => 2,
                'added_by' => 1,
                'created_at' => '2022-07-26 12:31:06',
                'updated_at' => '2022-07-26 12:31:06',
            ),
            2 => 
            array (
                'id' => 3,
                'firstname' => 'group',
                'lastname' => 'luzon',
                'middlename' => 'l',
                'suffix' => NULL,
                'gender' => 'M',
                'mobile' => '09123458762',
                'user_id' => 3,
                'added_by' => 1,
                'created_at' => '2022-07-26 12:31:33',
                'updated_at' => '2022-07-26 12:31:33',
            ),
            3 => 
            array (
                'id' => 4,
                'firstname' => 'group',
                'lastname' => 'visayas',
                'middlename' => 'l',
                'suffix' => NULL,
                'gender' => 'M',
                'mobile' => '09123458761',
                'user_id' => 4,
                'added_by' => 1,
                'created_at' => '2022-07-26 12:31:48',
                'updated_at' => '2022-07-26 12:31:48',
            ),
            4 => 
            array (
                'id' => 5,
                'firstname' => 'zds',
                'lastname' => 'team',
                'middlename' => 'a',
                'suffix' => NULL,
                'gender' => 'M',
                'mobile' => '09123654978',
                'user_id' => 5,
                'added_by' => 2,
                'created_at' => '2022-07-26 12:49:27',
                'updated_at' => '2022-07-26 12:49:27',
            ),
            5 => 
            array (
                'id' => 6,
                'firstname' => 'one',
                'lastname' => 'specialist',
                'middlename' => 'a',
                'suffix' => NULL,
                'gender' => 'M',
                'mobile' => '09123654798',
                'user_id' => 6,
                'added_by' => 5,
                'created_at' => '2022-07-26 12:51:19',
                'updated_at' => '2022-07-26 12:51:19',
            ),
        ));
        
        
    }
}