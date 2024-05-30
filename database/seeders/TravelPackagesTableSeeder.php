<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TravelPackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('travel_packages')->insert([
            [
                'title' => 'DERATAN, BALI',
                'slug' => Str::slug('DERATAN, BALI'),
                'location' => 'Indonesia',
                'about' => 'Exciting adventure in Bali',
                'featured_event' => 'Surfing',
                'language' => 'Indonesia',
                'foods' => 'Ayam Betutu',
                'departure_date' => '2024-06-01',
                'duration' => '7 Days',
                'type' => 'Open Trip',
                'price' => 1500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'BROMO, MALANG',
                'slug' => Str::slug('BROMO, MALANG'),
                'location' => 'Indonesia',
                'about' => 'Explore the cultural heritage of Yogyakarta',
                'featured_event' => 'Borobudur Visit',
                'language' => 'Indonesia',
                'foods' => 'Gudeg',
                'departure_date' => '2024-07-10',
                'duration' => '5 Days',
                'type' => 'Open Trip',
                'price' => 1200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'NUSA PENIDA',
                'slug' => Str::slug('NUSA PENIDA'),
                'location' => 'Indonesia',
                'about' => 'Explore Nusa Penida',
                'featured_event' => 'Concert',
                'language' => 'Indonesia',
                'foods' => 'Ikan Bakar',
                'departure_date' => '2024-07-10',
                'duration' => '5 Days',
                'type' => 'Open Trip',
                'price' => 2200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'DUBAI',
                'slug' => Str::slug('DUBAI'),
                'location' => 'Middle East',
                'about' => 'Explore Middle East',
                'featured_event' => 'Trip to Dubai',
                'language' => 'English',
                'foods' => 'Chicken Rice',
                'departure_date' => '2024-07-10',
                'duration' => '5 Days',
                'type' => 'Open Trip',
                'price' => 3200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
