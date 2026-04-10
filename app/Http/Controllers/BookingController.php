<?php

// This is the namespace - it tells Laravel where this file lives so it can be found by the routes
namespace App\Http\Controllers;

// Importing the Booking model so we can talk to the bookings table in the database
use App\Models\Booking;

// Importing Request so we can grab the data the user typed into the form
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // index() runs when someone visits /booking
    // Booking::all() grabs every single booking from the database
    // compact('bookings') packages the data and sends it to the blade view to be displayed
    public function index()
    {
        $bookings = Booking::all();
        return view('booking.index', compact('bookings'));
    }

    // create() runs when someone visits /booking/create
    // It just loads the empty form - no database interaction here at all
    public function create()
    {
        return view('booking.create');
    }

    // store() runs when the create form is submitted
    // $request contains everything the user typed in the form
    // We create a new empty Booking object, fill in each field from the form, then save() writes it to the database
    // toast() shows a success popup message to the user
    // Then we send the user back to the create page
    public function store(Request $request)
    {
        // new Booking() creates a blank booking object in memory (not saved yet)
        $booking = new Booking();

        // Each line takes a value from the form and puts it into the booking object
        $booking->name = $request->full_name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->subject = $request->subject;
        $booking->request = $request->your_request;

        // save() actually writes everything to the database
        $booking->save();

        // Shows a green success popup to the user
        toast("Your request has been submitted.", "success");

        // Sends the user back to the create form after submitting
        return redirect("/booking/create");
    }

    // edit() runs when someone visits /booking/edit/{id}
    // $id is the ID number of the booking they want to edit (comes from the URL)
    // find($id) searches the database for that specific booking
    // Then we send that booking's data to the edit form so it shows up pre-filled
    // Note: create.blade and edit.blade look the same, the only difference is edit has existing data in the fields
    public function edit($id)
    {
        // find() goes into the database and returns the booking that matches the ID
        $booking = Booking::find($id);

        // compact('booking') wraps the booking into an array and passes it to the view
        // This is how the form knows what name, email, phone etc. to pre-fill
        return view('booking.edit', compact('booking'));
    }

    // update() runs when the edit form is submitted
    // We use find($id) to get the existing booking from the database
    // Important: if we used new Booking() here instead, save() would create a brand new record instead of updating
    // So find() is essential here - it tells Laravel which row in the database to overwrite
    public function update(Request $request, $id)
    {
        // find() fetches the existing booking so we update it instead of creating a new one
        $booking = Booking::find($id);

        // Overwrite each field with the new values from the form
        $booking->name = $request->full_name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->subject = $request->subject;
        $booking->request = $request->your_request;

        // save() updates the existing row in the database
        $booking->save();

        // Shows a green success popup to the user
        toast("Booking updated.", "success");

        // Sends the user back to the bookings list
        return redirect("/booking");
    }

    // destroy() runs when the delete button is clicked
    // $id comes from the URL e.g. /booking/delete/3 means $id = 3
    // find($id) gets that booking from the database, then delete() permanently removes it
    public function destroy($id)
    {
        // find() gets the booking by ID, then delete() removes it from the database permanently
        Booking::find($id)->delete();

        // Shows a success popup to the user
        toast("Booking has been deleted.", "success");

        // Sends the user back to the bookings list after deleting
        return redirect("/booking");
    }
}
