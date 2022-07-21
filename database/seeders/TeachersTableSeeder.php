<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teachers')->delete();
        
        \DB::table('teachers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '0002005',
                'firstname' => 'ELMA',
                'lastname' => 'UCKUNG',
                'middlename' => 'CAP',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09123456789',
                'email' => '0002005@gmail.com',
                'school_id' => 2,
                'created_at' => '2022-07-20 06:19:26',
                'updated_at' => '2022-07-20 06:19:26',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '0010002',
                'firstname' => 'ACAMA',
                'lastname' => 'LAWAMA',
                'middlename' => 'AND',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09123456789',
                'email' => '0010002@gmail.com',
                'school_id' => 6,
                'created_at' => '2022-07-20 06:19:26',
                'updated_at' => '2022-07-20 06:19:26',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '0010003',
                'firstname' => 'GENELIE',
                'lastname' => 'MAPA',
                'middlename' => 'ONG',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09123456789',
                'email' => '0010003@gmail.com',
                'school_id' => 4,
                'created_at' => '2022-07-20 06:19:26',
                'updated_at' => '2022-07-20 06:19:26',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => '0010005',
                'firstname' => 'ELSIE MARIE',
                'lastname' => 'SUAIB',
                'middlename' => 'BAI',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09123456789',
                'email' => '0010005@gmail.com',
                'school_id' => 1,
                'created_at' => '2022-07-20 06:19:26',
                'updated_at' => '2022-07-20 06:19:26',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => '0010006',
                'firstname' => 'CARMONETTE',
                'lastname' => 'CAÑETE',
                'middlename' => 'DEL',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09123456789',
                'email' => '0010006@gmail.com',
                'school_id' => 5,
                'created_at' => '2022-07-20 06:19:26',
                'updated_at' => '2022-07-20 06:19:26',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => '0010007',
                'firstname' => 'TADEL',
                'lastname' => 'MUHAJIR',
                'middlename' => 'MAS',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09123456789',
                'email' => '0010007@gmail.com',
                'school_id' => 4,
                'created_at' => '2022-07-20 06:19:26',
                'updated_at' => '2022-07-20 06:19:26',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => '0010008',
                'firstname' => 'SHARON',
                'lastname' => 'YU',
                'middlename' => 'KAH',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09123456789',
                'email' => '0010008@gmail.com',
                'school_id' => 2,
                'created_at' => '2022-07-20 06:19:26',
                'updated_at' => '2022-07-20 06:19:26',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => '0010009',
                'firstname' => 'DAYANG-DAYANG R',
                'lastname' => 'SALIH',
                'middlename' => 'JAL',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09123456789',
                'email' => '0010009@gmail.com',
                'school_id' => 2,
                'created_at' => '2022-07-20 06:19:26',
                'updated_at' => '2022-07-20 06:19:26',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => '0010010',
                'firstname' => 'DAISY',
                'lastname' => 'SAAVEDRA',
                'middlename' => 'BER',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09123456789',
                'email' => '0010010@gmail.com',
                'school_id' => 1,
                'created_at' => '2022-07-20 06:19:26',
                'updated_at' => '2022-07-20 06:19:26',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => '0010011',
                'firstname' => 'SHIELA',
                'lastname' => 'LAMUNA',
                'middlename' => 'VIL',
                'suffix' => NULL,
                'gender' => 'Male',
                'mobile' => '09123456789',
                'email' => '0010011@gmail.com',
                'school_id' => 6,
                'created_at' => '2022-07-20 06:19:26',
                'updated_at' => '2022-07-20 06:19:26',
            ),
        ));
        
        
    }
}