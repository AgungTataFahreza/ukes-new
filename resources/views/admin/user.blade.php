@extends('master')

@section('title', 'User')
@section('menu', 'user')
@section('menu_parent', 'datapengguna')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Tahun</h4>
                <div class="flex-shrink-0">
                    <button type="button" class="btn btn-rounded btn-info" onclick="add();">
                        <i class="ri-file-add-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                        Tambah
                    </button>
                </div>
            </div><!-- end card header -->
            <div class="card-body">
                <table id="table" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div><!-- end card-body -->
        </div>
    </div>
</div>

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
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div>
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" id="name" class="form-control">
                                <div class="text-danger text-error" id="name_error">*error</div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div>
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control">
                                <div class="text-danger text-error" id="username_error">*error</div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div>
                                <label for="role_id" class="form-label">Role</label>
                                <select name="role_id" id="role_id" class="form-control">
                                    <?php foreach ($roles as $role) { ?>
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    <?php } ?>
                                </select>
                                <div class="text-danger text-error" id="role_id_error">*error</div>
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

@endsection

@push('after-script')
<script type="text/javascript">
    var loading_animation = '<span class="d-flex align-items-center"><span class="flex-grow-1 me-2" style="margin-right:5px;">Loading...</span><span class="spinner-border flex-shrink-0" role="status" style="width: 1rem;height:1rem;"></span></span>';
    var edit_loading_animation = '<span class="d-flex align-items-center"><span class="flex-grow-1 me-2" style="font-size:10px;">Loading...</span><span class="spinner-border flex-shrink-0" role="status" style="width:10px;height:10px;"></span></span>';
    var save_text = '<i class="ri ri-save-line label-icon align-middle fs-16 me-2"></i> <span class="align-middle">Simpan</span>';
    var update_text = '<i class="ri ri-save-line label-icon align-middle fs-16 me-2"></i> <span class="align-middle">Update</span>';

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
                "type": "POST",
                "url": "{{ url('/admin/user/show') }}",
                "data": {
                    "_token": "{{ csrf_token() }}"
                },
                "error": function(jqXHR, textStatus, errorThrown) {
                    // alert('Error adding / update data');
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                    // $('#btnSave').attr('disabled', false); //set button enable 
                },
            },
            columns: [
                // {
                //     data: 'no',
                //     name: 'no'
                // },
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'role_name',
                    name: 'role_name'
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ],
            order: [
                [1, 'asc']
            ]
        });

    });


    function add() {
        save_method = 'add';
        $('.text-error').empty(); // clear error string
        $('#form')[0].reset(); // reset form on modals
        $('#btnSave').html(save_text);
        $('#modal-title').text('Tambah Data Baru'); // Set Title to Bootstrap modal title
        $('#modal_form').modal('show'); // show bootstrap modal
    }

    function save() {
        $('.text-error').empty(); // clear error string
        $('#btnSave').html(loading_animation); //change button text
        $('#btnSave').attr('disabled', true); //set button disable 
        var url;

        if (save_method == 'add') {
            url = "{{ url('/admin/user/add') }}";
        } else {
            url = "{{ url('/admin/user/update') }}";
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

    function edit(element, id) {
        save_method = 'update';
        $('.text-error').empty();
        $('#form')[0].reset(); // reset form on modals
        $(element).html(edit_loading_animation);
        //Ajax Load data from ajax
        $.ajax({
            url: "{{ url('/admin/user/edit') }}",
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
                    url: "{{ url('/admin/user/delete') }}",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        "id": id,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(results) {
                        if (results.status == false) {
                            showAlert("Gagal!", results.message, "error");
                            return;
                        }

                        showAlert("Berhasil!", "Berhasil Menghapus Data", "success");
                        reload_table();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
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

    function reset_password(id) {
        swal({
            title: "",
            icon: 'question',
            text: "Yakin Ingin Reset Password ?",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Ya!",
            cancelButtonText: "Tidak, Batal!",
            reverseButtons: !0
        }).then(function(e) {
            if (e.value === true) {
                $.ajax({
                    url: "{{ url('/admin/user/reset-password') }}",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        "id": id,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(results) {
                        swal("Berhasil!", "Berhasil Reset Password", "success");
                        reload_table();

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        swal("Error!", textStatus, "error");
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                    }
                });
            } else {
                e.dismiss;
            }
        }, function(dismiss) {
            return false;
        })
    }

    function reload_table() {
        table.ajax.reload(null, false); //reload datatable ajax 
    }
</script>
@endpush