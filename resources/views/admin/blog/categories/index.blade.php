@extends('layouts.admin')

@section('title', 'Blog Categories')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-700 dark:text-white">Blog Categories</h1>
        <a href="{{ route('admin.blog.categories.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Create New Category
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 dark:bg-green-700 dark:text-green-100 dark:border-green-600" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif
    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 dark:bg-red-700 dark:text-red-100 dark:border-red-600" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-600 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                        Name
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-600 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                        Slug
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-600 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                        Description
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-600 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                        No. of Articles
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-600 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                        Color
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 dark:border-gray-600 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @forelse ($categories as $category)
                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                        <td class="px-5 py-4 border-b border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-900 dark:text-white whitespace-no-wrap">{{ $category->name }}</p>
                        </td>
                        <td class="px-5 py-4 border-b border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-900 dark:text-white whitespace-no-wrap">{{ $category->slug }}</p>
                        </td>
                        <td class="px-5 py-4 border-b border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-900 dark:text-white whitespace-no-wrap">{{ Str::limit($category->description, 50) }}</p>
                        </td>
                        <td class="px-5 py-4 border-b border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-900 dark:text-white whitespace-no-wrap">{{ $category->articles_count ?? $category->articles->count() }}</p>
                        </td>
                        <td class="px-5 py-4 border-b border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm">
                            @if($category->color_class)
                                <span class="inline-block w-8 h-6 rounded {{ $category->color_class }} border border-gray-200"></span>
                                <span class="ml-2 text-xs text-gray-500">{{ $category->color_class }}</span>
                            @else
                                <span class="text-xs text-gray-400">None</span>
                            @endif
                        </td>
                        <td class="px-5 py-4 border-b border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm whitespace-nowrap">
                            <a href="{{ route('admin.blog.categories.edit', $category) }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300 mr-3 font-medium">Edit</a>
                            <form action="{{ route('admin.blog.categories.destroy', $category) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this category? This action cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300 font-medium">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-5 py-5 border-b border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm text-center text-gray-500 dark:text-gray-400">
                            No categories found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
         <div class="px-5 py-4 bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-600 flex flex-col xs:flex-row items-center xs:justify-between">
            {{ $categories->links() }}
        </div>
    </div>
</div>
@endsection 