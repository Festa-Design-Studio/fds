# Festa Design Studio

<div align="center">
  <svg class="h-40 w-auto" viewBox="0 0 27 40" preserveAspectRatio="xMidYMid meet">
    <g>
      <path class="cls-2" d="M26,5.66V1.12H1v22.73h4.55v-9.09h2.27v9.09h18.18v-13.64h-4.55v-4.55h4.55ZM7.82,10.21h-2.27v-4.55h2.27v4.55ZM15.2,10.21v9.09h-2.84V5.66h2.84v4.55ZM21.45,19.3h-1.7v-4.55h1.7v4.55Z" fill="#e02829"/>
    </g>
  </svg>
</div>

## 🎯 Project Overview

**Festa Design Studio** is a professionally architected Laravel 12 web application for a purpose-driven design agency. This full-featured platform showcases services, portfolio work, team members, and resources while maintaining a consistent brand identity through a custom design system. Built with modern web technologies and best practices, it features a powerful content management system with a comprehensive admin panel.

## 🛠 Tech Stack

### Backend
- **Laravel 12** - Modern PHP framework
- **PHP 8.2+** - Latest PHP version with improved performance
- **SQLite** (default) / MySQL / PostgreSQL - Flexible database support
- **Livewire 3.6** - Full-stack framework for dynamic interfaces

### Frontend
- **Blade** - Laravel's powerful templating engine
- **Tailwind CSS 3.1** - Utility-first CSS framework
- **Alpine.js 3.4** - Lightweight JavaScript framework
- **Vite 6.2** - Next-generation frontend tooling

### Development & Testing
- **Pest PHP 3.8** - Elegant testing framework
- **Laravel Pint** - Opinionated PHP code style fixer
- **Laravel Pail** - Real-time application log viewer
- **Concurrently** - Run multiple commands concurrently

### Integrations
- **Mailchimp API** - Newsletter subscription management
- **Spatie Cookie Consent** - GDPR compliance
- **Laravel Breeze** - Authentication scaffolding
- **Google Analytics 4** - Advanced analytics and event tracking
- **Intervention/Image** - Image optimization and responsive sizing

## ✨ Key Features

### 🎨 Design & Architecture
- **Component-Based Architecture** - Organized Blade components by domain
- **Custom Festa Design System** - Unique color palette and consistent UI
- **Responsive Design** - Mobile-first approach with Tailwind CSS
- **Atomic Design Principles** - Reusable UI components

### 🔧 Content Management
- **Comprehensive Admin Panel** - Full CRUD operations for all content types
- **Dynamic Content Management** - JSON fields for flexible content storage
- **Custom Rich Text Editor** - Festa-branded editor with image upload and video embedding
- **Advanced SEO System** - HasSeoFields trait with Open Graph, Twitter Cards, and Schema.org
- **Image Optimization Service** - Automatic resizing and responsive image generation
- **Large File Support** - Custom middleware allowing 100MB uploads for content

### 📋 Main Features
- **Services Management**
  - Project Design, Communication Design, Campaign Design
  - Sector specializations (Nonprofits, Startups)
  - Dynamic deliverables and expertise management
  
- **Portfolio/Work Showcase**
  - Project case studies with client associations
  - Sector, industry, and SDG alignment tracking
  - Advanced filtering and categorization
  
- **Blog Platform**
  - Article management with categories
  - Featured article selection
  - IP-based article rating system with admin dashboard
  - Author management
  - Category color configuration system
  - SEO optimization per article
  
- **Team Management**
  - Team member profiles with roles
  - Social media links
  - Profile images
  
- **Resources & Toolkit**
  - Filterable design resources
  - Category and tool-based filtering
  - Real-time search with debouncing
  - Load more pagination
  
- **About Section Management**
  - SDG (Sustainable Development Goals) alignment tracking
  - Partners management system
  - Design for Good content management
  - Our Process section with metrics
  - Mission, values, and impact framework
  
- **Additional Features**
  - Advanced newsletter system with Mailchimp integration
  - Client testimonials with ratings
  - Contact forms with validation
  - Cookie consent (GDPR compliance)
  - Work metrics with animated counters
  - XML sitemap generation for SEO
  - PageSeo model for centralized SEO management
  - Google Analytics 4 with event tracking

## 🚀 Quick Start

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js 16+ and npm
- SQLite (included) or MySQL/PostgreSQL

### Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd fds
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   ```bash
   # SQLite is configured by default
   php artisan migrate --seed
   ```

5. **Create storage link**
   ```bash
   php artisan storage:link
   ```

6. **Start development server**
   ```bash
   # Start all services with one command (recommended)
   composer dev
   
   # This runs:
   # - Laravel development server
   # - Vite development server
   # - Queue worker
   # - Real-time log viewer (Pail)
   ```

7. **Access the application**
   - Application: http://localhost:8000
   - Admin Panel: http://localhost:8000/admin

## 📁 Project Structure

```
fds/
├── app/
│   ├── Http/
│   │   ├── Controllers/      # Request handlers
│   │   │   ├── Admin/        # Admin controllers
│   │   │   └── ...           # Public controllers
│   │   ├── Middleware/       # Custom middleware
│   │   └── Requests/         # Form validation
│   ├── Livewire/            # Livewire components
│   ├── Models/              # Eloquent models
│   └── Services/            # Business logic
├── database/
│   ├── migrations/          # Database schema
│   ├── seeders/             # Test data
│   └── database.sqlite      # Default database
├── resources/
│   ├── css/                 # Stylesheets
│   ├── js/                  # JavaScript files
│   └── views/               # Blade templates
│       ├── admin/           # Admin interface
│       ├── components/      # Reusable components
│       │   ├── core/        # UI elements
│       │   ├── blog/        # Blog components
│       │   ├── work/        # Portfolio components
│       │   ├── services/    # Service components
│       │   ├── about/       # About components
│       │   └── toolkit/     # Resource components
│       └── layouts/         # Layout templates
├── routes/
│   └── web.php             # Application routes
├── public/                 # Public assets
└── tests/                  # Test files
```

## 🏗 Architecture Overview

### Component System
The application uses a comprehensive Blade component system organized by domain:

- **Core Components** - Buttons, forms, inputs, layouts
- **Domain Components** - Blog, work, services, about, toolkit
- **Layout Components** - Headers, footers, navigation
- **Admin Components** - Dashboard widgets, forms, tables

### Data Models & Relationships
- **Service** → ServiceDeliverable (one-to-many)
- **ServiceSector** - JSON fields for dynamic content
- **Project** → Client, Sector, Industry, SDG (many-to-many)
- **Article** → Category, User (belongs-to)
- **ArticleRating** → Article (belongs-to) - IP-based ratings
- **TeamMember** - Standalone profiles with social links
- **ToolkitResource** → ToolkitCategory (many-to-many)
- **WorkMetric** - Display metrics with animations
- **Testimonial** - Client testimonials with ratings
- **AboutSdg** - SDG content management
- **AboutPartner** - Partner organizations
- **DesignForGoodContent** - Social impact content
- **OurProcess** - Process methodology with metrics
- **PageSeo** - Centralized SEO management

### Routing Structure
- **Public Routes** - Home, services, work, about, resources, contact
- **Admin Routes** - `/admin/*` with authentication middleware
- **API Routes** - Minimal endpoints for specific features
- **Utility Routes** - Privacy, terms, sitemaps

## 💻 Development

### Essential Commands

```bash
# Development (runs all services concurrently)
composer dev

# Build assets for production
npm run build

# Run tests
composer test

# Fix code style
./vendor/bin/pint

# Database commands
php artisan migrate:fresh --seed
php artisan db:seed

# Cache warmup for performance
php artisan cache:warmup

# Create admin user
php artisan app:create-admin-user
```

### Individual Services

```bash
# Laravel server only
php artisan serve

# Vite dev server only
npm run dev

# Queue worker
php artisan queue:listen

# Real-time logs
php artisan pail
```

## 🚢 Production Deployment

### Build for Production

```bash
# Install production dependencies
composer install --optimize-autoloader --no-dev
npm ci --production

# Build frontend assets
npm run build

# Cache optimization
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
php artisan migrate --force
```

### Environment Configuration

1. Update `.env` file with production values
2. Set `APP_ENV=production` and `APP_DEBUG=false`
3. Configure database credentials
4. Set up mail configuration
5. Configure storage permissions
6. Set up Mailchimp API credentials:
   ```env
   MAILCHIMP_API_KEY=your-mailchimp-api-key
   MAILCHIMP_LIST_ID=your-mailchimp-list-id
   ```
7. Configure Google Analytics (optional):
   - Add GA4 tracking code to layout files
   - Measurement ID: G-VVPR0KH690

### Database Configuration

```env
# SQLite (default for development)
DB_CONNECTION=sqlite

# MySQL/MariaDB
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

# PostgreSQL
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## 🧪 Testing

```bash
# Run all tests
composer test

# Run specific test file
./vendor/bin/pest tests/Feature/ExampleTest.php

# Run with coverage
./vendor/bin/pest --coverage

# Run tests in parallel
./vendor/bin/pest --parallel
```

## 📝 Code Quality

```bash
# Check code style
./vendor/bin/pint --test

# Fix code style automatically
./vendor/bin/pint

# Analyze code
php artisan code:analyse
```

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Run tests and ensure they pass
5. Fix code style (`./vendor/bin/pint`)
6. Push to the branch (`git push origin feature/amazing-feature`)
7. Open a Pull Request

## 🛠️ Advanced Features

### Performance Optimization
- **Cache Warmup Command** - Pre-loads frequently used data for better performance
- **Image Optimization** - Automatic compression and responsive image generation
- **Database Query Caching** - Strategic caching of expensive queries

### SEO & Analytics
- **Advanced SEO Management** - HasSeoFields trait for comprehensive SEO control
- **XML Sitemap Generation** - Dynamic sitemaps for search engines
- **Google Analytics 4** - Full implementation with event tracking
- **Structured Data** - Schema.org implementation for rich snippets

### Developer Tools
- **Components Showcase** - `/components-showcase` route for UI component preview
- **Test Routes** - Debug routes for testing specific features
- **Concurrent Dev Server** - Run all services with color-coded output
- **Custom Middleware** - ValidatePostSize for large file uploads (100MB)

### Content Features
- **Article Rating Dashboard** - Analytics for blog post engagement
- **Newsletter Management** - Full Mailchimp integration with admin controls
- **SDG Alignment** - Track Sustainable Development Goals alignment
- **Partner Management** - Manage organizational partnerships

## 📚 Documentation

### External Documentation
- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Alpine.js Documentation](https://alpinejs.dev)
- [Livewire Documentation](https://livewire.laravel.com)
- [Pest PHP Documentation](https://pestphp.com)

### Internal Documentation
- **Newsletter System** - See `docs/NEWSLETTER_SUBSCRIPTION_SYSTEM.md`
- **Google Analytics Setup** - See `GOOGLE_ANALYTICS_SETUP_UPDATED.md`
- **Server Configuration** - See `SERVER_CONFIG.md` for upload limits and optimization

## 🔒 Security

If you discover a security vulnerability, please send an email to security@festastudio.com. All security vulnerabilities will be promptly addressed.

## 📄 License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).