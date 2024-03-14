<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PictureController;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('album',[AlbumController::class,'index'])->name('album.index');
Route::get('album/create',[AlbumController::class,'create'])->name('album.create');
Route::post('album/store',[AlbumController::class,'store'])->name('album.store');
Route::get('album/add/picture/{album}',[AlbumController::class,'show'])->name('album.show');
Route::get('album/details/{album}',[AlbumController::class,'details'])->name('album.details');
Route::get('album/edit/{album}',[AlbumController::class,'edit'])->name('album.edit');
Route::put('album/update/{album}',[AlbumController::class,'update'])->name('album.update');
Route::get('album/destroy/{album}',[AlbumController::class,'destroy'])->name('album.destroy');

Route::post('picture/store',[PictureController::class,'store'])->name('picture.store');

