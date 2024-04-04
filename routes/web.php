<?php

use App\Http\Controllers\frontend\AboutUsController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ResultController;
use App\Http\Controllers\frontend\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');

Route::get('/contactus', [ContactUsController::class, 'index'])->name('contactus');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/results', [ResultController::class, 'index'])->name('results');
Route::get('/staff', [StaffController::class, 'index'])->name('staff');

