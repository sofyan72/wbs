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

// Route khusus User
Route::get('/', function () {
    return view('user.home');    
    
});
Route::get('/home', function () {
    return view('user.home');    
    
});
Route::get('/pengaduanmasyarakat', function () {
    return view('user.pengaduanmasyarakat');    
    
});
Route::get('/pengaduanpegawai', function () {
    return view('user.pengaduanpegawai');    
    
});
Route::get('/login', function () {
    return view('user.login');    
    
});
Route::get('/lupapassword', function () {
    return view('user.lupapassword');    
    
});
Route::get('/pantaupengaduan', function () {
    return view('user.pantaupengaduan');    
    
});
Route::get('/progresspengaduan', function () {
    return view('user.progresspengaduan');    
    
});
Route::get('/ajukanpengaduan', function () {
    return view('user.ajukanpengaduan');    
    
});
Route::get('/editprofil', function () {
    return view('user.editprofil');    
    
});

Route::get('/editprofil', function () {
    return view('user.editprofil');    
    
});
Route::get('/lihatpengaduan', function () {
    return view('user.lihatpengaduan');    
    
});

// Route khusus Admin

Route::get('/admin', function () {
    return view('admin.login');    
    
});

Route::get('/datalaporan', function () {
    return view('admin.datalaporan');    
    
});

Route::get('/informasi', function () {
    return view('admin.informasi');    
    
});

Route::get('/pengaduan', function () {
    return view('admin.pengaduan');    
    
});
Route::get('/detailpengaduan', function () {
    return view('admin.detailpengaduan');    
    
});
Route::get('/tercatat', function () {
    return view('admin.tercatat');    
    
});
Route::get('/detailtercatat', function () {
    return view('admin.detailtercatat');    
    
});
Route::get('/penelahaan', function () {
    return view('admin.penelahaan');    
    
});
Route::get('/detailpenelahaan', function () {
    return view('admin.detailpenelahaan');    
    
});
Route::get('/pelimpahan', function () {
    return view('admin.pelimpahan');    
    
});
Route::get('/auditinvestigasi', function () {
    return view('admin.auditinvestigasi');    
    
});
Route::get('/detailaudit', function () {
    return view('admin.detailaudit');    
    
});


// Route::prefix('user.dashboard')->group(function () {
// Route::get('/', [DashboardController::class, 'index'])->name('user.dashboard');
    
// });


// Route::get('/', [DashboardController::class, 'index']);

