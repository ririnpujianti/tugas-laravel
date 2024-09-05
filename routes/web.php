<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\RumahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/rumah",[RumahController::class,"index"]);

Route::get('/book', [BookController::class, 'index']);
