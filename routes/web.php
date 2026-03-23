<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/all-courses', function () {
    return view('all-courses');
});

Route::get('/upcoming-classes', function () {
    return view('upcoming-classes');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/mentors', function () {
    return view('mentors');
});

Route::get('/recorded-videos', function () {
    return view('recorded-videos');
});

Route::get('/intern-partners', function () {
    return view('intern-partners');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});
