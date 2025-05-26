@extends('layouts.app')

@section('title', 'Startup Services - Festa Design Studio')

@section('content')
    <!-- Breadcrumbs navigation -->
    <x-core.breadcrumbs
        :items="[
            ['label' => 'Services', 'url' => route('services')],
            ['label' => 'Startup']
        ]"
    />

    <!-- Sector Hero Section for Startups -->
    <x-services.sectors.sector-hero 
        eyebrow="Empowering Purpose-driven Startups"
        title="Scale Your Impact Through Strategic Design"
        description="Transform your startup vision into compelling visual narratives that attract investors, engage customers, and drive sustainable growth. We help purpose-driven startups communicate their value effectively."
        buttonText="Launch Your Vision"
        buttonUrl="{{ route('contact.talk-to-festa') }}"
        buttonAriaLabel="Start your startup journey with Festa Design Studio"
    />

    <!-- Startup Sector Challenges Section -->
    @php
        $startupChallenges = [
            [
                'icon' => '<path d="M12 8V4l8 8-8 8v-4H4v-8z"/>',
                'title' => 'Market Differentiation',
                'description' => '78% of startups struggle to clearly communicate their unique value proposition in crowded markets.',
                'source' => 'Startup Marketing Report 2023',
                'sourceUrl' => '#'
            ],
            [
                'icon' => '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>',
                'title' => 'Investor Confidence',
                'description' => '65% of early-stage startups cite difficulty in creating compelling pitch materials that build investor trust.',
                'source' => 'Venture Capital Study 2023',
                'sourceUrl' => '#'
            ],
            [
                'icon' => '<path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>',
                'title' => 'Customer Acquisition',
                'description' => '71% of purpose-driven startups find it challenging to convert their mission into customer engagement and retention.',
                'source' => 'Purpose Business Study 2023',
                'sourceUrl' => '#'
            ],
            [
                'icon' => '<path d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                'title' => 'Rapid Scaling',
                'description' => '59% of growing startups struggle to maintain brand consistency and quality while scaling operations quickly.',
                'source' => 'Scale-up Challenges Report 2023',
                'sourceUrl' => '#'
            ]
        ];
    @endphp

    <x-services.sectors.sector-challenge 
        eyebrow="Startup sector challenges"
        title="Building Credibility While Scaling Fast"
        description="Understanding the unique obstacles startups face—and how Festa helps purpose-driven startups establish trust, attract investment, and scale effectively through strategic design."
        :challenges="$startupChallenges"
    />

    <!-- Additional content sections can be added here -->
    
@endsection 