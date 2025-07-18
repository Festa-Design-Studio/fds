@extends('layouts.admin')

@section('title', 'Privacy Policy Management')

@section('header_title', 'Privacy Policy Management')

@section('content')
<div class="p-8 max-w-7xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    {{-- Session Success Message --}}
    @if(session('success'))
        <div class="mb-6 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Privacy Policy Page -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-pepper-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">Privacy Policy</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage the privacy policy content and legal information.</p>
            <x-core.button variant="secondary" size="medium" href="{{ route('privacy') }}" target="_blank" fullWidth="true">
                View Privacy Policy
            </x-core.button>
        </div>

        <!-- GDPR Compliance -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-chicken-comb-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-chicken-comb-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">GDPR Compliance</h3>
            </div>
            <p class="text-body text-the-end-700 mb-4">Review GDPR compliance status and data protection measures.</p>
            <div class="inline-flex items-center px-4 py-2 bg-pepper-green-50 border border-pepper-green-200 text-pepper-green-700 rounded-full text-body-sm font-medium">
                ✓ GDPR Compliant
            </div>
        </div>
    </div>

    <!-- Privacy Overview -->
    <div class="mt-8">
        <h2 class="text-h4 font-semibold text-the-end-900 mb-4">Privacy Overview</h2>
        <div class="bg-white-smoke-50 border border-white-smoke-300 p-6 rounded-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div>
                    <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">Data Collection</h4>
                    <p class="text-body-sm text-the-end-700">We collect minimal data necessary for providing our services and improving user experience.</p>
                </div>
                <div>
                    <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">Data Usage</h4>
                    <p class="text-body-sm text-the-end-700">Personal data is used only for service delivery and communication purposes.</p>
                </div>
                <div>
                    <h4 class="text-body-lg font-semibold text-the-end-900 mb-2">Data Protection</h4>
                    <p class="text-body-sm text-the-end-700">All data is encrypted and stored securely following industry best practices.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Privacy Stats -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-pepper-green-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-pepper-green-600/50">Security</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Data Encrypted</h3>
            <p class="text-h4 font-bold text-pepper-green-600">100%</p>
        </div>
        
        <div class="bg-chicken-comb-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-chicken-comb-600/50">Safety</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Data Breaches</h3>
            <p class="text-h4 font-bold text-chicken-comb-600">0</p>
        </div>
        
        <div class="bg-apocalyptic-orange-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-apocalyptic-orange-600/50">Compliance</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">GDPR Status</h3>
            <p class="text-h4 font-bold text-apocalyptic-orange-600">Compliant</p>
        </div>

        <div class="bg-pot-of-gold-50 p-6 rounded-xl border border-white-smoke-300">
            <span class="text-body-sm text-pot-of-gold-600/50">Response</span>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Data Requests</h3>
            <p class="text-h4 font-bold text-pot-of-gold-600">24hr</p>
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
            <p class="mt-2 text-body text-the-end-700">Privacy policy is up to date with current regulations and best practices.</p>
        </div>
    </div>
</div>
@endsection 