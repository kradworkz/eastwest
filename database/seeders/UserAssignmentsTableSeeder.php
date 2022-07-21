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
                'created_at' => '2022-07-20 05:55:27',
                'updated_at' => '2022-07-20 05:55:27',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 3,
                'region_code' => '090000000',
                'municipality_code' => '097302000',
                'created_at' => '2022-07-20 05:56:23',
                'updated_at' => '2022-07-20 05:56:23',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 4,
                'region_code' => NULL,
                'municipality_code' => NULL,
                'created_at' => '2022-07-20 05:56:58',
                'updated_at' => '2022-07-20 05:56:58',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 5,
                'region_code' => NULL,
                'municipality_code' => NULL,
                'created_at' => '2022-07-20 06:21:44',
                'updated_at' => '2022-07-20 06:21:44',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 6,
                'region_code' => NULL,
                'municipality_code' => NULL,
                'created_at' => '2022-07-20 06:21:56',
                'updated_at' => '2022-07-20 06:21:56',
            ),
        ));
        
        
    }
}