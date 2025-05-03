# Festa Design Studio

![Festa Design Studio](public/assets/images/logo.svg)

## Project Overview

Festa Design Studio is a design agency website built with Laravel, Blade, and Tailwind CSS. The project showcases Festa's services, work portfolio, blog, and resources while implementing a comprehensive design system with a fully functional admin panel.

## Key Features

- **Component-based architecture** using Blade components
- **Custom design system** with Tailwind CSS
- **Responsive layouts** for all device sizes
- **Admin panel** for content management
- **Blog platform** for sharing insights
- **Portfolio showcase** for displaying work
- **Services section** highlighting capabilities
- **Contact system** for client inquiries
- **Metrics display** with animated counters

## Routes Structure

### Web Routes (`routes/web.php`)

```php
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Admin Dashboard Redirect
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

// Work/Portfolio
Route::get('/work', [WorkController::class, 'index'])->name('work');
Route::get('/work/case-study', [WorkController::class, 'caseStudy'])->name('work.case-study');
Route::get('/work/{slug}', [WorkController::class, 'show'])->name('work.show');

// Client
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

// Resources
Route::get('/resources/blog', [ResourcesController::class, 'blog'])->name('resources.blog');
Route::get('/resources/toolkit', [ResourcesController::class, 'toolkit'])->name('resources.toolkit');
Route::get('/resources/design-system', [ResourcesController::class, 'designSystem'])->name('resources.design-system');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact/talktofesta', [ContactController::class, 'talkToFesta'])->name('contact.talk-to-festa');
Route::get('/thank-you', [ContactController::class, 'thankYou'])->name('contact.thank-you');

// Utility Pages
Route::get('/privacy', [UtilityController::class, 'privacy'])->name('privacy');
Route::get('/terms', [UtilityController::class, 'terms'])->name('terms');
Route::get('/sitemap', [UtilityController::class, 'sitemap'])->name('sitemap');

// Admin Routes
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    // Admin Dashboard
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Pages Management
    Route::get('/services', [AdminController::class, 'services'])->name('services');
    
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
    });
    
    // Team Members Management
    Route::prefix('about/team')->group(function () {
        Route::get('/', [TeamMemberController::class, 'index'])->name('about.team.index');
        Route::get('/create', [TeamMemberController::class, 'create'])->name('about.team.create');
        Route::post('/', [TeamMemberController::class, 'store'])->name('about.team.store');
        Route::get('/{team_member}/edit', [TeamMemberController::class, 'edit'])->name('about.team.edit');
        Route::put('/{team_member}', [TeamMemberController::class, 'update'])->name('about.team.update');
        Route::delete('/{team_member}', [TeamMemberController::class, 'destroy'])->name('about.team.destroy');
        Route::post('/upload-logo', [TeamMemberController::class, 'uploadLogo'])->name('about.team.upload-logo');
    });
    
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
```

## Project Structure

### Controllers

The application logic is organized into controller groups:

#### Public Controllers
- `HomeController`: Handles the home page rendering
- `ServicesController`: Manages service pages and sector specializations
- `WorkController`: Manages portfolio and case studies
- `AboutController`: Manages about pages including team, process and focus
- `ResourcesController`: Handles blog and toolkit resources
- `ContactController`: Manages contact forms and inquiries
- `UtilityController`: Handles utility pages like privacy policy and terms
- `ClientController`: Manages client information display
- `TeamMemberController`: Handles team member profile display

#### Admin Controllers
- `AdminController`: Manages the admin dashboard and settings
- `WorkController` (Admin): Manages project portfolio content
- `WorkMetricController`: Manages metrics for the work section
- `ClientController` (Admin): Handles client data management
- `BlogController`: Manages blog posts and categories
- `TeamMemberController` (Admin): Manages team member information
- `ImageController`: Handles image uploads for content

### Models

The application uses the following data models:

- `User`: Authentication and admin user management
- `Project`: Portfolio projects and case studies with attributes like title, description, client, images
- `Client`: Client information and relationships with attributes like name, logo, website
- `TeamMember`: Team member information with attributes like name, position, bio, and social links
- `WorkMetric`: Metrics displayed in the work section with attributes like value, title, description, color class, and display order
- `Testimonial`: Client testimonials with attributes like author name, title, quote, avatar, and display order

### Database Migrations

Key database tables include:

- `users`: Authentication and admin user data
- `projects`: Portfolio projects and case studies with fields for title, slug, description, images, client relation, published status
- `clients`: Client information with fields for name, logo, website URL, description
- `team_members`: Team member profiles with fields for name, position, bio, image, social links
- `work_metrics`: Metrics for the work section with fields for value, title, description, color class, and display order
- `testimonials`: Client testimonials with fields for author name, title, quote, avatar, published status, and display order

## Component Library

The project follows a component-driven approach with a comprehensive set of reusable Blade components located in `resources/views/components/`. See the [Component Documentation](resources/views/components/README.md) for detailed usage examples.

Component categories include:

- **Core**: Fundamental UI elements (buttons, inputs, etc.)
- **Blog**: Blog-specific components
- **Work**: Portfolio and case study components
- **Services**: Service presentation components
  - **Project Design**: Components specific to the project design service page
- **Toolkit**: Resource toolkit components
- **About**: Team and company information components
  - **Our Process**: Components detailing Festa's work methodology
- **Home**: Homepage-specific components
- **Contact**: Form and contact information components

Recent additions include:
- Dynamic Service components (Service Hero Section, Service Core Section, Service CTA Section) for reuse across service pages
- Project Design Service components (Hero Section, Core Services CTA)
- SDG Section for the About page
- Our Process components (Hero, Philosophy, Methodology, and Impact Measurement sections)

## Key Features Implementation

### Metrics System

The metrics system displays animated counters for key statistics in the work section. Each metric has its own independent counter that animates when scrolled into view.

#### Implementation Details:

1. **Database Structure**:
   - The `work_metrics` table stores metric data with fields for value, title, description, color class, and display order.

2. **Admin Management**:
   - The `WorkMetricController` provides CRUD operations for metrics.
   - The edit form includes validation and error handling to ensure data integrity.

3. **Frontend Display**:
   - The `x-work.metrics` component renders metrics with animated counters.
   - Each metric has a unique identifier to ensure independent animation.
   - The animation uses Alpine.js with IntersectionObserver to trigger when scrolled into view.

#### Code Example:

```blade
<!-- Metrics Component -->
<x-work.metrics :metrics="$metrics" />

<!-- Individual Metric Counter -->
<span 
    x-data="{ 
        value: 0,
        alpineValue: '{{ $metric['value'] }}',
        suffix: '',
        uniqueId: '{{ $metric['id'] ?? uniqid() }}',
        version: '{{ $version }}'
    }"
    x-init="
        // Animation logic with unique identifier
        function step(timestamp) {
            if (!$el.startTimestamp) $el.startTimestamp = timestamp;
            const progress = Math.min((timestamp - $el.startTimestamp) / duration, 1);
            value = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        }
        
        // IntersectionObserver to trigger animation
        observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    $el.startTimestamp = null; // Reset timestamp for each animation
                    window.requestAnimationFrame(step);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe($el);
    "
    x-text="value.toLocaleString() + suffix"
    class="text-display font-black {{ $metric['colorClass'] ?? 'text-chicken-comb-600' }}"
></span>
```

## Step-by-Step Project Creation Guide

### 1. Set Up Laravel Project

```bash
# Create a new Laravel project
composer create-project laravel/laravel festa-design-studio

# Navigate to project directory
cd festa-design-studio
```

### 2. Set Up Tailwind CSS

```bash
# Install Tailwind CSS
npm install -D tailwindcss postcss autoprefixer

# Initialize Tailwind CSS
npx tailwindcss init -p

# Configure Tailwind CSS in tailwind.config.js
```

### 3. Configure Database

```bash
# Set up .env file with database credentials
cp .env.example .env
php artisan key:generate

# Update database settings in .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=festa_design
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Create Database Structure

```bash
# Create migrations for the necessary tables
php artisan make:migration create_projects_table
php artisan make:migration create_clients_table
php artisan make:migration create_team_members_table
php artisan make:migration create_work_metrics_table

# Run migrations
php artisan migrate
```

### 5. Create Models

```bash
# Create Eloquent models
php artisan make:model Project
php artisan make:model Client
php artisan make:model TeamMember
php artisan make:model WorkMetric
```

### 6. Create Controllers

```bash
# Generate resource controllers
php artisan make:controller HomeController
php artisan make:controller ServicesController
php artisan make:controller WorkController
php artisan make:controller AboutController
php artisan make:controller ResourcesController
php artisan make:controller ContactController
php artisan make:controller UtilityController
php artisan make:controller ClientController
php artisan make:controller About/Team/TeamMemberController

# Create Admin controllers
php artisan make:controller Admin/AdminController
php artisan make:controller Admin/WorkController
php artisan make:controller Admin/WorkMetricController
php artisan make:controller Admin/ClientController
php artisan make:controller Admin/BlogController
php artisan make:controller Admin/ImageController
```

### 7. Create Blade Components

```bash
# Create component directories and files
mkdir -p resources/views/components/{core,blog,work,services,toolkit,about,home,contact}

# Create base layout components
php artisan make:component AppLayout
php artisan make:component GuestLayout

# Create core components
touch resources/views/components/core/button.blade.php
touch resources/views/components/core/input.blade.php
touch resources/views/components/core/select.blade.php
# ... and other components as needed
```

### 8. Create View Templates

```bash
# Create directory structure for views
mkdir -p resources/views/pages/{home,services,work,about,resources,contact}
mkdir -p resources/views/pages/services/sectors
mkdir -p resources/views/admin/{work,blog,clients,team}

# Create page templates
touch resources/views/pages/home/index.blade.php
touch resources/views/pages/services/index.blade.php
# ... and other page templates as needed
```

### 9. Define Routes

```bash
# Edit routes/web.php to define all routes
# See the Routes Structure section for details
```

### 10. Set Up Authentication

```bash
# Install Laravel Breeze for authentication
composer require laravel/breeze --dev
php artisan breeze:install blade

# Run migrations for authentication tables
php artisan migrate
```

### 11. Add Assets

```bash
# Create necessary asset directories
mkdir -p public/assets/{images,fonts,icons}

# Add logo and other essential assets
cp ~/path/to/logo.svg public/assets/images/
```

### 12. Customize Tailwind Configuration

```bash
# Update tailwind.config.js with custom colors, fonts, etc.
```

### 13. Set Up Database Seeders

```bash
# Create seeders for initial data
php artisan make:seeder ProjectSeeder
php artisan make:seeder ClientSeeder
php artisan make:seeder TeamMemberSeeder
php artisan make:seeder WorkMetricSeeder
php artisan make:seeder UserSeeder

# Run seeders
php artisan db:seed
```

### 14. Run Development Server

```bash
# Start Laravel development server
php artisan serve

# Watch for asset changes
npm run dev
```

## Troubleshooting Common Issues

### Metric Edit Form Not Storing Data

If the metric edit form is not storing data:

1. **Check Form Method and Action**:
   - Ensure the form has the correct method (`POST`) and includes `@method('PUT')` directive
   - Verify the form action points to the correct route: `{{ route('admin.work.metrics.update', $metric) }}`

2. **Verify CSRF Protection**:
   - Make sure the form includes the CSRF token: `@csrf`

3. **Check Validation**:
   - Ensure all required fields are properly validated in the controller
   - Add error handling to display validation errors to the user

4. **Add Logging**:
   - Add logging in the controller to track form submission and update process
   - Check the Laravel logs for any errors

### Metric Counter Animation Issues

If the metric counters are not animating correctly:

1. **Ensure Unique Identifiers**:
   - Each metric should have a unique identifier to prevent animation conflicts
   - Use the metric ID or generate a unique ID: `uniqueId: '{{ $metric['id'] ?? uniqid() }}'`

2. **Scope Animation State**:
   - Use element-specific timestamps: `$el.startTimestamp` instead of global variables
   - Reset timestamps for each animation instance

3. **Improve Logging**:
   - Add console logging to track animation initialization and execution
   - Include unique identifiers in log messages for easier debugging

## Built With

- **Laravel 10+** - PHP framework
- **Breeze** - Authentication scaffolding
- **Blade** - Templating engine
- **Tailwind CSS** - Utility-first CSS framework
- **Alpine.js** - Lightweight JavaScript framework
- **MySQL** - Database
- **Vite** - Asset bundling

## License

This project is proprietary and confidential.
