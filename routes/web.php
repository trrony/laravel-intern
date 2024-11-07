<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::get('/', [ImageController::class, 'index'])->name('home');
Route::post('/image/upload', [ImageController::class, 'store'])->name('upload.image');
Route::get('/image/details/{id}', [ImageController::class, 'details'])->name('image.details');
Route::get('/image/delete/{id}', [ImageController::class, 'delete'])->name('image.delete');



