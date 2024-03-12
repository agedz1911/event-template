<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminDashboardController;
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

// Route::get('/', function () {
//     return view('home');
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
    Route::get('/', [AdminDashboardController::class, 'index']);
    Route::get('/user-register', [AdminDashboardController::class, 'userRegister']);
    Route::get('/user-role', [AdminDashboardController::class, 'role']);
    Route::get('/important-dates', [AdminDashboardController::class, 'importantDates']);
    Route::post('/storeImportantDates', [AdminDashboardController::class, 'storeImportantDates']);
    Route::delete('/delete_importantDate/{id}', [AdminDashboardController::class, 'delete_importantDate']);
    Route::get('/important-dates/{id}/restore', [AdminDashboardController::class, 'restore_importantDate']);
    Route::get('/faculties', [AdminDashboardController::class, 'faculties']);
    Route::post('/storeFaculties', [AdminDashboardController::class, 'storeFaculties']);
    Route::delete('/delete_faculty/{id}', [AdminDashboardController::class, 'delete_faculty']);
    Route::get('/faculties/{id}/restore', [AdminDashboardController::class, 'restore_faculty']);
});
