<?php

// Importing the controllers so the routes know which class to use
// Think of it like telling PHP "hey, these are the files we need"
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PageController;

// This lets us use the Route class to define our URLs
use Illuminate\Support\Facades\Route;

// ─── Page Routes ───────────────────────────────────────────────
// These routes just open pages, they don't touch the database at all
// When someone visits the URL, Laravel calls the matching controller method which returns the view (the blade file)

// When someone visits the website root e.g. codeit.com.np/ it loads the home page
Route::get('/', [PageController::class, 'index']);

// When someone visits /all-courses it loads the all courses page
Route::get('/all-courses', [PageController::class, 'allCourses']);

// When someone visits /upcoming-classes it loads the upcoming classes page
Route::get('/upcoming-classes', [PageController::class, 'upcomingClasses']);

// When someone visits /testimonials it loads the testimonials page
Route::get('/testimonials', [PageController::class, 'testimonials']);

// When someone visits /mentors it loads the mentors page
Route::get('/mentors', [PageController::class, 'mentors']);

// When someone visits /recorded-videos it loads the recorded videos page
Route::get('/recorded-videos', [PageController::class, 'recordedVideos']);

// When someone visits /intern-partners it loads the intern partners page
Route::get('/intern-partners', [PageController::class, 'internPartners']);

// When someone visits /contact-us it loads the contact us page
Route::get('/contact-us', [PageController::class, 'contactUs']);

// ─── Booking Routes ────────────────────────────────────────────
// These routes interact with the database through the BookingController
// GET = just loading a page, POST = submitting a form, PATCH = updating, DELETE = deleting

// GET means just loading a page - fetches all bookings from the database and displays them in a list
Route::get('/booking', [BookingController::class, 'index']);

// GET - just loads the empty booking form so the user can fill it in
Route::get('/booking/create', [BookingController::class, 'create']);

// POST means the form was submitted - takes the form data and saves it as a new booking in the database
Route::post('/booking/store', [BookingController::class, 'store']);

// GET - finds the booking by its ID and loads the edit form with the existing data pre-filled
Route::get('/booking/edit/{id}', [BookingController::class, 'edit']);

// PATCH means we are updating - finds the booking by ID and overwrites it with the new form data
Route::patch('/booking/update/{id}', [BookingController::class, 'update']);

// DELETE - finds the booking by ID and permanently removes it from the database
Route::delete('/booking/delete/{id}', [BookingController::class, 'destroy']);
