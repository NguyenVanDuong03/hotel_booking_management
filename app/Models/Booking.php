<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $primaryKey = 'booking_id';
    public $timestamps = false;

    public $fillable = ['hotel_id', 'booking_guest', 'booking_checkin', 'booking_checkout', 'booking_number_of_hour', 'booking_total_price'];

    public function getHotel() {
        $hotel = Hotel::where('hotel_id', $this->hotel_id)->first();
        return $hotel;
    }

    public function getHotelId() {
        $hotel = Hotel::where('hotel_id', $this->hotel_id)->first();
        return $hotel->hotel_id;
    }

    public function getHotelName() {
        $hotel = Hotel::where('hotel_id', $this->hotel_id)->first();
        return $hotel->hotel_name;
    }

    public function getHotelPrice() {
        $hotel = Hotel::where('hotel_id', $this->hotel_id)->first();
        return $hotel->hotel_price;
    }
}
