<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>@yield('title')</title>

    {{-- plugins css --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/select.bootstrap4.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}" type="text/css">

    {{-- App css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" type="text/css">

</head>

<body>
    <div id="app">
        <div id="layout-wrapper">
            <div class="header-border"></div>
            <header id="page-topbar">
                <div class="navbar-header">

                    @guest
                        <div class="d-flex align-items-left">
                            <button type="button"
                                class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                                id="vertical-menu-btn">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </div>
                    @endguest

                    @auth
                        <div class="d-flex align-items-left">
                            <button type="button"
                                class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                                id="vertical-menu-btn">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>

                            <div class="dropdown d-none d-sm-inline-block">
                                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-plus"></i> Tạo mới
                                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                                </button>
                                <div class="dropdown-menu">

                                    <!-- item-->
                                    <a href="{{ route('hotels.create') }}" class="dropdown-item notify-item">
                                        Thêm phòng
                                    </a>

                                    <!-- item-->
                                    <a href="{{ route('bookings.create') }}" class="dropdown-item notify-item">
                                        Đặt phòng
                                    </a>

                                    <!-- item-->
                                    <a href="#" class="dropdown-item notify-item">
                                        Đồ ăn
                                    </a>

                                    <!-- item-->
                                    <a href="#" class="dropdown-item notify-item">
                                        Trò chơi
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endauth

                    <div class="d-flex align-items-center">

                        <div class="dropdown d-none d-sm-inline-block ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Tìm kiếm ..."
                                                aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img class="" src="{{ asset('assets/images/flags/vn.jpg') }}"
                                    alt="Header Language" height="16">
                                <span class="d-none d-sm-inline-block ml-1">Tiếng Việt</span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">

                                <!-- item-->
                                <a href="#;" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/us.jpg') }}" alt="user-image"
                                        class="mr-1" height="12">
                                    <span class="align-middle">Tiếng Anh</span>
                                </a>

                                <!-- item-->
                                <a href="#;" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/spain.jpg') }}" alt="user-image"
                                        class="mr-1" height="12">
                                    <span class="align-middle">Tiếng Tây Ban Nha</span>
                                </a>

                                <!-- item-->
                                <a href="#;" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/germany.jpg') }}" alt="user-image"
                                        class="mr-1" height="12">
                                    <span class="align-middle">Tiếng Đức</span>
                                </a>

                                <!-- item-->
                                <a href="#;" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/italy.jpg') }}" alt="user-image"
                                        class="mr-1" height="12">
                                    <span class="align-middle">Tiếng Ý</span>
                                </a>

                                <!-- item-->
                                <a href="#;" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/russia.jpg') }}" alt="user-image"
                                        class="mr-1" height="12">
                                    <span class="align-middle">Tiếng Nga</span>
                                </a>
                            </div>
                        </div>

                        @guest
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon waves-effect "
                                    style="width: 66px" id="page-header-notifications-dropdown" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-bell"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"
                                    aria-labelledby="page-header-notifications-dropdown">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0"> Thông báo </h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="small"> Xem tất cả</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 border-top">
                                        <a class="btn btn-sm btn-light btn-block text-center" href="#">
                                            <i class="mdi mdi-arrow-down-circle mr-1"></i> Đăng nhập để xem thêm...
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endguest

                        @auth
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon waves-effect "
                                    style="width: 66px" id="page-header-notifications-dropdown" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge badge-danger">3</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"
                                    aria-labelledby="page-header-notifications-dropdown">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0"> Thông báo </h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="small"> Xem tất cả</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar style="max-height: 230px;">
                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                    class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Khách hàng mới đặt phòng</h6>
                                                    <p class="font-size-12 mb-1">Có người mới đặt phòng #12.</p>
                                                    <p class="font-size-12 mb-0 text-muted"><i
                                                            class="mdi mdi-clock-outline"></i> 2 phút trước</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <div class="avatar-xs mr-3">
                                                    <span class="avatar-title bg-success rounded-circle">
                                                        <i class="mdi mdi-cloud-download-outline"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Doanh thu tháng mới nhất !</h6>
                                                    <p class="font-size-12 mb-1">Doanh thu tháng mới nhất được được tổng
                                                        hợp.
                                                        Vui lòng tải tại đây.</p>
                                                    <p class="font-size-12 mb-0 text-muted"><i
                                                            class="mdi mdi-clock-outline"></i> 4 giờ trước</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <img src="assets/images/users/avatar-3.jpg"
                                                    class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Khách hàng mới đặt phòng</h6>
                                                    <p class="font-size-12 mb-1">Có người mới đặt phòng #15.</p>
                                                    <p class="font-size-12 mb-0 text-muted"><i
                                                            class="mdi mdi-clock-outline"></i> 1 ngày trước</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-2 border-top">
                                        <a class="btn btn-sm btn-light btn-block text-center" href="#">
                                            <i class="mdi mdi-arrow-down-circle mr-1"></i> Xem thêm...
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endauth

                        @guest
                            <div class="dropdown d-inline-block ml-2">
                                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="Header Avatar">
                                    <span class="d-none d-sm-inline-block ml-1">Khách</span>
                                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    @if (Route::has('login'))
                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                            href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                    @endif

                                    @if (Route::has('register'))
                                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                                            href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                                    @endif
                                </div>
                            </div>
                        @else
                            <div class="dropdown d-inline-block ml-2">
                                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="Header Avatar">
                                    <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                        href="#">
                                        <span>Tin nhắn</span>
                                        <span>
                                            <span class="badge badge-pill badge-info">3</span>
                                        </span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                        href="#">
                                        <span>Trang cá nhân</span>
                                        <span>
                                            <span class="badge badge-pill badge-warning">1</span>
                                        </span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                        href="#">
                                        Cài đặt
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                        href="#">
                                        <span>Khóa tài khoản</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <div class="navbar-brand-box">
                        <a href="{{ url('/') }}" class="logo">
                            <i class="mdi mdi-album"></i>
                            <span>
                                nvd
                            </span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Danh mục</li>

                            <li>
                                <a href="{{ url('/') }}" class="waves-effect"><i
                                        class="mdi mdi-home-analytics"></i><span>Trang chủ</span></a>
                            </li>

                            <li>
                                <a href="/hotels" class=" waves-effect"><i
                                        class="mdi mdi-playlist-play"></i><span>Danh sách phòng</span>
                                </a>
                            </li>

                            <li>
                                <a href="/bookings" class=" waves-effect"><i
                                        class="mdi mdi-table-merge-cells"></i><span>Danh sách đặt phòng</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="has-arrow waves-effect"><i class="mdi mdi-food"></i><span>Đồ
                                        ăn</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#">Phở</a></li>
                                    <li><a href="#">Bún chả</a></li>
                                    <li><a href="#">Xôi</a>
                                    <li><a href="#">Bánh xèo</a>
                                    <li><a href="#">Gỏi cuốn</a></li>
                                    <li><a href="#">Bún bò nam bộ</a></li>
                                    <li><a href="#">Cao lầu</a></li>
                                    <li><a href="#">Bánh mì</a></li>
                                    <li><a href="#">Bột chiên</a></li>
                                    <li><a href="#">Cà phê trứng</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="has-arrow waves-effect"><i
                                        class="mdi mdi-gamepad"></i><span>Trò chơi</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#">Đua xe</a></li>
                                    <li><a href="#">Cầu lông</a></li>
                                    <li><a href="#">Bóng đá</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Danh mục khác</li>

                            <li>
                                <a href="#" class=" waves-effect"><i
                                        class="mdi mdi-information"></i><span>Thông tin liên hệ</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class=" waves-effect"><i
                                        class="mdi mdi-medical-bag"></i><span>Chính sách điều khoản</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="has-arrow waves-effect"><i
                                        class="mdi mdi-notebook"></i><span>Quy định</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#">Quy định khách sạn</a></li>
                                    <li><a href="#">Quy định khách hàng</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="has-arrow waves-effect"><i
                                        class="mdi mdi-share-variant"></i><span>Theo dõi chúng tôi</span></a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="https://www.facebook.com/dvn270803"><i
                                                class="mdi mdi-facebook"></i><span>Facebook</span></a></li>
                                    <li><a href="https://www.instagram.com/nvd._.03/"><i
                                                class="mdi mdi-instagram"></i><span>Instagram</span></a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>

            <main class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2024 © Quản lý đặt phòng khách sạn.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Thiết kế và xây dựng bởi Nguyễn Văn Dương
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </main>
        </div>
    </div>

    <div class="menu-overlay"></div>


    {{-- jQuery --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle2.min.js') }}"></script>
    <script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>

    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/morris-js/morris.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script src="{{ asset('assets/pages/knob-chart-demo.js') }}"></script>
    <script src="{{ asset('assets/pages/dashboard-demo.js') }}"></script>
    <script src="{{ asset('assets/pages/sweet-alert-demo.js') }}"></script>
    <script src="{{ asset('assets/pages/validation-demo.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.select.min.js') }}"></script>

    @yield('script')
</body>

</html>
