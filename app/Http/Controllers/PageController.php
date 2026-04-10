<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Opens the home page
    public function index()
    {
        return view('home');
    }

    // Opens the all courses page
    public function allCourses()
    {
        return view('all-courses');
    }

    // Opens the upcoming classes page
    public function upcomingClasses()
    {
        return view('upcoming-classes');
    }

    // Opens the testimonials page
    public function testimonials()
    {
        return view('testimonials');
    }

    // Opens the mentors page
    public function mentors()
    {
        return view('mentors');
    }

    // Opens the recorded videos page
    public function recordedVideos()
    {
        return view('recorded-videos');
    }

    // Opens the intern partners page
    public function internPartners()
    {
        return view('intern-partners');
    }

    // Opens the contact us page
    public function contactUs()
    {
        return view('contact-us');
    }
}
