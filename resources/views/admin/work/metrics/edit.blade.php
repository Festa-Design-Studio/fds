@extends('layouts.admin')

@section('title', 'Edit Metric - Admin Dashboard')

@section('header_title', 'Edit Metric')

@section('content')
    <div class="max-w-2xl mx-auto">
        @if($errors->any())
            <div class="bg-apocalyptic-orange-50 p-4 rounded-lg mb-6">
                <h3 class="text-h5 font-bold text-apocalyptic-orange-700 mb-2">Please fix the following errors:</h3>
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li class="text-apocalyptic-orange-600">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.work.metrics.update', $metric) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div>
                <x-core.text-input
                    name="value"
                    label="Value"
                    placeholder="e.g., 500+"
                    :value="old('value', $metric->value)"
                    required
                />
                @error('value')
                    <p class="mt-1 text-body-sm text-apocalyptic-orange-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-core.text-input
                    name="title"
                    label="Title"
                    placeholder="e.g., Organizations"
                    :value="old('title', $metric->title)"
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
                    required
                >{{ old('description', $metric->description) }}</x-core.textarea>
                @error('description')
                    <p class="mt-1 text-body-sm text-apocalyptic-orange-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-core.select
                    name="color_class"
                    label="Color Theme"
                    :value="old('color_class', $metric->color_class)"
                    required
                >
                    <option value="text-chicken-comb-600" @selected($metric->color_class === 'text-chicken-comb-600')>Chicken Comb</option>
                    <option value="text-pepper-green-600" @selected($metric->color_class === 'text-pepper-green-600')>Pepper Green</option>
                    <option value="text-apocalyptic-orange-600" @selected($metric->color_class === 'text-apocalyptic-orange-600')>Apocalyptic Orange</option>
                    <option value="text-pot-of-gold-600" @selected($metric->color_class === 'text-pot-of-gold-600')>Pot of Gold</option>
                </x-core.select>
                @error('color_class')
                    <p class="mt-1 text-body-sm text-apocalyptic-orange-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-core.text-input
                    type="number"
                    name="display_order"
                    label="Display Order"
                    placeholder="e.g., 1"
                    :value="old('display_order', $metric->display_order)"
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
                    Update Metric
                </x-core.button>
            </div>
        </form>
    </div>
@endsection 