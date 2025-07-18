@extends('layouts.admin')

@section('title', 'Our Process Management')

@section('header_title', 'Our Process Management')

@section('content')
<div class="p-8 max-w-7xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    {{-- Session Success Message --}}
    @if(session('success'))
        <div class="mb-6 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    {{-- Header with Add Button --}}
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-h3 font-bold text-the-end-900">Our Process Content</h1>
            <p class="text-body text-the-end-700 mt-2">Manage philosophy principles, methodology steps, and impact metrics</p>
        </div>
        <x-core.button variant="primary" size="medium" href="{{ route('admin.about.our-process.create') }}">
            Add New Item
        </x-core.button>
    </div>

    {{-- Process Type Sections --}}
    @forelse($groupedProcesses as $type => $processes)
        <div class="mb-12">
            <div class="flex items-center gap-3 mb-6">
                <h2 class="text-h4 font-semibold text-the-end-900">
                    {{ \App\Models\OurProcess::getTypes()[$type] ?? ucfirst($type) }}
                </h2>
                <span class="text-body-sm text-the-end-600 bg-white-smoke-200 px-3 py-1 rounded-full">
                    {{ $processes->count() }} items
                </span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($processes as $process)
                    <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        {{-- Header --}}
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                @if($process->step_number)
                                    <div class="w-8 h-8 bg-pepper-green-100 text-pepper-green-700 rounded-full flex items-center justify-center text-sm font-semibold">
                                        {{ $process->step_number }}
                                    </div>
                                @elseif($process->icon)
                                    <div class="w-8 h-8 text-chicken-comb-600">
                                        {!! $process->icon !!}
                                    </div>
                                @endif
                                <div class="flex items-center gap-2">
                                    @if($process->is_active)
                                        <span class="w-2 h-2 bg-pepper-green-500 rounded-full"></span>
                                    @else
                                        <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                                    @endif
                                </div>
                            </div>
                            <span class="text-xs text-the-end-500 bg-white-smoke-100 px-2 py-1 rounded">
                                Order: {{ $process->order_index }}
                            </span>
                        </div>

                        {{-- Content --}}
                        <h3 class="text-h6 font-semibold text-the-end-900 mb-2">{{ $process->title }}</h3>
                        <p class="text-body-sm text-the-end-700 mb-4 line-clamp-3">{{ $process->description }}</p>

                        {{-- Additional Info --}}
                        @if($process->metric_type)
                            <p class="text-xs text-chicken-comb-600 mb-4">Metric: {{ $process->metric_type }}</p>
                        @endif

                        {{-- Actions --}}
                        <div class="flex gap-2">
                            <x-core.button 
                                variant="secondary" 
                                size="small" 
                                href="{{ route('admin.about.our-process.edit', $process) }}"
                                class="flex-1"
                            >
                                Edit
                            </x-core.button>
                            <form action="{{ route('admin.about.our-process.destroy', $process) }}" method="POST" class="flex-1">
                                @csrf
                                @method('DELETE')
                                <x-core.button 
                                    variant="neutral" 
                                    size="small" 
                                    type="submit"
                                    onclick="return confirm('Are you sure you want to delete this item?')"
                                    class="w-full"
                                >
                                    Delete
                                </x-core.button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @empty
        {{-- Empty State --}}
        <div class="text-center py-16">
            <div class="w-16 h-16 bg-white-smoke-200 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-the-end-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                </svg>
            </div>
            <h3 class="text-h5 font-semibold text-the-end-900 mb-2">No process items yet</h3>
            <p class="text-body text-the-end-700 mb-6">Start by creating your first philosophy principle, methodology step, or impact metric.</p>
            <x-core.button variant="primary" size="medium" href="{{ route('admin.about.our-process.create') }}">
                Create First Item
            </x-core.button>
        </div>
    @endforelse

    {{-- Quick Actions --}}
    <div class="mt-12 pt-8 border-t border-white-smoke-300">
        <h3 class="text-h5 font-semibold text-the-end-900 mb-4">Quick Actions</h3>
        <div class="flex flex-wrap gap-4">
            <x-core.button variant="secondary" size="medium" href="{{ route('about.process') }}" target="_blank">
                View Process Page
            </x-core.button>
            <x-core.button variant="neutral" size="medium" href="{{ route('admin.about') }}">
                Back to About Management
            </x-core.button>
        </div>
    </div>
</div>
@endsection