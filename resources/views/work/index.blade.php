@extends('layouts.work')

@section('title', 'Our Work - Festa Design Studio')

@section('breadcrumbs')
    <!-- Breadcrumb -->
    <x-core.breadcrumbs :items="[
        ['label' => 'Work', 'url' => '']
    ]" class="" />
@endsection

@section('content')
    <!-- 2. Hero Section -->
    <x-work.hero 
        title="Our Portfolio of Impact"
        description="Explore our collection of purpose-driven projects that create meaningful change for organizations making a difference."
    />

    <!-- 3. Metrics Section -->
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
            ],
            [
                'value' => '10+',
                'title' => 'Years',
                'description' => 'Creating meaningful change',
                'colorClass' => 'text-pot-of-gold-600'
            ]
        ]"
    />

    <!-- 4. Filter Component -->
    <x-work.filter 
        :sectorOptions="[
            'nonprofit' => 'Nonprofit',
            'startup' => 'Startup',
            'education' => 'Education',
            'healthcare' => 'Healthcare'
        ]"
        :industryOptions="[
            'tech' => 'Technology',
            'healthcare' => 'Healthcare',
            'education' => 'Education',
            'environment' => 'Environment'
        ]"
        :sdgOptions="[
            'sdg1' => 'No Poverty',
            'sdg3' => 'Good Health & Well-being',
            'sdg4' => 'Quality Education',
            'sdg13' => 'Climate Action'
        ]"
        searchPlaceholder="Search projects..."
    />

    <!-- 5. Work Grid -->
    <x-work.grid 
        title="Featured Projects"
        :items="[
            [
                'title' => 'Eco-Friendly Packaging Design',
                'description' => 'Redesigned packaging to reduce environmental impact while maintaining product protection and brand appeal.',
                'image' => 'https://images.unsplash.com/photo-1605600659873-d808a13e4d2a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
                'url' => '/work/eco-friendly-packaging',
                'tags' => [
                    ['type' => 'sector', 'label' => 'Consumer Goods'],
                    ['type' => 'sdg', 'label' => 'Responsible Consumption']
                ]
            ],
            [
                'title' => 'Health Education Campaign',
                'description' => 'Created accessible health education materials that reached over 25,000 underserved community members.',
                'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
                'url' => '/work/health-education-campaign',
                'tags' => [
                    ['type' => 'sector', 'label' => 'Nonprofit'],
                    ['type' => 'industry', 'label' => 'Healthcare'],
                    ['type' => 'sdg', 'label' => 'Good Health & Well-being']
                ]
            ],
            [
                'title' => 'Community Engagement Platform',
                'description' => 'Built a digital platform that connected community organizations with volunteers, increasing participation by 215%.',
                'image' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
                'url' => '/work/community-engagement-platform',
                'tags' => [
                    ['type' => 'sector', 'label' => 'Nonprofit'],
                    ['type' => 'industry', 'label' => 'Community']
                ]
            ],
            [
                'title' => 'Nonprofit Rebrand',
                'description' => 'Revitalized a 20-year-old nonprofit\'s brand identity to appeal to both long-time supporters and new audiences.',
                'image' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
                'url' => '/work/nonprofit-rebrand',
                'tags' => [
                    ['type' => 'sector', 'label' => 'Nonprofit'],
                    ['type' => 'industry', 'label' => 'Brand Identity']
                ]
            ],
            [
                'title' => 'Climate Action Website',
                'description' => 'Developed an engaging website that mobilized community support for local climate initiatives.',
                'image' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
                'url' => '/work/climate-action-website',
                'tags' => [
                    ['type' => 'sector', 'label' => 'Environmental'],
                    ['type' => 'sdg', 'label' => 'Climate Action']
                ]
            ],
            [
                'title' => 'Educational App UI/UX',
                'description' => 'Designed an intuitive mobile application that improved learning outcomes for K-12 students.',
                'image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
                'url' => '/work/education-app',
                'tags' => [
                    ['type' => 'sector', 'label' => 'Education'],
                    ['type' => 'industry', 'label' => 'Technology'],
                    ['type' => 'sdg', 'label' => 'Quality Education']
                ]
            ]
        ]"
    >
        <!-- 6. Load More Work Button -->
        <x-slot name="footer">
            <x-core.button variant="secondary" size="large">
                Load more work
            </x-core.button>
        </x-slot>
    </x-work.grid>

    <!-- 7. Testimonial Section -->
    <x-work.testimonial-section 
        title="What Our Partners Say"
        description="Real stories from organizations making a difference with our collaborative approach to social impact design."
        :testimonials="[
            [
                'quote' => 'The design system has completely transformed how we approach our projects. We\'ve seen a 45% increase in engagement.',
                'authorName' => 'Elena Rodriguez',
                'authorTitle' => 'Lead Designer, TechCorp'
            ],
            [
                'quote' => 'Working with Festa helped us clarify our message and reach more people in need. Their strategic approach made all the difference.',
                'authorName' => 'Michael Chen',
                'authorTitle' => 'Executive Director, Health Forward'
            ],
            [
                'quote' => 'Our rebrand exceeded all expectations. Festa took the time to understand our mission and translated it beautifully into our visual identity.',
                'authorName' => 'Sarah Johnson',
                'authorTitle' => 'Communications Director, EcoAction'
            ]
        ]"
    />
@endsection 