@extends('layouts.admin')

@section('title', 'About - Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-900">About Management</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                <!-- Team Management -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Team Management</h3>
                    <p class="text-gray-600 mb-4">Manage team members, their profiles, and information.</p>
                    <a href="{{ route('admin.about.team.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Manage Team
                    </a>
                </div>

                <!-- SDG Management -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">SDG Goals Management</h3>
                    <p class="text-gray-600 mb-4">Upload and manage SDG goal icons displayed on the about page.</p>
                    <a href="{{ route('admin.about.sdg.index') }}" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Manage SDGs
                    </a>
                </div>

                <!-- Partners Management -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Partners Management</h3>
                    <p class="text-gray-600 mb-4">Manage partner organizations and their logos on the about page.</p>
                    <a href="{{ route('admin.about.partners.index') }}" class="inline-flex items-center px-4 py-2 bg-orange-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-700 focus:bg-orange-700 active:bg-orange-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Manage Partners
                    </a>
                </div>

                <!-- About Page Content -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">About Page Content</h3>
                    <p class="text-gray-600 mb-4">Edit the main about page content and sections.</p>
                    <a href="{{ route('about') }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-purple-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700 focus:bg-purple-700 active:bg-purple-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        View Page
                    </a>
                </div>
            </div>

            <!-- Enhanced Quick Stats -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-5 gap-6">
                <div class="bg-blue-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-blue-600">
                        {{ \App\Models\TeamMember::count() }}
                    </div>
                    <div class="text-blue-700">Team Members</div>
                </div>
                
                <div class="bg-green-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-green-600">
                        {{ \App\Models\AboutSdg::where('is_active', true)->count() }}
                    </div>
                    <div class="text-green-700">Active SDGs</div>
                </div>
                
                <div class="bg-orange-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-orange-600">
                        {{ \App\Models\AboutPartner::where('is_active', true)->count() }}
                    </div>
                    <div class="text-orange-700">Active Partners</div>
                </div>
                
                <div class="bg-yellow-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-yellow-600">
                        {{ \App\Models\AboutSdg::count() + \App\Models\AboutPartner::count() }}
                    </div>
                    <div class="text-yellow-700">Total Assets</div>
                </div>
                
                <div class="bg-purple-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-purple-600">Updated</div>
                    <div class="text-purple-700">Content Status</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 