@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row p-3">
        <h4 class="text-uppercase text-decoration-underline text-center fw-bold text-success">Add new booking</h4>
        <form class="bg-info border border-2 border-success rounded-3" method="POST" action="{{route('bookings.store')}}">
            @csrf

            <div class="input-group mt-2">
                <span class="input-group-text fw-bold bg-light">Hotel Name</span>
                <select class="form-select" name='hotel_id'>
                    @foreach($hotels as $item)
                        <option value="{{$item->hotel_id}}">{{$item->hotel_name}}</option>
                    @endforeach
                </select>
            </div>
            {{-- text --}}
            <div class="mt-3">
                <div class="input-group">
                    <span class="input-group-text fw-bold bg-light">Booking Guest</span>
                    <input value="{{old('booking_guest')}}"  name = 'booking_guest' type="text" class="form-control" placeholder="">
                </div>
                @error('booking_guest')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            {{-- <div class="mt-3">
                <div class="form-floating">
                    <textarea name="note" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px">{{old('note')}}</textarea>
                    <label for="floatingTextarea2">note </label>
                </div>
                @error('note')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div> --}}

            <div class="mt-3">
                <div class="input-group">
                    <span class="input-group-text fw-bold bg-light">booking_checkin</span>
                    <input value="{{old('booking_checkin')}}"  required name = 'booking_checkin' type="datetime-local" class="form-control" placeholder="">
                </div>

                @error('booking_checkin')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>


            <div class="d-flex justify-content-end my-3">
                <button type="submit" class="btn btn-primary ">Add</button>
                <a href="{{route('bookings.index')}}" class="btn btn-danger ms-2">Back</a>
            </div>

        </form>
    </div>
   </div>
@endsection
