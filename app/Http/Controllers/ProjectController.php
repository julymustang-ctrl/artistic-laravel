<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display the projects listing.
     */
    public function index()
    {
        return view('pages.projects.index');
    }

    /**
     * Display a specific project.
     */
    public function show($project)
    {
        return view('pages.projects.show', compact('project'));
    }
}