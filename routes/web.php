<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

Route::get('/', [WorkController::class, 'home'])->name('home');
Route::get('/works', [WorkController::class, 'works'])->name('works');
Route::get('/contact', [WorkController::class, 'contact'])->name('contact');
Route::middleware(\App\Http\Middleware\AdminAuth::class)->group(function () {
    Route::get('/admin', [AdminController::class, 'showAdmin'])->name('admin');
});
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('login');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact');
Route::post('/admin/login', [AdminController::class, 'login'])->name('login');