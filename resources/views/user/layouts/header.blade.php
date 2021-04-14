{{-- Muốn lấy ảnh logo dùng cú pháp <img src="{{ asset('images/flipper.jpg') }}"> --}}
<nav id="header" class="navbar navbar-expand-xl navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand order-1" href="{{ route('home') }}">
                <img class="navbar-logo" src="{{ asset('images/flipper-dark.png') }}">
            </a>
          
            <div class="order-2 order-xl-3 d-flex">
                <form class="d-none d-sm-flex">
                    <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
                </form>
                <a href="{{ route('cart') }}"  class="navbar-icon d-inline-block p-2">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                </a>
                <a href="{{ route('login') }}" class="navbar-icon d-inline-block p-2">
                    <i class="nav-icon fas fa-user"></i>
                </a>
                <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
          
            <div class="collapse navbar-collapse order-3 order-xl-2" id="menu">
                <form class="d-flex d-sm-none my-3">
                    <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
                </form>
                <ul class="navbar-nav my-2">
                    <li class="nav-list-item nav-item">
                        <a class="nav-link" href="#">MEN</a>
                    </li>
                    <li class="nav-list-item nav-item">
                        <a class="nav-link" href="#">WOMEN</a>
                    </li>
                    <li class="nav-list-item nav-item">
                        <a class="nav-link" href="#">KID</a>
                    </li>
                    <li class="nav-list-item nav-item">
                        <a class="nav-link" href="#">CUSTOMISE</a>
                    </li>
                    <li class="nav-list-item nav-item">
                        <a class="nav-link" href="#">SALE</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>

<div class="bg-dark text-white text-center p-2">
    Hãy trở thành thành viên của Flipper để có thể theo dõi các đơn hàng đã đặt, đăng ký ngay <a class='text-warning' href="{{ route('register') }}"><ins>tại đây</ins> </a>
</div>