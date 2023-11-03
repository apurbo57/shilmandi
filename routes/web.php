<?php

use App\Http\Controllers\Forntend\siteController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Backend\courseController;
use App\Http\Controllers\Backend\sliderController;
use App\Http\Controllers\Backend\galleryController;
use App\Http\Controllers\Backend\messageController;
use App\Http\Controllers\Backend\noticeController;
use App\Http\Controllers\Forntend\CourseController as ForntendCourseController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

//Forntend Route//
Route::get('/', [siteController::class,'index'])->name('home');
Route::get('/gallery', [siteController::class,'gallery'])->name('gallery');
Route::get('/notice', [siteController::class,'notice'])->name('notice');
Route::get('/single-notice/{id}', [siteController::class,'single_notice'])->name('single-notice');
Route::get('/about-us', [siteController::class,'about_us'])->name('about');
Route::get('/contact-us', [siteController::class,'contact'])->name('contact');
Route::post('/contact-form', [siteController::class,'contact_form'])->name('contact-form');
//Frontend Course Route//
Route::get('/rpl', [ForntendCourseController::class,'rpl'])->name('rpl');
Route::get('/courses', [ForntendCourseController::class,'index'])->name('courses');
Route::get('/single-course/{id}', [ForntendCourseController::class,'show'])->name('single-course');
Route::get('/course/apply-course/{id}', [ForntendCourseController::class,'apply_course'])->name('apply_course');
Route::post('/course/enroll-this-course', [ForntendCourseController::class,'enroll_course'])->name('enroll_course');
Route::get('/course/form-download/{key}', [ForntendCourseController::class,'form_download'])->name('form-download');



// Route::get('lang/home', [siteController::class, 'index']);
// Route::get('lang/change', [siteController::class, 'change'])->name('changeLang');



Route::get('/admin',[adminController::class,'index']);
Route::post('/admin-dashboard',[adminController::class,'dashboard'])->name('admin-dashboard');
Route::get('/dashboard',[adminController::class,'show_dash'])->name('dashboard');
Route::get('/logout',[adminController::class,'logout'])->name('logout');


// Backend Route
// Notice route 
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/add-notice', [noticeController::class,'create'])->name('add-notice');
    Route::post('/save-notice', [noticeController::class,'store'])->name('save-notice');
    Route::get('/manage-notice', [noticeController::class,'index'])->name('manage-notice');
    Route::get('/edit-notice/{id}', [noticeController::class,'edit'])->name('edit-notice');
    Route::put('/update-notice/{id}', [noticeController::class,'update'])->name('update-notice');
    Route::delete('/delete-notice/{id}', [noticeController::class,'destroy'])->name('delete-notice');
});
// slider route 
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/add-slider', [sliderController::class,'create'])->name('add-slider');
    Route::post('/save-slider', [sliderController::class,'store'])->name('save-slider');
    Route::get('/manage-slider', [sliderController::class,'index'])->name('manage-slider');
    Route::get('/edit-slider/{id}', [sliderController::class,'edit'])->name('edit-slider');
    Route::put('/update-slider/{id}', [sliderController::class,'update'])->name('update-slider');
    Route::delete('/delete-slider/{id}', [sliderController::class,'destroy'])->name('delete-slider');
});
// Gallery route 
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/add-gallery', [galleryController::class,'create'])->name('add-gallery');
    Route::post('/save-gallery', [galleryController::class,'store'])->name('save-gallery');
    Route::get('/manage-gallery', [galleryController::class,'index'])->name('manage-gallery');
    Route::get('/edit-gallery/{id}', [galleryController::class,'edit'])->name('edit-gallery');
    Route::put('/update-gallery/{id}', [galleryController::class,'update'])->name('update-gallery');
    Route::delete('/delete-gallery/{id}', [galleryController::class,'destroy'])->name('delete-gallery');
});

// Course route 
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/add-course', [courseController::class,'create'])->name('add-course');
    Route::post('/save-course', [courseController::class,'store'])->name('save-course');
    Route::get('/manage-course', [courseController::class,'index'])->name('manage-course');
    Route::get('/edit-course/{id}', [courseController::class,'edit'])->name('edit-course');
    Route::put('/update-course/{id}', [courseController::class,'update'])->name('update-course');
    Route::delete('/delete-course/{id}', [courseController::class,'destroy'])->name('delete-course');
});

// Message route 
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/message', [messageController::class,'index'])->name('message');
    Route::delete('/delete-message/{id}', [messageController::class,'destroy'])->name('delete-message');
});



