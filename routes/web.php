<?php

use Illuminate\Support\Facades\Route;



// Webite Route Code START
Route::get('/', function () {
    return view('website.english.home');
});
Route::get('/about',function() {
    return view('website.english.about');
})->name('about');
Route::get('/services',function(){
    return view('website.english.services');
})->name('services');
Route::get('/contact',function() {
    return view('website.english.contact');
})->name('contact');
Route::get('/pricing',function() {
    return view('website.english.pricing');
})->name('pricing');
// Webite Route Code END