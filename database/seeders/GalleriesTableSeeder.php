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
                'image' => 'public\frontend\images\popular-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'travel_package_id' => 2,
                'image' => 'public\frontend\images\popular-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'travel_package_id' => 3,
                'image' => 'public\frontend\images\popular-3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'travel_package_id' => 4,
                'image' => 'public\frontend\images\popular-4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
