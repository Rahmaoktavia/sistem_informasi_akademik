<?php

use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\DashboardDosenController;
use App\Http\Controllers\DashboardProdiController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardMatakuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Prodi;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('home');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware('auth');


Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/dosen',[DosenController::class,'index']);
Route::get('/prodi',[ProdiController::class,'index']);
Route::get('/user',[UserController::class,'index']);
// Route::get('/matakuliah',[MatakuliahController::class,'index']);

// Route::get('/cetak-pdf',[DashboardMahasiswaController::class,'cetakPdf']);
// Route::get('/cetak-pdf',[DashboardDosenController::class,'cetakPdf']);
// Route::get('/cetak-pdf',[DashboardProdiController::class,'cetakPdf']);
// Route::get('/cetak-pdf',[DashboardUserController::class,'cetakPdf']);
Route::get('/cetak-pdf/mahasiswa', [DashboardMahasiswaController::class, 'cetakPdf']);
Route::get('/cetak-pdf/dosen', [DashboardDosenController::class, 'cetakPdf']);
Route::get('/cetak-pdf/prodi', [DashboardProdiController::class, 'cetakPdf']);
Route::get('/cetak-pdf/user', [DashboardUserController::class, 'cetakPdf']);
Route::get('/cetak-pdf/matakuliah', [DashboardMatakuliahController::class, 'cetakPdf']);

Route::resource('/dashboard-mahasiswa', DashboardMahasiswaController::class)->middleware('admin', 'auth');
Route::resource('/dashboard-dosen', DashboardDosenController::class)->middleware('auth');
Route::resource('/dashboard-prodi', DashboardProdiController::class)->middleware('auth');
Route::resource('/dashboard-user', DashboardUserController::class)->middleware('auth');
Route::resource('/dashboard-matakuliah', DashboardMatakuliahController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
