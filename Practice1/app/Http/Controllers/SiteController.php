<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

// Website page control
class SiteController extends Controller
{
    // Show blog page
    public function renderBlogPage()
    {
        # 取得文章，並返回至blog視圖內
        $posts = Post::where('status', 'published')->orderBy('created_at', 'desc')->paginate(10);
        return view('blog', compact('posts'));
    }

    public function renderPostPage()
    {
        # code...
        return view('post');
    }
}
