@extends('master')

@section('title', 'Formulir Uji Kesehatan')
@section('menu', 'medical-form')
@section('menu_parent', 'ujikesehatan')

@section('content')
<?php $key_ = session()->get('key') ?>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Tahap Pemeriksaan</h4>

            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link mb-2" id="v-pills-data-peserta-tab" data-bs-toggle="pill" href="#v-pills-data-peserta" role="tab" aria-controls="v-pills-data-peserta" aria-selected="true">Data Peserta</a>
                            <a class="nav-link mb-2 active" id="v-pills-pemeriksaan-antropometri-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-antropometri" role="tab" aria-controls="v-pills-pemeriksaan-antropometri" aria-selected="false">Pemeriksaan Antropometri</a>
                            <a class="nav-link mb-2" id="v-pills-pemeriksaan-fisik-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-fisik" role="tab" aria-controls="v-pills-pemeriksaan-fisik" aria-selected="false">Pemeriksaan Fisik</a>
                            <a class="nav-link mb-2" id="v-pills-pemeriksaan-fisik-2-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-fisik-2" role="tab" aria-controls="v-pills-pemeriksaan-fisik-2" aria-selected="false">Pemeriksaan Fisik 2</a>
                            <a class="nav-link mb-2" id="v-pills-pemeriksaan-gigi-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-gigi" role="tab" aria-controls="v-pills-pemeriksaan-gigi" aria-selected="false">Pemeriksaan Gigi</a>
                            <a class="nav-link mb-2" id="v-pills-pemeriksaan-narkoba-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-narkoba" role="tab" aria-controls="v-pills-pemeriksaan-narkoba" aria-selected="false">Pemeriksaan Narkoba</a>
                            <a class="nav-link mb-2" id="v-pills-kesimpulan-tab" data-bs-toggle="pill" href="#v-pills-kesimpulan" role="tab" aria-controls="v-pills-kesimpulan" aria-selected="false">Kesimpulan</a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-9">
                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                            <div class="tab-pane fade" id="v-pills-data-peserta" role="tabpanel" aria-labelledby="v-pills-data-peserta-tab">
                                <div class="d-flex mb-2">
                                    <div class="row g-3">
                                        <div class="col-sm-12">
                                            <label for="nomor_peserta" class="form-label">Nomor Peserta</label>
                                            <input type="text" class="form-control-plaintext" id="nomor_peserta" placeholder="Enter name" value="{{ $applicant->nomor_peserta }}" readonly>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control-plaintext" id="nama" placeholder="Enter name" value="{{ $applicant->nama }}" readonly>
                                        </div>
                                        <!-- <div class="col-sm-12">
                                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="text" class="form-control-plaintext"
                                                id="tanggal_lahir" placeholder="Enter name"
                                                value="" readonly>
                                        </div> -->
                                        <div class="col-sm-12">
                                            <label for="study_program_name" class="form-label">Prodi Lulus</label>
                                            <input type="text" class="form-control-plaintext" id="study_program_name" placeholder=""
                                                value="{{ $applicant->study_program->name }}" readonly>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for="tgl_periksa" class="form-label">Tanggal Periksa</label>
                                            <input type="text" class="form-control-plaintext" id="tgl_periksa" placeholder="" value="{{ ($applicant->tgl_periksa ? date('d-m-Y', strtotime($applicant->tgl_periksa)):'-') }}" readonly>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for="tempat_periksa" class="form-label">Tempat Periksa</label>
                                            <input type="text" class="form-control-plaintext" id="tempat_periksa" placeholder="" value="{{ $applicant->tempat_periksa }}" readonly>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for="nama_petugas_registrasi" class="form-label">Petugas Registrasi</label>
                                            <input type="text" class="form-control-plaintext" id="nama_petugas_registrasi" placeholder="Enter name" value="{{ $applicant->petugas_registrasi->name }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="v-pills-pemeriksaan-antropometri" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-antropometri-tab">
                                <div class="d-flex mb-2">
                                    <form id="antropometriForm">
                                        <input type="hidden" name="id" id="id" value="{{ $applicant->id }}">
                                        <p class="text-muted">Pemeriksaan Antropometri</p>
                                        <div class="row g-3">
                                            <div class="col-sm-12">
                                                <label for="nama_lengkap" class="form-label">Nama</label>
                                                <input type="text" class="form-control-plaintext" id="nama" placeholder="" value="{{ $applicant->nama }}" readonly disabled>
                                            </div>
                                            <div class="col-sm-12">
                                                <h6 class="fw-semibold">Dokter</h6>
                                                <select name="dokter_id" id="dokter_id" class="dokter_id" required="required">
                                                    <?php foreach ($dokters as $dokter): ?>
                                                        <option value="<?= $dokter->id ?>"><?= $dokter->name ?></option>
                                                    <?php endforeach; ?>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                                <div class="text-danger text-error " id="dokter_id_error">
                                                    *error
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <h6 class="fw-semibold">Paramedis 1</h6>
                                                <select name="paramedis_1_id" id="paramedis_1_id" required="required">
                                                    <?php foreach ($paramediss as $paramedis): ?>
                                                        <option value="<?= $paramedis->id ?>"><?= $paramedis->name ?></option>
                                                    <?php endforeach; ?>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                                <div class="text-danger text-error " id="paramedis_1_id_error">
                                                    *error
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label">Tekanan Darah</label>

                                                <div class="input-group">
                                                    <input type="number"
                                                        class="form-control"
                                                        id="tekanan_darah_sistolik"
                                                        name="tekanan_darah_sistolik"
                                                        placeholder="Sistolik"
                                                        min="0"
                                                        required
                                                        value="">

                                                    <span class="input-group-text">/</span>

                                                    <input type="number"
                                                        class="form-control"
                                                        id="tekanan_darah_diastolik"
                                                        name="tekanan_darah_diastolik"
                                                        placeholder="Diastolik"
                                                        min="0"
                                                        required
                                                        value="">

                                                    <span class="input-group-text">mmHg</span>
                                                </div>

                                                <!-- error -->
                                                <div class="text-danger text-error " id="tekanan_darah_sistolik_error">
                                                    * Tekanan darah tidak valid
                                                </div>
                                                <div class="text-danger text-error " id="tekanan_darah_diastolik_error">
                                                    * Tekanan darah tidak valid
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="antro" class="form-label">Nadi</label>
                                                <div class="row" id="antro">
                                                    <div class="col-md-12">
                                                        <input type="number" class="form-control"
                                                            id="nadi" name="nadi" placeholder="" required value="">
                                                        <div class="text-danger text-error " id="nadi_error">
                                                            * Nadi tidak valid
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="tb" class="form-label">Tinggi Badan</label>

                                                <div class="input-group">
                                                    <input type="number"
                                                        class="form-control"
                                                        id="tinggi_badan"
                                                        name="tinggi_badan"
                                                        placeholder="Tinggi badan"
                                                        min="0"
                                                        required
                                                        value="">

                                                    <span class="input-group-text">cm</span>
                                                </div>

                                                <div class="text-danger text-error" id="tinggi_badan_error">
                                                    *Tinggi badan tidak valid
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="bb" class="form-label">Berat Badan</label>
                                                <div class="input-group">
                                                    <input type="number"
                                                        class="form-control"
                                                        id="berat_badan"
                                                        name="berat_badan"
                                                        placeholder="Berat badan"
                                                        min="0"
                                                        step="0.1"
                                                        required
                                                        value="">

                                                    <span class="input-group-text">kg</span>
                                                </div>

                                                <div class="text-danger text-error" id="berat_badan_error">
                                                    * Berat badan tidak valid
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label for="status_antropometri" class="form-label">Status Normal</label>
                                                <select name="status_antropometri" required="required" class="form-select form-control" id="status_antropometri">
                                                    <option value="Normal">Normal</option>
                                                    <option value="Kelainan">Kelainan</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="catatan_antropometri" class="form-label">Catatan</label>
                                                <div class="col-md-12">
                                                    <textarea name="catatan_antropometri" rows="3" class="form-control" id="catatan_antropometri"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="keterangan_antropometri" class="form-label">Keterangan</label>
                                                <div class="col-md-12">
                                                    <textarea name="keterangan_antropometri"
                                                        rows="3" class="form-control" id="keterangan_antropometri"></textarea>
                                                </div>
                                            </div>
                                            <?php if (can_access($permissions, $key_, 'edit')) { ?>
                                                <div class="d-flex align-items-end justify-content-end gap-3 mt-4">
                                                    <button type="button"
                                                        id="btnSaveAntropometri"
                                                        class="btn btn-success btn-load"
                                                        onclick="saveAntropometri();">
                                                        <i class="ri ri-save-line me-1"></i> Simpan
                                                    </button>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-pemeriksaan-fisik" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-fisik-tab">
                                <div class="d-flex mb-2">
                                    <form id="fisikForm">
                                        <input type="hidden" name="id" id="id" value="{{ $applicant->id }}">
                                        <p class="text-muted">Pemeriksaan Fisik</p>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="nama_lengkap" class="form-label">Nama</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control-plaintext"
                                                        id="" placeholder="Enter name"
                                                        value="{{ $applicant->nama }}" readonly disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="fw-semibold">Dokter</h6>
                                                    <select name="dokter_id" class="dokter_id" required="required">
                                                        <?php foreach ($dokters as $dokter): ?>
                                                            <option value="<?= $dokter->id ?>"><?= $dokter->name ?></option>
                                                        <?php endforeach; ?>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="dokter_id_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="fw-semibold">Paramedis 2</h6>
                                                    <select name="paramedis_2_id" required="required" id="paramedis_2_id">
                                                        <?php foreach ($paramediss as $paramedis): ?>
                                                            <option value="<?= $paramedis->id ?>"><?= $paramedis->name ?></option>
                                                        <?php endforeach; ?>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="paramedis_2_id_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Kulit</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_kulit" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_kulit" required="required" class="form-select mb-3" id="status_kulit">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="status_kulit_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_kulit" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_kulit" rows="3" class="form-control" id="catatan_kulit"></textarea>
                                                    <div class="text-danger text-error " id="catatan_kulit_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_kulit" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_kulit" rows="3" class="form-control" id="keterangan_kulit"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_kulit_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border mt-3 border-line"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Mata</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_mata" class="form-label">Status Normal Mata</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_mata" required="required" class="form-select mb-3" id="status_mata" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="status_mata_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="visus" class="form-label">Visus</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="visus" name="visus"
                                                        placeholder="visus" value="">
                                                    <div class="text-danger text-error " id="visus_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="buta_warna" class="form-label">Buta Warna</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="buta_warna" required="required" class="form-select mb-3" id="buta_warna" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Parsial">Parsial</option>
                                                        <option value="Total">Total</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="buta_warna_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_mata" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_mata"
                                                        rows="3" class="form-control" id="catatan_mata"></textarea>
                                                    <div class="text-danger text-error " id="catatan_mata_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_mata" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_mata"
                                                        rows="3" class="form-control" id="keterangan_mata"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_mata_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border mt-3 border-line"></div>
                                        </div>

                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Telinga</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_telinga" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="telinga_normal" required="required" class="form-select mb-3" id="status_telinga" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="status_telinga_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="telinga_kiri" class="form-label">Telinga Kiri</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="telinga_kiri" name="telinga_kiri"
                                                        placeholder="keterangan telinga kiri" value="">
                                                    <div class="text-danger text-error " id="telinga_kiri_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="telinga_kanan" class="form-label">Telinga Kanan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="telinga_kanan" name="telinga_kanan"
                                                        placeholder="keterangan telinga kanan" value="">
                                                    <div class="text-danger text-error " id="telinga_kanan_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_telinga" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_telinga"
                                                        rows="3" class="form-control" id="catatan_telinga"></textarea>
                                                    <div class="text-danger text-error " id="catatan_telinga_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_telinga" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_telinga"
                                                        rows="3" class="form-control" id="keterangan_telinga"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_telinga_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border mt-3 border-line"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Hidung</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_hidung" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_hidung" required="required" class="form-select mb-3" id="status_hidung" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="status_hidung_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_hidung" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_hidung"
                                                        rows="3" class="form-control" id="catatan_hidung"></textarea>
                                                    <div class="text-danger text-error " id="catatan_hidung_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_hidung" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_hidung"
                                                        rows="3" class="form-control" id="keterangan_hidung"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_hidung_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border mt-3 border-line"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Lidah</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_lidah" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_lidah" required="required" class="form-select mb-3" id="status_lidah" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_lidah" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_lidah"
                                                        rows="3" class="form-control" id="catatan_lidah"></textarea>
                                                    <div class="text-danger text-error " id="catatan_lidah_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_lidah" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_lidah"
                                                        rows="3" class="form-control" id="keterangan_lidah"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_lidah_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border mt-3 border-line"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Pharynx</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_pharynx" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_pharynx" required="required" class="form-select mb-3" id="status_pharynx" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_pharynx" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_pharynx"
                                                        rows="3" class="form-control" id="catatan_pharynx"></textarea>
                                                    <div class="text-danger text-error " id="catatan_pharynx_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_pharynx" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_pharynx"
                                                        rows="3" class="form-control" id="keterangan_pharynx"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_pharynx_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border mt-3 border-line"></div>
                                        </div>

                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Tonsil</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_tonsil" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_tonsil" required="required" class="form-select mb-3" id="status_tonsil" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_tonsil" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_tonsil"
                                                        rows="3" class="form-control" id="catatan_tonsil"></textarea>
                                                    <div class="text-danger text-error " id="catatan_tonsil_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_tonsil" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_tonsil"
                                                        rows="3" class="form-control" id="keterangan_tonsil"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_tonsil_error">
                                                        *error
                                                    </div>
                                                </div>
                                                <?php if (can_access($permissions, $key_, 'edit')) { ?>
                                                    <div class="d-flex align-items-end justify-content-end gap-3 mt-4">
                                                        <button type="button"
                                                            id="btnSaveFisik"
                                                            class="btn btn-success btn-load"
                                                            onclick="saveFisik();">
                                                            <i class="ri ri-save-line me-1"></i> Simpan
                                                        </button>
                                                    </div>
                                                <?php } ?>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-pemeriksaan-fisik-2" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-fisik-2-tab">
                                <div class="d-flex mb-2">
                                    <form id="fisik2Form">
                                        <input type="hidden" name="id" id="id" value="{{ $applicant->id }}">
                                        <p class="text-muted">Pemeriksaan Fisik 2</p>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="nama_lengkap" class="form-label">Nama</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control-plaintext"
                                                        id="" placeholder="Enter name"
                                                        value="{{ $applicant->nama }}" readonly disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="fw-semibold">Dokter</h6>
                                                    <select name="dokter_id" class="dokter_id" required="required">
                                                        <?php foreach ($dokters as $dokter): ?>
                                                            <option value="<?= $dokter->id ?>"><?= $dokter->name ?></option>
                                                        <?php endforeach; ?>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="dokter_id_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <h6 class="fw-semibold">Paramedis 3</h6>
                                                    <select name="paramedis_3_id" required="required" id="paramedis_3_id">
                                                        <?php foreach ($paramediss as $paramedis): ?>
                                                            <option value="<?= $paramedis->id ?>"><?= $paramedis->name ?></option>
                                                        <?php endforeach; ?>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="paramedis_3_id_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Thyroid</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_thyroid" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_thyroid" required="required" class="form-select mb-3" id="status_thyroid" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="status_thyroid_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_thyroid" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_thyroid"
                                                        rows="3" class="form-control" id="catatan_thyroid"></textarea>
                                                    <div class="text-danger text-error " id="catatan_thyroid_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_thyroid" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_thyroid"
                                                        rows="3" class="form-control" id="keterangan_thyroid"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_thyroid_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border mt-3 border-line"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Jantung</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_jantung" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_jantung" required="required" class="form-select mb-3" id="status_jantung" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_jantung" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_jantung"
                                                        rows="3" class="form-control" id="catatan_jantung"></textarea>
                                                    <div class="text-danger text-error " id="catatan_jantung_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_jantung" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_jantung"
                                                        rows="3" class="form-control" id="keterangan_jantung"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_jantung_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border mt-3 border-line"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Paru-Paru</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_paru_paru" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_paru_paru" required="required" class="form-select mb-3" id="status_paru_paru" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_paru_paru" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_paru_paru"
                                                        rows="3" class="form-control" id="catatan_paru_paru"></textarea>
                                                    <div class="text-danger text-error " id="catatan_paru_paru_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_paru_paru" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_paru_paru"
                                                        rows="3" class="form-control" id="keterangan_paru_paru"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_paru_paru_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border mt-3 border-line"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Abdomen</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_abdomen" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_abdomen" required="required" class="form-select mb-3" id="status_abdomen" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_abdomen" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_abdomen"
                                                        rows="3" class="form-control" id="catatan_abdomen"></textarea>
                                                    <div class="text-danger text-error " id="catatan_abdomen_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_abdomen" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_abdomen"
                                                        rows="3" class="form-control" id="keterangan_abdomen"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_abdomen_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border mt-3 border-line"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Refleks</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_refleks_pupil" class="form-label">Refleks Pupil</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_refleks_pupil" required="required" class="form-select mb-3" id="status_refleks_pupil" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="status_refleks_pupil_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_refleks_patela" class="form-label">Refleks Patela</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_refleks_patela" required="required" class="form-select mb-3" id="status_refleks_patela" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="status_refleks_patela_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_refleks_achiles" class="form-label">Refleks Achiles</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_refleks_achiles" required="required" class="form-select mb-3" id="status_refleks_achiles" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="status_refleks_achiles_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_refleks" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_refleks"
                                                        rows="3" class="form-control" id="catatan_refleks"></textarea>
                                                    <div class="text-danger text-error " id="catatan_refleks_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_refleks" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_refleks"
                                                        rows="3" class="form-control" id="keterangan_refleks"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_refleks_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border mt-3 border-line"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Thorax</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_thorax" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_thorax" required="required" class="form-select mb-3" id="status_thorax" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_thorax" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_thorax"
                                                        rows="3" class="form-control" id="catatan_thorax"></textarea>
                                                    <div class="text-danger text-error " id="catatan_thorax_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_thorax" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_thorax"
                                                        rows="3" class="form-control" id="keterangan_thorax"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_thorax_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border mt-3 border-line"></div>
                                        </div>

                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Bicara</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_kemampuan_bicara" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_kemampuan_bicara" required="required" class="form-select mb-3" id="status_kemampuan_bicara" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_kemampuan_bicara" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_kemampuan_bicara"
                                                        rows="3" class="form-control" id="catatan_kemampuan_bicara"></textarea>
                                                    <div class="text-danger text-error " id="catatan_kemampuan_bicara_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_kemampuan_bicara" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_kemampuan_bicara"
                                                        rows="3" class="form-control" id="keterangan_kemampuan_bicara"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_kemampuan_bicara_error">
                                                        *error
                                                    </div>
                                                </div>
                                                <?php if (can_access($permissions, $key_, 'edit')) { ?>
                                                    <div class="d-flex align-items-end justify-content-end gap-3 mt-4">
                                                        <button type="button"
                                                            id="btnSaveFisik2"
                                                            class="btn btn-success btn-load"
                                                            onclick="saveFisik2();">
                                                            <i class="ri ri-save-line me-1"></i> Simpan
                                                        </button>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-pemeriksaan-gigi" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-gigi-tab">
                                <div class="d-flex mb-2">
                                    <form id="gigiForm">
                                        <input type="hidden" name="id" id="id" value="{{ $applicant->id }}">
                                        <p class="text-muted">Pemeriksaan Gigi</p>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="nama_lengkap" class="form-label">Nama</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control-plaintext"
                                                        id="nama" placeholder="Enter name"
                                                        value="{{ $applicant->nama }}" readonly disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <h6 class="fw-semibold">Dokter Gigi</h6>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="dokter_gigi_id" id="dokter_gigi_id" required="required" class="js-example-basic-single">
                                                        <?php foreach ($dokter_gigis as $dokter): ?>
                                                            <option value="<?= $dokter->id ?>"><?= $dokter->name ?></option>
                                                        <?php endforeach; ?>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="dokter_gigi_id_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <h6 class="fw-semibold">Perawat Gigi</h6>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="perawat_gigi_id" id="perawat_gigi_id" required="required" class="js-example-basic-single">
                                                        <?php foreach ($perawat_gigis as $perawat): ?>
                                                            <option value="<?= $perawat->id ?>"><?= $perawat->name ?></option>
                                                        <?php endforeach; ?>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="perawat_gigi_id_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Gigi</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="status_gigi" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="status_gigi" required="required" class="form-select mb-3" id="status_gigi" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Kelainan">Kelainan</option>
                                                    </select>
                                                    <div class="text-danger text-error " id="status_gigi_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="catatan_gigi" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="catatan_gigi"
                                                        rows="3" class="form-control" id="catatan_gigi"></textarea>
                                                    <div class="text-danger text-error " id="catatan_gigi_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="keterangan_gigi" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="keterangan_gigi"
                                                        rows="3" class="form-control" id="keterangan_gigi"></textarea>
                                                    <div class="text-danger text-error " id="keterangan_gigi_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border mt-3 border-line"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <?php if (can_access($permissions, $key_, 'edit')) { ?>
                                                    <div class="d-flex align-items-end justify-content-end gap-3 mt-4">
                                                        <button type="button"
                                                            id="btnSaveGigi"
                                                            class="btn btn-success btn-load"
                                                            onclick="saveGigi();">
                                                            <i class="ri ri-save-line me-1"></i> Simpan
                                                        </button>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-pemeriksaan-narkoba" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-narkoba-tab">
                                <div class="d-flex mb-2">
                                    <form id="narkobaForm">
                                        <input type="hidden" name="id" id="id" value="{{ $applicant->id }}">
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <h6 class="fw-semibold">Petugas Narkoba</h6>
                                            </div>
                                            <div class="col-lg-9">
                                                <select name="petugas_narkoba_id" id="petugas_narkoba_id" required="required" class="js-example-basic-single">
                                                    <?php foreach ($petugas_narkobas as $petugas): ?>
                                                        <option value="<?= $petugas->id ?>"><?= $petugas->name ?></option>
                                                    <?php endforeach; ?>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                                <div class="text-danger text-error " id="petugas_narkoba_id_error">
                                                    *error
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-muted">Pemeriksaan Narkoba</p>
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <label for="antro_keterangan" class="form-label">AMP : Amphetamines (Amfetamin)</label>
                                                <div class="col-md-12">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="amp" id="narkoba_amp0" value="Negatif" checked>
                                                        <label class="form-check-label" for="narkoba_amp0">
                                                            Negatif
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="amp" id="narkoba_amp1" value="Positif">
                                                        <label class="form-check-label" for="narkoba_amp1">
                                                            Positif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="antro_keterangan" class="form-label">MOP: Morphine (Morfina)</label>
                                                <div class="col-md-12">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="mop" id="narkoba_mop0" value="Negatif" checked>
                                                        <label class="form-check-label" for="narkoba_mop0">
                                                            Negatif
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="mop" id="narkoba_mop1" value="Positif">
                                                        <label class="form-check-label" for="narkoba_mop1">
                                                            Positif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="narkoba_" class="form-label">THC: Tetrahydrocannabinol (Tetrahidrokannabinol)</label>
                                                <div class="col-md-12">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="thc" id="thc0" value="Negatif" checked>
                                                        <label class="form-check-label" for="thc0">
                                                            Negatif
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="thc" id="thc1" value="Positif">
                                                        <label class="form-check-label" for="thc1">
                                                            Positif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <?php if (can_access($permissions, $key_, 'edit')) { ?>
                                                    <div class="d-flex align-items-end justify-content-end gap-3 mt-4">
                                                        <button type="button"
                                                            id="btnSaveNarkoba"
                                                            class="btn btn-success btn-load"
                                                            onclick="saveNarkoba();">
                                                            <i class="ri ri-save-line me-1"></i> Simpan
                                                        </button>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-kesimpulan" role="tabpanel" aria-labelledby="v-pills-kesimpulan-tab">
                                <div class="d-flex mb-2">
                                    <form id="kesimpulanForm">
                                        <input type="hidden" name="id" id="id" value="{{ $applicant->id }}">
                                        <p class="text-muted">Hasil Akhir</p>
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <label for="riwayat_penyakit" class="form-label">Riwayat Penyakit</label>
                                                <div class="col-md-12">
                                                    <textarea name="catatan_riwayat_penyakit"
                                                        rows="3" class="form-control" id="riwayat_penyakit"></textarea>
                                                    <div class="text-danger text-error " id="riwayat_penyakit_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="kesimpulan" class="form-label">Kesimpulan</label>
                                                <div class="col-md-12">
                                                    <textarea name="kesimpulan"
                                                        rows="3" class="form-control" id="kesimpulan"></textarea>
                                                    <div class="text-danger text-error " id="kesimpulan_error">
                                                        *error
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="rekomendasi" class="form-label">Rekomendasi</label>
                                                <div class="col-md-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rekomendasi" id="rekomendasi2" value="Tidak Dapat">
                                                        <label class="form-check-label" for="rekomendasi2">
                                                            Tidak Dapat
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="rekomendasi" id="rekomendasi1" value="Dapat">
                                                        <label class="form-check-label" for="rekomendasi1">
                                                            Dapat
                                                        </label>
                                                    </div>
                                                    <span class="text-muted">mengikuti pendidikan pada institusi yang dituju.</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="alert alert-success" id="success-alert" role="alert">
                                                    <h5 class="alert-heading mb-2">✅ <span id="success-title"></span></h5>
                                                    <p id="success-message" class="mb-2"></p>
                                                    <hr>
                                                    <ul id="success-parameter" class="mb-0"></ul>
                                                </div>

                                                <div class="alert alert-danger" id="danger-alert" role="alert">
                                                    <h5 class="alert-heading mb-2">❌ <span id="danger-title"></span></h5>
                                                    <p id="danger-message" class="mb-2"></p>
                                                    <hr>
                                                    <ul id="danger-parameter" class="mb-0"></ul>
                                                </div>

                                            </div>
                                            <div class="col">
                                                <?php if (can_access($permissions, $key_, 'edit')) { ?>
                                                    <div class="d-flex align-items-end justify-content-end gap-3 mt-4">
                                                        <button type="button"
                                                            id="btnSaveKesimpulan"
                                                            class="btn btn-success btn-load"
                                                            onclick="saveKesimpulan();">
                                                            <i class="ri ri-save-line me-1"></i> Simpan
                                                        </button>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!--  end col -->
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

@endsection

@push('after-script')
<script type="text/javascript">
    var loading_animation = '<span class="d-flex align-items-center"><span class="flex-grow-1 me-2" style="margin-right:5px;">Loading...</span><span class="spinner-border flex-shrink-0" role="status" style="width: 1rem;height:1rem;"></span></span>';
    var edit_loading_animation = '<span class="d-flex align-items-center"><span class="flex-grow-1 me-2" style="font-size:10px;">Loading...</span><span class="spinner-border flex-shrink-0" role="status" style="width:10px;height:10px;"></span></span>';
    var save_text = '<i class="ri ri-save-line label-icon align-middle fs-16 me-2"></i> <span class="align-middle">Simpan</span>';
    var update_text = '<i class="ri ri-save-line label-icon align-middle fs-16 me-2"></i> <span class="align-middle">Update</span>';

    var table;

    $(document).ready(function() {
        $('#paramedis_1_id').select2();
        $('#paramedis_2_id').select2();
        $('#paramedis_3_id').select2();
        $('#dokter_gigi_id').select2();
        $('#perawat_gigi_id').select2();
        $('#petugas_narkoba_id').select2();
        $('.dokter_id').select2();
        $('.text-error').text('');
        $('#success-alert').hide();
        $('#danger-alert').hide();
        loadData();
    });

    function loadData() {
        $('#success-alert').hide();
        $('#danger-alert').hide();
        $.ajax({
            url: "{{ url('/admin/medical-form/get/'.$applicant->id) }}",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                console.log(data);
                //ANTROPOMETRI
                if (data.dokter != "") {
                    $('.dokter_id').val(data.dokter_id).trigger('change');
                }
                if (data.paramedis_1 != "") {
                    $('#paramedis_1_id').val(data.paramedis_1_id).trigger('change');
                }

                if (data.paramedis_2 != "") {
                    $('#paramedis_2_id').val(data.paramedis_2_id).trigger('change');
                }

                if (data.paramedis_3 != "") {
                    $('#paramedis_3_id').val(data.paramedis_3_id).trigger('change');
                }

                if (data.dokter_gigi != "") {
                    $('#dokter_gigi_id').val(data.dokter_gigi_id).trigger('change');
                }

                if (data.perawat_gigi != "") {
                    $('#perawat_gigi_id').val(data.perawat_gigi_id).trigger('change');
                }

                if (data.petugas_narkoba != "") {
                    $('#petugas_narkoba_id').val(data.petugas_narkoba_id).trigger('change');
                }

                // $('#paramedis_1_id').val(data.paramedis_1_id).trigger('change');
                // $('#paramedis_2_id').val(data.paramedis_2_id).trigger('change');
                // $('#paramedis_3_id').val(data.paramedis_3_id).trigger('change');
                // $('#dokter_gigi_id').val(data.dokter_gigi_id).trigger('change');
                // $('#perawat_gigi_id').val(data.perawat_gigi_id).trigger('change');

                const exclude = ['dokter_id', 'paramedis_1_id', 'paramedis_2_id', 'paramedis_3_id',
                    'dokter_gigi_id', 'perawat_gigi_id', 'petugas_narkoba_id'
                ];

                $.each(data, function(key, value) {
                    if (exclude.includes(key)) return;

                    const el = $('#' + key);
                    if (el.length) {
                        el.val(value);
                    }
                });

                if (data.amp !== undefined) {
                    $('input[name="amp"][value="' + data.amp + '"]').prop('checked', true);
                }
                if (data.mop !== undefined) {
                    $('input[name="mop"][value="' + data.mop + '"]').prop('checked', true);
                }
                if (data.thc !== undefined) {
                    $('input[name="thc"][value="' + data.thc + '"]').prop('checked', true);
                }

                $('input[name="rekomendasi"]').prop('checked', false);
                $('input[name="rekomendasi"][value="' + data.rekomendasi + '"]').prop('checked', true);

                if (data.tinggi_badan !== undefined && data.buta_warna !== undefined && data.rekomendasi == undefined) {
                    cekKesimpulan(data.id);
                }

                // $('#lingkar_kepala').val(data.lingkar_kepala);
                // $('#lingkar_perut').val(data.lingkar_perut);
                // $('#imt').val(data.imt);
                // $('#status_gizi').val(data.status_gizi);
                // $('#antropometri_keterangan').val(data.keterangan);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // alert('Error adding / update data');
                // showAlert("Error!", textStatus, "error");
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
                // $('#btnSave').attr('disabled', false); //set button enable 
            }
        });
    }

    function cekKesimpulan(id) {
        $.ajax({
            url: "{{ url('/admin/medical-form/get-kesimpulan') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                "id": id
            },
            dataType: "JSON",
            success: function(data) {
                console.log(data);


                // Tentukan alert berdasarkan status
                let alertBox, titleEl, messageEl, paramEl;
                $('#kesimpulan').val(data.kesimpulan);

                $('input[name="rekomendasi"]').prop('checked', false);
                if (data.kesimpulan) {
                    $('input[name="rekomendasi"][value="' + data.kesimpulan + '"]').prop('checked', true);
                }

                if (data.status === true) {
                    alertBox = $('#success-alert');
                    titleEl = $('#success-title');
                    messageEl = $('#success-message');
                    paramEl = $('#success-parameter');
                    $('#success-alert').show();
                } else {
                    alertBox = $('#danger-alert');
                    titleEl = $('#danger-title');
                    messageEl = $('#danger-message');
                    paramEl = $('#danger-parameter');
                    $('#danger-alert').show();
                    $('#kesimpulan').val(data.kesimpulan + " (" + data.alasan_singkat + ")");
                }

                // Isi judul (hasil + kesimpulan)
                titleEl.text(data.hasil + ' — ' + data.kesimpulan);

                // Isi alasan
                messageEl.text(data.alasan || data.message);

                // Isi parameter
                paramEl.empty();
                if (data.parameter) {
                    $.each(data.parameter, function(key, value) {
                        const label = key.replace(/_/g, ' ').toUpperCase();
                        paramEl.append(
                            `<li><strong>${label}</strong>: ${value}</li>`
                        );
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    }

    function moveTab(tabFrom, tabTo) {
        $('#v-pills-' + tabFrom + '-tab').removeClass('active');
        $('#v-pills-' + tabFrom).removeClass('show active');
        $('#v-pills-' + tabTo + '-tab').addClass('active');
        $('#v-pills-' + tabTo).addClass('show active');
    }
    <?php if (can_access($permissions, $key_, 'edit')) { ?>

        function saveAntropometri() {
            $('.text-error').empty(); // clear error string
            $('#btnSaveAntropometri').html(loading_animation); //change button text
            $('#btnSaveAntropometri').attr('disabled', true); //set button disable 

            var formData = new FormData($('#antropometriForm')[0]);
            formData.append("_token", "{{ csrf_token() }}");

            formData.forEach((value, key) => {
                console.log(key, value);
            });

            $.ajax({
                url: "{{ url('/admin/medical-form/update-antropometri') }}",
                type: "POST",
                data: formData,
                dataType: "JSON",
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(data);
                    if (data.status) //if success close modal and reload ajax table
                    {
                        var text = data.message;
                        toast("Berhasil! " + text, "success", 3000);
                        loadData();
                        moveTab('pemeriksaan-antropometri', 'pemeriksaan-fisik');
                    } else {
                        console.log(data.message);
                        for (const [key, value] of Object.entries(data.message)) {
                            $('#' + key + '_error').html('*' + value);
                        }
                    }
                    $('#btnSaveAntropometri').html(save_text);
                    $('#btnSaveAntropometri').attr('disabled', false); //set button enable 
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // alert('Error adding / update data');
                    showAlert("Error!", textStatus, "error");
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                    // $('#btnSave').attr('disabled', false); //set button enable 
                }
            });
        }

        function saveFisik() {
            $('.text-error').empty(); // clear error string
            $('#btnSaveFisik').html(loading_animation); //change button text
            $('#btnSaveFisik').attr('disabled', true); //set button disable 

            var formData = new FormData($('#fisikForm')[0]);
            formData.append("_token", "{{ csrf_token() }}");

            formData.forEach((value, key) => {
                console.log(key, value);
            });

            $.ajax({
                url: "{{ url('/admin/medical-form/update-fisik') }}",
                type: "POST",
                data: formData,
                dataType: "JSON",
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(data);
                    if (data.status) //if success close modal and reload ajax table
                    {
                        var text = data.message;
                        toast("Berhasil! " + text, "success", 3000);
                        loadData();
                        moveTab('pemeriksaan-fisik', 'pemeriksaan-fisik-2');
                    } else {
                        console.log(data.message);
                        for (const [key, value] of Object.entries(data.message)) {
                            $('#' + key + '_error').html('*' + value);
                        }
                    }
                    $('#btnSaveFisik').html(save_text);
                    $('#btnSaveFisik').attr('disabled', false); //set button enable 
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // alert('Error adding / update data');
                    showAlert("Error!", textStatus, "error");
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                    // $('#btnSave').attr('disabled', false); //set button enable 
                }
            });
        }

        function saveFisik2() {
            $('.text-error').empty(); // clear error string
            $('#btnSaveFisik2').html(loading_animation); //change button text
            $('#btnSaveFisik2').attr('disabled', true); //set button disable 

            var formData = new FormData($('#fisik2Form')[0]);
            formData.append("_token", "{{ csrf_token() }}");

            formData.forEach((value, key) => {
                console.log(key, value);
            });

            $.ajax({
                url: "{{ url('/admin/medical-form/update-fisik-2') }}",
                type: "POST",
                data: formData,
                dataType: "JSON",
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(data);
                    if (data.status) //if success close modal and reload ajax table
                    {
                        var text = data.message;
                        toast("Berhasil! " + text, "success", 3000);
                        loadData();
                        moveTab('pemeriksaan-fisik-2', 'pemeriksaan-gigi');
                    } else {
                        console.log(data.message);
                        for (const [key, value] of Object.entries(data.message)) {
                            $('#' + key + '_error').html('*' + value);
                        }
                    }
                    $('#btnSaveFisik2').html(save_text);
                    $('#btnSaveFisik2').attr('disabled', false); //set button enable 
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // alert('Error adding / update data');
                    showAlert("Error!", textStatus, "error");
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                    // $('#btnSave').attr('disabled', false); //set button enable 
                }
            });
        }

        function saveGigi() {
            $('.text-error').empty(); // clear error string
            $('#btnSaveGigi').html(loading_animation); //change button text
            $('#btnSaveGigi').attr('disabled', true); //set button disable 

            var formData = new FormData($('#gigiForm')[0]);
            formData.append("_token", "{{ csrf_token() }}");

            formData.forEach((value, key) => {
                console.log(key, value);
            });

            $.ajax({
                url: "{{ url('/admin/medical-form/update-gigi') }}",
                type: "POST",
                data: formData,
                dataType: "JSON",
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(data);
                    if (data.status) //if success close modal and reload ajax table
                    {
                        var text = data.message;
                        toast("Berhasil! " + text, "success", 3000);
                        loadData();
                        moveTab('pemeriksaan-gigi', 'pemeriksaan-narkoba');
                    } else {
                        console.log(data.message);
                        for (const [key, value] of Object.entries(data.message)) {
                            $('#' + key + '_error').html('*' + value);
                        }
                    }
                    $('#btnSaveGigi').html(save_text);
                    $('#btnSaveGigi').attr('disabled', false); //set button enable 
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // alert('Error adding / update data');
                    showAlert("Error!", textStatus, "error");
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                    // $('#btnSave').attr('disabled', false); //set button enable 
                }
            });
        }

        function saveNarkoba() {
            $('.text-error').empty(); // clear error string
            $('#btnSaveNarkoba').html(loading_animation); //change button text
            $('#btnSaveNarkoba').attr('disabled', true); //set button disable 

            var formData = new FormData($('#narkobaForm')[0]);
            formData.append("_token", "{{ csrf_token() }}");

            formData.forEach((value, key) => {
                console.log(key, value);
            });

            $.ajax({
                url: "{{ url('/admin/medical-form/update-narkoba') }}",
                type: "POST",
                data: formData,
                dataType: "JSON",
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(data);
                    if (data.status) //if success close modal and reload ajax table
                    {
                        var text = data.message;
                        toast("Berhasil! " + text, "success", 3000);
                        loadData();
                        moveTab('pemeriksaan-narkoba', 'kesimpulan');
                    } else {
                        console.log(data.message);
                        for (const [key, value] of Object.entries(data.message)) {
                            $('#' + key + '_error').html('*' + value);
                        }
                    }
                    $('#btnSaveNarkoba').html(save_text);
                    $('#btnSaveNarkoba').attr('disabled', false); //set button enable 
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // alert('Error adding / update data');
                    showAlert("Error!", textStatus, "error");
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                    // $('#btnSave').attr('disabled', false); //set button enable 
                }
            });
        }

        function saveKesimpulan(cek = false) {
            $('.text-error').empty(); // clear error string
            $('#btnSaveKesimpulan').html(loading_animation); //change button text
            $('#btnSaveKesimpulan').attr('disabled', true); //set button disable 

            var formData = new FormData($('#kesimpulanForm')[0]);
            formData.append("_token", "{{ csrf_token() }}");
            formData.append("cek", cek);

            formData.forEach((value, key) => {
                console.log(key, value);
            });

            $.ajax({
                url: "{{ url('/admin/medical-form/update-kesimpulan') }}",
                type: "POST",
                data: formData,
                dataType: "JSON",
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(data);
                    if (data.status) //if success close modal and reload ajax table
                    {
                        var text = data.message;
                        toast("Berhasil! " + text, "success", 3000);
                        loadData();
                    } else {
                        //saya mau  result tadi dibaca disini, apakah result ada
                        console.log(data.message);
                        for (const [key, value] of Object.entries(data.message)) {
                            $('#' + key + '_error').html('*' + value);
                        }

                        if ('result' in data.message) {
                            // console.log("Ada result di message");
                            Swal.fire({
                                title: "",
                                icon: 'question',
                                text: "Yakin Ingin Menyimpan Data ? " + data.message.result,
                                type: "info",
                                showCancelButton: !0,
                                confirmButtonText: "Ya",
                                cancelButtonText: "Tidak",
                                reverseButtons: !0
                            }).then(function(e) {
                                if (e.value === true) {
                                    saveKesimpulan(true);
                                } else {
                                    e.dismiss;
                                }
                            }, function(dismiss) {
                                return false;
                            })
                        }
                    }
                    $('#btnSaveKesimpulan').html(save_text);
                    $('#btnSaveKesimpulan').attr('disabled', false); //set button enable 
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // alert('Error adding / update data');
                    showAlert("Error!", textStatus, "error");
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                    // $('#btnSave').attr('disabled', false); //set button enable 
                }
            });
        }
    <?php } ?>
</script>
@endpush