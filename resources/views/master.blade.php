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

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    @stack('after-style')
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
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                        alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::user()->name }}</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">{{ Auth::user()->username }}</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome, {{ Auth::user()->name }}!</h6>
                                <a class="dropdown-item" href="{{ url('logout') }}"><i
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
            @php
            $menu = trim($__env->yieldContent('menu'));
            $menuParent = trim($__env->yieldContent('menu_parent'));
            $permissions = store_permissions();
            @endphp
            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span>Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="?app=dashboard-main" role="button"
                                aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span>DASHBOARD</span>
                            </a>
                        </li>
                        <?php if (can_parent_access("Uji Kesehatan")) { ?>
                            <li class="nav-item">
                                <a class="nav-link menu-link {{ $menuParent === 'ujikesehatan' ? '' : 'collapsed' }}"
                                    href="#ujikesehatan"
                                    data-bs-toggle="collapse"
                                    role="button"
                                    aria-expanded="{{ $menuParent === 'ujikesehatan' ? 'true' : 'false' }}"
                                    aria-controls="ujikesehatan">
                                    <i class="ri-hospital-line"></i> <span>UJI KESEHATAN</span>
                                </a>
                                <div class="collapse menu-dropdown {{ $menuParent === 'ujikesehatan' ? 'show' : '' }}" id="ujikesehatan">
                                    <ul class="nav nav-sm flex-column">
                                        <?php if (can_access($permissions, "Registrasi Peserta", 'view')) { ?>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/registration') }}" class="nav-link {{ $menu === 'registration' ? 'active' : '' }}">Registrasi Peserta</a>
                                            </li>
                                        <?php } ?>
                                        <?php if (can_access($permissions, "Formulir Uji Kesehatan", 'view')) { ?>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/medical-form') }}" class="nav-link {{ $menu === 'medical-form' ? 'active' : '' }}">Formulir Uji Kesehatan</a>
                                            </li>
                                        <?php } ?>
                                        <?php if (can_access($permissions, "Data Hasil Pemeriksaan", 'view')) { ?>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/medical-result') }}" class="nav-link {{ $menu === 'medical-result' ? 'active' : '' }}">Data Hasil Pemeriksaan</a>
                                            </li>
                                        <?php } ?>
                                        <?php if (can_access($permissions, "Daftar Peserta", 'view')) { ?>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/applicant') }}" class="nav-link {{ $menu === 'applicant' ? 'active' : '' }}">Daftar Peserta</a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if (can_parent_access("Pengguna")) { ?>
                            <li class="nav-item">
                                <a class="nav-link menu-link {{ $menuParent === 'datapengguna' ? '' : 'collapsed' }}"
                                    href="#datapengguna"
                                    data-bs-toggle="collapse"
                                    role="button"
                                    aria-expanded="{{ $menuParent === 'datapengguna' ? 'true' : 'false' }}"
                                    aria-controls="datapengguna">
                                    <i class="ri-user-2-line"></i>
                                    <span>PENGGUNA</span>
                                </a>
                                <div class="collapse menu-dropdown {{ $menuParent === 'datapengguna' ? 'show' : '' }}" id="datapengguna">
                                    <ul class="nav nav-sm flex-column">
                                        <?php if (can_access($permissions, "User", 'view')) { ?>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/user') }}" class="nav-link {{ $menu === 'user' ? 'active' : '' }}">User</a>
                                            </li>
                                        <?php } ?>
                                        <?php if (can_access($permissions, "Role", 'view')) { ?>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/role') }}" class="nav-link {{ $menu === 'role' ? 'active' : '' }}">Role</a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if (can_parent_access("Data Pelengkap")) { ?>
                            <li class="nav-item">
                                <a class="nav-link menu-link {{ $menuParent === 'datapelengkap' ? '' : 'collapsed' }}"
                                    href="#datapelengkap"
                                    data-bs-toggle="collapse"
                                    role="button"
                                    aria-expanded="{{ $menuParent === 'datapelengkap' ? 'true' : 'false' }}"
                                    aria-controls="datapelengkap">
                                    <i class="ri-apps-2-line"></i>
                                    <span>DATA PELENGKAP</span>
                                </a>

                                <div class="collapse menu-dropdown {{ $menuParent === 'datapelengkap' ? 'show' : '' }}"
                                    id="datapelengkap">
                                    <ul class="nav nav-sm flex-column">
                                        <?php if (can_access($permissions, "Periode", 'view')) { ?>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/period') }}"
                                                    class="nav-link {{ $menu === 'period' ? 'active' : '' }}">
                                                    Periode
                                                </a>
                                            </li>
                                        <?php } ?>
                                        <?php if (can_access($permissions, "Tahun", 'view')) { ?>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/year') }}"
                                                    class="nav-link {{ $menu === 'year' ? 'active' : '' }}">
                                                    Tahun
                                                </a>
                                            </li>
                                        <?php } ?>
                                        <?php if (can_access($permissions, "Menu", 'view')) { ?>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/menu') }}"
                                                    class="nav-link {{ $menu === 'menu' ? 'active' : '' }}">
                                                    Menu
                                                </a>
                                            </li>
                                        <?php } ?>
                                        <?php if (can_access($permissions, "Program Studi", 'view')) { ?>
                                            <li class="nav-item">
                                                <a href="{{ url('admin/study-program') }}"
                                                    class="nav-link {{ $menu === 'study-program' ? 'active' : '' }}">
                                                    Program Studi
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
            <div class="sidebar-background"></div>
        </div>

        <div id="globalAlert"
            class="alert alert-dismissible fade d-none position-fixed top-0 end-0 m-3"
            style="z-index:1055;">
            <span id="globalAlertText"></span>
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

        <!-- Sweet Alerts js -->
        <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

        <!-- prismjs plugin -->
        <script src="{{ asset('assets/libs/prismjs/prism.js') }}"></script>
        <!--select2 cdn-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <!-- form wizard init -->
        <!--datatable js-->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

        <script>
            function showAlert(title, message, type = 'info') {
                Swal.fire({
                    icon: type,
                    title: title,
                    text: message,
                    confirmButtonClass: 'btn btn-primary w-xs mt-2',
                    buttonsStyling: false,
                    showCloseButton: true
                });
            }

            function toast(message, type = 'success', duration = 3000) {
                const alert = $('#globalAlert');

                alert
                    .removeClass('d-none alert-success alert-danger alert-warning alert-info')
                    .addClass('alert-' + type + ' show');

                $('#globalAlertText').text(message);

                setTimeout(() => {
                    alert.removeClass('show');
                }, duration);
            }
        </script>
        @stack('after-script')
</body>

</html>