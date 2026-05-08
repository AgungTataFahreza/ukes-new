@extends('master')
@section('title', 'Dashboard')
@section('menu', 'dashboard')

@section('content')
<div class="row">
    <div class="col">
        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-16 mb-1">{{ Auth::guard('web')->user()->name ?? 'Admin' }}</h4>
                            <p class="text-muted mb-0">Selamat datang di Aplikasi Uji Kesehatan.</p>
                        </div>
                        <div class="mt-3 mt-lg-0">
                            <button type="button" class="btn btn-rounded btn-info" onclick="showFilter();">
                                <i class="ri-filter-3-line label-icon align-middle btn-outline rounded-pill fs-16 me-2"></i>
                                Filter
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card card-animate h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Jumlah Peserta</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" id="jumlah_peserta" data-target="">0</span> orang</h4>
                                    <a href="{{ url('admin/applicant') }}" class="text-decoration-underline">Lihat Peserta</a>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-success rounded fs-3"><i class="bx bx-user-circle text-success"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card card-animate h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Bayar Uji Kesehatan</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div class="w-100">
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" id="jumlah_bayar_ukes" data-target="">0</span> orang</h4>
                                    <a href="{{ url('admin/registration') }}" class="text-decoration-underline mb-2 d-inline-block">Lihat Peserta</a>
                                    <div id="detail_jumlah_bayar_ukes" class="text-muted" style="font-size: 0.8rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card card-animate h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Sudah Registrasi</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div class="w-100">
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" id="jumlah_sudah_registrasi" data-target="">0</span> orang</h4>
                                    <a href="{{ url('admin/registration') }}" class="text-decoration-underline mb-2 d-inline-block">Lihat Peserta</a>
                                    <div id="detail_jumlah_sudah_registrasi" class="text-muted" style="font-size: 0.8rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card card-animate h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">PERIKSA LENGKAP</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div class="w-100">
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" id="jumlah_periksa_lengkap" data-target="">0</span> orang</h4>
                                    <a href="{{ url('admin/medical-result') }}" class="text-decoration-underline mb-2 d-inline-block">Lihat Peserta</a>
                                    <div id="detail_jumlah_periksa_lengkap" class="text-muted" style="font-size: 0.8rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card card-animate h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">BELUM PERIKSA</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" id="jumlah_belum_periksa" data-target="">0</span> orang</h4>
                                    <a href="{{ url('admin/medical-form') }}" class="text-decoration-underline">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card card-animate h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">PERIKSA ANTROPOMETRI</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div class="w-100">
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" id="jumlah_periksa_antropometri" data-target="">0</span> orang</h4>
                                    <a href="{{ url('admin/medical-form') }}" class="text-decoration-underline mb-2 d-inline-block">Lihat Peserta</a>
                                    <div id="detail_jumlah_periksa_antropometri" class="text-muted" style="font-size: 0.8rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card card-animate h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">PERIKSA FISIK</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div class="w-100">
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" id="jumlah_periksa_fisik" data-target="">0</span> orang</h4>
                                    <a href="{{ url('admin/medical-form') }}" class="text-decoration-underline mb-2 d-inline-block">Lihat Peserta</a>
                                    <div id="detail_jumlah_periksa_fisik" class="text-muted" style="font-size: 0.8rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card card-animate h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">PERIKSA FISIK 2</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div class="w-100">
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" id="jumlah_periksa_fisik_2" data-target="">0</span> orang</h4>
                                    <a href="{{ url('admin/medical-form') }}" class="text-decoration-underline mb-2 d-inline-block">Lihat Peserta</a>
                                    <div id="detail_jumlah_periksa_fisik_2" class="text-muted" style="font-size: 0.8rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card card-animate h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">PERIKSA GIGI</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div class="w-100">
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" id="jumlah_periksa_gigi" data-target="">0</span> orang</h4>
                                    <a href="{{ url('admin/medical-form') }}" class="text-decoration-underline mb-2 d-inline-block">Lihat Peserta</a>
                                    <div id="detail_jumlah_periksa_gigi" class="text-muted" style="font-size: 0.8rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card card-animate h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">PERIKSA NARKOBA</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div class="w-100">
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" id="jumlah_periksa_narkoba" data-target="">0</span> orang</h4>
                                    <a href="{{ url('admin/medical-form') }}" class="text-decoration-underline mb-2 d-inline-block">Lihat Peserta</a>
                                    <div id="detail_jumlah_periksa_narkoba" class="text-muted" style="font-size: 0.8rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card card-animate h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">TOTAL HASIL (KESIMPULAN)</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div class="w-100">
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" id="jumlah_kesimpulan" data-target="">0</span> orang</h4>
                                    <a href="{{ url('admin/medical-result') }}" class="text-decoration-underline mb-2 d-inline-block">Lihat Peserta</a>
                                    <div id="detail_jumlah_kesimpulan" class="text-muted" style="font-size: 0.8rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card card-animate h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">HASIL : DAPAT</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div class="w-100">
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" id="jumlah_hasil_dapat" data-target="">0</span> orang</h4>
                                    <a href="{{ url('admin/medical-result') }}" class="text-decoration-underline mb-2 d-inline-block">Lihat Peserta</a>
                                    <div id="detail_jumlah_hasil_dapat" class="text-muted" style="font-size: 0.8rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card card-animate h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">HASIL : TIDAK DAPAT</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div class="w-100">
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" id="jumlah_hasil_tidak_dapat" data-target="">0</span> orang</h4>
                                    <a href="{{ url('admin/medical-result') }}" class="text-decoration-underline mb-2 d-inline-block">Lihat Peserta</a>
                                    <div id="detail_jumlah_hasil_tidak_dapat" class="text-muted" style="font-size: 0.8rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div id="filter_modal" class="modal fade" tabindex="-1" aria-labelledby="modalFormLabel" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-lg">
                        <label for="period_id_filter" class="form-label">Periode</label>
                        <select name="period_id_filter" id="period_id_filter" class="form-control">
                            <option value="">Pilih Periode</option>
                            @foreach($periods as $period)
                            <option value="{{ $period->id }}" {{ ($period->is_active ? 'selected' : '') }}>{{ $period->name }} {{ $period->year->name ?? '' }}</option>
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
                <div class="row mb-3">
                    <div class="col-lg">
                        <label for="tempat_periksa_filter" class="form-label">Tempat Periksa</label>
                        <select name="tempat_periksa_filter" id="tempat_periksa_filter" class="form-control">
                            <option value="">Semua Tempat</option>
                            <option value="Klinik">Klinik Pratama (Internal)</option>
                            <option value="Lainnya">Lainnya (Peserta Luar)</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
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
    var loading_animation = '<span class="d-flex align-items-center"><span class="flex-grow-1 me-2" style="margin-right:5px;">Loading...</span><span class="spinner-border spinner-border-sm flex-shrink-0" role="status"></span></span>';

    $(document).ready(function() {
        loadDashboardSummary();
    });

    // FUNGSI HELPER UNTUK FORMAT TANGGAL JS KE DD/MM/YYYY
    function formatDateIndo(dateString) {
        let d = new Date(dateString);
        let day = ("0" + d.getDate()).slice(-2);
        let month = ("0" + (d.getMonth() + 1)).slice(-2);
        let year = d.getFullYear();
        return `${day}/${month}/${year}`;
    }

    function loadDashboardSummary() {
        $.ajax({
            url: "{{ url('admin/dashboard/summary') }}",
            type: "POST",
            dataType: "JSON",
            data: {
                _token: "{{ csrf_token() }}",
                period_id: $('#period_id_filter').val(),
                study_program_id: $('#study_program_id_filter').val(),
                tempat_periksa: $('#tempat_periksa_filter').val()
            },
            success: function(res) {
                // Hancurkan tooltip lama agar tidak nyangkut/bug saat di-reload
                $('[data-bs-toggle="tooltip"]').tooltip('dispose');

                Object.entries(res).forEach(([key, data]) => {
                    // 1. UPDATE ANGKA TOTAL
                    const elTotal = document.getElementById(key);
                    if (elTotal) {
                        elTotal.innerText = data.total;
                        elTotal.setAttribute('data-target', data.total);
                    }

                    // 2. UPDATE LIST TANGGAL (MAKSIMAL 5) + TOOLTIP SISANYA
                    const elDetail = document.getElementById('detail_' + key);
                    if (elDetail) {
                        elDetail.innerHTML = ''; // Kosongkan wadah

                        if (data.details && Object.keys(data.details).length > 0) {
                            const detailEntries = Object.entries(data.details);
                            const top5 = detailEntries.slice(0, 5);
                            const sisanya = detailEntries.slice(5);

                            let htmlList = '<ul class="list-unstyled mb-0 mt-2 border-top pt-2">';

                            // Render 5 teratas
                            top5.forEach(([tgl, jml]) => {
                                htmlList += `<li><i class="ri-calendar-event-line align-middle text-primary me-1"></i> ${formatDateIndo(tgl)} : <strong class="text-dark">${jml}</strong></li>`;
                            });

                            // Jika ada sisa lebih dari 5, jadikan Tooltip
                            if (sisanya.length > 0) {
                                let tooltipContent = '<div class="text-start">';
                                sisanya.forEach(([tgl, jml]) => {
                                    tooltipContent += `${formatDateIndo(tgl)} : <strong>${jml}</strong><br>`;
                                });
                                tooltipContent += '</div>';

                                htmlList += `
                                    <li class="mt-1">
                                        <span class="badge bg-secondary cursor-pointer" 
                                              data-bs-toggle="tooltip" 
                                              data-bs-html="true" 
                                              data-bs-placement="top" 
                                              title="${tooltipContent}">
                                            + ${sisanya.length} tanggal lainnya...
                                        </span>
                                    </li>`;
                            }

                            htmlList += '</ul>';
                            elDetail.innerHTML = htmlList;
                        }
                    }
                });

                // 3. AKTIFKAN TOOLTIP BOOTSTRAP UNTUK ELEMEN BARU
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                });

                // 4. ANIMASI ANGKA (Jika library counterUp tersedia di template)
                if (typeof counterUp === 'function') {
                    counterUp();
                }
            }
        });
    }

    function showFilter() {
        $('#filter_modal').modal('show');
    }

    function filter() {
        var btn = $('#btnFilter');
        btn.html(loading_animation).attr('disabled', true);

        $('#filter_modal').modal('hide');
        btn.html('<i class="ri ri-save-line me-1"></i> Filter').attr('disabled', false);

        loadDashboardSummary();
    }
</script>
@endpush