@extends('layouts.app')

@section('title', $pageSeo?->og_title ?: 'We Design for Good - Festa Design Studio')

@section('meta_description', $pageSeo?->meta_description ?: 'Discover Festa Design Studio\'s commitment to creating meaningful impact through design. Learn about our mission, values, and approach to social change through purposeful design solutions.')

@section('meta_keywords', $pageSeo?->meta_keywords ?: 'design for good, social impact design, sustainable design, nonprofit design, ethical design, social change, SDG alignment, purposeful design')

@section('og_title', $pageSeo?->og_title ?: 'We Design for Good - Festa Design Studio')
@section('og_description', $pageSeo?->og_description ?: 'Our commitment to creating meaningful impact through design extends beyond aesthetics to address real-world challenges and drive positive social change across communities worldwide.')
@section('og_image', $pageSeo?->og_image ?: asset('images/festa-design-for-good-og.jpg'))
@section('og_url', url()->current())

@section('twitter_title', $pageSeo?->twitter_title ?: 'We Design for Good - Festa Design Studio')
@section('twitter_description', $pageSeo?->twitter_description ?: 'Our commitment to creating meaningful impact through design extends beyond aesthetics to address real-world challenges and drive positive social change.')
@section('twitter_image', $pageSeo?->twitter_image ?: asset('images/festa-design-for-good-twitter.jpg'))

@section('structured_data')
@if($pageSeo?->structured_data)
<script type="application/ld+json">
{!! json_encode($pageSeo->structured_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
</script>
@else
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "AboutPage",
    "name": "We Design for Good",
    "description": "Festa Design Studio's commitment to creating meaningful impact through design, addressing real-world challenges and driving positive social change.",
    "url": "{{ url()->current() }}",
    "mainEntity": {
        "@type": "Organization",
        "name": "Festa Design Studio",
        "url": "{{ route('home') }}",
        "description": "Strategic design studio specializing in nonprofit and social impact design solutions",
        "slogan": "Design for Good",
        "foundingDate": "2020",
        "knowsAbout": [
            "Social Impact Design",
            "Nonprofit Design", 
            "Sustainable Design",
            "Ethical Design",
            "Project Design",
            "Communication Design",
            "Campaign Design"
        ]
    }
}
</script>
@endif
@endsection

@section('breadcrumbs')
    <!-- Breadcrumb navigation -->
    <x-core.breadcrumbs :items="[
        ['label' => 'About', 'url' => route('about')],
        ['label' => 'We Design for Good', 'url' => '']
    ]" />
@endsection

@section('content')
<!-- We Design for Good Content -->
<div class="bg-white-smoke-50">
    
    <!-- Hero Section -->
    <x-about.we-design-for-good.hero-section :content="$contents['hero'] ?? null" />
    
    <!-- Mission Section -->
    <x-about.we-design-for-good.mission-section :content="$contents['mission'] ?? null" />
    
    <!-- Impact Framework -->
    <x-about.we-design-for-good.impact-framework :content="$contents['impact_framework'] ?? null" />
    
    <!-- Values Section -->
    <x-about.we-design-for-good.values-section :content="$contents['values'] ?? null" />
    
    <!-- SDG Section (reuse existing component) -->
    <x-about.sdg-section />
    
</div>
@endsection 