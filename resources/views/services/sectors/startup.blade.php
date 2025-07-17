@extends('layouts.app')

@section('title', $sector->og_title ?: (($sector->title ?? 'Startup Services') . ' - Festa Design Studio'))

@section('meta_description', $sector->meta_description ?: 'Design services for purpose-driven startups. Beat the 90% startup failure rate with investor-ready design, consistent branding, and revenue-driving visual systems.')

@section('meta_keywords', $sector->meta_keywords ?: 'startup design services, startup branding, investor pitch design, purpose-driven startup, social enterprise design, startup visual identity')

@section('og_title', $sector->og_title ?: (($sector->title ?? 'Startup Services') . ' - Festa Design Studio'))
@section('og_description', $sector->og_description ?: 'Don\'t let poor branding cost you 23% of potential revenue. Investor-ready design systems that convert skeptics into supporters and scale revenue.')
@section('og_image', $sector->og_image ?: asset('images/startup-services-og-image.jpg'))
@section('og_url', url()->current())

@section('twitter_title', $sector->twitter_title ?: (($sector->title ?? 'Startup Services') . ' - Festa Design Studio'))
@section('twitter_description', $sector->twitter_description ?: 'Beat the 90% startup failure rate. Investor-ready design systems for purpose-driven startups.')
@section('twitter_image', $sector->twitter_image ?: asset('images/startup-services-twitter-card.jpg'))

@section('structured_data')
@if($sector->structured_data)
{!! json_encode($sector->structured_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
@else
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "{{ $sector->title ?? 'Startup Design Services' }}",
    "description": "{{ $sector->meta_description ?: $sector->description }}",
    "provider": {
        "@type": "Organization",
        "name": "Festa Design Studio",
        "url": "{{ config('app.url') }}"
    },
    "serviceType": "{{ $sector->title ?? 'Startup Design' }}",
    "category": "Design Services",
    "areaServed": "Global",
    "audience": {
        "@type": "Audience",
        "audienceType": ["Startups", "Social Enterprises", "Purpose-driven Businesses"]
    }
}
</script>
@endif
@endsection

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
        eyebrow="{{ $sector->hero_eyebrow }}"
        title="{{ $sector->hero_title }}"
        description="{{ $sector->hero_description }}"
        buttonText="{{ $sector->hero_button_text }}"
        buttonUrl="{{ route('contact.talk-to-festa') }}"
        buttonAriaLabel="Start your startup journey with Festa Design Studio"
    />

    <!-- Startup Sector Challenges Section -->
    <x-services.sectors.sector-challenge 
        eyebrow="{{ $sector->challenge_eyebrow }}"
        title="{{ $sector->challenge_title }}"
        description="{{ $sector->challenge_description }}"
        :challenges="$sector->challenge_items"
    />

    <!-- Startup Sector Expertise Section -->
    <x-services.sectors.sector-expertise 
        eyebrow="{{ $sector->expertise_eyebrow }}"
        title="{{ $sector->expertise_title }}"
        description="{{ $sector->expertise_description }}"
        :expertise="$sector->expertise_items"
    />
    
@endsection 