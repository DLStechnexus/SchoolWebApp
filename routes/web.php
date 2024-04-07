<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\Gallery\PhotoGalleryController;
use App\Http\Controllers\backend\Member\MemberController;
use App\Http\Controllers\backend\Results\ResultsController;
use App\Http\Controllers\backend\Setting\SettingController;
use App\Http\Controllers\backend\Student\StudentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\AboutUsController;
use App\Http\Controllers\frontend\AdmissionController;
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
Route::post('search/results', [ResultController::class, 'store'])->name('search.result');
Route::get('/staff', [StaffController::class, 'index'])->name('staff');

Route::get('/admission', [AdmissionController::class, 'create'])->name('admission.create');
Route::post('admission/store', [AdmissionController::class, 'store'])->name('admission.store');




Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



    Route::get('students/list', [StudentController::class, 'index'])->name('student.list');
    Route::get('students/create', [StudentController::class, 'create'])->name('student.create');
    Route::post('students/store', [StudentController::class, 'store'])->name('student.store');
    Route::get('students/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::get('students/details/{id}', [StudentController::class, 'show'])->name('student.details');
    Route::post('students/delete', [StudentController::class, 'destroy'])->name('student.destroy');
    Route::post('students/update', [StudentController::class, 'update'])->name('student.update');

    Route::get('staff/member/list', [MemberController::class, 'index'])->name('staff.list');
    Route::get('staff/member/create', [MemberController::class, 'create'])->name('staff.create');
    Route::post('staff/member/store', [MemberController::class, 'store'])->name('staff.store');
    Route::get('staff/member/edit/{id}', [MemberController::class, 'edit'])->name('staff.edit');
    Route::get('staff/member/details/{id}', [MemberController::class, 'show'])->name('staff.details');
    Route::post('staff/member/delete', [MemberController::class, 'destroy'])->name('staff.destroy');
    Route::post('staff/member/update', [MemberController::class, 'update'])->name('staff.update');





    Route::get('results/list', [ResultsController::class, 'index'])->name('result.list');
    Route::get('results/create', [ResultsController::class, 'create'])->name('result.create');
    Route::post('results/store', [ResultsController::class, 'store'])->name('result.store');
    Route::get('results/edit/{id}', [ResultsController::class, 'edit'])->name('result.edit');
    Route::get('results/details/{id}', [ResultsController::class, 'show'])->name('result.details');
    Route::post('results/delete', [ResultsController::class, 'destroy'])->name('result.destroy');
    Route::post('results/update', [ResultsController::class, 'update'])->name('result.update');






    Route::get('settings', [SettingController::class, 'create'])->name('setting.create');
    Route::post('logo/store', [SettingController::class, 'logoStore'])->name('logo.store');
    Route::post('about/store', [SettingController::class, 'aboutStore'])->name('about.store');
    Route::post('contact/store', [SettingController::class, 'contactStore'])->name('contact.store');
    Route::post('slider/store', [SettingController::class, 'sliderStore'])->name('slider.store');
    Route::post('slider/delete', [SettingController::class, 'sliderDelete'])->name('slider.destroy');
    Route::post('notice/store', [SettingController::class, 'noticeStore'])->name('notice.store');

});











require __DIR__ . '/auth.php';
