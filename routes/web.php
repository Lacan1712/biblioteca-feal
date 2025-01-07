<?php

use App\Http\Controllers\Livros\LivrosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contents.home');
});


Route::post('/upload-excel', [LivrosController::class, 'upload'])->name('excel.upload');

Route::get('/livros', [LivrosController::class, 'showUpload'])->name('showUpload');
