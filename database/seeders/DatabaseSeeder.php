<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \DB::table('users')->insert([
        //     'username' => 'administrator',
        //     'email' => 'admin@eastwest.com',
        //     'password' => bcrypt('eastwest'),
        //     'role' => 'Cluster Leader',
        //     'is_active' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'email_verified_at' => now(),
        // ]);

        // \DB::table('user_profiles')->insert([
        //     'firstname' => 'Ra-ouf',
        //     'lastname' => 'Jumli',
        //     'middlename' => 'Indanan',
        //     'gender' => 'Male',
        //     'user_id' => 1,
        //     'added_by' => 1,
        //     'mobile' => '09557650801',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        
        $this->call(UsersTableSeeder::class);
        $this->call(LocationRegionsTableSeeder::class);
        $this->call(LocationProvincesTableSeeder::class);
        $this->call(LocationMunicipalitiesTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(UserProfilesTableSeeder::class);
        $this->call(UserAssignmentsTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
    }
}
