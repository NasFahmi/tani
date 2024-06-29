<?php

use App\Http\Controllers\CekKesehatanController;
use App\Http\Controllers\RuangTanyaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/ruang-bertanya',[RuangTanyaController::class, 'index'])->name('ruang-bertanya.index');
Route::post('/chat',[RuangTanyaController::class,'chat'])->name('ruang-bertanya.chat');

Route::get('/cek-kesehatan',[CekKesehatanController::class, 'index'])->name('cek-kesehatan.index');
Route::post('/upload-photo', [CekKesehatanController::class, 'uploadPhoto'])->name('cek-kesehatan.upload-photo');
Route::get('/cek-kesehatan/hasil', [CekKesehatanController::class, 'hasil'])->name('cek-kesehatan.hasil')->middleware('isSubmitPhoto');

Route::get('/profile',[UserController::class, 'index'])->name('profile.index');