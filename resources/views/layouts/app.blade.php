<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>My Booking</title> {{-- Sua--}}

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/icons.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}" type="text/css">


    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                @auth
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Home
                    </a>
                    <a class="navbar-brand" href="/bookings">
                        Booking
                    </a>
                    <a class="navbar-brand" href="/hotels">
                        Hotel
                    </a>
                @endauth
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}


<!-- Begin page -->
<div id="layout-wrapper">
    <div class="header-border"></div>
    <header id="page-topbar">
        <div class="navbar-header">

            <div class="d-flex align-items-left">
                <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                    id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div class="dropdown d-none d-sm-inline-block">
                    <button type="button" class="btn header-item waves-effect"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-plus"></i> Tạo mới
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu">

                        <!-- item-->
                        <a href="{{route('hotels.create')}}" class="dropdown-item notify-item">
                            Khách sạn
                        </a>

                        <!-- item-->
                        <a href="{{route('bookings.create')}}" class="dropdown-item notify-item">
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
                    <button type="button" class="btn header-item waves-effect"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="" src="{{asset('assets/images/flags/vn.jpg')}}" alt="Header Language" height="16">
                        <span class="d-none d-sm-inline-block ml-1">Tiếng Việt</span>
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('assets/images/flags/us.jpg')}}" alt="user-image" class="mr-1" height="12">
                            <span class="align-middle">Tiếng Anh</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('assets/images/flags/spain.jpg')}}" alt="user-image" class="mr-1" height="12">
                            <span class="align-middle">Tiếng Tây Ban Nha</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('assets/images/flags/germany.jpg')}}" alt="user-image" class="mr-1" height="12">
                            <span class="align-middle">Tiếng Đức</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('assets/images/flags/italy.jpg')}}" alt="user-image" class="mr-1" height="12">
                            <span class="align-middle">Tiếng Ý</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('assets/images/flags/russia.jpg')}}" alt="user-image" class="mr-1" height="12">
                            <span class="align-middle">Tiếng Nga</span>
                        </a>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect " style="width: 66px"
                        id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
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
                                    <img src="{{asset('assets/images/users/avatar-2.jpg')}}"
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
                                        <p class="font-size-12 mb-1">Doanh thu tháng mới nhất được được tổng hợp.
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
                            <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                <i class="mdi mdi-arrow-down-circle mr-1"></i> Xem thêm...
                            </a>
                        </div>
                    </div>
                </div>


                    @guest
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/avatar-2.jpg')}}"
                                alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1">Khách</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            @if (Route::has('login'))
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </div>
                    </div>

                    @else
                    <div class="dropdown d-inline-block ml-2">
                    <button type="button" class="btn header-item waves-effect"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/avatar-2.jpg')}}"
                            alt="Header Avatar">
                        <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            <span>Tin nhắn</span>
                            <span>
                                <span class="badge badge-pill badge-info">3</span>
                            </span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            <span>Trang cá nhân</span>
                            <span>
                                <span class="badge badge-pill badge-warning">1</span>
                            </span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            Cài đặt
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            <span>Khóa tài khoản</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
                        <a href="{{ url('/') }}" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span>Trang chủ</span></a>
                    </li>

                    <li>
                        <a href="/hotels" class=" waves-effect"><i
                            class="mdi mdi-format-list-bulleted-type"></i><span>Danh sách khách sạn</span>
                        </a>
                    </li>

                    <li>
                        <a href="/bookings" class=" waves-effect"><i
                            class="mdi mdi-table-merge-cells"></i><span>Danh sách đặt phòng</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                class="mdi mdi-diamond-stone"></i><span>Danh sách đồ ăn</span></a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-carousel.html">Carousel</a>
                            <li><a href="ui-embeds.html">Embeds</a>
                            <li><a href="ui-general.html">General</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-media-objects.html">Media Objects</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                            <li><a href="ui-tabs.html">Tabs</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-toasts.html">Toasts</a></li>
                            <li><a href="ui-tooltips-popovers.html">Tooltips & Popovers</a></li>
                            <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                            <li><a href="ui-spinners.html">Spinners</a></li>
                            <li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                class="mdi mdi-table-merge-cells"></i><span>Tables</span></a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-datatables.html">Data Tables</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                class="mdi mdi-poll"></i><span>Charts</span></a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="charts-morris.html">Morris</a></li>
                            <li><a href="charts-google.html">Google</a></li>
                            <li><a href="charts-chartjs.html">Chartjs</a></li>
                            <li><a href="charts-sparkline.html">Sparkline</a></li>
                            <li><a href="charts-knob.html">Jquery Knob</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="waves-effect"><i
                                class="mdi mdi-format-list-bulleted-type"></i><span
                                class="badge badge-pill badge-danger float-right">6</span><span>Forms</span></a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="forms-elements.html">Elements</a></li>
                            <li><a href="forms-plugins.html">Plugins</a></li>
                            <li><a href="forms-validation.html">Validation</a></li>
                            <li><a href="forms-mask.html">Masks</a></li>
                            <li><a href="forms-quilljs.html">Quilljs</a></li>
                            <li><a href="forms-uploads.html">File Uploads</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                class="mdi mdi-black-mesa"></i><span>Icons</span></a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                            <li><a href="icons-feather.html">Feather Icons</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">More</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                class="mdi mdi-format-page-break"></i><span>Pages</span></a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-starter.html">Starter Page</a></li>
                            <li><a href="pages-maintenance.html">Maintenance</a></li>
                            <li><a href="pages-faqs.html">FAQs</a></li>
                            <li><a href="pages-pricing.html">Pricing</a></li>
                            <li><a href="pages-login.html">Login</a></li>
                            <li><a href="pages-register.html">Register</a></li>
                            <li><a href="pages-recoverpw.html">Recover Password</a></li>
                            <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                            <li><a href="pages-404.html">Error 404</a></li>
                            <li><a href="pages-500.html">Error 500</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="calendar.html" class=" waves-effect"><i
                            class="mdi mdi-calendar-range-outline"></i><span>Calendar</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                class="mdi mdi-map-marker-radius"></i><span>Maps</span></a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="maps-google.html">Google Maps</a></li>
                            <li><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                class="mdi mdi-share-variant"></i><span>Multi Level</span></a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="javascript: void(0);">Level 1.1</a></li>
                            <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);">Level 2.1</a></li>
                                    <li><a href="javascript: void(0);">Level 2.2</a></li>
                                </ul>
                            </li>
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




    {{-- jQuery --}}
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/metismenu.min.js')}}"></script>
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <script src="{{asset('assets/js/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>

    <script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <script src="{{asset('assets/plugins/morris-js/morris.min.js')}}"></script>
    <script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>

    <script src="{{asset('assets/pages/knob-chart-demo.js')}}"></script>
    <script src="{{asset('assets/pages/dashboard-demo.js')}}"></script>

    @yield('script')
</body>
</html>
