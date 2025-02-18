<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-lg">
        <div class="navbar-header" data-logobg="skin6">
            <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
            <div class="navbar-brand justify-content-center align-items-center">
                <!-- Logo icon -->
                <a href="#">
                    {{--                        <img src="{{ url('assets/logo/logo-2.png') }}" alt="" class="img-fluid mt-5">--}}
                </a>
            </div>
            <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
               data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ti-more"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav float-left me-auto ms-3 ps-1">
            </ul>
            <ul class="navbar-nav float-end">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('assets/user.png') }}" alt="user" width="30">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"><i data-feather="power"
                                                                                 class="svg-icon me-2 ms-1"></i>
                            Logout</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
