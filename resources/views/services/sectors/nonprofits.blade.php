@extends('layouts.app')

@section('title', 'Nonprofit Services - Festa Design Studio')

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
        eyebrow="Empowering Nonprofit organizations"
        title="Transform Your Mission Into Visual Impact"
        description="Amplify your nonprofit's voice through purpose-driven design that speaks louder than words. We help you communicate complex missions effectively and enhance donor engagement."
        buttonText="Start Your Impact Journey"
        buttonAriaLabel="Start your impact journey with Festa Design Studio"
    />

    <!-- Additional content sections can be added here -->
    
@endsection 