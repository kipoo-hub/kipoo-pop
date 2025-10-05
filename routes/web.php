<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Contollers\MahasiswaController;
use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

//Route::get('/mahasiswa', function () {
//return 'Halo Mahasiswa';
//})->name('mahasiswa.show');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});

Route::get('/panggilan/{param1?}', function ($param1 = '') {
    return 'Panggilan saya: ' . $param1;
});

Route::get('/mahasiswa/{param1?}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');
Route::get('/auth', [AuthController::class, 'index']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/dashboard', function () {
    return view('dashboard');
});
