@extends('layouts.admin')

@section('title', 'Terms of Service Management')

@section('header_title', 'Terms of Service Management')

@section('content')
<div class="p-8 max-w-7xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    {{-- Session Success Message --}}
    @if(session('success'))
        <div class="mb-6 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Terms of Service Page -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-pepper-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Terms of Service</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage the terms of service content and legal agreements.</p>
            <x-core.button variant="secondary" size="medium" href="{{ route('terms') }}" target="_blank" fullWidth="true">
                View Terms
            </x-core.button>
        </div>

        <!-- Legal Compliance -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-chicken-comb-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-chicken-comb-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l3-1m-3 1l-3-1"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Legal Compliance</h3>
            </div>
            <p class="text-body text-the-end-700 mb-4">Review legal compliance status and terms updates.</p>
            <div class="inline-flex items-center px-4 py-2 bg-pepper-green-50 border border-pepper-green-200 text-pepper-green-700 rounded-full text-body-sm font-medium">
                ✓ Legally Compliant
            </div>
        </div>
    </div>

    <!-- Terms Overview -->
    <div class="mt-8">
        <h2 class="text-h4 font-semibold text-the-end-900 mb-4">Terms Overview</h2>
        <div class="bg-white-smoke-50 border border-white-smoke-300 p-6 rounded-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div>
                    <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">Service Terms</h4>
                    <p class="text-body-sm text-the-end-700">Clear guidelines for using our design services and platform.</p>
                </div>
                <div>
                    <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">User Responsibilities</h4>
                    <p class="text-body-sm text-the-end-700">Defined responsibilities and expectations for service users.</p>
                </div>
                <div>
                    <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">Intellectual Property</h4>
                    <p class="text-body-sm text-the-end-700">Protection of intellectual property rights and usage terms.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Terms Stats -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-pepper-green-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-pepper-green-600/50">Coverage</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Legal Coverage</h3>
            <p class="text-h4 font-bold text-pepper-green-600">100%</p>
        </div>
        
        <div class="bg-chicken-comb-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-chicken-comb-600/50">Version</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Terms Status</h3>
            <p class="text-h4 font-bold text-chicken-comb-600">Current</p>
        </div>
        
        <div class="bg-apocalyptic-orange-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-apocalyptic-orange-600/50">Clarity</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Language</h3>
            <p class="text-h4 font-bold text-apocalyptic-orange-600">Clear</p>
        </div>

        <div class="bg-pot-of-gold-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-pot-of-gold-600/50">Legal</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Disputes</h3>
            <p class="text-h4 font-bold text-pot-of-gold-600">0</p>
        </div>
    </div>

    <!-- Recent Updates -->
    <div class="mt-8">
        <h2 class="text-h4 font-semibold text-the-end-900 mb-4">Recent Updates</h2>
        <div class="bg-white border border-white-smoke-300 rounded-xl p-6">
            <div class="flex items-center text-body-sm text-the-end-700">
                <svg class="w-5 h-5 mr-2 text-pepper-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                Last updated: {{ now()->format('F j, Y') }}
            </div>
            <p class="mt-2 text-body text-the-end-700">Terms of service are current and reflect our latest policies and legal requirements.</p>
        </div>
    </div>

    <!-- Key Terms Sections -->
    <div class="mt-8">
        <h2 class="text-h4 font-semibold text-the-end-900 mb-4">Key Sections</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white border border-white-smoke-300 rounded-xl p-6">
                <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">1. Service Agreement</h4>
                <p class="text-body-sm text-the-end-700">Outlines the scope and nature of design services provided.</p>
            </div>
            <div class="bg-white border border-white-smoke-300 rounded-xl p-6">
                <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">2. Payment Terms</h4>
                <p class="text-body-sm text-the-end-700">Defines payment schedules, methods, and refund policies.</p>
            </div>
            <div class="bg-white border border-white-smoke-300 rounded-xl p-6">
                <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">3. Intellectual Property</h4>
                <p class="text-body-sm text-the-end-700">Clarifies ownership and usage rights of created materials.</p>
            </div>
            <div class="bg-white border border-white-smoke-300 rounded-xl p-6">
                <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">4. Liability & Disputes</h4>
                <p class="text-body-sm text-the-end-700">Addresses liability limitations and dispute resolution procedures.</p>
            </div>
        </div>
    </div>
</div>
@endsection 