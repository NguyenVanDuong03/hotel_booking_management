@extends('layouts.app')

@section('title', 'List')

@section('content')
<h2 class="text-center text text-success my-4 text-uppercase text-decoration-underline">Manager booking</h2>


    <div class="container">

        <a href="{{route('bookings.create')}}">
            <button class="btn btn-success mb-3"><i class="fa-regular fa-square-plus"></i> Add booking</button>
        </a>
        <div class="row">

            <table class="table table-light table-hover align-middle text-center">
                <thead class="table-primary text-center">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Guest Name</th>
                    <th scope="col">Checkin</th>
                    <th scope="col">Checkout</th>
                    <th scope="col">Total Money</th>

                    <th scope="col" class="text-center" colspan="3">Option</th>

                    </tr>
                </thead>
                <tbody>
                        @foreach($bookings as $item)
                            <tr>
                                <th scope="row">{{$item->booking_id}}</th>
                                <td>{{$item->getHotelName()}}</td>
                                <td>{{$item->booking_guest}}</td>
                                <td>{{$item->booking_checkin}}</td>
                                <td>{{$item->booking_checkout}}</td>
                                <td>{{$item->booking_total_price}}</td>

                                <td ><a class="btn btn-success" href="{{route('bookings.show', ['booking' => $item->booking_id, 'pageIndex' => $pageIndex])}}"><i class="fa-regular fa-eye"></i></a></td>
                                <td ><a class="btn btn-danger" href="{{route('bookings.edit', ['booking' => $item->booking_id, 'pageIndex' => $pageIndex])}}"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                <td ><button class="btn btn-warning" data-bs-toggle='modal'   data-bs-target='#A{{$item->booking_id}}'><i class="fa-regular fa-trash-can"></i></button></td>


                                <!-- Modal -->
                                <div class='modal fade' id='A{{$item->booking_id}}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h1 class='modal-title fs-5 text-danger' id='exampleModalLabel'>Confirm deletion</h1>
                                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                            </div>
                                            <div class='modal-body'>
                                                Are you sure you want to delete this information?
                                            </div>
                                            <div class='modal-footer'>
                                                <form action="{{route('bookings.destroy', ['pageIndex' => $pageIndex, 'booking' => $item->booking_id])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"  class='btn btn-primary'>Agree</button>
                                                </form>
                                                <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Back</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- paginating  -->

    <div class="d-flex justify-content-center align-items-center my-2">
         <a class="btn btn-success" href="{{route('bookings.index', ['pageIndex' => $pageIndex - 1])}}"><</a>
         @for($i = 1; $i <= $numberOfPage; $i++)
            @if($pageIndex == $i)
                <a class="btn btn-primary ms-2" href="{{route('bookings.index', ['pageIndex' => $i])}}">{{$i}}</a>
            @else
                <a class="btn btn-success ms-2" href="{{route('bookings.index', ['pageIndex' => $i])}}">{{$i}}</a>
            @endif
         @endfor
         <a class="btn btn-success ms-2" href="{{route('bookings.index', ['pageIndex' => $pageIndex + 1])}}">></a>
    </div>


    <!-- modal inform -->


    <div id="myDialog" style="display: none;" class="px-5 py-3 rounded-3">
        <h4 class="text-primary fw-bold fs-4">Notification</h4>
        <p class="text-success">{{ session('mes') }}</p>
        <button id="confirmButton" class="float-end rounded-2">Agree</button>
    </div>
    <style>
        #myDialog {
            position: fixed;
            width: 500px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #ffffff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        #confirmButton {
        padding: 10px 20px;
        background: #007bff;
        color: #ffffff;
        border: none;
        cursor: pointer;
        }
    </style>

@endsection

@section('script')
@if(session('mes'))
<script>
    var dialog = document.getElementById("myDialog");
    var confirmButton = document.getElementById("confirmButton");

    dialog.style.display = "block";
    confirmButton.addEventListener("click", function() {
        dialog.style.display = "none";
    });
    // alert("{{ session('Success') }}")
</script>
@endif
@endsection
