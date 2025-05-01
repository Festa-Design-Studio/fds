# Festa Design Studio

A purpose-driven design agency website built with Laravel, Blade, and Tailwind CSS.

## Project Overview

Festa Design Studio is a comprehensive website for a design agency specializing in project design, communication design, and campaign design for purpose-driven organizations. The platform showcases Festa's services, work portfolio, blog, and resources while implementing a sophisticated design system.

## Key Features

- **Component-based architecture** using Blade components
- **Custom design system** with Tailwind CSS
- **Responsive layouts** for all device sizes
- **Admin panel** for content management
- **Blog platform** for sharing insights
- **Portfolio showcase** for displaying work
- **Services section** highlighting capabilities
- **Contact system** for client inquiries

## Tech Stack

- **Backend**: Laravel 10+
- **Frontend**: Blade templates, Tailwind CSS
- **Database**: MySQL
- **Asset Management**: Vite
- **Deployment**: To be determined

## Project Structure

### Routes

The application follows RESTful routing practices with the following main sections:

- **Home**: Primary landing page
- **Services**: Design offerings and sector specializations
- **Work**: Portfolio and case studies
- **About**: Team, process, and mission information
- **Resources**: Blog and design toolkit resources
- **Contact**: Client inquiry forms
- **Admin**: Content management system

### Component Library

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

### Models

Key data models include:

- **Project**: Portfolio projects and case studies
- **Client**: Client information and relationships
- **User**: Authentication and admin user management

### Controllers

The application logic is organized into controller groups:

- **Public Controllers**: Handle frontend page rendering
- **Admin Controllers**: Manage content and settings in the admin panel

## Development Setup

### Prerequisites

- PHP 8.1+
- Composer
- Node.js and NPM
- MySQL

### Installation

1. Clone the repository:
   ```bash
   git clone [repository-url]
   cd fds
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install frontend dependencies:
   ```bash
   npm install
   ```

4. Create environment file:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. Configure database settings in `.env` file
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=festa_design
   DB_USERNAME=[your-username]
   DB_PASSWORD=[your-password]
   ```

6. Run migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```

7. Start development servers:
   ```bash
   # Terminal 1: Start Laravel server
   php artisan serve
   
   # Terminal 2: Watch for asset changes
   npm run dev
   ```

8. Access the site at `http://localhost:8000`

## Component Examples

For detailed component usage examples, refer to the [Component Documentation](resources/views/components/README.md).

## License

This project is proprietary and confidential. All rights reserved.

# Festa Component Library

This directory contains reusable Blade components for the Festa Design Studio website. Components follow the Tailwind CSS conventions and implement Festa's design system tokens.

## Directory Structure

```
/components
  /core         - Base elements used across the entire site
  /blog         - Blog specific components
  /work         - Portfolio components
  /services     - Service page components
  /toolkit      - Resource toolkit components
  /about        - About page components
  /home         - Homepage components
  /contact      - Contact form components
```

## Core Components Usage

### Button Component

```blade
<x-core.button>Default Button</x-core.button>

<x-core.button variant="primary" size="large">
    Primary Large Button
</x-core.button>

<x-core.button variant="secondary" size="medium">
    Secondary Medium Button
</x-core.button>

<x-core.button variant="neutral" size="small" disabled="true">
    Disabled Small Neutral Button
</x-core.button>

<x-core.button variant="primary" fullWidth="true">
    Full Width Button
</x-core.button>
```

### Input Component

```blade
<x-core.input 
    name="email"
    label="Email Address"
    type="email"
    placeholder="Enter your email"
/>

<!-- With leading icon -->
<x-core.input 
    name="search"
    placeholder="Search..."
    :leadingIcon="true"
>
    <x-slot name="leadingIcon">
        <svg class="h-5 w-5 text-the-end-400" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
        </svg>
    </x-slot>
</x-core.input>
```

### Password Input Component

```blade
<x-core.password-input 
    name="password"
    label="Password"
    placeholder="Enter your password"
    required
/>

<!-- Customized label -->
<x-core.password-input 
    name="confirm-password"
    label="Confirm Password"
    placeholder="Re-enter your password"
/>
```

### Select Component

```blade
<x-core.select 
    name="options" 
    label="Select Option"
    placeholder="Choose an option"
>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
</x-core.select>
```

### Radio Component

```blade
<div class="space-y-2">
    <x-core.radio 
        name="choices" 
        value="option1" 
        label="Option 1" 
        checked="true"
    />
    
    <x-core.radio 
        name="choices" 
        value="option2" 
        label="Option 2" 
    />
    
    <x-core.radio 
        name="choices" 
        value="option3" 
        label="Option 3" 
        disabled="true"
    />
</div>
```

### File Upload Component

```blade
<x-core.file-upload 
    name="document" 
    label="Upload Document" 
    accept=".pdf,.doc,.docx"
/>
```

### Tag Component

```blade
<!-- Basic Tags -->
<x-core.tag>Default Tag</x-core.tag>

<x-core.tag variant="success">Success</x-core.tag>

<x-core.tag variant="warning">Warning</x-core.tag>

<x-core.tag variant="error">Error</x-core.tag>

<x-core.tag variant="info">Info</x-core.tag>

<!-- Tags with Icons -->
<x-core.tag :withIcon="true">Default with Icon</x-core.tag>

<x-core.tag variant="success" :withIcon="true">Success with Icon</x-core.tag>
```

### Textarea Component

```blade
<x-core.textarea 
    name="message"
    label="Message"
    placeholder="Tell us about your project"
    rows="5"
    required
></x-core.textarea>

<!-- Larger textarea -->
<x-core.textarea 
    name="description"
    label="Detailed Description"
    placeholder="Provide more details here..."
    rows="8"
></x-core.textarea>
```

## Blog Components

### Category Component

```blade
<!-- Basic Categories -->
<x-blog.category>Default Category</x-blog.category>

<x-blog.category type="design">Design tips</x-blog.category>

<x-blog.category type="trends">Trends</x-blog.category>

<x-blog.category type="strategy">Strategy</x-blog.category>

<x-blog.category type="case-studies">Case Studies</x-blog.category>
```

### Article Card Component

```blade
<x-blog.article-card 
    title="The Future of Sustainable Design"
    excerpt="Discover how sustainable design practices are shaping the future of our industry."
    date="Aug 15, 2023"
    readTime="5 min read"
    image="path/to/image.jpg"
    category="Design tips"
    categoryType="design"
    author="John Doe"
    authorTitle="Design Lead"
    authorAvatar="path/to/avatar.jpg"
    url="/blog/sustainable-design"
/>
```

### Featured Article Component

```blade
<x-blog.featured-article 
    title="How Purpose-Driven Design Transformed a Nonprofit's Digital Presence"
    excerpt="Discover how our collaborative approach helped a community organization."
    image="path/to/image.jpg"
    category="Case Study"
    categoryType="case-studies"
    author="Sarah Johnson"
    authorTitle="Lead Designer"
    authorAvatar="path/to/avatar.jpg"
    date="June 12, 2023"
    url="/blog/nonprofit-case-study"
/>
```

### Compact Article Card Component

```blade
<x-blog.compact-card 
    title="Accessibility in Design Systems"
    date="Aug 15, 2023"
    readTime="5 min read"
    image="path/to/image.jpg"
    url="/blog/accessibility"
/>
```

### Article Categories Layout Component

```blade
<!-- With predefined categories -->
<x-blog.categories-layout 
    :categories="[
        ['type' => 'design', 'label' => 'Design tips'],
        ['type' => 'trends', 'label' => 'Trends'],
        ['type' => 'strategy', 'label' => 'Strategy'],
        ['type' => 'case-studies', 'label' => 'Case Studies']
    ]"
/>

<!-- With custom slot content -->
<x-blog.categories-layout :justifyCenter="false">
    <x-blog.category type="design">Design</x-blog.category>
    <x-blog.category type="trends">Trends</x-blog.category>
</x-blog.categories-layout>
```

### Article Grid Section Component 

```blade
<x-blog.grid-section 
    title="Our Blog"
    subtitle="Insights and inspiration from the world of design"
    :categories="[
        ['type' => 'design', 'label' => 'Design tips'],
        ['type' => 'trends', 'label' => 'Trends']
    ]"
>
    <!-- Add article cards as children -->
    <x-blog.article-card 
        title="The Future of Sustainable Design"
        excerpt="Discover how sustainable design practices are shaping the future."
        date="Aug 15, 2023"
        readTime="5 min read"
        image="path/to/image.jpg"
        category="Design tips"
        categoryType="design"
    />
    
    <!-- More article cards -->
</x-blog.grid-section>
``` 

## Work Components

### Hero Component

```blade
<x-work.hero 
    title="Our Portfolio of Impact"
    description="Explore our collection of purpose-driven projects that create meaningful change."
/>

<!-- With additional content slot -->
<x-work.hero 
    title="Our Portfolio"
    description="Creative solutions for purpose-driven organizations."
>
    <x-core.button variant="primary" size="large">
        View all projects
    </x-core.button>
</x-work.hero>
```

### Filter Component

```blade
<x-work.filter 
    :sectorOptions="[
        'nonprofit' => 'Nonprofit',
        'startup' => 'Startup',
        'education' => 'Education'
    ]"
    :industryOptions="[
        'tech' => 'Technology',
        'healthcare' => 'Healthcare'
    ]"
    :sdgOptions="[
        'sdg1' => 'No Poverty',
        'sdg3' => 'Good Health & Well-being'
    ]"
    searchPlaceholder="Search projects..."
/>
```

### Tag Component

```blade
<!-- Individual Tags -->
<x-work.tag type="sector" label="Nonprofit" />
<x-work.tag type="industry" label="Healthcare" />
<x-work.tag type="sdg" label="Climate Action" />
```

### Tag Group Component

```blade
<x-work.tag-group 
    :tags="[
        ['type' => 'sector', 'label' => 'Nonprofit'],
        ['type' => 'industry', 'label' => 'Healthcare'],
        ['type' => 'sdg', 'label' => 'Climate Action']
    ]"
/>

<!-- With additional tags through slot -->
<x-work.tag-group 
    :tags="[['type' => 'sector', 'label' => 'Nonprofit']]"
>
    <x-work.tag type="industry" label="Education" />
</x-work.tag-group>
```

### Card Component

```blade
<x-work.card 
    title="Eco-Friendly Packaging Design"
    description="Redesigned packaging to reduce environmental impact while maintaining product protection and brand appeal."
    image="path/to/image.jpg"
    url="/work/eco-friendly-packaging"
    :tags="[
        ['type' => 'sector', 'label' => 'Consumer Goods'],
        ['type' => 'sdg', 'label' => 'Responsible Consumption']
    ]"
/>
```

### Grid Component

```blade
<x-work.grid 
    title="Featured Projects"
    :items="[
        [
            'title' => 'Community Engagement Platform',
            'description' => 'Built a digital platform that connected community organizations with volunteers.',
            'image' => 'path/to/image.jpg',
            'url' => '/work/community-platform',
            'tags' => [
                ['type' => 'sector', 'label' => 'Nonprofit'],
                ['type' => 'industry', 'label' => 'Community']
            ]
        ],
        // Additional items...
    ]"
>
    <!-- Optional extra content -->
    <x-slot name="footer">
        <x-core.button variant="secondary" size="large">
            Load More Projects
        </x-core.button>
    </x-slot>
</x-work.grid>
```

### Testimonial Components

```blade
<!-- Individual Testimonial -->
<x-work.testimonial 
    quote="The design system has completely transformed how we approach our projects."
    authorName="Elena Rodriguez"
    authorTitle="Lead Designer, TechCorp"
/>

<!-- Testimonial Section with Load More -->
<div x-data="{ 
    testimonials: @json($testimonials),
    displayedCount: 3,
    get displayedTestimonials() {
        return this.testimonials.slice(0, this.displayedCount);
    },
    loadMore() {
        this.displayedCount += 3;
    },
    get hasMore() {
        return this.displayedCount < this.testimonials.length;
    }
}">
    <x-work.testimonial-section 
        title="What Our Partners Say"
        description="Real stories from organizations making a difference."
    >
        <template x-for="testimonial in displayedTestimonials" :key="testimonial.id">
            <x-work.testimonial 
                x-bind:quote="testimonial.quote"
                x-bind:authorName="testimonial.author_name"
                x-bind:authorTitle="testimonial.author_title"
            />
        </template>

        <div class="mt-8 text-center" x-show="hasMore">
            <x-core.button 
                variant="secondary" 
                size="large"
                @click="loadMore"
            >
                Load more testimonials
            </x-core.button>
        </div>
    </x-work.testimonial-section>
</div>
```

The testimonial components support:
- Individual testimonial display with author details
- Optional author avatars
- Grouped testimonial sections
- Dynamic loading with "Load more" functionality
- Maintained display order
- Smooth loading animations using Alpine.js

### Metrics Component

```blade
<x-work.metrics 
    :metrics="[
        [
            'value' => '500+',
            'title' => 'Organizations',
            'description' => 'Empowered through purposeful design',
            'colorClass' => 'text-chicken-comb-600'
        ],
        [
            'value' => '98%',
            'title' => 'Satisfaction',
            'description' => 'From our partner organizations',
            'colorClass' => 'text-pepper-green-600'
        ],
        [
            'value' => '1M+',
            'title' => 'Lives Impacted',
            'description' => 'Through our collaborative work',
            'colorClass' => 'text-apocalyptic-orange-600'
        ]
    ]"
/> 
```

## Services Components

### Sector Card Component

```blade
<x-services.sector-card
    title="Nonprofit"
    description="Transform your vision into impactful design solutions that drive meaningful change."
    link="/services/sectors/nonprofits"
    linkText="Learn more"
>
    <x-slot name="icon">
        <!-- SVG icon can be placed here -->
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
            <!-- SVG path data -->
        </svg>
    </x-slot>
</x-services.sector-card>
```

### Sector Card Grid Component

```blade
<x-services.sector-card-grid>
    <!-- Place multiple sector cards here -->
    <x-services.sector-card title="Nonprofit" />
    <x-services.sector-card title="Startup" />
    <!-- Add more sector cards as needed -->
</x-services.sector-card-grid>
```

### Service Card Component

```blade
<x-services.service-card
    title="Project Design"
    description="We craft comprehensive design solutions tailored to your project's unique needs."
    icon="project-design"
    link="/services/project-design"
/>
```

### Service Mini Card Component

```blade
<x-services.service-mini-card
    title="UX Research"
    icon="research"
/>
```

### Service Card Grid Component

```blade
<x-services.service-card-grid>
    <!-- Place multiple service cards here -->
    <x-services.service-card title="Project Design" />
    <x-services.service-card title="Communication Design" />
    <!-- Add more service cards as needed -->
</x-services.service-card-grid>
```

### Service Mini Cards Grid Component

```blade
<x-services.service-mini-cards-grid>
    <!-- Place multiple mini service cards here -->
    <x-services.service-mini-card title="UX Research" />
    <x-services.service-mini-card title="UI Design" />
    <!-- Add more mini service cards as needed -->
</x-services.service-mini-cards-grid>
```

### Feature Component

```blade
<x-services.feature
    title="User-Centered Design"
    description="We place users at the heart of our design process, creating intuitive and engaging experiences."
/>
```

### Sectors We Serve Section Component

```blade
<x-services.sectors-we-serve-section
    title="Sectors We Serve"
    description="We specialize in creating impactful design solutions for these industries."
>
    <!-- Sector cards go here -->
    <x-services.sector-card-grid>
        <!-- Your sector cards -->
    </x-services.sector-card-grid>
</x-services.sectors-we-serve-section>
```

### Industry Expertise Section Component

```blade
<x-services.industry-expertise-section
    title="Industry Expertise"
    description="Our targeted design solutions are tailored to specific industry needs."
>
    <!-- Content goes here -->
</x-services.industry-expertise-section>
```

## Toolkit Components

### Hero Section Component

```blade
<x-toolkit.hero-section />
```

### Tags Component

```blade
<!-- Project design tag (green) -->
<x-toolkit.tags>
  Project design
</x-toolkit.tags>

<!-- Design tools tag requires adding the chicken-comb color class variant manually -->
<span
  class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200"
>
  Logframe
</span>
```

### Card Component

```blade
<x-toolkit.card
  title="Fundraising email marketing for nonprofits"
  description="Create detailed profiles of your ideal audience to craft messaging that resonates with their values and needs."
>
  <x-slot name="image">
    <svg class="w-16 h-auto" viewBox="0 0 512 512"><title>mailchimp</title><g><rect width="512" height="512" fill="#ffe01b" rx="15%"></rect><path fill="#1e1e1e" d="M418 306l-6-17s25-38-37-51c0 0 4-47-18-69 48-47 37-118-72-72C229-10 13 241 103 281c-9 12-9 72 53 78 42 90 144 96 203 69s93-113 59-122zm-263 40c-51-5-56-75-12-82s55 86 12 82zm-15-95c-14 0-31 19-31 19-68-33 123-252 164-167 0 0-100 48-133 148zm200 85c0-4-21 6-59-7 3-21 48 18 123-33l6 21c28-5 0 90-90 89-73-1-96-76-56-117 8-8-29-24-22-59 3-15 16-37 49-31s40-24 62-13 9 53 12 59 35 7 41 24-41 54-114 44c-17-2-27 20-16 34 22 32 112 11 127-20-38 29-116 40-122 9 22 10 59 4 59 0zm-58-6zm-73-152c22-27 51-43 51-43l-6 15s21-16 44-16l-8 8c26 1 37 11 37 11s-61-18-118 25zm135 39c13-1 9 29 9 29h-8s-14-28-1-29zm-59 33c-9 1-19 6-18 2 4-16 41-12 40 2s-9-6-22-4zm21 12c1 2-7 0-13 1s-12 4-12 2 23-11 25-3zm20 3c3-6 15 0 12 6s-15 0-12-6zm25 2c-6 0-6-13 0-13s6 14 0 14zm-180 53c3 3-6 9-13 4s8-29-10-35-13 17-18 14 7-35 28-22-6 33 6 39 5-2 7 0z"></path></g></svg>
  </x-slot>
  
  <x-slot name="tags">
    <x-toolkit.tags>Project design</x-toolkit.tags>
    
    <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
      Logframe
    </span>
  </x-slot>
  
  <!-- CTA Button could go in the default slot -->
  <x-core.button variant="neutral" size="small">View Tool</x-core.button>
</x-toolkit.card>
```

### Grid Component

```blade
<x-toolkit.grid>
  <!-- Place toolkit cards here -->
  <x-toolkit.card 
    title="Tool 1" 
    description="Tool description"
  />
  <x-toolkit.card 
    title="Tool 2" 
    description="Tool description"
  />
  <x-toolkit.card 
    title="Tool 3" 
    description="Tool description"
  />
</x-toolkit.grid>
```

### Filter Section Component

```blade
<x-toolkit.filter-section>
  <x-slot name="filters">
    <x-toolkit.select 
      :options="[
        'project-design' => 'Project design',
        'communication-design' => 'Communication design',
        'campaign-design' => 'Campaign design'
      ]"
      placeholder="Toolkits"
    />
    
    <x-toolkit.select 
      :options="[
        'education' => 'Mailchimp',
        'healthcare' => 'Logframe',
        'research-and-development' => 'Google Ads display'
      ]"
      placeholder="Design tools"
    />
  </x-slot>
  
  <x-slot name="search">
    <x-core.input 
      name="search"
      placeholder="Search tools..."
      :leadingIcon="true"
    >
      <x-slot name="leadingIcon">
        <svg class="h-5 w-5 text-the-end-400" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
        </svg>
      </x-slot>
    </x-core.input>
  </x-slot>
</x-toolkit.filter-section>
```

## About Components

### Hero Section Component

```blade
<x-about.hero-section />
```

### Team Card Component

```blade
<x-about.team-card
  name="Abayomi Ogundipe"
  position="Founder & Design lead"
  image="/src/img/Abayomi-Ogundipe.jpg"
  linkedin="https://linkedin.com/in/abayomi-ogundipe"
>
  <!-- Optional additional content -->
  <x-core.button variant="neutral" size="small">
    View Profile
  </x-core.button>
</x-about.team-card>
```

### Team Section Component

```blade
<x-about.team-section title="Our Amazing Team">
  <x-slot name="header">
    <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto mt-4">
      Meet the talented individuals behind our creative design solutions.
    </p>
  </x-slot>
  
  <!-- Team cards -->
  <x-about.team-card
    name="Abayomi Ogundipe"
    position="Founder & Design lead"
    image="/src/img/Abayomi-Ogundipe.jpg"
    linkedin="https://linkedin.com/in/abayomi-ogundipe"
  />
  
  <x-about.team-card
    name="Sarah Johnson"
    position="Project Manager"
    image="/src/img/Sarah-Johnson.jpg"
    linkedin="https://linkedin.com/in/sarah-johnson"
  />
  
  <x-about.team-card
    name="Michael Chen"
    position="UX Designer"
    image="/src/img/Michael-Chen.jpg"
    linkedin="https://linkedin.com/in/michael-chen"
  />
</x-about.team-section>
```

### Partner Logo Component

```blade
<x-about.partner-logo>
  <svg class="h-28 w-auto opacity-75 hover:opacity-100 transition-opacity" viewBox="0 0 337.6 72">
    <!-- Microsoft logo SVG content here -->
  </svg>
</x-about.partner-logo>
```

### Partners Section Component

```blade
<x-about.partners-section 
  title="Organizations We've Worked With" 
  description="We're proud to collaborate with leading organizations across various sectors."
>
  <x-about.partner-logo>
    <!-- Logo 1 -->
  </x-about.partner-logo>
  
  <x-about.partner-logo>
    <!-- Logo 2 -->
  </x-about.partner-logo>
  
  <x-about.partner-logo>
    <!-- Logo 3 -->
  </x-about.partner-logo>
</x-about.partners-section>
```

## Home Components

### Hero Section Component

```blade
<x-home.hero-section>
  <x-slot name="button">
    <x-core.button variant="primary" size="large">
      Why We Design for Good
    </x-core.button>
  </x-slot>
</x-home.hero-section>
```

### Work Section Component

```blade
<x-home.work-section
  title="Our Recent Work"
  description="Creative design solutions that drive real impact"
  buttonText="See All Projects"
  buttonUrl="/work"
>
  <!-- Work card or content -->
  <img src="/path/to/project-image.jpg" alt="Recent Project" class="rounded-2xl shadow-lg" />
</x-home.work-section>
```

### Insights Section Component

```blade
<x-home.insights-section
  title="Latest Articles"
  description="Insights from our team on design, strategy, and impact"
  buttonText="Read Our Blog"
  buttonUrl="/blog"
>
  <!-- Article card or content -->
  <div class="bg-white rounded-2xl shadow-lg p-6">
    <h3 class="text-h4 font-bold">The Future of Purpose-Driven Design</h3>
    <p class="text-body text-the-end-700 mt-2">How designers are shaping positive social impact...</p>
  </div>
</x-home.insights-section>
``` 