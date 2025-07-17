@extends('layouts.app')

@section('title', $sector->og_title ?: (($sector->title ?? 'Nonprofit Services') . ' - Festa Design Studio'))

@section('meta_description', $sector->meta_description ?: 'Design services for nonprofit organizations. Transform grant rejections into funding success with clear project design, compelling narratives, and impactful visual communication.')

@section('meta_keywords', $sector->meta_keywords ?: 'nonprofit design services, grant writing design, nonprofit branding, donor communication, funding proposals, nonprofit visual identity')

@section('og_title', $sector->og_title ?: (($sector->title ?? 'Nonprofit Services') . ' - Festa Design Studio'))
@section('og_description', $sector->og_description ?: 'Stop losing funding due to poor project design clarity. 94% of funders make decisions based on visual presentation. Transform your nonprofit with expert design.')
@section('og_image', $sector->og_image ?: asset('images/nonprofit-services-og-image.jpg'))
@section('og_url', url()->current())

@section('twitter_title', $sector->twitter_title ?: (($sector->title ?? 'Nonprofit Services') . ' - Festa Design Studio'))
@section('twitter_description', $sector->twitter_description ?: 'Transform grant rejections into funding success. Expert design services for nonprofit organizations.')
@section('twitter_image', $sector->twitter_image ?: asset('images/nonprofit-services-twitter-card.jpg'))

@section('structured_data')
@if($sector->structured_data)
{!! json_encode($sector->structured_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
@else
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "{{ $sector->title ?? 'Nonprofit Design Services' }}",
    "description": "{{ $sector->meta_description ?: $sector->description }}",
    "provider": {
        "@type": "Organization",
        "name": "Festa Design Studio",
        "url": "{{ config('app.url') }}"
    },
    "serviceType": "{{ $sector->title ?? 'Nonprofit Design' }}",
    "category": "Design Services",
    "areaServed": "Global",
    "audience": {
        "@type": "Audience",
        "audienceType": ["Nonprofit Organizations", "NGOs", "Charitable Organizations"]
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
            ['label' => 'Nonprofit']
        ]"
    />

    <!-- Sector Hero Section for Nonprofits -->
    <x-services.sectors.sector-hero 
        eyebrow="{{ $sector->hero_eyebrow }}"
        title="{{ $sector->hero_title }}"
        description="{{ $sector->hero_description }}"
        buttonText="{{ $sector->hero_button_text }}"
        buttonUrl="{{ route('contact.talk-to-festa') }}"
        buttonAriaLabel="Start your impact journey with Festa Design Studio"
    />

    <!-- Nonprofit Sector Challenges Section -->
    <x-services.sectors.sector-challenge 
        eyebrow="{{ $sector->challenge_eyebrow }}"
        title="{{ $sector->challenge_title }}"
        description="{{ $sector->challenge_description }}"
        :challenges="$sector->challenge_items"
    />

    <!-- Nonprofit Sector Expertise Section -->
    <x-services.sectors.sector-expertise 
        eyebrow="{{ $sector->expertise_eyebrow }}"
        title="{{ $sector->expertise_title }}"
        description="{{ $sector->expertise_description }}"
        :expertise="$sector->expertise_items"
    />
    
@endsection 