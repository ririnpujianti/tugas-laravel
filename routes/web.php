<?php

use App\Http\Controllers\RelasiController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RumahController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//return view('welcome');
//});

Route::get('/form', function () {
    return view('form');
});


//Route::get('/rumah', [RumahController::class, "index"]);

Route::get('/book', [BookController::class, 'index']);

Route::get('/home', [RumahController::class, 'index']); // Untuk menampilkan form
Route::post('/home', [RumahController::class, 'submit']); // Untuk mengirim form
Route::get('/create', [StoreController::class, 'store']); // Untuk menampilkan form
Route::get('/show', [StoreController::class, 'show']);
Route::get('/products/{id}/edit', [StoreController::class, 'edit']);
Route::put('/products/{id}', [StoreController::class, 'update']);
Route::delete('/products/{id}', [StoreController::class, 'destroy']);
Route::get('/input', [StoreController::class, 'input']);
Route::post('/create', [StoreController::class, 'store']);
Route::get('/ktp', [RelasiController::class, 'index']);
Route::get('/pengguna/create', [RelasiController::class, 'create']);
Route::post('/pengguna/store', [RelasiController::class, 'store']);
