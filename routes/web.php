<?php

use App\Http\Controllers\Forntend\siteController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Backend\courseController;
use App\Http\Controllers\Backend\sliderController;
use App\Http\Controllers\Backend\galleryController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

//Fornten Rote//
Route::get('/', [siteController::class,'index'])->name('home');
Route::get('/courses', [siteController::class,'courses'])->name('courses');
Route::get('/rpl', [siteController::class,'rpl'])->name('rpl');
Route::get('/about-us', [siteController::class,'contact'])->name('about');
Route::get('/contact-us', [siteController::class,'contact'])->name('contact');


Route::get('/single-course', [siteController::class,'single_course'])->name('single-course');
Route::get('/apply-course', [siteController::class,'apply_course'])->name('apply_course');



Route::get('/admin',[adminController::class,'index']);
Route::post('/admin-dashboard',[adminController::class,'dashboard'])->name('admin-dashboard');
Route::get('/dashboard',[adminController::class,'show_dash'])->name('dashboard');
Route::get('/logout',[adminController::class,'logout'])->name('logout');


// Backend Route

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



