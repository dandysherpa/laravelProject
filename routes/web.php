<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index']);
Route::get('/all-courses', [PageController::class, 'allCourses']);
Route::get('/upcoming-classes', [PageController::class, 'upcomingClasses']);
Route::get('/testimonials', [PageController::class, 'testimonials']);
Route::get('/mentors', [PageController::class, 'mentors']);
Route::get('/recorded-videos', [PageController::class, 'recordedVideos']);
Route::get('/intern-partners', [PageController::class, 'internPartners']);
Route::get('/contact-us', [PageController::class, 'contactUs']);

Route::get('/booking', [BookingController::class, 'index']);
Route::get('/booking/create', [BookingController::class, 'create']);
Route::post('/booking/store', [BookingController::class, 'store']);
Route::get('/booking/edit/{id}', [BookingController::class, 'edit']);
Route::patch('/booking/update/{id}', [BookingController::class, 'update']);
Route::delete('/booking/delete/{id}', [BookingController::class, 'destroy']);

