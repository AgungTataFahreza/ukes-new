@extends('master')

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
                    </div><!-- end card header -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->


            <!-- rekap data disini -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- jlh -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Jumlah Peserta</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value" id="jumlah_peserta" data-target="">0</span> orang
                                    </h4>
                                    <a href="{{ url('admin/applicant') }}" class="text-decoration-underline">Lihat Peserta</a>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-success rounded fs-3">
                                        <i class="bx bx-user-circle text-success"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <!-- bayar ukes -->
                <div class="col-xl-3 col-md-6">
                    <!-- byr -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        Bayar Uji Kesehatan dan Narkoba</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value" id="jumlah_bayar_ukes" data-target="">0</span> orang
                                    </h4>
                                    <a href="{{ url('admin/registration') }}" class="text-decoration-underline">Lihat Peserta</a>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-info rounded fs-3">
                                        <i class="bx bx-user-circle text-success"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <!-- sdh reg -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        Sudah Registrasi</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value" id="jumlah_sudah_registrasi" data-target="">0</span> orang
                                    </h4>
                                    <a href="{{ url('admin/registration') }}" class="text-decoration-underline">Lihat Peserta</a>
                                </div>

                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->


                <div class="col-xl-3 col-md-6">
                    <!-- lengkap -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        PERIKSA LENGKAP</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value" id="jumlah_periksa_lengkap" data-target="">0</span> orang
                                    </h4>
                                    <a href="{{ url('admin/medical-result') }}" class="text-decoration-underline">Lihat Peserta</a>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- belum -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        BELUM PERIKSA</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value" id="jumlah_belum_periksa" data-target="">0</span> orang</h4>
                                    <a href="{{ url('admin/medical-form') }}" class="text-decoration-underline">Lihat</a>
                                </div>

                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- atro -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        PERIKSA ANTROPOMETRI</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value" id="jumlah_periksa_antropometri" data-target="">0</span> orang
                                    </h4>
                                    <a href="{{ url('admin/medical-form') }}" class="text-decoration-underline">Lihat Peserta</a>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- fisik -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        PERIKSA FISIK</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value" id="jumlah_periksa_fisik" data-target="">0</span> orang
                                    </h4>
                                    <a href="{{ url('admin/medical-form') }}" class="text-decoration-underline">Lihat Peserta</a>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- fisik2 -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        PERIKSA FISIK 2</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value" id="jumlah_periksa_fisik_2" data-target="">0</span> orang
                                    </h4>
                                    <a href="{{ url('admin/medical-form') }}" class="text-decoration-underline">Lihat Peserta</a>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- gigi -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        PERIKSA GIGI</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value" id="jumlah_periksa_gigi" data-target="">0</span> orang
                                    </h4>
                                    <a href="{{ url('admin/medical-form') }}" class="text-decoration-underline">Lihat Peserta</a>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- narkoba -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        PERIKSA NARKOBA</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value" id="jumlah_periksa_narkoba" data-target="">0</span> orang
                                    </h4>
                                    <a href="{{ url('admin/medical-form') }}" class="text-decoration-underline">Lihat Peserta</a>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        HASIL : DAPAT</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value" id="jumlah_hasil_dapat" data-target="">0</span> orang
                                    </h4>
                                    <a href="{{ url('admin/medical-result') }}" class="text-decoration-underline">Lihat Peserta</a>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                        HASIL : TIDAK DAPAT</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                            class="counter-value" id="jumlah_hasil_tidak_dapat" data-target="">0</span> orang
                                    </h4>
                                    <a href="{{ url('admin/medical-result') }}" class="text-decoration-underline">Lihat Peserta</a>
                                </div>

                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

            </div> <!-- end row--><!-- end row--><!-- end row-->

        </div> <!-- end .h-100-->

    </div> <!-- end col -->

    <div class="col-auto layout-rightside-col">
        <div class="overlay"></div><!-- end .rightbar-->

    </div> <!-- end col -->
</div>
<!-- container-fluid -->

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
        loadDashboardSummary();
    });

    function loadDashboardSummary() {
        $.ajax({
            url: "{{ url('admin/dashboard/summary') }}",
            type: "POST",
            dataType: "JSON",
            data: {
                _token: "{{ csrf_token() }}",
                period_id: $('#period_id_filter').val(),
                study_program_id: $('#study_program_id_filter').val()
            },
            success: function(res) {
                console.log(res);

                Object.entries(res).forEach(([key, value]) => {
                    const el = document.getElementById(key);
                    if (!el) return;

                    // 🔑 reset & update
                    el.innerText = value;
                    el.setAttribute('data-target', value);
                });

                // 🔥 optional: trigger ulang jika template perlu
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
        $('#btnFilter').html(loading_animation); //change button text
        $('#btnFilter').attr('disabled', true); //set button disable 

        $('#filter_modal').modal('hide');
        $('#btnFilter').html('<i class="ri ri-save-line me-1"></i> Filter');
        $('#btnFilter').attr('disabled', false); //set button enable 
        loadDashboardSummary();
    }
</script>
@endpush