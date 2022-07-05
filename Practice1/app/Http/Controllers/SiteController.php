<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Website page control
class SiteController extends Controller
{
    // Show blog page
    public function renderBlogPage()
    {
        # code...
        return view('blog');
    }

    public function renderPostPage()
    {
        # code...
        return view('post');
    }
}
