@extends('layouts.app')

@section('title', 'Our Services - Festa Design Studio')

@section('meta_description', 'Strategic design services for nonprofits and social impact organizations. Project design, communication design, and campaign design that transforms purpose into measurable impact.')

@section('meta_keywords', 'nonprofit design services, social impact design, project design, communication design, campaign design, nonprofit branding, social enterprise design')

@section('og_title', 'Our Services - Festa Design Studio')
@section('og_description', 'Strategic design services for nonprofits and social impact organizations. Transform your purpose into measurable impact with our expert design solutions.')
@section('og_image', asset('images/services-og-image.jpg'))
@section('og_url', url()->current())

@section('twitter_title', 'Our Services - Festa Design Studio')
@section('twitter_description', 'Strategic design services for nonprofits and social impact organizations. Transform your purpose into measurable impact.')
@section('twitter_image', asset('images/services-twitter-card.jpg'))

{{-- Note: Main services page keeps hardcoded SEO as it doesn't have a specific database record --}}

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Design Services for Social Impact Organizations",
    "description": "Strategic design services for nonprofits and social impact organizations including project design, communication design, and campaign design.",
    "provider": {
        "@type": "Organization",
        "name": "Festa Design Studio",
        "url": "{{ config('app.url') }}"
    },
    "serviceType": [
        "Project Design",
        "Communication Design", 
        "Campaign Design"
    ],
    "areaServed": "Global",
    "audience": {
        "@type": "Audience",
        "audienceType": ["Nonprofit Organizations", "Social Enterprises", "Purpose-driven Startups"]
    }
}
</script>
@endsection

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
                link="{{ route('services.communication-design') }}"
                linkText="Learn how we design communication"
            />
            
            <x-services.service-card
                title="Campaign Design"
                description="End-to-end campaign design that drives engagement and delivers measurable results for your initiatives."
                url="{{ route('services.campaign-design') }}"
                link="{{ route('services.campaign-design') }}"
                linkText="Learn how we design campaign"
            />
        </x-services.service-card-grid>
    </div>
    
    <!-- Sectors We Serve Section -->
    <x-services.sectors-we-serve-section>
        <x-services.sector-card-grid>
            <x-services.sector-card
                title="Nonprofit"
                description="Supporting missions that drive social change with impactful design solutions."
                link="{{ route('services.sectors.nonprofits') }}"
                linkText="Learn more about nonprofit services"
            />
            <x-services.sector-card
                title="Startups"
                description="Helping purpose-driven businesses scale their impact through effective design."
                link="{{ route('services.sectors.startup') }}"
                linkText="Learn more about startup services"
            />
        </x-services.sector-card-grid>
    </x-services.sectors-we-serve-section>
@endsection 