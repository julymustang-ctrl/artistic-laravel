<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display the services listing.
     */
    public function index()
    {
        return view('pages.services.index');
    }

    /**
     * Display a specific service.
     */
    public function show($service)
    {
        return view('pages.services.show', compact('service'));
    }
}