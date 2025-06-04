<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MassageChairController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/massage-chairs', [MassageChairController::class, 'index'])->name('massage-chairs.index');
Route::get('/massage-chairs/{massage_chair:slug}', [MassageChairController::class, 'show'])->name('massage-chairs.show');
Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/contact-us', [HomeController::class, 'sendContact'])->name('contact.send');


Route::middleware(['web'])->group(function () {
    Route::resource('admin/massage-chairs', MassageChairController::class);
    Route::resource('admin/categories', CategoryController::class);
    Route::get('admin/site-settings', [SiteSettingController::class, 'edit'])->name('site-settings.edit');
    Route::post('admin/site-settings', [SiteSettingController::class, 'update'])->name('site-settings.update');
});
