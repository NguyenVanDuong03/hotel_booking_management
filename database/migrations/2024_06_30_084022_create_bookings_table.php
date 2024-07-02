<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->unsignedInteger('hotel_id')->nullable();
            $table->string('booking_guest');
            $table->dateTime('booking_checkin');
            $table->dateTime('booking_checkout')->nullable();
            $table->integer('booking_number_of_hour')->nullable();
            $table->decimal('booking_total_price')->nullable();
            $table->foreign('hotel_id')->references('hotel_id')->on('hotels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
