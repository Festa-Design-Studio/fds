@extends('layouts.app')

@section('title', 'Toolkit - Festa Design Studio')

@section('content')
    <!-- Breadcrumb (without "resources") -->
    <x-core.breadcrumbs :items="[
        ['label' => 'Toolkit', 'url' => '']
    ]" />

    <!-- Toolkit Hero Section -->
    <x-toolkit.hero-section />

    <!-- Toolkit Filters and Search -->
    <x-toolkit.filter-section>
        <x-slot name="filters">
            <x-toolkit.select 
                id="toolkit-type-filter"
                name="toolkit_type"
                :options="[
                    'project-design' => 'Project design',
                    'communication-design' => 'Communication design',
                    'campaign-design' => 'Campaign design'
                ]"
                placeholder="Toolkits"
                data-filter-type="category"
            />
            
            <x-toolkit.select 
                id="design-tool-filter"
                name="design_tool"
                :options="[
                    'mailchimp' => 'Mailchimp',
                    'logframe' => 'Logframe',
                    'google-ads' => 'Google Ads display',
                    'canva' => 'Canva',
                    'figma' => 'Figma',
                    'notion' => 'Notion',
                    'seo' => 'SEO',
                    'brand-guidelines' => 'Brand Guidelines',
                    'funding' => 'Funding',
                    'analytics' => 'Analytics'
                ]"
                placeholder="Design tools"
                data-filter-type="tool"
            />
        </x-slot>
        
        <x-slot name="search">
            <x-core.text-input
                id="toolkit-search"
                name="search"
                placeholder="Search tools..."
                :leadingIcon="true"
                value="{{ request('search') }}"
                data-search-input
            >
                <x-slot name="leadingIcon">
                    <svg class="h-5 w-5 text-the-end-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </x-slot>
            </x-core.text-input>
        </x-slot>
    </x-toolkit.filter-section>

    <!-- Toolkit Grid with Toolkit Cards -->
    <div id="toolkit-grid-container">
        <x-toolkit.grid>
            <!-- Card 1 - Initially visible -->
            <div class="toolkit-card" 
                 data-category="project-design" 
                 data-tool="mailchimp" 
                 data-title="Fundraising Email Marketing for Nonprofits"
                 data-description="Create detailed profiles of your ideal audience to craft messaging that resonates with their values and needs."
                 data-index="0">
                <x-toolkit.card
                    title="Fundraising Email Marketing for Nonprofits"
                    description="Create detailed profiles of your ideal audience to craft messaging that resonates with their values and needs."
                >
                    <x-slot name="image">
                        <svg class="w-16 h-auto" viewBox="0 0 512 512"><title>mailchimp</title><g><rect width="512" height="512" fill="#ffe01b" rx="15%"></rect><path fill="#1e1e1e" d="M418 306l-6-17s25-38-37-51c0 0 4-47-18-69 48-47 37-118-72-72C229-10 13 241 103 281c-9 12-9 72 53 78 42 90 144 96 203 69s93-113 59-122zm-263 40c-51-5-56-75-12-82s55 86 12 82zm-15-95c-14 0-31 19-31 19-68-33 123-252 164-167 0 0-100 48-133 148zm200 85c0-4-21 6-59-7 3-21 48 18 123-33l6 21c28-5 0 90-90 89-73-1-96-76-56-117 8-8-29-24-22-59 3-15 16-37 49-31s40-24 62-13 9 53 12 59 35 7 41 24-41 54-114 44c-17-2-27 20-16 34 22 32 112 11 127-20-38 29-116 40-122 9 22 10 59 4 59 0zm-58-6zm-73-152c22-27 51-43 51-43l-6 15s21-16 44-16l-8 8c26 1 37 11 37 11s-61-18-118 25zm135 39c13-1 9 29 9 29h-8s-14-28-1-29zm-59 33c-9 1-19 6-18 2 4-16 41-12 40 2s-9-6-22-4zm21 12c1 2-7 0-13 1s-12 4-12 2 23-11 25-3zm20 3c3-6 15 0 12 6s-15 0-12-6zm25 2c-6 0-6-13 0-13s6 14 0 14zm-180 53c3 3-6 9-13 4s8-29-10-35-13 17-18 14 7-35 28-22-6 33 6 39 5-2 7 0z"></path></g></svg>
                    </x-slot>
                    
                    <x-slot name="tags">
                        <x-toolkit.tags>Project design</x-toolkit.tags>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                            Mailchimp
                        </span>
                    </x-slot>
                    
                    <x-core.button variant="neutral" size="small">View Tool</x-core.button>
                </x-toolkit.card>
            </div>

            <!-- Card 2 - Initially visible -->
            <div class="toolkit-card" 
                 data-category="communication-design" 
                 data-tool="seo" 
                 data-title="SEO Toolkit for Nonprofits"
                 data-description="Essential SEO tools and templates tailored specifically for nonprofit organizations to increase their online visibility."
                 data-index="1">
                <x-toolkit.card
                    title="SEO Toolkit for Nonprofits"
                    description="Essential SEO tools and templates tailored specifically for nonprofit organizations to increase their online visibility."
                >
                    <x-slot name="image">
                        <svg class="w-16 h-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#4CAF50" opacity="0.1"/>
                            <path d="M12 16L7 13.5V8.5L12 6L17 8.5V13.5L12 16Z" stroke="#4CAF50" stroke-width="1.5"/>
                            <path d="M12 16V11M12 11L7 8.5M12 11L17 8.5" stroke="#4CAF50" stroke-width="1.5"/>
                        </svg>
                    </x-slot>
                    
                    <x-slot name="tags">
                        <x-toolkit.tags>Communication design</x-toolkit.tags>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                            SEO
                        </span>
                    </x-slot>
                    
                    <x-core.button variant="neutral" size="small">View Tool</x-core.button>
                </x-toolkit.card>
            </div>

            <!-- Card 3 - Initially visible -->
            <div class="toolkit-card" 
                 data-category="campaign-design" 
                 data-tool="canva" 
                 data-title="Social Media Calendar Template"
                 data-description="Plan and organize your social media content effectively with this comprehensive calendar template."
                 data-index="2">
                <x-toolkit.card
                    title="Social Media Calendar Template"
                    description="Plan and organize your social media content effectively with this comprehensive calendar template."
                >
                    <x-slot name="image">
                        <svg class="w-16 h-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#F44336" opacity="0.1"/>
                            <rect x="4" y="5" width="16" height="14" rx="2" stroke="#F44336" stroke-width="1.5"/>
                            <path d="M4 9H20" stroke="#F44336" stroke-width="1.5"/>
                            <path d="M8 13H10" stroke="#F44336" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M14 13H16" stroke="#F44336" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M8 16H10" stroke="#F44336" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M14 16H16" stroke="#F44336" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </x-slot>
                    
                    <x-slot name="tags">
                        <x-toolkit.tags>Campaign design</x-toolkit.tags>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                            Content Calendar
                        </span>
                    </x-slot>
                    
                    <x-core.button variant="neutral" size="small">View Tool</x-core.button>
                </x-toolkit.card>
            </div>

            <!-- Card 4 - Initially hidden -->
            <div class="toolkit-card toolkit-card-pagination-hidden" 
                 data-category="communication-design" 
                 data-tool="brand-guidelines" 
                 data-title="Brand Guidelines Template"
                 data-description="Create comprehensive brand guidelines for your organization with this professional template."
                 data-index="3">
                <x-toolkit.card
                    title="Brand Guidelines Template"
                    description="Create comprehensive brand guidelines for your organization with this professional template."
                >
                    <x-slot name="image">
                        <svg class="w-16 h-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#9C27B0" opacity="0.1"/>
                            <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z" stroke="#9C27B0" stroke-width="1.5"/>
                        </svg>
                    </x-slot>
                    
                    <x-slot name="tags">
                        <x-toolkit.tags>Communication design</x-toolkit.tags>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                            Brand Guidelines
                        </span>
                    </x-slot>
                    
                    <x-core.button variant="neutral" size="small">View Tool</x-core.button>
                </x-toolkit.card>
            </div>

            <!-- Card 5 - Initially hidden -->
            <div class="toolkit-card toolkit-card-pagination-hidden" 
                 data-category="project-design" 
                 data-tool="funding" 
                 data-title="Grant Proposal Template"
                 data-description="Professional grant proposal template to help you secure funding for your nonprofit projects."
                 data-index="4">
                <x-toolkit.card
                    title="Grant Proposal Template"
                    description="Professional grant proposal template to help you secure funding for your nonprofit projects."
                >
                    <x-slot name="image">
                        <svg class="w-16 h-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#FF9800" opacity="0.1"/>
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="#FF9800" stroke-width="1.5"/>
                            <path d="M14 2v6h6" stroke="#FF9800" stroke-width="1.5"/>
                            <path d="M16 13H8" stroke="#FF9800" stroke-width="1.5"/>
                            <path d="M16 17H8" stroke="#FF9800" stroke-width="1.5"/>
                            <path d="M10 9H8" stroke="#FF9800" stroke-width="1.5"/>
                        </svg>
                    </x-slot>
                    
                    <x-slot name="tags">
                        <x-toolkit.tags>Project design</x-toolkit.tags>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                            Funding
                        </span>
                    </x-slot>
                    
                    <x-core.button variant="neutral" size="small">View Tool</x-core.button>
                </x-toolkit.card>
            </div>

            <!-- Card 6 - Initially hidden -->
            <div class="toolkit-card toolkit-card-pagination-hidden" 
                 data-category="project-design" 
                 data-tool="analytics" 
                 data-title="Impact Measurement Framework"
                 data-description="Track and measure the social impact of your organization with this comprehensive framework."
                 data-index="5">
                <x-toolkit.card
                    title="Impact Measurement Framework"
                    description="Track and measure the social impact of your organization with this comprehensive framework."
                >
                    <x-slot name="image">
                        <svg class="w-16 h-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#2196F3" opacity="0.1"/>
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2" stroke="#2196F3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </x-slot>
                    
                    <x-slot name="tags">
                        <x-toolkit.tags>Project design</x-toolkit.tags>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                            Analytics
                        </span>
                    </x-slot>
                    
                    <x-core.button variant="neutral" size="small">View Tool</x-core.button>
                </x-toolkit.card>
            </div>

            <!-- Card 7 - Initially hidden -->
            <div class="toolkit-card toolkit-card-pagination-hidden" 
                 data-category="campaign-design" 
                 data-tool="figma" 
                 data-title="Campaign Design Templates"
                 data-description="Professional campaign design templates for social media, print, and digital marketing materials."
                 data-index="6">
                <x-toolkit.card
                    title="Campaign Design Templates"
                    description="Professional campaign design templates for social media, print, and digital marketing materials."
                >
                    <x-slot name="image">
                        <svg class="w-16 h-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#673AB7" opacity="0.1"/>
                            <path d="M5 5.5A3.5 3.5 0 018.5 2H12v7H8.5A3.5 3.5 0 015 5.5z" stroke="#673AB7" stroke-width="1.5"/>
                            <path d="M12 2h3.5a3.5 3.5 0 110 7H12V2z" stroke="#673AB7" stroke-width="1.5"/>
                            <path d="M12 12.5a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z" stroke="#673AB7" stroke-width="1.5"/>
                            <path d="M5 19.5A3.5 3.5 0 018.5 16H12v3.5a3.5 3.5 0 11-7 0z" stroke="#673AB7" stroke-width="1.5"/>
                            <path d="M5 12.5A3.5 3.5 0 018.5 9H12v7H8.5A3.5 3.5 0 015 12.5z" stroke="#673AB7" stroke-width="1.5"/>
                        </svg>
                    </x-slot>
                    
                    <x-slot name="tags">
                        <x-toolkit.tags>Campaign design</x-toolkit.tags>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                            Figma
                        </span>
                    </x-slot>
                    
                    <x-core.button variant="neutral" size="small">View Tool</x-core.button>
                </x-toolkit.card>
            </div>

            <!-- Card 8 - Initially hidden -->
            <div class="toolkit-card toolkit-card-pagination-hidden" 
                 data-category="communication-design" 
                 data-tool="notion" 
                 data-title="Content Planning Workspace"
                 data-description="Organize your content strategy, editorial calendar, and team collaboration in this comprehensive Notion workspace."
                 data-index="7">
                <x-toolkit.card
                    title="Content Planning Workspace"
                    description="Organize your content strategy, editorial calendar, and team collaboration in this comprehensive Notion workspace."
                >
                    <x-slot name="image">
                        <svg class="w-16 h-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#000000" opacity="0.1"/>
                            <path d="M4 4h16v16H4V4z" stroke="#000000" stroke-width="1.5"/>
                            <path d="M8 8h8" stroke="#000000" stroke-width="1.5"/>
                            <path d="M8 12h8" stroke="#000000" stroke-width="1.5"/>
                            <path d="M8 16h5" stroke="#000000" stroke-width="1.5"/>
                        </svg>
                    </x-slot>
                    
                    <x-slot name="tags">
                        <x-toolkit.tags>Communication design</x-toolkit.tags>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                            Notion
                        </span>
                    </x-slot>
                    
                    <x-core.button variant="neutral" size="small">View Tool</x-core.button>
                </x-toolkit.card>
            </div>

            <!-- Card 9 - Initially hidden -->
            <div class="toolkit-card toolkit-card-pagination-hidden" 
                 data-category="project-design" 
                 data-tool="logframe" 
                 data-title="Logical Framework Template"
                 data-description="Comprehensive logical framework template for project planning and impact measurement in development projects."
                 data-index="8">
                <x-toolkit.card
                    title="Logical Framework Template"
                    description="Comprehensive logical framework template for project planning and impact measurement in development projects."
                >
                    <x-slot name="image">
                        <svg class="w-16 h-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#10B981" opacity="0.1"/>
                            <path d="M9 11H4a2 2 0 01-2-2V4a2 2 0 012-2h5a2 2 0 012 2v5a2 2 0 01-2 2z" stroke="#10B981" stroke-width="1.5"/>
                            <path d="M20 11h-5a2 2 0 01-2-2V4a2 2 0 012-2h5a2 2 0 012 2v5a2 2 0 01-2 2z" stroke="#10B981" stroke-width="1.5"/>
                            <path d="M9 22H4a2 2 0 01-2-2v-5a2 2 0 012-2h5a2 2 0 012 2v5a2 2 0 01-2 2z" stroke="#10B981" stroke-width="1.5"/>
                            <path d="M20 22h-5a2 2 0 01-2-2v-5a2 2 0 012-2h5a2 2 0 012 2v5a2 2 0 01-2 2z" stroke="#10B981" stroke-width="1.5"/>
                        </svg>
                    </x-slot>
                    
                    <x-slot name="tags">
                        <x-toolkit.tags>Project design</x-toolkit.tags>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                            Logframe
                        </span>
                    </x-slot>
                    
                    <x-core.button variant="neutral" size="small">View Tool</x-core.button>
                </x-toolkit.card>
            </div>
        </x-toolkit.grid>

        <!-- No Results Message -->
        <div id="no-results-message" class="hidden py-12 px-4 md:px-8 lg:px-16 text-center">
            <div class="max-w-lg mx-auto">
                <svg class="w-16 h-16 mx-auto text-the-end-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <h3 class="text-h4 font-medium text-the-end-900 mb-2">No tools found</h3>
                <p class="text-body text-the-end-600 mb-4">Try adjusting your search or filter criteria to find more tools.</p>
                <button id="clear-filters" class="text-pepper-green-600 hover:text-pepper-green-700 font-medium">
                    Clear all filters
                </button>
            </div>
        </div>
    </div>

    <!-- Results Count -->
    <div id="results-count" class="py-4 px-4 md:px-8 lg:px-16 text-center">
        <p class="text-body-sm text-the-end-600">
            Showing <span id="visible-count">3</span> of <span id="total-count">3</span> tools
        </p>
    </div>

    <!-- Load More Toolkit Button - Centered as per component documentation -->
    <section id="load-more-section" class="py-12 px-4 md:px-8 lg:px-16">
        <div class="max-w-7xl mx-auto text-center">
            <x-core.button id="load-more-btn" variant="secondary" size="large">
                Load More Tools
            </x-core.button>
</div>
    </section>
@endsection 