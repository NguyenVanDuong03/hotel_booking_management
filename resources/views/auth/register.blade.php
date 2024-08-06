@extends('layouts.app')
@section('title', 'Đăng ký')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center">
                    <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-register rounded-left"></div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center mb-5">
                                        <a href="index.html" class="text-dark font-size-22 font-family-secondary">
                                            <i class="mdi mdi-album"></i> <b>NVD</b>
                                        </a>
                                    </div>
                                    <h1 class="h5 mb-1">Tạo tài khoản mới!</h1>
                                    <p class="text-muted mb-4">Bạn chưa có tài khoản? Tạo tài khoản của riêng bạn, chỉ mất
                                        chưa đầy một phút</p>
                                    <form class="user" method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group">
                                            <input id="name" type="text"
                                                class="form-control form-control-user @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') }}" required autocomplete="name"
                                                autofocus placeholder="Họ và tên">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="email" type="email"
                                                class="form-control form-control-user @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input id="password" type="password"
                                                    class="form-control form-control-user @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password"
                                                    placeholder="Mật khẩu">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6">
                                                <input id="password-confirm" type="password"
                                                    class="form-control form-control-user" name="password_confirmation"
                                                    required autocomplete="new-password" placeholder="Xác nhận mật khẩu">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block waves-effect waves-light">
                                            {{ __('Đăng ký tài khoản') }}
                                        </button>

                                        <div class="text-center mt-4">
                                            <h5 class="text-muted font-size-16">Đăng nhập bằng cách khác</h5>

                                            <ul class="list-inline mt-3 mb-0">
                                                <li class="list-inline-item">
                                                    <a href="https://www.facebook.com/nvdtml03"
                                                        class="social-list-item border-primary text-primary"><i
                                                            class="mdi mdi-facebook"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-list-item border-danger text-danger"><i
                                                            class="mdi mdi-google"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-list-item border-info text-info"><i
                                                            class="mdi mdi-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"
                                                        class="social-list-item border-secondary text-secondary"><i
                                                            class="mdi mdi-github-circle"></i></a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12 text-center">
                                                <p class="text-muted mb-0">Bạn đã có tài khoản?
                                                    @if (Route::has('login'))
                                                        <a class="text-muted font-weight-medium ml-1"
                                                            href="{{ route('login') }}"><b>{{ __('Đăng nhập') }}</b></a>
                                                    @endif
                                                </p>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </form>
                                </div> <!-- end .padding-5 -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- end .w-100 -->
                </div> <!-- end .d-flex -->
            </div> <!-- end col-->
        </div> <!-- end row -->
    </div>
@endsection
