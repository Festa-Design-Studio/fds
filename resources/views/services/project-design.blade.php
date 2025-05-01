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
    <x-services.project-design.hero-section />
    
    <!-- Project Design Core Services Mini Cards -->
    <x-services.project-design.core-services-mini-cards />

    
    <!-- Core Services CTA -->
    <x-services.project-design.core-services-cta />
@endsection 