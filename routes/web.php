<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:pengurus'])->group(function () {
    Route::get('/dashboard/pengurus', function () {
        return view('dashboard.pengurus');
    })->name('dashboard.pengurus');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/pengawas', [DashboardController::class, 'pengawas'])->name('dashboard.pengawas');
    Route::get('/dashboard/pengurus', [DashboardController::class, 'pengurus'])->name('dashboard.pengurus');
});

Route::middleware(['role:pengawas'])->group(function () {
    Route::get('/dashboard/pengawas', function () {
        return view('dashboard.pengawas');
    })->name('dashboard.pengawas');
});


Route::get('/', function () {
    return view('beranda');
});

Route::get('/pegawai', function () {
    return view('pegawai');
});

Route::get('/anggota', function () {
    return view('anggota');
});

Route::get('/simpanan', function () {
    return view('simpanan');
});

Route::get('/angsuran', function () {
    return view('angsuran');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/setting', function () {
    return view('setting');
});
