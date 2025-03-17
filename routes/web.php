<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengawasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//login


Route::get('/pengawas/login', [PengawasController::class, 'PengawasView'])->name('pengawas.login');
Route::post('/pengawas/login', [PengawasController::class, 'PengawasLogin']);
Route::get('/pengawas/dashboard', [PengawasController::class, 'PengawasDashboard'])->middleware('auth')->name('pengawas.dashboard');
Route::post('/pengawas/logout', [PengawasController::class, 'PengawasLogout'])->name('pengawas.logout');


require __DIR__.'/auth.php';
