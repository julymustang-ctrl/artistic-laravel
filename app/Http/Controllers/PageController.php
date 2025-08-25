<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the pricing page.
     */
    public function pricing()
    {
        return view('pages.pricing');
    }

    /**
     * Display the testimonials page.
     */
    public function testimonials()
    {
        return view('pages.testimonials');
    }

    /**
     * Display the FAQs page.
     */
    public function faqs()
    {
        return view('pages.faqs');
    }

    /**
     * Display the privacy policy page.
     */
    public function privacy()
    {
        return view('pages.privacy');
    }

    /**
     * Display the terms and conditions page.
     */
    public function terms()
    {
        return view('pages.terms');
    }
}