{{-- Muốn lấy ảnh logo dùng cú pháp <img src="{{ asset('images/flipper.jpg') }}"> --}}
<nav id="header" class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand order-1" href="#">
                {{-- <img src="./img/1ffa0c0bbd344f6a1625.jpg" height="35px" alt=""> --}}
                <img class="navbar-logo" src="{{ asset('images/flipper.jpg') }}">
            </a>
          
            <div id="navbar-box-icon" class="order-2 order-lg-3 d-flex">
                <form class="d-flex me-3">
                    <input id="icon-search" class="nav-icon form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <a href=""  class="navbar-icon d-inline-block p-2">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                </a>
                <a href="" class="navbar-icon d-inline-block p-2">
                    <i class="nav-icon fas fa-user"></i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
          
            <div id='nav-list' class="collapse navbar-collapse flex-grow-0 order-3 order-lg-2" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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