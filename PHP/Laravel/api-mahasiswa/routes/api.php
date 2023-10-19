<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenApiController;
use App\Http\Controllers\MahasiswaApiController;
use App\Http\Controllers\WaliApiResourceController;
use App\Http\Controllers\DosenApiResourceController;
use App\Http\Controllers\MahasiswaApiResourceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('mahasiswa/relasi-1', [MahasiswaApiController::class, 'relasi_1']);

Route::get('mahasiswa/relasi-2', [MahasiswaApiController::class, 'relasi_2']);

Route::get('dosen/relasi-3', [DosenApiController::class, 'relasi_3']);


// Mahasiswa CRUD
Route::apiResource('mahasiswa', MahasiswaApiResourceController::class);

// Dosen CRUD
Route::apiResource('dosen', DosenApiResourceController::class);

// Wali CRUD
Route::apiResource('wali', WaliApiResourceController::class);
