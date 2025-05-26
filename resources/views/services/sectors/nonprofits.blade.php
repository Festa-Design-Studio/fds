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
        eyebrow="Empowering nonprofit organizations"
        title="Transform your mission Into visual impact"
        description="Amplify your nonprofit's voice through purpose-driven design that speaks louder than words. We help you communicate complex missions effectively and enhance donor engagement."
        buttonText="Start Your Impact Journey"
        buttonUrl="{{ route('contact.talk-to-festa') }}"
        buttonAriaLabel="Start your impact journey with Festa Design Studio"
    />

    <!-- Nonprofit Sector Challenges Section -->
    <x-services.sectors.sector-challenge 
        eyebrow="Nonprofit sector challenges"
        title="Navigating Limited Resources with Purpose-Driven Design"
        description="Understanding the real barriers nonprofits face—and how Festa empowers impact through design, branding, and digital strategy."
    />

    <!-- Additional content sections can be added here -->
    
@endsection 