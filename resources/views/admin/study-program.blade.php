@extends('master')

@section('title', 'Program Studi')
@section('menu', 'study-program')
@section('menu_parent', 'datapelengkap')

@section('content')
<?php $key_ = session()->get('key') ?>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Program Studi</h4>
                <?php if (can_access($permissions, $key_, 'add')) { ?>

                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-rounded btn-info" onclick="add();">
                            <i class="ri-file-add-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                            Tambah
                        </button>
                    </div>
                <?php } ?>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="table" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Program Studi</th>
                            <?php if (can_access($permissions, $key_, 'edit') || can_access($permissions, $key_, 'delete')) { ?>
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
<?php if (can_access($permissions, $key_, 'add') || can_access($permissions, $key_, 'edit')) { ?>
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
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name">
                                <div class="text-danger text-error" id="name_error">
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
<?php } ?>

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
                url: "{{ url('/admin/study-program/show') }}",
                data: {
                    "_token": "{{ csrf_token() }}"
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
                    data: 'name'
                },
                <?php if (can_access($permissions, $key_, 'edit') || can_access($permissions, $key_, 'delete')) { ?> {
                        data: 'action',
                        orderable: false,
                        searchable: false
                    }
                <?php } ?>
            ],

            order: [
                [1, 'asc']
            ]
        });
    });

    function reload_table() {
        table.ajax.reload(null, false);
    }

    <?php if (can_access($permissions, $key_, 'add')) { ?>

        function add() {
            save_method = 'add';
            $('.text-error').empty(); // clear error string
            $('#user_id').val('').trigger('change');
            $('#form')[0].reset(); // reset form on modals
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
                url = "{{ url('/admin/study-program/add') }}";
            } else {
                url = "{{ url('/admin/study-program/update') }}";
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
    <?php } ?>
    <?php if (can_access($permissions, $key_, 'edit')) { ?>

        function edit(element, id) {
            save_method = 'update';
            $('.text-error').empty();
            $('#form')[0].reset(); // reset form on modals
            $(element).html(edit_loading_animation);
            //Ajax Load data from ajax
            $.ajax({
                url: "{{ url('/admin/study-program/edit') }}",
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
    <?php } ?>
    <?php if (can_access($permissions, $key_, 'delete')) { ?>

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
                        url: "{{ url('/admin/study-program/delete') }}",
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
    <?php } ?>
</script>
@endpush