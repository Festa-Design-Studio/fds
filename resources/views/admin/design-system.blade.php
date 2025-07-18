@extends('layouts.admin')

@section('title', 'Design System Management')

@section('header_title', 'Festa Design System')

@section('content')
<div class="p-8 max-w-7xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    {{-- Session Success Message --}}
    @if(session('success'))
        <div class="mb-6 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Design System Page -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-pepper-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Design System</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage the design system documentation and components.</p>
            <x-core.button variant="secondary" size="medium" href="{{ route('resources.design-system') }}" target="_blank" fullWidth="true">
                View Design System
            </x-core.button>
        </div>

        <!-- Components Showcase -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-chicken-comb-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-chicken-comb-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Components Showcase</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">View all available UI components and their documentation.</p>
            <x-core.button variant="secondary" size="medium" href="{{ route('components.showcase') }}" target="_blank" fullWidth="true">
                View Components
            </x-core.button>
        </div>
    </div>

    <!-- Design System Overview -->
    <div class="mt-8">
        <h2 class="text-h4 font-semibold text-the-end-900 mb-4">Festa Design System Overview</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Colors -->
            <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm">
                <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">Color Palette</h4>
                <p class="text-body-sm text-the-end-700 mb-4">Festa's unique color system with meaningful names</p>
                <div class="flex space-x-2">
                    <div class="w-6 h-6 bg-pepper-green-600 rounded-lg border border-white-smoke-300" title="Pepper Green"></div>
                    <div class="w-6 h-6 bg-chicken-comb-600 rounded-lg border border-white-smoke-300" title="Chicken Comb"></div>
                    <div class="w-6 h-6 bg-apocalyptic-orange-600 rounded-lg border border-white-smoke-300" title="Apocalyptic Orange"></div>
                    <div class="w-6 h-6 bg-pot-of-gold-600 rounded-lg border border-white-smoke-300" title="Pot of Gold"></div>
                    <div class="w-6 h-6 bg-the-end-600 rounded-lg border border-white-smoke-300" title="The End"></div>
                </div>
            </div>

            <!-- Typography -->
            <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm">
                <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">Typography</h4>
                <p class="text-body-sm text-the-end-700 mb-4">Semantic type scale for consistent hierarchy</p>
                <div class="space-y-1">
                    <div class="text-h4 font-bold text-the-end-900">Aa</div>
                    <div class="text-body text-the-end-700">Headers & Body</div>
                    <div class="text-body-sm text-the-end-600">Small Text</div>
                </div>
            </div>

            <!-- Components -->
            <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm">
                <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">Components</h4>
                <p class="text-body-sm text-the-end-700 mb-4">Reusable Blade components for consistency</p>
                <div class="space-y-2">
                    <button class="px-3 py-1 bg-pepper-green-600 text-white-smoke text-xs rounded-full">Primary</button>
                    <button class="px-3 py-1 border border-pepper-green-600 text-pepper-green-600 text-xs rounded-full">Secondary</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Design System Stats -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-pepper-green-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-pepper-green-600/50">Library</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Components</h3>
            <p class="text-h4 font-bold text-pepper-green-600">30+</p>
        </div>
        
        <div class="bg-chicken-comb-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-chicken-comb-600/50">Palette</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Color Tokens</h3>
            <p class="text-h4 font-bold text-chicken-comb-600">5</p>
        </div>
        
        <div class="bg-apocalyptic-orange-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-apocalyptic-orange-600/50">Type</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Typography Scales</h3>
            <p class="text-h4 font-bold text-apocalyptic-orange-600">6</p>
        </div>

        <div class="bg-pot-of-gold-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-pot-of-gold-600/50">Design</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Responsive</h3>
            <p class="text-h4 font-bold text-pot-of-gold-600">100%</p>
        </div>
    </div>
</div>
@endsection 