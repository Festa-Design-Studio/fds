@extends('layouts.admin')

@section('title', 'Festa Design System')

@section('header_title', 'Festa Design System')

@section('content')
<div class="grid grid-cols-12 gap-8">
    <!-- Main Content -->
    <div class="col-span-12">
        <div class="bg-white rounded-2xl border border-white-smoke-300 shadow-sm p-8">
            <div class="text-center">
                <h1 class="text-h2 font-bold text-the-end-900 mb-4">Festa Design System</h1>
                <p class="text-body-lg text-the-end-600 mb-8">
                    Manage and maintain the Festa Design System components and documentation.
                </p>
                
                <!-- Quick Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-pepper-green-50 rounded-xl p-6 border border-pepper-green-200">
                        <div class="text-h3 font-bold text-pepper-green-600 mb-2">30+</div>
                        <div class="text-body-sm text-pepper-green-700">Components</div>
                    </div>
                    <div class="bg-chicken-comb-50 rounded-xl p-6 border border-chicken-comb-200">
                        <div class="text-h3 font-bold text-chicken-comb-600 mb-2">5</div>
                        <div class="text-body-sm text-chicken-comb-700">Color Families</div>
                    </div>
                    <div class="bg-apocalyptic-orange-50 rounded-xl p-6 border border-apocalyptic-orange-200">
                        <div class="text-h3 font-bold text-apocalyptic-orange-600 mb-2">Q1 2026</div>
                        <div class="text-body-sm text-apocalyptic-orange-700">Target Launch</div>
                    </div>
                </div>
                
                <!-- Actions -->
                <div class="flex flex-wrap justify-center gap-4">
                    <x-core.button variant="primary" size="medium" href="{{ route('components.showcase') }}" target="_blank">
                        View Components
                    </x-core.button>
                    <x-core.button variant="secondary" size="medium" href="{{ route('resources.design-system') }}" target="_blank">
                        Public Design System Page
                    </x-core.button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection