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
<section>
    <div class="container py-5 list-product">
        <h1 class='text-left mb-3'>BÁN CHẠY</h1>
        <div class="row">
        @for($i = 0; $i < 4; $i++)
            <div class="col-3">
                <img class="w-100 rounded" src="{{ asset('https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a5f04850-c95a-4ed0-a2b3-1e6517c1278b/custom-nike-air-max-95-by-you.png') }}">
                <h5 class='mt-2 font-weight-bold'>Nike AF1 mắc nhất thế giới limitet</h5>
                <p class='mb-0 font-weight-bold text-danger'>1.200.000</p>
                <p class='mb-0 text-muted'>
                <del>2.929.000đ</del>
                </p>
            </div>
        @endfor
    </div>
</div>
</section>

{{-- New Release --}}
<section class='bg-light'>
    <div class="container py-5 list-product ">
        <h1 class='text-left mb-3 '>MỚI NHẤT</h1>
        <div class="row">
        @for($i = 0; $i < 4; $i++)
            <div class="col-3">
                <img class="w-100 rounded" src="{{ asset('https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/4cdd870b-e576-4371-a21c-5295f7c6d222/air-max-97-se-shoe-tWNMCG.png') }}">
                <h5 class='mt-2 font-weight-bold'>Nike AF1 mắc nhất thế giới limitet</h5>
                <p class='mb-0 font-weight-bold text-danger'>1.200.000</p>
                <p class='mb-0 text-muted'>
                <del>2.929.000đ</del>
                </p>
            </div>
        @endfor
    </div>
</div>
</section>



@endsection