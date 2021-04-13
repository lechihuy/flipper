@extends('user.layouts.master')

@section('title', 'Đăng ký')

@section('content')
    <form class="py-5 form__login mx-auto" class="p-4">
        <div class="form__tab row">
            <div class=" form__tab-item col-6 text-center">
            <a class=" border-primary border-bottom form_tab-item-active nav-link d-block" href="#">Đăng ký</a>
            </div>
            <div class="form__tab-item col-6 text-center">
            <a class="nav-link d-block" href="#">Đăng nhập</a>
            </div>
        </div>

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

        <p id="text-codition">Ít nhất 8 ký tự 1 chữ hoa, 1 số & 1 ký hiệu</p>
        <button type="submit" class=" form__login-btn btn btn-primary d-block mx-auto btn btn-dark">Đăng ký</button>
    </form>
@endsection