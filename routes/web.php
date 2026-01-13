<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [FrontendController::class, 'index'])->name('frontend.master');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/service', [FrontendController::class, 'service'])->name('frontend.service');
