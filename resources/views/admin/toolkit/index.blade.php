@extends('layouts.admin')

@section('title', 'Toolkit Management - Festa Design Studio')

@section('header_title', 'Toolkit Management')

@section('action_button')
<div class="flex gap-3">
    <a href="{{ route('admin.toolkit.categories.index') }}">
        <button class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-pot-of-gold-600/50 rounded-full hover:bg-pot-of-gold-50 active:bg-pot-of-gold-100 disabled:border-pot-of-gold-200 disabled:text-pot-of-gold-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pot-of-gold-600 focus:ring-offset-2">
            Manage Categories
        </button>
    </a>
    <a href="{{ route('admin.toolkit.create') }}">
        <button class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-pepper-green-600/50 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2">
            Create Toolkit Item
        </button>
    </a>
</div>
@endsection

@section('content')
<div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    <div class="">
        <div class="flex flex-col justify-between gap-3 items-center mb-8">
            <!-- Filters Form -->
            <form action="#" class="admin-filter-form w-full flex flex-col md:flex-row gap-3 justify-between">
                <!-- Category select -->
                <div class="relative">
                    <select name="category" class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600">
                        <option value="">All Categories</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-the-end-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                
                <!-- Status select -->
                <div class="relative">
                    <select name="status" class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600">
                        <option value="">All Status</option>
                        <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>Published</option>
                        <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="featured" {{ request('status') == 'featured' ? 'selected' : '' }}>Featured</option>
                    </select>
                    <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-the-end-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
                
                <!-- Search input -->
                <div class="relative">
                    <input type="text" name="search" value="{{ request('search') }}" class="w-full pl-10 pr-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50" placeholder="Search toolkit...">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-the-end-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
            </form>
        </div>

        <!-- Display session messages -->
        @if (session('success'))
            <div class="mb-4 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 p-4 bg-chicken-comb-50 border border-chicken-comb-300 text-chicken-comb-700 rounded-lg">
                {{ session('error') }}
            </div>
        @endif

        <div class="space-y-4 admin-toolkit-grid">
            @if($toolkits->isEmpty())
                <div class="flex justify-center p-8">
                    <p class="text-the-end-600">No toolkit items found.</p>
                </div>
            @else
                @foreach($toolkits as $toolkit)
                    <!-- admin toolkit card -->
                    <div class="admin-toolkit-item flex items-center justify-between p-4 bg-white-smoke-50 rounded-lg"
                         data-category="{{ $toolkit->category->name ?? '' }}"
                         data-status="{{ $toolkit->is_published ? 'published' : 'draft' }}"
                         data-featured="{{ $toolkit->is_featured ? 'featured' : '' }}"
                         data-title="{{ $toolkit->title }}"
                         data-description="{{ $toolkit->description }}">
                        <div class="flex items-center gap-4">
                            @if($toolkit->image_path)
                                <img src="{{ asset('storage/' . $toolkit->image_path) }}" alt="{{ $toolkit->title }}" class="w-16 h-16 object-cover rounded-lg">
                            @else
                                <div class="w-16 h-16 bg-white-smoke-300 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-the-end-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            @endif
                            
                            <div class="space-y-1">
                                <h4 class="text-body-lg font-medium text-the-end-900">
                                    {{ $toolkit->title }}
                                </h4>
                                <p class="text-body-sm text-the-end-600">
                                    {{ Str::limit($toolkit->description, 100) }}
                                </p>
                                <div class="flex gap-2 flex-wrap items-center mt-1">
                                    <!-- Category Tag -->
                                    @if($toolkit->category)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200">
                                        {{ $toolkit->category->name }}
                                    </span>
                                    @endif
                                    
                                    <!-- Status Tags -->
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm {{ $toolkit->is_published ? 'bg-pepper-green-100 text-pepper-green-700 border border-pepper-green-200' : 'bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200' }}">
                                        {{ $toolkit->is_published ? 'Published' : 'Draft' }}
                                    </span>
                                    
                                    @if($toolkit->is_featured)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-pot-of-gold-50 text-pot-of-gold-700 border border-pot-of-gold-200">
                                        Featured
                                    </span>
                                    @endif
                                    
                                    @if($toolkit->tags && is_array($toolkit->tags) && count($toolkit->tags) > 0)
                                    <span class="text-body-sm text-the-end-600">
                                        Tags: {{ implode(', ', $toolkit->tags) }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex gap-2">
                            <a href="{{ route('admin.toolkit.edit', $toolkit) }}" class="p-2 text-pepper-green-600 hover:bg-pepper-green-50 rounded-lg transition-colors">
                                Edit
                            </a>
                            @if($toolkit->link_url)
                            <a href="{{ $toolkit->link_url }}" target="_blank" class="p-2 text-pot-of-gold-500 hover:bg-pot-of-gold-50 rounded-lg transition-colors">
                                View
                            </a>
                            @endif
                            <form action="{{ route('admin.toolkit.destroy', $toolkit) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this toolkit item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-chicken-comb-600 hover:bg-chicken-comb-50 rounded-lg transition-colors">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="flex justify-between items-center mt-6">
            <p class="admin-count-display text-the-end-600">
                Showing {{ $toolkits->firstItem() ?? 0 }} to {{ $toolkits->lastItem() ?? 0 }} of {{ $toolkits->total() }} toolkit items
            </p>
            
            {{ $toolkits->links() }}
        </div>
    </div>
</div>
@endsection 