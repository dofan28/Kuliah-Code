<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChartJsController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LaporanHarianController;
use App\Http\Controllers\LaporanBulananController;
use App\Http\Controllers\LaporanMingguanController;


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
    return view('login/index');
});

//login
Route::get('/Login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/Login', [LoginController::class, 'authenticate']);
// Route::post('/Logout',[LoginController::class, 'logout']);
// Route::get('/Logout',[LoginController::class, 'index']);

//register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Tabel pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);                // View
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);        // Menambah data
Route::post('/pegawai/store', [PegawaiController::class, 'store']);          // Menyimpan data tambah
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);        // Mengedit data
Route::post('/pegawai/update', [PegawaiController::class, 'update']);        // Menyimpan data yang sudah diedit
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);      // Menghapus salah 1 data

// Tabel meeting
Route::get('/meeting', [MeetingController::class, 'index']);                // View
Route::get('/meeting/tambah', [MeetingController::class, 'tambah']);        // Create
Route::post('/meeting/store', [MeetingController::class, 'store']);          // Menyimpan data create
Route::get('/meeting/edit/{id}', [MeetingController::class, 'edit']);        // Mengedit data
Route::post('/meeting/update', [MeetingController::class, 'update']);        // Menyimpan data yang sudah diedit
Route::get('/meeting/hapus/{id}', [MeetingController::class, 'hapus']);      // Menghapus salah 1 data

// Tabel ruangan
Route::get('/ruangan', [RuanganController::class, 'index']);                // View
Route::get('/ruangan/tambah', [RuanganController::class, 'tambah']);        // Create
Route::post('/ruangan/store', [RuanganController::class, 'store']);          // Menyimpan data create
Route::get('/ruangan/edit/{id}', [RuanganController::class, 'edit']);        // Mengedit data
Route::post('/ruangan/update', [RuanganController::class, 'update']);        // Menyimpan data yang sudah diedit
Route::get('/ruangan/hapus/{id}', [RuanganController::class, 'hapus']);      // Menghapus salah 1 data

// Tabel peserta_rapat
Route::get('/peserta', [PesertaController::class, 'index']);                // View
Route::get('/peserta/tambah', [PesertaController::class, 'tambah']);        // Create
Route::post('/peserta/store', [PesertaController::class, 'store']);          // Menyimpan data create
Route::get('/peserta/edit/{id}', [PesertaController::class, 'edit']);        // Mengedit data
Route::post('/peserta/update', [PesertaController::class, 'update']);        // Menyimpan data yang sudah diedit
Route::get('/peserta/hapus/{id}', [PesertaController::class, 'hapus']);      // Menghapus salah 1 data

Route::get('/cetakpegawai', [PegawaiController::class, 'cetakPegawai']);
Route::get('/cetakmeeting', [MeetingController::class, 'cetakMeeting']);
Route::get('/cetakruangan', [RuanganController::class, 'cetakRuangan']);
Route::get('/cetakpeserta', [PesertaController::class, 'cetakPeserta']);

// Laporan Meeting Perhari
Route::get('/laporanharian', [LaporanHarianController::class, 'index']);
Route::post('/simpanlaporanharian', [LaporanHarianController::class, 'simpan']);
Route::get('{id}/editlaporanharian', [LaporanHarianController::class, 'edit']);
Route::post('updatelaporanharian/{id}', [LaporanHarianController::class, 'update']);
Route::get('{id}/hapusdatalaporanharian', [LaporanHarianController::class, 'hapus']);


//Laporan Meeting Perminggu
Route::get('/laporanmingguan', [LaporanMingguanController::class, 'index']);
Route::post('/simpanlaporanmingguan', [LaporanMingguanController::class, 'simpan']);
Route::get('{id}/editlaporanmingguan', [LaporanMingguanController::class, 'edit']);
Route::post('updatelaporanmingguan/{id}', [LaporanMingguanController::class, 'update']);
Route::get('{id}/hapusdatalaporanmingguan', [LaporanMingguanController::class, 'hapus']);

// Laporan Meeting Perbulan
Route::get('/laporanmingguan', [LaporanMingguanController::class, 'index']);
Route::post('/simpanlaporanmingguan', [LaporanMingguanController::class, 'simpan']);
Route::get('{id}/editlaporanmingguan', [LaporanMingguanController::class, 'edit']);
Route::post('updatelaporanmingguan/{id}', [LaporanMingguanController::class, 'update']);
Route::get('{id}/hapusdatalaporanmingguan', [LaporanMingguanController::class, 'hapus']);

// Laporan Meeting Perbulan
Route::get('/laporanbulanan', [LaporanBulananController::class, 'index']);
Route::post('/simpanlaporanbulanan', [LaporanBulananController::class, 'simpan']);
Route::get('{id}/editlaporanbulanan', [LaporanBulananController::class, 'edit']);
Route::post('updatelaporanbulanan/{id}', [LaporanBulananController::class, 'update']);
Route::get('{id}/hapusdatalaporanbulanan', [LaporanBulananController::class, 'hapus']);

Route::get('/grafik', [MeetingController::class, 'grafik']);                // View
Route::get('/chartjs', [ChartJsController::class, 'index'])->name('chartjs.index');
