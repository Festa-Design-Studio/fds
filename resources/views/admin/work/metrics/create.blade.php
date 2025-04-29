@extends('layouts.admin')

@section('title', 'Add New Metric - Admin Dashboard')

@section('header_title', 'Add New Metric')

@section('content')
    <div class="max-w-2xl mx-auto">
        <form action="{{ route('admin.work.metrics.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <x-core.input
                    name="value"
                    label="Value"
                    placeholder="e.g., 500+"
                    :value="old('value')"
                    required
                />
                @error('value')
                    <p class="mt-1 text-body-sm text-apocalyptic-orange-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-core.input
                    name="title"
                    label="Title"
                    placeholder="e.g., Organizations"
                    :value="old('title')"
                    required
                />
                @error('title')
                    <p class="mt-1 text-body-sm text-apocalyptic-orange-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-core.textarea
                    name="description"
                    label="Description"
                    placeholder="e.g., Empowered through purposeful design"
                    :value="old('description')"
                    required
                />
                @error('description')
                    <p class="mt-1 text-body-sm text-apocalyptic-orange-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-core.select
                    name="color_class"
                    label="Color Theme"
                    :value="old('color_class')"
                    required
                >
                    <option value="text-chicken-comb-600">Chicken Comb</option>
                    <option value="text-pepper-green-600">Pepper Green</option>
                    <option value="text-apocalyptic-orange-600">Apocalyptic Orange</option>
                    <option value="text-pot-of-gold-600">Pot of Gold</option>
                </x-core.select>
                @error('color_class')
                    <p class="mt-1 text-body-sm text-apocalyptic-orange-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-core.input
                    type="number"
                    name="display_order"
                    label="Display Order"
                    placeholder="e.g., 1"
                    :value="old('display_order', 0)"
                />
                @error('display_order')
                    <p class="mt-1 text-body-sm text-apocalyptic-orange-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-3">
                <x-core.button variant="neutral" :href="route('admin.work.metrics.index')">
                    Cancel
                </x-core.button>
                <x-core.button variant="primary" type="submit">
                    Create Metric
                </x-core.button>
            </div>
        </form>
    </div>
@endsection 