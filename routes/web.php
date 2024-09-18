<?php

use App\Http\Controllers\HeroSectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/service', function () {
    return view('frontend.service');
})->name('service');
Route::get('/portfolio', function () {
    return view('frontend.portfolio');
})->name('portfolio');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');


Route::get('/admin/home', function () {
    return view('backend.home');
})->name('admin.home');


Route::resource('hero-section', HeroSectionController::class);