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
                'created_at' => '2022-07-20 05:54:50',
                'updated_at' => '2022-07-20 05:54:50',
            ),
            1 => 
            array (
                'id' => 2,
                'firstname' => 'test',
                'lastname' => 'group',
                'middlename' => 'a',
                'suffix' => NULL,
                'gender' => 'M',
                'mobile' => '09123458769',
                'user_id' => 2,
                'added_by' => 1,
                'created_at' => '2022-07-20 05:55:27',
                'updated_at' => '2022-07-20 05:55:27',
            ),
            2 => 
            array (
                'id' => 3,
                'firstname' => 'test',
                'lastname' => 'team',
                'middlename' => 's',
                'suffix' => NULL,
                'gender' => 'M',
                'mobile' => '09123654789',
                'user_id' => 3,
                'added_by' => 2,
                'created_at' => '2022-07-20 05:56:23',
                'updated_at' => '2022-07-20 05:56:23',
            ),
            3 => 
            array (
                'id' => 4,
                'firstname' => 'one',
                'lastname' => 'specialist',
                'middlename' => 'a',
                'suffix' => NULL,
                'gender' => 'M',
                'mobile' => '09123654789',
                'user_id' => 4,
                'added_by' => 3,
                'created_at' => '2022-07-20 05:56:58',
                'updated_at' => '2022-07-20 05:56:58',
            ),
            4 => 
            array (
                'id' => 5,
                'firstname' => 'two',
                'lastname' => 'specialist',
                'middlename' => 'a',
                'suffix' => NULL,
                'gender' => 'M',
                'mobile' => '09214365656',
                'user_id' => 5,
                'added_by' => 3,
                'created_at' => '2022-07-20 06:21:44',
                'updated_at' => '2022-07-20 06:21:44',
            ),
            5 => 
            array (
                'id' => 6,
                'firstname' => 'three',
                'lastname' => 'specialist',
                'middlename' => 'a',
                'suffix' => NULL,
                'gender' => 'M',
                'mobile' => '09214365651',
                'user_id' => 6,
                'added_by' => 3,
                'created_at' => '2022-07-20 06:21:56',
                'updated_at' => '2022-07-20 06:21:56',
            ),
        ));
        
        
    }
}