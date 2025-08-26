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

// Ana Sayfa (Homepage)
Route::get('/', [HomeController::class, 'index'])->name('anasayfa');
Route::get('/anasayfa', [HomeController::class, 'index'])->name('home');

// Hakkımızda (About Us)
Route::get('/hakkimizda', [AboutController::class, 'index'])->name('hakkimizda');

// Hizmetlerimiz (Our Services)
Route::get('/hizmetlerimiz', [ServiceController::class, 'index'])->name('hizmetlerimiz');
Route::get('/hizmetlerimiz/{service}', [ServiceController::class, 'show'])->name('hizmetlerimiz.show');

// Kurumsal Pages (Corporate)
Route::get('/takim-arkadaslarimiz', [TeamController::class, 'index'])->name('takim-arkadaslarimiz');
Route::get('/takim-arkadaslarimiz/{member}', [TeamController::class, 'show'])->name('takim-arkadaslarimiz.show');
Route::get('/yorumlar', [PageController::class, 'testimonials'])->name('yorumlar');
Route::get('/referanslar', [ProjectController::class, 'index'])->name('referanslar');
Route::get('/referanslar/{project}', [ProjectController::class, 'show'])->name('referanslar.show');
Route::get('/video-gallery', [GalleryController::class, 'videos'])->name('video-gallery');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');

// İletişim (Contact)
Route::get('/iletisim', [ContactController::class, 'index'])->name('iletisim');
Route::post('/iletisim', [ContactController::class, 'store'])->name('iletisim.store');

// Additional Turkish Pages
Route::get('/sss', [PageController::class, 'faqs'])->name('sss');
Route::get('/gizlilik-politikasi', [PageController::class, 'privacy'])->name('gizlilik-politikasi');
Route::get('/sartlar-ve-kosullar', [PageController::class, 'terms'])->name('sartlar-ve-kosullar');

// Legacy English routes (redirects)
Route::get('/about', function() { return redirect()->route('hakkimizda'); });
Route::get('/services', function() { return redirect()->route('hizmetlerimiz'); });
Route::get('/team', function() { return redirect()->route('takim-arkadaslarimiz'); });
Route::get('/projects', function() { return redirect()->route('referanslar'); });
Route::get('/contact', function() { return redirect()->route('iletisim'); });
Route::get('/testimonials', function() { return redirect()->route('yorumlar'); });
Route::get('/faqs', function() { return redirect()->route('sss'); });
Route::get('/privacy', function() { return redirect()->route('gizlilik-politikasi'); });
Route::get('/terms', function() { return redirect()->route('sartlar-ve-kosullar'); });

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
