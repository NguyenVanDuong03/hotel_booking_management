@extends('layouts/app')

@section('content')
<h2 class="text-center text-uppercase text-decoration-underline text-success">rental details</h2>

<div class="container">
    <div class="row">
        <h3 class="text-center text-danger">rental</h3>
        <table class="table table-light table-striped align-middle">
            <thead>
                <tr>
                    <th class="col-6" scope="col">Properties</th>
                    <th class="col-6" scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>rentalid</td>
                    <td>{{$rental->rentalid}}</td>
                </tr>
                <tr>
                    <td>customerName</td>
                    <td>{{$rental->customerName}}</td>
                </tr>
                <tr>
                    <td>identification</td>
                    <td>{{$rental->identification}}</td>
                </tr>
                <tr>
                    <td>checkin</td>
                    <td>{{$rental->checkin}}</td>
                </tr>
                <tr>
                    <td>checkout</td>
                    <td>{{$rental->checkout}}</td>
                </tr>
                <tr>
                    <td>numberOfHour</td>
                    <td>{{$rental->numberOfHour}}</td>
                </tr>
                <tr>
                    <td>totalMoney</td>
                    <td>{{$rental->totalMoney}}</td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="row mt-5">
        <h3 class="text-center text-danger">room</h3>
        <table class="table table-light table-striped align-middle">
            <thead>
                <tr>
                    <th class="col-6" scope="col">Properties</th>
                    <th class="col-6" scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>roomid</td>
                    <td>{{$room->roomid}}</td>
                </tr>
                <tr>
                    <td>status</td>
                    <td>{{$room->status==1? 'Still empty': 'Chosen'}}</td>
                </tr>
                <tr>
                    <td>price</td>
                    <td>{{$room->price}}</td>
                </tr>



            </tbody>
        </table>
    </div>
    <p class="d-flex justify-content-end"><a href="{{route('rentals.index', ['pageIndex' => $pageIndex])}}" class=""><button class="btn btn-primary fw-bold">Back</button></a></p>
</div>
@endsection
