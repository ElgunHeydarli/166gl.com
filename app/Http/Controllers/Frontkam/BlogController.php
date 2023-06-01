<?php

namespace App\Http\Controllers\Frontkam;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $blogs = Blog::get();
        return view('front.blog.index',compact('blogs'));
    }

    public function detail(Request $request,$lang, $slug){
        $blog = Blog::where('slug_'.app()->getLocale(), $slug)->firstOrFail();
        $blogs = Blog::where('id', '!=', $blog->id)->get();
        return view('front.blog.detail',compact('blog','blogs'));
    }
}
