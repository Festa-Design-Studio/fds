@extends('layouts.app')

@section('title', $pageSeo?->og_title ?: 'Toolkit - Festa Design Studio')

@section('meta_description', $pageSeo?->meta_description ?: 'Discover free design tools and resources for nonprofits and social impact organizations. Access templates, guides, and design assets to enhance your mission.')

@section('meta_keywords', $pageSeo?->meta_keywords ?: 'nonprofit design tools, free design resources, social impact toolkit, design templates, nonprofit resources')

@section('og_title', $pageSeo?->og_title ?: 'Toolkit - Festa Design Studio')
@section('og_description', $pageSeo?->og_description ?: 'Discover free design tools and resources for nonprofits and social impact organizations. Access templates, guides, and design assets.')
@section('og_image', $pageSeo?->og_image ?: asset('images/toolkit-og-image.jpg'))
@section('og_url', url()->current())

@section('twitter_title', $pageSeo?->twitter_title ?: 'Toolkit - Festa Design Studio')
@section('twitter_description', $pageSeo?->twitter_description ?: 'Discover free design tools and resources for nonprofits and social impact organizations.')
@section('twitter_image', $pageSeo?->twitter_image ?: asset('images/toolkit-twitter-card.jpg'))

@section('structured_data')
@if($pageSeo?->structured_data)
{!! json_encode($pageSeo->structured_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
@else
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": "Toolkit - Festa Design Studio",
    "description": "Free design tools and resources for nonprofits and social impact organizations",
    "url": "{{ url()->current() }}",
    "mainEntity": {
        "@type": "ItemList",
        "name": "Design Toolkit",
        "description": "Curated collection of design tools and resources for social impact organizations"
    }
}
</script>
@endif
@endsection

@section('content')
    <!-- Breadcrumb (without "resources") -->
    <x-core.breadcrumbs :items="[
        ['label' => 'Toolkit', 'url' => '']
    ]" />

    <!-- Toolkit Hero Section -->
    <x-toolkit.hero-section />

    <!-- Toolkit Filters and Search -->
    <x-toolkit.filter-section>
        <x-slot name="filters">
            <x-toolkit.select 
                id="toolkit-type-filter"
                name="toolkit_type"
                :options="$categories->pluck('name', 'name')->toArray()"
                placeholder="Categories"
                data-filter-type="category"
            />
        </x-slot>
        
        <x-slot name="search">
            <x-core.text-input
                id="toolkit-search"
                name="search"
                placeholder="Search tools..."
                :leadingIcon="true"
                value="{{ request('search') }}"
                data-search-input
            >
                <x-slot name="leadingIcon">
                    <svg class="h-5 w-5 text-the-end-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </x-slot>
            </x-core.text-input>
        </x-slot>
    </x-toolkit.filter-section>

    <!-- Toolkit Grid with Toolkit Cards -->
    <div id="toolkit-grid-container">
        <x-toolkit.grid>
            @forelse($toolkits as $index => $toolkit)
                <div class="toolkit-card{{ $index >= 3 ? ' toolkit-card-pagination-hidden' : '' }}" 
                     data-category="{{ $toolkit->category->name ?? '' }}" 
                     data-tool="{{ $toolkit->category->name ?? '' }}" 
                     data-title="{{ $toolkit->title }}"
                     data-description="{{ $toolkit->description }}"
                     data-index="{{ $index }}">
                    <x-toolkit.card
                        title="{{ $toolkit->title }}"
                        description="{{ $toolkit->description }}"
                    >
                        <x-slot name="image">
                            @if($toolkit->image_path)
                                <img src="{{ asset('storage/' . $toolkit->image_path) }}" alt="{{ $toolkit->title }}" class="w-16 h-16 object-cover rounded-lg">
                            @else
                                <div class="w-16 h-16 bg-white-smoke-300 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-the-end-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            @endif
                        </x-slot>
                        
                        <x-slot name="tags">
                            @if($toolkit->category)
                                <x-toolkit.tags>{{ $toolkit->category->name }}</x-toolkit.tags>
                            @endif
                            
                            @if($toolkit->tags && is_array($toolkit->tags) && count($toolkit->tags) > 0)
                                @foreach($toolkit->tags as $tag)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            @endif
                        </x-slot>
                        
                        @if($toolkit->link_url)
                            <x-core.button 
                                variant="neutral" 
                                size="small"
                                onclick="window.open('{{ $toolkit->link_url }}', '_blank')"
                            >
                                {{ $toolkit->link_text ?? 'View Tool' }}
                            </x-core.button>
                        @else
                            <x-core.button variant="neutral" size="small" disabled>
                                View Tool
                            </x-core.button>
                        @endif
                    </x-toolkit.card>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-the-end-600">No toolkit items found.</p>
                </div>
            @endforelse
        </x-toolkit.grid>

        <!-- No Results Message -->
        <div id="no-results-message" class="hidden py-12 px-4 md:px-8 lg:px-16 text-center">
            <div class="max-w-lg mx-auto">
                <svg class="w-16 h-16 mx-auto text-the-end-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <h3 class="text-h4 font-medium text-the-end-900 mb-2">No tools found</h3>
                <p class="text-body text-the-end-600 mb-4">Try adjusting your search or filter criteria to find more tools.</p>
                <button id="clear-filters" class="text-pepper-green-600 hover:text-pepper-green-700 font-medium">
                    Clear all filters
                </button>
            </div>
        </div>
    </div>

    <!-- Load More Toolkit Button - Centered as per component documentation -->
    <section id="load-more-section" class="py-12 px-4 md:px-8 lg:px-16">
        <div class="max-w-7xl mx-auto text-center flex justify-center">
            <x-core.button id="load-more-btn" variant="secondary" size="large">
                Load More Tools
            </x-core.button>
        </div>
    </section>
@endsection 