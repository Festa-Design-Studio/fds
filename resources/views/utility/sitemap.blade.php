@extends('layouts.app')

@section('title', 'Sitemap - Festa Design Studio')

@section('content')
<div class="container mx-auto px-4 py-16">
    {{-- Header Section --}}
    <div class="mb-16 text-center">
        <h1 class="text-display font-black text-the-end-900 mb-4">Sitemap</h1>
        <p class="text-body text-the-end-600 max-w-2xl mx-auto">
            Find all pages and content on our website. This comprehensive directory helps you navigate through our work, insights, and information about Festa Design Studio.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        {{-- Main Pages --}}
        <div class="bg-white-smoke-100 p-8 rounded-lg">
            <h2 class="text-h2 font-bold text-pepper-green mb-6">Main Pages</h2>
            <ul class="space-y-3">
                @foreach($static_pages as $page)
                    <li>
                        <a href="{{ $page['url'] }}" class="text-body text-the-end-700 hover:text-chicken-comb-600 transition-colors duration-200 block py-1">
                            {{ $page['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Blog Categories --}}
        @if($blog_categories->count() > 0)
        <div class="bg-white-smoke-100 p-8 rounded-lg">
            <h2 class="text-h2 font-bold text-pepper-green mb-6">Blog Categories</h2>
            <ul class="space-y-3">
                @foreach($blog_categories as $category)
                    <li class="flex justify-between items-center">
                        <a href="{{ $category['url'] }}" class="text-body text-the-end-700 hover:text-chicken-comb-600 transition-colors duration-200">
                            {{ $category['name'] }}
                        </a>
                        <span class="text-small text-the-end-500 bg-white-smoke-300 px-2 py-1 rounded">
                            {{ $category['count'] }} articles
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
        @endif

        {{-- Featured Work --}}
        @if($featured_projects->count() > 0)
        <div class="bg-white-smoke-100 p-8 rounded-lg">
            <h2 class="text-h2 font-bold text-pepper-green mb-6">Featured Work</h2>
            <ul class="space-y-3">
                @foreach($featured_projects as $project)
                    <li>
                        <a href="{{ $project['url'] }}" class="block py-2 group">
                            <div class="text-body text-the-end-700 group-hover:text-chicken-comb-600 transition-colors duration-200 font-medium">
                                {{ $project['title'] }}
                            </div>
                            @if($project['client'])
                                <div class="text-small text-the-end-500">
                                    {{ $project['client'] }}
                                </div>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        @endif

        {{-- Recent Blog Articles --}}
        @if($recent_articles->count() > 0)
        <div class="bg-white-smoke-100 p-8 rounded-lg">
            <h2 class="text-h2 font-bold text-pepper-green mb-6">Recent Articles</h2>
            <ul class="space-y-3">
                @foreach($recent_articles as $article)
                    <li>
                        <a href="{{ $article['url'] }}" class="block py-2 group">
                            <div class="text-body text-the-end-700 group-hover:text-chicken-comb-600 transition-colors duration-200 font-medium">
                                {{ $article['title'] }}
                            </div>
                            <div class="text-body-sm text-the-end-400">
                                {{ $article['published_at']->format('M j, Y') }}
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    {{-- All Projects Section --}}
    @if($all_projects->count() > 0)
    <div class="mt-12">
        <div class="bg-white-smoke-100 p-8 rounded-lg">
            <h2 class="text-h2 font-bold text-pepper-green mb-6">All Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach($all_projects as $project)
                    <div class="flex justify-between items-start py-2">
                        <a href="{{ $project['url'] }}" class="flex-1 group">
                            <div class="text-body text-the-end-700 group-hover:text-chicken-comb-600 transition-colors duration-200 font-medium">
                                {{ $project['title'] }}
                                @if($project['is_featured'])
                                    <span class="inline-block ml-2 px-2 py-1 text-xs bg-chicken-comb-100 text-chicken-comb-700 rounded">Featured</span>
                                @endif
                            </div>
                            @if($project['client'])
                                <div class="text-body-sm text-the-end-400">
                                    {{ $project['client'] }}
                                </div>
                            @endif
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    {{-- Clients Section --}}
    @if($clients->count() > 0)
    <div class="mt-12 mb-12">
        <div class="bg-white-smoke-100 p-8 rounded-lg">
            <h2 class="text-h2 font-bold text-pepper-green mb-6">Our Clients</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($clients as $client)
                    <div class="flex justify-between items-center py-2">
                        <a href="{{ $client['url'] }}" class="text-body text-the-end-700 hover:text-chicken-comb-600 transition-colors duration-200">
                            {{ $client['name'] }}
                        </a>
                        <span class="text-small text-the-end-500 bg-white-smoke-300 px-2 py-1 rounded">
                            {{ $client['projects_count'] }} {{ Str::plural('project', $client['projects_count']) }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    {{-- XML Sitemaps for SEO --}}
    <div class="mt-16 text-center">
        <div class="bg-pepper-green-50 p-6 rounded-lg inline-block">
            <h3 class="text-h3 font-semibold text-pepper-green-900 mb-3">XML Sitemaps</h3>
            <p class="text-body text-pepper-green-700 mb-4">Machine-readable sitemaps for search engines</p>
            <div class="space-x-4">
                <a href="{{ route('sitemap.xml') }}" class="inline-block px-4 py-2 bg-pepper-green-600 text-white rounded hover:bg-pepper-green-700 transition-colors duration-200 text-small font-medium">
                    Main Sitemap
                </a>
                <a href="{{ route('sitemap.static') }}" class="inline-block px-4 py-2 bg-pepper-green-100 text-pepper-green-700 rounded hover:bg-pepper-green-200 transition-colors duration-200 text-small font-medium">
                    Static Pages
                </a>
                <a href="{{ route('sitemap.blog') }}" class="inline-block px-4 py-2 bg-pepper-green-100 text-pepper-green-700 rounded hover:bg-pepper-green-200 transition-colors duration-200 text-small font-medium">
                    Blog
                </a>
                <a href="{{ route('sitemap.work') }}" class="inline-block px-4 py-2 bg-pepper-green-100 text-pepper-green-700 rounded hover:bg-pepper-green-200 transition-colors duration-200 text-small font-medium">
                    Work
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 