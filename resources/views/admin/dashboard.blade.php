@extends('admin.layout')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
    <!-- Statistics Cards -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="mb-0">{{ $stats['services'] ?? 0 }}</h3>
                            <p class="mb-0">Services</p>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-cogs fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="mb-0">{{ $stats['blog_posts'] ?? 0 }}</h3>
                            <p class="mb-0">Blog Posts</p>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-blog fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="mb-0">{{ $stats['projects'] ?? 0 }}</h3>
                            <p class="mb-0">Projects</p>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-project-diagram fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="mb-0">{{ $stats['team_members'] ?? 0 }}</h3>
                            <p class="mb-0">Team Members</p>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recent Content -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Recent Blog Posts</h5>
                    <a href="{{ route('admin.blog-posts.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="card-body">
                    @if(isset($recent_posts) && $recent_posts->count() > 0)
                        @foreach($recent_posts as $post)
                            <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                <div>
                                    <h6 class="mb-0">{{ $post->title }}</h6>
                                    <small class="text-muted">{{ $post->created_at->format('M d, Y') }}</small>
                                </div>
                                <span class="badge bg-{{ $post->is_published ? 'success' : 'warning' }}">
                                    {{ $post->is_published ? 'Published' : 'Draft' }}
                                </span>
                            </div>
                        @endforeach
                    @else
                        <p class="text-muted mb-0">No blog posts found.</p>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Recent Projects</h5>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="card-body">
                    @if(isset($recent_projects) && $recent_projects->count() > 0)
                        @foreach($recent_projects as $project)
                            <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                <div>
                                    <h6 class="mb-0">{{ $project->title }}</h6>
                                    <small class="text-muted">{{ $project->category }}</small>
                                </div>
                                <span class="badge bg-{{ $project->is_active ? 'success' : 'secondary' }}">
                                    {{ $project->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>
                        @endforeach
                    @else
                        <p class="text-muted mb-0">No projects found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    <!-- Quick Actions -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Quick Actions</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{ route('admin.services.create') }}" class="btn btn-primary w-100 mb-2">
                                <i class="fas fa-plus me-2"></i>Add Service
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('admin.blog-posts.create') }}" class="btn btn-success w-100 mb-2">
                                <i class="fas fa-plus me-2"></i>New Blog Post
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('admin.projects.create') }}" class="btn btn-info w-100 mb-2">
                                <i class="fas fa-plus me-2"></i>Add Project
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('home') }}" class="btn btn-outline-secondary w-100 mb-2" target="_blank">
                                <i class="fas fa-external-link-alt me-2"></i>View Site
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection