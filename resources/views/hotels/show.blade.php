@extends('layouts/app')
@section('title', 'Xem phòng')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Thông tin phòng {{ $hotel->hotel_name }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active"><a
                                href="{{ route('hotels.index', ['pageIndex' => $pageIndex]) }}">Danh sách phòng</a></li>
                        <li class="breadcrumb-item active">Xem phòng</li>
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
                                <th scope="row">Mã phòng</th>
                                <td>{{ $hotel->hotel_id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tên phòng</th>
                                <td>{{ $hotel->hotel_name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Địa chỉ phòng</th>
                                <td>{{ $hotel->hotel_address }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Mô tả</th>
                                <td>{{ $hotel->hotel_description }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Giá thuê ($)</th>
                                <td>{{ $hotel->hotel_price }}</td>
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
            <p class="d-flex justify-content-end"><a href="{{ route('hotels.index', ['pageIndex' => $pageIndex]) }}"
                    class=""><button class="btn btn-primary fw-bold">Quay lại</button></a></p>
        </div>
    </div>
@endsection
