@extends('layouts.admin')

@section('title', 'Edit Page SEO - ' . $pageSeo->page_title)

@section('header_title', 'Edit SEO - ' . $pageSeo->page_title)

@section('action_button')
<x-core.button variant="secondary" size="medium" href="{{ route('admin.page-seo.index') }}">
    Back to Page SEO
</x-core.button>
@endsection

@section('content')
<div class="p-8 max-w-7xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    {{-- Session Success Message --}}
    @if(session('success'))
        <div class="mb-6 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    {{-- Error Messages --}}
    @if($errors->any())
        <div class="mb-6 p-4 bg-chicken-comb-50 border border-chicken-comb-300 text-chicken-comb-700 rounded-lg">
            <strong class="font-bold">There were some problems with your input.</strong>
            <ul class="mt-3 list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.page-seo.update', $pageSeo->page_identifier) }}" method="POST" class="space-y-8">
        @csrf
        @method('PUT')

        <!-- Page Information Section -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg bg-pepper-green-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h2 class="text-h5 font-semibold text-the-end-900">Page Information</h2>
            </div>

            <div class="space-y-6">
                <x-core.text-input 
                    name="page_title" 
                    label="Page Title (for Admin Reference)" 
                    value="{{ old('page_title', $pageSeo->page_title) }}"
                    placeholder="e.g., Home Page, About Us"
                />
            </div>
        </div>

        <!-- SEO Section -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg bg-pot-of-gold-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-pot-of-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <h2 class="text-h5 font-semibold text-the-end-900">SEO & Social Media</h2>
            </div>

            <!-- Meta Tags -->
            <div class="space-y-6 mb-8">
                <h3 class="text-h6 font-medium text-the-end-900 border-b border-white-smoke-300 pb-2">Meta Tags</h3>
                
                <x-core.textarea 
                    name="meta_description" 
                    label="Meta Description" 
                    rows="3"
                    placeholder="Brief description for search engines (150-160 characters recommended)...">{{ old('meta_description', $pageSeo->meta_description) }}</x-core.textarea>
                
                <x-core.textarea 
                    name="meta_keywords" 
                    label="Meta Keywords" 
                    rows="2"
                    placeholder="keyword1, keyword2, keyword3...">{{ old('meta_keywords', $pageSeo->meta_keywords) }}</x-core.textarea>
            </div>

            <!-- Open Graph Tags -->
            <div class="space-y-6 mb-8">
                <h3 class="text-h6 font-medium text-the-end-900 border-b border-white-smoke-300 pb-2">Open Graph (Facebook, LinkedIn)</h3>
                
                <x-core.text-input 
                    name="og_title" 
                    label="OG Title" 
                    value="{{ old('og_title', $pageSeo->og_title) }}"
                    placeholder="Title for social media sharing" />
                
                <x-core.textarea 
                    name="og_description" 
                    label="OG Description" 
                    rows="3"
                    placeholder="Description for social media sharing...">{{ old('og_description', $pageSeo->og_description) }}</x-core.textarea>
                
                <x-core.text-input 
                    name="og_image" 
                    label="OG Image URL" 
                    value="{{ old('og_image', $pageSeo->og_image) }}"
                    placeholder="https://example.com/image.jpg" />
            </div>

            <!-- Twitter Cards -->
            <div class="space-y-6">
                <h3 class="text-h6 font-medium text-the-end-900 border-b border-white-smoke-300 pb-2">Twitter Cards</h3>
                
                <x-core.text-input 
                    name="twitter_title" 
                    label="Twitter Title" 
                    value="{{ old('twitter_title', $pageSeo->twitter_title) }}"
                    placeholder="Title for Twitter sharing" />
                
                <x-core.textarea 
                    name="twitter_description" 
                    label="Twitter Description" 
                    rows="3"
                    placeholder="Description for Twitter sharing...">{{ old('twitter_description', $pageSeo->twitter_description) }}</x-core.textarea>
                
                <x-core.text-input 
                    name="twitter_image" 
                    label="Twitter Image URL" 
                    value="{{ old('twitter_image', $pageSeo->twitter_image) }}"
                    placeholder="https://example.com/twitter-card.jpg" />
            </div>
        </div>

        <div class="flex justify-end">
            <x-core.button type="submit" variant="primary" size="large">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                Update Page SEO
            </x-core.button>
        </div>
    </form>
</div>
@endsection