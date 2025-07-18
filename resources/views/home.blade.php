@extends('layouts.app')

@section('title', $pageSeo?->og_title ?: 'Festa Design Studio - Design for Social Impact')

@section('meta_description', $pageSeo?->meta_description ?: 'Strategic design studio specializing in nonprofit and social impact design. Transform your mission into visual impact with project design, communication design, and campaign design services.')

@section('meta_keywords', $pageSeo?->meta_keywords ?: 'design for good, nonprofit design, social impact design, purpose-driven design, project design, communication design, campaign design')

@section('og_title', $pageSeo?->og_title ?: 'Festa Design Studio - Design for Social Impact')
@section('og_description', $pageSeo?->og_description ?: 'Strategic design studio specializing in nonprofit and social impact design. Transform your mission into visual impact with expert design solutions.')
@section('og_image', $pageSeo?->og_image ?: asset('images/festa-og-image.jpg'))
@section('og_url', url()->current())

@section('twitter_title', $pageSeo?->twitter_title ?: 'Festa Design Studio - Design for Social Impact')
@section('twitter_description', $pageSeo?->twitter_description ?: 'Strategic design studio specializing in nonprofit and social impact design. Transform your mission into visual impact.')
@section('twitter_image', $pageSeo?->twitter_image ?: asset('images/festa-twitter-card.jpg'))

@section('structured_data')
@if($pageSeo?->structured_data)
{!! json_encode($pageSeo->structured_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
@else
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Festa Design Studio - Home",
    "description": "Strategic design studio specializing in nonprofit and social impact design solutions",
    "url": "{{ url()->current() }}",
    "mainEntity": {
        "@type": "Organization",
        "name": "Festa Design Studio",
        "url": "{{ route('home') }}",
        "logo": "{{ asset('images/festa-logo.png') }}",
        "description": "Strategic design studio specializing in nonprofit and social impact design solutions"
    }
}
</script>
@endif
@endsection

@section('content')
    <x-home.hero-section>
        <x-slot name="button">
            <x-core.button variant="secondary" size="large" href="{{ route('about') }}">
                Why We Design for Good
            </x-core.button>
        </x-slot>
    </x-home.hero-section>

    <x-home.work-section
        title="Work in action"
        description="Discover how our collaborative design approach drives real-world change for mission-driven organizations."
        buttonText="View all our work"
        buttonUrl="{{ route('work') }}"
    >
        {{-- Display most recent work card--}}
        @if($latestProject)
            @php
                $tags = [];
                
                // Handle sector (string or relationship)
                $sectorLabel = is_object($latestProject->sector) ? $latestProject->sector?->name : $latestProject->sector;
                if ($sectorLabel) {
                    $tags[] = ['type' => 'sector', 'label' => $sectorLabel];
                }
                
                // Handle industry (string or relationship)
                $industryLabel = is_object($latestProject->industry) ? $latestProject->industry?->name : $latestProject->industry;
                if ($industryLabel) {
                    $tags[] = ['type' => 'industry', 'label' => $industryLabel];
                }
                
                // Handle SDG alignment (string or relationship) - match work detail page logic
                $sdgLabel = is_object($latestProject->sdgAlignment) ? $latestProject->sdgAlignment?->name : $latestProject->sdg_alignment;
                if ($sdgLabel) {
                    $tags[] = ['type' => 'sdg', 'label' => $sdgLabel];
                }
            @endphp
            
            <x-work.card
                title="{!! html_entity_decode($latestProject->title) !!}"
                description="{!! html_entity_decode($latestProject->excerpt) !!}"
                image="{{ asset('storage/' . $latestProject->featured_image) }}"
                url="{{ route('work.show', $latestProject->slug) }}"
                :tags="$tags"
            />
        @else
            <div class="bg-white-smoke-100 p-8 rounded-2xl text-center">
                <p class="text-the-end-700">No recent client's work published</p>
            </div>
        @endif
    </x-home.work-section>

    <x-home.insights-section
        title="Knowledge for impact"
        description="Explore our latest thoughts on design, social impact, and creating meaningful change."
        buttonText="View all our articles"
        buttonUrl="{{ route('resources.blog') }}"
    >
        @if($latestArticle)
            <x-blog.article-card 
                title="{!! html_entity_decode($latestArticle->title) !!}"
                excerpt="{!! html_entity_decode($latestArticle->excerpt) !!}"
                date="{{ $latestArticle->published_at->format('M d, Y') }}"
                readTime="{{ $latestArticle->reading_time ? $latestArticle->reading_time . ' min read' : '' }}"
                image="{{ $latestArticle->image_path ? asset('storage/' . $latestArticle->image_path) : '' }}"
                category="{{ $latestArticle->category->name ?? 'General' }}"
                categoryType="{{ $latestArticle->category->slug ?? 'general' }}"
                author="{{ $latestArticle->author->name ?? 'Festa Team' }}"
                authorAvatar="{{ $latestArticle->author && $latestArticle->author->profile_photo_path ? asset('storage/' . $latestArticle->author->profile_photo_path) : 'https://ui-avatars.com/api/?name=' . urlencode($latestArticle->author->name ?? 'Festa Team') }}"
                url="{{ route('blog.show', $latestArticle->slug) }}"
            />
        @else
            <div class="bg-white-smoke-100 p-8 rounded-2xl text-center">
                <p class="text-the-end-700">No recent articles published</p>
            </div>
        @endif
    </x-home.insights-section>
@endsection 