@extends('layout_applicant')

@section('title', 'Formulir Uji Kesehatan Mandiri')
@section('menu', 'form-mandiri')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Tahap Pemeriksaan Mandiri (Luar Klinik)</h4>
            </div>
            <div class="card-body">
                <?php if (isset($user) && $user->tanggal_input != null && ($user->status_file_kesehatan == 'Pending' || $user->status_file_narkoba == 'Pending')) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Perhatian!</strong> Data Anda sedang dalam proses verifikasi oleh petugas. Form saat ini dikunci.
                    </div>
                <?php } ?>

                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link mb-2 active" id="v-pills-data-peserta-tab" data-bs-toggle="pill" href="#v-pills-data-peserta" role="tab" aria-controls="v-pills-data-peserta" aria-selected="true">Data Peserta</a>
                            <a class="nav-link mb-2" id="v-pills-pemeriksaan-antropometri-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-antropometri" role="tab" aria-controls="v-pills-pemeriksaan-antropometri" aria-selected="false">Pemeriksaan Antropometri</a>
                            <a class="nav-link mb-2" id="v-pills-pemeriksaan-fisik-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-fisik" role="tab" aria-controls="v-pills-pemeriksaan-fisik" aria-selected="false">Pemeriksaan Fisik</a>
                            <a class="nav-link mb-2" id="v-pills-pemeriksaan-fisik-2-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-fisik-2" role="tab" aria-controls="v-pills-pemeriksaan-fisik-2" aria-selected="false">Pemeriksaan Fisik 2</a>
                            <a class="nav-link mb-2" id="v-pills-pemeriksaan-gigi-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-gigi" role="tab" aria-controls="v-pills-pemeriksaan-gigi" aria-selected="false">Pemeriksaan Gigi</a>
                            <a class="nav-link mb-2" id="v-pills-pemeriksaan-narkoba-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan-narkoba" role="tab" aria-controls="v-pills-pemeriksaan-narkoba" aria-selected="false">Pemeriksaan Narkoba</a>
                            <a class="nav-link mb-2" id="v-pills-berkas-tab" data-bs-toggle="pill" href="#v-pills-berkas" role="tab" aria-controls="v-pills-berkas" aria-selected="false">Unggah Berkas</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-data-peserta" role="tabpanel" aria-labelledby="v-pills-data-peserta-tab">
                                <div class="d-flex mb-2">
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
                            </div>

                            <div class="tab-pane fade" id="v-pills-pemeriksaan-antropometri" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-antropometri-tab">
                                <div class="d-flex mb-2">
                                    <div class="w-100">
                                        <p class="text-muted">Pemeriksaan Antropometri</p>
                                        <div class="row g-3">
                                            <form id="antropometriForm">

                                                <div class="col-sm-6">
                                                    <label class="form-label">Tekanan Darah</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="tekanan_darah_sistolik" name="tekanan_darah_sistolik" placeholder="Sistolik" min="0" value="{{ $user->tekanan_darah_sistolik }}">
                                                        <span class="input-group-text">/</span>
                                                        <input type="number" class="form-control" id="tekanan_darah_diastolik" name="tekanan_darah_diastolik" placeholder="Diastolik" min="0" value="{{ $user->tekanan_darah_diastolik }}">
                                                        <span class="input-group-text">mmHg</span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="nadi" class="form-label">Nadi</label>
                                                    <div class="row" id="antro">
                                                        <div class="col-md-12">
                                                            <input type="number" class="form-control" id="nadi" name="nadi" placeholder="" value="{{ $user->nadi }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="tinggi_badan" class="form-label">Tinggi Badan <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" placeholder="Tinggi badan" min="0" required value="{{ $user->tinggi_badan }}">
                                                        <span class="input-group-text">cm</span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="berat_badan" class="form-label">Berat Badan <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="berat_badan" name="berat_badan" placeholder="Berat badan" min="0" step="0.1" required value="{{ $user->berat_badan }}">
                                                        <span class="input-group-text">kg</span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <label for="status_antropometri" class="form-label">Status Normal</label>
                                                    <select name="status_antropometri" class="form-select form-control" id="status_antropometri">
                                                        <option value="Normal" {{ $user->status_antropometri == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                        <option value="Kelainan" {{ $user->status_antropometri == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="catatan_antropometri" class="form-label">Catatan</label>
                                                    <div class="col-md-12">
                                                        <textarea name="catatan_antropometri" rows="3" class="form-control" id="catatan_antropometri">{{ $user->catatan_antropometri }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="keterangan_antropometri" class="form-label">Keterangan</label>
                                                    <div class="col-md-12">
                                                        <textarea name="keterangan_antropometri" rows="3" class="form-control" id="keterangan_antropometri">{{ $user->keterangan_antropometri }}</textarea>
                                                    </div>
                                                </div>
                                            </form>
                                            <button type="button" class="btn btn-info" id="btnSaveAntropometri" onclick="saveAntropometri()">
                                                Simpan & Selanjutnya <i class="ri-arrow-right-line me-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-pemeriksaan-fisik" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-fisik-tab">
                                <div class="d-flex mb-2">
                                    <form id="fisikForm">
                                        <div class="w-100">
                                            <div class="row mb-3">
                                                <p class="text-muted">Pemeriksaan Kulit</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_kulit" class="form-label">Status Normal</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_kulit" class="form-select mb-3" id="status_kulit">
                                                            <option value="Normal" {{ $user->status_kulit == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_kulit == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_kulit" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_kulit" rows="3" class="form-control" id="catatan_kulit">{{ $user->catatan_kulit }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_kulit" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_kulit" rows="3" class="form-control" id="keterangan_kulit">{{ $user->keterangan_kulit }}</textarea></div>
                                                </div>
                                                <div class="border mt-3 border-line"></div>
                                            </div>

                                            <div class="row mb-3">
                                                <p class="text-muted">Pemeriksaan Mata</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_mata" class="form-label">Status Normal Mata</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_mata" class="form-select mb-3" id="status_mata">
                                                            <option value="Normal" {{ $user->status_mata == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_mata == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="visus" class="form-label">Visus</label></div>
                                                    <div class="col-lg-9"><input type="text" class="form-control" id="visus" name="visus" placeholder="isi 0 jika tidak ada" value="{{ $user->visus }}"></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="buta_warna" class="form-label">Buta Warna</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="buta_warna" class="form-select mb-3" id="buta_warna">
                                                            <option value="Normal" {{ $user->buta_warna == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Parsial" {{ $user->buta_warna == 'Parsial' ? 'selected' : '' }}>Parsial</option>
                                                            <option value="Total" {{ $user->buta_warna == 'Total' ? 'selected' : '' }}>Total</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_mata" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_mata" rows="3" class="form-control" id="catatan_mata">{{ $user->catatan_mata }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_mata" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_mata" rows="3" class="form-control" id="keterangan_mata">{{ $user->keterangan_mata }}</textarea></div>
                                                </div>
                                                <div class="border mt-3 border-line"></div>
                                            </div>

                                            <div class="row mb-3">
                                                <p class="text-muted">Pemeriksaan Telinga</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_telinga" class="form-label">Status Normal</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_telinga" class="form-select mb-3" id="status_telinga">
                                                            <option value="Normal" {{ $user->status_telinga == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_telinga == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="telinga_kiri" class="form-label">Telinga Kiri</label></div>
                                                    <div class="col-lg-9"><input type="text" class="form-control" id="telinga_kiri" name="telinga_kiri" placeholder="keterangan telinga kiri" value="{{ $user->telinga_kiri }}"></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="telinga_kanan" class="form-label">Telinga Kanan</label></div>
                                                    <div class="col-lg-9"><input type="text" class="form-control" id="telinga_kanan" name="telinga_kanan" placeholder="keterangan telinga kanan" value="{{ $user->telinga_kanan }}"></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_telinga" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_telinga" rows="3" class="form-control" id="catatan_telinga">{{ $user->catatan_telinga }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_telinga" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_telinga" rows="3" class="form-control" id="keterangan_telinga">{{ $user->keterangan_telinga }}</textarea></div>
                                                </div>
                                                <div class="border mt-3 border-line"></div>
                                            </div>

                                            <div class="row mb-3">
                                                <p class="text-muted">Pemeriksaan Hidung</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_hidung" class="form-label">Status Normal</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_hidung" class="form-select mb-3" id="status_hidung">
                                                            <option value="Normal" {{ $user->status_hidung == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_hidung == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_hidung" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_hidung" rows="3" class="form-control" id="catatan_hidung">{{ $user->catatan_hidung }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_hidung" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_hidung" rows="3" class="form-control" id="keterangan_hidung">{{ $user->keterangan_hidung }}</textarea></div>
                                                </div>
                                                <div class="border mt-3 border-line"></div>
                                            </div>

                                            <div class="row mb-3">
                                                <p class="text-muted">Pemeriksaan Lidah</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_lidah" class="form-label">Status Normal</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_lidah" class="form-select mb-3" id="status_lidah">
                                                            <option value="Normal" {{ $user->status_lidah == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_lidah == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_lidah" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_lidah" rows="3" class="form-control" id="catatan_lidah">{{ $user->catatan_lidah }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_lidah" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_lidah" rows="3" class="form-control" id="keterangan_lidah">{{ $user->keterangan_lidah }}</textarea></div>
                                                </div>
                                                <div class="border mt-3 border-line"></div>
                                            </div>

                                            <div class="row mb-3">
                                                <p class="text-muted">Pemeriksaan Pharynx</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_pharynx" class="form-label">Status Normal</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_pharynx" class="form-select mb-3" id="status_pharynx">
                                                            <option value="Normal" {{ $user->status_pharynx == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_pharynx == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_pharynx" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_pharynx" rows="3" class="form-control" id="catatan_pharynx">{{ $user->catatan_pharynx }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_pharynx" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_pharynx" rows="3" class="form-control" id="keterangan_pharynx">{{ $user->keterangan_pharynx }}</textarea></div>
                                                </div>
                                                <div class="border mt-3 border-line"></div>
                                            </div>

                                            <div class="row mb-3">
                                                <p class="text-muted">Pemeriksaan Tonsil</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_tonsil" class="form-label">Status Normal</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_tonsil" class="form-select mb-3" id="status_tonsil">
                                                            <option value="Normal" {{ $user->status_tonsil == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_tonsil == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_tonsil" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_tonsil" rows="3" class="form-control" id="catatan_tonsil">{{ $user->catatan_tonsil }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_tonsil" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_tonsil" rows="3" class="form-control" id="keterangan_tonsil">{{ $user->keterangan_tonsil }}</textarea></div>
                                                </div>

                                                <div class="d-flex align-items-end justify-content-end gap-3 mt-4">
                                                    <button type="button" class="btn btn-info" id="btnSaveFisik" onclick="saveFisik()">
                                                        Simpan & Selanjutnya <i class="ri-arrow-right-line me-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-pemeriksaan-fisik-2" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-fisik-2-tab">
                                <div class="d-flex mb-2">
                                    <form id="fisik2Form">
                                        <div class="w-100">

                                            <div class="row mb-3">
                                                <p class="text-muted">Pemeriksaan Thyroid</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_thyroid" class="form-label">Status Normal</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_thyroid" class="form-select mb-3" id="status_thyroid">
                                                            <option value="Normal" {{ $user->status_thyroid == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_thyroid == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_thyroid" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_thyroid" rows="3" class="form-control" id="catatan_thyroid">{{ $user->catatan_thyroid }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_thyroid" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_thyroid" rows="3" class="form-control" id="keterangan_thyroid">{{ $user->keterangan_thyroid }}</textarea></div>
                                                </div>
                                                <div class="border mt-3 border-line"></div>
                                            </div>

                                            <div class="row mb-3">
                                                <p class="text-muted">Pemeriksaan Jantung</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_jantung" class="form-label">Status Normal</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_jantung" class="form-select mb-3" id="status_jantung">
                                                            <option value="Normal" {{ $user->status_jantung == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_jantung == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_jantung" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_jantung" rows="3" class="form-control" id="catatan_jantung">{{ $user->catatan_jantung }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_jantung" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_jantung" rows="3" class="form-control" id="keterangan_jantung">{{ $user->keterangan_jantung }}</textarea></div>
                                                </div>
                                                <div class="border mt-3 border-line"></div>
                                            </div>

                                            <div class="row mb-3">
                                                <p class="text-muted">Pemeriksaan Paru-Paru</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_paru_paru" class="form-label">Status Normal</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_paru_paru" class="form-select mb-3" id="status_paru_paru">
                                                            <option value="Normal" {{ $user->status_paru_paru == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_paru_paru == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_paru_paru" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_paru_paru" rows="3" class="form-control" id="catatan_paru_paru">{{ $user->catatan_paru_paru }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_paru_paru" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_paru_paru" rows="3" class="form-control" id="keterangan_paru_paru">{{ $user->keterangan_paru_paru }}</textarea></div>
                                                </div>
                                                <div class="border mt-3 border-line"></div>
                                            </div>

                                            <div class="row mb-3">
                                                <p class="text-muted">Pemeriksaan Abdomen</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_abdomen" class="form-label">Status Normal</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_abdomen" class="form-select mb-3" id="status_abdomen">
                                                            <option value="Normal" {{ $user->status_abdomen == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_abdomen == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_abdomen" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_abdomen" rows="3" class="form-control" id="catatan_abdomen">{{ $user->catatan_abdomen }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_abdomen" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_abdomen" rows="3" class="form-control" id="keterangan_abdomen">{{ $user->keterangan_abdomen }}</textarea></div>
                                                </div>
                                                <div class="border mt-3 border-line"></div>
                                            </div>

                                            <div class="row mb-3">
                                                <p class="text-muted">Pemeriksaan Refleks</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_refleks_pupil" class="form-label">Refleks Pupil</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_refleks_pupil" class="form-select mb-3" id="status_refleks_pupil">
                                                            <option value="Normal" {{ $user->status_refleks_pupil == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_refleks_pupil == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_refleks_patela" class="form-label">Refleks Patela</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_refleks_patela" class="form-select mb-3" id="status_refleks_patela">
                                                            <option value="Normal" {{ $user->status_refleks_patela == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_refleks_patela == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_refleks_achiles" class="form-label">Refleks Achiles</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_refleks_achiles" class="form-select mb-3" id="status_refleks_achiles">
                                                            <option value="Normal" {{ $user->status_refleks_achiles == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_refleks_achiles == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_refleks" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_refleks" rows="3" class="form-control" id="catatan_refleks">{{ $user->catatan_refleks }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_refleks" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_refleks" rows="3" class="form-control" id="keterangan_refleks">{{ $user->keterangan_refleks }}</textarea></div>
                                                </div>
                                                <div class="border mt-3 border-line"></div>
                                            </div>

                                            <div class="row mb-3">
                                                <p class="text-muted">Pemeriksaan Thorax</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_thorax" class="form-label">Status Normal</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_thorax" class="form-select mb-3" id="status_thorax">
                                                            <option value="Normal" {{ $user->status_thorax == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_thorax == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_thorax" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_thorax" rows="3" class="form-control" id="catatan_thorax">{{ $user->catatan_thorax }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_thorax" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_thorax" rows="3" class="form-control" id="keterangan_thorax">{{ $user->keterangan_thorax }}</textarea></div>
                                                </div>
                                                <div class="border mt-3 border-line"></div>
                                            </div>

                                            <div class="row mb-3">
                                                <p class="text-muted">Pemeriksaan Bicara</p>
                                            </div>
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_kemampuan_bicara" class="form-label">Status Normal</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_kemampuan_bicara" class="form-select mb-3" id="status_kemampuan_bicara">
                                                            <option value="Normal" {{ $user->status_kemampuan_bicara == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_kemampuan_bicara == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_kemampuan_bicara" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_kemampuan_bicara" rows="3" class="form-control" id="catatan_kemampuan_bicara">{{ $user->catatan_kemampuan_bicara }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_kemampuan_bicara" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_kemampuan_bicara" rows="3" class="form-control" id="keterangan_kemampuan_bicara">{{ $user->keterangan_kemampuan_bicara }}</textarea></div>
                                                </div>

                                                <div class="d-flex align-items-end justify-content-end gap-3 mt-4">
                                                    <button type="button" class="btn btn-info" id="btnSaveFisik2" onclick="saveFisik2()">
                                                        Simpan & Selanjutnya <i class="ri-arrow-right-line me-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-pemeriksaan-gigi" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-gigi-tab">
                                <div class="d-flex mb-2">
                                    <div class="w-100">
                                        <p class="text-muted">Pemeriksaan Gigi</p>
                                        <form id="gigiForm">
                                            <div class="row g-3">
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="status_gigi" class="form-label">Status Normal</label></div>
                                                    <div class="col-lg-9">
                                                        <select name="status_gigi" class="form-select mb-3" id="status_gigi">
                                                            <option value="Normal" {{ $user->status_gigi == 'Normal' ? 'selected' : '' }}>Normal</option>
                                                            <option value="Kelainan" {{ $user->status_gigi == 'Kelainan' ? 'selected' : '' }}>Kelainan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="catatan_gigi" class="form-label">Catatan</label></div>
                                                    <div class="col-lg-9"><textarea name="catatan_gigi" rows="3" class="form-control" id="catatan_gigi">{{ $user->catatan_gigi }}</textarea></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-3"><label for="keterangan_gigi" class="form-label">Keterangan</label></div>
                                                    <div class="col-lg-9"><textarea name="keterangan_gigi" rows="3" class="form-control" id="keterangan_gigi">{{ $user->keterangan_gigi }}</textarea></div>
                                                </div>

                                                <div class="d-flex align-items-end justify-content-end gap-3 mt-4">
                                                    <button type="button" class="btn btn-info" id="btnSaveGigi" onclick="saveGigi()">
                                                        Simpan & Selanjutnya <i class="ri-arrow-right-line me-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-pemeriksaan-narkoba" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-narkoba-tab">
                                <div class="d-flex mb-2">
                                    <div class="w-100">
                                        <p class="text-muted">Pemeriksaan Narkoba</p>
                                        <form id="narkobaForm">
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label class="form-label">AMP : Amphetamines (Amfetamin)</label>
                                                    <div class="col-md-12">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio" name="amp" id="narkoba_amp0" value="Negatif" {{ $user->amp == 'Negatif' || empty($user->amp) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="narkoba_amp0">Negatif</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="amp" id="narkoba_amp1" value="Positif" {{ $user->amp == 'Positif' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="narkoba_amp1">Positif</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label">MOP: Morphine (Morfina)</label>
                                                    <div class="col-md-12">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio" name="mop" id="narkoba_mop0" value="Negatif" {{ $user->mop == 'Negatif' || empty($user->mop) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="narkoba_mop0">Negatif</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="mop" id="narkoba_mop1" value="Positif" {{ $user->mop == 'Positif' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="narkoba_mop1">Positif</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-4">
                                                    <label class="form-label">THC: Tetrahydrocannabinol (Tetrahidrokannabinol)</label>
                                                    <div class="col-md-12">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="radio" name="thc" id="thc0" value="Negatif" {{ $user->thc == 'Negatif' || empty($user->thc) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="thc0">Negatif</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="thc" id="thc1" value="Positif" {{ $user->thc == 'Positif' ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="thc1">Positif</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-end justify-content-end gap-3 mt-4">
                                                    <button type="button" class="btn btn-info" id="btnSaveNarkoba" onclick="saveNarkoba()">
                                                        Simpan & Selanjutnya <i class="ri-arrow-right-line me-1"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-berkas" role="tabpanel" aria-labelledby="v-pills-berkas-tab">
                                <div class="d-flex mb-2">
                                    <div class="w-100">
                                        <p class="text-muted">Unggah Dokumen Pemeriksaan (WAJIB)</p>

                                        <div class="alert alert-info mb-4">
                                            <strong>Catatan Penting:</strong> Parameter Narkoba wajib meliputi: <strong>AMP, MOP, THC</strong>.
                                        </div>

                                        <div class="alert alert-secondary mb-4">
                                            Format: PDF, JPG, PNG. Maksimal 2MB per file.<br>
                                            <a href="{{ asset('assets/templates/template_form_kesehatan.pdf') }}" class="btn btn-sm btn-outline-primary mt-2" download>
                                                <i class="ri-download-2-line align-middle me-1"></i> Unduh Template
                                            </a>
                                        </div>

                                        <form id="berkasForm">
                                            @csrf
                                            <div class="row g-3">
                                                <div class="row mb-3 align-items-center">
                                                    <div class="col-lg-3"><label class="form-label">Hasil Uji Kesehatan</label></div>
                                                    <div class="col-lg-6"><input type="file" class="form-control" name="file_kesehatan" accept=".pdf,.jpg,.jpeg,.png"></div>
                                                    <div class="col-lg-3">
                                                        @if ($user->file_kesehatan)
                                                        <a href="{{ asset('storage/uploads/kesehatan/' . $user->file_kesehatan) }}" target="_blank" class="btn btn-soft-success w-100"><i class="ri-eye-line"></i> Lihat</a>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="row mb-4 align-items-center">
                                                    <div class="col-lg-3"><label class="form-label">Hasil Lab Narkoba</label></div>
                                                    <div class="col-lg-6"><input type="file" class="form-control" name="file_narkoba" accept=".pdf,.jpg,.jpeg,.png"></div>
                                                    <div class="col-lg-3">
                                                        @if ($user->file_narkoba)
                                                        <a href="{{ asset('storage/uploads/narkoba/' . $user->file_narkoba) }}" target="_blank" class="btn btn-soft-success w-100"><i class="ri-eye-line"></i> Lihat</a>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="text-center mb-4">
                                                    <button type="button" class="btn btn-info w-50" id="btnUploadOnly" onclick="uploadBerkasOnly()">
                                                        <i class="ri-upload-cloud-line me-1"></i> Upload / Perbarui Berkas
                                                    </button>
                                                </div>

                                                @if ($user->tanggal_input == null)
                                                <div class="text-end border-top pt-4">
                                                    <div class="alert alert-warning text-start">
                                                        <i class="ri-error-warning-line me-2"></i> <strong>Finalisasi:</strong> Pastikan seluruh data dari tab Antropometri hingga Berkas sudah benar. Form akan terkunci setelah tombol ini ditekan.
                                                    </div>
                                                    <button type="button" class="btn btn-danger btn-lg" id="btnFinalisasi" onclick="confirmFinalisasi()">
                                                        <i class="ri-lock-password-line me-1"></i> Finalisasi & Kirim Seluruh Data
                                                    </button>
                                                </div>
                                                @endif
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
    var save_text = 'Simpan & Selanjutnya <i class="ri-arrow-right-line"></i>';
    var loading_animation = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Menyimpan...';

    function moveTab(tabFrom, tabTo) {
        var triggerEl = document.querySelector('#v-pills-' + tabTo + '-tab');
        if (triggerEl) {
            var tab = new bootstrap.Tab(triggerEl);
            tab.show(); // Trigger tab baru untuk terbuka

            // Scroll otomatis ke atas
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        } else {
            console.log("Tab tujuan tidak ditemukan: " + tabTo);
        }
    }

    // Fungsi Notifikasi
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

    function saveAntropometri() {
        var dataString = $('#antropometriForm').serialize();
        console.log("Data yang terdeteksi: " + dataString);

        var formData = new FormData($('#antropometriForm')[0]);
        formData.append("_token", "{{ csrf_token() }}");

        for (var pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }

        $.ajax({
            url: "{{ url('/applicant/form-mandiri/update-antropometri') }}",
            type: "POST",
            data: formData,
            dataType: "JSON",
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status) {
                    toast("Berhasil! " + data.message, "success");
                    moveTab('pemeriksaan-antropometri', 'pemeriksaan-fisik');
                } else {
                    // Menampilkan pesan kustom dari backend
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: data.message
                    });
                }
            },
            error: function(jqXHR) {
                var errorMessage = 'Terjadi kesalahan sistem saat menyimpan data antropometri.';
                if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                    errorMessage = jqXHR.responseJSON.message; // Pesan kustom dari backend
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: errorMessage
                });
                btnSaveAntropometri.html(save_text).attr('disabled', false);
            }
        });
    }

    function saveFisik() {
        console.log("Menyimpan data pemeriksaan fisik...");
        $('#btnSaveFisik').html(loading_animation).attr('disabled', true);
        var formData = new FormData($('#fisikForm')[0]);
        formData.append("_token", "{{ csrf_token() }}");

        $.ajax({
            url: "{{ url('/applicant/form-mandiri/update-fisik') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status) {
                    toast(data.message, "success");
                    moveTab('pemeriksaan-fisik', 'pemeriksaan-fisik-2');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: data.message
                    });
                }
                $('#btnSaveFisik').html(save_text).attr('disabled', false);
            },
            error: function(jqXHR) {
                var errorMessage = 'Terjadi kesalahan sistem saat menyimpan data fisik.';
                if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                    errorMessage = jqXHR.responseJSON.message; // Pesan kustom dari backend
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: errorMessage
                });
                btnSaveFisik.html(save_text).attr('disabled', false);
            }
        });
    }

    function saveFisik2() {
        console.log("Menyimpan data pemeriksaan fisik 2...");
        $('#btnSaveFisik2').html(loading_animation).attr('disabled', true);
        var formData = new FormData($('#fisik2Form')[0]);
        formData.append("_token", "{{ csrf_token() }}");

        $.ajax({
            url: "{{ url('/applicant/form-mandiri/update-fisik-2') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status) {
                    toast(data.message, "success");
                    moveTab('pemeriksaan-fisik-2', 'pemeriksaan-gigi');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: data.message
                    });
                }
                $('#btnSaveFisik2').html(save_text).attr('disabled', false);
            },
            error: function(jqXHR) {
                var errorMessage = 'Terjadi kesalahan sistem saat menyimpan data fisik 2.';
                if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                    errorMessage = jqXHR.responseJSON.message; // Pesan kustom dari backend
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: errorMessage
                });
                btnSaveFisik2.html(save_text).attr('disabled', false);
            }
        });
    }

    function saveGigi() {
        console.log("Menyimpan data pemeriksaan gigi...");
        $('#btnSaveGigi').html(loading_animation).attr('disabled', true);
        var formData = new FormData($('#gigiForm')[0]);
        formData.append("_token", "{{ csrf_token() }}");

        $.ajax({
            url: "{{ url('/applicant/form-mandiri/update-gigi') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status) {
                    toast(data.message, "success");
                    moveTab('pemeriksaan-gigi', 'pemeriksaan-narkoba');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: data.message
                    });
                }
                $('#btnSaveGigi').html(save_text).attr('disabled', false);
            },
            error: function(jqXHR) {
                var errorMessage = 'Terjadi kesalahan sistem saat menyimpan data gigi.';
                if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                    errorMessage = jqXHR.responseJSON.message; // Pesan kustom dari backend
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: errorMessage
                });
                btnSaveGigi.html(save_text).attr('disabled', false);
            }
        });
    }

    function saveNarkoba() {
        console.log("Menyimpan data pemeriksaan narkoba...");
        $('#btnSaveNarkoba').html(loading_animation).attr('disabled', true);
        var formData = new FormData($('#narkobaForm')[0]);
        formData.append("_token", "{{ csrf_token() }}");

        $.ajax({
            url: "{{ url('/applicant/form-mandiri/update-narkoba') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status) {
                    toast(data.message, "success");
                    moveTab('pemeriksaan-narkoba', 'berkas');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: data.message
                    });
                }
                $('#btnSaveNarkoba').html(save_text).attr('disabled', false);
            },
            error: function(jqXHR) {
                var errorMessage = 'Terjadi kesalahan sistem saat menyimpan data narkoba.';
                if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                    errorMessage = jqXHR.responseJSON.message; // Pesan kustom dari backend
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: errorMessage
                });
                btnSaveNarkoba.html(save_text).attr('disabled', false);
            }
        });
    }

    // Fungsi 1: Hanya Upload Berkas
    function uploadBerkasOnly() {
        $('#btnUploadOnly').html(loading_animation).attr('disabled', true);
        var formData = new FormData($('#berkasForm')[0]);

        $.ajax({
            url: "{{ url('/applicant/form-mandiri/update-berkas') }}", // Nanti di backend tanggal_input dihapus dari sini
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status) {
                    toast(data.message, "success");
                    localStorage.setItem('activeTab', '#v-pills-berkas-tab');
                    setTimeout(() => {
                        location.reload();
                    }, 1000); // Reload agar tombol "Lihat" muncul
                } else {
                    Swal.fire('Error', data.message, 'error');
                }
                $('#btnUploadOnly').html('<i class="ri-upload-cloud-line me-1"></i> Upload / Perbarui Berkas').attr('disabled', false);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
                var errorMessage = 'Terjadi kesalahan sistem saat mengupload file.';
                if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                    errorMessage = jqXHR.responseJSON.message; // Pesan kustom dari backend
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: errorMessage
                });
                $('#btnUploadOnly').html('<i class="ri-upload-cloud-line me-1"></i> Upload / Perbarui Berkas').attr('disabled', false);
            }
        });
    }

    // Fungsi 2: Finalisasi dengan Konfirmasi & Trigger Pengecekan
    function confirmFinalisasi() {
        Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: "Setelah difinalisasi, Anda tidak dapat mengubah data lagi. Pastikan semua pemeriksaan sudah terisi!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Finalisasi!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                processFinalisasi();
            }
        });
    }

    function processFinalisasi() {
        $('#btnFinalisasi').html(loading_animation).attr('disabled', true);
        $.ajax({
            url: "{{ url('/applicant/form-mandiri/finalisasi') }}", // Route baru
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}"
            },
            success: function(data) {
                if (data.status) {
                    Swal.fire('Berhasil!', data.message, 'success').then(() => {
                        location.reload(); // Reload untuk mengunci form dan menampilkan status finalisasi
                    });
                } else {
                    Swal.fire('Data Belum Lengkap', data.message, 'error');
                    $('#btnFinalisasi').html('<i class="ri-lock-password-line me-1"></i> Finalisasi & Kirim Seluruh Data').attr('disabled', false);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
                var errorMessage = 'Terjadi kesalahan sistem saat finalisasi data.';
                if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                    errorMessage = jqXHR.responseJSON.message; // Pesan kustom dari backend
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: errorMessage
                });
                $('#btnFinalisasi').html('<i class="ri-lock-password-line me-1"></i> Finalisasi & Kirim Seluruh Data').attr('disabled', false);
            }
        });
    }

    $(document).ready(function() {
        <?php if (isset($user) && $user->tanggal_input != null && ($user->status_file_kesehatan == 'Pending' || $user->status_file_narkoba == 'Pending')) { ?>
            $('input, select, textarea').prop('disabled', true);
            $('button[id^="btnSave"]').hide();
            $('#btnUploadOnly').hide();
            $('#btnFinalisasi').hide();
            // Sembunyikan juga tombol selanjutnya di tab 1
            $('button[onclick="moveTab(\'data-peserta\', \'pemeriksaan-antropometri\')"]').hide();
        <?php } ?>
    });
</script>
@endpush