# Model Context Protocol (MCP) for Festa Design Studio

This document defines the Model Context Protocol for building Festa Design Studio from scratch with Claude as an AI assistant.

```
╔═════════════════════════════════╗
║     SYSTEM CONTEXT (role)       ║
║─────────────────────────────────║
║    KNOWLEDGE CONTEXT (facts)    ║
║─────────────────────────────────║
║    TASK CONTEXT (goal)          ║
║─────────────────────────────────║
║    INTERACTION CONTEXT (history)║
║─────────────────────────────────║
║    PROMPT (current request)     ║
╚═════════════════════════════════╝
```

## SYSTEM CONTEXT (role)

**Claude's Role:**
- AI Development Assistant for Festa Design Studio
- Full-stack Laravel developer with expertise in modern web development
- Component architect following atomic design principles
- Code generator that creates production-ready, maintainable code
- Technical translator for non-technical founder

**User's Role:**
- Creative Director with HTML/Tailwind CSS knowledge
- Vision holder for design studio focused on social impact
- No PHP, JavaScript, or backend programming knowledge
- Requires Claude to handle all technical implementation

**Operating Principles:**
- Claude must READ project codebase before implementing any task
- All code must be self-explanatory with clear naming conventions
- Follow Laravel 12 best practices and conventions
- Implement features incrementally with working checkpoints
- Prioritize visual feedback and admin control

## KNOWLEDGE CONTEXT (facts)

### Project Foundation
```
Project: Festa Design Studio
Type: Design Agency Website with Admin Panel
Focus: Social Impact Organizations
Stack: Laravel 12, PHP 8.2+, Blade, Tailwind CSS, Alpine.js, Livewire
Database: SQLite (dev), MySQL/PostgreSQL (production)
```

### Technical Architecture

**Backend Structure:**
```
app/
├── Http/
│   ├── Controllers/       # Route handlers
│   │   ├── Admin/        # Admin CRUD controllers
│   │   └── Public/       # Frontend controllers
│   ├── Requests/         # Form validation
│   └── Middleware/       # Auth, admin checks
├── Models/               # Eloquent models
├── Livewire/            # Interactive components
└── Services/            # Business logic
```

**Frontend Structure:**
```
resources/views/
├── components/          # Reusable Blade components
│   ├── core/           # Atomic components (buttons, inputs)
│   ├── about/          # About section components
│   ├── blog/           # Blog components
│   ├── services/       # Service components
│   ├── toolkit/        # Resource components
│   └── work/           # Portfolio components
├── layouts/            # Page templates
├── admin/              # Admin panel views
└── pages/              # Public pages
```

### Festa Design System

**Color Tokens:**
```css
/* Primary Colors */
--pepper-green: #606C38
--leaf: #283618
--pot-of-gold: #FEFAE0
--chicken-comb: #DDA15E
--apocalyptic-orange: #BC6C25

/* Neutral Colors */
--the-end: #1A1A1A (900-100)
--white-smoke: #F5F5F5 (100-900)
```

**Typography Scale:**
```css
--text-h1: 3.5rem (56px)
--text-h2: 3rem (48px)
--text-h3: 2.5rem (40px)
--text-h4: 2rem (32px)
--text-h5: 1.5rem (24px)
--text-h6: 1.25rem (20px)
--text-body-lg: 1.125rem (18px)
--text-body: 1rem (16px)
--text-body-sm: 0.875rem (14px)
--text-body-xs: 0.75rem (12px)
```

**Component Patterns:**
```blade
<!-- Card Pattern -->
<article class="bg-white-smoke-100 rounded-2xl border border-white-smoke-300 p-8 hover:shadow-lg transition-all">
    <!-- Content -->
</article>

<!-- Section Pattern -->
<section class="py-24 bg-white-smoke-50">
    <div class="container mx-auto px-6 lg:px-8">
        <!-- Header -->
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-h2 lg:text-h1 font-bold text-the-end-900 mb-6">Title</h2>
            <p class="text-body-lg text-the-end-700">Description</p>
        </div>
        <!-- Content Grid -->
    </div>
</section>
```

### Database Schema Patterns

**Model Structure:**
```php
// Basic Model Pattern
class ModelName extends Model
{
    protected $fillable = ['field1', 'field2'];
    
    // Relationships
    public function relatedModel() {
        return $this->hasMany(RelatedModel::class);
    }
    
    // Scopes
    public function scopeActive($query) {
        return $query->where('is_active', true);
    }
}
```

**Migration Pattern:**
```php
Schema::create('table_name', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('description');
    $table->json('dynamic_content')->nullable();
    $table->boolean('is_active')->default(true);
    $table->integer('order_index')->default(0);
    $table->timestamps();
});
```

### Admin Panel Architecture

**CRUD Pattern:**
1. Index - List all items with actions
2. Create - Form for new items
3. Edit - Form to modify existing items
4. Store/Update - Process form submissions
5. Destroy - Delete items

**Admin Layout:**
- 12-column grid system
- 3-column sidebar navigation
- 9-column main content area
- Consistent form patterns
- Festa Design System styling

## TASK CONTEXT (goal)

### Primary Objectives

1. **Build a Design Agency Website**
   - Professional portfolio showcase
   - Service offerings presentation
   - Blog for thought leadership
   - Resource toolkit
   - Client case studies

2. **Create Comprehensive Admin Panel**
   - Content management for all sections
   - Dynamic page builders
   - Media management
   - SEO controls
   - User management

3. **Implement Festa Design System**
   - Consistent visual language
   - Reusable component library
   - Responsive design
   - Accessibility compliance
   - Performance optimization

4. **Focus on Social Impact**
   - Showcase work with nonprofits
   - Highlight SDG alignment
   - Design for good messaging
   - Impact measurement

### Development Phases

**Phase 1: Foundation**
```
1. Laravel installation and configuration
2. Database design and migrations
3. Authentication system
4. Basic routing structure
5. Layout templates
```

**Phase 2: Core Features**
```
1. Home page with hero and sections
2. Services pages with dynamic content
3. Work/Portfolio showcase
4. About pages (team, process, values)
5. Contact forms
```

**Phase 3: Content Management**
```
1. Blog system with categories
2. Resource toolkit
3. Client testimonials
4. Team member profiles
5. SEO management
```

**Phase 4: Advanced Features**
```
1. Newsletter integration
2. Search functionality
3. Analytics dashboard
4. Performance optimization
5. Production deployment
```

## INTERACTION CONTEXT (history)

### Successful Patterns

**Component Creation Workflow:**
```
1. Analyze existing components for patterns
2. Create reusable Blade component
3. Use props for dynamic content
4. Implement responsive design
5. Add hover states and transitions
6. Test across breakpoints
```

**CRUD Implementation Pattern:**
```
1. Create Model with relationships
2. Generate migration with proper fields
3. Build controller with resource methods
4. Design admin views (index, create, edit)
5. Add routes with middleware
6. Create seeders for test data
7. Implement form validation
```

**Database-Driven Content:**
```
1. Design flexible schema (often with JSON fields)
2. Create scoped queries in models
3. Pass collections to Blade components
4. Handle empty states gracefully
5. Implement admin controls
```

### Common Challenges & Solutions

**Challenge:** Dynamic content management
**Solution:** JSON fields for flexible data structures

**Challenge:** Consistent styling across sections
**Solution:** Core components with standardized props

**Challenge:** Complex form handling
**Solution:** Laravel Request validation classes

**Challenge:** Interactive features
**Solution:** Livewire components for reactivity

### Development Best Practices

1. **Always Read First**
   - Check existing patterns before creating new ones
   - Review similar implementations
   - Understand component hierarchy

2. **Incremental Development**
   - Build features in small, testable chunks
   - Verify each step works before proceeding
   - Maintain working state throughout

3. **Component Reusability**
   - Extract common patterns into core components
   - Use slots for flexible content
   - Implement consistent prop interfaces

4. **Admin Consistency**
   - Follow established CRUD patterns
   - Maintain visual consistency
   - Provide clear user feedback

## PROMPT (current request)

### Effective Request Structure

**Template for New Features:**
```
Task: [Specific feature to implement]
Context: [Where it fits in the project]
Requirements:
- [Specific requirement 1]
- [Specific requirement 2]
Visual Reference: [If applicable]
Expected Outcome: [What success looks like]
```

**Example Requests:**

**Good Request:**
```
"Create a testimonial management system for the admin panel. 
It should allow adding client testimonials with:
- Client name and company
- Testimonial text
- Rating (1-5 stars)
- Project association
- Display order control"
```

**Better Request:**
```
"Implement testimonial management following our CRUD pattern:
1. Model: Testimonial with project relationship
2. Admin views: Standard index/create/edit
3. Frontend: Testimonial carousel component
4. Use Festa Design System styling
Reference: Similar to blog post management"
```

### Context Inheritance

When continuing work, reference:
1. Previous implementations
2. Established patterns
3. Design decisions made
4. Technical constraints discovered

### Priority Framework

**High Priority:**
- User-facing features
- Admin functionality
- Data integrity
- Security concerns

**Medium Priority:**
- UI enhancements
- Performance optimizations
- Code refactoring
- Documentation

**Low Priority:**
- Nice-to-have features
- Advanced animations
- Edge case handling
- Future considerations

---

## Implementation Checklist

When starting a new feature:
- [ ] Read relevant existing code
- [ ] Check component library for reusable parts
- [ ] Plan database schema if needed
- [ ] Create migrations and models
- [ ] Build admin interface first
- [ ] Implement frontend display
- [ ] Add validation and error handling
- [ ] Test responsive design
- [ ] Verify Festa Design System compliance
- [ ] Create seeders for demo content

## Command Reference

```bash
# Development
composer dev                    # Start all services
php artisan serve              # Laravel server
npm run dev                    # Vite dev server

# Database
php artisan migrate            # Run migrations
php artisan migrate:fresh --seed # Reset with seeds
php artisan make:model ModelName -mfc # Model, migration, factory, controller

# Code Quality
./vendor/bin/pint              # Fix code style
composer test                  # Run tests

# Production
npm run build                  # Build assets
php artisan optimize           # Optimize for production
```

## Success Metrics

A well-implemented feature should:
1. Follow established patterns
2. Be fully manageable via admin panel
3. Display correctly on all devices
4. Use Festa Design System consistently
5. Include proper validation
6. Have seeders for testing
7. Be documented in code
8. Maintain visual harmony with existing sections