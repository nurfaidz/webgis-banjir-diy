<header>
    <div class="container-fluid">
        <div class="row py-3 border-bottom">
            <div
                class="col-sm-4 col-lg-2 text-center text-sm-start d-flex gap-3 justify-content-center justify-content-md-start">
                <div class="d-flex align-items-center my-3 my-sm-0">
                    <a href="index.html">
                        <img src="{{asset('assets/logo/logo.png')}}" alt="logo" height="60">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar"
                        aria-controls="offcanvasNavbar">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#menu"></use>
                    </svg>
                </button>
            </div>
            <div class="col-lg-4">
                <ul class="navbar-nav list-unstyled d-flex flex-row gap-3 gap-lg-5 justify-content-center flex-wrap align-items-center mb-0 fw-bold text-uppercase text-dark">
                    <li class="nav-item active">
                        <a href="{{route('index')}}" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item active">
                        <a href="index.html" class="nav-link">Tentang</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>
