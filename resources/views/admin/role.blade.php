@extends('master')

@section('title', 'Role')
@section('menu', 'role')
@section('menu_parent', 'datapengguna')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Tahun</h4>
                <div class="flex-shrink-0">
                    <a href="{{ url('admin/role/add') }}" class="btn btn-rounded btn-info">
                        <i class="ri-file-add-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                        Tambah
                    </a>
                </div>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="table" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jumlah Pengguna</th>
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
                {
                    data: 'action',
                    name: 'action'
                }
            ],
            order: [
                [0, 'asc']
            ]
        });
    });

    function reload_table() {
        table.ajax.reload(null, false); //reload datatable ajax 
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
                    url: "{{ url('/admin/role/delete') }}",
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
</script>
@endpush