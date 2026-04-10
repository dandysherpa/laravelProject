<?php

use App\Http\Controllers\PageController;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index']);
Route::get('/all-courses', [PageController::class, 'allCourses']);
Route::get('/upcoming-classes', [PageController::class, 'upcomingClasses']);
Route::get('/testimonials', [PageController::class, 'testimonials']);
Route::get('/mentors', [PageController::class, 'mentors']);
Route::get('/recorded-videos', [PageController::class, 'recordedVideos']);
Route::get('/intern-partners', [PageController::class, 'internPartners']);
Route::get('/contact-us', [PageController::class, 'contactUs']);

Route::get('/booking', function () {
    $bookings = Booking::all();
    return view('booking.index', compact("bookings"));
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
    toast("Your request has been submitted.", "success");

    return redirect("/booking/create");
});
//need to pass the id as well as it is from edited to update form and also after request as well and also use find() else its gonna make a new booking
Route::patch('/booking/update/{id}', function (Request $request, $id) {
    $booking = Booking::find($id); //find to check from the  database and update
    $booking->name = $request->full_name;
    $booking->email = $request->email;
    $booking->phone = $request->phone;
    $booking->subject = $request->subject;
    $booking->request = $request->your_request;
    $booking->save();
    toast("Booking updated.", "success");

    return redirect("/booking");
});
//id is the passing the parameter from the data base you can write anything// it means passing data
//id inside function to write all the logical and that came from the left {id} link
Route::delete('/booking/delete/{id}', function ($id) {

    //$id came from the npassing funtion above
    Booking::find($id)->delete();
    toast("Booking has been deleted.", "success");
    //once that is done redirect sends it back to the page
    return redirect("/booking");
});
//create a seperate route for edit
Route::get('/booking/edit/{id}', function ($id) {
    //create a variable and send as compact side note: create blade and edit blade wwill be the same , only diffference is to change the booking edit
    $booking = Booking::find($id); //this is the function to call from the data base and show in the display find
    return view("/booking.edit", compact("booking")); //return view has to go to booking edit and the compact is to show the $boooking name booking email etc

});
