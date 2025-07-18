@extends('layouts.admin')

@section('title', 'Services Management')

@section('header_title', 'Services Management')

@section('content')
<div class="p-8 max-w-7xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    {{-- Session Success Message --}}
    @if(session('success'))
        <div class="mb-6 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Project Design -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-pepper-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Project Design</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage project design service content and examples.</p>
            <x-core.button variant="primary" size="medium" href="{{ route('admin.services.edit', 'project_design') }}" fullWidth="true">
                Edit Service
            </x-core.button>
        </div>

        <!-- Communication Design -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-chicken-comb-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-chicken-comb-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Communication Design</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage communication design service content.</p>
            <x-core.button variant="primary" size="medium" href="{{ route('admin.services.edit', 'communication_design') }}" fullWidth="true">
                Edit Service
            </x-core.button>
        </div>

        <!-- Campaign Design -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-apocalyptic-orange-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-apocalyptic-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Campaign Design</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage campaign design service content.</p>
            <x-core.button variant="primary" size="medium" href="{{ route('admin.services.edit', 'campaign_design') }}" fullWidth="true">
                Edit Service
            </x-core.button>
        </div>

        <!-- Nonprofits Sector -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-pot-of-gold-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-pot-of-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Nonprofits Sector</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage nonprofit sector content and case studies.</p>
            <x-core.button variant="primary" size="medium" href="{{ route('admin.services.sectors.edit', 'nonprofit') }}" fullWidth="true">
                Edit Sector
            </x-core.button>
        </div>

        <!-- Startup Sector -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-leaf-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-leaf-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Startup Sector</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage startup sector content and case studies.</p>
            <x-core.button variant="primary" size="medium" href="{{ route('admin.services.sectors.edit', 'startup') }}" fullWidth="true">
                Edit Sector
            </x-core.button>
        </div>

        <!-- Main Services -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-pepper-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Main Services Page</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage the main services page content and SEO settings.</p>
            <div class="space-y-3">
                <a href="{{ route('admin.services.edit', 'main_page') }}" 
                   class="block w-full bg-red-600 text-white text-center py-4 px-6 rounded-lg hover:bg-red-700 transition-colors font-bold text-lg">
                    🎨 EDIT MAIN PAGE CONTENT & SEO 🎨
                </a>
                <x-core.button variant="secondary" size="medium" href="{{ route('services') }}" target="_blank" fullWidth="true">
                    View Page
                </x-core.button>
            </div>
        </div>
    </div>

    <!-- Service Stats -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-pepper-green-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-pepper-green-600/50">Services</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Service Types</h3>
            <p class="text-h4 font-bold text-pepper-green-600">3</p>
        </div>
        
        <div class="bg-chicken-comb-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-chicken-comb-600/50">Sectors</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Total Sectors</h3>
            <p class="text-h4 font-bold text-chicken-comb-600">2</p>
        </div>
        
        <div class="bg-apocalyptic-orange-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-apocalyptic-orange-600/50">Portfolio</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Total Projects</h3>
            <p class="text-h4 font-bold text-apocalyptic-orange-600">{{ \App\Models\Project::count() }}</p>
        </div>

        <div class="bg-pot-of-gold-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-pot-of-gold-600/50">Clients</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Total Clients</h3>
            <p class="text-h4 font-bold text-pot-of-gold-600">{{ \App\Models\Client::count() }}</p>
        </div>
    </div>
</div>
@endsection 