@extends('layouts.app')

@section('title', $service->og_title ?: ($service->title . ' - Festa Design Studio'))

@section('meta_description', $service->meta_description ?: 'Comprehensive project design solutions for nonprofits. Theory of change, grant writing, logframe design, M&E frameworks that drive funding success and social impact.')

@section('meta_keywords', $service->meta_keywords ?: 'nonprofit project design, grant writing, theory of change, logframe design, M&E framework, project planning, social impact measurement')

@section('og_title', $service->og_title ?: ($service->title . ' - Festa Design Studio'))
@section('og_description', $service->og_description ?: 'Expert project design solutions for nonprofits including theory of change, grant writing, and M&E frameworks that transform ideas into fundable projects.')
@section('og_image', $service->og_image ?: asset('images/project-design-og-image.jpg'))
@section('og_url', url()->current())

@section('twitter_title', $service->twitter_title ?: ($service->title . ' - Festa Design Studio'))
@section('twitter_description', $service->twitter_description ?: 'Expert project design solutions for nonprofits. Transform your ideas into fundable projects with our comprehensive design approach.')
@section('twitter_image', $service->twitter_image ?: asset('images/project-design-twitter-card.jpg'))

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
        "audienceType": ["Nonprofit Organizations", "NGOs", "Social Enterprises"]
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
            ['label' => 'Project Design']
        ]"
    />

    <!-- Project Design Hero Section -->
    <x-services.service-hero-section 
        serviceType="Project Design"
        :title="$service->title"
        :description="$service->description"
    />
    
    <!-- Project Design Core Services -->
    <x-services.service-core-section 
        :expertiseTitle="$service->expertise_title ?: 'Project design expertise'"
        :expertiseDescription="$service->expertise_description ?: 'Translating purpose into powerful visuals. We craft design systems and storytelling tools that speak clearly and connect deeply. Industries we\'ve worked in include:'"
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