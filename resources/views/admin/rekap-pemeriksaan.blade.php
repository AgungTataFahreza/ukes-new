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
                <div class="col-md-4">
                    <label class="form-label fw-bold">Periode / Gelombang</label>
                    <select id="period_id" class="form-select">
                        <option value="">-- Semua Periode --</option>
                        @foreach($periods as $period)
                        <option value="{{ $period->id }}" {{ ($period->is_active ? 'selected' : '') }}>{{ $period->name }} {{ $period->year->name ?? '' }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">Tanggal Pemeriksaan</label>
                    <select id="tanggal" class="form-select">
                        <option value="">-- Semua Tanggal --</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <button type="button" id="btn-filter" class="btn btn-primary w-100">
                        <i class="ri-filter-3-line me-1"></i> Filter Data
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
                            <th colspan="7">Progres Tahapan (Selesai)</th>
                            <th colspan="2">Rekomendasi Final</th>
                        </tr>
                        <tr>
                            <th>Registrasi</th>
                            <th>Antro</th>
                            <th>Fisik 1</th>
                            <th>Fisik 2</th>
                            <th>Gigi</th>
                            <th>Narkoba</th>
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
                            <th class="text-end">TOTAL KESELURUHAN :</th>
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
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-script')
<script>
    $(document).ready(function() {

        // ==========================================================
        // 1. EVENT: Saat Periode Dipilih, Ambil Tanggal via AJAX
        // ==========================================================
        $('#period_id').change(function() {
            var periodId = $(this).val();
            var tanggalDropdown = $('#tanggal');

            tanggalDropdown.html('<option value="">Memuat Tanggal...</option>');

            $.ajax({
                url: "{{ url('admin/rekap-pemeriksaan/get-dates') }}",
                type: "GET",
                data: {
                    period_id: periodId
                },
                success: function(data) {
                    tanggalDropdown.html('<option value="">-- Semua Tanggal --</option>');
                    $.each(data, function(index, date) {
                        tanggalDropdown.append('<option value="' + date + '">' + date + '</option>');
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR, textStatus, errorThrown);
                    tanggalDropdown.html('<option value="">Gagal Memuat Data</option>');
                }
            });
        });

        // Trigger change pertama kali untuk load tanggal
        $('#period_id').trigger('change');

        // ==========================================================
        // 2. DATATABLES REKAPITULASI & PERHITUNGAN TOTAL BAWAH
        // ==========================================================
        var table = $('#tableRekap').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            searching: false,
            ordering: false,
            paging: false, // Menampilkan semua data memanjang ke bawah
            info: false, // Menghilangkan teks "Showing 1 to..."
            ajax: {
                url: "{{ url('admin/rekap-pemeriksaan/show') }}",
                type: "POST",
                data: function(d) {
                    d._token = "{{ csrf_token() }}";
                    d.period_id = $('#period_id').val();
                    d.tanggal = $('#tanggal').val();
                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'prodi',
                    name: 'prodi',
                    className: 'text-start fw-bold'
                },
                {
                    data: 'total_peserta',
                    name: 'total_peserta',
                    className: 'fs-6 text-primary'
                },
                {
                    data: 'registrasi',
                    name: 'registrasi'
                },
                {
                    data: 'antropometri',
                    name: 'antropometri'
                },
                {
                    data: 'fisik1',
                    name: 'fisik1'
                },
                {
                    data: 'fisik2',
                    name: 'fisik2'
                },
                {
                    data: 'gigi',
                    name: 'gigi'
                },
                {
                    data: 'narkoba',
                    name: 'narkoba'
                },
                {
                    data: 'kesimpulan',
                    name: 'kesimpulan',
                    className: 'text-info fw-bold'
                },
                {
                    data: 'dapat',
                    name: 'dapat',
                    className: 'text-success fw-bold'
                },
                {
                    data: 'tidak_dapat',
                    name: 'tidak_dapat',
                    className: 'text-danger fw-bold'
                }
            ],
            footerCallback: function(row, data, start, end, display) {
                var api = this.api();

                // Fungsi helper mengubah nilai menjadi angka
                var intVal = function(i) {
                    return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                };

                // Indeks kolom yang akan dijumlahkan (Mulai dari Total Peserta s.d Tidak Dapat)
                var columnsToSum = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

                columnsToSum.forEach(function(colIndex) {
                    // Hitung total nilai di kolom tersebut
                    var total = api
                        .column(colIndex)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    // Masukkan hasil ke tag <th> pada tfoot sesuai indeksnya
                    $(api.column(colIndex).footer()).html(total);
                });
            }
        });

        // Trigger reload tabel saat tombol ditekan
        $('#btn-filter').click(function() {
            table.draw();
        });
    });
</script>
@endpush