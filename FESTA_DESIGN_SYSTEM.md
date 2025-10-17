# Festa Design System Guide

## Overview
This guide provides comprehensive documentation for the Festa Design Studio design system, including typography, color palette, and component implementation patterns. Use this as a reference when implementing designs in new projects.

## Typography System

### Font Family
- **Primary Font**: Inter (system fallback: sans-serif)
- **Weights Available**: 100-900 (thin to black)

### Typography Scale

#### Display & Headings
The typography system uses responsive font sizes with `clamp()` for fluid typography:

| Level | CSS Class | Size | Line Height | Letter Spacing | Usage |
|-------|-----------|------|-------------|----------------|--------|
| Display | `text-display` | clamp(3rem, 8vw, 4rem) | 1.1 | -0.02em | Hero headlines, major announcements |
| H1 | `text-h1` | clamp(2.25rem, 6vw, 3rem) | 1.2 | -0.01em | Page titles, primary headings |
| H2 | `text-h2` | clamp(1.875rem, 5vw, 2.25rem) | 1.3 | -0.01em | Section headings |
| H3 | `text-h3` | clamp(1.5rem, 4vw, 1.875rem) | 1.4 | 0 | Subsection headings |
| H4 | `text-h4` | clamp(1.25rem, 3.5vw, 1.5rem) | 1.4 | 0 | Card titles, minor headings |
| H5 | `text-h5` | clamp(1.125rem, 3vw, 1.25rem) | 1.5 | 0 | Small headings, labels |
| H6 | `text-h6` | clamp(1rem, 2.5vw, 1.125rem) | 1.5 | 0 | Minimal headings, captions |

#### Body Text
| Level | CSS Class | Size | Line Height | Letter Spacing | Usage |
|-------|-----------|------|-------------|----------------|--------|
| Body Large | `text-body-lg` | clamp(1rem, 2.5vw, 1.125rem) | 1.7 | -0.01em | Lead paragraphs, important body text |
| Body | `text-body` | 1rem | 1.6 | 0 | Standard paragraph text |
| Body Small | `text-body-sm` | 0.875rem | 1.5 | 0.01em | Supporting text, captions, metadata |

### Typography Implementation Examples

```html
<!-- Hero Section -->
<h1 class="text-display font-black text-the-end-900">
    Design for Good
</h1>

<!-- Page Title -->
<h1 class="text-h1 font-bold text-the-end-900">
    Our Services
</h1>

<!-- Section Header -->
<h2 class="text-h2 font-semibold text-pepper-green">
    What We Do
</h2>

<!-- Body Paragraph -->
<p class="text-body text-the-end-700 leading-relaxed">
    We create meaningful design solutions...
</p>

<!-- Lead Paragraph -->
<p class="text-body-lg text-the-end-700">
    Transforming ideas into impactful designs...
</p>
```

## Color System

### Primary Colors

#### Chicken Comb (Primary Red)
- **Primary Actions**: `bg-chicken-comb` (#e12729)
- **Hover States**: `bg-chicken-comb-600` (#dc2626)
- **Active States**: `bg-chicken-comb-700` (#b91c1c)
- **Disabled States**: `bg-chicken-comb-200` (#fecaca)

#### Pepper Green (Secondary)
- **Default**: `bg-pepper-green` (#007f4e)
- **Borders**: `border-pepper-green-600`
- **Light Background**: `bg-pepper-green-50`
- **Text**: `text-pepper-green-600`

#### Apocalyptic Orange (Accent)
- **Default**: `bg-apocalyptic-orange` (#f37324)
- **Hover**: `bg-apocalyptic-orange-500` (#f97316)

#### Pot of Gold (Warning/Highlight)
- **Default**: `bg-pot-of-gold` (#f8cc1b)
- **Light**: `bg-pot-of-gold-100` (#fef9c3)

#### Leaf (Success)
- **Default**: `bg-leaf` (#72b043)
- **Light**: `bg-leaf-100` (#e5f2d8)

### Neutral Colors

#### The End (Dark)
- **Primary Text**: `text-the-end-900` (#3d3d3d)
- **Secondary Text**: `text-the-end-700` (#434343)
- **Muted Text**: `text-the-end-600` (#4d4d4d)
- **Default Background**: `bg-the-end` (#2a2a2a)

#### White Smoke (Light)
- **White**: `bg-white-smoke-50` (#ffffff)
- **Light Background**: `bg-white-smoke` (#f6f6f6)
- **Borders**: `border-white-smoke-400` (#d4d4d4)

### Color Usage in Typography

```html
<!-- Primary Heading -->
<h1 class="text-h1 font-bold text-the-end-900">Main Title</h1>

<!-- Colored Accent Heading -->
<h2 class="text-h2 font-semibold text-pepper-green">Section Title</h2>

<!-- Body Text Hierarchy -->
<p class="text-body-lg text-the-end-700">Lead paragraph text</p>
<p class="text-body text-the-end-700">Regular body text</p>
<p class="text-body-sm text-the-end-600">Supporting or muted text</p>

<!-- Eyebrow Text -->
<div class="text-body-sm font-medium uppercase tracking-wider text-pepper-green-600">
    Category Label
</div>
```

## Button Component

### Button Variants

#### Primary Button (Red)
```html
<x-core.button variant="primary" size="large">
    Get Started
</x-core.button>
```
- Background: `bg-chicken-comb-600`
- Text: `text-white-smoke-50`
- Hover: `bg-chicken-comb-700`
- Active: `bg-chicken-comb-800`
- Disabled: `bg-chicken-comb-200`

#### Secondary Button (Green Outline)
```html
<x-core.button variant="secondary" size="large">
    Learn More
</x-core.button>
```
- Border: `border-2 border-pepper-green-600/50`
- Text: `text-the-end-700`
- Hover: `bg-pepper-green-50`
- Active: `bg-pepper-green-100`

#### Neutral Button (Gray Outline)
```html
<x-core.button variant="neutral" size="large">
    Cancel
</x-core.button>
```
- Border: `border-2 border-white-smoke-400`
- Text: `text-the-end-700`
- Hover: `bg-white-smoke-300/50`

### Button Sizes

| Size | CSS Classes | Height | Use Case |
|------|------------|--------|----------|
| Small | `px-3 py-1.5 text-body-sm` | 32px | Inline actions, compact spaces |
| Medium | `px-4 py-2 text-body` | 40px | Secondary actions |
| Large | `px-6 py-3 text-body-lg` | 48px | Primary CTAs, hero sections |

### Button Properties

```blade
<x-core.button 
    variant="primary"      {{-- primary, secondary, neutral --}}
    size="large"          {{-- small, medium, large --}}
    type="button"         {{-- button, submit, reset --}}
    fullWidth="false"     {{-- true for full-width buttons --}}
    disabled="false"      {{-- true to disable --}}
    href="/path"          {{-- converts to anchor link --}}
>
    Button Text
</x-core.button>
```

### Button Implementation Examples

```html
<!-- Primary CTA -->
<x-core.button variant="primary" size="large">
    Start Your Project
</x-core.button>

<!-- Secondary Action -->
<x-core.button variant="secondary" size="medium">
    View Our Work
</x-core.button>

<!-- Full Width Mobile Button -->
<x-core.button variant="primary" size="large" fullWidth="true">
    Contact Us
</x-core.button>

<!-- Disabled State -->
<x-core.button variant="primary" size="large" disabled="true">
    Coming Soon
</x-core.button>

<!-- Button as Link -->
<x-core.button variant="secondary" size="medium" href="/services">
    Explore Services
</x-core.button>
```

## Content Hierarchy Best Practices

### Page Structure
```html
<!-- Page Title -->
<h1 class="text-h1 font-black text-the-end-900 mb-6">
    Page Title
</h1>

<!-- Lead Paragraph -->
<p class="text-body-lg text-the-end-700 mb-8">
    Introduction or summary text that provides context...
</p>

<!-- Section -->
<section class="mb-12">
    <!-- Section Eyebrow -->
    <div class="text-body-sm font-medium uppercase tracking-wider text-pepper-green-600 mb-2">
        Section Category
    </div>
    
    <!-- Section Title -->
    <h2 class="text-h2 font-semibold text-the-end-900 mb-4">
        Section Title
    </h2>
    
    <!-- Section Description -->
    <p class="text-body text-the-end-700 leading-relaxed mb-6">
        Section content...
    </p>
</section>
```

### Card Component
```html
<div class="bg-white-smoke rounded-lg p-6">
    <!-- Card Eyebrow -->
    <span class="text-body-sm font-medium text-pepper-green-600 uppercase tracking-wider">
        Category
    </span>
    
    <!-- Card Title -->
    <h3 class="text-h4 font-semibold text-the-end-900 mt-2 mb-3">
        Card Title
    </h3>
    
    <!-- Card Description -->
    <p class="text-body text-the-end-700 mb-4">
        Card description text...
    </p>
    
    <!-- Card CTA -->
    <x-core.button variant="secondary" size="small">
        Learn More
    </x-core.button>
</div>
```

## Responsive Design Patterns

### Mobile-First Approach
All typography uses `clamp()` for fluid sizing between breakpoints:
- Mobile: Minimum size
- Tablet: Scales proportionally
- Desktop: Maximum size

### Button Responsiveness
```html
<!-- Full width on mobile, auto width on desktop -->
<x-core.button 
    variant="primary" 
    size="large"
    class="w-full md:w-auto"
>
    Responsive Button
</x-core.button>
```

## Accessibility Guidelines

### Color Contrast
- Primary text (`text-the-end-900`) on white background: AAA compliant
- Secondary text (`text-the-end-700`) on white background: AA compliant
- White text on primary colors: AA compliant
- Always test color combinations for WCAG compliance

### Typography
- Maintain clear hierarchy with proper heading levels
- Use semantic HTML elements (h1-h6, p, etc.)
- Ensure line height provides comfortable reading
- Body text minimum 16px (1rem)

### Buttons
- Include focus states with ring utilities
- Provide clear disabled states
- Use descriptive button text
- Maintain minimum touch target size (44x44px)

## Component Utilities

### Common Spacing Patterns
```html
<!-- Section spacing -->
<section class="py-12 md:py-16 lg:py-24">

<!-- Content spacing -->
<div class="space-y-4">  <!-- Consistent vertical spacing -->

<!-- Margin utilities -->
mb-2   <!-- 0.5rem -->
mb-4   <!-- 1rem -->
mb-6   <!-- 1.5rem -->
mb-8   <!-- 2rem -->
mb-12  <!-- 3rem -->
```

### Layout Grids
```html
<!-- Standard container -->
<div class="container mx-auto px-4">

<!-- Two column grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

<!-- Three column grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
```

## Implementation Checklist

When implementing Festa design in a new project:

1. **Typography Setup**
   - [ ] Import Inter font from Google Fonts
   - [ ] Configure Tailwind with custom font sizes
   - [ ] Set up responsive clamp() values

2. **Color Configuration**
   - [ ] Add Festa color palette to Tailwind config
   - [ ] Define color variables for each brand color
   - [ ] Set up color opacity variants

3. **Component Creation**
   - [ ] Create button component with all variants
   - [ ] Set up section header component
   - [ ] Implement consistent spacing system

4. **Content Hierarchy**
   - [ ] Use proper heading levels (h1-h6)
   - [ ] Apply consistent text colors
   - [ ] Maintain clear visual hierarchy

5. **Responsive Design**
   - [ ] Test fluid typography on all devices
   - [ ] Ensure buttons work on mobile
   - [ ] Verify touch targets meet standards

6. **Accessibility**
   - [ ] Check color contrast ratios
   - [ ] Add focus states to interactive elements
   - [ ] Test with screen readers

## Navigation Links

### Link States and Colors

Navigation links use a consistent color system across the application:

#### Default State
- **Text Color**: `text-the-end-700` (#434343)
- **Font Size**: `text-body` (1rem)
- **Transition**: Smooth color transition (150ms)

#### Hover State
- **Text Color**: `text-pepper-green-600` (#00b369)
- **Transition**: `transition-colors duration-150`

#### Active/Current Page
- **Text Color**: `text-chicken-comb-600` (#dc2626)
- **Indication**: Used for current page in breadcrumbs

### Navigation Link Implementation

#### Header Navigation Links
```html
<!-- Desktop Navigation -->
<a href="/services" 
   class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150">
    Services
</a>

<!-- Mobile Navigation -->
<a href="/services" 
   class="block px-3 py-2 text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150">
    Services
</a>
```

#### Footer Navigation Links
```html
<!-- Footer Link -->
<a href="/services/project-design" 
   class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors">
    Project design
</a>
```

#### Breadcrumb Navigation
```html
<!-- Standard Breadcrumb Link -->
<a href="/" 
   class="px-2 py-1 text-body text-the-end-400 hover:text-pepper-green-600 transition">
    Home
</a>

<!-- Current/Active Breadcrumb -->
<span class="px-2 py-1 text-body text-chicken-comb-600" aria-current="page">
    Current Page
</span>
```

### Link Variants by Context

#### Primary Navigation (Header/Footer)
```html
<a href="/path" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150">
    Link Text
</a>
```

#### Secondary Navigation (Breadcrumbs)
```html
<!-- Inactive breadcrumb -->
<a href="/path" class="text-body text-the-end-400 hover:text-pepper-green-600 transition">
    Page Name
</a>

<!-- Active breadcrumb -->
<span class="text-body text-chicken-comb-600">Current Page</span>
```

#### In-Content Links
```html
<!-- Standard in-content link -->
<a href="/path" class="text-pepper-green-600 hover:text-pepper-green-700 underline">
    Learn more
</a>

<!-- Call-to-action link -->
<a href="/path" class="text-chicken-comb-600 hover:text-chicken-comb-700 font-medium">
    Get started →
</a>
```

### Mobile Menu Button States
```html
<!-- Mobile Menu Toggle -->
<button type="button" 
        class="md:hidden inline-flex items-center justify-center p-2 rounded-md 
               text-the-end-700 hover:text-pepper-green-600 
               focus:outline-none focus:ring-2 focus:ring-inset focus:ring-pepper-green-600">
    <!-- Icon -->
</button>
```

### Link Accessibility

#### Focus States
All interactive links should include focus states:
```html
<a href="/path" 
   class="text-the-end-700 hover:text-pepper-green-600 
          focus:outline-none focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2">
    Link Text
</a>
```

#### ARIA Attributes
- Use `aria-current="page"` for current page indicators
- Include `sr-only` text for screen reader context when needed
- Ensure all links have descriptive text or aria-labels

### Navigation Patterns

#### Horizontal Navigation Bar
```html
<nav class="flex items-center space-x-8">
    <a href="/services" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150">Services</a>
    <a href="/work" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150">Work</a>
    <a href="/about" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150">About</a>
    <a href="/contact" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150">Contact</a>
</nav>
```

#### Vertical Navigation List
```html
<ul class="space-y-2">
    <li>
        <a href="/services/project-design" 
           class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors">
            Project design
        </a>
    </li>
    <li>
        <a href="/services/communication-design" 
           class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors">
            Communication design
        </a>
    </li>
</ul>
```

#### Mobile Navigation
```html
<div class="px-2 pt-2 pb-3 space-y-1">
    <a href="/services" 
       class="block px-3 py-2 text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150">
        Services
    </a>
    <a href="/work" 
       class="block px-3 py-2 text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150">
        Work
    </a>
</div>
```

### Color Usage Summary for Links

| Context | Default Color | Hover Color | Active/Current Color |
|---------|--------------|-------------|---------------------|
| Primary Navigation | `text-the-end-700` | `text-pepper-green-600` | - |
| Footer Links | `text-the-end-700` | `text-pepper-green-600` | - |
| Breadcrumbs (inactive) | `text-the-end-400` | `text-pepper-green-600` | - |
| Breadcrumbs (active) | - | - | `text-chicken-comb-600` |
| In-content Links | `text-pepper-green-600` | `text-pepper-green-700` | - |
| CTA Links | `text-chicken-comb-600` | `text-chicken-comb-700` | - |

### Implementation Best Practices

1. **Consistency**: Always use the same color scheme for similar navigation contexts
2. **Transitions**: Include smooth color transitions (150ms) for better UX
3. **Mobile Considerations**: Add appropriate padding for touch targets on mobile
4. **Accessibility**: Always include focus states and appropriate ARIA attributes
5. **Visual Hierarchy**: Use color intensity to indicate hierarchy (darker for primary, lighter for secondary)

## Additional Resources

- **Tailwind Config**: See `tailwind.config.js` for complete setup
- **Component Library**: Browse `/resources/views/components/core/` for examples
- **Live Examples**: Review implemented pages in the Festa application
- **Design Tokens**: All tokens are defined in Tailwind configuration

---

*This guide is part of the Festa Design Studio system. For questions or updates, consult the main project documentation.*