@extends('user.layouts.master')

@section('title', 'Đăng ký')

@section('content')
    <div class="container-fluid py-5 bg-light">
        <div class="row justify-content-center">
            <form class="bg-white shadow-lg border my-5 form__login align-self-center">
                <div class="form__tab row">
                    <div class=" form__tab-item col-6 text-center">
                        <a class=" border-primary text-primary border-bottom form_tab-item-active nav-link d-block" href="#">Đăng ký</a>
                    </div>
                    <div class="form__tab-item col-6 text-center">
                        <a class="nav-link d-block text-dark" href="{{ route('login') }}">Đăng nhập</a>
                    </div>
                </div>

                <div class='p-3'>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleDropdownFormPassword2" placeholder="Họ và tên của bạn ...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleDropdownFormPassword2" placeholder="Số điện thoại ...">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleDropdownFormPassword2" placeholder="Địa chỉ Email ...">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Mật khẩu ...">
                    </div>

                    <button type="submit" class=" form__login-btn btn btn-primary btn-block mx-auto">Đăng ký</button>
                    <p class="mt-3 text-center">Nếu có tài khoản, nhấn <a href="{{ route('login') }}" class="text-primary"> đăng nhập </a></p>
                </div>

            </form>
        </div>
    </div>
@endsection