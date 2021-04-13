@extends('user.layouts.master')

@section('title', 'Trang chủ thay đổi')

@section('content')
    {{-- Jumbotron --}}
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-4">Flipper</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                <a href="http://https://www.google.com.vn/?hl=vi" class="btn btn-light">Xem ngay</a>            
            </div>
            <div class="col">
                <img src="https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/5d6dcf91-8064-4869-a6c1-4f982adcbe4a/air-max-270-mens-shoe-KkLcGR.png" alt="Girl in a jacket" width="500" height="500">
            </div>  
        </div>
    </div>
</div>

    {{-- /Jumbotron --}}

{{-- Best Seller  --}}
<div class="container-fluid list-product bg-light">
    <h3 class='display-4 text-left'>BEST SELLER</h3>
    <div class="row">
        <div class="col-3">
            <img class="image-item" src="{{ asset('https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a5f04850-c95a-4ed0-a2b3-1e6517c1278b/custom-nike-air-max-95-by-you.png') }}">
            <p class='text-infor font-weight-bold'>Nike AF1</p>
            <p class='text-infor font-weight-bold text-danger'>1.200.000</p>
            <p class='text-infor text-muted'>
            <del>2.929.000đ</del>
            </p>
            
        </div>
        <div class="col-3">
            <img class="image-item" src="{{ asset('https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a5f04850-c95a-4ed0-a2b3-1e6517c1278b/custom-nike-air-max-95-by-you.png') }}">
            <p class='text-infor font-weight-bold'>Nike AF1</p>
            <p class='text-infor font-weight-bold text-danger'>1.200.000</p>
            <p class='text-infor text-muted '>
            <del>2.929.000đ</del>
            </p>
            
        </div>
        <div class="col-3">
            <img class="image-item" src="{{ asset('https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a5f04850-c95a-4ed0-a2b3-1e6517c1278b/custom-nike-air-max-95-by-you.png') }}">
            <p class='text-infor font-weight-bold'>Nike AF1</p>
            <p class='text-infor font-weight-bold text-danger'>1.200.000</p>
            <p class='text-infor text-muted'>
            <del>2.929.000đ</del>
            </p>
           
        </div>
        <div class="col-3">
            <img class="image-item" src="{{ asset('https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a5f04850-c95a-4ed0-a2b3-1e6517c1278b/custom-nike-air-max-95-by-you.png') }}">
            <p class='text-infor font-weight-bold'>Nike AF1</p>
            <p class='text-infor font-weight-bold text-danger'>1.200.000</p>
            <p class='text-infor text-muted'>
            <del>2.929.000đ</del>
            </p>
        </div>
    </div>
</div>


{{-- Best Seller  --}}

{{-- New Release --}}
{{-- <div class="container-fluid list-product bg-white">
    <h2 class=' text-left'>BEST SELLER</h2>
    <div class="row">
        <div class="col-3">
            <img class="image-item" src="{{ asset('https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a5f04850-c95a-4ed0-a2b3-1e6517c1278b/custom-nike-air-max-95-by-you.png') }}">
            <p class='latest__text-infor font-weight-bold'>Nike AF1</p>
            <p class='latest__text-infor font-weight-bold text-danger'>1.200.000</p>
            <p class='latest__text-infor text-muted'>
            <del>2.929.000đ</del>
            </p>
            
        </div>
        <div class="col-3">
            <img class="image-item" src="{{ asset('https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a5f04850-c95a-4ed0-a2b3-1e6517c1278b/custom-nike-air-max-95-by-you.png') }}">
            <p class='latest__text-infor font-weight-bold'>Nike AF1</p>
            <p class='latest__text-infor font-weight-bold text-danger'>1.200.000</p>
            <p class='latest__text-infor text-muted '>
            <del>2.929.000đ</del>
            </p>
            
        </div>
        <div class="col-3">
            <img class="image-item" src="{{ asset('https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a5f04850-c95a-4ed0-a2b3-1e6517c1278b/custom-nike-air-max-95-by-you.png') }}">
            <p class='latest__text-infor font-weight-bold'>Nike AF1</p>
            <p class='latest__text-infor font-weight-bold text-danger'>1.200.000</p>
            <p class='latest__text-infor text-muted'>
            <del>2.929.000đ</del>
            </p>
           
        </div>
        <div class="col-3">
            <img class="image-item" src="{{ asset('https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a5f04850-c95a-4ed0-a2b3-1e6517c1278b/custom-nike-air-max-95-by-you.png') }}">
            <p class='latest__text-infor font-weight-bold'>Nike AF1</p>
            <p class='latest__text-infor font-weight-bold text-danger'>1.200.000</p>
            <p class='latest__text-infor text-muted'>
            <del>2.929.000đ</del>
            </p>
        </div>
    </div>
</div> --}}
{{-- New Release --}}

{{-- Sales --}}
{{-- <div class="container-fluid list-product bg-white">
    <p class='font-weight-bold text-left'>BEST SELLER</p>
    <div class="row">
        <div class="col-3">
            <img class="image-item" src="{{ asset('https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a5f04850-c95a-4ed0-a2b3-1e6517c1278b/custom-nike-air-max-95-by-you.png') }}">
            <p class='sales__text-infor font-weight-bold'>Nike AF1</p>
            <p class='sales__text-infor font-weight-bold text-danger'>1.200.000</p>
            <p class='sales__text-infor text-muted'>
            <del>2.929.000đ</del>
            </p>
            
        </div>
        <div class="col-3">
            <img class="image-item" src="{{ asset('https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a5f04850-c95a-4ed0-a2b3-1e6517c1278b/custom-nike-air-max-95-by-you.png') }}">
            <p class='sales__text-infor font-weight-bold'>Nike AF1</p>
            <p class='sales__text-infor font-weight-bold text-danger'>1.200.000</p>
            <p class='sales__text-infor text-muted '>
            <del>2.929.000đ</del>
            </p>
            
        </div>
        <div class="col-3">
            <img class="image-item" src="{{ asset('https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a5f04850-c95a-4ed0-a2b3-1e6517c1278b/custom-nike-air-max-95-by-you.png') }}">
            <p class='sales__text-infor font-weight-bold'>Nike AF1</p>
            <p class='sales__text-infor font-weight-bold text-danger'>1.200.000</p>
            <p class='sales__text-infor text-muted'>
            <del>2.929.000đ</del>
            </p>
           
        </div>
        <div class="col-3">
            <img class="image-item" src="{{ asset('https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a5f04850-c95a-4ed0-a2b3-1e6517c1278b/custom-nike-air-max-95-by-you.png') }}">
            <p class='sales__text-infor font-weight-bold'>Nike AF1</p>
            <p class='sales__text-infor font-weight-bold text-danger'>1.200.000</p>
            <p class='sales__text-infor text-muted'>
            <del>2.929.000đ</del>
            </p>
        </div>
    </div>
</div> --}}

{{-- Sales --}}
@endsection