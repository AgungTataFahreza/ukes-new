<?php

use App\Events\TestEvent;
use App\Http\Controllers\admin\ApplicantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MedicalFormController;
use App\Http\Controllers\admin\MedicalResultController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\PeriodController;
use App\Http\Controllers\admin\RegistrationController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\StudyProgramController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\VerificationController;
use App\Http\Controllers\admin\YearController;
use App\Http\Controllers\Applicant\FormMandiriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [DashboardController::class, 'index']);
Route::get('test', [TestController::class, 'index']);
Route::get('autocomplete', [TestController::class, 'autocomplete']);

// Route::get('/', [DashboardController::class, 'index']);

Route::get('/', [App\Http\Controllers\Applicant\AuthApplicantController::class, 'getLogin'])->name('login');


Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function () {
    Route::get('/', [AuthController::class, 'getLogin'])->name('login');
    Route::get('login', [AuthController::class, 'getLogin'])->name('login');
    Route::post('login', [AuthController::class, 'postLogin']);
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::post('/dashboard/summary', [DashboardController::class, 'summary']);

        Route::get('/year', [YearController::class, 'index'])->middleware('access:Tahun,view');
        Route::post('/year/show', [YearController::class, 'show'])->middleware('access:Tahun,view');
        Route::post('/year/add', [YearController::class, 'add'])->middleware('access:Tahun,add');
        Route::post('/year/edit', [YearController::class, 'edit'])->middleware('access:Tahun,edit');
        Route::post('/year/update', [YearController::class, 'update'])->middleware('access:Tahun,edit');
        Route::post('/year/delete', [YearController::class, 'delete'])->middleware('access:Tahun,delete');

        Route::get('/study-program', [StudyProgramController::class, 'index'])->middleware('access:Program Studi,view');
        Route::post('/study-program/show', [StudyProgramController::class, 'show'])->middleware('access:Program Studi,view');
        Route::post('/study-program/add', [StudyProgramController::class, 'add'])->middleware('access:Program Studi,add');
        Route::post('/study-program/edit', [StudyProgramController::class, 'edit'])->middleware('access:Program Studi,edit');
        Route::post('/study-program/update', [StudyProgramController::class, 'update'])->middleware('access:Program Studi,edit');
        Route::post('/study-program/delete', [StudyProgramController::class, 'delete'])->middleware('access:Program Studi,delete');

        Route::get('/period', [PeriodController::class, 'index'])->middleware('access:Periode,view');
        Route::post('/period/show', [PeriodController::class, 'show'])->middleware('access:Periode,view');
        Route::post('/period/add', [PeriodController::class, 'add'])->middleware('access:Periode,add');
        Route::post('/period/edit', [PeriodController::class, 'edit'])->middleware('access:Periode,edit');
        Route::post('/period/update', [PeriodController::class, 'update'])->middleware('access:Periode,edit');
        Route::post('/period/delete', [PeriodController::class, 'delete'])->middleware('access:Periode,delete');
        Route::post('/period/toggle', [PeriodController::class, 'toggle'])->middleware('access:Periode,edit');
        Route::post('/period/toggle-login', [PeriodController::class, 'toggleLogin'])->middleware('access:Periode,edit');

        Route::get('/menu', [MenuController::class, 'index'])->middleware('access:Menu,view');
        Route::post('/menu/show', [MenuController::class, 'show'])->middleware('access:Menu,view');
        Route::post('/menu/add', [MenuController::class, 'add'])->middleware('access:Menu,add');
        Route::post('/menu/edit', [MenuController::class, 'edit'])->middleware('access:Menu,edit');
        Route::post('/menu/update', [MenuController::class, 'update'])->middleware('access:Menu,edit');
        Route::post('/menu/delete', [MenuController::class, 'delete'])->middleware('access:Menu,delete');

        Route::get('/role', [RoleController::class, 'index'])->middleware('access:Role,view');
        Route::post('/role/show', [RoleController::class, 'show'])->middleware('access:Role,view');
        Route::get('/role/add', [RoleController::class, 'add'])->middleware('access:Role,add');
        Route::post('/role/create', [RoleController::class, 'create'])->middleware('access:Role,add');
        Route::get('/role/edit/{role_id}', [RoleController::class, 'edit'])->middleware('access:Role,edit');
        Route::post('/role/update', [RoleController::class, 'update'])->middleware('access:Role,edit');
        Route::post('/role/delete', [RoleController::class, 'delete'])->middleware('access:Role,delete');

        Route::get('/user', [UserController::class, 'index'])->middleware('access:User,view');
        Route::post('/user/show', [UserController::class, 'show'])->middleware('access:User,view');
        Route::post('/user/add', [UserController::class, 'add'])->middleware('access:User,add');
        Route::post('/user/edit', [UserController::class, 'edit'])->middleware('access:User,edit');
        Route::post('/user/update', [UserController::class, 'update'])->middleware('access:User,edit');
        Route::post('/user/delete', [UserController::class, 'delete'])->middleware('access:User,delete');
        Route::post('/user/reset-password', [UserController::class, 'resetPassword'])->middleware('access:User,edit');
        Route::post('/user/update-password', [UserController::class, 'updatePassword'])->middleware('access:User,edit');
        Route::get('/user/get-user', [UserController::class, 'getUsers']);

        Route::get('/applicant', [ApplicantController::class, 'index'])->middleware('access:Daftar Peserta,view');
        Route::post('/applicant/show', [ApplicantController::class, 'show'])->middleware('access:Daftar Peserta,view');
        Route::post('/applicant/add', [ApplicantController::class, 'add'])->middleware('access:Daftar Peserta,add');
        Route::post('/applicant/edit', [ApplicantController::class, 'edit'])->middleware('access:Daftar Peserta,edit');
        Route::post('/applicant/update', [ApplicantController::class, 'update'])->middleware('access:Daftar Peserta,edit');
        Route::post('/applicant/delete', [ApplicantController::class, 'delete'])->middleware('access:Daftar Peserta,delete');
        Route::post('/applicant/import', [ApplicantController::class, 'import'])->middleware('access:Daftar Peserta,add');
        Route::get('/applicant/export', [ApplicantController::class, 'export'])->middleware('access:Daftar Peserta,add');

        Route::get('/registration', [RegistrationController::class, 'index'])->middleware('access:Registrasi Peserta,view');
        Route::post('/registration/show', [RegistrationController::class, 'show'])->middleware('access:Registrasi Peserta,view');
        Route::post('/registration/edit', [RegistrationController::class, 'edit'])->middleware('access:Registrasi Peserta,edit');
        Route::post('/registration/update', [RegistrationController::class, 'update'])->middleware('access:Registrasi Peserta,edit');

        Route::get('/medical-form', [MedicalFormController::class, 'index'])->middleware('access:Formulir Uji Kesehatan,view');
        Route::post('/medical-form/show', [MedicalFormController::class, 'show'])->middleware('access:Formulir Uji Kesehatan,view');
        Route::get('/medical-form/edit/{id}', [MedicalFormController::class, 'edit'])->middleware('access:Formulir Uji Kesehatan,edit');
        Route::get('/medical-form/get/{id}', [MedicalFormController::class, 'get']);
        Route::post('/medical-form/update-antropometri', [MedicalFormController::class, 'updateAntropometri'])->middleware('access:Formulir Uji Kesehatan,edit');
        Route::post('/medical-form/update-fisik', [MedicalFormController::class, 'updateFisik'])->middleware('access:Formulir Uji Kesehatan,edit');
        Route::post('/medical-form/update-fisik-2', [MedicalFormController::class, 'updateFisik2'])->middleware('access:Formulir Uji Kesehatan,edit');
        Route::post('/medical-form/update-gigi', [MedicalFormController::class, 'updateGigi'])->middleware('access:Formulir Uji Kesehatan,edit');
        Route::post('/medical-form/update-narkoba', [MedicalFormController::class, 'updateNarkoba'])->middleware('access:Formulir Uji Kesehatan,edit');
        Route::post('/medical-form/update-kesimpulan', [MedicalFormController::class, 'updateKesimpulan'])->middleware('access:Formulir Uji Kesehatan,edit');
        Route::post('/medical-form/get-kesimpulan', [MedicalFormController::class, 'getKesimpulan']);
        Route::get('/medical-form/get-dates', [App\Http\Controllers\admin\MedicalFormController::class, 'getDates']);

        Route::get('/medical-result', [MedicalResultController::class, 'index'])->middleware('access:Data Hasil Pemeriksaan,view');
        Route::post('/medical-result/show', [MedicalResultController::class, 'show'])->middleware('access:Data Hasil Pemeriksaan,view');

        Route::get('/verification', [VerificationController::class, 'index'])->name('index');
        Route::post('/verification/show', [VerificationController::class, 'show'])->name('show');
        Route::get('/verification/edit/{id}', [VerificationController::class, 'edit'])->name('edit');
        Route::post('/verification/update-antropometri/{id}', [VerificationController::class, 'updateAntropometri']);
        Route::post('/verification/update-fisik/{id}', [VerificationController::class, 'updateFisik']);
        Route::post('/verification/update-fisik-2/{id}', [VerificationController::class, 'updateFisik2']);
        Route::post('/verification/update-gigi/{id}', [VerificationController::class, 'updateGigi']);
        Route::post('/verification/update-narkoba/{id}', [VerificationController::class, 'updateNarkoba']);
        Route::post('/verification/update-berkas/{id}', [VerificationController::class, 'updateBerkas']);
        Route::get('/verification/get-kesimpulan/{id}', [VerificationController::class, 'getKesimpulan']);
        Route::post('/verification/update-kesimpulan/{id}', [VerificationController::class, 'updateKesimpulan']);
        Route::post('/verification/update-status/{id}', [VerificationController::class, 'updateStatus']);

        Route::get('/rekap-pemeriksaan', [ReportController::class, 'index'])->name('admin.rekap.index');
        Route::post('/rekap-pemeriksaan/show', [ReportController::class, 'show'])->name('admin.rekap.show');
        Route::get('/rekap-pemeriksaan/get-dates', [ReportController::class, 'getDates'])->name('admin.rekap.get-dates');
        Route::post('/rekap-pemeriksaan/detail', [ReportController::class, 'showDetail'])->name('admin.rekap.detail');

        Route::get('/cek-tahapan', [ReportController::class, 'indexCekTahapan'])->name('admin.cek-tahapan.index');
        Route::post('/cek-tahapan/show', [ReportController::class, 'showCekTahapan'])->name('admin.cek-tahapan.show');

        Route::get('/logout', [AuthController::class, 'logout']);
    });
});

// Route untuk Peserta (Pemeriksaan Luar)
Route::prefix('/applicant')->name('applicant.')->group(function () {
    Route::get('/login', [App\Http\Controllers\Applicant\AuthApplicantController::class, 'getLogin'])->name('login');
    Route::post('/login', [App\Http\Controllers\Applicant\AuthApplicantController::class, 'postLogin']);

    Route::middleware('auth:applicant')->group(function () {
        // HUBUNGKAN KE FUNCTION dashboard DI CONTROLLER
        Route::get('/dashboard', [App\Http\Controllers\Applicant\AuthApplicantController::class, 'dashboard'])->name('dashboard');

        Route::get('/form-mandiri', [FormMandiriController::class, 'index'])->name('form-mandiri');
        Route::post('/form-mandiri/update-antropometri', [App\Http\Controllers\Applicant\FormMandiriController::class, 'updateAntropometri']);
        Route::post('/form-mandiri/update-fisik', [App\Http\Controllers\Applicant\FormMandiriController::class, 'updateFisik']);
        Route::post('/form-mandiri/update-fisik-2', [App\Http\Controllers\Applicant\FormMandiriController::class, 'updateFisik2']);
        Route::post('/form-mandiri/update-gigi', [App\Http\Controllers\Applicant\FormMandiriController::class, 'updateGigi']);
        Route::post('/form-mandiri/update-narkoba', [App\Http\Controllers\Applicant\FormMandiriController::class, 'updateNarkoba']);
        Route::post('/form-mandiri/update-berkas', [App\Http\Controllers\Applicant\FormMandiriController::class, 'updateBerkas']); // Hanya upload
        Route::post('/form-mandiri/finalisasi', [App\Http\Controllers\Applicant\FormMandiriController::class, 'finalisasi']);

        Route::get('/logout', [App\Http\Controllers\Applicant\AuthApplicantController::class, 'logout'])->name('logout');
    });
});
