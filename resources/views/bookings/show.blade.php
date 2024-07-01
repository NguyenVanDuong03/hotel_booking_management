@extends('layouts/app')

@section('content')
<h2 class="text-center text-uppercase text-decoration-underline text-success">booking details</h2>

<div class="container">
    <div class="row">
        <table class="table table-light table-striped align-middle">
            <thead>
                <tr>
                    <th class="col-6" scope="col">Properties</th>
                    <th class="col-6" scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>booking id</td>
                    <td>{{$booking->booking_id}}</td>
                </tr>
                <tr>
                    <td>hotel name</td>
                    <td>{{$booking->getHotelName()}}</td>
                </tr>
                <tr>
                    <td>booking_guest</td>
                    <td>{{$booking->booking_guest}}</td>
                </tr>
                <tr>
                    <td>booking_checkout</td>
                    <td>{{$booking->booking_checkout}}</td>
                </tr>
                <tr>
                    <td>booking_checkout</td>
                    <td>{{$booking->booking_checkout}}</td>
                </tr>
                <tr>
                    <td>booking number of hour</td>
                    <td>{{$booking->booking_number_of_hour}}</td>
                </tr>
                <tr>
                    <td>booking_total_price</td>
                    <td>{{$booking->booking_total_price}}</td>
                </tr>

            </tbody>
        </table>
    </div>

    <p class="d-flex justify-content-end"><a href="{{route('bookings.index', ['pageIndex' => $pageIndex])}}" class=""><button class="btn btn-primary fw-bold">Back</button></a></p>
</div>
@endsection
