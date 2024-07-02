<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Http\Requests\BookingStoreRequest;
use App\Models\Booking;
use App\Models\Hotel;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $numberOfRecord = Booking::count();
        $perPage = 9;
        $numberOfPage = $numberOfRecord % $perPage == 0 ? (int) $numberOfRecord / $perPage : (int) $numberOfRecord / $perPage + 1;
        $pageIndex = 1;
        if ($request->has('pageIndex')) {
            $pageIndex = $request->input('pageIndex');
        }
        if ($pageIndex < 1) {
            $pageIndex = 1;
        }
        if ($pageIndex > $numberOfPage) {
            $pageIndex = $numberOfPage;
        }
        //
        $bookings = Booking::orderByDesc('booking_id')
            ->skip(($pageIndex - 1) * $perPage)
            ->take($perPage)
            ->get();
        // dd($arr);
        return view('bookings.index', compact('bookings', 'numberOfPage', 'pageIndex'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hotels = Hotel::all();
        return view('bookings.create', compact('hotels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookingStoreRequest $request)
    {
        Booking::create($request->all());
        return redirect()->route('bookings.index')->with('mes', 'Thêm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking, request $request)
    {
        $pageIndex = 1;
        if ($request->has('pageIndex')) {
            $pageIndex = $request->input('pageIndex');
        }
        $hotel = $booking->gethotel();
        return view('bookings.show', compact('booking', 'pageIndex', 'hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking, request $request)
    {
        $pageIndex = 1;
        if ($request->has('pageIndex')) {
            $pageIndex = $request->input('pageIndex');
        }
        $hotels = Hotel::all();
        return view('bookings.edit', compact('booking', 'hotels', 'pageIndex'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookingRequest $request, Booking $booking)
    {
        $booking_checkin = $request->input('booking_checkin');
        $booking_checkout = $request->input('booking_checkout');
        $booking_checkins = new DateTime($booking_checkin);
        $booking_checkouts = new DateTime($booking_checkout);
        $intevel = $booking_checkouts->diff($booking_checkins);
        $hours = $intevel->d * 24 + $intevel->h;
        $totalMoney = $hours * $booking->getHotelPrice();
        $booking->booking_number_of_hour = $hours;
        $booking->booking_total_price = $totalMoney;

        $pageIndex = $request->input('pageIndex');
        $booking->update($request->all());
        return redirect()
            ->route('bookings.index', ['pageIndex' => $pageIndex])
            ->with('mes', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking, request $request)
    {
        $pageIndex = 1;
        if ($request->has('pageIndex')) {
            $pageIndex = $request->input('pageIndex');
        }
        $booking->delete();
        return redirect()
            ->route('bookings.index', ['pageIndex' => $pageIndex])
            ->with('mes', 'Xóa thành công!');
    }
}
