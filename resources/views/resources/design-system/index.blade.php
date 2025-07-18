@extends('layouts.app')

@section('title', 'Design System - Festa Design Studio')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50">
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-32 h-32 bg-pepper-green-600 rounded-full blur-3xl"></div>
            <div class="absolute top-40 right-20 w-24 h-24 bg-chicken-comb-600 rounded-full blur-2xl"></div>
            <div class="absolute bottom-20 left-1/3 w-28 h-28 bg-apocalyptic-orange-600 rounded-full blur-3xl"></div>
            <div class="absolute bottom-40 right-10 w-20 h-20 bg-pot-of-gold-600 rounded-full blur-2xl"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative max-w-6xl mx-auto px-8 py-16 text-center">
            <!-- Coming Soon Badge -->
            <div class="inline-flex items-center mb-8">
                <x-core.tag variant="info" withIcon="true">
                    Design System in Development
                </x-core.tag>
            </div>
            
            <!-- Main Heading -->
            <h1 class="text-h1 md:text-6xl lg:text-7xl font-bold text-the-end-900 mb-6 leading-tight">
                <span class="bg-gradient-to-r from-pepper-green-600 via-chicken-comb-600 to-apocalyptic-orange-600 bg-clip-text text-transparent">
                    Festa interface system
                </span>
            </h1>
            
            <!-- Description -->
            <p class="text-body-lg text-the-end-600 max-w-2xl mx-auto leading-relaxed">
                A comprehensive design system built for impact. Discover our thoughtfully crafted components that power our communication efforts.
            </p>
            
        </div>
    </div>

    <!-- Design System Navigation -->
    <div class="max-w-6xl mx-auto px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Component Library -->
            <div class="bg-white border border-white-smoke-300 rounded-2xl p-8 shadow-sm hover:shadow-md transition-all duration-300 group">
                <div class="w-16 h-16 bg-pepper-green-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <h3 class="text-h4 font-semibold text-the-end-900 mb-3">Component Library</h3>
                <p class="text-body text-the-end-600 mb-4">50+ production-ready components with comprehensive documentation and usage examples.</p>
                <div class="flex items-center justify-between">
                    <x-core.tag variant="success">30+ Components Ready</x-core.tag>
                    <x-core.button variant="secondary" size="small" href="{{ route('resources.design-system.components') }}">
                        Explore
                    </x-core.button>
                </div>
            </div>
            
            <!-- Design Tokens -->
            <div class="bg-white border border-white-smoke-300 rounded-2xl p-8 shadow-sm hover:shadow-md transition-all duration-300 group">
                <div class="w-16 h-16 bg-chicken-comb-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-chicken-comb-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"/>
                    </svg>
                </div>
                <h3 class="text-h4 font-semibold text-the-end-900 mb-3">Design Tokens</h3>
                <p class="text-body text-the-end-600 mb-4">Meaningful color names, semantic spacing, and typography scales for consistent design.</p>
                <div class="flex items-center justify-between">
                    <x-core.tag variant="warning">6 Color Families</x-core.tag>
                    <x-core.button variant="secondary" size="small" href="{{ route('resources.design-system.tokens') }}">
                        Explore
                    </x-core.button>
                </div>
            </div>
            
            <!-- Documentation -->
            <div class="bg-white border border-white-smoke-300 rounded-2xl p-8 shadow-sm hover:shadow-md transition-all duration-300 group">
                <div class="w-16 h-16 bg-apocalyptic-orange-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-apocalyptic-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h3 class="text-h4 font-semibold text-the-end-900 mb-3">Guidelines</h3>
                <p class="text-body text-the-end-600 mb-4">Comprehensive guidelines for accessibility, usage patterns, and best practices.</p>
                <div class="flex items-center justify-between">
                    <x-core.tag variant="info">Interactive Docs</x-core.tag>
                    <x-core.button variant="secondary" size="small" href="{{ route('resources.design-system.guidelines') }}">
                        Explore
                    </x-core.button>
                </div>
            </div>
        </div>
    </div>




</div>

<!-- Add some custom CSS for additional polish -->
<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.bg-gradient-to-r {
    animation: float 6s ease-in-out infinite;
}

.group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
}

/* Smooth progress bar animation */
[style*="width:"] {
    transition: width 0.3s ease-in-out;
}
</style>
@endsection 