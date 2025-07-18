@extends('layouts.admin')

@section('title', 'Edit Process Item')

@section('header_title', 'Edit Process Item')

@section('content')
<div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    {{-- Header --}}
    <div class="mb-8">
        <h1 class="text-h3 font-bold text-the-end-900">Edit Process Item</h1>
        <p class="text-body text-the-end-700 mt-2">Modify the {{ strtolower(\App\Models\OurProcess::getTypes()[$ourProcess->type] ?? $ourProcess->type) }}</p>
    </div>

    {{-- Form --}}
    <form action="{{ route('admin.about.our-process.update', $ourProcess) }}" method="POST" class="space-y-8">
        @csrf
        @method('PUT')
        
        <div class="bg-white p-8 rounded-xl border border-white-smoke-300">
            <h2 class="text-h5 font-semibold text-the-end-900 mb-6">Basic Information</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Type --}}
                <div>
                    <label for="type" class="block text-body-sm font-medium text-the-end-900 mb-2">Type *</label>
                    <select 
                        name="type" 
                        id="type" 
                        required
                        class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pepper-green-500 focus:border-pepper-green-500"
                    >
                        <option value="">Select Type</option>
                        @foreach($types as $value => $label)
                            <option value="{{ $value }}" {{ old('type', $ourProcess->type) == $value ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                    @error('type')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Order Index --}}
                <div>
                    <label for="order_index" class="block text-body-sm font-medium text-the-end-900 mb-2">Order *</label>
                    <input 
                        type="number" 
                        name="order_index" 
                        id="order_index" 
                        value="{{ old('order_index', $ourProcess->order_index) }}"
                        min="0"
                        required
                        class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pepper-green-500 focus:border-pepper-green-500"
                    >
                    @error('order_index')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            {{-- Title --}}
            <div class="mt-6">
                <label for="title" class="block text-body-sm font-medium text-the-end-900 mb-2">Title *</label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    value="{{ old('title', $ourProcess->title) }}"
                    required
                    class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pepper-green-500 focus:border-pepper-green-500"
                    placeholder="Enter title"
                >
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Description --}}
            <div class="mt-6">
                <label for="description" class="block text-body-sm font-medium text-the-end-900 mb-2">Description *</label>
                <textarea 
                    name="description" 
                    id="description" 
                    rows="4"
                    required
                    class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pepper-green-500 focus:border-pepper-green-500"
                    placeholder="Enter description"
                >{{ old('description', $ourProcess->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Type-specific Fields --}}
        <div class="bg-white p-8 rounded-xl border border-white-smoke-300">
            <h2 class="text-h5 font-semibold text-the-end-900 mb-6">Type-specific Information</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Step Number (for methodology) --}}
                <div>
                    <label for="step_number" class="block text-body-sm font-medium text-the-end-900 mb-2">Step Number</label>
                    <input 
                        type="number" 
                        name="step_number" 
                        id="step_number" 
                        value="{{ old('step_number', $ourProcess->step_number) }}"
                        min="1"
                        class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pepper-green-500 focus:border-pepper-green-500"
                        placeholder="For methodology steps only"
                    >
                    @error('step_number')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Metric Type (for impact) --}}
                <div>
                    <label for="metric_type" class="block text-body-sm font-medium text-the-end-900 mb-2">Metric Type</label>
                    <input 
                        type="text" 
                        name="metric_type" 
                        id="metric_type" 
                        value="{{ old('metric_type', $ourProcess->metric_type) }}"
                        class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pepper-green-500 focus:border-pepper-green-500"
                        placeholder="e.g., Count, Percentage, Score"
                    >
                    @error('metric_type')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            {{-- Metric Display Fields (for impact) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                {{-- Metric Value --}}
                <div>
                    <label for="metric_value" class="block text-body-sm font-medium text-the-end-900 mb-2">Metric Value</label>
                    <input 
                        type="text" 
                        name="metric_value" 
                        id="metric_value" 
                        value="{{ old('metric_value', $ourProcess->metric_value) }}"
                        class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pepper-green-500 focus:border-pepper-green-500"
                        placeholder="e.g., 25+, 150%, 4.8/5"
                    >
                    @error('metric_value')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Metric Label --}}
                <div>
                    <label for="metric_label" class="block text-body-sm font-medium text-the-end-900 mb-2">Metric Label</label>
                    <input 
                        type="text" 
                        name="metric_label" 
                        id="metric_label" 
                        value="{{ old('metric_label', $ourProcess->metric_label) }}"
                        class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pepper-green-500 focus:border-pepper-green-500"
                        placeholder="e.g., clients served, increase, rating"
                    >
                    @error('metric_label')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            {{-- Icon --}}
            <div class="mt-6">
                <label for="icon" class="block text-body-sm font-medium text-the-end-900 mb-2">Icon SVG</label>
                <textarea 
                    name="icon" 
                    id="icon" 
                    rows="3"
                    class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pepper-green-500 focus:border-pepper-green-500"
                    placeholder="Paste SVG icon code here (optional)"
                >{{ old('icon', $ourProcess->icon) }}</textarea>
                @error('icon')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Detailed Content --}}
            <div class="mt-6">
                <label for="detailed_content" class="block text-body-sm font-medium text-the-end-900 mb-2">Detailed Content</label>
                <textarea 
                    name="detailed_content" 
                    id="detailed_content" 
                    rows="4"
                    class="w-full px-4 py-3 border border-white-smoke-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pepper-green-500 focus:border-pepper-green-500"
                    placeholder="Additional detailed content (optional)"
                >{{ old('detailed_content', $ourProcess->detailed_content) }}</textarea>
                @error('detailed_content')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Status --}}
        <div class="bg-white p-8 rounded-xl border border-white-smoke-300">
            <h2 class="text-h5 font-semibold text-the-end-900 mb-6">Status & Display Options</h2>
            
            <div class="space-y-4">
                <div class="flex items-center">
                    <input 
                        type="checkbox" 
                        name="is_active" 
                        id="is_active" 
                        value="1"
                        {{ old('is_active', $ourProcess->is_active) ? 'checked' : '' }}
                        class="w-4 h-4 text-pepper-green-600 bg-gray-100 border-gray-300 rounded focus:ring-pepper-green-500 focus:ring-2"
                    >
                    <label for="is_active" class="ml-2 text-body text-the-end-900">Active</label>
                </div>
                <p class="text-body-sm text-the-end-600">Inactive items will not be displayed on the website</p>

                <div class="flex items-center">
                    <input 
                        type="checkbox" 
                        name="show_metric" 
                        id="show_metric" 
                        value="1"
                        {{ old('show_metric', $ourProcess->show_metric) ? 'checked' : '' }}
                        class="w-4 h-4 text-pepper-green-600 bg-gray-100 border-gray-300 rounded focus:ring-pepper-green-500 focus:ring-2"
                    >
                    <label for="show_metric" class="ml-2 text-body text-the-end-900">Show Metric Values</label>
                </div>
                <p class="text-body-sm text-the-end-600">Display metric values and labels (for impact metrics only)</p>
            </div>
        </div>

        {{-- Actions --}}
        <div class="flex gap-4">
            <x-core.button variant="primary" size="medium" type="submit">
                Update Process Item
            </x-core.button>
            <x-core.button variant="neutral" size="medium" href="{{ route('admin.about.our-process.index') }}">
                Cancel
            </x-core.button>
        </div>
    </form>
</div>
@endsection