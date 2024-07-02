@extends('layouts.app')
@section('title', 'Sửa thông tin đặt phòng')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Sửa thông tin đặt phòng</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách đặt phòng</li>
                        <li class="breadcrumb-item active">Sửa thông tin đặt phòng</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="needs-validation" novalidate method="POST"
                            action="{{ route('bookings.update', ['booking' => $booking->booking_id, 'pageIndex' => $pageIndex]) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label>Tên phòng</label>
                                        <select class="form-control" data-toggle="select2" name="hotel_id"
                                            id="hotel-select">
                                            <optgroup label="Chọn phòng phù hợp">
                                                <option value="{{ $booking->hotel_id }}">{{ $booking->getHotelName() }}
                                                </option>
                                                @foreach ($hotels as $item)
                                                    <option value="{{ $item->hotel_id }}"
                                                        data-price="{{ $item->hotel_price }}">{{ $item->hotel_name }}
                                                    </option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="validationCustom02">Tên khách hàng</label>
                                        <input value="{{ $booking->booking_guest }}" required id="validationCustom02"
                                            name="booking_guest" type="text" class="form-control"
                                            placeholder="vd: Nguyễn Văn A">
                                    </div>
                                    @error('booking_guest')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="validationCustom03">Thời gian nhận phòng</label>
                                        <input value="{{ $booking->booking_checkin }}" required id="validationCustom03"
                                            name="booking_checkin" type="datetime-local" class="form-control"
                                            placeholder="">
                                    </div>
                                    @error('booking_checkin')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="validationCustom04">Thời gian trả phòng</label>
                                        <input value="{{ $booking->booking_checkout }}" required id="validationCustom04"
                                            name="booking_checkout" type="datetime-local" class="form-control"
                                            placeholder="">
                                    </div>
                                    @error('booking_checkout')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label>Giá thuê ($)</label>
                                        <input value="{{ $booking->getHotelPrice() }}" readonly id="hotel-price"
                                            type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end my-3">
                                <button type="submit"
                                    class="btn btn-primary waves-effect waves-light mx-3 px-4">Sửa</button>
                                <a href="{{ url('bookings?pageIndex' . $pageIndex) }}"
                                    class="btn btn-danger waves-effect waves-light">Quay lại</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElement = document.getElementById('hotel-select');
            const priceElement = document.getElementById('hotel-price');

            selectElement.addEventListener('change', function() {
                const selectedOption = selectElement.options[selectElement.selectedIndex];
                const price = selectedOption.getAttribute('data-price');
                priceElement.value = price + " $";
            });
        });
    </script>
@endsection
