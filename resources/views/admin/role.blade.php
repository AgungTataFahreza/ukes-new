@extends('master')

@section('content')
<?php $key_ = session()->get('key') ?>
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Akun</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Role</a></li>
    </ol>
</div>
<!-- row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Role</h4>
                <div>
                    <?php if (can($key_, 'add')) { ?>
                        <a href="{{ url('admin/role/add') }}" type="button" class="btn btn-rounded btn-info"><span
                                class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                            </span>Add</a>
                    <?php } ?>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table-bordered table-striped verticle-middle table-responsive-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Role</th>
                                <th scope="col">Jumlah User</th>
                                <?php if (can($key_, 'edit') || can($key_, 'delete')) { ?>
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

@endsection

@push('after-script')
<script type="text/javascript">
    var loading_animation = '<span class="d-flex align-items-center"><span class="flex-grow-1 me-2" style="margin-right:5px;">Loading...</span><span class="spinner-border flex-shrink-0" role="status" style="width: 1rem;height:1rem;"></span></span>';
    var edit_loading_animation = '<span class="d-flex align-items-center"><span class="flex-grow-1 me-2" style="font-size:10px;">Loading...</span><span class="spinner-border flex-shrink-0" role="status" style="width:10px;height:10px;"></span></span>';
    var save_text = '<i class="fa fa-save label-icon align-middle fs-16 me-2"></i> <span class="align-middle">Simpan</span>';
    var update_text = '<i class="fa fa-save label-icon align-middle fs-16 me-2"></i> <span class="align-middle">Update</span>';

    $(document).ready(function() {
        table = $('#table').DataTable({
            "autoWidth": true,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            // "order": [], //Initial no order.
            "language": {
                processing: '<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
            },
            "scrollX": true,
            // Load data for the table's content from an Ajax source
            "ajax": {
                "type": "POST",
                "url": "{{ url('/admin/role/show') }}",
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
            columns: [{
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
                    data: 'total_user',
                    name: 'total_user'
                },
                <?php if (can($key_, 'edit') || can($key_, 'delete')) { ?> {
                        data: 'action',
                        name: 'action'
                    }
                <?php } ?>
            ],
            order: [
                [0, 'asc']
            ]
        });

    });

    // function add() {
    //     save_method = 'add';
    //     $('.text-error').empty(); // clear error string
    //     $('#form')[0].reset(); // reset form on modals
    //     $('#btnSave').html(save_text);
    //     $('#modal-title').text('Tambah Data Baru'); // Set Title to Bootstrap modal title
    //     $('#modal_form').modal('show'); // show bootstrap modal
    // }

    // function save() {
    //     $('.text-error').empty(); // clear error string
    //     $('#btnSave').html(loading_animation); //change button text
    //     $('#btnSave').attr('disabled', true); //set button disable 
    //     var url;

    //     if (save_method == 'add') {
    //         url = "{{ url('/admin/menu/add') }}";
    //     } else {
    //         url = "{{ url('/admin/menu/update') }}";
    //     }

    //     var formData = new FormData($('#form')[0]);
    //     formData.append("_token", "{{ csrf_token() }}");

    //     formData.forEach((value, key) => {
    //         console.log(key, value);
    //     });

    //     // var checkbox1Value = formData.get('has_view');
    //     // var checkbox2Value = formData.get('has_add');
    //     // var checkbox3Value = formData.get('has_edit');
    //     // var checkbox4Value = formData.get('has_delete');

    //     // console.log(checkbox1Value); // Output: "option1" (if checked)
    //     // console.log(checkbox2Value); // Output: "option2" (if checked)
    //     // console.log(checkbox3Value);
    //     // console.log(checkbox4Value);

    //     $.ajax({
    //         url: url,
    //         type: "POST",
    //         data: formData,
    //         dataType: "JSON",
    //         processData: false,
    //         contentType: false,
    //         success: function(data) {
    //             console.log(data);
    //             if (data.status) //if success close modal and reload ajax table
    //             {
    //                 var text = data.message;
    //                 // if (save_method == 'add') {
    //                 //     text = 'Data Berhasil Ditambahkan';
    //                 // } else {
    //                 //     text = 'Data Berhasil Diperbaharui';
    //                 // }

    //                 // toastr.success(text);
    //                 swal("Berhasil!", text, "success");
    //                 // notification('success', 'Success', text);
    //                 $('#modal_form').modal('hide');
    //                 reload_table();
    //             } else {
    //                 console.log(data.message);
    //                 for (const [key, value] of Object.entries(data.message)) {
    //                     $('#' + key + '_error').html('*' + value);
    //                 }

    //                 if (save_method == 'add') {
    //                     $('#btnSave').html(save_text);
    //                 } else {
    //                     $('#btnSave').html(update_text);
    //                 }
    //             }

    //             $('#btnSave').attr('disabled', false); //set button enable 
    //         },
    //         error: function(jqXHR, textStatus, errorThrown) {
    //             // alert('Error adding / update data');
    //             swal("Error!", textStatus, "error");
    //             console.log(jqXHR);
    //             console.log(textStatus);
    //             console.log(errorThrown);
    //             // $('#btnSave').attr('disabled', false); //set button enable 
    //         }
    //     });
    // }

    // function reload_table() {
    //     table.ajax.reload(null, false); //reload datatable ajax 
    // }

    // function edit(element, id) {
    //     save_method = 'update';
    //     $('.text-error').empty();
    //     $('#form')[0].reset(); // reset form on modals
    //     $(element).html(edit_loading_animation);
    //     //Ajax Load data from ajax
    //     $.ajax({
    //         url: "{{ url('/admin/menu/edit') }}",
    //         type: "POST",
    //         data: {
    //             "id": id,
    //             "_token": "{{ csrf_token() }}",
    //         },
    //         dataType: "JSON",
    //         success: function(data) {
    //             // console.log(data);
    //             // for (const [key, value] of Object.entries(data)) {
    //             //     $('#' + key).val(value);
    //             // }
    //             $('[name="id"]').val(data.id);
    //             $('[name="name"]').val(data.name);
    //             $('[name="menu_id"]').val(data.menu_id);
    //             $('#has_view').prop('checked', Boolean(data.has_view));
    //             $('#has_add').prop('checked', Boolean(data.has_add));
    //             $('#has_edit').prop('checked', Boolean(data.has_edit));
    //             $('#has_delete').prop('checked', Boolean(data.has_delete));

    //             $(element).html('<i class="fa fa-pencil"></i> Edit');

    //             $('#btnSave').html(update_text); // Set Title to Bootstrap modal title
    //             $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
    //             $('#modal-title').text('Edit Data'); // Set title to Bootstrap modal title
    //         },
    //         error: function(jqXHR, textStatus, errorThrown) {
    //             // alert('Error get data from ajax');
    //             swal("Error!", textStatus, "error");
    //         }
    //     });
    // }
    function reload_table() {
        table.ajax.reload(null, false); //reload datatable ajax 
    }

    <?php if (can($key_, 'delete')) { ?>

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
                        url: "{{ url('/admin/role/delete') }}",
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            "id": id,
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function(results) {
                            console.log(results);
                            if (results.status) {
                                swal("Berhasil!", "Berhasil Menghapus Data", "success");
                            } else {
                                swal("Error!", results.message, "error");
                            }
                            reload_table();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            swal.fire("Error!", textStatus, "error");
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