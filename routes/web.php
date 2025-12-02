<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome-laravel');
});

Route::prefix('admin')->group(function (){
    Route::get('/', [AdminController::class, 'index']);
});