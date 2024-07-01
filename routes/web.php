<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;



Auth::routes();

Route::middleware(['auth'])->group(function () {
	Route::get('/', [HomeController::class, 'index'])->name('home');
	Route::get('/home', [HomeController::class, 'index'])->name('home');
	Route::resource('/bookings', BookingController::class);
	Route::resource('/hotels', HotelController::class);
});
