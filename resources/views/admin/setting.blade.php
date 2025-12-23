@extends('master')

@push('after-style')
<style>
    #calendarModal .modal-content {
        position: relative;
        padding: 20px;
        border-radius: 10px;
        max-width: 90%;
        margin: auto;
    }

    #calendarContainer {
        text-align: center;
        width: 100%;
    }

    #calendarTable {
        width: 100%;
        border-collapse: collapse;
    }

    #calendarTable th,
    #calendarTable td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    #calendarTable .highlight {
        background-color: #07a5ff;
        /* Warna merah muda */
        color: #ffffff;
    }
</style>
@endpush

@section('content')
<?php
$key_ = session()->get('key');
?>
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Pengaturan</a></li>
    </ol>
</div>
<!-- row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" style="display: block !important;">
                <div style="display: flex;justify-content:space-between;">
                    <h4 class="card-title">Logbook</h4>
                </div>
            </div>
            <form id="form">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <div>
                                <label for="date" class="form-label text-danger">*Tanggal Terakhir Pengisian Logbook</label>
                                <input type="number" class="form-control" id="date" name="date" min="1" max="31">
                                <div class="text-danger text-error" id="date_error">*error</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-dismiss="modal"><i class="fa fa-close me-1 align-middle"></i> Close</a>
                        <button type="button" id="btnSave" class="btn btn-success btn-load" onclick="save();"><i class="fa fa-save label-icon align-middle fs-16 me-2"></i> Simpan</button>
                    </div>
                </div>
            </form>
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
            load_data();
        });

        function load_data() {
            $('.text-error').empty();
            $('#form')[0].reset(); // reset form on modals
            //Ajax Load data from ajax
            $.ajax({
                url: "{{ url('/admin/setting/edit') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                dataType: "JSON",
                success: function(data) {
                    console.log(data);
                    for (const [key, value] of Object.entries(data)) {
                        $('#' + key).val(value);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // alert('Error get data from ajax');
                    swal("Error!", textStatus, "error");
                }
            });
        }

        <?php if (can_access($permissions, $key_, 'edit')) { ?>

            function save() {
                $('.text-error').empty(); // clear error string
                $('#btnSave').html(loading_animation); //change button text
                $('#btnSave').attr('disabled', true); //set button disable 

                var formData = new FormData($('#form')[0]);
                formData.append("_token", "{{ csrf_token() }}");

                formData.forEach((value, key) => {
                    console.log(key, value);
                });

                $.ajax({
                    url: "{{ url('/admin/setting/update') }}",
                    type: "POST",
                    data: formData,
                    dataType: "JSON",
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        console.log(data);
                        if (data.status) //if success close modal and reload ajax table
                        {
                            var text = data.message;;
                            swal("Berhasil!", text, "success");
                            load_data();
                        } else {
                            console.log(data.message);
                            for (const [key, value] of Object.entries(data.message)) {
                                $('#' + key + '_error').html('*' + value);
                            }
                        }
                        $('#btnSave').html(save_text); //change button text
                        $('#btnSave').attr('disabled', false); //set button enable 
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // alert('Error adding / update data');
                        swal("Error!", textStatus, "error");
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                        // $('#btnSave').attr('disabled', false); //set button enable 
                    }
                });
            }
        <?php } ?>
    </script>
    @endpush