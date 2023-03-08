<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Canvas\Models\Post;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function about()
    {
        return view('about');
    }


    public function contact()
    {
        return view('contact');
    }


    public function blog()
    {
        $posts = Post::latest()->with('user', 'topic')->get();
        return view('blog',compact('posts'));
    }


    public function blogSingle($id)
    {
        $post = Post::with('user', 'tags', 'topic')->find($id);
        if($post){
            return view('single_blog',compact('post'));
        }

        return abort(404);
    }
}
