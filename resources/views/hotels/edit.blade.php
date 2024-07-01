@extends('layouts.app')
@section('title', 'Edit Information')
@section('content')
<div class="container">
    <div class="row p-3">
        <h4 class="text-uppercase text-decoration-underline text-center fw-bold text-success">Edit hotel</h4>
        <form class="bg-info border border-2 border-success rounded-3" method="POST" action="{{route('hotels.update', ['hotel' => $hotel->hotel_id, 'pageIndex' => $pageIndex])}}">
            @csrf
            @method('PUT')


            {{-- <div class="input-group mt-2">
                <span class="input-group-text fw-bold bg-light">roomid</span>
                <select class="form-select" name='roomid'>
                    <option value="{{$hotel->roomid}}">{{$hotel->roomid}}</option>
                    @foreach($rooms as $item)
                        <option value="{{$item->roomid}}">{{$item->roomid}}</option>
                    @endforeach
                </select>
            </div> --}}
            <div class="mt-3">
                <div class = 'input-group'>
                    <span class="input-group-text fw-bold bg-light">hotel_name</span>
                    <input value="{{$hotel->hotel_name}}"  required name = 'hotel_name' type="text" class="form-control" placeholder="">
                </div>
                @error('hotel_name')
                <div class="text-danger fw-bold">{{$message}}</div>
                @enderror
            </div>
            <div class="mt-3">
                <div class = 'input-group'>
                    <span class="input-group-text fw-bold bg-light">hotel_address</span>
                    <input value="{{$hotel->hotel_address}}"  required name = 'hotel_address' type="text" class="form-control" placeholder="">
                </div>
                @error('hotel_address')
                <div class="text-danger fw-bold">{{$message}}</div>
                @enderror
            </div>
            {{-- text --}}
            {{-- <div class="mt-3">
                <div class = 'input-group'>
                    <span class="input-group-text fw-bold bg-light">phone</span>
                    <input value="{{$hotel->phone}}"  required name = 'phone' type="text" class="form-control" placeholder="">
                </div>
                @error('phone')
                <div class="text-danger fw-bold">{{$message}}</div>
                @enderror
            </div> --}}

{{--
            <div class="mt-3">
                <div class="input-group">
                    <span class="input-group-text fw-bold bg-light">checkin</span>
                    <input value="{{$hotel->checkin}}"  required name = 'checkin' type="datetime-local" class="form-control" placeholder="">
                </div>
                @error('checkin')
                <div class="text-danger fw-bold">{{$message}}</div>
                @enderror
            </div>
            <div class="mt-3">
                <div class="input-group">
                    <span class="input-group-text fw-bold bg-light">checkout</span>
                    <input value="{{$hotel->checkout}}"  required name = 'checkout' type="datetime-local" class="form-control" placeholder="">
                </div>
                @error('checkout')
                <div class="text-danger fw-bold">{{$message}}</div>
                @enderror
            </div> --}}

            {{-- textarea --}}
            <div class="mt-3">
                <div class="form-floating">
                    <textarea name="hotel_description" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px">{{$hotel->hotel_description}}</textarea>
                    <label for="floatingTextarea2">hotel_description </label>
                </div>
                @error('hotel_description')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="mt-3">
                <div class = 'input-group'>
                    <span class="input-group-text fw-bold bg-light">hotel_price</span>
                    <input value="{{$hotel->hotel_price}}"  required name = 'hotel_price' type="number" class="form-control" placeholder="">
                </div>
                @error('hotel_price')
                <div class="text-danger fw-bold">{{$message}}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-end my-3">
                <button type="submit" class="btn btn-primary ">Update</button>
                <a href="{{url('hotels?pageIndex'.$pageIndex)}}" class="btn btn-danger ms-2">Back</a>
            </div>

        </form>
    </div>
   </div>
@endsection
