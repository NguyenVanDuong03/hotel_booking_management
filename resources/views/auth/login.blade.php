@extends('layouts.app')
@section('title', 'Đăng nhập')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center">
                    <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-login rounded-left"></div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center mb-5">
                                        <a href="index.html" class="text-dark font-size-22 font-family-secondary">
                                            <i class="mdi mdi-album"></i> <b>NVD</b>
                                        </a>
                                    </div>
                                    <h1 class="h5 mb-1">Chào mừng quay trở lại!</h1>
                                    <p class="text-muted mb-4">Nhập địa chỉ email và mật khẩu của bạn để truy cập vào trang
                                        quản trị.</p>
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group">
                                            <input id="email" type="email"
                                                class="form-control form-control-user @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                                autofocus placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password"
                                                class="form-control form-control-user @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password"
                                                placeholder="Mật khẩu">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Ghi nhớ tài khoản') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block waves-effect waves-light">
                                            {{ __('Đăng nhập') }}
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
                                                <p class="text-muted mb-2">
                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link text-muted font-weight-medium ml-1"
                                                            href="{{ route('password.request') }}">
                                                            {{ __('Quên mật khẩu?') }}
                                                        </a>
                                                    @endif
                                                </p>
                                                <p class="text-muted mb-0">Bạn chưa có tài khoản?
                                                    @if (Route::has('register'))
                                                        <a class="text-muted font-weight-medium ml-1"
                                                            href="{{ route('register') }}"><b>{{ __('Đăng ký') }}</b></a>
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
