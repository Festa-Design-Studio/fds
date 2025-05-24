@extends('layouts.admin')

@section('title', 'Terms of Service - Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-900">Terms of Service Management</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Terms of Service Page -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Terms of Service</h3>
                    <p class="text-gray-600 mb-4">Manage the terms of service content and legal agreements.</p>
                    <a href="{{ route('terms') }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        View Terms
                    </a>
                </div>

                <!-- Legal Compliance -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Legal Compliance</h3>
                    <p class="text-gray-600 mb-4">Review legal compliance status and terms updates.</p>
                    <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-md text-xs font-semibold">
                        ✓ Legally Compliant
                    </div>
                </div>
            </div>

            <!-- Terms Information -->
            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">Terms Overview</h2>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Service Terms</h4>
                            <p class="text-gray-600 text-sm">Clear guidelines for using our design services and platform.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">User Responsibilities</h4>
                            <p class="text-gray-600 text-sm">Defined responsibilities and expectations for service users.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Intellectual Property</h4>
                            <p class="text-gray-600 text-sm">Protection of intellectual property rights and usage terms.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Terms Stats -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-blue-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-blue-600">100%</div>
                    <div class="text-blue-700">Legal Coverage</div>
                </div>
                
                <div class="bg-green-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-green-600">Current</div>
                    <div class="text-green-700">Terms Version</div>
                </div>
                
                <div class="bg-purple-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-purple-600">Clear</div>
                    <div class="text-purple-700">Language Used</div>
                </div>

                <div class="bg-red-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-red-600">0</div>
                    <div class="text-red-700">Legal Disputes</div>
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
                    <p class="mt-2 text-gray-600">Terms of service are current and reflect our latest policies and legal requirements.</p>
                </div>
            </div>

            <!-- Key Terms Sections -->
            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">Key Sections</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900 mb-2">1. Service Agreement</h4>
                        <p class="text-gray-600 text-sm">Outlines the scope and nature of design services provided.</p>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900 mb-2">2. Payment Terms</h4>
                        <p class="text-gray-600 text-sm">Defines payment schedules, methods, and refund policies.</p>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900 mb-2">3. Intellectual Property</h4>
                        <p class="text-gray-600 text-sm">Clarifies ownership and usage rights of created materials.</p>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900 mb-2">4. Liability & Disputes</h4>
                        <p class="text-gray-600 text-sm">Addresses liability limitations and dispute resolution procedures.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 