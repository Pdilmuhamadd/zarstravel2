<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            [
                'travel_package_id' => 1,
                'image' => 'frontend/img/popular-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'travel_package_id' => 2,
                'image' => 'frontend/img/popular-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'travel_package_id' => 3,
                'image' => 'frontend/img/K3ie71guSMVWF8CzDq5bDo0VCNaNBdPRnaYIjotC.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'travel_package_id' => 4,
                'image' => 'frontend/img/MNvIB6YX6giLyy7PqHg6Po5Kfsuqg9AZdj16D9Aa.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
