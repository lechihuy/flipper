@extends('user.layouts.master')

@section('title', 'Chi tiet san pham')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-6 d-flex">
            <img class="w-100" src="https://static.nike.com/a/images/t_prod_ss/w_640,c_limit,f_auto/3b80f5a8-5819-4500-bb84-06cb1683863a/dunk-low-black-release-date.jpg">
        </div>

        <div class="col-lg-6 mt-5">
            <h5>
                Men's Trail Running Shoes
            </h5>

            <h1>
                NIKE SB DUNK
            </h1>
            <div>
                <label class="mt-3">Chọn Size</label>
            </div>
            <div class="row">

                {{-- <div class="row">
                    <div class="col-12 mb-2">
                        <button type="button" class="btn btn-light rounded-0 border" disabled>5 UK</button>
                        <button type="button" class="btn btn-light rounded-0 border">5.5 UK</button>
                        <button type="button" class="btn btn-light rounded-0 border" disabled>6 UK</button>
                        <button type="button" class="btn btn-light rounded-0 border">6.5 UK</button>
                    </div>
                    <div class="col-12">
                        <button type="button" class="btn btn-light rounded-0 border">7 UK</button>
                        <button type="button" class="btn btn-light rounded-0 border" disabled>7.5 UK</button>
                        <button type="button" class="btn btn-light rounded-0 border">8 UK</button>
                        <button type="button" class="btn btn-light rounded-0 border">8.5 UK</button>
                    </div>
                    <div class="col-12 mt-2">
                        <button type="button" class="btn btn-light rounded-0 border">9 UK</button>
                        <button type="button" class="btn btn-light rounded-0 border">9.5 UK</button>
                        <button type="button" class="btn btn-light rounded-0 border" disabled>10 UK</button>
                        <button type="button" class="btn btn-light rounded-0 border">10.5 UK</button>
                    </div>
                </div> --}}
                {{-- <div class="d-flex flex-wrap">
                    <button type="button" class="flex-fill btn btn-light rounded-0 border">7 UK</button>
                    <button type="button" class="flex-fill btn btn-light rounded-0 border" disabled>7.5 UK</button>
                    <button type="button" class="flex-fill btn btn-light rounded-0 border">8 UK</button>
                    <button type="button" class="flex-fill btn btn-light rounded-0 border">8.5 UK</button>
                    <button type="button" class="flex-fill btn btn-light rounded-0 border">7 UK</button>
                    <button type="button" class="flex-fill btn btn-light rounded-0 border" disabled>7.5 UK</button>
                    <button type="button" class="flex-fill btn btn-light rounded-0 border">8 UK</button>
                    <button type="button" class="flex-fill btn btn-light rounded-0 border">8.5 UK</button>
                </div> --}}
                <div class="row mx-0">
                    @for ($i = 0; $i < 9; $i++) <div class="col-4 col-sm-3 col-md-2 col-lg-3 px-0">
                        <button type="button" class="btn btn-outline-dark btn-block rounded-0 border">7 UK</button>
                </div>
                @endfor
            </div>
            <div class="my-4 row">
                <div class="col-12 mb-2 col-sm-6">
                    <button type="button" class="btn btn-block btn-lg btn-dark border rounded text-warning">Mua Ngay</button>
                </div>
                <div class="col-12 col-sm-6">
                    <button type="button" class="btn btn-block btn-lg border rounded">Thêm vào giỏ hàng</button>
                </div>
            </div>
            <p class="text-justify">Không thể phủ nhận Nike Dunk là thiết kế bán chạy nhất của thương hiệu Swoosh và Nike Dunk Low City Market là biến thể mới nhất của giày thể thao cổ điển. Được các vận động viên bóng rổ, vận động viên trượt băng và sneakerhead cực kỳ yêu thích kể từ khi được giới thiệu vào năm 1985. </p>
        </div>

        <div class="container-fluid container-lg py-5 list-product">
            <h2 class='text-left mb-3 font-weight-light'>Sản phẩm liên quan</h2>
            <div class="row">
                @for($i = 0; $i < 4; $i++) <div class="col-6 col-md-3 mb-3">
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

@endsection
