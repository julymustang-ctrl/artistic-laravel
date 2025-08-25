<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageController;

// Admin Controllers
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\BlogPostController as AdminBlogPostController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;

// Home routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home-image', [HomeController::class, 'image'])->name('home.image');
Route::get('/home-slider', [HomeController::class, 'slider'])->name('home.slider');

// About routes
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Service routes
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

// Blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');

// Project routes
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

// Team routes
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/team/{member}', [TeamController::class, 'show'])->name('team.show');

// Gallery routes
Route::get('/gallery/images', [GalleryController::class, 'images'])->name('gallery.images');
Route::get('/gallery/videos', [GalleryController::class, 'videos'])->name('gallery.videos');

// Contact routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Additional pages
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/faqs', [PageController::class, 'faqs'])->name('faqs');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');

// Newsletter subscription
Route::post('/newsletter/subscribe', [ContactController::class, 'newsletter'])->name('newsletter.subscribe');

// Default dashboard (redirect to admin)
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Routes (Protected)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    
    // Services Management
    Route::resource('services', AdminServiceController::class);
    
    // Blog Posts Management
    Route::resource('blog-posts', AdminBlogPostController::class);
    
    // Projects Management
    Route::resource('projects', AdminProjectController::class);
});

// User Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication Routes
require __DIR__.'/auth.php';

// 404 page (fallback)
Route::fallback(function () {
    return view('pages.404');
});
