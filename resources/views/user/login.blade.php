@extends('user.layouts.master')

@section('title', 'Đăng nhập')

@section('content')
    <form class="form__login mx-auto" class="p-4">
        <div class="form__tab row">
            <div class="form__tab-item col-6 text-center">
            <a class="form_tab-item-active nav-link d-block" href="#">Đăng ký</a>
            </div>
            <div class="form__tab-item col-6 text-center">
            <a class="nav-link d-block" href="#">Đăng nhập</a>
            </div>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="exampleDropdownFormPassword2" placeholder="Last Name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="exampleDropdownFormPassword2" placeholder="Email Address">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
        </div>

        <p id="text-codition">At least 8 characters 1 uppercase letter, 1 number & 1 symbol</p>

        <div class="form-group">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                <label id="form-check-text" class="form-check-label" for="dropdownCheck2">
                    By logging in, you agree to the <b> Terms of Service </b> and <b> Privacy Policy </b> 
                </label>
            </div>
        </div>
        <button type="submit" class=" form__login-btn btn btn-primary d-block mx-auto btn btn-dark">Login</button>
    </form>
@endsection