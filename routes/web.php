<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\MatakuliahController;

Route::get('/pcr', function () {
    return 'selamat datang di website kampus politeknik caltex riau !';
});


Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);


Route::get('/nama/{param1}', function ($param1 = '') {
    return 'nama saya : ' .$param1;
});


Route::get('/nim/{param1}', function ($param1 = '') {
    return 'nim saya : ' .$param1;
});

Route::get('/about', function () {
    return view ('halaman-about') ;
});




Route::get('/matakuliah/show/{id?}', [MatakuliahController::class, 'show']);

Route::resource('matakuliah', MatakuliahController::class);

//hahahahahaha
