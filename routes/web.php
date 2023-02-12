<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InputNilaiController;
use App\Http\Controllers\SenibudayaController;
use App\Http\Controllers\MasterEkskulController;
use App\Http\Controllers\MasterSenbudController;
use App\Http\Controllers\AbsensiSenbudController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\NilaisenibudayaController;
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
    return view('welcome');
});
Route::resource('/admin', AdminController::class);
Route::resource('/guru', GuruController::class);
Route::resource('/siswa', SiswaController::class);

Route::resource('/master-ekskul', MasterEkskulController::class);
Route::resource('/master-senbud', MasterSenbudController::class);
Route::resource('/master-rayonnn', RayonController::class);
Route::resource('/master-rombel', RombelController::class);

Route::resource('/absensi', AbsensiController::class);
Route::resource('/absensi-senbud', AbsensiSenbudController::class);
Route::resource('/ekstrakurikuler', EkstrakurikulerController::class);
Route::resource('/senibudaya', SenibudayaController::class);

Route::resource('/input-nilai', InputNilaiController::class);
Route::resource('/nilaisenibudaya', NilaisenibudayaController::class);

Route::get('/dashboard-admin', [DashboardController::class, 'dashboardAdmin'])->name('/dashboard-admin');
Route::get('/dashboard-student', [DashboardController::class, 'dashboardStudent'])->name('/dashboard-student');
Route::get('/dashboard-teacher', [DashboardController::class, 'dashboardTeacher'])->name('/dashboard-teacher');

Route::get('/laporan-admin', [AdminController::class, 'laporan'])->name('/laporan-admin');
Route::get('/laporan-guru', [GuruController::class, 'laporan'])->name('/laporan-guru');
Route::get('/laporan-murid', [SiswaController::class, 'laporan'])->name('/laporan-murid');

Route::get('/nilai-ekstrakurikuler', [SiswaController::class, 'nilaiEkskul'])->name('/nilai-ekstrakurikuler');
Route::get('/nilai-seni-budaya', [SiswaController::class, 'inputSenbud'])->name('/nilai-seni-budaya');

Route::get('/login', [LoginController::class,'login']);
Route::get('logout', [LoginController::class,'logout']);


