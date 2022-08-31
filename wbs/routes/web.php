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

// Route khusus user

Route::get('/', function () {
    return view('user.dashboard');    
    
});
Route::get('/lapor', function () {
    return view('user.tulispengaduan');    
    
});
Route::get('/login', function () {
    return view('user.login');    
    
});
Route::get('/resetpassword', function () {
    return view('user.resetpassword');    
    
});
Route::get('/notifresetpassword', function () {
    return view('user.notifresetpassword');    
    
});
Route::get('/progresspengaduan', function () {
    return view('user.progresspengaduan');    
    
});
Route::get('/laporpegawai', function () {
    return view('user.pengaduanpegawai');    
    
});

// Route::prefix('user.dashboard')->group(function () {
// Route::get('/', [DashboardController::class, 'index'])->name('user.dashboard');
    
// });


// Route::get('/', [DashboardController::class, 'index']);

