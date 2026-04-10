<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
{
    return view('home');
}

public function allCourses()
{
    return view('all-courses');
}

public function upcomingClasses()
{
    return view('upcoming-classes');
}

public function testimonials()
{
    return view('testimonials');
}

public function mentors()
{
    return view('mentors');
}

public function recordedVideos()
{
    return view('recorded-videos');
}

public function internPartners()
{
    return view('intern-partners');
}

public function contactUs()
{
    return view('contact-us');
}


}
