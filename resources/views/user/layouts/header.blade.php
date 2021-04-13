{{-- Muốn lấy ảnh logo dùng cú pháp <img src="{{ asset('images/flipper.jpg') }}"> --}}
<nav id="header" class="navbar navbar-expand-xl navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand order-1" href="#">
                <img class="navbar-logo" src="{{ asset('images/flipper-dark.png') }}">
            </a>
          
            <div class="order-2 order-lg-3 d-flex">
                <form class="d-none d-sm-flex">
                    <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
                </form>
                <a href=""  class="navbar-icon d-inline-block p-2">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                </a>
                <a href="" class="navbar-icon d-inline-block p-2">
                    <i class="nav-icon fas fa-user"></i>
                </a>
                <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
          
            <div class="collapse navbar-collapse order-3 order-lg-2" id="menu">
                 <form class="d-flex d-sm-none mt-3">
                    <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
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