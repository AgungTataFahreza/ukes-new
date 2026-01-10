@extends('master')

@section('title', 'Registrasi Peserta')
@section('menu', 'registration')
@section('menu_parent', 'ujikesehatan')

@section('content')
<?php $key_ = session()->get('key') ?>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Registrasi Peserta</h4>
                <div class="flex-shrink-0">
                    <button type="button" class="btn btn-rounded btn-info" onclick="showFilter();">
                        <i class="ri-filter-3-line label-icon align-middle btn-outline rounded-pill fs-16 me-2"></i>
                        Filter
                    </button>
                    <!-- <button type="button" class="btn btn-rounded btn-info" onclick="add();">
                        <i class="ri-file-add-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                        Tambah
                    </button>
                    <button type="button" class="btn btn-rounded btn-info" onclick="add_import();">
                        <i class="ri-download-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                        Impor Peserta
                    </button> -->
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
                            <th scope="col">Tgl Registrasi</th>
                            <th scope="col">Tgl Periksa</th>
                            <th scope="col">Status Lulus</th>
                            <th scope="col">Status Registrasi</th>
                            <th scope="col">Status Bayar</th>
                            <?php if (can_access($permissions, $key_, 'edit')) { ?>
                                <th scope="col">Action</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<?php if (can_access($permissions, $key_, 'edit')) { ?>
    <div id="modal_form" class="modal fade" tabindex="-1" aria-labelledby="modalFormLabel" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- HEADER -->
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Registrasi Peserta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- FORM -->
                <form id="form">
                    <input type="hidden" name="id" id="id">
                    <!-- BODY -->
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" id="nama" class="form-control" value="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="tempat_periksa" class="form-label">Tempat Periksa</label>
                            <input type="text" id="tempat_periksa" name="tempat_periksa" class="form-control" value="" required placeholder="Klinik Pratama Poltekkes Medan">
                            <div class="text-danger text-error" id="tempat_periksa_error">
                                *error
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="date-field" class="form-label">Tanggal Daftar</label>
                            <input type="date" class="form-control" id="tgl_registrasi" name="tgl_registrasi" required>
                            <div class="text-danger text-error" id="tgl_registrasi_error">
                                *error
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="no-urut" class="form-label">Nomor Antri Pasien</label>
                            <input type="text" id="nomor_antrian" name="nomor_antrian" class="form-control"
                                placeholder="000" required />
                            <div class="text-danger text-error" id="nomor_antrian_error">
                                *error
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="bayar" class="form-label">Status Bayar</label>
                            <div class="form-control">
                                <input class="form-check-input" type="checkbox" id="status_bayar" name="status_bayar" value="1">
                                <label class="form-check-label" for="status_bayar"> Bayar Reg, Uji Kes, Narkoba
                            </div>
                            </label>
                        </div>
                    </div>

                    <!-- FOOTER -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" id="btnSave" class="btn btn-success btn-load" onclick="save();">
                            <i class="ri ri-save-line me-1"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

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
                <div class="row mb-3"></div>
                <div class="row mb-3">
                    <div class="col-lg">
                        <label for="period_id_filter" class="form-label">Periode</label>
                        <select name="period_id_filter" id="period_id_filter" class="form-control">
                            <option value="">Pilih Periode</option>
                            @foreach($periods as $period)
                            <option value="{{ $period->id }}" {{ ($period->is_active? 'selected' : '') }}>{{ $period->name }} {{ $period->year->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg">
                        <label for="study_program_id_filter" class="form-label">Program Studi</label>
                        <select name="study_program_id_filter" id="study_program_id_filter" class="form-control">
                            <option value="">Semua</option>
                            @foreach($study_programs as $study_program)
                            <option value="{{ $study_program->id }}">{{ $study_program->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg">
                        <label for="status_registrasi_filter" class="form-label">Status Registrasi</label>
                        <select name="status_registrasi_filter" id="status_registrasi_filter" class="form-control">
                            <option value="">Semua</option>
                            <option value="1">Sudah Registrasi</option>
                            <option value="0" selected>Belum Registrasi</option>
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
            // scrollX: true,
            bDestroy: true,
            // language: {
            //     processing: '<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>' +
            //         '<span class="sr-only">Loading...</span>'
            // },

            ajax: {
                type: "POST",
                url: "{{ url('/admin/registration/show') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "period_id": function() {
                        return $('#period_id_filter').val();
                    },
                    "study_program_id": function() {
                        return $('#study_program_id_filter').val();
                    },
                    "status_registrasi": function() {
                        return $('#status_registrasi_filter').val();
                    },
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                }
            },

            // aLengthMenu: [
            //     [10, 25, 50, 100, -1],
            //     [10, 25, 50, 100, "All"]
            // ],
            // iDisplayLength: 10,

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
                    data: 'tanggal_registrasi'
                },
                {
                    data: 'tanggal_periksa'
                },
                {
                    data: 'status_lulus'
                },
                {
                    data: 'status_registrasi'
                },
                {
                    data: 'status_bayar'
                },
                <?php if (can_access($permissions, $key_, 'edit')) { ?> {
                        data: 'action',
                        orderable: false,
                        searchable: false
                    }
                <?php } ?>
            ],

            order: [
                [3, 'asc']
            ]
        });
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
    <?php if (can_access($permissions, $key_, 'edit')) { ?>

        function save() {
            $('.text-error').empty(); // clear error string
            $('#btnSave').html(loading_animation); //change button text
            $('#btnSave').attr('disabled', true); //set button disable 
            var url;

            if (save_method == 'add') {
                url = "{{ url('/admin/registration/add') }}";
            } else {
                url = "{{ url('/admin/registration/update') }}";
            }

            var formData = new FormData($('#form')[0]);
            formData.append("_token", "{{ csrf_token() }}");

            formData.forEach((value, key) => {
                console.log(key, value);
            });

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
                    $('#btnSave').html(save_text);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // alert('Error adding / update data');
                    showAlert("Error!", textStatus, "error");
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                    $('#btnSave').html(save_text);
                    $('#btnSave').attr('disabled', false); //set button enable 
                }
            });
        }

        function edit(element, id) {
            save_method = 'update';
            $('.text-error').empty();
            $('#form')[0].reset(); // reset form on modals
            $(element).html(edit_loading_animation);
            //Ajax Load data from ajax
            $.ajax({
                url: "{{ url('/admin/registration/edit') }}",
                type: "POST",
                data: {
                    "id": id,
                    "_token": "{{ csrf_token() }}",
                },
                dataType: "JSON",
                success: function(data) {
                    console.log(data);
                    for (const [key, value] of Object.entries(data)) {
                        const el = $('#' + key);

                        if (el.attr('type') === 'checkbox') {
                            el.prop('checked', value == 1);
                        } else {
                            el.val(value);
                        }
                    }
                    // $('#user_id').val(data.user_id).trigger('change');
                    $(element).html('<i class="ri ri-file-list-line label-icon align-middle fs-16 me-2"></i> Daftar');

                    // $('#btnSave').html(update_text); // Set Title to Bootstrap modal title
                    $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                    $('#modal-title').text('Registrasi Peserta'); // Set title to Bootstrap modal title
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // alert('Error get data from ajax');
                    $(element).html('<i class="ri ri-file-list-line label-icon align-middle fs-16 me-2"></i> Daftar');
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                    showAlert("Error!", textStatus, "error");
                }
            });
        }
    <?php } ?>
</script>
@endpush