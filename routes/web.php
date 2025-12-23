<?php

use App\Events\TestEvent;
use App\Http\Controllers\admin\AttendanceController;
use App\Http\Controllers\admin\BehaviorAssessmentController;
use App\Http\Controllers\admin\BehaviorScoreController;
use App\Http\Controllers\admin\ChatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;
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

Route::get('/dashboard', [DashboardController::class, 'index']);


Route::group(['middleware' => ['auth']], function () {
    Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index']);
        Route::get('/dashboard', [DashboardController::class, 'index']);

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
        Route::post('/user/update-password', [UserController::class, 'updatePassword']);
        Route::get('/user/get-user', [UserController::class, 'getUsers']);

        // Route::get('/user', [UserController::class, 'index']);
        // Route::post('/user/show', [UserController::class, 'show']);
        // Route::post('/user/add', [UserController::class, 'add']);
        // Route::post('/user/edit', [UserController::class, 'edit']);
        // Route::post('/user/update', [UserController::class, 'update']);
        // Route::post('/user/delete', [UserController::class, 'delete']);
        // });


    });
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/test-pusher', function () {
        broadcast(new TestEvent('Hello from Pusher!'));
        return 'Event broadcasted!';
    });
});
