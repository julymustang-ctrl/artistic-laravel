<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display the blog listing.
     */
    public function index()
    {
        return view('pages.blog.index');
    }

    /**
     * Display a specific blog post.
     */
    public function show($post)
    {
        return view('pages.blog.show', compact('post'));
    }
}