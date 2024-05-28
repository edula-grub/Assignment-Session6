<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PageController::class,'index']);

Route::get('/mahasiswa',
[PageController::class,'tampil']);

Route::get('/view-ipk',[App\Http\Controllers\MahasiswaController::class,'viewIpk']);
Route::get('/insert',[App\Http\Controllers\MahasiswaController::class,'insert']);

Route::get('/all-view',[App\Http\Controllers\MahasiswaController::class, 'allView']);

Route::get('/update',[App\Http\Controllers\MahasiswaController::class,'update']);
Route::get('/delete',[App\Http\Controllers\MahasiswaController::class,'delete']);