@extends('user.layouts.master')

@section('title', 'Trang chủ')

@section('content')
{{-- Jumbotron --}}
@include('user.layouts.jumbotron')
{{-- /Jumbotron --}}

{{-- Best Seller  --}}
<section>
    <div class="container-fluid container-lg py-5 list-product">
        <h2 class='text-left mb-3 font-weight-light'>BÁN CHẠY</h2>
        <div class="row">
        @for($i = 0; $i < 4; $i++)
            <div class="col-6 col-md-3 mb-3">
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
</section>

{{-- New Release --}}
<section class='bg-light'>
    <div class="container-fluid container-lg py-5 list-product ">
        <h2 class='text-left mb-3 font-weight-light'>MỚI NHẤT</h2>
        <div class="row">
            @foreach(latest_products(8) as $product)
                @include('user.components.product', [
                    'product' => $product,
                    'class' => 'col-6 col-md-3 mb-4'
                ])
            @endforeach
        </div>
    </div>
</section>

@endsection