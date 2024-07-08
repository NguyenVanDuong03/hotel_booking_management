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
                            {{ __('Đăng xuất') }}
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
