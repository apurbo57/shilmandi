<?php

use App\Http\Controllers\Forntend\siteController;
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




Route::get('/apply-course', [siteController::class,'apply_course'])->name('apply_course');



