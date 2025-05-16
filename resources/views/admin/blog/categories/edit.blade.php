@extends('layouts.admin')

@section('title', 'Edit Blog Category')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Edit Blog Category: {{ $category->name }}</h1>
                    <a href="{{ route('admin.blog.categories.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Back to List
                    </a>
                </div>

                <form method="POST" action="{{ route('admin.blog.categories.update', $category) }}">
                    @csrf
                    @method('PUT')
                    @include('admin.blog.categories._form', ['category' => $category])
                    <div class="mt-6">
                        <x-core.button type="submit" variant="primary">
                            Update Category
                        </x-core.button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 