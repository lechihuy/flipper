@extends('user.layouts.master')

@section('title', 'Ho so')

@section('content')

<main class="bg-light">
    <div class="container py-5">
    <div class="row">
        <div class="col-4">
            @include('user.components.user-sidebar')
        </div>
    
        <div class="col-8">
            <form class='mb-5'>
                <h5>Hồ sơ</h5>
                <div class="form-group">
                    <input type="email" disabled class="form-control" id="exampleDropdownFormPassword2" placeholder="Địa chỉ Email ...">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleDropdownFormPassword2" placeholder="Họ và tên ...">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleDropdownFormPassword2" placeholder="Địa chỉ ...">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleDropdownFormPassword2" placeholder="Số điện thoại...">  
                </div>
                <button type="submit" class=" form__login-btn btn btn-success btn-block mx-auto">Lưu thay đổi</button>
            </form>

            <form>
                <h5>Đổi mật khẩu</h5>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Nhập mật khẩu cũ ...">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Nhập mật khẩu mới ...">
                </div>
                <button type="submit" class=" form__login-btn btn btn-primary btn-block mx-auto">Lưu thay đổi</button>
            </form>
        </div>
    </div>
    </div>
</main>


@endsection