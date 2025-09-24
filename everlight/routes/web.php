<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;





Route::get('/ever', function () {
    return view('welcome');
})->name('ever');


Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');



Route::get('/wedding', function () {
    return view('wedding'); 
})->name('wedding');

Route::get('/portrait', function () {
    return view('portrait'); 
})->name('portrait');

Route::get('/nature', function () {
    return view('nature'); 
})->name('nature');

Route::get('/eveny', function () {
    return view('eveny'); 
})->name('eveny');
Route::get('/travel', function () {
    return view('travel'); 
})->name('travel');

Route::get('/commercial', function () {
    return view('commercial'); 
})->name('commercial');