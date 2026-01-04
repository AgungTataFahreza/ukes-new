@extends('master')

@section('title', 'Formulir Uji Kesehatan')
@section('menu', 'medical-form')
@section('menu_parent', 'ujikesehatan')

@section('content')

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
                            <a class="nav-link mb-2 active" id="v-pills-data-peserta-tab" data-bs-toggle="pill" href="#v-pills-data-peserta" role="tab" aria-controls="v-pills-data-peserta" aria-selected="true">Data Peserta</a>
                            <a class="nav-link mb-2" id="v-pills-pemeriksaan-antropometri-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-antropometri" role="tab" aria-controls="v-pills-pemeriksaan-antropometri" aria-selected="false">Pemeriksaan Antropometri</a>
                            <a class="nav-link mb-2" id="v-pills-pemeriksaan-fisik-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-fisik" role="tab" aria-controls="v-pills-pemeriksaan-fisik" aria-selected="false">Pemeriksaan Fisik</a>
                            <a class="nav-link mb-2" id="v-pills-pemeriksaan-fisik-2-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-fisik-2" role="tab" aria-controls="v-pills-pemeriksaan-fisik-2" aria-selected="false">Pemeriksaan Fisik 2</a>
                            <a class="nav-link mb-2" id="v-pills-pemeriksaan-gigi-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-gigi" role="tab" aria-controls="v-pills-pemeriksaan-gigi" aria-selected="false">Pemeriksaan Gigi</a>
                            <a class="nav-link mb-2" id="v-pills-pemeriksaan-narkoba-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-narkoba" role="tab" aria-controls="v-pills-pemeriksaan-narkoba" aria-selected="false">Pemeriksaan Narkoba</a>
                            <a class="nav-link mb-2" id="v-pills-kesimpulan-tab" data-bs-toggle="pill" href="#v-pills-kesimpulan" role="tab" aria-controls="v-pills-kesimpulan" aria-selected="false">Kesimpulan</a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-9">
                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-data-peserta" role="tabpanel" aria-labelledby="v-pills-data-peserta-tab">
                                <div class="d-flex mb-2">
                                    <div class="row g-3">
                                        <div class="col-sm-12">
                                            <label for="nomor_peserta" class="form-label">Nomor Peserta</label>
                                            <input type="text" class="form-control-plaintext"
                                                id="nomor_peserta" placeholder="Enter name"
                                                value="420250483" readonly>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="nama_lengkap" class="form-label">First
                                                name</label>
                                            <input type="text" class="form-control-plaintext"
                                                id="nama_lengkap" placeholder="Enter name"
                                                value="GRIYA DINA P. HUTASOIT" readonly>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="text" class="form-control-plaintext"
                                                id="tanggal_lahir" placeholder="Enter name"
                                                value="" readonly>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for="nama_prodi" class="form-label">Prodi Lulus</label>
                                            <input type="text" class="form-control-plaintext"
                                                id="nama_prodi" placeholder="Enter name"
                                                value="D3 - Gizi" readonly>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for="tgl_periksa" class="form-label">Tanggal Periksa</label>
                                            <input type="text" class="form-control-plaintext"
                                                id="tgl_periksa" placeholder="Enter name"
                                                value="" readonly>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for="tempat_periksa" class="form-label">Tempat Periksa</label>
                                            <input type="text" class="form-control-plaintext"
                                                id="tempat_periksa" placeholder="Enter name"
                                                value="Klinik Pratama Poltekkes Medan" readonly>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for="nama_petugas_registrasi" class="form-label">Petugas Registrasi</label>
                                            <input type="text" class="form-control-plaintext"
                                                id="nama_petugas_registrasi" placeholder="Enter name"
                                                value="Agung Tata Fahreza" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-pemeriksaan-antropometri" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-antropometri-tab">
                                <div class="d-flex mb-2">
                                    <form action="" method="post" name="fr1" id="fr1">
                                        <p class="text-muted">Pemeriksaan Antropometri</p>
                                        <div class="row g-3">
                                            <div class="col-sm-12">
                                                <label for="nama_lengkap" class="form-label">Nama</label>
                                                <input type="text" class="form-control-plaintext"
                                                    id="nama_lengkap" placeholder="Enter name"
                                                    value="GRIYA DINA P. HUTASOIT" readonly disabled>
                                            </div>
                                            <div class="col-sm-12">
                                                <h6 class="fw-semibold">Dokter</h6>
                                                <select name="dokter" required="required" class="js-example-basic-single">
                                                    <option value="dr. Lestari Rahmah, M.KT">dr. Lestari Rahmah, M.KT</option>
                                                    <option value="dr. Ratna Zahara">dr. Ratna Zahara</option>
                                                    <option value="dr. Ira Una Muna">dr. Ira Una Muna</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12">
                                                <h6 class="fw-semibold">Paramedis 1</h6>
                                                <select name="paramedis1" required="required" class="js-example-basic-single">
                                                    <option value="Tri Wahyuni, Amd.Kep">Tri Wahyuni, Amd.Kep</option>
                                                    <option value="Wardati Humaira">Wardati Humaira</option>
                                                    <option value="Arini Muftih Fadhilla, Amd.Keb">Arini Muftih Fadhilla, Amd.Keb</option>
                                                    <option value="Irma Rahmadani, Amd.Kes">Irma Rahmadani, Amd.Kes</option>
                                                    <option value="Sulastri GP Tambunan">Sulastri GP Tambunan</option>
                                                    <option value="Halimah Tussadiah Lubis">Halimah Tussadiah Lubis</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="antro" class="form-label">Tekanan Darah</label>
                                                <div class="row" id="antro">
                                                    <div class="col-md-4">
                                                        <input type="number" class="form-control"
                                                            id="tda" name="tda" placeholder="" required value="0">
                                                        <div class="invalid-feedback">
                                                            Sistole value required
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control-plaintext"
                                                            value="/" readonly disabled>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="number" class="form-control"
                                                            id="tdb" name="tdb" placeholder="" required value="0">
                                                        <div class="invalid-feedback">
                                                            Diastole value required
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control-plaintext"
                                                            value="mmHg" readonly disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="antro" class="form-label">Nadi</label>
                                                <div class="row" id="antro">
                                                    <div class="col-md-4">
                                                        <input type="number" class="form-control"
                                                            id="nadi" name="nadi" placeholder="" required value="0">
                                                        <div class="invalid-feedback">
                                                            Nadi value required
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="tb" class="form-label">Tinggi Badan</label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control"
                                                            id="tb" name="tb" placeholder="" required value="0">
                                                        <div class="invalid-feedback">
                                                            Height value required
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control-plaintext"
                                                            value="cm" readonly disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="bb" class="form-label">Berat Badan</label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control"
                                                            id="bb" name="bb" placeholder="" required value="0">
                                                        <div class="invalid-feedback">
                                                            Weight value required
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control-plaintext"
                                                            value="kg" readonly disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="antro_normal" class="form-label">Status Normal</label>
                                                <select name="antro_normal" required="required" class="form-select mb-3" id="antro_normal" aria-label="Default select example">
                                                    <option value="1">Normal</option>
                                                    <option value="2">Kelainan</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="antro_catatan" class="form-label">Catatan</label>
                                                <div class="col-md-12">
                                                    <textarea name="antro_catatan"
                                                        rows="3" class="form-control" id="antro_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="antro_keterangan" class="form-label">Keterangan</label>
                                                <div class="col-md-12">
                                                    <textarea name="antro_keterangan"
                                                        rows="3" class="form-control" id="antro_keterangan">													</textarea>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                <input type="hidden" name="nomor_peserta" id="nomor_peserta" value="420250483">
                                                <input type="hidden" name="tab" id="tab" value="1">
                                                <input type="hidden" name="submitantro" id="submitantro" value="1">
                                                <button type="submit"
                                                    class="btn btn-success btn-label right ms-auto nexttab nexttab" form="fr1"><i
                                                        class="ri-arrow-right-line label-icon "></i>Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-pemeriksaan-fisik" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-fisik-tab">
                                <div class="d-flex mb-2">
                                    <form action="" method="post" name="fr2" id="fr2">
                                        <p class="text-muted">Pemeriksaan Fisik</p>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="nama_lengkap" class="form-label">Nama</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control-plaintext"
                                                        id="nama_lengkap" placeholder="Enter name"
                                                        value="GRIYA DINA P. HUTASOIT" readonly disabled>

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <h6 class="fw-semibold">Dokter</h6>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="dokter" required="required" class="js-example-basic-single">
                                                        <option value="dr. Lestari Rahmah, M.KT">dr. Lestari Rahmah, M.KT</option>
                                                        <option value="dr. Khairunnisa Bestari">dr. Khairunnisa Bestari</option>
                                                        <option value="dr. Ratna Zahara">dr. Ratna Zahara</option>
                                                        <option value="dr. Ira Una Muna">dr. Ira Una Muna</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <h6 class="fw-semibold">Paramedis 2</h6>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="paramedis2" required="required" class="js-example-basic-single">
                                                        <option value="Tri Wahyuni, Amd.Kep">Tri Wahyuni, Amd.Kep</option>
                                                        <option value="Wardati Humaira">Wardati Humaira</option>
                                                        <option value="Arini Muftih Fadhilla, Amd.Keb">Arini Muftih Fadhilla, Amd.Keb</option>
                                                        <option value="Irma Rahmadani, Amd.Kes">Irma Rahmadani, Amd.Kes</option>
                                                        <option value="Sulastri GP Tambunan">Sulastri GP Tambunan</option>
                                                        <option value="Halimah Tussadiah Lubis">Halimah Tussadiah Lubis</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Kulit</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="kulit_normal" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="kulit_normal" required="required" class="form-select mb-3" id="kulit_normal" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="kulit_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="kulit_catatan"
                                                        rows="3" class="form-control" id="kulit_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="kulit_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="kulit_keterangan"
                                                        rows="3" class="form-control" id="kulit_keterangan"></textarea>
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
                                                    <label for="mata_normal" class="form-label">Status Normal Mata</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="mata_normal" required="required" class="form-select mb-3" id="mata_normal" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="mata_visus" class="form-label">Visus</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="mata_visus" name="mata_visus"
                                                        placeholder="visus" value="">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="mata_butawarna" class="form-label">Buta Warna</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="mata_butawarna" required="required" class="form-select mb-3" id="mata_butawarna" aria-label="Default select example">
                                                        <option value="Normal">Normal</option>
                                                        <option value="Parsial">Parsial</option>
                                                        <option value="Total">Total</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="mata_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="mata_catatan"
                                                        rows="3" class="form-control" id="mata_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="mata_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="mata_keterangan"
                                                        rows="3" class="form-control" id="mata_keterangan"></textarea>
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
                                                    <label for="telinga_normal" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="telinga_normal" required="required" class="form-select mb-3" id="telinga_normal" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="telinga_kiri" class="form-label">Telinga Kiri</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="telinga_kiri" name="telinga_kiri"
                                                        placeholder="keterangan telinga kiri" value="">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="telinga_kanan" class="form-label">Telinga Kanan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="telinga_kanan" name="telinga_kanan"
                                                        placeholder="keterangan telinga kanan" value="">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="telinga_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="telinga_catatan"
                                                        rows="3" class="form-control" id="telinga_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="telinga_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="telinga_keterangan"
                                                        rows="3" class="form-control" id="telinga_keterangan"></textarea>
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
                                                    <label for="hidung_normal" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="hidung_normal" required="required" class="form-select mb-3" id="hidung_normal" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="hidung_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="hidung_catatan"
                                                        rows="3" class="form-control" id="hidung_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="hidung_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="hidung_keterangan"
                                                        rows="3" class="form-control" id="hidung_keterangan"></textarea>
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
                                                    <label for="lidah_normal" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="lidah_normal" required="required" class="form-select mb-3" id="lidah_normal" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="lidah_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="lidah_catatan"
                                                        rows="3" class="form-control" id="lidah_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="lidah_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="lidah_keterangan"
                                                        rows="3" class="form-control" id="lidah_keterangan"></textarea>
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
                                                    <label for="pharynx_normal" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="pharynx_normal" required="required" class="form-select mb-3" id="pharynx_normal" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="pharynx_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="pharynx_catatan"
                                                        rows="3" class="form-control" id="pharynx_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="pharynx_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="pharynx_keterangan"
                                                        rows="3" class="form-control" id="pharynx_keterangan"></textarea>
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
                                                    <label for="tonsil_normal" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="tonsil_normal" required="required" class="form-select mb-3" id="tonsil_normal" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="tonsil_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="tonsil_catatan"
                                                        rows="3" class="form-control" id="tonsil_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="tonsil_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="tonsil_keterangan"
                                                        rows="3" class="form-control" id="tonsil_keterangan"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row g-3">

                                            <div class="row mb-3">
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <input type="hidden" name="nomor_peserta" id="nomor_peserta" value="420250483">
                                                    <input type="hidden" name="tab" id="tab" value="2">
                                                    <input type="hidden" name="submitfisik" id="submitfisik" value="1">
                                                    <button type="submit"
                                                        class="btn btn-success btn-label right ms-auto nexttab nexttab" form="fr2"><i
                                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-pemeriksaan-fisik-2" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-fisik-2-tab">
                                <div class="d-flex mb-2">
                                    <form action="" method="post" name="fr3" id="fr3">
                                        <p class="text-muted">Pemeriksaan Fisik 2</p>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="nama_lengkap" class="form-label">Nama</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control-plaintext"
                                                        id="nama_lengkap" placeholder="Enter name"
                                                        value="GRIYA DINA P. HUTASOIT" readonly disabled>

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <h6 class="fw-semibold">Dokter</h6>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="dokter" required="required" class="js-example-basic-single">
                                                        <option value="dr. Lestari Rahmah, M.KT">dr. Lestari Rahmah, M.KT</option>
                                                        <option value="dr. Khairunnisa Bestari">dr. Khairunnisa Bestari</option>
                                                        <option value="dr. Ratna Zahara">dr. Ratna Zahara</option>
                                                        <option value="dr. Ira Una Muna">dr. Ira Una Muna</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <h6 class="fw-semibold">Paramedis 3</h6>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="paramedis3" required="required" class="js-example-basic-single">
                                                        <option value="Tri Wahyuni, Amd.Kep">Tri Wahyuni, Amd.Kep</option>
                                                        <option value="Wardati Humaira">Wardati Humaira</option>
                                                        <option value="Arini Muftih Fadhilla, Amd.Keb">Arini Muftih Fadhilla, Amd.Keb</option>
                                                        <option value="Irma Rahmadani, Amd.Kes">Irma Rahmadani, Amd.Kes</option>
                                                        <option value="Sulastri GP Tambunan">Sulastri GP Tambunan</option>
                                                        <option value="Halimah Tussadiah Lubis">Halimah Tussadiah Lubis</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Thyroid</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="thyroid_normal" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="thyroid_normal" required="required" class="form-select mb-3" id="thyroid_normal" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="thyroid_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="thyroid_catatan"
                                                        rows="3" class="form-control" id="thyroid_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="thyroid_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="thyroid_keterangan"
                                                        rows="3" class="form-control" id="thyroid_keterangan"></textarea>
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
                                                    <label for="jantung_normal" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="jantung_normal" required="required" class="form-select mb-3" id="jantung_normal" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="jantung_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="jantung_catatan"
                                                        rows="3" class="form-control" id="jantung_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="jantung_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="jantung_keterangan"
                                                        rows="3" class="form-control" id="jantung_keterangan"></textarea>
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
                                                    <label for="paru_normal" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="paru_normal" required="required" class="form-select mb-3" id="paru_normal" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="paru_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="paru_catatan"
                                                        rows="3" class="form-control" id="paru_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="paru_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="paru_keterangan"
                                                        rows="3" class="form-control" id="paru_keterangan"></textarea>
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
                                                    <label for="abdomen_normal" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="abdomen_normal" required="required" class="form-select mb-3" id="abdomen_normal" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="abdomen_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="abdomen_catatan"
                                                        rows="3" class="form-control" id="abdomen_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="abdomen_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="abdomen_keterangan"
                                                        rows="3" class="form-control" id="abdomen_keterangan"></textarea>
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
                                                    <label for="refleks_pupil" class="form-label">Refleks Pupil</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="refleks_pupil" required="required" class="form-select mb-3" id="refleks_pupil" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="refleks_patela" class="form-label">Refleks Patela</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="refleks_patela" required="required" class="form-select mb-3" id="refleks_patela" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="refleks_achiles" class="form-label">Refleks Achiles</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="refleks_achiles" required="required" class="form-select mb-3" id="refleks_achiles" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="refleks_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="refleks_catatan"
                                                        rows="3" class="form-control" id="refleks_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="refleks_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="refleks_keterangan"
                                                        rows="3" class="form-control" id="refleks_keterangan"></textarea>
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
                                                    <label for="thorax_normal" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="thorax_normal" required="required" class="form-select mb-3" id="thorax_normal" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="thorax_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="thorax_catatan"
                                                        rows="3" class="form-control" id="thorax_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="thorax_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="thorax_keterangan"
                                                        rows="3" class="form-control" id="thorax_keterangan"></textarea>
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
                                                    <label for="bicara_normal" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="bicara_normal" required="required" class="form-select mb-3" id="bicara_normal" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="bicara_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="bicara_catatan"
                                                        rows="3" class="form-control" id="bicara_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="bicara_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="bicara_keterangan"
                                                        rows="3" class="form-control" id="bicara_keterangan"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row g-3">

                                            <div class="row mb-3">
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <input type="hidden" name="nomor_peserta" id="nomor_peserta" value="420250483">
                                                    <input type="hidden" name="tab" id="tab" value="3">
                                                    <input type="hidden" name="submitfisik2" id="submitfisik2" value="1">
                                                    <button type="submit"
                                                        class="btn btn-success btn-label right ms-auto nexttab nexttab" form="fr3"><i
                                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-pemeriksaan-gigi" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-gigi-tab">
                                <div class="d-flex mb-2">
                                    <form action="" method="post" name="fr4" id="fr4">
                                        <p class="text-muted">Pemeriksaan Gigi</p>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="nama_lengkap" class="form-label">Nama</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control-plaintext"
                                                        id="nama_lengkap" placeholder="Enter name"
                                                        value="GRIYA DINA P. HUTASOIT" readonly disabled>

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <h6 class="fw-semibold">Dokter Gigi</h6>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="dokter_gigi" required="required" class="js-example-basic-single">
                                                        <option value="drg.Bestari Aflah">drg.Bestari Aflah</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <h6 class="fw-semibold">Perawat Gigi</h6>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="perawat_gigi" required="required" class="js-example-basic-single">
                                                        <option value="Tri Wahyuni, Amd.Kep">Tri Wahyuni, Amd.Kep</option>
                                                        <option value="Wardati Humaira">Wardati Humaira</option>
                                                        <option value="Arini Muftih Fadhilla, Amd.Keb">Arini Muftih Fadhilla, Amd.Keb</option>
                                                        <option value="Irma Rahmadani, Amd.Kes">Irma Rahmadani, Amd.Kes</option>
                                                        <option value="Sulastri GP Tambunan">Sulastri GP Tambunan</option>
                                                        <option value="Halimah Tussadiah Lubis">Halimah Tussadiah Lubis</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <p class="text-muted">Pemeriksaan Gigi</p>
                                        </div>
                                        <div class="row g-3">
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="gigi_normal" class="form-label">Status Normal</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <select name="gigi_normal" required="required" class="form-select mb-3" id="gigi_normal" aria-label="Default select example">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Kelainan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="gigi_catatan" class="form-label">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="gigi_catatan"
                                                        rows="3" class="form-control" id="gigi_catatan"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-3">
                                                    <label for="gigi_keterangan" class="form-label">Keterangan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea name="gigi_keterangan"
                                                        rows="3" class="form-control" id="gigi_keterangan"></textarea>
                                                </div>
                                            </div>

                                            <div class="border mt-3 border-line"></div>
                                        </div>


                                        <div class="row mb-3">
                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                <input type="hidden" name="nomor_peserta" id="nomor_peserta" value="420250483">
                                                <input type="hidden" name="tab" id="tab" value="4">
                                                <input type="hidden" name="submitgigi" id="submitgigi" value="1">
                                                <button type="submit"
                                                    class="btn btn-success btn-label right ms-auto nexttab nexttab" form="fr4"><i
                                                        class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-pemeriksaan-narkoba" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-narkoba-tab">
                                <div class="d-flex mb-2">
                                    <form action="" method="post" name="fr5" id="fr5">
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <h6 class="fw-semibold">Petugas Narkoba</h6>
                                            </div>
                                            <div class="col-lg-9">
                                                <select name="petugas_narkoba" required="required" class="js-example-basic-single">
                                                    <option value="Tania Regita">Tania Regita</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <p class="text-muted">Pemeriksaan Narkoba</p>
                                        <div class="row g-3">

                                            <div class="col-sm-6">
                                                <label for="antro_keterangan" class="form-label">AMP : Amphetamines (Amfetamin)</label>
                                                <div class="col-md-12">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="narkoba_amp" id="narkoba_amp1" value="0" checked>
                                                        <label class="form-check-label" for="narkoba_amp1">
                                                            Negatif
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="narkoba_amp" id="narkoba_amp2" value="1">
                                                        <label class="form-check-label" for="narkoba_amp2">
                                                            Positif
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="antro_keterangan" class="form-label">MOP: Morphine (Morfina)</label>
                                                <div class="col-md-12">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="narkoba_mop" id="narkoba_mop1" value="0" checked>
                                                        <label class="form-check-label" for="narkoba_mop1">
                                                            Negatif
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="narkoba_mop" id="narkoba_mop2" value="1">
                                                        <label class="form-check-label" for="narkoba_mop2">
                                                            Positif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="narkoba_" class="form-label">THC: Tetrahydrocannabinol (Tetrahidrokannabinol)</label>
                                                <div class="col-md-12">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="narkoba_thc" id="narkoba_thc1" value="0" checked>
                                                        <label class="form-check-label" for="narkoba_thc1">
                                                            Negatif
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="narkoba_thc" id="narkoba_thc2" value="1">
                                                        <label class="form-check-label" for="narkoba_thc2">
                                                            Positif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                <input type="hidden" name="nomor_peserta" id="nomor_peserta" value="420250483">
                                                <input type="hidden" name="tab" id="tab" value="5">
                                                <input type="hidden" name="submitnarkoba" id="submitnarkoba" value="1">
                                                <button type="submit"
                                                    class="btn btn-success btn-label right ms-auto nexttab nexttab" form="fr5"><i
                                                        class="ri-arrow-right-line label-icon "></i>Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-kesimpulan" role="tabpanel" aria-labelledby="v-pills-kesimpulan-tab">
                                <div class="d-flex mb-2">
                                    <form action="index.php?app=daftar_pemeriksaan" method="post" name="fr6" id="fr6">
                                        <p class="text-muted">Hasil Akhir</p>
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <label for="catatan_riwayat_penyakit" class="form-label">Riwayat Penyakit</label>
                                                <div class="col-md-12">
                                                    <textarea name="catatan_riwayat_penyakit"
                                                        rows="3" class="form-control" id="catatan_riwayat_penyakit"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="kesimpulan" class="form-label">Kesimpulan</label>
                                                <div class="col-md-12">
                                                    <textarea name="kesimpulan"
                                                        rows="3" class="form-control" id="kesimpulan"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="rekomendasi" class="form-label">Rekomendasi</label>
                                                <div class="col-md-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rekomendasi" id="rekomendasi2" value="0">
                                                        <label class="form-check-label" for="rekomendasi2">
                                                            Tidak Dapat
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="rekomendasi" id="rekomendasi1" value="1" checked>
                                                        <label class="form-check-label" for="rekomendasi1">
                                                            Dapat
                                                        </label>
                                                    </div>
                                                    <span class="text-muted">mengikuti pendidikan pada institusi yang dituju.</span>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                <input type="hidden" name="nomor_peserta" id="nomor_peserta" value="420250483">
                                                <input type="hidden" name="tab" id="tab" value="5">
                                                <input type="hidden" name="submitakhir" id="submitakhir" value="1">
                                                <input type="hidden" id="nama_lengkap" name="nama_lengkap" value="GRIYA DINA P. HUTASOIT">
                                                <button type="submit"
                                                    class="btn btn-success btn-label right ms-auto nexttab nexttab" form="fr6"><i
                                                        class="ri-arrow-right-line label-icon "></i>Simpan</button>
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

    $(document).ready(function() {});

    function reload_table() {
        table.ajax.reload(null, false);
    }

    function showFilter() {
        $('#filter_modal').modal('show');
    }

    function filter() {
        $('#btnFilter').html(loading_animation); //change button text
        $('#btnFilter').attr('disabled', true); //set button disable 

        $('#filter_modal').modal('hide');
        $('#btnFilter').html('<i class="ri ri-save-line me-1"></i> Filter');
        $('#btnFilter').attr('disabled', false); //set button enable 
        reload_table();
    }

    function add() {
        save_method = 'add';
        $('.text-error').empty(); // clear error string
        $('#form')[0].reset(); // reset form on modals
        $('#btnSave').html(save_text);
        $('#modal-title').text('Tambah Data Baru'); // Set Title to Bootstrap modal title
        $('#modal_form').modal('show'); // show bootstrap modal
    }

    function add_import() {
        $('.text-error').empty(); // clear error string
        $('#import_form')[0].reset(); // reset form on modals
        $('#btnImport').html(save_text);
        $('#import_modal').modal('show'); // show bootstrap modal
    }

    function save() {
        $('.text-error').empty(); // clear error string
        $('#btnSave').html(loading_animation); //change button text
        $('#btnSave').attr('disabled', true); //set button disable 
        var url;

        if (save_method == 'add') {
            url = "{{ url('/admin/medical-form/add') }}";
        } else {
            url = "{{ url('/admin/medical-form/update') }}";
        }

        var formData = new FormData($('#form')[0]);
        formData.append("_token", "{{ csrf_token() }}");

        formData.forEach((value, key) => {
            console.log(key, value);
        });

        // var checkbox1Value = formData.get('has_view');
        // var checkbox2Value = formData.get('has_add');
        // var checkbox3Value = formData.get('has_edit');
        // var checkbox4Value = formData.get('has_delete');

        // console.log(checkbox1Value); // Output: "option1" (if checked)
        // console.log(checkbox2Value); // Output: "option2" (if checked)
        // console.log(checkbox3Value);
        // console.log(checkbox4Value);

        $.ajax({
            url: url,
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
                    // if (save_method == 'add') {
                    //     text = 'Data Berhasil Ditambahkan';
                    // } else {
                    //     text = 'Data Berhasil Diperbaharui';
                    // }

                    // toastr.success(text);
                    // swal("Berhasil!", text, "success");
                    showAlert("Berhasil", text, "success");
                    // notification('success', 'Success', text);
                    $('#modal_form').modal('hide');
                    reload_table();
                } else {
                    console.log(data.message);
                    for (const [key, value] of Object.entries(data.message)) {
                        $('#' + key + '_error').html('*' + value);
                    }

                    if (save_method == 'add') {
                        $('#btnSave').html(save_text);
                    } else {
                        $('#btnSave').html(update_text);
                    }
                }

                $('#btnSave').attr('disabled', false); //set button enable 
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

    function save_import() {
        $('.text-error').empty(); // clear error string
        $('#btnImport').html(loading_animation); //change button text
        $('#btnImport').attr('disabled', true); //set button disable 
        var url;

        var formData = new FormData($('#import_form')[0]);
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("period", $('#period').val());
        formData.append("study_program", $('#study_program').val());

        $.ajax({
            url: "{{ url('admin/applicant/import') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                console.log(data);
                if (data.status) //if success close modal and reload ajax table
                {
                    var text = data.message;
                    console.log('tes');
                    // if (save_method == 'add') {
                    //     text = 'Data Berhasil Ditambahkan';
                    // } else {
                    //     text = 'Data Berhasil Diperbaharui';
                    // }

                    // toastr.success(text);
                    showAlert("Berhasil!", text, "success");
                    // notification('success', 'Success', text);
                    $('#import_modal').modal('hide');
                    reload_table();
                } else {
                    console.log(data.message);
                    for (const [key, value] of Object.entries(data.message)) {
                        $('#' + key + '_error').html('*' + value);
                    }

                    $('#btnImport').html(save_text);
                }

                $('#btnImport').attr('disabled', false); //set button enable 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('#btnImport').html(save_text);
                $('#btnImport').attr('disabled', false); //set button enable 
                // alert('Error adding / update data');
                showAlert("Error!", textStatus, "error");
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
                // $('#btnSave').attr('disabled', false); //set button enable 
            }
        });
    }
</script>
@endpush