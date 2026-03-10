@extends('master')

@section('title', 'Verifikasi Uji Kesehatan')
@section('menu', 'verification')
@section('menu_parent', 'ujikesehatan')

@section('content')
<?php $key_ = session()->get('key') ?>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Daftar Verifikasi Uji Kesehatan</h4>
                <div class="flex-shrink-0">
                    <button type="button" class="btn btn-rounded btn-info" onclick="showFilter();">
                        <i class="ri-filter-3-line label-icon align-middle btn-outline rounded-pill fs-16 me-2"></i>
                        Filter
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table id="table" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" width="40px">No</th>
                            <th scope="col">Periode</th>
                            <th scope="col">No Peserta</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Tanggal Input</th>
                            <th scope="col">Status</th>
                            <?php if (can_access($permissions, $key_, 'edit')) { ?>
                                <th scope="col">Action</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="filter_modal" class="modal fade" tabindex="-1" aria-labelledby="modalFormLabel" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Filter Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-lg">
                        <label for="period_id_filter" class="form-label">Periode</label>
                        <select name="period_id_filter" id="period_id_filter" class="form-control">
                            <option value="">Pilih Periode</option>
                            @foreach($periods as $period)
                            <option value="{{ $period->id }}" {{ ($period->is_active? 'selected' : '') }}>
                                {{ $period->name }} {{ $period->year->name }}
                            </option>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
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
    var table;

    $(document).ready(function() {
        table = $('#table').DataTable({
            autoWidth: true,
            processing: true,
            serverSide: true,
            ajax: {
                type: "POST",
                url: "{{ url('/admin/verification/show') }}", // URL SESUAI ROUTE BARU
                data: {
                    "_token": "{{ csrf_token() }}",
                    "period_id": function() {
                        return $('#period_id_filter').val();
                    },
                    "study_program_id": function() {
                        return $('#study_program_id_filter').val();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'period_name',
                    name: 'period_name'
                },
                {
                    data: 'nomor_peserta',
                    name: 'nomor_peserta'
                },
                {
                    data: 'name',
                    name: 'name'
                }, // dari tabel applicant
                {
                    data: 'jenis_kelamin',
                    name: 'jenis_kelamin'
                },
                {
                    data: 'study_program_name',
                    name: 'study_program_name'
                },
                {
                    data: 'tanggal_input',
                    name: 'tanggal_input'
                },

                {
                    data: 'status',
                    name: 'status'
                },
                <?php if (can_access($permissions, $key_, 'edit')) { ?> {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                <?php } ?>
            ],
            order: [
                [3, 'asc']
            ] // Urutkan berdasarkan Nama
        });
    });

    function reload_table() {
        table.ajax.reload(null, false);
    }

    function showFilter() {
        $('#filter_modal').modal('show');
    }

    function filter() {
        $('#btnFilter').html(loading_animation);
        $('#btnFilter').attr('disabled', true);

        $('#filter_modal').modal('hide');
        $('#btnFilter').html('<i class="ri ri-save-line me-1"></i> Filter');
        $('#btnFilter').attr('disabled', false);
        reload_table();
    }
</script>
@endpush