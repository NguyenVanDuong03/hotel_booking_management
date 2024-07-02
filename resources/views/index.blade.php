@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')

    <div class="row d-flex justify-content-center my-5">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">Mỗi tháng</span>
                        <h5 class="card-title mb-0">Phòng được đặt nhiều nhất</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h5 class="d-flex align-items-center mb-0">
                                {{ $mostBookedRoomName }}
                            </h5>
                        </div>
                        <div class="col-4 text-right">
                            <span class="text-muted">38.5% <i class="mdi mdi-arrow-up text-success"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 64%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">Mỗi tháng</span>
                        <h5 class="card-title mb-0">Số lượng phòng</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{ $hotelsCount }}
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span class="text-muted">12.5% <i class="mdi mdi-arrow-up text-success"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">Mỗi tháng</span>
                        <h5 class="card-title mb-0">Số lượng đơn đặt phòng</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{ $BookingsCount }}
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span class="text-muted">19.5% <i class="mdi mdi-arrow-up text-success"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 88%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">Mỗi tháng</span>
                        <h5 class="card-title mb-0">Phòng được đặt ít nhất</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h4 class="d-flex align-items-center mb-0">
                                {{ $leastBookedRoomName }}
                            </h4>
                        </div>
                        <div class="col-4 text-right">
                            <span class="text-muted">29.71% <i class="mdi mdi-arrow-down text-danger"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 15%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-8">
                            <h4 class="card-title">Phân tích doanh thu</h4>
                            <p class="card-subtitle mb-4">Từ tháng 1 năm 2015 đến nay</p>
                            <div id="morris-bar-example" class="morris-chart"></div>
                        </div>

                        <div class="col-lg-4">

                            <h4 class="card-title">Mức độ hài lòng của khách hàng</h4>
                            <p class="card-subtitle mb-4">Mức độ hài lòng của khách hàng gần đây</p>

                            <div class="text-center">
                                <input data-plugin="knob" data-width="165" data-height="165" data-linecap=round
                                    data-fgColor="#7a08c2" value="95" data-skin="tron" data-angleOffset="180"
                                    data-readOnly=true data-thickness=".15" />
                                <h5 class="text-muted mt-3">Tổng mức độ hài lòng của khách hàng (%)</h5>


                                <p class="text-muted w-75 mx-auto sp-line-2">Mức độ hài lòng của khách hàng đối với chất
                                    lượng dịch vụ và khách sạn của chúng ta rất cao. Tiếp tục phát huy nhé!</p>

                                <div class="row mt-3">
                                    <div class="col-6">
                                        <p class="text-muted font-15 mb-1 text-truncate">Doanh số tháng này</p>
                                        <h4><i class="fas fa-arrow-up text-success mr-1"></i>$7.8k</h4>

                                    </div>
                                    <div class="col-6">
                                        <p class="text-muted font-15 mb-1 text-truncate">Doanh số tháng trước</p>
                                        <h4><i class="fas fa-arrow-down text-danger mr-1"></i>$1.4k</h4>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
