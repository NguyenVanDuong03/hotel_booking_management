<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hotelsCount = Hotel::count();
        $BookingsCount = Booking::count();
        $mostBookedRoom = Booking::selectRaw('hotel_name, COUNT(*) as booking_count')
            ->join('hotels', 'bookings.hotel_id', '=', 'hotels.hotel_id')
            ->groupBy('hotel_name')
            ->orderByDesc('booking_count')
            ->first();

        // Nếu có phòng đặt nhiều nhất, lấy tên của phòng đó, nếu không thì đặt là '...'
        $mostBookedRoomName = $mostBookedRoom ? $mostBookedRoom->hotel_name : '...';

        $leastBookedRoom = Booking::selectRaw('hotels.hotel_name, COUNT(*) as booking_count')
            ->join('hotels', 'bookings.hotel_id', '=', 'hotels.hotel_id')
            ->groupBy('hotels.hotel_name')
            ->orderBy('booking_count')
            ->first();

        // Nếu có phòng đặt ít nhất, lấy tên của phòng đó, nếu không thì đặt là '...'
        $leastBookedRoomName = $leastBookedRoom ? $leastBookedRoom->hotel_name : '...';
        return view('index', compact('hotelsCount', 'BookingsCount', 'mostBookedRoomName', 'leastBookedRoomName'));
    }
}
