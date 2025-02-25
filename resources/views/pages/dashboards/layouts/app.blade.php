<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/logo/logo.png') }}">
    <title>Webgis Rawan Banjir DIY</title>
    <!-- Custom CSS -->
    <link href="{{ url('assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
    <!-- Datatable -->
    <link rel="stylesheet" href="{{ url('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ url('assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css') }}">
    <!-- Custom CSS -->
    <link href="{{ url('assets/css/style.min.css') }}" rel="stylesheet">

    <!-- Flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/style.css">
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    @yield('page_styles')
    <style>
        .navbar {
            min-height: 60px;
            display: flex;
            align-items: center;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .navbar-nav .btn-outline-danger {
            border: 2px solid #dc3545;
            color: #dc3545;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
            display: flex;
            align-items: center;
            gap: 8px;
            height: 40px;
            justify-content: center;
        }

        .navbar-nav .btn-outline-danger:hover {
            background-color: #dc3545;
            color: white;
        }

        .navbar-nav img {
            border: 2px solid #f8f9fa;
            padding: 3px;
            transition: all 0.3s ease-in-out;
            height: 40px;
            object-fit: cover;
        }

        .navbar-nav img:hover {
            border-color: #dc3545;
        }
    </style>
    @yield('meta_header')
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!--Navbar -->
    <!-- ============================================================== -->
    @include('pages.dashboards.layouts.navbar')
    <!-- ============================================================== -->
    <!-- Sidebar  -->
    <!-- ============================================================== -->
    @include('pages.dashboards.layouts.sidebar')


    <div class="page-wrapper">
        @yield('content')
        {{-- <footer class="footer text-center text-muted">
            All Rights Reserved by Freedash. Designed and Developed by <a href="https://adminmart.com/">Adminmart</a>.
        </footer> --}}
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<script src="{{ url('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- apps -->
<!-- apps -->
<script src="{{ url('assets/js/app-style-switcher.js') }}"></script>
<script src="{{ url('assets/js/feather.min.js') }}"></script>
<script src="{{ url('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ url('assets/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ url('assets/js/custom.min.js') }}"></script>
<!-- Datatable -->
<script src="{{ url('assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js') }}"></script>
<!--This page JavaScript -->
<script src="{{ url('assets/extra-libs/c3/d3.min.js') }}"></script>
<script src="{{ url('assets/extra-libs/c3/c3.min.js') }}"></script>
<script src="{{ url('assets/libs/chartist/dist/chartist.min.js') }}"></script>
<script src="{{ url('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ url('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ url('assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ url('assets/js/pages/dashboards/dashboard1.min.js') }}"></script>
<!-- Flatpickr -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/index.js"></script>
<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@yield('page_js')
@yield('page_script')
</body>

</html>
