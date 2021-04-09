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
@endsection