@extends('layouts.admin') {{-- Or your admin layout --}}

@section('title', 'Edit Blog Article')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-semibold text-gray-700 mb-6">Edit Article: {{ $article->title }}</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('admin.blog.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <div class="mb-4">
                <x-core.input type="text" name="title" id="title" label="Title" value="{{ old('title', $article->title) }}" required />
                @error('title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Slug --}}
            <div class="mb-4">
                <x-core.input type="text" name="slug" id="slug" label="Slug" value="{{ old('slug', $article->slug) }}" />
                @error('slug') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Excerpt --}}
            <div class="mb-4">
                <x-core.textarea name="excerpt" id="excerpt" label="Excerpt" rows="3">{{ old('excerpt', $article->excerpt) }}</x-core.textarea>
                @error('excerpt') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Content --}}
            <div class="mb-4">
                <x-core.textarea name="content" id="content" label="Content" rows="10" required>{{ old('content', $article->content) }}</x-core.textarea>
                @error('content') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Current Featured Image --}}
            @if($article->image_path)
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Current Featured Image</label>
                <img src="{{ asset('storage/' . $article->image_path) }}" alt="{{ $article->title }}" class="max-h-48 rounded-md shadow-sm">
            </div>
            @endif

            {{-- New Featured Image --}}
            <div class="mb-4">
                <x-core.file-upload name="image" id="image" label="Change Featured Image (optional)" accept="image/*" />
                @error('image') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Category --}}
            <div class="mb-4">
                <x-core.select name="category_id" id="category_id" label="Category">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </x-core.select>
                @error('category_id') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Author --}}
            <div class="mb-4">
                 <x-core.select name="user_id" id="user_id" label="Author" required>
                    <option value="">Select Author</option>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}" {{ old('user_id', $article->user_id) == $author->id ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </x-core.select>
                @error('user_id') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Published At --}}
            <div class="mb-4">
                <x-core.input type="datetime-local" name="published_at" id="published_at" label="Publish At" value="{{ old('published_at', $article->published_at ? $article->published_at->format('Y-m-d\TH:i') : '') }}" />
                @error('published_at') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Status --}}
            <div class="mb-4">
                <x-core.select name="status" id="status" label="Status" required>
                    <option value="draft" {{ old('status', $article->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $article->status) == 'published' ? 'selected' : '' }}>Published</option>
                    <option value="archived" {{ old('status', $article->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                </x-core.select>
                @error('status') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Meta Title --}}
            <div class="mb-4">
                <x-core.input type="text" name="meta_title" id="meta_title" label="Meta Title (SEO)" value="{{ old('meta_title', $article->meta_title) }}" />
                @error('meta_title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Meta Description --}}
            <div class="mb-4">
                <x-core.textarea name="meta_description" id="meta_description" label="Meta Description (SEO)" rows="2">{{ old('meta_description', $article->meta_description) }}</x-core.textarea>
                @error('meta_description') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Reading Time --}}
            <div class="mb-4">
                <x-core.input type="number" name="reading_time" id="reading_time" label="Reading Time (minutes)" value="{{ old('reading_time', $article->reading_time) }}" min="1" />
                @error('reading_time') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mt-6">
                <x-core.button type="submit" variant="primary">Update Article</x-core.button>
                <a href="{{ route('admin.blog.posts') }}" class="ml-2 text-gray-600 hover:text-gray-900">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection 