@extends('master')

@section('title', 'Formulir Uji Kesehatan')
@section('menu', 'medical-result')
@section('menu_parent', 'ujikesehatan')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Hasil Pemeriksaan</h4>
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
                <div class="table-responsive">
                    <table id="table" class="display table table-bordered" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Periode</th>
                                <th>Nomor Peserta</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Program Studi</th>
                                <th>Umur</th>
                                <th>Tgl Registrasi</th>
                                <th>Tgl Periksa</th>
                                <th>Tempat Periksa</th>
                                <th>Dokter</th>
                                <th>Paramedis 1</th>
                                <th>Tb</th>
                                <th>Bb</th>
                                <th>Tekanan Darah</th>
                                <th>Status</th>
                                <th>Catatan / Keterangan<br>Antropometri</th>
                                <th>Kulit</th>
                                <th>Catatan / Keterangan<br>Kulit</th>
                                <th>Mata</th>
                                <th>Visus</th>
                                <th>Buta Warna</th>
                                <th>Catatan / <br>Keterangan<br>Mata</th>
                                <th>Telinga</th>
                                <th>Kiri / Kanan</th>
                                <th>Catatan / <br>Keterangan<br>Telinga</th>
                                <th>Hidung</th>
                                <th>Catatan /<br>Keterangan<br>Hidung</th>
                                <th>Lidah</th>
                                <th>Catatan / <br>Keterangan <br>Lidah</th>
                                <th>Pharynx</th>
                                <th>Catatan /<br>Keterangan<br>Pharynx</th>
                                <th>Tonsil</th>
                                <th>Catatan /<br>Keterangan<br>Tonsil</th>
                                <th>Thyroid</th>
                                <th>Catatan / <br>Keterangan<br>Thyroid</th>
                                <th>Jantung</th>
                                <th>Catatan / <br>Keterangan<br>Jantung <br></th>
                                <th>Paru-paru</th>
                                <th>Catatan /<br>Keterangan<br>Paru-paru</th>
                                <th>Abdomen</th>
                                <th>Catatan /<br>Keterangan<br>Abdomen</th>
                                <th>Refleks<br>Pupil</th>
                                <th>Refleks<br>Patela</th>
                                <th>Refleks<br>Achiles</th>
                                <th>Catatan /<br>Keterangan Refleks</th>
                                <th>Thorax</th>
                                <th>Catatan /<br>Keterangan<br>Thorax</th>
                                <th>Kemampuan Bicara</th>
                                <th>Catatan / <br>Keterangan<br>Kemampuan Bicara</th>
                                <th>Gigi</th>
                                <th>Catatan /<br>Keterangan<br>Gigi</th>
                                <th>Dokter<br>Gigi</th>
                                <th>Perawat<br>Gigi</th>
                                <th>AMP</th>
                                <th>MOP</th>
                                <th>THC</th>
                                <th>Petugas Narkoba</th>
                                <th>Catatan<br>Riwayat<br>Penyakit</th>
                                <th>Kesimpulan</th>
                                <th>Rekomendasi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
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
                url: "{{ url('/admin/medical-result/show') }}",
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

            dom: '<"top"lB>frtip',
            buttons: [
                'copy', 'csv', 'excel', 'print', 'pdf'
            ],
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
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
                    data: 'umur'
                },
                {
                    data: 'tgl_registrasi'
                },
                {
                    data: 'tgl_periksa'
                },
                {
                    data: 'tempat_periksa'
                },
                {
                    data: 'dokter_name'
                },
                {
                    data: 'paramedis_1_name'
                },
                {
                    data: 'tinggi_badan'
                },
                {
                    data: 'berat_badan'
                },
                {
                    data: 'tekanan_darah'
                },
                {
                    data: 'status_antropometri'
                },
                {
                    data: 'catatan_keterangan_antropometri'
                },
                {
                    data: 'status_kulit'
                },
                {
                    data: 'catatan_keterangan_kulit'
                },
                {
                    data: 'status_mata'
                },
                {
                    data: 'visus'
                },
                {
                    data: 'buta_warna'
                },
                {
                    data: 'catatan_keterangan_mata'
                },
                {
                    data: 'status_telinga'
                },
                {
                    data: 'telinga_kiri_kanan'
                },
                {
                    data: 'catatan_keterangan_telinga'
                },
                {
                    data: 'status_hidung'
                },
                {
                    data: 'catatan_keterangan_hidung'
                },
                {
                    data: 'status_lidah'
                },
                {
                    data: 'catatan_keterangan_lidah'
                },
                {
                    data: 'status_pharynx'
                },
                {
                    data: 'catatan_keterangan_pharynx'
                },
                {
                    data: 'status_tonsil'
                },
                {
                    data: 'catatan_keterangan_tonsil'
                },
                {
                    data: 'status_thyroid'
                },
                {
                    data: 'catatan_keterangan_thyroid'
                },
                {
                    data: 'status_jantung'
                },
                {
                    data: 'catatan_keterangan_jantung'
                },
                {
                    data: 'status_paru_paru'
                },
                {
                    data: 'catatan_keterangan_paru_paru'
                },
                {
                    data: 'status_abdomen'
                },
                {
                    data: 'catatan_keterangan_abdomen'
                },
                {
                    data: 'status_refleks_pupil'
                },
                {
                    data: 'status_refleks_patela'
                },
                {
                    data: 'status_refleks_achiles'
                },
                {
                    data: 'catatan_keterangan_refleks'
                },
                {
                    data: 'status_thorax'
                },
                {
                    data: 'catatan_keterangan_thorax'
                },
                {
                    data: 'status_kemampuan_bicara'
                },
                {
                    data: 'catatan_keterangan_kemampuan_bicara'
                },
                {
                    data: 'status_gigi'
                },
                {
                    data: 'catatan_keterangan_gigi'
                },
                {
                    data: 'dokter_gigi_name'
                },
                {
                    data: 'perawat_gigi_name'
                },
                {
                    data: 'amp'
                },
                {
                    data: 'mop'
                },
                {
                    data: 'thc'
                },
                {
                    data: 'petugas_narkoba_name'
                },
                {
                    data: 'riwayat_penyakit'
                },
                {
                    data: 'kesimpulan'
                },
                {
                    data: 'rekomendasi'
                },
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
</script>
@endpush