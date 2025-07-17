@extends('layouts.app')

@section('title', $service->og_title ?: ($service->title . ' - Festa Design Studio'))

@section('meta_description', $service->meta_description ?: 'End-to-end campaign design for nonprofits and startups. Data-driven campaigns that drive engagement, awareness, and measurable results for social causes.')

@section('meta_keywords', $service->meta_keywords ?: 'nonprofit campaign design, social impact campaigns, fundraising campaigns, awareness campaigns, nonprofit marketing, campaign strategy')

@section('og_title', $service->og_title ?: ($service->title . ' - Festa Design Studio'))
@section('og_description', $service->og_description ?: 'Expert campaign design for social impact organizations. From awareness to action, we create comprehensive campaigns that connect and deliver results.')
@section('og_image', $service->og_image ?: asset('images/campaign-design-og-image.jpg'))
@section('og_url', url()->current())

@section('twitter_title', $service->twitter_title ?: ($service->title . ' - Festa Design Studio'))
@section('twitter_description', $service->twitter_description ?: 'Expert campaign design for social impact. Comprehensive campaigns from awareness to action that deliver measurable results.')
@section('twitter_image', $service->twitter_image ?: asset('images/campaign-design-twitter-card.jpg'))

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
        "audienceType": ["Nonprofit Organizations", "Social Enterprises", "Purpose-driven Startups"]
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
            ['label' => 'Campaign Design']
        ]"
    />

    <!-- Campaign Design Hero Section -->
    <x-services.service-hero-section 
        serviceType="Campaign Design"
        :title="$service->title"
        :description="$service->description"
    />
    
    <!-- Campaign Design Core Services -->
    <x-services.service-core-section 
        :expertiseTitle="$service->expertise_title ?: 'Campaign design expertise'"
        :expertiseDescription="$service->expertise_description ?: 'From awareness to action, we design comprehensive campaigns that connect with audiences and deliver results. Our campaign capabilities include:'"
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