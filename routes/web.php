<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/home', function () {
//     return redirect()->to('/login');
// });
Route::get('/', [MainController::class, 'index']);
Route::get('/congress-information', [MainController::class, 'congressInfo']);
Route::get('/scientific-program', [MainController::class, 'scientificProgram']);
Route::get('/registration', [MainController::class, 'registration']);
Route::get('/submission', [MainController::class, 'submission']);

// Route::get('/dashboard/admin', function () {
//     return view('dashboard.admin.home');
// });
Route::prefix('/dashboard/admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->middleware('auth', 'verified');
    Route::get('/important-dates', [AdminDashboardController::class, 'importantDates'])->middleware('auth', 'verified');
    Route::post('/storeImportantDates', [AdminDashboardController::class, 'storeImportantDates'])->middleware('auth', 'verified');
    Route::delete('/delete_importantDate/{id}', [AdminDashboardController::class, 'delete_importantDate'])->middleware('auth', 'verified');
    Route::get('/important-dates/{id}/restore', [AdminDashboardController::class, 'restore_importantDate'])->middleware('auth', 'verified');
    Route::get('/edit-important-dates/{id}', [AdminDashboardController::class, 'edit_importantDate'])->middleware('auth', 'verified');
    Route::put('/update_importantDate/{id}', [AdminDashboardController::class, 'update_importantDate'])->middleware('auth', 'verified');
    Route::get('/faculties', [AdminDashboardController::class, 'faculties'])->middleware('auth', 'verified');
    Route::post('/storeFaculties', [AdminDashboardController::class, 'storeFaculties'])->middleware('auth', 'verified');
    Route::delete('/delete_faculty/{id}', [AdminDashboardController::class, 'delete_faculty'])->middleware('auth', 'verified');
    Route::get('/faculties/{id}/restore', [AdminDashboardController::class, 'restore_faculty'])->middleware('auth', 'verified');
    Route::get('/edit_faculties/{id}', [AdminDashboardController::class, 'edit_faculties'])->middleware('auth', 'verified');
    Route::put('/update_faculties/{id}', [AdminDashboardController::class, 'update_faculties'])->middleware('auth', 'verified');
    Route::get('/schedule', [AdminDashboardController::class, 'schedules'])->middleware('auth', 'verified');
    Route::post('/storeSchedule', [AdminDashboardController::class, 'storeSchedule'])->middleware('auth', 'verified');
    Route::delete('delete_schedule/{id}', [AdminDashboardController::class, 'delete_schedule'])->middleware('auth', 'verified');
    Route::get('/schedule/{id}/restore', [AdminDashboardController::class, 'restore_schedule'])->middleware('auth', 'verified');
    Route::get('/user-register', [AuthController::class, 'userRegister'])->middleware('auth', 'verified');
    Route::post('/storeUser', [AuthController::class, 'storeUser'])->name('storeUser')->middleware('auth', 'verified');
    Route::get('/user-role', [AuthController::class, 'role'])->middleware('auth', 'verified');
    Route::post('/storeRole', [AuthController::class, 'storeRole'])->name('storeRole')->middleware('auth', 'verified');
    Route::delete('/delete_role/{id}', [AuthController::class, 'delete_role'])->middleware('auth', 'verified');
    Route::get('/user-role/{id}/restore', [AuthController::class, 'restore_role'])->middleware('auth', 'verified');
});

Route::prefix('/dashboard/user')->group(function () {
    Route::get('/', [UserDashboardController::class, 'index'])->middleware('auth', 'verified');
});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'storeLogin'])->name('login');
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signUser'])->name('signup');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
