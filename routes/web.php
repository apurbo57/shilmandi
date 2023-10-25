<?php

use App\Http\Controllers\Forntend\siteController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

//Fornten Rote//
Route::get('/', [siteController::class,'index'])->name('home');
Route::get('/contact-us', [siteController::class,'contact'])->name('contact');
