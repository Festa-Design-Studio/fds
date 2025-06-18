# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Festa Design Studio - A Laravel 12 application for a design agency featuring a comprehensive admin panel, component-based architecture, and dynamic content management.

**Tech Stack:**
- Backend: Laravel 12, PHP 8.2+
- Frontend: Blade, Tailwind CSS, Alpine.js, Livewire
- Database: SQLite (default), MySQL/PostgreSQL (production)
- Build: Vite
- Testing: Pest PHP
- Code Style: Laravel Pint

## Essential Commands

### Development
```bash
# Start all development services (recommended)
composer dev

# Individual services
php artisan serve          # Laravel server
npm run dev               # Vite dev server
php artisan queue:listen  # Queue worker
php artisan pail          # Real-time logs
```

### Build & Production
```bash
# Build frontend assets
npm run build

# Install production dependencies
composer install --optimize-autoloader --no-dev
npm ci --production
```

### Testing
```bash
# Run all tests
composer test

# Run specific test
./vendor/bin/pest tests/Feature/ExampleTest.php

# Run with coverage
./vendor/bin/pest --coverage
```

### Code Quality
```bash
# Check code style
./vendor/bin/pint --test

# Fix code style
./vendor/bin/pint
```

### Database
```bash
# Run migrations
php artisan migrate

# Fresh migration with seeders
php artisan migrate:fresh --seed
```

### Database Configuration
- **Default**: SQLite for development (configured in `.env.example`)
- **Database file**: `database/database.sqlite`
- **Switching databases**: Update `.env` file:
  ```
  DB_CONNECTION=mysql  # or pgsql for PostgreSQL
  DB_HOST=127.0.0.1
  DB_PORT=3306         # 5432 for PostgreSQL
  DB_DATABASE=your_database_name
  DB_USERNAME=your_username
  DB_PASSWORD=your_password
  ```

## Architecture Overview

### Routing Structure
- **Public Routes**: Home, services, work, about, resources, contact
- **Admin Routes**: Prefixed with `/admin`, protected by auth middleware
- **API Routes**: Minimal endpoints for specific features

### Admin Panel
- Located at `/admin` with full CRUD for all content
- Uses custom Festa design system with unique color palette
- Grid-based layout: 3-column sidebar, 9-column content
- Consistent form patterns across all admin pages

### Component Architecture
The application uses Blade components organized by domain:

```
resources/views/components/
├── blog/           # Article cards, ratings, categories
├── work/           # Portfolio cards, filters, testimonials
├── services/       # Service cards, sector components
├── about/          # Team cards, partner logos
├── toolkit/        # Resource cards with filtering
└── core/           # Buttons, forms, layouts
```

### Key Models & Relationships
- **Service** → ServiceDeliverable (one-to-many)
- **ServiceSector** - JSON fields for dynamic content
- **Project** - Portfolio items with categories
- **Article** - Blog posts with ratings and categories
- **ToolkitResource** - Design resources with filtering

### Dynamic Content Management
Services and sectors use JSON fields for flexible content:
- Hero sections
- Challenges (with icons)
- Expertise areas
- Custom CTAs

### Livewire Components
- Article rating system
- Admin dashboard statistics
- Dynamic form interactions

### Frontend Patterns
- Vite manages all CSS/JS assets
- Tailwind with custom design tokens
- Alpine.js for lightweight interactions
- Component slots for content injection

## Important Considerations

### When Working with Services
- Services have deliverables (one-to-many relationship)
- Sectors store content as JSON in database fields
- Admin forms use dynamic JavaScript for managing arrays

### Component Usage
- Always check existing components before creating new ones
- Follow the established naming patterns
- Use component slots for flexible content

### Admin Panel Development
- Maintain consistency with existing admin pages
- Use the Festa design system colors and components
- Follow the grid layout pattern (3+9 columns)

### Database Changes
- Always create migrations for schema changes
- Update seeders when adding new features
- Consider JSON fields for flexible content structures

### Asset Management
- Add new JS/CSS files to vite.config.js
- Use npm run dev during development
- Run npm run build before deployment

### Testing Approach
- Write Pest tests for new features
- Follow existing test patterns in tests/Feature
- Use factories for test data generation

## Key Reminder
- Always keep in mind I do not have practical knowledge of PHP, JavaScript, or any Programming language or know how to code them. I only know HTML and Tailwind CSS and vision to build this design studio. This means you must always **READ PROJECT CODEBASE** before implementing a task.