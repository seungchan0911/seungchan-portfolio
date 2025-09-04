<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
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
Route::get('/admin/read/{id}', [AdminController::class, 'read'])->name('read');
Route::get('admin/back', [AdminController::class, 'back'])->name('admin.back');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact');
Route::post('/admin/login', [AdminController::class, 'login'])->name('login');

Route::delete('/admin/delete/{id}', [AdminController::class, 'delete'])->name('delete');


Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'kr'])) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return back();
})->name('lang.switch');