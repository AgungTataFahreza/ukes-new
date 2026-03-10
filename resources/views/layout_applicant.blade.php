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
        /* Sidebar nuansa hijau gelap */
        [data-sidebar=dark] {
            --vz-vertical-menu-bg: #064e3b;
            --vz-vertical-menu-item-color: #ecfdf5;
        }

        /* Perbaikan Z-index agar tombol hamburger selalu bisa diklik */
        #topnav-hamburger-icon {
            z-index: 1002;
        }
    </style>
</head>

<body>
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex align-items-center">
                        <div class="navbar-brand-box horizontal-logo d-flex d-lg-none">
                            <a href="#" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/images/logo-sm.png') }}" height="22">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown">
                                <span class="d-flex align-items-center">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">
                                            {{ Auth::guard('applicant')->user()->name ?? 'User' }}
                                        </span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('applicant.logout') }}">
                                    <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="app-menu navbar-menu">
            <div class="navbar-brand-box">
                <a href="#" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" height="22">
                    </span>
                    <span class="logo-lg">
                        <h4 class="text-white mt-4">UKES MANDIRI</h4>
                    </span>
                </a>
            </div>

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

        <div class="vertical-overlay" id="sidebar-overlay"></div>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            function toggleSidebar() {
                var windowSize = $(window).width();
                if (windowSize < 1025) {
                    // Paksa tambah/hapus class di tag HTML (Standar Velzon)
                    if ($('html').hasClass('vertical-sidebar-enable')) {
                        $('html').removeClass('vertical-sidebar-enable');
                    } else {
                        $('html').addClass('vertical-sidebar-enable');
                    }
                } else {
                    // Mode Desktop: Toggle antara ukuran besar dan kecil
                    var currentSize = $('html').attr('data-sidebar-size');
                    if (currentSize === 'sm') {
                        $('html').attr('data-sidebar-size', 'lg');
                    } else {
                        $('html').attr('data-sidebar-size', 'sm');
                    }
                }
            }

            // Jalankan fungsi saat tombol diklik
            $('#topnav-hamburger-icon').on('click', function(e) {
                e.preventDefault();
                toggleSidebar();
            });

            // Klik overlay untuk menutup sidebar di mobile
            $('#sidebar-overlay').on('click', function() {
                $('html').removeClass('vertical-sidebar-enable');
            });
        });
    </script>

    @stack('after-script')
</body>

</html>