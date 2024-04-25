<?php

use App\Http\Controllers\about;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return view('404');
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/about',[about::class,'index']);
Route::resource('blog', BlogController::class);
