@extends('layouts.app')

@section('title', 'Project Design - Festa Design Studio')

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