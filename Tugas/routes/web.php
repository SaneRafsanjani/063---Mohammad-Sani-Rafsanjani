<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job_listing', function () {
    return response()->file(public_path('job_listing.html'));
})->name('job_listing');

Route::get('/about', function () {
    return response()->file(public_path('about.html'));
})->name('about');

Route::get('/home', function () {
    return response()->file(public_path('index.html'));
})->name('home');

Route::get('/contact', function () {
    return response()->file(public_path('contact.html'));
})->name('contact');


Route::get('/blog', function () {
    return response()->file(public_path('blog.html'));
})->name('blog');

Route::get('/single-blog', function () {
    return response()->file(public_path('single-blog.html'));
})->name('single-blog');

Route::get('/elements', function () {
    return response()->file(public_path('elements.html'));
})->name('elements');

Route::get('/job-details', function () {
    return response()->file(public_path('job_details.html'));
})->name('job-details');

