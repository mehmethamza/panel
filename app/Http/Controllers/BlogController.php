<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return response()->view('front.blog.index',[
//            'blogCategories' => BlogCategory::orderBySort('general')->get(),
            'blogs' => \App\Models\Blog::presentation()->orderBy('published_at','DESC')->paginate(9),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Models\Blog $blog)
    {
        @dd($blog);
        return response()->view('blog.show',compact('blog'));
    }
}
