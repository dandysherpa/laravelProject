<?php

use App\Models\Booking;
use Illuminate\Http\Request;
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

Route::get('/booking', function () {
    return view('booking.index');
});

Route::get('/booking/create', function () {
    return view('booking.create');
});

Route::post('/booking/store', function (Request $request) {
    $booking = new Booking();
    $booking->name = $request->full_name;
    $booking->email = $request->email;
    $booking->phone = $request->phone;
    $booking->subject = $request->subject;
    $booking->request = $request->your_request;
    $booking->save();

    return redirect("/booking/create");
});




