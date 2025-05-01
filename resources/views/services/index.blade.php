@extends('layouts.app')

@section('title', 'Our Services - Festa Design Studio')

@section('content')
    <!-- Breadcrumb -->
    <x-core.breadcrumbs :items="[
        ['label' => 'Services', 'url' => '']
    ]" class="" />
    
    <!-- Hero Section -->
    <x-services.service-card-hero-section>
        <div class="text-center space-y-6 max-w-3xl mx-auto">
            <span class="text-body-sm text-chicken-comb-600 uppercase tracking-wider">Services</span>
            <h1 class="text-h1 font-black md:max-w-xl mx-auto text-the-end-900">Design that transforms purpose into impact
            </h1>
            <p class="text-body-lg md:max-w-xl mx-auto text-the-end-700">
                Strategic design services tailored to amplify your organization's impact and advance your mission for social good
            </p>
        </div>
    </x-services.service-card-hero-section>
    
    <!-- Services Grid -->
    <div class="max-w-7xl mx-auto py-20 px-4 md:px-8 lg:px-16">
        <x-services.service-card-grid>
            <x-services.service-card
                title="Project Design"
                description="Comprehensive design solutions for projects that require strategic thinking and creative execution."
                url="{{ route('services.project-design') }}"
                link="{{ route('services.project-design') }}"
                linkText="Learn how we design project"
            />
            
            <x-services.service-card
                title="Communication Design"
                description="Strategic visual and verbal communication that connects with your audience and amplifies your message."
                url="{{ route('services.communication-design') }}"
            />
            
            <x-services.service-card
                title="Campaign Design"
                description="End-to-end campaign design that drives engagement and delivers measurable results for your initiatives."
                url="{{ route('services.campaign-design') }}"
            />
        </x-services.service-card-grid>
    </div>
    
    <!-- Sectors We Serve Section -->
    <x-services.sectors-we-serve-section>
        <x-services.sector-card-grid>
            <x-services.sector-card
                title="Nonprofit"
                description="Supporting missions that drive social change with impactful design solutions."
            />
            <x-services.sector-card
                title="Startups"
                description="Helping purpose-driven businesses scale their impact through effective design."
            />
        </x-services.sector-card-grid>
    </x-services.sectors-we-serve-section>
@endsection 