@extends('layouts/app')

@section('content')
<h2 class="text-center text-uppercase text-decoration-underline text-success">hotel details</h2>

<div class="container">
    <div class="row">
        <h3 class="text-center text-danger">hotel</h3>
        <table class="table table-light table-striped align-middle">
            <thead>
                <tr>
                    <th class="col-6" scope="col">Properties</th>
                    <th class="col-6" scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>hotel id</td>
                    <td>{{$hotel->hotel_id}}</td>
                </tr>
                <tr>
                    <td>hotel_name</td>
                    <td>{{$hotel->hotel_name}}</td>
                </tr>
                <tr>
                    <td>hotel_address</td>
                    <td>{{$hotel->hotel_address}}</td>
                </tr>
                <tr>
                    <td>hotel_description</td>
                    <td>{{$hotel->hotel_description}}</td>
                </tr>
                <tr>
                    <td>hotel_price</td>
                    <td>{{$hotel->hotel_price}}</td>
                </tr>

            </tbody>
        </table>
    </div>
    
    <p class="d-flex justify-content-end"><a href="{{route('hotels.index', ['pageIndex' => $pageIndex])}}" class=""><button class="btn btn-primary fw-bold">Back</button></a></p>
</div>
@endsection
