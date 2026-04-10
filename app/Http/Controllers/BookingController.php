<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Show all bookings
    public function index()
    {
        $bookings = Booking::all();
        return view('booking.index', compact('bookings'));
    }

    // Show the create booking form
    public function create()
    {
        return view('booking.create');
    }

    // Store a new booking from the form submission
    public function store(Request $request)
    {
        $booking = new Booking();
        $booking->name = $request->full_name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->subject = $request->subject;
        $booking->request = $request->your_request;
        $booking->save();
        toast("Your request has been submitted.", "success");

        return redirect("/booking/create");
    }

    // Show the edit form for a specific booking
    // Note: create.blade and edit.blade are similar, only difference is edit pre-fills the booking data
    public function edit($id)
    {
        // find() fetches the booking from the database by ID to display in the form
        $booking = Booking::find($id);

        // compact("booking") passes $booking data (name, email, etc.) to the view
        return view('booking.edit', compact('booking'));
    }

    // Update existing booking - pass $id so we know which record to update
    // Use find() to fetch from DB, otherwise save() will create a new booking instead of updating
    public function update(Request $request, $id)
    {
        // find() checks the database and returns the matching booking
        $booking = Booking::find($id);
        $booking->name = $request->full_name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->subject = $request->subject;
        $booking->request = $request->your_request;
        $booking->save();
        toast("Booking updated.", "success");

        return redirect("/booking");
    }

    // Delete a booking - $id comes from the route parameter {id}
    public function destroy($id)
    {
        // find() fetches the booking then delete() removes it from the database
        Booking::find($id)->delete();
        toast("Booking has been deleted.", "success");

        // Redirect back to the bookings list after deletion
        return redirect("/booking");
    }
}
