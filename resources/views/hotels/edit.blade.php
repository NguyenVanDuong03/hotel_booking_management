@extends('layouts.app')
@section('title', 'Sửa thông tin phòng')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Sửa thông tin phòng</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active"><a href="{{ url('hotels?pageIndex' . $pageIndex) }}">Danh sách
                                phòng</a></li>
                        <li class="breadcrumb-item active">Sửa thông tin phòng</li>
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
                            action="{{ route('hotels.update', ['hotel' => $hotel->hotel_id, 'pageIndex' => $pageIndex]) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="validationCustom01">Tên phòng</label>
                                        <input value="{{ $hotel->hotel_name }}" required id="validationCustom01"
                                            name = 'hotel_name' type="text" class="form-control"
                                            placeholder="vd: Phòng 1">
                                    </div>
                                    @error('hotel_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="validationCustom02">Địa chỉ phòng</label>
                                        <input value="{{ $hotel->hotel_address }}" required id="validationCustom02"
                                            name = 'hotel_address' type="text" class="form-control"
                                            placeholder="vd: 175 Tây Sơn">
                                    </div>
                                    @error('hotel_address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Mô tả</label>
                                        <textarea name="hotel_description" class="form-control" placeholder="vd: Sang trọng" id="exampleFormControlTextarea1"
                                            required rows="3">{{ $hotel->hotel_description }}</textarea>
                                    </div>
                                    @error('hotel_description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="validationCustom03">Giá thuê ($)</label>
                                        <input value="{{ $hotel->hotel_price }}" required id="validationCustom03"
                                            name = 'hotel_price' type="number" class="form-control" placeholder="vd: 100"
                                            min="1">
                                    </div>
                                    @error('hotel_price')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-end my-3">
                                <button type="submit"
                                    class="btn btn-primary waves-effect waves-light mx-3 px-4">Sửa</button>
                                <a href="{{ url('hotels?pageIndex' . $pageIndex) }}"
                                    class="btn btn-danger waves-effect waves-light">Quay
                                    lại</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
