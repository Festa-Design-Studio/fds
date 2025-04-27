# Festa Design Studio

![Festa Design Studio](public/assets/images/logo.svg)

## Project Overview

Festa Design Studio is a design agency website built with Laravel, Blade, and Tailwind CSS. The project showcases Festa's services, work portfolio, blog, and resources while implementing a comprehensive design system with a fully functional admin panel.

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
    Route::get('/work', [\App\Http\Controllers\Admin\WorkController::class, 'index'])->name('work.index');
    Route::get('/work/create', [\App\Http\Controllers\Admin\WorkController::class, 'create'])->name('work.create');
    Route::post('/work', [\App\Http\Controllers\Admin\WorkController::class, 'store'])->name('work.store');
    Route::get('/work/{id}/edit', [\App\Http\Controllers\Admin\WorkController::class, 'edit'])->name('work.edit');
    Route::put('/work/{id}', [\App\Http\Controllers\Admin\WorkController::class, 'update'])->name('work.update');
    Route::delete('/work/{id}', [\App\Http\Controllers\Admin\WorkController::class, 'destroy'])->name('work.destroy');
    
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

### Database Migrations

Key database tables include:

- `users`: Authentication and admin user data
- `projects`: Portfolio projects and case studies with fields for title, slug, description, images, client relation, published status
- `clients`: Client information with fields for name, logo, website URL, description
- `team_members`: Team member profiles with fields for name, position, bio, image, social links

## Component Library

The project follows a component-driven approach with a comprehensive set of reusable Blade components located in `resources/views/components/`. See the [Component Documentation](resources/views/components/README.md) for detailed usage examples.

Component categories include:

- **Core**: Fundamental UI elements (buttons, inputs, etc.)
- **Blog**: Blog-specific components
- **Work**: Portfolio and case study components
- **Services**: Service presentation components
- **Toolkit**: Resource toolkit components
- **About**: Team and company information components
- **Home**: Homepage-specific components
- **Contact**: Form and contact information components

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

# Run migrations
php artisan migrate
```

### 5. Create Models

```bash
# Create Eloquent models
php artisan make:model Project
php artisan make:model Client
php artisan make:model TeamMember
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

## Built With

- **Laravel 10+** - PHP framework
- **Breeze** - Authentication scaffolding
- **Blade** - Templating engine
- **Tailwind CSS** - Utility-first CSS framework
- **MySQL** - Database
- **Vite** - Asset bundling

## License

This project is proprietary and confidential.
