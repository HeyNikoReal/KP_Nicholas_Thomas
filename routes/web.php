<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardKaryawanController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\LRLController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Route::resource('fakultas', FakultasController::class)->middleware(['auth', 'verified','checkRole:admin']);
// Route::get('fakultas',[FakultasController::class, 'index'])->middleware(['auth', 'verified', 'checkRole:admin,user'])->name('fakultas.index');
// Route::get('fakultas/create',[FakultasController::class, 'create'])->middleware(['auth', 'verified', 'checkRole:admin'])->name('fakultas.create');
// Route::delete('fakultas/{fakultas}',[FakultasController::class, 'destroy'])->middleware(['auth', 'verified', 'checkRole:admin'])->name('fakultas.destroy');
// Route::get('fakultas/{fakultas}/edit',[FakultasController::class, 'edit'])->middleware(['auth', 'verified', 'checkRole:admin'])->name('fakultas.edit');
// Route::put('fakultas/{fakultas}', [FakultasController::class, 'update'])->middleware(['auth', 'verified', 'checkRole:admin'])->name('fakultas.update');
// Route::post('fakultas', [FakultasController::class, 'store'])->middleware(['auth', 'verified', 'checkRole:admin'])->name('fakultas.store');

// Route::resource('prodi', ProdiController::class)->middleware(['auth', 'verified']);
// Route::resource('mahasiswa', MahasiswaController::class)->middleware(['auth', 'verified']);



Route::resource('karyawan', KaryawanController::class)->middleware(['auth', 'verified']);;
// Route::get('karyawan',[KaryawanController::class, 'index'])->middleware(['auth', 'verified', ])->name('fakultas.index');
// Route::get('karyawan/create',[KaryawanController::class, 'create'])->middleware(['auth', 'verified', ])->name('fakultas.create');
// Route::delete('karyawan/{fakultas}',[KaryawanController::class, 'destroy'])->middleware(['auth', 'verified', ])->name('fakultas.destroy');
// Route::get('karyawan/{fakultas}/edit',[KaryawanController::class, 'edit'])->middleware(['auth', 'verified', ])->name('fakultas.edit');
// Route::put('karyawan/{fakultas}', [KaryawanController::class, 'update'])->middleware(['auth', 'verified', ])->name('fakultas.update');
// Route::post('karyawan', [KaryawanController::class, 'store'])->middleware(['auth', 'verified',])->name('fakultas.store');


// Route::post('karyawan', [KaryawanController::class, 'store'])->middleware(['auth', 'verified', 'checkRole:admin'])->name('fakultas.store');
Route::resource('jabatan', JabatanController::class)->middleware(['auth', 'verified']);;


Route::get('/karyawan-dashboard', [DashboardKaryawanController::class, 'index'])->name('dashboard');
Route::get('/admin-dashboard', [DashboardController::class, 'index'])->name('dashboard');

require __DIR__.'/auth.php';

