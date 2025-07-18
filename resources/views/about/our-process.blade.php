@extends('layouts.app')

@section('title', 'Our Process - Festa Design Studio')

@section('content')
    <!-- Breadcrumbs navigation -->
    <x-core.breadcrumbs
        :items="[
            ['label' => 'About', 'url' => route('about')],
            ['label' => 'Our Process']
        ]"
    />
    
    <!-- Our Process Hero Section -->
    <x-about.our-process.hero-section />
    
    <!-- Our Philosophy Section -->
    <x-about.our-process.philosophy-section :philosophy-items="$philosophyItems ?? collect()" />
    
    <!-- Our Methodology Section -->
    <x-about.our-process.methodology-section :methodology-items="$methodologyItems ?? collect()" />
    
    <!-- Impact Measurement Section -->
    <x-about.our-process.impact-measurement-section :impact-items="$impactItems ?? collect()" />
@endsection 