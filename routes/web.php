<?php

use App\Http\Controllers\MainController;
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
