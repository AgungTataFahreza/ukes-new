@extends('master')

@section('content')
<?php $key_ = session()->get('key') ?>

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Akun</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
    </ol>
</div>
<!-- row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Menu</h4>
                <div>
                    <?php if (can_access($permissions, $key_, 'add')) { ?>
                        <button type="button" class="btn btn-rounded btn-info" onclick="add();"><span
                                class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                            </span>Add</button>
                    <?php } ?>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table-bordered table-striped verticle-middle table-responsive-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Role</th>
                                <?php if (can_access($permissions, $key_, 'edit') || can_access($permissions, $key_, 'delete')) { ?>
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
</div>

<?php if (can_access($permissions, $key_, 'add') || can_access($permissions, $key_, 'edit')) { ?>
    <div class="modal fade" id="modal_form" tabindex="-1" aria-labelledby="exampleModalgridLabel" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Tambah Data Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>x</span></button>
                </div>
                <form id="form">
                    <!-- <input type="hidden" name="id" id="id"> -->
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div>
                                    <label for="id" class="form-label">Pegawai</label>
                                    <select name="id" id="id" class="form-control">
                                    </select>
                                    <div class="text-danger text-error" id="id_error">*error</div>
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
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-dismiss="modal"><i class="fa fa-close me-1 align-middle"></i> Close</a>
                            <button type="button" id="btnSave" class="btn btn-success btn-load" onclick="save();"><i class="fa fa-save label-icon align-middle fs-16 me-2"></i> Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
@endsection

@push('after-script')
<script type="text/javascript">
    var loading_animation = '<span class="d-flex align-items-center"><span class="flex-grow-1 me-2" style="margin-right:5px;">Loading...</span><span class="spinner-border flex-shrink-0" role="status" style="width: 1rem;height:1rem;"></span></span>';
    var edit_loading_animation = '<span class="d-flex align-items-center"><span class="flex-grow-1 me-2" style="font-size:10px;">Loading...</span><span class="spinner-border flex-shrink-0" role="status" style="width:10px;height:10px;"></span></span>';
    var save_text = '<i class="fa fa-save label-icon align-middle fs-16 me-2"></i> <span class="align-middle">Simpan</span>';
    var update_text = '<i class="fa fa-save label-icon align-middle fs-16 me-2"></i> <span class="align-middle">Update</span>';

    $(document).ready(function() {
        loadRoles();

        function loadRoles() {
            $.get("{{ url('/admin/user/get-user') }}", function(response) {
                console.log(response);
                let userOptions = '';
                response.forEach(function(user) {
                    userOptions += `<option value="${user.id}">${user.nama}</option>`;
                });
                $('#id').html(userOptions);
                $('#id').select2();
            });
        }


        table = $('#table').DataTable({
            "autoWidth": true,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            // "order": [], //Initial no order.
            "language": {
                processing: '<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
            },
            "scrollX": true,
            // "ordering": false,
            // Load data for the table's content from an Ajax source
            "ajax": {
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
            "bDestroy": true,
            // "buttons": [
            //     'copy', 'csv', 'excel', 'pdf', 'print'
            // ],
            // // dom: 'Bfrtip',
            // dom: 'lBfrtip',
            //Set column definition initialisation properties.
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
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'role_name',
                    name: 'role_name'
                },
                <?php if (can_access($permissions, $key_, 'edit') || can_access($permissions, $key_, 'delete')) { ?> {
                        data: 'action',
                        name: 'action'
                    }
                <?php } ?>
            ],
            order: [
                [1, 'asc']
            ]
        });

    });

    <?php if (can_access($permissions, $key_, 'add')) { ?>

        function add() {
            save_method = 'add';
            $('.text-error').empty(); // clear error string
            $('#form')[0].reset(); // reset form on modals
            $('#id').val(null).trigger('change');
            $('#id').off('select2:selecting');
            $('#id').show();
            $('#btnSave').html(save_text);
            $('#modal-title').text('Tambah Data Baru'); // Set Title to Bootstrap modal title
            $('#modal_form').modal('show'); // show bootstrap modal
        }
    <?php } ?>

    <?php if (can_access($permissions, $key_, 'add') || can_access($permissions, $key_, 'edit')) { ?>

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
            $('#id').prop('disabled', false);

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
                        swal("Berhasil!", text, "success");
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
                    swal("Error!", textStatus, "error");
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                }
            });
        }
    <?php } ?>

    function reload_table() {
        table.ajax.reload(null, false); //reload datatable ajax 
    }

    <?php if (can_access($permissions, $key_, 'edit')) { ?>

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
                    // console.log(data);
                    // for (const [key, value] of Object.entries(data)) {
                    //     $('#' + key).val(value);
                    // }
                    $('[name="id"]').val(data.id);
                    $('[name="role_id"]').val(data.role_id);
                    $('#id').prop('disabled', true);
                    $('#id').val(data.id).trigger('change');
                    $('#id').on('select2:selecting', function(e) {
                        e.preventDefault(); // Batalkan perubahan
                    });

                    $(element).html('<i class="fa fa-pencil"></i> Edit');

                    $('#btnSave').html(update_text); // Set Title to Bootstrap modal title
                    $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                    $('#modal-title').text('Edit Data'); // Set title to Bootstrap modal title
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // alert('Error get data from ajax');
                    swal("Error!", textStatus, "error");
                }
            });
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
    <?php } ?>

    <?php if (can_access($permissions, $key_, 'delete')) { ?>

        function deletee(id) {
            swal({
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
                            swal("Berhasil!", "Berhasil Menghapus Data", "success");
                            reload_table();

                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            swal("Error!", textStatus, "error");
                        }
                    });
                } else {
                    e.dismiss;
                }
            }, function(dismiss) {
                return false;
            })
        }
    <?php } ?>
</script>
@endpush