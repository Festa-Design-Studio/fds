@extends('layouts.admin')

@section('title', 'Design System - Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-900">Design System Management</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Design System Page -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Design System</h3>
                    <p class="text-gray-600 mb-4">Manage the design system documentation and components.</p>
                    <a href="{{ route('resources.design-system') }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        View Design System
                    </a>
                </div>

                <!-- Components Showcase -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Components Showcase</h3>
                    <p class="text-gray-600 mb-4">View all available UI components and their documentation.</p>
                    <a href="{{ route('components.showcase') }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        View Components
                    </a>
                </div>
            </div>

            <!-- Design System Info -->
            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">Design System Overview</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Colors -->
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg">
                        <h4 class="font-semibold text-blue-900 mb-2">Color Palette</h4>
                        <p class="text-blue-700 text-sm">Comprehensive color system with primary, secondary, and utility colors</p>
                        <div class="mt-3 flex space-x-2">
                            <div class="w-4 h-4 bg-blue-600 rounded"></div>
                            <div class="w-4 h-4 bg-green-600 rounded"></div>
                            <div class="w-4 h-4 bg-purple-600 rounded"></div>
                            <div class="w-4 h-4 bg-red-600 rounded"></div>
                        </div>
                    </div>

                    <!-- Typography -->
                    <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-lg">
                        <h4 class="font-semibold text-green-900 mb-2">Typography</h4>
                        <p class="text-green-700 text-sm">Type scale and font hierarchy for consistent text styling</p>
                        <div class="mt-3">
                            <div class="text-lg font-bold text-green-800">Aa</div>
                            <div class="text-sm text-green-600">Font Family & Scales</div>
                        </div>
                    </div>

                    <!-- Components -->
                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-lg">
                        <h4 class="font-semibold text-purple-900 mb-2">Components</h4>
                        <p class="text-purple-700 text-sm">Reusable UI components for consistent user experience</p>
                        <div class="mt-3">
                            <div class="inline-block px-3 py-1 bg-purple-600 text-white text-xs rounded">Button</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Design System Stats -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-blue-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-blue-600">50+</div>
                    <div class="text-blue-700">Components</div>
                </div>
                
                <div class="bg-green-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-green-600">12</div>
                    <div class="text-green-700">Color Variants</div>
                </div>
                
                <div class="bg-purple-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-purple-600">8</div>
                    <div class="text-purple-700">Typography Scales</div>
                </div>

                <div class="bg-red-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-red-600">100%</div>
                    <div class="text-red-700">Responsive</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 