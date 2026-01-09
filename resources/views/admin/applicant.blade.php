@extends('master')

@section('title', 'Daftar Peserta')
@section('menu', 'applicant')
@section('menu_parent', 'ujikesehatan')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Daftar Peserta</h4>
                <div class="flex-shrink-0">
                    <button type="button" class="btn btn-rounded btn-info" onclick="showFilter();">
                        <i class="ri-filter-3-line label-icon align-middle btn-outline rounded-pill fs-16 me-2"></i>
                        Filter
                    </button>
                    <button type="button" class="btn btn-rounded btn-info" onclick="add();">
                        <i class="ri-file-add-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                        Tambah
                    </button>
                    <button type="button" class="btn btn-rounded btn-info" onclick="add_import();">
                        <i class="ri-download-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                        Impor Peserta
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
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div id="modal_form" class="modal fade" tabindex="-1" aria-labelledby="modalFormLabel" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- HEADER -->
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Tambah Data Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- FORM -->
            <form id="form">
                <input type="hidden" name="id" id="id">
                <!-- BODY -->
                <div class="modal-body">
                    <div class="row mb-3"></div>
                    <div class="row mb-3">
                        <div class="col-lg">
                            <label for="period_id" class="form-label">Periode</label>
                            <select name="period_id" id="period_id" class="form-control">
                                <option value="">Pilih Periode</option>
                                @foreach($periods as $period)
                                <option value="{{ $period->id }}" {{ ($period->is_active? 'selected' : '') }}>{{ $period->name }} {{ $period->year->name }}</option>
                                @endforeach
                            </select>
                            <div class="text-danger text-error" id="period_id_error">
                                *error
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg">
                            <label for="study_program_id" class="form-label">Program Studi</label>
                            <select name="study_program_id" id="study_program_id" class="form-control">
                                <option value="">Pilih Program Studi</option>
                                @foreach($study_programs as $study_program)
                                <option value="{{ $study_program->id }}">{{ $study_program->name }}</option>
                                @endforeach
                            </select>
                            <div class="text-danger text-error" id="study_program_id_error">
                                *error
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg">
                            <label for="nomor_peserta" class="form-label">No Peserta</label>
                            <input type="text" class="form-control" id="nomor_peserta" name="nomor_peserta" placeholder="No Peserta">
                            <div class="text-danger text-error" id="nomor_peserta_error">
                                *error
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            <div class="text-danger text-error" id="nama_error">
                                *error
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            <div class="text-danger text-error" id="jenis_kelamin_error">
                                *error
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                            <div class="text-danger text-error" id="tanggal_lahir_error">
                                *error
                            </div>
                        </div>
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

<div id="import_modal" class="modal fade" tabindex="-1" aria-labelledby="modalFormLabel" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- HEADER -->
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Import Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- FORM -->
            <form id="import_form">
                <!-- BODY -->
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-lg">
                            <label for="period" class="form-label">Periode</label>
                            <select name="period" id="period" class="form-control">
                                <option value="">Pilih Periode</option>
                                @foreach($periods as $period)
                                <option value="{{ $period->id }}" {{ ($period->is_active? 'selected' : '') }}>{{ $period->name }} {{ $period->year->name }}</option>
                                @endforeach
                            </select>
                            <div class="text-danger text-error" id="period_error">
                                *error
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg">
                            <label for="study_program" class="form-label">Program Studi</label>
                            <select name="study_program" id="study_program" class="form-control">
                                <option value="">Pilih Program Studi</option>
                                @foreach($study_programs as $study_program)
                                <option value="{{ $study_program->id }}">{{ $study_program->name }}</option>
                                @endforeach
                            </select>
                            <div class="text-danger text-error" id="study_program_error">
                                *error
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg">
                            <label for="file" class="form-label">File Excel</label>
                            <input type="file" name="file" id="file" class="form-control">
                            <div class="text-danger text-error" id="file_error">
                                *error
                            </div>
                            <br>
                            <a href="{{ url('admin/applicant/export') }}" class="btn btn-success btn-sm"><i class="ri-download-line"></i> Download Format</a>
                        </div>
                    </div>
                </div>

                <!-- FOOTER -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" id="btnImport" class="btn btn-success btn-load" onclick="save_import();">
                        <i class="ri ri-save-line me-1"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

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
                url: "{{ url('/admin/applicant/show') }}",
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
                    data: 'umur'
                },
                {
                    data: 'study_program_name'
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                }
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
            url = "{{ url('/admin/applicant/add') }}";
        } else {
            url = "{{ url('/admin/applicant/update') }}";
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

    function edit(element, id) {
        save_method = 'update';
        $('.text-error').empty();
        $('#form')[0].reset(); // reset form on modals
        $(element).html(edit_loading_animation);
        //Ajax Load data from ajax
        $.ajax({
            url: "{{ url('/admin/applicant/edit') }}",
            type: "POST",
            data: {
                "id": id,
                "_token": "{{ csrf_token() }}",
            },
            dataType: "JSON",
            success: function(data) {
                console.log(data);
                for (const [key, value] of Object.entries(data)) {
                    $('#' + key).val(value);
                }
                $('#user_id').val(data.user_id).trigger('change');
                $(element).html('<i class="ri ri-pencil-line label-icon align-middle fs-16 me-2"></i> Edit');

                $('#btnSave').html(update_text); // Set Title to Bootstrap modal title
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('#modal-title').text('Edit Data'); // Set title to Bootstrap modal title
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // alert('Error get data from ajax');
                showAlert("Error!", textStatus, "error");
            }
        });
    }

    function deletee(id) {
        Swal.fire({
            title: "",
            icon: 'question',
            text: "Yakin Ingin Menghapus Data ?",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak, Batal!",
            reverseButtons: !0
        }).then(function(e) {
            if (e.value === true) {
                $.ajax({
                    url: "{{ url('/admin/applicant/delete') }}",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        "id": id,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(results) {
                        showAlert("Berhasil!", "Berhasil Menghapus Data", "success");
                        reload_table();

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        showAlert("Error!", textStatus, "error");
                    }
                });
            } else {
                e.dismiss;
            }
        }, function(dismiss) {
            return false;
        })
    }
</script>
@endpush