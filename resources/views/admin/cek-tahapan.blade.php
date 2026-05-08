@extends('master')
@section('title', 'Formulir Uji Kesehatan')
@section('menu', 'selisih')
@section('menu_parent', 'ujikesehatan')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <h4 class="fw-bold">Pengecekan Peserta Antar Tahap</h4>
            <p class="text-muted">Cari peserta yang sudah melewati tahapan tertentu namun belum melanjutkan ke tahapan lainnya.</p>
        </div>
    </div>

    <div class="card shadow-sm mb-4 border-0">
        <div class="card-body">
            <form id="filterForm" class="row g-3 align-items-end">
                <div class="col-md-3">
                    <label class="form-label fw-bold">Periode / Gelombang</label>
                    <select id="period_id" class="form-select">
                        <option value="">-- Pilih Periode --</option>
                        @foreach($periods as $period)
                        <option value="{{ $period->id }}" {{ ($period->is_active? 'selected' : '') }}>{{ $period->name }} {{ $period->year->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label fw-bold">Tanggal Pemeriksaan</label>
                    <select id="tanggal" class="form-select">
                        <option value="">-- Semua Tanggal --</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label class="form-label fw-bold text-success"><i class="ri-check-line"></i> SUDAH Tahap</label>
                    <select id="tahap_sudah" class="form-select">
                        <option value="">-- Abaikan --</option>
                        <option value="bayar">Pembayaran</option>
                        <option value="registrasi">Registrasi</option>
                        <option value="antropometri">Antropometri</option>
                        <option value="fisik1">Fisik 1</option>
                        <option value="fisik2">Fisik 2</option>
                        <option value="gigi">Pemeriksaan Gigi</option>
                        <option value="narkoba">Lab Narkoba</option>
                        <option value="rekomendasi" class="fw-bold text-primary">Keputusan Final</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label class="form-label fw-bold text-danger"><i class="ri-close-line"></i> BELUM Tahap</label>
                    <select id="tahap_belum" class="form-select">
                        <option value="">-- Abaikan --</option>
                        <option value="bayar">Pembayaran</option>
                        <option value="registrasi">Registrasi</option>
                        <option value="antropometri">Antropometri</option>
                        <option value="fisik1">Fisik 1</option>
                        <option value="fisik2">Fisik 2</option>
                        <option value="gigi">Pemeriksaan Gigi</option>
                        <option value="narkoba">Lab Narkoba</option>
                        <option value="rekomendasi" class="fw-bold text-primary">Keputusan Final</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <button type="button" id="btn-filter" class="btn btn-primary w-100">
                        <i class="ri-search-line me-1"></i> Cari Peserta
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table id="tableCek" class="table table-bordered table-striped table-hover align-middle" style="width:100%">
                    <thead class="table-dark text-center">
                        <tr>
                            <th width="5%">No</th>
                            <th width="15%">Nomor Peserta</th>
                            <th width="35%">Nama Peserta</th>
                            <th width="45%">Program Studi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
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
        // 1. DEPENDENT DROPDOWN TANGGAL (Sama seperti Menu Rekap)
        // ==========================================================
        $('#period_id').change(function() {
            var periodId = $(this).val();
            var tanggalDropdown = $('#tanggal');

            tanggalDropdown.html('<option value="">Memuat...</option>');

            $.ajax({
                // Gunakan rute dari rekap karena fungsinya sama (menarik tanggal)
                url: "{{ url('/admin/rekap-pemeriksaan/get-dates') }}",
                type: "GET",
                data: {
                    period_id: periodId
                },
                success: function(data) {
                    console.log(data);
                    tanggalDropdown.html('<option value="">-- Semua Tanggal --</option>');
                    $.each(data.tgl_periksa, function(index, date) {
                        tanggalDropdown.append('<option value="' + date + '">' + date + '</option>');
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR, textStatus, errorThrown);
                    tanggalDropdown.html('<option value="">Gagal</option>');
                }
            });
        });

        $('#period_id').trigger('change');

        // ==========================================================
        // 2. DATATABLES PENCARIAN PESERTA
        // ==========================================================
        var table = $('#tableCek').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            // Opsional: Boleh matikan pencarian bawaan karena sudah ada filter kustom di atas
            searching: false,
            ajax: {
                url: "{{ url('/admin/cek-tahapan/show') }}",
                type: "POST",
                data: function(d) {
                    d._token = "{{ csrf_token() }}";
                    d.period_id = $('#period_id').val();
                    d.tanggal = $('#tanggal').val();
                    d.tahap_sudah = $('#tahap_sudah').val();
                    d.tahap_belum = $('#tahap_belum').val();
                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    className: 'text-center'
                },
                {
                    data: 'nomor_peserta',
                    name: 'nomor_peserta',
                    className: 'text-center fw-bold'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'prodi',
                    name: 'prodi'
                }
            ]
        });

        // ==========================================================
        // 3. TRIGGER PENCARIAN
        // ==========================================================
        $('#btn-filter').click(function() {
            var sudah = $('#tahap_sudah').val();
            var belum = $('#tahap_belum').val();

            // Sedikit validasi user-friendly
            if (sudah !== "" && belum !== "" && sudah === belum) {
                Swal.fire('Filter Tidak Valid', 'Tahap SUDAH dan BELUM tidak boleh sama.', 'warning');
                return;
            }

            table.draw();
        });
    });
</script>
@endpush