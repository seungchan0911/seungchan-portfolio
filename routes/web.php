<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ContactController;

Route::get('/', [WorkController::class, 'home'])->name('home');
Route::get('/works', [WorkController::class, 'works'])->name('works');
Route::get('/contact', [WorkController::class, 'contact'])->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact');