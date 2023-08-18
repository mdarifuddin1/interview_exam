<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/createProduct', [ProductController::class,'create'])->name('createProduct');
Route::post('/add-Product', [ProductController::class,'store'])->name('add-Product');

Route::get('/manage-Product', [ProductController::class,'manage'])->name('manage-Product');
Route::get('/delete-Product/{id}', [ProductController::class,'delete'])->name('delete-Product');
Route::get('/update-Product/{id}', [ProductController::class,'update'])->name('update-Product');
Route::post('/edit-Product', [ProductController::class,'edit'])->name('edit');
