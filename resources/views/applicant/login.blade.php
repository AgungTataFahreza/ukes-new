<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <title>Login Peserta | Portal Mandiri UKES</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
        /* Pembeda: Background Gradient Hijau/Teal untuk Peserta */
        .auth-one-bg {
            background-image: linear-gradient(to right, #065f46, #059669) !important;
        }

        .btn-success-custom {
            background-color: #059669;
            border-color: #059669;
            color: white;
        }

        .btn-success-custom:hover {
            background-color: #047857;
        }
    </style>
</head>

<body>
    <div class="auth-page-wrapper pt-5">
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>
            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40 L 1440,140 L 0,140 Z"></path>
                </svg>
            </div>
        </div>

        <div class="auth-page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-success">Portal Mandiri Peserta</h5>
                                    <p class="text-muted">Khusus Pemeriksaan Luar Klinik Pratama</p>
                                </div>

                                @if(session()->has('error'))
                                <div class="alert alert-danger alert-borderless shadow mb-4" role="alert">
                                    {{ session('error') }}
                                </div>
                                @endif

                                <div class="p-2 mt-4">
                                    <form action="{{ route('applicant.login') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Nomor Pendaftar</label>
                                            <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Nomor Pendaftar" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password (Tanggal Lahir)</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Format: YYYYMMDD (Contoh: 20050817)" id="password-input" required>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                            <div class="form-text">Gunakan format <b>YYYYMMDD</b> tanpa tanda baca.</div>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success-custom w-100" type="submit">Masuk Ke Portal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/particles.js/particles.js') }}"></script>
    <script src="{{ asset('assets/js/pages/particles.app.js') }}"></script>
    <script src="{{ asset('assets/js/pages/password-addon.