<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\Gallery\PhotoGalleryController;
use App\Http\Controllers\backend\Member\MemberController;
use App\Http\Controllers\backend\Results\ResultsController;
use App\Http\Controllers\backend\Student\StudentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\AboutUsController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ResultController;
use App\Http\Controllers\frontend\StaffController;
use LDAP\Result;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');

Route::get('/contactus', [ContactUsController::class, 'index'])->name('contactus');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/results', [ResultController::class, 'index'])->name('results');
Route::get('/staff', [StaffController::class, 'index'])->name('staff');





Route::middleware('auth')->prefix('admin')->group(function () {
    // Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



    Route::get('students/list', [StudentController::class, 'index'])->name('student.list');
    Route::get('students/create', [StudentController::class, 'create'])->name('student.create');
    Route::get('staff/member/list', [MemberController::class, 'index'])->name('staff.list');
    Route::get('staff/member/create', [MemberController::class, 'create'])->name('staff.create');
    Route::get('results/list', [ResultsController::class, 'index'])->name('result.list');
    Route::get('results/create', [ResultsController::class, 'create'])->name('result.create');
    Route::get('gallery/create', [PhotoGalleryController::class, 'create'])->name('gallery.create');
});











require __DIR__ . '/auth.php';
