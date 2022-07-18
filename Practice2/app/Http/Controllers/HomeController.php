<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('index')
                ->with('title', '首頁')
                ->with('copyright', '&copy; '. date("Y") .' by Mustacchio. All rights reserved.');
    }

    public function blog()
    {
        $posts = Post::all();

        return view('blog')
                ->with('title', '部落格')
                ->with('subtitle', '部落格')
                ->with('copyright', '&copy; '. date("Y") .' by Mustacchio. All rights reserved.')
                ->with('posts', $posts);
    }

    public function blogSinglePost($id)
    {
        $post = Post::findOrFail($id);

        return view('blog-single-post')
                ->with('title', '文章內容')
                ->with('subtitle', '文章內容')
                ->with('copyright', '&copy; '. date("Y") .' by Mustacchio. All rights reserved.')
                ->with('post', $post);
    }

    public function about()
    {
        $about = About::where('published', true)->orderBy('created_at', 'DESC')->first();

        return view('about')
                ->with('title', '關於我們')
                ->with('subtitle', '關於我們')
                ->with('copyright', '&copy; '. date("Y") .' by Mustacchio. All rights reserved.')
                ->with('about', $about);
    }
}
