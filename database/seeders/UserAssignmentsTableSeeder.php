<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserAssignmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_assignments')->delete();
        
        \DB::table('user_assignments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'region_code' => '090000000',
                'municipality_code' => NULL,
                'created_at' => '2022-07-26 12:31:06',
                'updated_at' => '2022-07-26 12:31:06',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'region_code' => '100000000',
                'municipality_code' => NULL,
                'created_at' => '2022-07-26 12:31:06',
                'updated_at' => '2022-07-26 12:31:06',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'region_code' => '110000000',
                'municipality_code' => NULL,
                'created_at' => '2022-07-26 12:31:06',
                'updated_at' => '2022-07-26 12:31:06',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 3,
                'region_code' => '010000000',
                'municipality_code' => NULL,
                'created_at' => '2022-07-26 12:31:33',
                'updated_at' => '2022-07-26 12:31:33',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 3,
                'region_code' => '020000000',
                'municipality_code' => NULL,
                'created_at' => '2022-07-26 12:31:33',
                'updated_at' => '2022-07-26 12:31:33',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'region_code' => '030000000',
                'municipality_code' => NULL,
                'created_at' => '2022-07-26 12:31:33',
                'updated_at' => '2022-07-26 12:31:33',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 4,
                'region_code' => '050000000',
                'municipality_code' => NULL,
                'created_at' => '2022-07-26 12:31:48',
                'updated_at' => '2022-07-26 12:31:48',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 4,
                'region_code' => '060000000',
                'municipality_code' => NULL,
                'created_at' => '2022-07-26 12:31:48',
                'updated_at' => '2022-07-26 12:31:48',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 4,
                'region_code' => '070000000',
                'municipality_code' => NULL,
                'created_at' => '2022-07-26 12:31:48',
                'updated_at' => '2022-07-26 12:31:48',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 5,
                'region_code' => '090000000',
                'municipality_code' => '097302000',
                'created_at' => '2022-07-26 12:49:27',
                'updated_at' => '2022-07-26 12:49:27',
            ),
        ));
        
        
    }
}