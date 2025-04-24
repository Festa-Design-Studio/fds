# Festa Design Studio

![Festa Design Studio](public/assets/images/logo.svg)

## Project Overview

Festa Design Studio is a design agency website built with Laravel, Blade, and Tailwind CSS. The project showcases Festa's services, work portfolio, and resources while implementing a comprehensive design system.

## Routes Structure

### Web Routes (`routes/web.php`)

```php
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Services
Route::prefix('services')->group(function () {
    Route::get('/', [ServicesController::class, 'index'])->name('services');
    Route::get('/project-design', [ServicesController::class, 'projectDesign'])->name('services.project-design');
    Route::get('/communication-design', [ServicesController::class, 'communicationDesign'])->name('services.communication-design');
    Route::get('/campaign-design', [ServicesController::class, 'campaignDesign'])->name('services.campaign-design');
    
    // Sectors
    Route::prefix('sectors')->group(function () {
        Route::get('/nonprofits', [ServicesController::class, 'nonprofits'])->name('services.sectors.nonprofits');
        Route::get('/startup', [ServicesController::class, 'startup'])->name('services.sectors.startup');
    });
});

// Work/Portfolio
Route::prefix('work')->group(function () {
    Route::get('/', [WorkController::class, 'index'])->name('work');
    Route::get('/case-study', [WorkController::class, 'caseStudy'])->name('work.case-study');
});

// About
Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');
    Route::get('/team', [AboutController::class, 'team'])->name('about.team');
    Route::get('/our-process', [AboutController::class, 'process'])->name('about.process');
    Route::get('/focus', [AboutController::class, 'focus'])->name('about.focus');
    Route::get('/we-design-for-good', [AboutController::class, 'forGood'])->name('about.for-good');
});

// Resources
Route::prefix('resources')->group(function () {
    Route::get('/blog', [ResourcesController::class, 'blog'])->name('resources.blog');
    Route::get('/toolkit', [ResourcesController::class, 'toolkit'])->name('resources.toolkit');
    Route::get('/design-system', [ResourcesController::class, 'designSystem'])->name('resources.design-system');
});

// Contact
Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact');
    Route::get('/talktofesta', [ContactController::class, 'talkToFesta'])->name('contact.talk');
    Route::post('/submit', [ContactController::class, 'submit'])->name('contact.submit');
});

// Utility Pages
Route::get('/privacy', [UtilityController::class, 'privacy'])->name('privacy');
Route::get('/terms', [UtilityController::class, 'terms'])->name('terms');
Route::get('/sitemap', [UtilityController::class, 'sitemap'])->name('sitemap');

// Component Library
Route::get('/components-showcase', function () {
    return view('components-showcase');
})->name('components-showcase');
```

## Component Library

See the dedicated component documentation in `resources/views/components/README.md` for detailed component usage.

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
php artisan make:migration create_services_table
php artisan make:migration create_team_members_table
php artisan make:migration create_blog_posts_table
php artisan make:migration create_case_studies_table

# Run migrations
php artisan migrate
```

### 5. Create Models

```bash
# Create Eloquent models
php artisan make:model Project
php artisan make:model Service
php artisan make:model TeamMember
php artisan make:model BlogPost
php artisan make:model CaseStudy
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

### 10. Add Assets

```bash
# Create necessary asset directories
mkdir -p public/assets/{images,fonts,icons}

# Add logo and other essential assets
cp ~/path/to/logo.svg public/assets/images/
```

### 11. Customize Tailwind Configuration

```bash
# Update tailwind.config.js with custom colors, fonts, etc.
```

### 12. Set Up Database Seeders

```bash
# Create seeders for initial data
php artisan make:seeder ProjectSeeder
php artisan make:seeder ServiceSeeder
php artisan make:seeder TeamMemberSeeder
php artisan make:seeder BlogPostSeeder

# Run seeders
php artisan db:seed
```

### 13. Run Development Server

```bash
# Start Laravel development server
php artisan serve

# Watch for asset changes
npm run dev
```

## Built With

- Laravel - PHP framework
- Blade - Templating engine
- Tailwind CSS - Utility-first CSS framework

## License

This project is proprietary and confidential.
# fds
