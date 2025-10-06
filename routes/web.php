<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\MatakuliahController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\QuestionController;

Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');


Route::get('/home1', function () {
    return 'selamat datang di website kampus kami politeknik caltex riau !';
});


Route::get('/pcr', function () {
    return 'selamat datang di website kampus kami politeknik caltex riau !';
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
