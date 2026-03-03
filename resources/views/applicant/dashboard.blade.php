@extends('layout_applicant')
@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="alert alert-info border-0 rounded-top mb-0">
                    <i class="ri-user-smile-line me-2"></i> Halo <b>{{ Auth::guard('applicant')->user()->name }}</b>, selamat datang di Portal Uji Kesehatan Mandiri.
                </div>
                <div class="p-4">
                    <h5>Status Pemeriksaan Anda:</h5>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="card shadow-none border">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                                <i class="ri-file-edit-line"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Data Mandiri</p>
                                            <h4 class="mb-0">
                                                @if(Auth::guard('applicant')->user()->medical_record->tgl_periksa)
                                                <span class="badge bg-success">Sudah Diisi</span>
                                                @else
                                                <span class="badge bg-warning">Belum Diisi</span>
                                                @endif
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-none border">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-light text-info rounded-circle fs-3">
                                                <i class="ri-checkbox-circle-line"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Verifikasi Petugas</p>
                                            <h4 class="mb-0">
                                                @if(Auth::guard('applicant')->user()->medical_record->rekomendasi)
                                                <span class="badge bg-success">Selesai</span>
                                                @else
                                                <span class="badge bg-secondary">Menunggu</span>
                                                @endif
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h6>Petunjuk Pengisian:</h6>
                        <ol>
                            <li>Pastikan Anda sudah melakukan pemeriksaan di fasilitas kesehatan resmi.</li>
                            <li>Klik menu <b>Input Data Mandiri</b> di sebelah kiri.</li>
                            <li>Isi data sesuai dengan hasil pemeriksaan luar Anda.</li>
                            <li>Jangan lupa mengunggah dokumen pendukung jika diminta.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection