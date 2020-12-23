<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('mahasiswa/index');
// });



Route::get('halo', function () {
    return "Halo, ini untuk contoh routes berupa teks";
});

/* 
Route::get('blog', function () {
    return view('blog');
});
*/

//Memanggil controller dari Routes
// UNTUK CONTOH PERKENALAN, CARA YG BENAR MENANGGIL VIEW DARI CONTROLLER BUKAN ROUTE

use App\Http\Controllers\DosenController;

Route::get('dosen', [DosenController::class, 'index']);

// pada saat url dosen diakses, maka perintah untuk menjalankan function bernama "index" pada DosenController

/* ---------------------------------------------------------------------------

// MENANGKAP DATA DARI URL
// DATA DIMASUKKAN PADA URL DAN DITAMPILKAN

use App\Http\Controllers\MahasiswaController;
Route::get('/mahasiswa/{nama}', [MahasiswaController::class, 'index']);

// http://localhost:8000/mahasiswa/seto  <---- data yang dimasukkan "seto"


//MENANGKAP DATA INPUTAN

Route::get('/formulir', [MahasiswaController::class, 'formulir']);

//karena untuk menangkap data, gunakan POST
Route::post('/proses', [MahasiswaController::class, 'proses']);

---------------------------------------------------------------------------------------- */

/* BELAJAR HALAMAN DINAMIS DAN BLADE TEMPLATING */
use App\Http\Controllers\BlogController;
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

/* BELAJAR CRUD QUERY BUILDER*/
use App\Http\Controllers\PegawaiController;
Route::get('/', [PegawaiController::class, 'index']);
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);


/* BELAJAR CRUD Eloquent ORM ( Pakai Model ) */
use App\Http\Controllers\MahasiswaController;

// Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
// Route::get('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show']);
// Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
// Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy']);
// Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit']);
// Route::patch('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update']);


// Semua Routes CRUD Eloquent ORM dapat diganti dengan 1 routes ini karena menggunakan controller resources
Route::resource('mahasiswa', MahasiswaController::class);

//kalau penulisan begini, maka walaupun udah lengkap viewnya tetep not found
//karena letaknya dibawah Route::get(/mahasiswa/{mahasiswa}, jadinya masuk ke routes atas
//solusinya pindah diatasnya
//Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);