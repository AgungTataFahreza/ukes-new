<?php

use App\Events\TestEvent;
use App\Http\Controllers\admin\ApplicantController;
use App\Http\Controllers\admin\AttendanceController;
use App\Http\Controllers\admin\BehaviorAssessmentController;
use App\Http\Controllers\admin\BehaviorScoreController;
use App\Http\Controllers\admin\ChatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MedicalFormController;
use App\Http\Controllers\admin\MedicalResultController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\PeriodController;
use App\Http\Controllers\admin\RegistrationController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\StudyProgramController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\YearController;
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

Route::get('/', function () {
    return redirect('/admin/dashboard');
});
Route::get('login', [AuthController::class, 'getLogin'])->name('login');
Route::post('login', [AuthController::class, 'postLogin']);

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index']);
        Route::get('/dashboard', [DashboardController::class, 'index']);

        // Route::get('/menu', [MenuController::class, 'index'])->middleware('access:Menu,view');
        // Route::post('/menu/show', [MenuController::class, 'show'])->middleware('access:Menu,view');
        // Route::post('/menu/add', [MenuController::class, 'add'])->middleware('access:Menu,add');
        // Route::post('/menu/edit', [MenuController::class, 'edit'])->middleware('access:Menu,edit');
        // Route::post('/menu/update', [MenuController::class, 'update'])->middleware('access:Menu,edit');
        // Route::post('/menu/delete', [MenuController::class, 'delete'])->middleware('access:Menu,delete');

        // Route::get('/role', [RoleController::class, 'index'])->middleware('access:Role,view');
        // Route::post('/role/show', [RoleController::class, 'show'])->middleware('access:Role,view');
        // Route::get('/role/add', [RoleController::class, 'add'])->middleware('access:Role,add');
        // Route::post('/role/create', [RoleController::class, 'create'])->middleware('access:Role,add');
        // Route::get('/role/edit/{role_id}', [RoleController::class, 'edit'])->middleware('access:Role,edit');
        // Route::post('/role/update', [RoleController::class, 'update'])->middleware('access:Role,edit');
        // Route::post('/role/delete', [RoleController::class, 'delete'])->middleware('access:Role,delete');

        // Route::get('/user', [UserController::class, 'index'])->middleware('access:User,view');
        // Route::post('/user/show', [UserController::class, 'show'])->middleware('access:User,view');
        // Route::post('/user/add', [UserController::class, 'add'])->middleware('access:User,add');
        // Route::post('/user/edit', [UserController::class, 'edit'])->middleware('access:User,edit');
        // Route::post('/user/update', [UserController::class, 'update'])->middleware('access:User,edit');
        // Route::post('/user/delete', [UserController::class, 'delete'])->middleware('access:User,delete');
        // Route::post('/user/reset-password', [UserController::class, 'resetPassword'])->middleware('access:User,edit');
        // Route::post('/user/update-password', [UserController::class, 'updatePassword']);
        // Route::get('/user/get-user', [UserController::class, 'getUsers']);

        Route::get('/year', [YearController::class, 'index']);
        Route::post('/year/show', [YearController::class, 'show']);
        Route::post('/year/add', [YearController::class, 'add']);
        Route::post('/year/edit', [YearController::class, 'edit']);
        Route::post('/year/update', [YearController::class, 'update']);
        Route::post('/year/delete', [YearController::class, 'delete']);

        Route::get('/study-program', [StudyProgramController::class, 'index']);
        Route::post('/study-program/show', [StudyProgramController::class, 'show']);
        Route::post('/study-program/add', [StudyProgramController::class, 'add']);
        Route::post('/study-program/edit', [StudyProgramController::class, 'edit']);
        Route::post('/study-program/update', [StudyProgramController::class, 'update']);
        Route::post('/study-program/delete', [StudyProgramController::class, 'delete']);

        Route::get('/period', [PeriodController::class, 'index']);
        Route::post('/period/show', [PeriodController::class, 'show']);
        Route::post('/period/add', [PeriodController::class, 'add']);
        Route::post('/period/edit', [PeriodController::class, 'edit']);
        Route::post('/period/update', [PeriodController::class, 'update']);
        Route::post('/period/delete', [PeriodController::class, 'delete']);
        Route::post('/period/toggle', [PeriodController::class, 'toggle']);

        Route::get('/menu', [MenuController::class, 'index']);
        Route::post('/menu/show', [MenuController::class, 'show']);
        Route::post('/menu/add', [MenuController::class, 'add']);
        Route::post('/menu/edit', [MenuController::class, 'edit']);
        Route::post('/menu/update', [MenuController::class, 'update']);
        Route::post('/menu/delete', [MenuController::class, 'delete']);

        Route::get('/role', [RoleController::class, 'index']);
        Route::post('/role/show', [RoleController::class, 'show']);
        Route::get('/role/add', [RoleController::class, 'add']);
        Route::post('/role/create', [RoleController::class, 'create']);
        Route::get('/role/edit/{role_id}', [RoleController::class, 'edit']);
        Route::post('/role/update', [RoleController::class, 'update']);
        Route::post('/role/delete', [RoleController::class, 'delete']);

        Route::get('/user', [UserController::class, 'index']);
        Route::post('/user/show', [UserController::class, 'show']);
        Route::post('/user/add', [UserController::class, 'add']);
        Route::post('/user/edit', [UserController::class, 'edit']);
        Route::post('/user/update', [UserController::class, 'update']);
        Route::post('/user/delete', [UserController::class, 'delete']);
        Route::post('/user/reset-password', [UserController::class, 'resetPassword']);
        Route::post('/user/update-password', [UserController::class, 'updatePassword']);
        Route::get('/user/get-user', [UserController::class, 'getUsers']);

        Route::get('/applicant', [ApplicantController::class, 'index']);
        Route::post('/applicant/show', [ApplicantController::class, 'show']);
        Route::post('/applicant/add', [ApplicantController::class, 'add']);
        Route::post('/applicant/edit', [ApplicantController::class, 'edit']);
        Route::post('/applicant/update', [ApplicantController::class, 'update']);
        Route::post('/applicant/delete', [ApplicantController::class, 'delete']);
        Route::post('/applicant/import', [ApplicantController::class, 'import']);
        Route::get('/applicant/export', [ApplicantController::class, 'export']);

        Route::get('/registration', [RegistrationController::class, 'index']);
        Route::post('/registration/show', [RegistrationController::class, 'show']);
        Route::post('/registration/edit', [RegistrationController::class, 'edit']);
        Route::post('/registration/update', [RegistrationController::class, 'update']);

        Route::get('/medical-form', [MedicalFormController::class, 'index']);
        Route::post('/medical-form/show', [MedicalFormController::class, 'show']);
        Route::get('/medical-form/edit/{id}', [MedicalFormController::class, 'edit']);
        Route::get('/medical-form/get/{id}', [MedicalFormController::class, 'get']);
        Route::post('/medical-form/update-antropometri', [MedicalFormController::class, 'updateAntropometri']);
        Route::post('/medical-form/update-fisik', [MedicalFormController::class, 'updateFisik']);
        Route::post('/medical-form/update-fisik-2', [MedicalFormController::class, 'updateFisik2']);
        Route::post('/medical-form/update-gigi', [MedicalFormController::class, 'updateGigi']);
        Route::post('/medical-form/update-narkoba', [MedicalFormController::class, 'updateNarkoba']);
        Route::post('/medical-form/update-kesimpulan', [MedicalFormController::class, 'updateKesimpulan']);
        Route::post('/medical-form/get-kesimpulan', [MedicalFormController::class, 'getKesimpulan']);

        Route::get('/medical-result', [MedicalResultController::class, 'index']);
        Route::post('/medical-result/show', [MedicalResultController::class, 'show']);
    });
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/test-pusher', function () {
        broadcast(new TestEvent('Hello from Pusher!'));
        return 'Event broadcasted!';
    });
});
