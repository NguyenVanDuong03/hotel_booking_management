@extends('layouts.app')
@section('title', 'Sửa đặt phòng')
@section('content')
<div class="container">
    <div class="row p-3">
        <h4 class="text-uppercase text-decoration-underline text-center fw-bold text-success">Edit booking</h4>
        <form class="bg-info border border-2 border-success rounded-3" method="POST" action="{{route('bookings.update', ['booking' => $booking->booking_id, 'pageIndex' => $pageIndex])}}">
            @csrf
            @method('PUT')


            <div class="input-group mt-2">
                <span class="input-group-text fw-bold bg-light">ID Hotel</span>
                <select class="form-select" name='hotel_id'>
                    <option value="{{$booking->hotel_id}}">{{$booking->getHotelName()}}</option>
                    @foreach($hotels as $item)
                        <option value="{{$item->hotel_id}}">{{$item->hotel_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <div class = 'input-group'>
                    <span class="input-group-text fw-bold bg-light">booking guest</span>
                    <input value="{{$booking->booking_guest}}"  required name = 'booking_guest' type="text" class="form-control" placeholder="">
                </div>
                @error('booking_guest')
                <div class="text-danger fw-bold">{{$message}}</div>
                @enderror
            </div>
            {{-- text --}}
            {{-- <div class="mt-3">
                <div class = 'input-group'>
                    <span class="input-group-text fw-bold bg-light">phone</span>
                    <input value="{{$booking->phone}}"  required name = 'phone' type="text" class="form-control" placeholder="">
                </div>
                @error('phone')
                <div class="text-danger fw-bold">{{$message}}</div>
                @enderror
            </div> --}}


            <div class="mt-3">
                <div class="input-group">
                    <span class="input-group-text fw-bold bg-light">booking checkin</span>
                    <input value="{{$booking->booking_checkin}}"  required name = 'booking_checkin' type="datetime-local" class="form-control" placeholder="">
                </div>
                @error('booking_checkin')
                <div class="text-danger fw-bold">{{$message}}</div>
                @enderror
            </div>
            <div class="mt-3">
                <div class="input-group">
                    <span class="input-group-text fw-bold bg-light">booking checkout</span>
                    <input value="{{$booking->booking_checkout}}"  required name = 'booking_checkout' type="datetime-local" class="form-control" placeholder="">
                </div>
                @error('booking_checkout')
                <div class="text-danger fw-bold">{{$message}}</div>
                @enderror
            </div>

            {{-- textarea --}}
            {{-- <div class="mt-3">
                <div class="form-floating">
                    <textarea name="note" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px">{{$booking->note}}</textarea>
                    <label for="floatingTextarea2">note </label>
                </div>
                @error('note')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div> --}}

            <div class="d-flex justify-content-end my-3">
                <button type="submit" class="btn btn-primary ">Update</button>
                <a href="{{url('bookings?pageIndex'.$pageIndex)}}" class="btn btn-danger ms-2">Back</a>
            </div>

        </form>
    </div>
   </div>
@endsection
