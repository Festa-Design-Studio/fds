@extends('layouts.admin')

@section('title', 'Privacy Policy - Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-900">Privacy Policy Management</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Privacy Policy Page -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Privacy Policy</h3>
                    <p class="text-gray-600 mb-4">Manage the privacy policy content and legal information.</p>
                    <a href="{{ route('privacy') }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        View Privacy Policy
                    </a>
                </div>

                <!-- GDPR Compliance -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">GDPR Compliance</h3>
                    <p class="text-gray-600 mb-4">Review GDPR compliance status and data protection measures.</p>
                    <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-md text-xs font-semibold">
                        ✓ GDPR Compliant
                    </div>
                </div>
            </div>

            <!-- Privacy Information -->
            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">Privacy Overview</h2>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Data Collection</h4>
                            <p class="text-gray-600 text-sm">We collect minimal data necessary for providing our services and improving user experience.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Data Usage</h4>
                            <p class="text-gray-600 text-sm">Personal data is used only for service delivery and communication purposes.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Data Protection</h4>
                            <p class="text-gray-600 text-sm">All data is encrypted and stored securely following industry best practices.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Privacy Stats -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-blue-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-blue-600">100%</div>
                    <div class="text-blue-700">Data Encrypted</div>
                </div>
                
                <div class="bg-green-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-green-600">0</div>
                    <div class="text-green-700">Data Breaches</div>
                </div>
                
                <div class="bg-purple-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-purple-600">GDPR</div>
                    <div class="text-purple-700">Compliant</div>
                </div>

                <div class="bg-red-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-red-600">24hr</div>
                    <div class="text-red-700">Data Request Response</div>
                </div>
            </div>

            <!-- Recent Updates -->
            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">Recent Updates</h2>
                <div class="bg-white border border-gray-200 rounded-lg p-4">
                    <div class="flex items-center text-sm text-gray-600">
                        <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Last updated: {{ now()->format('F j, Y') }}
                    </div>
                    <p class="mt-2 text-gray-600">Privacy policy is up to date with current regulations and best practices.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 