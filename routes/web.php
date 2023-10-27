<?php

use App\Http\Controllers\Forntend\siteController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Backend\courseController;
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




Route::get('/single', [siteController::class,'single_course'])->name('single');
Route::get('/apply-course', [siteController::class,'apply_course'])->name('apply_course');



Route::get('/admin',[adminController::class,'index']);
Route::post('/admin-dashboard',[adminController::class,'dashboard'])->name('admin-dashboard');
Route::get('/dashboard',[adminController::class,'show_dash'])->name('dashboard');
Route::get('/logout',[adminController::class,'logout'])->name('logout');


// Backend Route
// slider route 
// Route::group(['prefix'=>'sliders'],function(){
//     Route::get('/add-slider', 'sliderController@addslider')->name('add-slider');
//     Route::post('/save-slider', 'sliderController@saveslider')->name('save-slider');
//     Route::get('/manage-slider', 'sliderController@manageslider')->name('manage-slider');
//     Route::get('/delete-slider/{id}', 'sliderController@deleteslider')->name('delete-slider');
// });

// Course route 
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/add-course', [courseController::class,'create'])->name('add-course');
    Route::post('/save-course', [courseController::class,'store'])->name('save-course');
    Route::get('/manage-course', [courseController::class,'index'])->name('manage-course');
    Route::get('/edit-course/{id}', [courseController::class,'edit'])->name('edit-course');
    Route::put('/update-course/{id}', [courseController::class,'update'])->name('update-course');
    Route::delete('/delete-course/{id}', [courseController::class,'destroy'])->name('delete-course');
});



