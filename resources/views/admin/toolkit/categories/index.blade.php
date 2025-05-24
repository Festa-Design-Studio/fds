@extends('layouts.admin')

@section('title', 'Toolkit Categories - Festa Design Studio')

@section('header_title', 'Toolkit Categories')

@section('action_button')
<div class="flex gap-3">
    <a href="{{ route('admin.toolkit.index') }}">
        <button class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-the-end-600/50 rounded-full hover:bg-the-end-50 active:bg-the-end-100 disabled:border-the-end-200 disabled:text-the-end-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-the-end-600 focus:ring-offset-2">
            Back to Toolkit
        </button>
    </a>
    <a href="{{ route('admin.toolkit.categories.create') }}">
        <button class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-pepper-green-600/50 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2">
            Create Category
        </button>
    </a>
</div>
@endsection

@section('content')
<div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
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

    <div class="space-y-4">
        @if($categories->isEmpty())
            <div class="flex justify-center p-8">
                <p class="text-the-end-600">No categories found.</p>
            </div>
        @else
            @foreach($categories as $category)
                <div class="flex items-center justify-between p-4 bg-white-smoke-50 rounded-lg">
                    <div class="space-y-1">
                        <h4 class="text-body-lg font-medium text-the-end-900">
                            {{ $category->name }}
                        </h4>
                        @if($category->description)
                            <p class="text-body-sm text-the-end-600">
                                {{ $category->description }}
                            </p>
                        @endif
                        <div class="flex gap-2 flex-wrap items-center mt-1">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm {{ $category->is_active ? 'bg-pepper-green-100 text-pepper-green-700 border border-pepper-green-200' : 'bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200' }}">
                                {{ $category->is_active ? 'Active' : 'Inactive' }}
                            </span>
                            <span class="text-body-sm text-the-end-600">
                                {{ $category->toolkits_count ?? $category->toolkits->count() }} items
                            </span>
                            <span class="text-body-sm text-the-end-600">
                                Order: {{ $category->sort_order }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="flex gap-2">
                        <a href="{{ route('admin.toolkit.categories.edit', $category) }}" class="p-2 text-pepper-green-600 hover:bg-pepper-green-50 rounded-lg transition-colors">
                            Edit
                        </a>
                        <form action="{{ route('admin.toolkit.categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
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

    @if($categories->hasPages())
        <div class="mt-6">
            {{ $categories->links() }}
        </div>
    @endif
</div>
@endsection 