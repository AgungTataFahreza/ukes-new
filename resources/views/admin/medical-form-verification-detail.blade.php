@extends('master')

@section('title', 'Formulir Uji Kesehatan')
@section('menu', 'verification')
@section('menu_parent', 'ujikesehatan')

<?php
// Inisialisasi relasi agar pemanggilan lebih pendek
$rec = $user->medical_record;

// Logika penanda (Badge): Bernilai true jika data di applicant_medical_records sudah tidak null
$is_antro_verif = $rec && $rec->tinggi_badan !== null;
$is_fisik1_verif = $rec && $rec->status_kulit !== null;
$is_fisik2_verif = $rec && $rec->status_thyroid !== null;
$is_gigi_verif = $rec && $rec->status_gigi !== null;
$is_narkoba_verif = $rec && $rec->amp !== null;

$is_berkas_verif  = $user->status_file_kesehatan !== "Pending" && $user->status_file_narkoba !== "Pending" && $user->status_file_kesehatan !== null && $user->status_file_narkoba !== null && $user->status_file_kesehatan !== "" && $user->status_file_narkoba !== "";
$is_keputusan_verif = $user->tanggal_verifikasi !== null || ($rec && $rec->kesimpulan !== null);
?>

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex justify-content-between">
                <h4 class="card-title mb-0">Verifikasi Data Pemeriksaan: {{ $user->name }}</h4>
                <div>
                    @if ($user->file_kesehatan)
                    <a href="{{ asset('storage/uploads/kesehatan/' . $user->file_kesehatan) }}" target="_blank" class="btn btn-sm btn-outline-primary"><i class="ri-file-pdf-line"></i> Buka Hasil MCU</a>
                    @endif
                    @if ($user->file_narkoba)
                    <a href="{{ asset('storage/uploads/narkoba/' . $user->file_narkoba) }}" target="_blank" class="btn btn-sm btn-outline-danger"><i class="ri-file-pdf-line"></i> Buka Hasil Narkoba</a>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <div class="alert alert-info border-0 shadow-sm mb-4">
                    <strong>Mode Verifikasi:</strong> Anda sedang mengedit data milik <strong>{{ $user->name }}</strong>. Pastikan data yang Anda simpan sesuai dengan berkas yang dilampirkan.
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link mb-2 active" id="v-pills-data-peserta-tab" data-bs-toggle="pill" href="#v-pills-data-peserta" role="tab" aria-controls="v-pills-data-peserta" aria-selected="true">
                                Data Peserta
                            </a>

                            <a class="nav-link mb-2 d-flex justify-content-between align-items-center" id="v-pills-pemeriksaan-antropometri-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-antropometri" role="tab" aria-controls="v-pills-pemeriksaan-antropometri" aria-selected="false">
                                <span>Pemeriksaan Antropometri</span>
                                {!! $is_antro_verif ? '<span class="badge bg-success"><i class="ri-check-double-line"></i> Verif</span>' : '<span class="badge bg-warning">Belum</span>' !!}
                            </a>

                            <a class="nav-link mb-2 d-flex justify-content-between align-items-center" id="v-pills-pemeriksaan-fisik-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-fisik" role="tab" aria-controls="v-pills-pemeriksaan-fisik" aria-selected="false">
                                <span>Pemeriksaan Fisik</span>
                                {!! $is_fisik1_verif ? '<span class="badge bg-success"><i class="ri-check-double-line"></i> Verif</span>' : '<span class="badge bg-warning">Belum</span>' !!}
                            </a>

                            <a class="nav-link mb-2 d-flex justify-content-between align-items-center" id="v-pills-pemeriksaan-fisik-2-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-fisik-2" role="tab" aria-controls="v-pills-pemeriksaan-fisik-2" aria-selected="false">
                                <span>Pemeriksaan Fisik 2</span>
                                {!! $is_fisik2_verif ? '<span class="badge bg-success"><i class="ri-check-double-line"></i> Verif</span>' : '<span class="badge bg-warning">Belum</span>' !!}
                            </a>

                            <a class="nav-link mb-2 d-flex justify-content-between align-items-center" id="v-pills-pemeriksaan-gigi-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-gigi" role="tab" aria-controls="v-pills-pemeriksaan-gigi" aria-selected="false">
                                <span>Pemeriksaan Gigi</span>
                                {!! $is_gigi_verif ? '<span class="badge bg-success"><i class="ri-check-double-line"></i> Verif</span>' : '<span class="badge bg-warning">Belum</span>' !!}
                            </a>

                            <a class="nav-link mb-2 d-flex justify-content-between align-items-center" id="v-pills-pemeriksaan-narkoba-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-narkoba" role="tab" aria-controls="v-pills-pemeriksaan-narkoba" aria-selected="false">
                                <span>Pemeriksaan Narkoba</span>
                                {!! $is_narkoba_verif ? '<span class="badge bg-success"><i class="ri-check-double-line"></i> Verif</span>' : '<span class="badge bg-warning">Belum</span>' !!}
                            </a>

                            <a class="nav-link mb-2 d-flex justify-content-between align-items-center" id="v-pills-berkas-tab" data-bs-toggle="pill" href="#v-pills-berkas" role="tab" aria-controls="v-pills-berkas" aria-selected="false">
                                <span>Pemeriksaan Berkas</span>
                                {!! $is_berkas_verif ? '<span class="badge bg-success"><i class="ri-check-double-line"></i> Verif</span>' : '<span class="badge bg-warning">Belum</span>' !!}
                            </a>

                            <a class="nav-link mb-2 d-flex justify-content-between align-items-center" id="v-pills-keputusan-tab" data-bs-toggle="pill" href="#v-pills-keputusan" role="tab" aria-controls="v-pills-keputusan" aria-selected="false">
                                <span>Keputusan Final</span>
                                {!! $is_keputusan_verif ? '<span class="badge bg-success"><i class="ri-check-double-line"></i> Selesai</span>' : '<span class="badge bg-warning">Belum</span>' !!}
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-data-peserta" role="tabpanel" aria-labelledby="v-pills-data-peserta-tab">
                                <div class="row g-3 w-100">
                                    <div class="col-sm-12">
                                        <label for="nomor_peserta" class="form-label">Nomor Peserta</label>
                                        <input type="text" class="form-control-plaintext bg-light px-2" id="nomor_peserta" value="{{ $user->username }}" readonly>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control-plaintext bg-light px-2" id="nama" value="{{ $user->name }}" readonly>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="study_program_name" class="form-label">Prodi</label>
                                        <input type="text" class="form-control-plaintext bg-light px-2" id="study_program_name" value="{{ $user->medical_record->study_program->name ?? '-' }}" readonly>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-end mt-4">
                                        <button type="button" class="btn btn-info" onclick="moveTab('data-peserta', 'pemeriksaan-antropometri')">Selanjutnya <i class="ri-arrow-right-line me-1"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-pemeriksaan-antropometri" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-antropometri-tab">
                                <div class="d-flex mb-2">
                                    <div class="w-100">
                                        <p class="text-muted fw-bold">Pemeriksaan Antropometri</p>
                                        <form id="antropometriForm">
                                            <div class="row g-3">

                                                <div class="col-sm-6">
                                                    <label class="form-label">Tekanan Darah</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="tekanan_darah_sistolik" name="tekanan_darah_sistolik" placeholder="Sistolik" min="0" value="{{ $rec?->tekanan_darah_sistolik ?? $user->tekanan_darah_sistolik }}">
                                                        <span class="input-group-text">/</span>
                                                        <input type="number" class="form-control" id="tekanan_darah_diastolik" name="tekanan_darah_diastolik" placeholder="Diastolik" min="0" value="{{ $rec?->tekanan_darah_diastolik ?? $user->tekanan_darah_diastolik }}">
                                                        <span class="input-group-text">mmHg</span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="nadi" class="form-label">Nadi</label>
                                                    <div class="col-md-12">
                                                        <input type="number" class="form-control" id="nadi" name="nadi" value="{{ $rec?->nadi ?? $user->nadi }}">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="tinggi_badan" class="form-label">Tinggi Badan <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" placeholder="Tinggi badan" min="0" required value="{{ $rec?->tinggi_badan ?? $user->tinggi_badan }}">
                                                        <span class="input-group-text">cm</span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="berat_badan" class="form-label">Berat Badan <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="berat_badan" name="berat_badan" placeholder="Berat badan" min="0" step="0.1" required value="{{ $rec?->berat_badan ?? $user->berat_badan }}">
                                                        <span class="input-group-text">kg</span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <label for="status_antropometri" class="form-label">Status Normal</label>
                                                    <select name="status_antropometri" class="form-select" id="status_antropometri">
                                                        <option value="Normal" {{ ($rec?->status_antropometri ?? $user->status_antropometri) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_antropometri ?? $user->status_antropometri) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="catatan_antropometri" class="form-label">Catatan</label>
                                                    <div class="col-md-12">
                                                        <textarea name="catatan_antropometri" rows="3" class="form-control" id="catatan_antropometri">{{ $rec?->catatan_antropometri ?? $user->catatan_antropometri }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="keterangan_antropometri" class="form-label">Keterangan</label>
                                                    <div class="col-md-12">
                                                        <textarea name="keterangan_antropometri" rows="3" class="form-control" id="keterangan_antropometri">{{ $rec?->keterangan_antropometri ?? $user->keterangan_antropometri }}</textarea>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="mt-4 text-end">
                                                <button type="button" class="btn btn-warning" id="btnSaveAntropometri" onclick="saveAdminData('antropometriForm', 'update-antropometri', 'pemeriksaan-fisik')">
                                                    Simpan Perubahan & Selanjutnya <i class="ri-arrow-right-line"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-pemeriksaan-fisik" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-fisik-tab">
                                <div class="d-flex mb-2">
                                    <div class="w-100">
                                        <form id="fisikForm">

                                            <p class="text-muted fw-bold">Pemeriksaan Kulit</p>
                                            <div class="row g-3 mb-4">
                                                <div class="col-sm-4">
                                                    <label class="form-label">Status Normal</label>
                                                    <select name="status_kulit" class="form-select" id="status_kulit">
                                                        <option value="Normal" {{ ($rec?->status_kulit ?? $user->status_kulit) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_kulit ?? $user->status_kulit) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label">Catatan</label>
                                                    <textarea name="catatan_kulit" rows="2" class="form-control" id="catatan_kulit">{{ $rec?->catatan_kulit ?? $user->catatan_kulit }}</textarea>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label">Keterangan</label>
                                                    <textarea name="keterangan_kulit" rows="2" class="form-control" id="keterangan_kulit">{{ $rec?->keterangan_kulit ?? $user->keterangan_kulit }}</textarea>
                                                </div>
                                            </div>
                                            <div class="border-bottom mb-3"></div>

                                            <p class="text-muted fw-bold">Pemeriksaan Mata</p>
                                            <div class="row g-3 mb-4">
                                                <div class="col-sm-3">
                                                    <label class="form-label">Status Normal Mata</label>
                                                    <select name="status_mata" class="form-select" id="status_mata">
                                                        <option value="Normal" {{ ($rec?->status_mata ?? $user->status_mata) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_mata ?? $user->status_mata) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-label">Visus</label>
                                                    <input type="text" class="form-control" id="visus" name="visus" value="{{ $rec?->visus ?? $user->visus }}">
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-label">Buta Warna</label>
                                                    <select name="buta_warna" class="form-select" id="buta_warna">
                                                        <option value="Normal" {{ ($rec?->buta_warna ?? $user->buta_warna) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Parsial" {{ ($rec?->buta_warna ?? $user->buta_warna) == 'Parsial' ? 'selected' : '' }}>Parsial</option>
                                                        <option value="Total" {{ ($rec?->buta_warna ?? $user->buta_warna) == 'Total' ? 'selected' : '' }}>Total</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-12 row g-3">
                                                    <div class="col-sm-6">
                                                        <label class="form-label">Catatan</label>
                                                        <textarea name="catatan_mata" rows="2" class="form-control" id="catatan_mata">{{ $rec?->catatan_mata ?? $user->catatan_mata }}</textarea>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="form-label">Keterangan</label>
                                                        <textarea name="keterangan_mata" rows="2" class="form-control" id="keterangan_mata">{{ $rec?->keterangan_mata ?? $user->keterangan_mata }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-bottom mb-3"></div>

                                            <p class="text-muted fw-bold">Pemeriksaan Telinga</p>
                                            <div class="row g-3 mb-4">
                                                <div class="col-sm-4">
                                                    <label class="form-label">Status Normal</label>
                                                    <select name="status_telinga" class="form-select" id="status_telinga">
                                                        <option value="Normal" {{ ($rec?->status_telinga ?? $user->status_telinga) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_telinga ?? $user->status_telinga) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label">Telinga Kiri</label>
                                                    <input type="text" class="form-control" id="telinga_kiri" name="telinga_kiri" value="{{ $rec?->telinga_kiri ?? $user->telinga_kiri }}">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label">Telinga Kanan</label>
                                                    <input type="text" class="form-control" id="telinga_kanan" name="telinga_kanan" value="{{ $rec?->telinga_kanan ?? $user->telinga_kanan }}">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label">Catatan</label>
                                                    <textarea name="catatan_telinga" rows="2" class="form-control" id="catatan_telinga">{{ $rec?->catatan_telinga ?? $user->catatan_telinga }}</textarea>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label">Keterangan</label>
                                                    <textarea name="keterangan_telinga" rows="2" class="form-control" id="keterangan_telinga">{{ $rec?->keterangan_telinga ?? $user->keterangan_telinga }}</textarea>
                                                </div>
                                            </div>
                                            <div class="border-bottom mb-3"></div>

                                            <div class="row g-4 mb-4">
                                                <div class="col-md-6 border-end pe-4">
                                                    <p class="text-muted fw-bold">Pemeriksaan Hidung</p>
                                                    <label class="form-label">Status</label>
                                                    <select name="status_hidung" class="form-select mb-2" id="status_hidung">
                                                        <option value="Normal" {{ ($rec?->status_hidung ?? $user->status_hidung) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_hidung ?? $user->status_hidung) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                    <textarea name="catatan_hidung" rows="1" class="form-control mb-2" placeholder="Catatan" id="catatan_hidung">{{ $rec?->catatan_hidung ?? $user->catatan_hidung }}</textarea>
                                                    <textarea name="keterangan_hidung" rows="1" class="form-control" placeholder="Keterangan" id="keterangan_hidung">{{ $rec?->keterangan_hidung ?? $user->keterangan_hidung }}</textarea>
                                                </div>

                                                <div class="col-md-6">
                                                    <p class="text-muted fw-bold">Pemeriksaan Lidah</p>
                                                    <label class="form-label">Status</label>
                                                    <select name="status_lidah" class="form-select mb-2" id="status_lidah">
                                                        <option value="Normal" {{ ($rec?->status_lidah ?? $user->status_lidah) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_lidah ?? $user->status_lidah) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                    <textarea name="catatan_lidah" rows="1" class="form-control mb-2" placeholder="Catatan" id="catatan_lidah">{{ $rec?->catatan_lidah ?? $user->catatan_lidah }}</textarea>
                                                    <textarea name="keterangan_lidah" rows="1" class="form-control" placeholder="Keterangan" id="keterangan_lidah">{{ $rec?->keterangan_lidah ?? $user->keterangan_lidah }}</textarea>
                                                </div>

                                                <div class="col-md-6 border-end pe-4 border-top pt-3">
                                                    <p class="text-muted fw-bold">Pemeriksaan Pharynx</p>
                                                    <label class="form-label">Status</label>
                                                    <select name="status_pharynx" class="form-select mb-2" id="status_pharynx">
                                                        <option value="Normal" {{ ($rec?->status_pharynx ?? $user->status_pharynx) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_pharynx ?? $user->status_pharynx) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                    <textarea name="catatan_pharynx" rows="1" class="form-control mb-2" placeholder="Catatan" id="catatan_pharynx">{{ $rec?->catatan_pharynx ?? $user->catatan_pharynx }}</textarea>
                                                    <textarea name="keterangan_pharynx" rows="1" class="form-control" placeholder="Keterangan" id="keterangan_pharynx">{{ $rec?->keterangan_pharynx ?? $user->keterangan_pharynx }}</textarea>
                                                </div>

                                                <div class="col-md-6 border-top pt-3">
                                                    <p class="text-muted fw-bold">Pemeriksaan Tonsil</p>
                                                    <label class="form-label">Status</label>
                                                    <select name="status_tonsil" class="form-select mb-2" id="status_tonsil">
                                                        <option value="Normal" {{ ($rec?->status_tonsil ?? $user->status_tonsil) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_tonsil ?? $user->status_tonsil) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                    <textarea name="catatan_tonsil" rows="1" class="form-control mb-2" placeholder="Catatan" id="catatan_tonsil">{{ $rec?->catatan_tonsil ?? $user->catatan_tonsil }}</textarea>
                                                    <textarea name="keterangan_tonsil" rows="1" class="form-control" placeholder="Keterangan" id="keterangan_tonsil">{{ $rec?->keterangan_tonsil ?? $user->keterangan_tonsil }}</textarea>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-end justify-content-end mt-4">
                                                <button type="button" class="btn btn-warning" id="btnSaveFisik" onclick="saveAdminData('fisikForm', 'update-fisik', 'pemeriksaan-fisik-2')">
                                                    Simpan Perubahan & Selanjutnya <i class="ri-arrow-right-line me-1"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-pemeriksaan-fisik-2" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-fisik-2-tab">
                                <div class="d-flex mb-2">
                                    <div class="w-100">
                                        <form id="fisik2Form">

                                            <div class="row g-4 mb-4">
                                                <div class="col-md-6 border-end pe-4">
                                                    <p class="text-muted fw-bold">Pemeriksaan Thyroid</p>
                                                    <label class="form-label">Status</label>
                                                    <select name="status_thyroid" class="form-select mb-2" id="status_thyroid">
                                                        <option value="Normal" {{ ($rec?->status_thyroid ?? $user->status_thyroid) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_thyroid ?? $user->status_thyroid) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                    <textarea name="catatan_thyroid" rows="1" class="form-control mb-2" placeholder="Catatan" id="catatan_thyroid">{{ $rec?->catatan_thyroid ?? $user->catatan_thyroid }}</textarea>
                                                    <textarea name="keterangan_thyroid" rows="1" class="form-control" placeholder="Keterangan" id="keterangan_thyroid">{{ $rec?->keterangan_thyroid ?? $user->keterangan_thyroid }}</textarea>
                                                </div>

                                                <div class="col-md-6">
                                                    <p class="text-muted fw-bold">Pemeriksaan Jantung</p>
                                                    <label class="form-label">Status</label>
                                                    <select name="status_jantung" class="form-select mb-2" id="status_jantung">
                                                        <option value="Normal" {{ ($rec?->status_jantung ?? $user->status_jantung) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_jantung ?? $user->status_jantung) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                    <textarea name="catatan_jantung" rows="1" class="form-control mb-2" placeholder="Catatan" id="catatan_jantung">{{ $rec?->catatan_jantung ?? $user->catatan_jantung }}</textarea>
                                                    <textarea name="keterangan_jantung" rows="1" class="form-control" placeholder="Keterangan" id="keterangan_jantung">{{ $rec?->keterangan_jantung ?? $user->keterangan_jantung }}</textarea>
                                                </div>

                                                <div class="col-md-6 border-end pe-4 border-top pt-3">
                                                    <p class="text-muted fw-bold">Pemeriksaan Paru-Paru</p>
                                                    <label class="form-label">Status</label>
                                                    <select name="status_paru_paru" class="form-select mb-2" id="status_paru_paru">
                                                        <option value="Normal" {{ ($rec?->status_paru_paru ?? $user->status_paru_paru) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_paru_paru ?? $user->status_paru_paru) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                    <textarea name="catatan_paru_paru" rows="1" class="form-control mb-2" placeholder="Catatan" id="catatan_paru_paru">{{ $rec?->catatan_paru_paru ?? $user->catatan_paru_paru }}</textarea>
                                                    <textarea name="keterangan_paru_paru" rows="1" class="form-control" placeholder="Keterangan" id="keterangan_paru_paru">{{ $rec?->keterangan_paru_paru ?? $user->keterangan_paru_paru }}</textarea>
                                                </div>

                                                <div class="col-md-6 border-top pt-3">
                                                    <p class="text-muted fw-bold">Pemeriksaan Abdomen</p>
                                                    <label class="form-label">Status</label>
                                                    <select name="status_abdomen" class="form-select mb-2" id="status_abdomen">
                                                        <option value="Normal" {{ ($rec?->status_abdomen ?? $user->status_abdomen) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_abdomen ?? $user->status_abdomen) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                    <textarea name="catatan_abdomen" rows="1" class="form-control mb-2" placeholder="Catatan" id="catatan_abdomen">{{ $rec?->catatan_abdomen ?? $user->catatan_abdomen }}</textarea>
                                                    <textarea name="keterangan_abdomen" rows="1" class="form-control" placeholder="Keterangan" id="keterangan_abdomen">{{ $rec?->keterangan_abdomen ?? $user->keterangan_abdomen }}</textarea>
                                                </div>
                                            </div>
                                            <div class="border-bottom mb-3"></div>

                                            <p class="text-muted fw-bold">Pemeriksaan Refleks</p>
                                            <div class="row g-3 mb-4">
                                                <div class="col-sm-4">
                                                    <label class="form-label">Refleks Pupil</label>
                                                    <select name="status_refleks_pupil" class="form-select" id="status_refleks_pupil">
                                                        <option value="Normal" {{ ($rec?->status_refleks_pupil ?? $user->status_refleks_pupil) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_refleks_pupil ?? $user->status_refleks_pupil) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label">Refleks Patela</label>
                                                    <select name="status_refleks_patela" class="form-select" id="status_refleks_patela">
                                                        <option value="Normal" {{ ($rec?->status_refleks_patela ?? $user->status_refleks_patela) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_refleks_patela ?? $user->status_refleks_patela) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label">Refleks Achiles</label>
                                                    <select name="status_refleks_achiles" class="form-select" id="status_refleks_achiles">
                                                        <option value="Normal" {{ ($rec?->status_refleks_achiles ?? $user->status_refleks_achiles) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_refleks_achiles ?? $user->status_refleks_achiles) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label">Catatan</label>
                                                    <textarea name="catatan_refleks" rows="2" class="form-control" id="catatan_refleks">{{ $rec?->catatan_refleks ?? $user->catatan_refleks }}</textarea>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label">Keterangan</label>
                                                    <textarea name="keterangan_refleks" rows="2" class="form-control" id="keterangan_refleks">{{ $rec?->keterangan_refleks ?? $user->keterangan_refleks }}</textarea>
                                                </div>
                                            </div>
                                            <div class="border-bottom mb-3"></div>

                                            <div class="row g-4 mb-4">
                                                <div class="col-md-6 border-end pe-4">
                                                    <p class="text-muted fw-bold">Pemeriksaan Thorax</p>
                                                    <label class="form-label">Status</label>
                                                    <select name="status_thorax" class="form-select mb-2" id="status_thorax">
                                                        <option value="Normal" {{ ($rec?->status_thorax ?? $user->status_thorax) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_thorax ?? $user->status_thorax) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                    <textarea name="catatan_thorax" rows="1" class="form-control mb-2" placeholder="Catatan" id="catatan_thorax">{{ $rec?->catatan_thorax ?? $user->catatan_thorax }}</textarea>
                                                    <textarea name="keterangan_thorax" rows="1" class="form-control" placeholder="Keterangan" id="keterangan_thorax">{{ $rec?->keterangan_thorax ?? $user->keterangan_thorax }}</textarea>
                                                </div>

                                                <div class="col-md-6">
                                                    <p class="text-muted fw-bold">Pemeriksaan Bicara</p>
                                                    <label class="form-label">Status</label>
                                                    <select name="status_kemampuan_bicara" class="form-select mb-2" id="status_kemampuan_bicara">
                                                        <option value="Normal" {{ ($rec?->status_kemampuan_bicara ?? $user->status_kemampuan_bicara) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_kemampuan_bicara ?? $user->status_kemampuan_bicara) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                    <textarea name="catatan_kemampuan_bicara" rows="1" class="form-control mb-2" placeholder="Catatan" id="catatan_kemampuan_bicara">{{ $rec?->catatan_kemampuan_bicara ?? $user->catatan_kemampuan_bicara }}</textarea>
                                                    <textarea name="keterangan_kemampuan_bicara" rows="1" class="form-control" placeholder="Keterangan" id="keterangan_kemampuan_bicara">{{ $rec?->keterangan_kemampuan_bicara ?? $user->keterangan_kemampuan_bicara }}</textarea>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-end justify-content-end mt-4">
                                                <button type="button" class="btn btn-warning" id="btnSaveFisik2" onclick="saveAdminData('fisik2Form', 'update-fisik-2', 'pemeriksaan-gigi')">
                                                    Simpan Perubahan & Selanjutnya <i class="ri-arrow-right-line me-1"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-pemeriksaan-gigi" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-gigi-tab">
                                <div class="d-flex mb-2">
                                    <div class="w-100">
                                        <p class="text-muted fw-bold">Pemeriksaan Gigi</p>
                                        <form id="gigiForm">
                                            <div class="row g-3">
                                                <div class="col-sm-12">
                                                    <label for="status_gigi" class="form-label">Status Normal</label>
                                                    <select name="status_gigi" class="form-select" id="status_gigi">
                                                        <option value="Normal" {{ ($rec?->status_gigi ?? $user->status_gigi) == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ ($rec?->status_gigi ?? $user->status_gigi) == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="catatan_gigi" class="form-label">Catatan</label>
                                                    <textarea name="catatan_gigi" rows="4" class="form-control" id="catatan_gigi">{{ $rec?->catatan_gigi ?? $user->catatan_gigi }}</textarea>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="keterangan_gigi" class="form-label">Keterangan</label>
                                                    <textarea name="keterangan_gigi" rows="4" class="form-control" id="keterangan_gigi">{{ $rec?->keterangan_gigi ?? $user->keterangan_gigi }}</textarea>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-end justify-content-end mt-4">
                                                <button type="button" class="btn btn-warning" id="btnSaveGigi" onclick="saveAdminData('gigiForm', 'update-gigi', 'pemeriksaan-narkoba')">
                                                    Simpan Perubahan & Selanjutnya <i class="ri-arrow-right-line me-1"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-pemeriksaan-narkoba" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-narkoba-tab">
                                <div class="d-flex mb-2">
                                    <div class="w-100">
                                        <p class="text-muted fw-bold">Pemeriksaan Narkoba</p>
                                        <form id="narkobaForm">
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label class="form-label">AMP : Amphetamines (Amfetamin)</label>
                                                    <div class="col-md-12">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio" name="amp" id="narkoba_amp0" value="Negatif" {{ ($rec?->amp ?? $user->amp) == 'Negatif' || empty($rec?->amp ?? $user->amp) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="narkoba_amp0">Negatif</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="amp" id="narkoba_amp1" value="Positif" {{ ($rec?->amp ?? $user->amp) == 'Positif' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="narkoba_amp1">Positif</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="form-label">MOP: Morphine (Morfina)</label>
                                                    <div class="col-md-12">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio" name="mop" id="narkoba_mop0" value="Negatif" {{ ($rec?->mop ?? $user->mop) == 'Negatif' || empty($rec?->mop ?? $user->mop) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="narkoba_mop0">Negatif</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="mop" id="narkoba_mop1" value="Positif" {{ ($rec?->mop ?? $user->mop) == 'Positif' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="narkoba_mop1">Positif</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 mt-4">
                                                    <label class="form-label">THC: Tetrahydrocannabinol (Tetrahidrokannabinol)</label>
                                                    <div class="col-md-12">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio" name="thc" id="thc0" value="Negatif" {{ ($rec?->thc ?? $user->thc) == 'Negatif' || empty($rec?->thc ?? $user->thc) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="thc0">Negatif</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="thc" id="thc1" value="Positif" {{ ($rec?->thc ?? $user->thc) == 'Positif' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="thc1">Positif</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-end justify-content-end mt-4">
                                                <button type="button" class="btn btn-warning" id="btnSaveNarkoba" onclick="saveAdminData('narkobaForm', 'update-narkoba', 'berkas')">
                                                    Simpan Perubahan & Selanjutnya <i class="ri-arrow-right-line me-1"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-berkas" role="tabpanel" aria-labelledby="v-pills-berkas-tab">
                                <div class="d-flex mb-2">
                                    <div class="w-100">
                                        <p class="text-muted fw-bold">Pemeriksaan Berkas Fisik (PDF)</p>
                                        <form id="berkasForm">
                                            <div class="row g-4 mb-4">
                                                <div class="col-md-6 border-end pe-4">
                                                    <div class="text-center mb-3">
                                                        <h5 class="text-primary"><i class="ri-file-pdf-line fs-1"></i></h5>
                                                        <h6>Dokumen Hasil Uji Kesehatan</h6>
                                                        @if ($user->file_kesehatan)
                                                        <a href="{{ asset('storage/uploads/kesehatan/' . $user->file_kesehatan) }}" target="_blank" class="btn btn-sm btn-outline-primary w-100"><i class="ri-eye-line"></i> Lihat Berkas</a>
                                                        @endif
                                                    </div>
                                                    <label class="form-label">Status File Kesehatan</label>
                                                    <select name="status_file_kesehatan" class="form-select">
                                                        <option value="">-- Pilih Status --</option>
                                                        <option value="Verified" {{ $user->status_file_kesehatan == 'Verified' ? 'selected' : '' }}>Valid (Sesuai)</option>
                                                        <option value="Rejected" {{ $user->status_file_kesehatan == 'Rejected' ? 'selected' : '' }}>Revisi (Buram/Salah)</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="text-center mb-3">
                                                        <h5 class="text-danger"><i class="ri-file-pdf-line fs-1"></i></h5>
                                                        <h6>Dokumen Hasil Lab Narkoba</h6>
                                                        @if ($user->file_narkoba)
                                                        <a href="{{ asset('storage/uploads/narkoba/' . $user->file_narkoba) }}" target="_blank" class="btn btn-sm btn-outline-danger w-100"><i class="ri-eye-line"></i> Lihat Berkas</a>
                                                        @endif
                                                    </div>
                                                    <label class="form-label">Status File Narkoba</label>
                                                    <select name="status_file_narkoba" class="form-select">
                                                        <option value="">-- Pilih Status --</option>
                                                        <option value="Verified" {{ $user->status_file_narkoba == 'Verified' ? 'selected' : '' }}>Valid (Sesuai)</option>
                                                        <option value="Rejected" {{ $user->status_file_narkoba == 'Rejected' ? 'selected' : '' }}>Revisi (Buram/Salah)</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-end justify-content-end mt-4">
                                                <button type="button" class="btn btn-warning" id="btnSaveBerkas" onclick="saveAdminData('berkasForm', 'update-berkas', 'keputusan')">
                                                    Simpan Berkas & Lanjut Kesimpulan <i class="ri-arrow-right-line me-1"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-keputusan" role="tabpanel" aria-labelledby="v-pills-keputusan-tab">
                                <div class="d-flex mb-2">
                                    <div class="w-100">
                                        <p class="text-muted fw-bold">Kesimpulan Medis & Keputusan Akhir</p>

                                        <div id="success-alert" class="alert alert-success shadow-sm mb-4" style="display:none;">
                                            <h5 id="success-title" class="alert-heading fw-bold"><i class="ri-checkbox-circle-fill"></i> </h5>
                                            <p id="success-message" class="mb-2"></p>
                                            <hr>
                                            <ul id="success-parameter" class="mb-0 ms-2"></ul>
                                        </div>

                                        <div id="danger-alert" class="alert alert-danger shadow-sm mb-4" style="display:none;">
                                            <h5 id="danger-title" class="alert-heading fw-bold"><i class="ri-close-circle-fill"></i> </h5>
                                            <p id="danger-message" class="mb-2"></p>
                                            <hr>
                                            <ul id="danger-parameter" class="mb-0 ms-2"></ul>
                                        </div>
                                        <form id="keputusanForm">
                                            <div class="row g-3 mb-4">
                                                <div class="col-sm-12">
                                                    <label class="form-label fw-bold text-primary">Riwayat Penyakit (Jika Ada)</label>
                                                    <textarea name="riwayat_penyakit" rows="2" class="form-control" placeholder="Tuliskan riwayat penyakit peserta...">{{ $rec?->riwayat_penyakit ?? '' }}</textarea>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="form-label fw-bold text-primary">Kesimpulan Pemeriksaan</label>
                                                    <textarea name="kesimpulan" id="input_kesimpulan" rows="3" class="form-control bg-light" placeholder="Kesimpulan otomatis dari sistem..." readonly>{{ $rec?->kesimpulan ?? '' }}</textarea>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="form-label fw-bold text-primary">Rekomendasi</label>
                                                    <div class="col-md-12 p-3 border rounded bg-light">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio" name="rekomendasi" id="rekomendasi1" value="Dapat" {{ ($rec?->rekomendasi == 'Dapat') ? 'checked' : '' }}>
                                                            <label class="form-check-label fw-bold text-success" for="rekomendasi1">
                                                                Dapat
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio" name="rekomendasi" id="rekomendasi2" value="Tidak Dapat" {{ ($rec?->rekomendasi == 'Tidak Dapat') ? 'checked' : '' }}>
                                                            <label class="form-check-label fw-bold text-danger" for="rekomendasi2">
                                                                Tidak Dapat
                                                            </label>
                                                        </div>
                                                        <span class="text-muted d-block mt-2" style="font-size: 0.85rem;">*mengikuti pendidikan pada institusi yang dituju.</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 text-center border border-2 p-4 bg-light rounded mt-4">
                                                <h5 class="mb-4">Selesaikan Proses Verifikasi Peserta?</h5>
                                                <button type="button" class="btn btn-success btn-lg me-3" onclick="setujuVerifikasi()">
                                                    <i class="ri-check-double-line"></i> Verifikasi
                                                </button>
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
    </div>
</div>
@endsection

@push('after-script')
<script>
    var applicant_id = "{{ $user->id }}";

    // Teks default untuk tombol
    var save_text = 'Simpan Perubahan & Selanjutnya <i class="ri-arrow-right-line"></i>';
    var setuju_text = '<i class="ri-check-double-line"></i> Simpan Keputusan & Validasi Peserta';
    var tolak_text = '<i class="ri-close-circle-line"></i> Tolak Formulir / Minta Revisi';

    // Animasi Loading
    var loading_animation = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Menyimpan...';

    // EVENT TRIGGER KETIKA TAB BERUBAH
    $(document).ready(function() {
        $('a[data-bs-toggle="pill"]').on('shown.bs.tab', function(e) {
            var targetTab = $(e.target).attr("href");
            if (targetTab === '#v-pills-keputusan') {
                loadDataKeputusan();
            }
        });
    });

    // FUNGSI AJAX KHUSUS KEPUTUSAN & SISTEM PAKAR
    function loadDataKeputusan() {
        $('#input_kesimpulan').val('Sedang menghitung kesimpulan otomatis...');
        $('#success-alert, #danger-alert').hide();

        $.ajax({
            url: "{{ url('/admin/verification/get-kesimpulan/') }}/" + applicant_id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                let alertBox, titleEl, messageEl, paramEl;

                // 1. Atur Kotak Alert Berdasarkan Status
                if (data.status === true) {
                    alertBox = $('#success-alert');
                    titleEl = $('#success-title');
                    messageEl = $('#success-message');
                    paramEl = $('#success-parameter');

                    $('#input_kesimpulan').val("Memenuhi syarat fisik untuk mengikuti pendidikan.");
                } else {
                    alertBox = $('#danger-alert');
                    titleEl = $('#danger-title');
                    messageEl = $('#danger-message');
                    paramEl = $('#danger-parameter');

                    $('#input_kesimpulan').val(data.alasan);
                }

                // 2. Tampilkan isi alert (Hasil & Alasan)
                alertBox.show();
                titleEl.html((data.status ? '<i class="ri-checkbox-circle-fill"></i> ' : '<i class="ri-close-circle-fill"></i> ') + data.hasil + ' — ' + data.kesimpulan);
                messageEl.text(data.alasan);

                // 3. Tampilkan Parameter (Tinggi Badan, Buta Warna, dll)
                paramEl.empty();
                if (data.parameter) {
                    $.each(data.parameter, function(key, value) {
                        const label = key.replace(/_/g, ' ').toUpperCase();
                        paramEl.append(`<li><strong>${label}</strong>: ${value}</li>`);
                    });
                }

                // 4. Isi Form Riwayat Penyakit
                $('textarea[name="riwayat_penyakit"]').val(data.riwayat_penyakit);

                // 5. TRIGGER RADIO BUTTON OTOMATIS (Dapat / Tidak Dapat)
                $('input[name="rekomendasi"]').prop('checked', false); // Bersihkan pilihan sebelumnya
                if (data.kesimpulan) {
                    $('input[name="rekomendasi"][value="' + data.kesimpulan + '"]').prop('checked', true);
                }
            },
            error: function() {
                $('#input_kesimpulan').val('Gagal memuat kesimpulan otomatis. Silakan cek koneksi atau server.');
            }
        });
    }

    // Pindah Tab Otomatis
    function moveTab(tabFrom, tabTo) {
        var triggerEl = document.querySelector('#v-pills-' + tabTo + '-tab');
        if (triggerEl) {
            new bootstrap.Tab(triggerEl).show();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    }

    // Notifikasi Toast
    function toast(message, type) {
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: type,
            title: message,
            showConfirmButton: false,
            timer: 3000
        });
    }

    // FUNGSI UPDATE BADGE (BARU)
    function updateBadgeDinamis(endpoint) {
        var tabId = '';
        var titleText = '';

        if (endpoint === 'update-antropometri') {
            tabId = 'v-pills-pemeriksaan-antropometri-tab';
            titleText = 'Pemeriksaan Antropometri';
        } else if (endpoint === 'update-fisik') {
            tabId = 'v-pills-pemeriksaan-fisik-tab';
            titleText = 'Pemeriksaan Fisik';
        } else if (endpoint === 'update-fisik-2') {
            tabId = 'v-pills-pemeriksaan-fisik-2-tab';
            titleText = 'Pemeriksaan Fisik 2';
        } else if (endpoint === 'update-gigi') {
            tabId = 'v-pills-pemeriksaan-gigi-tab';
            titleText = 'Pemeriksaan Gigi';
        } else if (endpoint === 'update-narkoba') {
            tabId = 'v-pills-pemeriksaan-narkoba-tab';
            titleText = 'Pemeriksaan Narkoba';
        } else if (endpoint === 'update-berkas') {
            tabId = 'v-pills-berkas-tab';
            titleText = 'Pemeriksaan Berkas';
        }

        if (tabId !== '') {
            $('#' + tabId).html('<span>' + titleText + '</span> <span class="badge bg-success"><i class="ri-check-double-line"></i> Verif</span>');
        }
    }

    // ==========================================================
    // FUNGSI UTAMA PENYIMPANAN AJAX PER TAB
    // ==========================================================
    function saveAdminData(formId, endpoint, nextTabId) {
        var btn = $('#' + formId).find('button[type="button"]');
        btn.html(loading_animation).attr('disabled', true); // SET LOADING

        var formData = new FormData($('#' + formId)[0]);
        formData.append("_token", "{{ csrf_token() }}");

        $.ajax({
            url: "{{ url('/admin/verification/') }}/" + endpoint + "/" + applicant_id,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status) {
                    toast("Berhasil! " + data.message, "success");
                    updateBadgeDinamis(endpoint);
                    moveTab('', nextTabId);
                } else {
                    Swal.fire('Error', data.message, 'error');
                }
                btn.html(save_text).attr('disabled', false); // MATIKAN LOADING
            },
            error: function(jqXHR) {
                var msg = jqXHR.responseJSON && jqXHR.responseJSON.message ? jqXHR.responseJSON.message : 'Terjadi kesalahan sistem.';
                Swal.fire('Error', msg, 'error');
                btn.html(save_text).attr('disabled', false); // MATIKAN LOADING
            }
        });
    }

    // ==========================================================
    // FUNGSI KEPUTUSAN VERIFIKASI (TOMBOL AKHIR)
    // ==========================================================
    function setujuVerifikasi() {
        Swal.fire({
            title: 'Verifikasi Valid?',
            text: "Data kesehatan dan narkoba peserta ini akan ditandai sebagai Valid dan memenuhi syarat.",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#6c757d',
            confirmButtonText: '<i class="ri-check-line"></i> Ya, Validasi!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // event.target melempar elemen tombol Setuju agar bisa di-loading
                updateStatus('Valid', '', event.target);
            }
        });
    }

    // Fungsi tolak dikembalikan
    function tolakVerifikasi() {
        Swal.fire({
            title: 'Tolak / Revisi Formulir?',
            text: "Formulir akan dikembalikan. Anda bisa memberikan catatan revisi.",
            icon: 'warning',
            input: 'textarea',
            inputPlaceholder: 'Tuliskan alasan/catatan revisi untuk peserta di sini...',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
            confirmButtonText: '<i class="ri-send-plane-line"></i> Kembalikan ke Peserta',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // event.target melempar elemen tombol Tolak agar bisa di-loading
                updateStatus('Revisi', result.value, event.target);
            }
        });
    }

    // Fungsi Update Status Keputusan
    function updateStatus(status, catatan, btnEl) {
        // Ambil elemen tombol yang diklik dan simpan teks aslinya
        var btn = $(btnEl);
        var originalText = status === 'Valid' ? setuju_text : tolak_text;

        // Ubah tombol jadi loading dan disable
        btn.html(loading_animation).attr('disabled', true);

        var formData = new FormData($('#keputusanForm')[0]);
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("status", status);
        if (catatan) formData.append("catatan_revisi", catatan);

        $.ajax({
            url: "{{ url('/admin/verification/update-status') }}/" + applicant_id,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(res) {
                if (res.status) {
                    Swal.fire({
                        title: 'Sukses',
                        text: 'Keputusan verifikasi dan kesimpulan berhasil disimpan.',
                        icon: 'success'
                    }).then(() => {
                        window.location.reload();
                    });
                } else {
                    Swal.fire('Error', res.message || 'Gagal menyimpan status.', 'error');
                    btn.html(originalText).attr('disabled', false); // Kembalikan tombol
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR, textStatus, errorThrown);
                Swal.fire('Error', 'Kesalahan server saat memproses verifikasi.', 'error');
                btn.html(originalText).attr('disabled', false); // Kembalikan tombol
            }
        });
    }
</script>
@endpush