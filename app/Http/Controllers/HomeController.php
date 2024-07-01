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
        return view('index', compact('hotelsCount', 'BookingsCount'));
    }
}
