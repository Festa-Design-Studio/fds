@extends('layouts.app')

@section('title', 'Components Showcase - Festa Design Studio')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-h1 font-bold text-pepper-green mb-8">Components Showcase</h1>
            
            <!-- Sector Challenge Component -->
            <div class="mb-16">
                <h2 class="text-h3 font-semibold text-pepper-green mb-4">Sector Challenge Component</h2>
                <div class="p-4 bg-white rounded-lg shadow">
                    <x-services.sectors.sector-challenge 
                        eyebrow="Component Demo"
                        title="Sector Challenge Component Example"
                        description="This component displays sector-specific challenges with icons, statistics, and source citations. It's used across different sector pages to highlight industry-specific obstacles."
                    />
                </div>
                <div class="mt-4 p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                    <h3 class="text-h5 font-semibold mb-2">Component Details:</h3>
                    <ul class="list-disc list-inside space-y-2 text-body text-the-end-700">
                        <li>Location: <code>resources/views/components/services/sectors/sector-challenge.blade.php</code></li>
                        <li>Props:
                            <ul class="list-disc list-inside ml-4">
                                <li>eyebrow (string) - Section eyebrow text</li>
                                <li>title (string) - Section title</li>
                                <li>description (string) - Section description</li>
                                <li>challenges (array) - Optional array of challenge objects</li>
                            </ul>
                        </li>
                        <li>Features:
                            <ul class="list-disc list-inside ml-4">
                                <li>Responsive grid layout</li>
                                <li>Default nonprofit challenges if none provided</li>
                                <li>SVG icon support</li>
                                <li>Source citation with optional links</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection 