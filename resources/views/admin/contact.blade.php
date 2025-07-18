@extends('layouts.admin')

@section('title', 'Contact Management')

@section('header_title', 'Contact Management')

@section('content')
<div class="p-8 max-w-7xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    {{-- Session Success Message --}}
    @if(session('success'))
        <div class="mb-6 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Contact Page -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-pepper-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Contact Page</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage the main contact page content and information.</p>
            <x-core.button variant="secondary" size="medium" href="{{ route('contact') }}" target="_blank" fullWidth="true">
                View Page
            </x-core.button>
        </div>

        <!-- Talk to Festa -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-chicken-comb-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-chicken-comb-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Talk to Festa</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage the Talk to Festa consultation form and content.</p>
            <x-core.button variant="secondary" size="medium" href="{{ route('contact.talk-to-festa') }}" target="_blank" fullWidth="true">
                View Page
            </x-core.button>
        </div>
    </div>

    <!-- Contact Information Management -->
    <div class="mt-8">
        <h2 class="text-h4 font-semibold text-the-end-900 mb-4">Contact Information</h2>
        <div class="bg-white-smoke-50 border border-white-smoke-300 p-6 rounded-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div>
                    <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">Email</h4>
                    <p class="text-body text-the-end-700">hello@festadesignstudio.com</p>
                </div>
                <div>
                    <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">Phone</h4>
                    <p class="text-body text-the-end-700">+1 (555) 123-4567</p>
                </div>
                <div>
                    <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">Location</h4>
                    <p class="text-body text-the-end-700">Remote & Global</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Stats -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-pepper-green-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-pepper-green-600/50">Status</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Contact Form</h3>
            <p class="text-h4 font-bold text-pepper-green-600">Active</p>
        </div>
        
        <div class="bg-chicken-comb-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-chicken-comb-600/50">Service</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Response Time</h3>
            <p class="text-h4 font-bold text-chicken-comb-600">24hr</p>
        </div>
        
        <div class="bg-apocalyptic-orange-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-apocalyptic-orange-600/50">Quality</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Response Rate</h3>
            <p class="text-h4 font-bold text-apocalyptic-orange-600">100%</p>
        </div>
    </div>
</div>
@endsection 