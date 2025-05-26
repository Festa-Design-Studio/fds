@extends('layouts.app')

@section('title', 'Communication Design - Festa Design Studio')

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