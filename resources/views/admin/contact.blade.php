@extends('layouts.admin')

@section('title', 'Contact - Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-900">Contact Management</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Contact Page -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Contact Page</h3>
                    <p class="text-gray-600 mb-4">Manage the main contact page content and information.</p>
                    <a href="{{ route('contact') }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        View Page
                    </a>
                </div>

                <!-- Talk to Festa -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Talk to Festa</h3>
                    <p class="text-gray-600 mb-4">Manage the Talk to Festa consultation form and content.</p>
                    <a href="{{ route('contact.talk-to-festa') }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        View Page
                    </a>
                </div>
            </div>

            <!-- Contact Information Management -->
            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">Contact Information</h2>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Email</h4>
                            <p class="text-gray-600">hello@festadesignstudio.com</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Phone</h4>
                            <p class="text-gray-600">+1 (555) 123-4567</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Location</h4>
                            <p class="text-gray-600">Remote & Global</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Contact Stats -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-blue-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-blue-600">Active</div>
                    <div class="text-blue-700">Contact Form Status</div>
                </div>
                
                <div class="bg-green-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-green-600">24hr</div>
                    <div class="text-green-700">Response Time</div>
                </div>
                
                <div class="bg-purple-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-purple-600">100%</div>
                    <div class="text-purple-700">Response Rate</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 