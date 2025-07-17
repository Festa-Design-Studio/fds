<?php

use App\Http\Controllers\About\Team\TeamMemberController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WorkMetricController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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

// Admin About SDG Management
Route::prefix('admin/about/sdg')->middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\About\SdgController::class, 'index'])->name('admin.about.sdg.index');
    Route::get('/create', [\App\Http\Controllers\Admin\About\SdgController::class, 'create'])->name('admin.about.sdg.create');
    Route::post('/', [\App\Http\Controllers\Admin\About\SdgController::class, 'store'])->name('admin.about.sdg.store');
    Route::get('/{aboutSdg}/edit', [\App\Http\Controllers\Admin\About\SdgController::class, 'edit'])->name('admin.about.sdg.edit');
    Route::put('/{aboutSdg}', [\App\Http\Controllers\Admin\About\SdgController::class, 'update'])->name('admin.about.sdg.update');
    Route::delete('/{aboutSdg}', [\App\Http\Controllers\Admin\About\SdgController::class, 'destroy'])->name('admin.about.sdg.destroy');
});

// Admin About Partners Management
Route::prefix('admin/about/partners')->middleware(['auth'])->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\About\PartnerController::class, 'index'])->name('admin.about.partners.index');
    Route::get('/create', [\App\Http\Controllers\Admin\About\PartnerController::class, 'create'])->name('admin.about.partners.create');
    Route::post('/', [\App\Http\Controllers\Admin\About\PartnerController::class, 'store'])->name('admin.about.partners.store');
    Route::get('/{aboutPartner}/edit', [\App\Http\Controllers\Admin\About\PartnerController::class, 'edit'])->name('admin.about.partners.edit');
    Route::put('/{aboutPartner}', [\App\Http\Controllers\Admin\About\PartnerController::class, 'update'])->name('admin.about.partners.update');
    Route::delete('/{aboutPartner}', [\App\Http\Controllers\Admin\About\PartnerController::class, 'destroy'])->name('admin.about.partners.destroy');
});

// Resources
Route::get('/resources/blog', [ResourcesController::class, 'blog'])->name('resources.blog');
Route::get('/resources/blog/category/{categorySlug}', [ResourcesController::class, 'blogByCategory'])->name('resources.blog.category');
Route::get('/resources/blog/{slug}', [ResourcesController::class, 'show'])->name('blog.show');
Route::get('/resources/toolkit', [ResourcesController::class, 'toolkit'])->name('resources.toolkit');
Route::get('/resources/design-system', [ResourcesController::class, 'designSystem'])->name('resources.design-system');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact/talktofesta', [ContactController::class, 'talkToFesta'])->name('contact.talk-to-festa');
Route::get('/thank-you', [ContactController::class, 'thankYou'])->name('contact.thank-you');

// Newsletter
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::post('/newsletter/unsubscribe', [NewsletterController::class, 'unsubscribe'])->name('newsletter.unsubscribe');


// Utility Pages
Route::get('/privacy', [UtilityController::class, 'privacy'])->name('privacy');
Route::get('/terms', [UtilityController::class, 'terms'])->name('terms');
Route::get('/sitemap', [UtilityController::class, 'sitemap'])->name('sitemap');

// XML Sitemaps for SEO
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.xml');
Route::get('/sitemap-static.xml', [SitemapController::class, 'static'])->name('sitemap.static');
Route::get('/sitemap-blog.xml', [SitemapController::class, 'blog'])->name('sitemap.blog');
Route::get('/sitemap-work.xml', [SitemapController::class, 'work'])->name('sitemap.work');

// API Route for retrieving SDG information
Route::get('/api/sdg/{id}', function ($id) {
    $sdg = \App\Models\SdgAlignment::find($id);
    if (! $sdg) {
        return response()->json(['error' => 'SDG not found'], 404);
    }

    return response()->json(['id' => $sdg->id, 'name' => $sdg->name, 'code' => $sdg->code]);
});

// Components Showcase
Route::get('/components-showcase', function () {
    return view('components-showcase');
})->name('components.showcase');

// Special test route for thank-you page
Route::get('/test-thank-you', function () {
    return view('contact.thank-you');
})->name('test.thank-you');

// Admin Routes
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    // Admin Dashboard
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // Services Management
    Route::get('/services', [AdminController::class, 'services'])->name('services');
    Route::get('/services/{type}/edit', [App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{type}', [App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('services.update');

    // Service Sectors
    Route::get('/services/sectors/{type}/edit', [App\Http\Controllers\Admin\ServiceSectorController::class, 'edit'])->name('services.sectors.edit');
    Route::put('/services/sectors/{type}', [App\Http\Controllers\Admin\ServiceSectorController::class, 'update'])->name('services.sectors.update');

    // Page SEO Management
    Route::get('/page-seo', [App\Http\Controllers\Admin\PageSeoController::class, 'index'])->name('page-seo.index');
    Route::get('/page-seo/{pageIdentifier}/edit', [App\Http\Controllers\Admin\PageSeoController::class, 'edit'])->name('page-seo.edit');
    Route::put('/page-seo/{pageIdentifier}', [App\Http\Controllers\Admin\PageSeoController::class, 'update'])->name('page-seo.update');

    // Work Management
    Route::prefix('work')->name('work.')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\WorkController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Admin\WorkController::class, 'create'])->name('create');
        Route::post('/', [\App\Http\Controllers\Admin\WorkController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [\App\Http\Controllers\Admin\WorkController::class, 'edit'])->name('edit');
        Route::put('/{id}', [\App\Http\Controllers\Admin\WorkController::class, 'update'])->name('update');
        Route::delete('/{id}', [\App\Http\Controllers\Admin\WorkController::class, 'destroy'])->name('destroy');

        // Metrics Routes
        Route::prefix('metrics')->name('metrics.')->group(function () {
            Route::get('/', [WorkMetricController::class, 'index'])->name('index');
            Route::get('/create', [WorkMetricController::class, 'create'])->name('create');
            Route::post('/', [WorkMetricController::class, 'store'])->name('store');
            Route::get('/{metric}/edit', [WorkMetricController::class, 'edit'])->name('edit');
            Route::put('/{metric}', [WorkMetricController::class, 'update'])->name('update');
            Route::delete('/{metric}', [WorkMetricController::class, 'destroy'])->name('destroy');
        });

        // Testimonials Routes
        Route::prefix('testimonials')->name('testimonials.')->group(function () {
            Route::get('/', [TestimonialController::class, 'index'])->name('index');
            Route::get('/create', [TestimonialController::class, 'create'])->name('create');
            Route::post('/', [TestimonialController::class, 'store'])->name('store');
            Route::get('/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('edit');
            Route::put('/{testimonial}', [TestimonialController::class, 'update'])->name('update');
            Route::delete('/{testimonial}', [TestimonialController::class, 'destroy'])->name('destroy');
        });
    });

    // Other Admin Routes
    Route::get('/about', [AdminController::class, 'about'])->name('about');
    Route::get('/design-system', [AdminController::class, 'designSystem'])->name('design-system');
    Route::get('/contact', [AdminController::class, 'contact'])->name('contact');
    Route::get('/privacy', [AdminController::class, 'privacy'])->name('privacy');
    Route::get('/terms', [AdminController::class, 'terms'])->name('terms');

    // Client Management
    Route::resource('clients', \App\Http\Controllers\Admin\ClientController::class);

    // Sector Management
    Route::resource('sectors', \App\Http\Controllers\Admin\SectorController::class);

    // Industry Management
    Route::resource('industries', \App\Http\Controllers\Admin\IndustryController::class);

    // SDG Alignment Management
    Route::resource('sdg-alignments', \App\Http\Controllers\Admin\SdgAlignmentController::class);

    // Blog Management
    Route::get('/blog/posts', [BlogController::class, 'posts'])->name('blog.posts');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/posts', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/posts/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/posts/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/posts/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::resource('blog/categories', \App\Http\Controllers\Admin\BlogCategoryController::class)
        ->names('blog.categories')
        ->except([
            'show',
        ]);

    // Image Upload for Editor
    Route::post('/api/upload-image', [ImageController::class, 'upload'])->name('admin.api.upload-image');

    // Admin Settings
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/users/{user}/edit', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('users.create');
    Route::post('/users', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('users.store');

    // Toolkit management routes
    Route::get('/toolkit', [App\Http\Controllers\Admin\ToolkitController::class, 'index'])->name('toolkit.index');
    Route::get('/toolkit/create', [App\Http\Controllers\Admin\ToolkitController::class, 'create'])->name('toolkit.create');
    Route::post('/toolkit', [App\Http\Controllers\Admin\ToolkitController::class, 'store'])->name('toolkit.store');
    Route::get('/toolkit/{toolkit}/edit', [App\Http\Controllers\Admin\ToolkitController::class, 'edit'])->name('toolkit.edit');
    Route::put('/toolkit/{toolkit}', [App\Http\Controllers\Admin\ToolkitController::class, 'update'])->name('toolkit.update');
    Route::delete('/toolkit/{toolkit}', [App\Http\Controllers\Admin\ToolkitController::class, 'destroy'])->name('toolkit.destroy');

    // Toolkit category management routes
    Route::get('/toolkit/categories', [App\Http\Controllers\Admin\ToolkitCategoryController::class, 'index'])->name('toolkit.categories.index');
    Route::get('/toolkit/categories/create', [App\Http\Controllers\Admin\ToolkitCategoryController::class, 'create'])->name('toolkit.categories.create');
    Route::post('/toolkit/categories', [App\Http\Controllers\Admin\ToolkitCategoryController::class, 'store'])->name('toolkit.categories.store');
    Route::get('/toolkit/categories/{category}/edit', [App\Http\Controllers\Admin\ToolkitCategoryController::class, 'edit'])->name('toolkit.categories.edit');
    Route::put('/toolkit/categories/{category}', [App\Http\Controllers\Admin\ToolkitCategoryController::class, 'update'])->name('toolkit.categories.update');
    Route::delete('/toolkit/categories/{category}', [App\Http\Controllers\Admin\ToolkitCategoryController::class, 'destroy'])->name('toolkit.categories.destroy');
    
    // Newsletter management routes
    Route::get('/newsletter', [App\Http\Controllers\Admin\NewsletterController::class, 'index'])->name('newsletter.index');
    Route::get('/newsletter/stats', [App\Http\Controllers\Admin\NewsletterController::class, 'stats'])->name('newsletter.stats');
});

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes
require __DIR__.'/auth.php';

// New route for the admin ratings dashboard
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/blog/ratings-dashboard', \App\Livewire\Admin\ArticleRatingsDashboard::class)
        ->name('admin.blog.ratings-dashboard');
});

// Test route for isolated Livewire component testing
Route::get('/test-rating', function () {
    if (! \App\Models\Article::find(1)) {
        // Ensure at least one article, user, and category exist for the test
        if (! \App\Models\User::find(1)) {
            \App\Models\User::create(['name' => 'Test User', 'email' => 'testuser@example.com', 'password' => bcrypt('password')]);
        }
        if (! \App\Models\Category::find(1)) {
            \App\Models\Category::create(['name' => 'Test Category', 'slug' => 'test-category']);
        }
        \App\Models\Article::create([
            'title' => 'Test Article for Rating Page',
            'slug' => 'test-article-for-rating-page',
            'excerpt' => 'Test excerpt.',
            'content' => 'Test content.',
            'user_id' => 1,
            'category_id' => 1,
            'published_at' => now(),
            'status' => 'published',
        ]);
    }

    return view('test-rating-page');
})->name('test-rating');

// Direct Livewire asset routes
Route::get('/livewire/livewire.js', function () {
    $path = public_path('vendor/livewire/livewire.js');
    if (file_exists($path)) {
        return response()->file($path);
    }

    return response('// Livewire asset not found', 404)->header('Content-Type', 'application/javascript');
});

Route::get('/livewire/livewire.min.js', function () {
    $path = public_path('vendor/livewire/livewire.min.js');
    if (file_exists($path)) {
        return response()->file($path);
    }

    return response('// Livewire asset not found', 404)->header('Content-Type', 'application/javascript');
});

// Fallback for any other Livewire assets
Route::get('/livewire/{asset}', function ($asset) {
    $path = public_path("vendor/livewire/{$asset}");
    if (file_exists($path)) {
        $contentType = 'application/octet-stream';
        $extension = pathinfo($path, PATHINFO_EXTENSION);

        $contentTypes = [
            'js' => 'application/javascript',
            'css' => 'text/css',
            'map' => 'application/json',
            'json' => 'application/json',
        ];

        if (isset($contentTypes[$extension])) {
            $contentType = $contentTypes[$extension];
        }

        return response()->file($path, ['Content-Type' => $contentType]);
    }
    abort(404);
});

// Livewire debug test route
Route::get('/debug-livewire', function () {
    return view('livewire-debug');
});
