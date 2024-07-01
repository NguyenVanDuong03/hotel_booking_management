<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;
use Faker\Factory as Faker;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            Hotel::create([
                'hotel_name' => $faker->company,
                'hotel_address' => $faker->address,
                'hotel_description' => $faker->sentence,
                'hotel_price' => $faker->randomFloat(2, 100, 1000),
            ]);
        }
    }
}
