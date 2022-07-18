<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function renderIndex()
    {
        $latestPost = Post::where('published', true)->orderBy('created_at', 'DESC')->first();
        $galleries = Gallery::where('published', true)->orderBy('created_at', 'DESC')->limit(3)->get();

        return view('index')
                ->with('title', '首頁')
                ->with('copyright', '&copy; '. date("Y") .' by Mustacchio. All rights reserved.')
                ->with('latestPost', $latestPost)
                ->with('galleries', $galleries);
    }

    public function renderBlog()
    {
        $posts = Post::all();

        return view('blog')
                ->with('title', '部落格')
                ->with('subtitle', '部落格')
                ->with('copyright', '&copy; '. date("Y") .' by Mustacchio. All rights reserved.')
                ->with('posts', $posts);
    }

    public function renderBlogSinglePost($id)
    {
        $post = Post::findOrFail($id);

        return view('blog-single-post')
                ->with('title', '文章內容')
                ->with('subtitle', '文章內容')
                ->with('copyright', '&copy; '. date("Y") .' by Mustacchio. All rights reserved.')
                ->with('post', $post);
    }

    public function renderAbout()
    {
        $about = About::where('published', true)->orderBy('created_at', 'DESC')->first();

        return view('about')
                ->with('title', '關於我們')
                ->with('subtitle', '關於我們')
                ->with('copyright', '&copy; '. date("Y") .' by Mustacchio. All rights reserved.')
                ->with('about', $about);
    }

    public function renderGallery()
    {
        $galleries = Gallery::all();

        return view('gallery')
                ->with('title', '圖片迴廊')
                ->with('subtitle', '圖片迴廊')
                ->with('copyright', '&copy; '. date("Y") .' by Mustacchio. All rights reserved.')
                ->with('galleries', $galleries);
    }

    public function renderGallerySinglePost($id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('gallery-single-post')
                ->with('title', '圖片內容')
                ->with('subtitle', '圖片內容')
                ->with('copyright', '&copy; '. date("Y") .' by Mustacchio. All rights reserved.')
                ->with('gallery', $gallery);
    }

    public function renderContact()
    {
        return view('contact')
                ->with('title', '聯絡我們')
                ->with('subtitle', '聯絡我們')
                ->with('copyright', '&copy; '. date("Y") .' by Mustacchio. All rights reserved.');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $rules = ['fname' => 'required', 'email' => 'required', 'message' => 'required'];
        $messages = ['required' => '! 欄位不能空白'];

        $validator = Validator::make($input, $rules, $messages);

        if($validator->fails()) {
            return redirect('contact')
             ->withErrors($validator)
             ->withInput();
        }

        $contact = new Contact;
        $contact->fname = $input['fname'];
        $contact->address = $input['address'];
        $contact->email = $input['email'];
        $contact->phone = $input['phone'];
        $contact->message = $input['message'];

        $contact->save();

        return Redirect::to('contact');
    }
}
