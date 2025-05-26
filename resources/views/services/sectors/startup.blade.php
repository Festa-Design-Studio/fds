@extends('layouts.app')

@section('title', $sector->title . ' - Festa Design Studio')

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
        eyebrow="{{ $sector->hero_eyebrow }}"
        title="{{ $sector->hero_title }}"
        description="{{ $sector->hero_description }}"
        buttonText="{{ $sector->hero_button_text }}"
        buttonUrl="{{ route('contact.talk-to-festa') }}"
        buttonAriaLabel="Start your startup journey with Festa Design Studio"
    />

    <!-- Startup Sector Challenges Section -->
    <x-services.sectors.sector-challenge 
        eyebrow="{{ $sector->challenge_eyebrow }}"
        title="{{ $sector->challenge_title }}"
        description="{{ $sector->challenge_description }}"
        :challenges="$sector->challenge_items"
    />

    <!-- Startup Sector Expertise Section -->
    <x-services.sectors.sector-expertise 
        eyebrow="{{ $sector->expertise_eyebrow }}"
        title="{{ $sector->expertise_title }}"
        description="{{ $sector->expertise_description }}"
        :expertise="$sector->expertise_items"
    />
    
@endsection 