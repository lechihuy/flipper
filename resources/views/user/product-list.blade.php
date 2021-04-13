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
    <div class="container py-5">
        <div class="row">
            <div class="col-3">
                <div class="mb-5">
                    <h5>Danh mục sản phẩm</h5>
                    <p class="ml-3">
                        <a class="text-dark" href="">Men</a>
                    </p>
                    <p class="ml-3">
                        <a class="text-dark" href="">Women</a>
                    </p>
                    <p class="ml-3">
                        <a class="text-dark" href="">Kid</a>
                    </p>
                    <p class="ml-3">
                        <a class="text-dark" href="">Customise</a>
                    </p>
                    <p class="ml-3">
                        <a class="text-dark" href="">Sales</a>
                    </p>    
                    
                </div>
                <div>
                    <h5>Chọn giá mức</h5>
                    <p class="ml-3">
                        <a class="text-dark" href="">Dưới 500 ngàn</a>
                    </p>
                    <p class="ml-3">
                        <a class="text-dark" href="">Từ 500 - 2 triệu</a>
                    </p>
                    <p class="ml-3">
                        <a class="text-dark" href="">Từ 2 - 4 triệu</a>
                    </p>
                    <p class="ml-3">
                        <a class="text-dark" href="">trên 4 triệu</a>
                    </p>

                </div>
            </div>
            <div class="col-9">
                 <div class="container list-product">
                    <div class="row">
                        @for($i = 0; $i < 6; $i++)
                            <div class="col-4 mb-3">
                                <img class="w-100 rounded" src="{{ asset('https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/a5f04850-c95a-4ed0-a2b3-1e6517c1278b/custom-nike-air-max-95-by-you.png') }}">
                                <h5 class='mt-2 font-weight-bold'>Nike AF1 mắc nhất thế giới limited</h5>
                                <p class='mb-0 font-weight-bold text-danger'>1.200.000</p>
                                <p class='mb-0 text-muted'>
                                <del>2.929.000đ</del>
                                </p>
                            </div>
                        @endfor
        </div>
    </div>
            </div>
    </div>
    
   
</section>




@endsection