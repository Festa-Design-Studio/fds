@extends('layouts.admin')

@section('title', 'Edit Toolkit Item - Festa Design Studio')

@section('header_title', 'Edit Toolkit Item')

@section('content')
<div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    <form action="{{ route('admin.toolkit.update', $toolkit) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')
        
        <!-- Title -->
        <div>
            <x-core.input-label for="title" :value="__('Title')" />
            <x-core.text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $toolkit->title)" required />
            <x-core.input-error class="mt-2" :messages="$errors->get('title')" />
        </div>

        <!-- Description -->
        <div>
            <x-core.input-label for="description" :value="__('Description')" />
            <x-core.textarea id="description" name="description" class="mt-1 block w-full" rows="4" required>{{ old('description', $toolkit->description) }}</x-core.textarea>
            <x-core.input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <!-- Current Image -->
        @if($toolkit->image_path)
        <div>
            <x-core.input-label :value="__('Current Image')" />
            <img src="{{ asset('storage/' . $toolkit->image_path) }}" alt="{{ $toolkit->title }}" class="mt-1 w-32 h-32 object-cover rounded-lg">
        </div>
        @endif

        <!-- Image -->
        <div>
            <x-core.input-label for="image" :value="__('New Image')" />
            <x-core.file-upload id="image" name="image" class="mt-1 block w-full" accept=".jpeg,.jpg,.png,.gif,.svg,.webp,image/jpeg,image/png,image/gif,image/svg+xml,image/webp" />
            <x-core.input-error class="mt-2" :messages="$errors->get('image')" />
            <p class="mt-1 text-sm text-the-end-600">Upload a new image to replace the current one (JPEG, PNG, JPG, GIF, SVG, WebP. Max size: 2MB)</p>
        </div>

        <!-- Category -->
        <div>
            <x-core.input-label for="toolkit_category_id" :value="__('Category')" />
            <x-core.select id="toolkit_category_id" name="toolkit_category_id" class="mt-1 block w-full" required>
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('toolkit_category_id', $toolkit->toolkit_category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </x-core.select>
            <x-core.input-error class="mt-2" :messages="$errors->get('toolkit_category_id')" />
        </div>

        <!-- Link URL -->
        <div>
            <x-core.input-label for="link_url" :value="__('Link URL')" />
            <x-core.text-input id="link_url" name="link_url" type="url" class="mt-1 block w-full" :value="old('link_url', $toolkit->link_url)" />
            <x-core.input-error class="mt-2" :messages="$errors->get('link_url')" />
        </div>

        <!-- Link Text -->
        <div>
            <x-core.input-label for="link_text" :value="__('Link Text')" />
            <x-core.text-input id="link_text" name="link_text" type="text" class="mt-1 block w-full" :value="old('link_text', $toolkit->link_text)" />
            <x-core.input-error class="mt-2" :messages="$errors->get('link_text')" />
        </div>

        <!-- Tags -->
        <div>
            <x-core.input-label for="tags" :value="__('Tags')" />
            <x-core.text-input id="tags" name="tags" type="text" class="mt-1 block w-full" :value="old('tags', $toolkit->tags && is_array($toolkit->tags) ? implode(', ', $toolkit->tags) : ($toolkit->tags ?? ''))" />
            <x-core.input-error class="mt-2" :messages="$errors->get('tags')" />
            <p class="mt-1 text-sm text-the-end-600">Separate tags with commas (e.g., design, ui, ux)</p>
        </div>

        <!-- Checkboxes -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <x-core.checkbox id="is_featured" name="is_featured" :checked="old('is_featured', $toolkit->is_featured)" />
                <x-core.input-label for="is_featured" :value="__('Featured Item')" class="ml-2" />
            </div>
            
            <div>
                <x-core.checkbox id="is_published" name="is_published" :checked="old('is_published', $toolkit->is_published)" />
                <x-core.input-label for="is_published" :value="__('Published')" class="ml-2" />
            </div>
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-4">
            <x-core.button type="submit">
                {{ __('Update Toolkit Item') }}
            </x-core.button>
            
            <a href="{{ route('admin.toolkit.index') }}" class="text-the-end-600 hover:text-the-end-900">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection 