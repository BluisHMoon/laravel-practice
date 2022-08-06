<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function renderIndex()
    {
        return view('index');
    }

    public function renderAboutUs()
    {
        return view('about_us');
    }

    public function renderBooking()
    {
        return view('booking');
    }

    public function renderContact()
    {
        return view('contact');
    }

    public function renderNews()
    {
        return view('news');
    }

    public function renderNewsPage()
    {
        return view('news_page');
    }

    public function renderService()
    {
        return view('service');
    }

    public function renderServicePage()
    {
        return view('service_page');
    }
}
