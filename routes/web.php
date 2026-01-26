<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'index'])->name('frontend.master');
Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/service', [FrontendController::class, 'service'])->name('frontend.service');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('frontend.portfolio');
Route::get('/blog', [FrontendController::class, 'blog'])->name('frontend.blog');
Route::get('/blog/details/{id}', [FrontendController::class, 'blogDetails'])->name('frontend.blog.details');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::post('/contact/message', [FrontendController::class, 'contactMessage'])->name('frontend.contact.message');

Route::get('admin/login', [AuthController::class, 'loginPage'])->name('admin.login.page');
Route::post('admin/login/submit', [AuthController::class, 'loginSubmit'])->name('admin.login.submit');



Route::prefix('admin')->middleware('auth')->controller(DashboardController::class)->group(function () {

    Route::get('/dashboard', 'index')->name('dashboard.index');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('/homeBanner', [AdminHomeController::class, 'homeBanner'])->name('admin.home.banner');
    Route::get('/homeAbout', [AdminHomeController::class, 'homeAbout'])->name('admin.home.about');
});