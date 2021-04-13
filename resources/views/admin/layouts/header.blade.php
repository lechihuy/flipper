<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/flipper-light.png') }}" alt="" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">Hồ sơ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.logout') }}">Thoát</a>
                </li>
            </ul>
        </div>
    </div>
</nav>