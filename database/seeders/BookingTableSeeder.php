<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\Hotel;
use Faker\Factory as Faker;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $Hotelids = Hotel::pluck('hotel_id');
        for ($i = 0; $i < 200; $i++) {
            $checkin = $faker->dateTimeBetween('-1 week', '-3 day');
            $checkout = $faker->dateTimeBetween('-2 day');
            $intervel = $checkout->diff($checkin);
            $h = $intervel->h;
            $days = $intervel->d;
            $hours = $days * 24 + $h;
            $hotel_id = $Hotelids->random();
            $price = Hotel::where('hotel_id', $hotel_id)->first()->hotel_price;
            $totalMoney = $hours * $price;
            Booking::create([
                'hotel_id' => $Hotelids->random(),
                'booking_guest' => $faker->name(),
                'booking_checkin' => $checkin,
                'booking_checkout' => $checkout,
                'booking_number_of_hour' => $hours,
                'booking_total_price' => $totalMoney,
            ]);
        }
    }
}
