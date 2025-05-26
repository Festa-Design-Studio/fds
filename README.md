# Festa Design Studio

<svg class="h-40 w-auto" viewBox="0 0 27 40" preserveAspectRatio="xMidYMid meet">
  <g>
    <path class="cls-2" d="M26,5.66V1.12H1v22.73h4.55v-9.09h2.27v9.09h18.18v-13.64h-4.55v-4.55h4.55ZM7.82,10.21h-2.27v-4.55h2.27v4.55ZM15.2,10.21v9.09h-2.84V5.66h2.84v4.55ZM21.45,19.3h-1.7v-4.55h1.7v4.55Z" fill="#e02829"/>
  </g>
</svg>

## Project Overview

Festa Design Studio is a design agency website built with Laravel, Blade, and Tailwind CSS. The project showcases Festa's services, work portfolio, blog, and resources while implementing a comprehensive design system with a fully functional admin panel.

## Key Features

- **Component-based architecture** using Blade components
- **Custom design system** with Tailwind CSS
- **Responsive layouts** for all device sizes
- **Admin panel** for content management
- **Blog platform** with full CRUD functionality for articles and categories
  - **Featured Article** selection system for highlighting important content
  - **Article rating** functionality for user feedback
- **Portfolio showcase** for displaying work
- **Services section** highlighting capabilities
- **Interactive Toolkit page** with dynamic filtering and pagination
  - **Real-time search** across toolkit resources
  - **Category and tool filtering** with URL parameter management
  - **Pagination system** with "Load More" functionality
  - **Smooth animations** and responsive design
- **Advanced Services Management** with sector-specific content
  - **Dynamic Service Pages** for Project Design, Communication Design, and Campaign Design
  - **Sector-Specific Pages** for Nonprofits and Startups with dynamic content
  - **Admin Interface** for managing service content, deliverables, and sector information
  - **ServiceSector Model** with JSON-based content management for hero sections, challenges, and expertise
- **Contact system** for client inquiries
- **Metrics display** with animated counters
- **Testimonials system** for client feedback
- **Sectors, Industries, and SDG Alignments** for advanced project categorization
- **Cookie consent** integration with Spatie package

## Installation & Setup

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js and NPM
- MySQL/PostgreSQL database

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd fds
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Then edit `.env` to set up your database credentials and other configuration.

5. **Run database migrations**
   ```bash
   php artisan migrate
   ```

6. **Seed the database (optional)**
   ```bash
   php artisan db:seed
   ```

7. **Create storage link**
   ```bash
   php artisan storage:link
   ```

8. **Build frontend assets**
   ```bash
   npm run build
   ```

9. **Start the development server**
   ```bash
   # Start Laravel server and Vite development server
   composer run dev
   ```
   
   Alternatively, you can start each service separately:
   ```bash
   # Laravel server
   php artisan serve

   # Vite development server
   npm run dev
   ```

10. **Visit in your browser**
    ```
    http://localhost:8000
    ```

## Recent Updates

- **Admin Services Management Overhaul**: Completely redesigned admin interface for managing services with modern Festa design system
- **ServiceSector Model Implementation**: Created comprehensive sector management with dynamic content for hero sections, challenges, and expertise areas
- **Layout Improvements**: Updated all admin edit pages with consistent styling, proper form validation, and enhanced user experience
- **Dynamic Sector Content**: Implemented database-driven content for startup and nonprofit sector pages, replacing hardcoded content
- **Enhanced Form Validation**: Fixed checkbox handling, deliverables validation, and improved error messaging across admin forms
- **JavaScript Improvements**: Fixed expertise card management, proper container targeting, and improved form submission handling
- **Database Migrations**: Added comprehensive content fields to service sectors with proper JSON casting for complex data structures
- **Seeder Updates**: Created detailed content seeders for both nonprofit and startup sectors with realistic challenge and expertise data
- **Dynamic Toolkit Page**: Implemented a fully interactive toolkit page with filtering, search, and pagination functionality
- **Real-time Filtering**: Added dynamic filtering by category and design tool with URL parameter management
- **Load More Pagination**: Implemented pagination system showing 3 cards initially with "Load More" functionality
- **Smooth Animations**: Added CSS animations and transitions for better user experience
- **Blog Featured Article System**: Implemented a system to allow admins to select a featured article for the blog homepage
- **Article Rating Functionality**: Added Livewire-based rating system for blog articles
- **Cookie Consent**: Integrated Spatie's cookie consent package for GDPR compliance
- **Performance Optimizations**: Improved database queries and page loading time

## Services Management System

The application now features a comprehensive services management system with the following capabilities:

### 🎯 **Service Types**
- **Project Design**: Strategic design solutions for purpose-driven projects
- **Communication Design**: Clear messaging and visual communication strategies  
- **Campaign Design**: Comprehensive campaign development and execution

### 🏢 **Sector Specializations**
- **Nonprofit Sector**: Tailored solutions for mission-driven organizations
- **Startup Sector**: Strategic design for emerging purpose-driven businesses

### ⚙️ **Admin Management Features**
- **Dynamic Content Management**: Edit hero sections, challenge descriptions, and expertise areas
- **Deliverables Management**: Add, edit, and remove service deliverables with validation
- **Expertise Cards**: Manage expertise items with titles, descriptions, icons, and bullet points
- **Challenge Cards**: Define sector-specific challenges with supporting data and sources
- **Form Validation**: Comprehensive validation for all content types with proper error handling
- **Modern UI**: Consistent Festa design system implementation across all admin interfaces

### 🗄️ **Database Architecture**
- **ServiceSector Model**: JSON-based content storage with proper casting for complex data
- **Service Model**: Relationship management with deliverables and expertise content
- **Migration System**: Comprehensive database structure for content management
- **Seeder System**: Realistic content population for development and testing

## Toolkit System Features

The Toolkit page includes the following key features:

### 🔍 **Dynamic Search & Filtering**
- Real-time search across title, description, category, and tool fields
- Category filtering (Project Design, Communication Design, Campaign Design)
- Design tool filtering (Mailchimp, SEO, Figma, Canva, etc.)
- Debounced search input (300ms delay for optimal performance)
- URL parameter management for bookmarkable searches

### 📄 **Pagination System**
- Shows 3 toolkit cards by default
- "Load More" button loads 3 additional cards per click
- Button automatically hides when all cards are loaded
- Smooth scrolling to newly loaded content
- Loading state with visual feedback

### ✨ **Enhanced User Experience**
- Smooth CSS animations and transitions
- Results counter showing "X of Y tools"
- "No results found" state with clear filters option
- Browser back/forward button support
- Mobile-responsive design
- Staggered card animations for visual appeal

### 🔗 **Technical Features**
- JavaScript class-based architecture (`ToolkitFilter`)
- Component integration with existing Blade components
- Vite-based asset compilation
- Error handling and debugging features
- Performance optimizations with requestAnimationFrame

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

// Utility Pages
Route::get('/privacy', [UtilityController::class, 'privacy'])->name('privacy');
Route::get('/terms', [UtilityController::class, 'terms'])->name('terms');
Route::get('/sitemap', [UtilityController::class, 'sitemap'])->name('sitemap');

// API Route for retrieving SDG information
Route::get('/api/sdg/{id}', function($id) {
    $sdg = \App\Models\SdgAlignment::find($id);
    if (!$sdg) {
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
```

## Admin Routes
The application has a comprehensive admin area with the following routes:

```php
// Admin Routes
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    // Admin Dashboard
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Services Management
    Route::get('/services', [AdminController::class, 'services'])->name('services');
    Route::get('/services/{type}/edit', [App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{type}', [App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('services.update');
    
    // Service Sectors Management
    Route::get('/services/sectors/{type}/edit', [App\Http\Controllers\Admin\ServiceSectorController::class, 'edit'])->name('services.sectors.edit');
    Route::put('/services/sectors/{type}', [App\Http\Controllers\Admin\ServiceSectorController::class, 'update'])->name('services.sectors.update');
    
    // Blog Management
    Route::get('/blog/posts', [BlogController::class, 'posts'])->name('blog.posts');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/posts', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/posts/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/posts/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/posts/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::resource('blog/categories', \App\Http\Controllers\Admin\BlogCategoryController::class)
        ->names('blog.categories')
        ->except(['show']);
    
    // New route for the admin ratings dashboard
    Route::get('/blog/ratings-dashboard', \App\Livewire\Admin\ArticleRatingsDashboard::class)
        ->name('blog.ratings-dashboard');
    
    // Work Management
    Route::prefix('work')->name('work.')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\WorkController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Admin\WorkController::class, 'create'])->name('create');
        Route::post('/', [\App\Http\Controllers\Admin\WorkController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [\App\Http\Controllers\Admin\WorkController::class, 'edit'])->name('edit');
        Route::put('/{id}', [\App\Http\Controllers\Admin\WorkController::class, 'update'])->name('update');
        Route::delete('/{id}', [\App\Http\Controllers\Admin\WorkController::class, 'destroy'])->name('destroy');
        
        // Testimonials Management
        Route::prefix('testimonials')->name('testimonials.')->group(function () {
            Route::get('/', [TestimonialController::class, 'index'])->name('index');
            Route::get('/create', [TestimonialController::class, 'create'])->name('create');
            Route::post('/', [TestimonialController::class, 'store'])->name('store');
            Route::get('/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('edit');
            Route::put('/{testimonial}', [TestimonialController::class, 'update'])->name('update');
            Route::delete('/{testimonial}', [TestimonialController::class, 'destroy'])->name('destroy');
        });
        
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
    
    // Client Management
    Route::resource('clients', \App\Http\Controllers\Admin\ClientController::class);
    
    // Sector Management
    Route::resource('sectors', \App\Http\Controllers\Admin\SectorController::class);
    
    // Industry Management
    Route::resource('industries', \App\Http\Controllers\Admin\IndustryController::class);
    
    // SDG Alignment Management
    Route::resource('sdg-alignments', \App\Http\Controllers\Admin\SdgAlignmentController::class);
    
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
    
    // Pages Management
    Route::get('/about', [AdminController::class, 'about'])->name('about');
    Route::get('/toolkit', [AdminController::class, 'toolkit'])->name('toolkit');
    Route::get('/design-system', [AdminController::class, 'designSystem'])->name('design-system');
    Route::get('/contact', [AdminController::class, 'contact'])->name('contact');
    Route::get('/privacy', [AdminController::class, 'privacy'])->name('privacy');
    Route::get('/terms', [AdminController::class, 'terms'])->name('terms');
    
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
- `ResourcesController`: Handles blog listing, individual post views, and toolkit resources with dynamic filtering
- `ContactController`: Manages contact forms and inquiries
- `UtilityController`: Handles utility pages like privacy policy and terms
- `ClientController`: Manages client information display
- `TeamMemberController`: Handles team member profile display

#### Admin Controllers
- `AdminController`: Manages the admin dashboard and settings
- `WorkController` (Admin): Manages project portfolio content
- `WorkMetricController`: Manages metrics for the work section
- `ClientController` (Admin): Handles client data management
- `BlogController`: Manages blog posts (CRUD operations) and categories.
- `TeamMemberController` (Admin): Manages team member information
- `ImageController`: Handles image uploads for content
- `TestimonialController` (Admin): Manages client testimonials (CRUD)
- `SectorController` (Admin): Manages sectors (CRUD)
- `IndustryController` (Admin): Manages industries (CRUD)
- `SdgAlignmentController` (Admin): Manages SDG alignments (CRUD)

### Frontend Assets

#### JavaScript
- `resources/js/app.js`: Main application JavaScript
- `resources/js/toolkit-filter.js`: Toolkit filtering and pagination functionality
- `resources/js/mobile.js`: Mobile-specific interactions

#### CSS
- `resources/css/app.css`: Main application styles
- `resources/css/toolkit-filters.css`: Toolkit-specific animations and styling

### Models

The application uses the following data models:

- `User`: Authentication and admin user management
- `Project`: Portfolio projects and case studies with attributes like title, description, client, images
- `Client`: Client information and relationships with attributes like name, logo, website
- `TeamMember`: Team member information with attributes like name, position, bio, and social links
- `WorkMetric`: Metrics displayed in the work section with attributes like value, title, description, color class, and display order
- `Testimonial`: Client testimonials with attributes like author name, title, quote, avatar, published status, and display order
- `Article`: Stores blog articles, including title, slug, excerpt, content, image, author and category relationships, publication status, featured article flag, and timestamps.
- `Category`: Stores blog categories, including name, slug, and description.
- `Service`: Service information with deliverables relationship and expertise content
- `ServiceSector`: Sector-specific content with JSON-based storage for hero sections, challenges, and expertise items
- `Sector`: Sectors for project categorization
- `Industry`: Industries for project categorization
- `SdgAlignment`: Sustainable Development Goal alignments for projects
- `ArticleRating`: Stores user ratings for blog articles

### Blog System Features

The blog system includes the following key features:

- Complete article CRUD functionality
- Category management
- Featured article selection (only one can be featured at a time)
- Article rating system using Livewire
- Rich text editor with image upload
- Search functionality
- Category filtering
- Responsive grid and list views

## Component System

### Toolkit Components
- `x-toolkit.hero-section`: Hero section with newsletter signup
- `x-toolkit.filter-section`: Dynamic filtering and search container
- `x-toolkit.select`: Dropdown filter components
- `x-toolkit.grid`: Responsive grid layout for toolkit cards
- `x-toolkit.card`: Individual toolkit resource cards
- `x-toolkit.tags`: Category and tool tags

### Core Components
- `x-core.breadcrumbs`: Navigation breadcrumbs
- `x-core.button`: Reusable button component with variants
- `x-core.text-input`: Form input with icon support
- `x-core.header`: Site header and navigation
- `x-core.footer`: Site footer

## Technologies Used

- **Laravel 12**: PHP framework for backend
- **Blade**: Templating engine with component system
- **Tailwind CSS**: Utility-first CSS framework
- **Alpine.js**: Lightweight JavaScript framework
- **Livewire**: Laravel package for dynamic interfaces
- **Vite**: Modern build tool and development server
- **JavaScript ES6+**: Modern JavaScript features
- **CSS3**: Advanced animations and transitions
- **MySQL/PostgreSQL**: Database

## Development Guidelines

### Code Style
The project follows Laravel's coding standards and PSR-12. You can use Laravel Pint for code style enforcement:

```bash
./vendor/bin/pint
```

### Asset Compilation
Build assets for production:

```bash
npm run build
```

Development mode with hot reloading:

```bash
npm run dev
```

### Testing
Run tests using Pest:

```bash
php artisan test
```

### Contributing
1. Create a feature branch
2. Make your changes
3. Run tests and ensure they pass
4. Build assets and verify functionality
5. Submit a pull request

## Deployment

### Production Build
Before deploying, ensure you build the assets:

```bash
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Environment Setup
Ensure your production environment has:
- PHP 8.2+
- Node.js 16+ (for asset compilation)
- Proper database configuration
- Storage directory permissions

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
