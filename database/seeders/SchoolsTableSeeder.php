<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schools')->delete();
        
        \DB::table('schools')->insert(array (
            0 => 
            array (
                'created_at' => '2022-07-11 10:46:58',
                'id' => 1,
                'municipality_code' => '097302000',
                'name' => 'San Juan Elementary School',
                'shortcut' => 'SJ-ES',
                'updated_at' => '2022-07-11 10:47:00',
            ),
            1 => 
            array (
                'created_at' => '2022-07-11 10:45:00',
                'id' => 2,
                'municipality_code' => '097302000',
                'name' => 'San Antonio National High School',
                'shortcut' => 'SA-NHS',
                'updated_at' => '2022-07-11 10:45:00',
            ),
            2 => 
            array (
                'created_at' => '2022-07-11 10:45:33',
                'id' => 3,
                'municipality_code' => '097302000',
                'name' => 'San Jose Elementary School',
                'shortcut' => 'SJ-ES',
                'updated_at' => '2022-07-11 10:45:33',
            ),
            3 => 
            array (
                'created_at' => '2022-07-11 10:46:16',
                'id' => 4,
                'municipality_code' => '097302000',
                'name' => 'San Pablo Elementary School',
                'shortcut' => 'SP-ES',
                'updated_at' => '2022-07-11 10:46:16',
            ),
            4 => 
            array (
                'created_at' => '2022-07-11 11:01:22',
                'id' => 5,
                'municipality_code' => '097302000',
                'name' => 'San Vicente National High School',
                'shortcut' => 'SV-NHS',
                'updated_at' => '2022-07-11 11:01:22',
            ),
            5 => 
            array (
                'created_at' => '2022-07-11 11:02:02',
                'id' => 6,
                'municipality_code' => '097302000',
                'name' => 'San Pedro Elementary School',
                'shortcut' => 'SP-ES',
                'updated_at' => '2022-07-11 11:02:02',
            ),
        ));
        
        
    }
}