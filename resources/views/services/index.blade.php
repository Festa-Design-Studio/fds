@extends('layouts.app')

@section('title', $mainPage?->og_title ?: 'Our Services - Festa Design Studio')

@section('meta_description', $mainPage?->meta_description ?: 'Strategic design services for nonprofits and social impact organizations. Project design, communication design, and campaign design that transforms purpose into measurable impact.')

@section('meta_keywords', $mainPage?->meta_keywords ?: 'nonprofit design services, social impact design, project design, communication design, campaign design, nonprofit branding, social enterprise design')

@section('og_title', $mainPage?->og_title ?: 'Our Services - Festa Design Studio')
@section('og_description', $mainPage?->og_description ?: 'Strategic design services for nonprofits and social impact organizations. Transform your purpose into measurable impact with our expert design solutions.')
@section('og_image', $mainPage?->og_image ?: asset('images/services-og-image.jpg'))
@section('og_url', url()->current())

@section('twitter_title', $mainPage?->twitter_title ?: 'Our Services - Festa Design Studio')
@section('twitter_description', $mainPage?->twitter_description ?: 'Strategic design services for nonprofits and social impact organizations. Transform your purpose into measurable impact.')
@section('twitter_image', $mainPage?->twitter_image ?: asset('images/services-twitter-card.jpg'))

@section('structured_data')
@if($mainPage?->structured_data)
{!! json_encode($mainPage->structured_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
@else
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
@endif
@endsection

@section('content')
    <!-- Breadcrumb -->
    <x-core.breadcrumbs :items="[
        ['label' => 'Services', 'url' => '']
    ]" class="" />
    
    <!-- Hero Section -->
    <x-services.service-card-hero-section>
        <div class="text-center space-y-6 max-w-3xl mx-auto">
            <span class="text-body-sm text-chicken-comb-600 uppercase tracking-wider">{{ $mainPage?->hero_subtitle ?? 'Services' }}</span>
            <h1 class="text-h1 font-black md:max-w-xl mx-auto text-the-end-900">{{ $mainPage?->content ?? 'Design that transforms purpose into impact' }}
            </h1>
            <p class="text-body-lg md:max-w-xl mx-auto text-the-end-700">
                {{ $mainPage?->description ?? 'Strategic design services tailored to amplify your organization\'s impact and advance your mission for social good' }}
            </p>
        </div>
    </x-services.service-card-hero-section>
    
    <!-- Services Grid -->
    <div class="max-w-7xl mx-auto py-20 px-4 md:px-8 lg:px-16">
        <x-services.service-card-grid>
            @foreach($services as $service)
                <x-services.service-card
                    :title="$service->title"
                    :description="$service->description"
                    :url="route('services.' . str_replace('_', '-', $service->type))"
                    :link="route('services.' . str_replace('_', '-', $service->type))"
                    :linkText="'Learn how we design ' . strtolower(str_replace(['_', 'design'], [' ', ''], $service->type))"
                />
            @endforeach
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