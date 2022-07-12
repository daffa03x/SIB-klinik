<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Poliklinik
Route::get('poliklinik',[PoliklinikController::class,'index']);
Route::post('poliklinik/add',[PoliklinikController::class,'addPoli']);

// Dokter
Route::get('dokter',[DokterController::class,'index']);

// Jadwal Dokter
Route::get('jadwal_dokter',[JadwalDokterController::class,'index']);

// Pasien
Route::get('pasien',[PasienController::class,'index']);

// Pendaftaran
Route::get('pendaftaran',[PendaftaranController::class,'index']);