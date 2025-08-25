<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display the image gallery.
     */
    public function images()
    {
        return view('pages.gallery.images');
    }

    /**
     * Display the video gallery.
     */
    public function videos()
    {
        return view('pages.gallery.videos');
    }
}