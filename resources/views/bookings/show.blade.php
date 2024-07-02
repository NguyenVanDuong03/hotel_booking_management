@extends('layouts/app')
@section('title', 'Xem đặt phòng')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Thông tin đặt phòng của khách hàng {{$booking->booking_guest}}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('bookings.index', ['pageIndex' => $pageIndex])}}">Danh sách đặt phòng</a></li>
                    <li class="breadcrumb-item active">Xem đặt phòng</li>
                </ol>
            </div>

        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-xl-2"></div>
    <div class="col-xl-8">
        <div class="card">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Mã đặt phòng</th>
                                <td>{{$booking->booking_id}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tên khách sạn</th>
                                <td>{{$booking->getHotelName()}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tên khách hàng</th>
                                <td>{{$booking->booking_guest}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Ngày đặt phòng</th>
                                <td>{{$booking->booking_checkout}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Ngày trả phòng</th>
                                <td>{{$booking->booking_checkout}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Số giờ sử dụng</th>
                                <td>{{$booking->booking_number_of_hour}}h</td>
                            </tr>
                            <tr>
                                <th scope="row">Tổng tiền</th>
                                <td>{{$booking->booking_total_price}} $</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
        <!-- end card -->

    </div>
    <!-- end col -->
    <div class="col-xl-2"></div>
    <div class="col-xl-10">
        <p class="d-flex justify-content-end"><a href="{{route('bookings.index', ['pageIndex' => $pageIndex])}}" class=""><button class="btn btn-primary fw-bold">Quay lại</button></a></p>
    </div>
</div>
@endsection
