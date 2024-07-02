@extends('layouts.app')

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
                                    <h1 class="h5 mb-1">Đặt lại mật khẩu</h1>
                                    <p class="text-muted mb-4">Nhập địa chỉ email của bạn và chúng tôi sẽ gửi cho bạn một
                                        email kèm theo hướng dẫn để đặt lại mật khẩu của bạn.</p>
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label for="exampleInputEmail">Địa chỉ Email</label>
                                            <input id="email" type="email"
                                                class="form-control form-control-user @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                                autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-success btn-block waves-effect waves-light">
                                            {{ __('Nhận liên kết đặt lại mật khẩu') }}
                                        </button>

                                    </form>

                                    <div class="row mt-5">
                                        <div class="col-12 text-center">
                                            <p class="text-muted">Bạn đã có tài khoản?
                                                @if (Route::has('login'))
                                                    <b><a class="text-muted font-weight-medium ml-1"
                                                            href="{{ route('login') }}">{{ __('Đăng nhập') }}</a></b>
                                                @endif
                                            </p>
                                            <p class="text-muted mb-0">Bạn chưa có tài khoản?
                                                @if (Route::has('register'))
                                                    <b><a class="text-muted font-weight-medium ml-1"
                                                            href="{{ route('register') }}">{{ __('Đăng ký') }}</a></b>
                                                @endif
                                            </p>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div> <!-- end .padding-5 -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- end .w-100 -->
                </div> <!-- end .d-flex -->
            </div> <!-- end col-->
        </div> <!-- end row -->
    </div>
@endsection
