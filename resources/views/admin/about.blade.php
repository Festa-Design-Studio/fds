@extends('layouts.admin')

@section('title', 'About Management')

@section('header_title', 'About Management')

@section('content')
<div class="p-8 max-w-7xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    {{-- Session Success Message --}}
    @if(session('success'))
        <div class="mb-6 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Team Management -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-pepper-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Team Management</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage team members, their profiles, and information.</p>
            <x-core.button variant="primary" size="medium" href="{{ route('admin.about.team.index') }}" fullWidth="true">
                Manage Team
            </x-core.button>
        </div>

        <!-- SDG Management -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-chicken-comb-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-chicken-comb-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">SDG Goals Management</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Upload and manage SDG goal icons displayed on the about page.</p>
            <x-core.button variant="primary" size="medium" href="{{ route('admin.about.sdg.index') }}" fullWidth="true">
                Manage SDGs
            </x-core.button>
        </div>

        <!-- Partners Management -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-apocalyptic-orange-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-apocalyptic-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Partners Management</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage partner organizations and their logos on the about page.</p>
            <x-core.button variant="primary" size="medium" href="{{ route('admin.about.partners.index') }}" fullWidth="true">
                Manage Partners
            </x-core.button>
        </div>

        <!-- Design for Good Content -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-pot-of-gold-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-pot-of-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Design for Good Content</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage content sections for the "We Design for Good" page.</p>
            <x-core.button variant="primary" size="medium" href="{{ route('admin.about.design-for-good.index') }}" fullWidth="true">
                Manage Content
            </x-core.button>
        </div>

        <!-- About Page Content -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-pepper-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">About Page Content</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">View the main about page content and sections.</p>
            <x-core.button variant="secondary" size="medium" href="{{ route('about') }}" target="_blank" fullWidth="true">
                View Page
            </x-core.button>
        </div>
    </div>

    <!-- About Stats -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-pepper-green-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-pepper-green-600/50">Team</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Team Members</h3>
            <p class="text-h4 font-bold text-pepper-green-600">{{ \App\Models\TeamMember::count() }}</p>
        </div>
        
        <div class="bg-chicken-comb-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-chicken-comb-600/50">Goals</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Active SDGs</h3>
            <p class="text-h4 font-bold text-chicken-comb-600">{{ \App\Models\AboutSdg::where('is_active', true)->count() }}</p>
        </div>
        
        <div class="bg-apocalyptic-orange-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-apocalyptic-orange-600/50">Partners</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Active Partners</h3>
            <p class="text-h4 font-bold text-apocalyptic-orange-600">{{ \App\Models\AboutPartner::where('is_active', true)->count() }}</p>
        </div>

        <div class="bg-pot-of-gold-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-pot-of-gold-600/50">Content</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Content Sections</h3>
            <p class="text-h4 font-bold text-pot-of-gold-600">{{ \App\Models\DesignForGoodContent::where('is_active', true)->count() }}</p>
        </div>
    </div>
</div>
@endsection 