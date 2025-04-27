<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\About\Team\TeamMemberController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Redirect authenticated users to admin dashboard
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

// Services
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/project-design', [ServicesController::class, 'projectDesign'])->name('services.project-design');
Route::get('/services/communication-design', [ServicesController::class, 'communicationDesign'])->name('services.communication-design');
Route::get('/services/campaign-design', [ServicesController::class, 'campaignDesign'])->name('services.campaign-design');
Route::get('/services/sectors/nonprofits', [ServicesController::class, 'nonprofits'])->name('services.sectors.nonprofits');
Route::get('/services/sectors/startup', [ServicesController::class, 'startup'])->name('services.sectors.startup');

// Work
Route::get('/work', [WorkController::class, 'index'])->name('work');
Route::get('/work/case-study', [WorkController::class, 'caseStudy'])->name('work.case-study');
Route::get('/work/{slug}', [WorkController::class, 'show'])->name('work.show');

// Client routes
Route::get('/clients', [ClientController::class, 'index'])->name('clients');
Route::get('/client/{slug}', [ClientController::class, 'show'])->name('client.show');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about/team', [AboutController::class, 'team'])->name('about.team');
Route::get('/about/our-process', [AboutController::class, 'process'])->name('about.process');
Route::get('/about/focus', [AboutController::class, 'focus'])->name('about.focus');
Route::get('/about/we-design-for-good', [AboutController::class, 'designForGood'])->name('about.design-for-good');

// Team Members
Route::get('/about/team/{team_member}', [TeamMemberController::class, 'show'])->name('about.team.show');

// Admin Team Members
Route::prefix('admin/about/team')->middleware(['auth'])->group(function () {
    Route::get('/', [TeamMemberController::class, 'index'])->name('admin.about.team.index');
    Route::get('/create', [TeamMemberController::class, 'create'])->name('admin.about.team.create');
    Route::post('/', [TeamMemberController::class, 'store'])->name('admin.about.team.store');
    Route::get('/{team_member}/edit', [TeamMemberController::class, 'edit'])->name('admin.about.team.edit');
    Route::put('/{team_member}', [TeamMemberController::class, 'update'])->name('admin.about.team.update');
    Route::delete('/{team_member}', [TeamMemberController::class, 'destroy'])->name('admin.about.team.destroy');
    Route::post('/upload-logo', [TeamMemberController::class, 'uploadLogo'])->name('admin.about.team.upload-logo');
});

// Resources
Route::get('/resources/blog', [ResourcesController::class, 'blog'])->name('resources.blog');
Route::get('/resources/toolkit', [ResourcesController::class, 'toolkit'])->name('resources.toolkit');
Route::get('/resources/design-system', [ResourcesController::class, 'designSystem'])->name('resources.design-system');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact/talktofesta', [ContactController::class, 'talkToFesta'])->name('contact.talk-to-festa');

// Utility Pages
Route::get('/privacy', [UtilityController::class, 'privacy'])->name('privacy');
Route::get('/terms', [UtilityController::class, 'terms'])->name('terms');
Route::get('/sitemap', [UtilityController::class, 'sitemap'])->name('sitemap');

// Components Showcase
Route::get('/components-showcase', function () {
    return view('components-showcase');
})->name('components.showcase');

// Admin Routes
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    // Admin Dashboard
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Pages Management
    Route::get('/services', [AdminController::class, 'services'])->name('services');
    
    // Work Management
    Route::get('/work', [\App\Http\Controllers\Admin\WorkController::class, 'index'])->name('work.index');
    Route::get('/work/create', [\App\Http\Controllers\Admin\WorkController::class, 'create'])->name('work.create');
    Route::post('/work', [\App\Http\Controllers\Admin\WorkController::class, 'store'])->name('work.store');
    Route::get('/work/{id}/edit', [\App\Http\Controllers\Admin\WorkController::class, 'edit'])->name('work.edit');
    Route::put('/work/{id}', [\App\Http\Controllers\Admin\WorkController::class, 'update'])->name('work.update');
    Route::delete('/work/{id}', [\App\Http\Controllers\Admin\WorkController::class, 'destroy'])->name('work.destroy');
    
    // Other Admin Routes
    Route::get('/about', [AdminController::class, 'about'])->name('about');
    Route::get('/toolkit', [AdminController::class, 'toolkit'])->name('toolkit');
    Route::get('/design-system', [AdminController::class, 'designSystem'])->name('design-system');
    Route::get('/contact', [AdminController::class, 'contact'])->name('contact');
    Route::get('/privacy', [AdminController::class, 'privacy'])->name('privacy');
    Route::get('/terms', [AdminController::class, 'terms'])->name('terms');
    
    // Client Management
    Route::resource('clients', \App\Http\Controllers\Admin\ClientController::class);
    
    // Blog Management
    Route::get('/blog/posts', [BlogController::class, 'posts'])->name('blog.posts');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/posts', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/posts/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/posts/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/posts/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::get('/blog/categories', [BlogController::class, 'categories'])->name('blog.categories');
    
    // Image Upload for Editor
    Route::post('/api/upload-image', [ImageController::class, 'upload'])->name('admin.api.upload-image');
    
    // Admin Settings
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
});

// Auth routes
require __DIR__.'/auth.php';
