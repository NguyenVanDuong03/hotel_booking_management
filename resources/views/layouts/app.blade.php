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

            @include('layouts.header')

            @include('layouts.leftSideBar')

            <main class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>

                @include('layouts.footer')
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
