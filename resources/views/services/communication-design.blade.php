@extends('layouts.app')

@section('title', $service->og_title ?: ($service->title . ' - Festa Design Studio'))

@section('meta_description', $service->meta_description ?: 'Strategic visual and verbal communication design for social impact organizations. Clear messaging, brand identity, and visual storytelling that amplifies your mission.')

@section('meta_keywords', $service->meta_keywords ?: 'nonprofit communication design, social impact branding, visual storytelling, brand identity, nonprofit marketing, organizational communication')

@section('og_title', $service->og_title ?: ($service->title . ' - Festa Design Studio'))
@section('og_description', $service->og_description ?: 'Strategic communication design for social impact organizations. Transform complex ideas into clear, engaging messages that resonate and drive action.')
@section('og_image', $service->og_image ?: asset('images/communication-design-og-image.jpg'))
@section('og_url', url()->current())

@section('twitter_title', $service->twitter_title ?: ($service->title . ' - Festa Design Studio'))
@section('twitter_description', $service->twitter_description ?: 'Strategic communication design for social impact. Clear messaging and visual storytelling that amplifies your mission.')
@section('twitter_image', $service->twitter_image ?: asset('images/communication-design-twitter-card.jpg'))

@section('structured_data')
@if($service->structured_data)
{!! json_encode($service->structured_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
@else
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "{{ $service->title }}",
    "description": "{{ $service->meta_description ?: $service->description }}",
    "provider": {
        "@type": "Organization",
        "name": "Festa Design Studio",
        "url": "{{ config('app.url') }}"
    },
    "serviceType": "{{ $service->title }}",
    "category": "Design Services",
    "areaServed": "Global",
    "audience": {
        "@type": "Audience",
        "audienceType": ["Nonprofit Organizations", "Social Enterprises", "NGOs"]
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
            ['label' => 'Communication Design']
        ]"
    />

    <!-- Communication Design Hero Section -->
    <x-services.service-hero-section 
        serviceType="Communication Design"
        :title="$service->title"
        :description="$service->description"
    />
    
    <!-- Communication Design Core Services -->
    <x-services.service-core-section 
        :expertiseTitle="$service->expertise_title ?: 'Communication design expertise'"
        :expertiseDescription="$service->expertise_description ?: 'We turn complex ideas into clear, engaging messages that resonate with your audience and drive action. Our communication solutions include:'"
        :deliverables="$service->deliverables->map(function($deliverable) {
            return [
                'title' => $deliverable->title,
                'description' => $deliverable->description
            ];
        })->toArray()"
    />
    
    <!-- Core Services CTA -->
    <x-services.service-cta-section />
@endsection 