<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;

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


Route::get('/', function () {
    return view('dashboard');    
    
});
Route::get('/lapor', function () {
    return view('tulispengaduan');    
    
});
Route::get('/login', function () {
    return view('login');    
    
});
Route::get('/laporpegawai', function () {
    return view('pengaduanpegawai');    
    
});

// Route::prefix('user.dashboard')->group(function () {
// Route::get('/', [DashboardController::class, 'index'])->name('user.dashboard');
    
// });


// Route::get('/', [DashboardController::class, 'index']);

