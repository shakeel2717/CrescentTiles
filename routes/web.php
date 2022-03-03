<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LandingPageController::class,'index'])->name('index');
Route::get('/about',[LandingPageController::class,'about'])->name('about');
Route::get('/contact',[LandingPageController::class,'contact'])->name('contact');
Route::post('/contact',[LandingPageController::class,'contactForm'])->name('contactForm');
