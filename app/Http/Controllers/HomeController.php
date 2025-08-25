<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the main home page.
     */
    public function index()
    {
        return view('pages.home.index');
    }

    /**
     * Display the home page with image background.
     */
    public function image()
    {
        return view('pages.home.image');
    }

    /**
     * Display the home page with slider.
     */
    public function slider()
    {
        return view('pages.home.slider');
    }
}