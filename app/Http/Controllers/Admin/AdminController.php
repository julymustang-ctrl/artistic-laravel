<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\BlogPost;
use App\Models\Project;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Gallery;

class AdminController extends Controller
{
    public function index()
    {
        // Get statistics for dashboard
        $stats = [
            'services' => Service::count(),
            'blog_posts' => BlogPost::count(),
            'projects' => Project::count(),
            'team_members' => TeamMember::count(),
            'testimonials' => Testimonial::count(),
            'gallery_items' => Gallery::count(),
        ];
        
        // Get recent content
        $recent_posts = BlogPost::latest()->limit(5)->get();
        $recent_projects = Project::latest()->limit(5)->get();
        
        return view('admin.dashboard', compact('stats', 'recent_posts', 'recent_projects'));
    }
}
