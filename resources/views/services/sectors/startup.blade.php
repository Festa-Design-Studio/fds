@extends('layouts.app')

@section('title', 'Startup Services - Festa Design Studio')

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
        eyebrow="Empowering Purpose-driven Startups"
        title="Scale Your Impact Through Strategic Design"
        description="Transform your startup vision into compelling visual narratives that attract investors, engage customers, and drive sustainable growth. We help purpose-driven startups communicate their value effectively."
        buttonText="Launch Your Vision"
        buttonUrl="{{ route('contact.talk-to-festa') }}"
        buttonAriaLabel="Start your startup journey with Festa Design Studio"
    />

    <!-- Additional content sections can be added here -->
    
@endsection 