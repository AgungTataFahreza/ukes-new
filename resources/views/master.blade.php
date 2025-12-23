<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <title>Aplikasi Uji Kesehatan Polkesmed</title>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Aplikasi Uji Kesehatan Polkesmed" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!--datatable css-->
    <link rel="stylesheet" href="{{ asset('assets/datatables/dataTables.bootstrap5.min.css') }}" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="{{ asset('assets/datatables/responsive.bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/datatables/buttons.dataTables.min.css') }}">
    <!--Swiper slider css-->
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- One of the following themes -->
    <link rel="stylesheet" href="{{ asset('assets/libs/@simonwep/pickr/themes/classic.min.css') }}" /> <!-- 'classic' theme -->
    <link rel="stylesheet" href="{{ asset('assets/libs/@simonwep/pickr/themes/monolith.min.css') }}" /> <!-- 'monolith' theme -->
    <link rel="stylesheet" href="{{ asset('assets/libs/@simonwep/pickr/themes/nano.min.css') }}" /> <!-- 'nano' theme -->
    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="17">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                    id="search-options" value="">
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                    id="search-close-options"></span>
                            </div>

                        </form>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                        alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Username Disini nanti</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Nama dari Username disini</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome, Username Disini nanti!</h6>
                                <a class="dropdown-item" href="logout.php"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key=t-logout>Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-poltekkes-sm.png') }}" alt="" height="32">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-poltekkes.png') }}" alt="" height="27">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-poltekkes-sm.png') }}" alt="" height="32">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-poltekkes.png') }}" alt="" height="27">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span>Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="?app=dashboard-main" role="button"
                                aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span>Dashboard</span>
                            </a>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#datapeserta" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="datapeserta">
                                <i class="ri-apps-2-line"></i> <span>UJI KESEHATAN</span>
                            </a>
                            <div class="collapse menu-dropdown" id="datapeserta">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="?app=daftar_registrasi" class="nav-link">Registrasi Peserta</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?app=daftar_registrasi_all" class="nav-link">Daftar Registrasi All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?app=daftarbayar_pendaftar" class="nav-link">Update Pembayaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?app=daftar_pemeriksaan" class="nav-link">Formulir Uji Kesehatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?app=data_pemeriksaan" class="nav-link">Data Hasil Pemeriksaan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?app=daftar_pemeriksaan_all" class="nav-link">Formulir Uji Kesehatan All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?app=daftar_registrasi_done" class="nav-link">Sudah Registrasi</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#datadokter" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="datadokter">
                                <i class="ri-apps-2-line"></i> <span>DATA DOKTER</span>
                            </a>
                            <div class="collapse menu-dropdown" id="datadokter">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="?app=daftar_dokter" class="nav-link">Daftar Dokter</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#dataparamedis" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="dataparamedis">
                                <i class="ri-apps-2-line"></i> <span>DATA PARAMEDIS</span>
                            </a>
                            <div class="collapse menu-dropdown" id="dataparamedis">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="?app=daftar_paramedis" class="nav-link">Daftar Paramedis</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#dataadmin" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="dataadmin">
                                <i class="ri-apps-2-line"></i> <span>DATA ADMIN</span>
                            </a>
                            <div class="collapse menu-dropdown" id="dataadmin">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="?app=daftar_admin" class="nav-link">Daftar Admin</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- end page title -->
                    @yield('content')

                    <!-- END layout-wrapper -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!--datatable js-->
        <script src="{{ asset('assets/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/datatables/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('assets/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/datatables/jszip.min.js') }}"></script>

        <!--Swiper slider js-->
        <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

        <!-- Dashboard init -->
        <script src="{{ asset('assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

        <!-- init js -->
        <script src="{{ asset('assets/js/pages/form-pickers.init.js') }}"></script>

        <!-- Sweet Alerts js -->
        <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

        <!-- prismjs plugin -->
        <script src="{{ asset('assets/libs/prismjs/prism.js') }}"></script>

        <!-- Modal Js -->
        <script src="{{ asset('assets/js/pages/modal.init.js') }}"></script>

        <!-- notifications init -->
        <script src="{{ asset('assets/js/pages/notifications.init.js') }}"></script>

        <!--select2 cdn-->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script src="{{ asset('assets/js/pages/select2.init.js') }}"></script>

        <!-- form wizard init -->
        <script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>