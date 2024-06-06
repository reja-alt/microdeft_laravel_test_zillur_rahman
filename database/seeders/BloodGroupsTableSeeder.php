<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BloodGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bloodGroups = [
            ['name' => 'A+', 'status' => true],
            ['name' => 'A-', 'status' => true],
            ['name' => 'B+', 'status' => true],
            ['name' => 'B-', 'status' => true],
            ['name' => 'O+', 'status' => true],
            ['name' => 'O-', 'status' => true],
            ['name' => 'AB+', 'status' => true],
            ['name' => 'AB-', 'status' => true],
        ];

        DB::table('blood_groups')->insert($bloodGroups);
    }
}
