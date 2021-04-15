@extends('user.layouts.master')

@section('title', 'Don hang')

@section('content')

<main class="bg-light">
    <div class="container py-5">
    <div class="row">
        <div class="col-4">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-user-edit"></i> Hồ sơ
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-clipboard-list"></i> Kiểm tra đơn hàng
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-sign-out-alt"></i> Đăng xuất
                </a>
            </div>
        </div>
    
        <div class="col-8">
            <table class = "table">
                <thead>
                    <tr>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Địa chỉ giao hàng</th>
                    <th scope="col">Tổng đơn</th>
                    <th scope="col"></th>
                    </tr>
                </thead>

                 <tbody>
                    <tr>
                    <th scope="row">#1</th>
                    <td>TP HCM</td>
                    <td>100$</td>
                    <td>
                        <a href="#">Xem chi tiết</a>
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">#2</th>
                    <td>Hà Nội</td>
                    <td>200$</td>
                    <td>
                        <a href="#">Xem chi tiết</a>
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">#3</th>
                    <td>Quảng Ngãi</td>
                    <td>300$</td>
                    <td>
                        <a href="#">Xem chi tiết</a>
                    </td>
                    </tr>
                </tbody>
            </table> 
            <div class = "d-flex">
                <nav class = " ml-auto" aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>
</main>


@endsection