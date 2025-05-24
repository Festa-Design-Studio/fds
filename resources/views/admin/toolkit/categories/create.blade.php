@extends('layouts.admin')

@section('title', 'Create Toolkit Category - Festa Design Studio')

@section('header_title', 'Create Toolkit Category')

@section('content')
<div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    <form action="{{ route('admin.toolkit.categories.store') }}" method="POST" class="space-y-6">
        @csrf
        
        <!-- Name -->
        <div>
            <x-core.input-label for="name" :value="__('Category Name')" />
            <x-core.text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required />
            <x-core.input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Description -->
        <div>
            <x-core.input-label for="description" :value="__('Description')" />
            <x-core.textarea id="description" name="description" class="mt-1 block w-full" rows="3">{{ old('description') }}</x-core.textarea>
            <x-core.input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <!-- Color Class -->
        <div>
            <x-core.input-label for="color_class" :value="__('Color Class')" />
            <x-core.select id="color_class" name="color_class" class="mt-1 block w-full">
                <option value="">Select a color theme</option>
                <option value="bg-pepper-green-50 text-pepper-green-700 border-pepper-green-200" {{ old('color_class') == 'bg-pepper-green-50 text-pepper-green-700 border-pepper-green-200' ? 'selected' : '' }}>Green</option>
                <option value="bg-chicken-comb-50 text-chicken-comb-700 border-chicken-comb-200" {{ old('color_class') == 'bg-chicken-comb-50 text-chicken-comb-700 border-chicken-comb-200' ? 'selected' : '' }}>Red</option>
                <option value="bg-pot-of-gold-50 text-pot-of-gold-700 border-pot-of-gold-200" {{ old('color_class') == 'bg-pot-of-gold-50 text-pot-of-gold-700 border-pot-of-gold-200' ? 'selected' : '' }}>Gold</option>
                <option value="bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border-apocalyptic-orange-200" {{ old('color_class') == 'bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border-apocalyptic-orange-200' ? 'selected' : '' }}>Orange</option>
            </x-core.select>
            <x-core.input-error class="mt-2" :messages="$errors->get('color_class')" />
        </div>

        <!-- Sort Order -->
        <div>
            <x-core.input-label for="sort_order" :value="__('Sort Order')" />
            <x-core.text-input id="sort_order" name="sort_order" type="number" class="mt-1 block w-full" :value="old('sort_order', 0)" min="0" />
            <x-core.input-error class="mt-2" :messages="$errors->get('sort_order')" />
        </div>

        <!-- Active Status -->
        <div>
            <x-core.checkbox id="is_active" name="is_active" :checked="old('is_active', true)" />
            <x-core.input-label for="is_active" :value="__('Active')" class="ml-2" />
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-4">
            <x-core.button type="submit">
                {{ __('Create Category') }}
            </x-core.button>
            
            <a href="{{ route('admin.toolkit.categories.index') }}" class="text-the-end-600 hover:text-the-end-900">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection 