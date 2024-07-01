@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row p-3">
        <h4 class="text-uppercase text-decoration-underline text-center fw-bold text-success">Add new hotel</h4>
        <form class="bg-info border border-2 border-success rounded-3" method="POST" action="{{route('hotels.store')}}">
            @csrf

            {{-- <div class="input-group mt-2">
                <span class="input-group-text fw-bold bg-light">roomid</span>
                <select class="form-select" name='roomid'>
                    @foreach($rooms as $item)
                        <option value="{{$item->roomid}}">{{$item->roomid}}</option>
                    @endforeach
                </select>
            </div> --}}
            {{-- text --}}
            <div class="mt-3">
                <div class="input-group">
                    <span class="input-group-text fw-bold bg-light">Hotel Name</span>
                    <input value="{{old('hotel_name')}}" required  name = 'hotel_name' type="text" class="form-control" placeholder="">
                </div>
                @error('hotel_name')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="mt-3">
                <div class="input-group">
                    <span class="input-group-text fw-bold bg-light">hotel_address</span>
                    <input value="{{old('hotel_address')}}" required name = 'hotel_address' type="text" class="form-control" placeholder="">
                </div>
                @error('hotel_address')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="mt-3">
                <div class="form-floating">
                    <textarea name="hotel_description" class="form-control" placeholder="" id="floatingTextarea2" required style="height: 100px">{{old('hotel_description')}}</textarea>
                    <label for="floatingTextarea2">hotel_description </label>
                </div>
                @error('hotel_description')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            {{-- <div class="mt-3">
                <div class="input-group">
                    <span class="input-group-text fw-bold bg-light">checkin</span>
                    <input value="{{old('checkin')}}"  required name = 'checkin' type="datetime-local" class="form-control" placeholder="">
                </div>

                @error('checkin')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div> --}}

            <div class="mt-3">
                <div class="input-group">
                    <span class="input-group-text fw-bold bg-light">hotel_price</span>
                    <input value="{{old('hotel_price')}}" required name = 'hotel_price' type="number" class="form-control" placeholder="">
                </div>
                @error('hotel_price')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>


            <div class="d-flex justify-content-end my-3">
                <button type="submit" class="btn btn-primary ">Add</button>
                <a href="{{route('hotels.index')}}" class="btn btn-danger ms-2">Back</a>
            </div>

        </form>
    </div>
   </div>
@endsection
