@extends('layouts.app')

@section('title', 'Nonprofit Services - Festa Design Studio')

@section('content')
    <!-- Breadcrumbs navigation -->
    <x-core.breadcrumbs
        :items="[
            ['label' => 'Services', 'url' => route('services')],
            ['label' => 'Nonprofit']
        ]"
    />

    <!-- Sector Hero Section for Nonprofits -->
    <x-services.sectors.sector-hero 
        eyebrow="Empowering nonprofits"
        title="Transform your mission Into visual impact"
        description="Amplify your nonprofit's voice through purpose-driven design that speaks louder than words. We help you communicate complex missions effectively and enhance donor engagement."
        buttonText="Start Your Impact Journey"
        buttonUrl="{{ route('contact.talk-to-festa') }}"
        buttonAriaLabel="Start your impact journey with Festa Design Studio"
    />

    <!-- Nonprofit Sector Challenges Section -->
    <x-services.sectors.sector-challenge 
        eyebrow="Sector challenges"
        title="Navigating Limited Resources with Purpose-Driven Design"
        description="Understanding the real barriers nonprofits face—and how Festa empowers impact through design, branding, and digital strategy."
    />

    <!-- Nonprofit Sector Expertise Section -->
    @php
        $nonprofitExpertise = [
            [
                'title' => 'Theory of Change Development',
                'intro' => 'Transform your organization\'s vision into actionable strategy with expert guidance in:',
                'points' => [
                    'Logic model creation and refinement',
                    'Impact measurement framework design',
                    'Outcome mapping and visualization',
                    'Stakeholder engagement planning'
                ],
                'conclusion' => 'Using Festa\'s design system, we create clear, engaging visualizations that make your theory of change accessible and actionable for all stakeholders.'
            ],
            [
                'title' => 'UI Design System Implementation',
                'intro' => 'Build a cohesive digital presence that amplifies your mission through:',
                'points' => [
                    'Custom UI component libraries',
                    'Accessible color systems',
                    'Typography hierarchies for impact',
                    'Responsive layout frameworks'
                ],
                'conclusion' => 'We craft design systems that reflect your organization\'s values while ensuring consistency and accessibility across all digital touchpoints.'
            ]
        ];
    @endphp

    <x-services.sectors.sector-expertise 
        eyebrow="Sector expertise"
        title="Strategic Design Solutions for Nonprofits"
        description="Our specialized expertise helps nonprofits maximize their impact through strategic design and digital solutions."
        :expertise="$nonprofitExpertise"
    />
    
@endsection 