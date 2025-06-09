<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MassageChairController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/massage-chairs-for-hire', [HomeController::class, 'massageChairsForHire'])->name('massage-chairs-for-hire');

Route::get('/news-updates', [HomeController::class, 'news'])->name('news');
Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');
Route::post('/contact-us', [HomeController::class, 'sendContact'])->name('contact.send');
Route::get('/health-benefits', [HomeController::class, 'healthBenefits'])->name('health-benefits');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-and-conditions', [HomeController::class, 'termsAndConditions'])->name('terms-and-conditions');
Route::get('/copyright', [HomeController::class, 'copyright'])->name('copyright');
Route::get('/return-policy', [HomeController::class, 'returnPolicy'])->name('return-policy');
Route::get('/cookie-policy', [HomeController::class, 'cookiePolicy'])->name('cookie-policy');
Route::get('/massage-services', [HomeController::class, 'massageServices'])->name('massage-services');
Route::get('/massage-chairs-hire', [HomeController::class, 'massageChairsHire'])->name('massage-chairs-hire');
Route::get('/massage-chairs-sale', [HomeController::class, 'massageChairsSale'])->name('massage-chairs-sale');
Route::get('/massage-chairs/{slug}', [HomeController::class, 'massageChairs'])->name('massage-chairs-categories');
Route::get('/massage-chairs/{category}/{slug}', [HomeController::class, 'massageChairsSingle'])->name('massage-chairs-single');
// Frontend blog listing and details
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/news-updates/{slug}', [HomeController::class, 'show'])->name('blogs.shows');






Route::middleware(['web'])->group(function () {
    Route::resource('admin/massage-chairs', MassageChairController::class);
    Route::resource('admin/categories', CategoryController::class);
    Route::resource('admin/services', ServiceController::class);
    Route::resource('admin/blogs', BlogController::class); // Add backend resource route for blogs
    //admin.blogs.index
    Route::get('admin/blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('admin/site-settings', [SiteSettingController::class, 'edit'])->name('site-settings.edit');
    Route::post('admin/site-settings', [SiteSettingController::class, 'update'])->name('site-settings.update');
});
