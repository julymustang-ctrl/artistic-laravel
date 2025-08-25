<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display the team listing.
     */
    public function index()
    {
        return view('pages.team.index');
    }

    /**
     * Display a specific team member.
     */
    public function show($member)
    {
        return view('pages.team.show', compact('member'));
    }
}