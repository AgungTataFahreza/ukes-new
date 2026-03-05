<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

<head>
    <title>UKES Mandiri | @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        /* Pembeda: Sidebar juga kita beri nuansa hijau gelap */
        [data-sidebar=dark] {
            --vz-vertical-menu-bg: #064e3b;
            --vz-vertical-menu-item-color: #ecfdf5;
        }
    </style>
</head>

<body>
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <div class="navbar-brand-box horizontal-logo">
                            <span class="logo-sm"><img src="{{ asset('assets/images/logo-sm.png') }}" height="22"></span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown">
                                <span class="d-flex align-items-center">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::guard('applicant')->user()->name }}</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Peserta</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('applicant.logout') }}"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="app-menu navbar-menu">
            <div id="scrollbar">
                <div class="container-fluid">
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span>Menu Utama</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('/applicant/dashboard') }}">
                                <i class="ri-dashboard-2-line"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ url('/applicant/form-mandiri') }}">
                                <i class="ri-file-list-3-line"></i> <span>Input Data Mandiri</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @stack('after-script')
</body>

</html>