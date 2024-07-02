<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelRequest;
use App\Models\Hotel;
use App\Models\Booking;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $numberOfRecord = Hotel::count();
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
        $hotels = Hotel::orderByDesc('hotel_id')
            ->skip(($pageIndex - 1) * $perPage)
            ->take($perPage)
            ->get();
        // dd($arr);
        return view('hotels.index', compact('hotels', 'numberOfPage', 'pageIndex'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bookings = Booking::all();
        return view('hotels.create', compact('bookings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HotelRequest $request)
    {
        Hotel::create($request->all());
        return redirect()->route('hotels.index')->with('mes', 'Thêm phòng thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel, Request $request)
    {
        $pageIndex = 1;
        if ($request->has('pageIndex')) {
            $pageIndex = $request->input('pageIndex');
        }
        return view('hotels.show', compact('hotel', 'pageIndex'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel, Request $request)
    {
        $pageIndex = 1;
        if ($request->has('pageIndex')) {
            $pageIndex = $request->input('pageIndex');
        }
        return view('hotels.edit', compact('hotel', 'pageIndex'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HotelRequest $request, Hotel $hotel)
    {
        $pageIndex = $request->input('pageIndex');
        $hotel->update($request->all());
        return redirect()
            ->route('hotels.index', ['pageIndex' => $pageIndex])
            ->with('mes', 'Cập nhật phòng thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel, Request $request)
    {
        $pageIndex = 1;
        if ($request->has('pageIndex')) {
            $pageIndex = $request->input('pageIndex');
        }
        $hotel->delete();
        return redirect()
            ->route('hotels.index', ['pageIndex' => $pageIndex])
            ->with('mes', 'Xóa phòng thành công!');
    }
}
