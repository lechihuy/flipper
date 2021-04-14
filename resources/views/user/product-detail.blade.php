@extends('user.layouts.master')

@section('title', 'Chi tiet san pham')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-md-6 d-flex mb-3">
            <img class="w-100" src="https://static.nike.com/a/images/t_prod_ss/w_640,c_limit,f_auto/3b80f5a8-5819-4500-bb84-06cb1683863a/dunk-low-black-release-date.jpg">
        </div>

        <div class="col-12 col-md-6 col-sm-12 mt-5">
            <h5>
                Men's Trail Running Shoes
            </h5>

            <h1>
                NIKE SB DUNK
            </h1>

            <label class="mt-3 d-flex">Chọn Size</label>


            <div class="btn-group btn-group-md" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-light rounded-0 border">7 UK</button>
                <button type="button" class="btn btn-light rounded-0 border">7.5 UK</button>
                <button type="button" class="btn btn-light rounded-0 border">8 UK</button>
                <button type="button" class="btn btn-light rounded-0 border">8.5 UK</button>
                <button type="button" class="btn btn-light rounded-0 border">9 UK</button>
                <button type="button" class="btn btn-light rounded-0 border">9.5 UK</button>
            </div>

            <div class="mt-5">
                <button type="button" class="btn btn-lg btn-dark border rounded">Mua Ngay</button>
                <button type="button" class="btn btn-lg border rounded">Thêm vào giỏ hàng</button>
            </div>
            <p class="mt-5 text-justify">Không thể phủ nhận Nike Dunk là thiết kế bán chạy nhất của thương hiệu Swoosh và Nike Dunk Low City Market là biến thể mới nhất của giày thể thao cổ điển. Được các vận động viên bóng rổ, vận động viên trượt băng và sneakerhead cực kỳ yêu thích kể từ khi được giới thiệu vào năm 1985. </p>
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
