@extends('layouts.app')

@section('title', 'Campaign Design - Festa Design Studio')

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