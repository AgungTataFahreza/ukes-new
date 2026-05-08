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
                <h4 class="card-title mb-0 flex-grow-1">Formulir Uji Kesehatan</h4>
                <div class="flex-shrink-0">
                    <button type="button" class="btn btn-rounded btn-info" onclick="showFilter();">
                        <i class="ri-filter-3-line label-icon align-middle btn-outline rounded-pill fs-16 me-2"></i>
                        Filter
                    </button>
                </div>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="table" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Periode</th>
                            <th scope="col">No Peserta</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Tanggal Registrasi</th>
                            <th scope="col">Tanggal Pemeriksaan</th>
                            <?php if (can_access($permissions, $key_, 'edit')) { ?>
                                <th scope="col">Action</th>
                            <?php } ?>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div id="filter_modal" class="modal fade" tabindex="-1" aria-labelledby="modalFormLabel" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- HEADER -->
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- FORM -->
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-lg">
                        <label for="period_id_filter" class="form-label">Periode</label>
                        <select name="period_id_filter" id="period_id_filter" class="form-control">
                            <option value="">Pilih Periode</option>
                            @foreach($periods as $period)
                            <option value="{{ $period->id }}" {{ ($period->is_active? 'selected' : '') }}>{{ $period->name }} {{ $period->year->name ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg">
                        <label for="study_program_id_filter" class="form-label">Program Studi</label>
                        <select name="study_program_id_filter" id="study_program_id_filter" class="form-control">
                            <option value="">Semua Program Studi</option>
                            @foreach($study_programs as $study_program)
                            <option value="{{ $study_program->id }}">{{ $study_program->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg">
                        <label for="tgl_registrasi_filter" class="form-label">Tanggal Registrasi</label>
                        <select name="tgl_registrasi_filter" id="tgl_registrasi_filter" class="form-control">
                            <option value="">Semua Tanggal</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg">
                        <label for="tgl_periksa_filter" class="form-label">Tanggal Pemeriksaan</label>
                        <select name="tgl_periksa_filter" id="tgl_periksa_filter" class="form-control">
                            <option value="">Semua Tanggal</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg">
                        <label for="tempat_periksa_filter" class="form-label">Tempat Periksa</label>
                        <select name="tempat_periksa_filter" id="tempat_periksa_filter" class="form-control">
                            <option value="">Semua Tempat</option>
                            <option value="Klinik">Klinik Pratama (Internal)</option>
                            <option value="Lainnya">Lainnya (Peserta Luar)</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- FOOTER -->
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" id="btnFilter" class="btn btn-success btn-load" onclick="filter();">
                    <i class="ri ri-save-line me-1"></i> Filter
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('after-script')
<script type="text/javascript">
    var loading_animation = '<span class="d-flex align-items-center"><span class="flex-grow-1 me-2" style="margin-right:5px;">Loading...</span><span class="spinner-border flex-shrink-0" role="status" style="width: 1rem;height:1rem;"></span></span>';
    var edit_loading_animation = '<span class="d-flex align-items-center"><span class="flex-grow-1 me-2" style="font-size:10px;">Loading...</span><span class="spinner-border flex-shrink-0" role="status" style="width:10px;height:10px;"></span></span>';
    var save_text = '<i class="ri ri-save-line label-icon align-middle fs-16 me-2"></i> <span class="align-middle">Simpan</span>';
    var update_text = '<i class="ri ri-save-line label-icon align-middle fs-16 me-2"></i> <span class="align-middle">Update</span>';

    var table;

    $(document).ready(function() {
        table = $('#table').DataTable({
            autoWidth: true,
            processing: true,
            serverSide: true,
            bDestroy: true,
            ajax: {
                type: "POST",
                url: "{{ url('/admin/medical-form/show') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "period_id": function() {
                        return $('#period_id_filter').val();
                    },
                    "study_program_id": function() {
                        return $('#study_program_id_filter').val();
                    },
                    "tgl_registrasi": function() {
                        return $('#tgl_registrasi_filter').val();
                    },
                    "tgl_periksa": function() {
                        return $('#tgl_periksa_filter').val();
                    },
                    "tempat_periksa": function() {
                        return $('#tempat_periksa_filter').val();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR, textStatus, errorThrown);
                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'period_name'
                },
                {
                    data: 'nomor_peserta'
                },
                {
                    data: 'nama'
                },
                {
                    data: 'jenis_kelamin'
                },
                {
                    data: 'study_program_name'
                },
                {
                    data: 'tgl_registrasi'
                },
                {
                    data: 'tgl_periksa'
                },
                <?php if (can_access($permissions, $key_, 'edit')) { ?> {
                        data: 'action',
                        orderable: false,
                        searchable: false
                    },
                <?php } ?> {
                    data: 'status'
                }
            ],
            order: [
                [9, 'asc'], // Pertama: urutkan berdasarkan Status (index 9)
                [3, 'asc'] // Kedua: urutkan berdasarkan Nama (index 3)
            ] // Urut berdasarkan nama
        });

        // 2. AJAX UNTUK DEPENDENT DROPDOWN TANGGAL
        $('#period_id_filter').change(function() {
            var periodId = $(this).val();
            var regDropdown = $('#tgl_registrasi_filter');
            var periksaDropdown = $('#tgl_periksa_filter');

            regDropdown.html('<option value="">Memuat...</option>');
            periksaDropdown.html('<option value="">Memuat...</option>');

            $.ajax({
                url: "{{ url('/admin/medical-form/get-dates') }}",
                type: "GET",
                data: {
                    period_id: periodId
                },
                success: function(data) {
                    regDropdown.html('<option value="">Semua Tanggal</option>');
                    periksaDropdown.html('<option value="">Semua Tanggal</option>');

                    function formatTanggalIndo(dateStr) {
                        var parts = dateStr.split('-');
                        return parts[2] + '-' + parts[1] + '-' + parts[0];
                    }

                    $.each(data.tgl_registrasi, function(index, date) {
                        regDropdown.append('<option value="' + date + '">' + formatTanggalIndo(date) + '</option>');
                    });

                    $.each(data.tgl_periksa, function(index, date) {
                        periksaDropdown.append('<option value="' + date + '">' + formatTanggalIndo(date) + '</option>');
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR, textStatus, errorThrown);
                    regDropdown.html('<option value="">Gagal Memuat</option>');
                    periksaDropdown.html('<option value="">Gagal Memuat</option>');
                }
            });
        });

        // Trigger pertama kali untuk load tanggal bawaan saat modal dibuka
        $('#period_id_filter').trigger('change');
    });

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
</script>
@endpush