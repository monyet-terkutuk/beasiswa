<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FuzzyMamdaniController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SiswaWaliKelasController;
use App\Http\Controllers\SosialEkonomiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WaliKelasController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.auth');
// });

Route::get('/', [AuthenticatedSessionController::class, 'create']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// operator
Route::resource('siswa', SiswaController::class);
Route::resource('users', UserController::class);
Route::resource('sosial-ekonomi', SosialEkonomiController::class);
Route::post('/seleksi-kelayakan/{id}', [FuzzyMamdaniController::class, 'proses'])->name('seleksi-kelayakan');
Route::get('/fuzzy-mamdani', [FuzzyMamdaniController::class, 'index'])->name('fuzzy-mamdani.index');

Route::get('/dashboard', function () {
    return view('operator.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/report', [DashboardController::class, 'reportIndex'])->name('dashboard.report');
Route::get('/report/{id}', [DashboardController::class, 'reportShow'])->name('dashboard.report.show');

Route::get('/walikelas/report', [DashboardController::class, 'reportWaliIndex'])->name('walikelas.report');
Route::get('/walikelas/report/{id}', [DashboardController::class, 'reportWaliShow'])->name('walikelas.report.show');

Route::get('/walikelas/dashboard', [WaliKelasController::class, 'index'])->name('walikelas.dashboard');
Route::get('/walikelas/dashboard', [WaliKelasController::class, 'index'])->name('walikelas.dashboard');

Route::prefix('walikelas')->name('walikelas.')->group(function () {
    Route::resource('siswa', SiswaWaliKelasController::class);
});


require __DIR__.'/auth.php';

