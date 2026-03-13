@extends('master')
@section('title', 'Formulir Uji Kesehatan')
@section('menu', 'rekap-pemeriksaan')
@section('menu_parent', 'ujikesehatan')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <h4 class="fw-bold">Rekapitulasi Pemeriksaan Kesehatan</h4>
            <p class="text-muted">Pantau jumlah peserta berdasarkan tahapan pemeriksaan per Program Studi.</p>
        </div>
    </div>

    <div class="card shadow-sm mb-4 border-0">
        <div class="card-body">
            <form id="filterForm" class="row g-3 align-items-end">
                <div class="col-md-3">
                    <label class="form-label fw-bold">Periode</label>
                    <select id="period_id" class="form-select">
                        <option value="">-- Semua Periode --</option>
                        @foreach($periods as $period)
                        <option value="{{ $period->id }}" {{ ($period->is_active ? 'selected' : '') }}>{{ $period->name }} {{ $period->year->name ?? '' }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-bold">Tgl Registrasi</label>
                    <select id="tgl_registrasi" class="form-select">
                        <option value="">-- Semua --</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-bold">Tgl Pemeriksaan</label>
                    <select id="tgl_periksa" class="form-select">
                        <option value="">-- Semua --</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold">Tempat Periksa</label>
                    <select id="tempat_periksa" class="form-select">
                        <option value="">Semua Tempat</option>
                        <option value="Klinik">Klinik Pratama (Internal)</option>
                        <option value="Lainnya">Lainnya (Peserta Luar)</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="button" id="btn-filter" class="btn btn-primary w-100">
                        <i class="ri-filter-3-line me-1"></i> Filter
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table id="tableRekap" class="table table-bordered table-striped table-hover align-middle text-center" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th rowspan="2" class="align-middle">No</th>
                            <th rowspan="2" class="align-middle text-start">Program Studi</th>
                            <th rowspan="2" class="align-middle">Total Peserta</th>
                            <th colspan="8">Progres Tahapan (Selesai)</th>
                            <th colspan="2">Rekomendasi Final</th>
                            <th rowspan="2" class="align-middle bg-primary">Aksi</th>
                        </tr>
                        <tr>
                            <th>Registrasi</th>
                            <th>Antro</th>
                            <th>Fisik 1</th>
                            <th>Fisik 2</th>
                            <th>Gigi</th>
                            <th>Narkoba</th>
                            <th class="text-warning">Lengkap</th>
                            <th class="text-info">Kesimpulan</th>
                            <th class="text-success">Dapat</th>
                            <th class="text-danger">Tdk Dapat</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot class="table-light fw-bold">
                        <tr>
                            <th></th>
                            <th class="text-end">TOTAL :</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th>0</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDetail" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title fw-bold" id="modalDetailTitle">Detail Peserta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="tableDetail" class="table table-bordered table-striped align-middle" style="width:100%">
                        <thead class="table-dark text-center">
                            <tr>
                                <th width="10%">No</th>
                                <th>Nama Peserta</th>
                                <th width="25%">Rekomendasi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-script')
<script>
    $(document).ready(function() {

        // ==========================================================
        // 1. AJAX DEPENDENT DROPDOWN TANGGAL
        // ==========================================================
        $('#period_id').change(function() {
            var periodId = $(this).val();
            var regDropdown = $('#tgl_registrasi');
            var periksaDropdown = $('#tgl_periksa');

            regDropdown.html('<option value="">Memuat...</option>');
            periksaDropdown.html('<option value="">Memuat...</option>');

            $.ajax({
                url: "{{ url('admin/rekap-pemeriksaan/get-dates') }}",
                type: "GET",
                data: {
                    period_id: periodId
                },
                success: function(data) {
                    regDropdown.html('<option value="">-- Semua --</option>');
                    periksaDropdown.html('<option value="">-- Semua --</option>');

                    function formatTgl(dateStr) {
                        var p = dateStr.split('-');
                        return p[2] + '-' + p[1] + '-' + p[0];
                    }

                    $.each(data.tgl_registrasi, function(i, d) {
                        regDropdown.append('<option value="' + d + '">' + formatTgl(d) + '</option>');
                    });
                    $.each(data.tgl_periksa, function(i, d) {
                        periksaDropdown.append('<option value="' + d + '">' + formatTgl(d) + '</option>');
                    });
                }
            });
        });
        $('#period_id').trigger('change');

        // ==========================================================
        // 2. DATATABLES REKAPITULASI UTAMA
        // ==========================================================
        var table = $('#tableRekap').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            searching: false,
            ordering: false,
            paging: false,
            info: false,
            ajax: {
                url: "{{ url('admin/rekap-pemeriksaan/show') }}",
                type: "POST",
                data: function(d) {
                    d._token = "{{ csrf_token() }}";
                    d.period_id = $('#period_id').val();
                    d.tgl_registrasi = $('#tgl_registrasi').val();
                    d.tgl_periksa = $('#tgl_periksa').val();
                    d.tempat_periksa = $('#tempat_periksa').val();
                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    className: 'text-center'
                },
                {
                    data: 'prodi',
                    className: 'text-start fw-bold'
                },
                {
                    data: 'total_peserta',
                    className: 'fs-6 text-primary'
                },
                {
                    data: 'registrasi'
                }, {
                    data: 'antropometri'
                }, {
                    data: 'fisik1'
                },
                {
                    data: 'fisik2'
                }, {
                    data: 'gigi'
                }, {
                    data: 'narkoba'
                },
                {
                    data: 'periksa_lengkap',
                    className: 'text-warning fw-bold'
                },
                {
                    data: 'kesimpulan',
                    className: 'text-info fw-bold'
                },
                {
                    data: 'dapat',
                    className: 'text-success fw-bold'
                },
                {
                    data: 'tidak_dapat',
                    className: 'text-danger fw-bold'
                },
                {
                    data: 'action',
                    className: 'text-center'
                } // Kolom Aksi
            ],
            footerCallback: function(row, data, start, end, display) {
                var api = this.api();
                var intVal = function(i) {
                    return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                };
                var columnsToSum = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

                columnsToSum.forEach(function(colIndex) {
                    var total = api.column(colIndex).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);
                    $(api.column(colIndex).footer()).html(total);
                });
            }
        });

        $('#btn-filter').click(function() {
            table.draw();
        });

        // ==========================================================
        // 3. EVENT TOMBOL DETAIL & DATATABLES MODAL
        // ==========================================================
        var tableDetail;
        var selectedProdiId = null;

        // Delegasi event untuk tombol detail (karena datatables merender dinamis)
        $('#tableRekap tbody').on('click', '.btn-detail', function() {
            var prodiName = $(this).data('prodi');
            selectedProdiId = $(this).data('prodiid');

            $('#modalDetailTitle').text('Detail Peserta - ' + prodiName);
            $('#modalDetail').modal('show');

            // Hancurkan tabel jika sudah ada agar di-rebuild ulang sesuai prodi baru
            if ($.fn.DataTable.isDataTable('#tableDetail')) {
                $('#tableDetail').DataTable().destroy();
            }

            tableDetail = $('#tableDetail').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                searching: true, // Beri fitur cari nama di modal
                ordering: false, // Matikan ordering JS, agar menggunakan Custom Sorting dari Controller
                ajax: {
                    url: "{{ url('admin/rekap-pemeriksaan/detail') }}",
                    type: "POST",
                    data: function(d) {
                        d._token = "{{ csrf_token() }}";
                        // Kirim filter utama
                        d.period_id = $('#period_id').val();
                        d.tgl_registrasi = $('#tgl_registrasi').val();
                        d.tgl_periksa = $('#tgl_periksa').val();
                        d.tempat_periksa = $('#tempat_periksa').val();
                        // Kirim filter prodi spesifik
                        d.prodi_id = selectedProdiId;
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        className: 'text-center'
                    },
                    {
                        data: 'nama',
                        className: 'text-start fw-bold'
                    },
                    {
                        data: 'rekomendasi_badge',
                        className: 'text-center'
                    }
                ]
            });
        });
    });
</script>
@endpush