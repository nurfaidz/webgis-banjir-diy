<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-lg">
        <div class="navbar-header" data-logobg="skin6">
            <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <div class="navbar-brand justify-content-center align-items-center">
                <a href="{{route('dashboard')}}" class="logo">
                    <img src="{{ url('assets/logo/logo.png') }}" alt="" class="img-fluid mt-5" height="100">
                </a>
            </div>
            <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
               data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti-more"></i>
            </a>
        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav float-left me-auto ms-3 ps-1"></ul>
            <ul class="navbar-nav float-end d-flex align-items-center gap-3" style="min-height: 60px;">
                <li class="nav-item d-flex align-items-center">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="m-0">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger d-flex align-items-center px-3 py-2">
                            <i data-feather="log-out" class="me-2"></i> Logout
                        </button>
                    </form>
                </li>
                <!-- Avatar -->
                <li class="nav-item d-flex align-items-center">
                    <img src="{{ url('assets/user.png') }}" alt="user"
                         class="rounded border shadow-sm">
                </li>
            </ul>
        </div>
    </nav>
</header>
