@extends('layouts.app')

@section('title', 'Danh sách phòng')

@section('content')
    {{-- title --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Danh sách phòng</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách phòng</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    {{-- table --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên phòng</th>
                            <th>Địa chỉ</th>
                            <th>Mô tả</th>
                            <th>Giá phòng ($)</th>
                            <th class="text-center" colspan="3">Chức năng</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($hotels as $item)
                            <tr>
                                <th scope="row">{{ $item->hotel_id }}</th>
                                <td>{{ $item->hotel_name }}</td>
                                <td>{{ $item->hotel_address }}</td>
                                <td>{{ $item->hotel_description }}</td>
                                <td>{{ $item->hotel_price }}</td>

                                <td><a class="btn btn-success"
                                        href="{{ route('hotels.show', ['hotel' => $item->hotel_id, 'pageIndex' => $pageIndex]) }}"><i
                                            class="mdi mdi-eye"></i></a></td>
                                <td><a class="btn btn-warning"
                                        href="{{ route('hotels.edit', ['hotel' => $item->hotel_id, 'pageIndex' => $pageIndex]) }}"><i
                                            class="mdi mdi-pen"></i></a></td>
                                <td><button class="btn btn-danger" data-bs-toggle='modal'
                                        data-bs-target='#A{{ $item->hotel_id }}'><i class="mdi mdi-trash-can"></i></button>
                                </td>


                                <!-- Modal -->
                                <div class='modal fade' id='A{{ $item->hotel_id }}' tabindex='-1'
                                    aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h1 class='modal-title fs-5 text-danger' id='exampleModalLabel'>Xác nhận xóa
                                                </h1>
                                                <button type='button' class='btn-close' data-bs-dismiss='modal'
                                                    style="border: none" aria-label='Close'><i
                                                        class="mdi mdi-close"></i></button>
                                            </div>
                                            <div class='modal-body'>
                                                Bạn có chắc muốn xóa phòng này?
                                            </div>
                                            <div class='modal-footer'>
                                                <form
                                                    action="{{ route('hotels.destroy', ['pageIndex' => $pageIndex, 'hotel' => $item->hotel_id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class='btn btn-primary px-4'>Có</button>
                                                </form>
                                                <button type='button' class='btn btn-danger'
                                                    data-bs-dismiss='modal'>Không</button>
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
    </div>

    <!-- paginating  -->
    <div class="d-flex justify-content-center align-items-center my-2">
        <a class="btn btn-success mx-1" href="{{ route('hotels.index', ['pageIndex' => $pageIndex - 1]) }}">
            << /a>
                @for ($i = 1; $i <= $numberOfPage; $i++)
                    @if ($pageIndex == $i)
                        <a class="btn btn-primary mx-1"
                            href="{{ route('hotels.index', ['pageIndex' => $i]) }}">{{ $i }}</a>
                    @else
                        <a class="btn btn-success mx-1"
                            href="{{ route('hotels.index', ['pageIndex' => $i]) }}">{{ $i }}</a>
                    @endif
                @endfor
                <a class="btn btn-success mx-1" href="{{ route('hotels.index', ['pageIndex' => $pageIndex + 1]) }}">></a>
    </div>


    <!-- modal inform -->
    <div id="myDialog" style="display: none;" class="px-5 py-3 rounded-3 text-center">
        <h4 class="text-primary fw-bold fs-4 ">Thông báo</h4>
        <p class="text-success">{{ session('mes') }}</p>
        <button id="confirmButton" class="float-end rounded-2 px-3">OK</button>
    </div>
    <style>
        #myDialog {
            position: fixed;
            width: 420px;
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
    @if (session('mes'))
        <script>
            var dialog = document.getElementById("myDialog");
            var confirmButton = document.getElementById("confirmButton");

            dialog.style.display = "block";
            confirmButton.addEventListener("click", function() {
                dialog.style.display = "none";
            });
        </script>
    @endif
@endsection
