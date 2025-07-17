@extends('layouts.admin')

@section('title', 'Page SEO Management')

@section('header_title', 'Page SEO Management')

@section('action_button')
<x-core.button variant="secondary" size="medium" href="{{ route('admin.services') }}">
    Back to Services
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

    <div class="mb-8">
        <h1 class="text-h3 font-bold text-the-end-900 mb-4">Manage SEO for Static Pages</h1>
        <p class="text-body text-the-end-600">
            Configure SEO settings for your website's main pages. Click "Edit SEO" to customize meta tags, Open Graph data, and Twitter Cards for each page.
        </p>
    </div>

    <div class="bg-white border border-white-smoke-300 rounded-xl shadow-sm overflow-hidden">
        <div class="grid grid-cols-1 divide-y divide-white-smoke-300">
            @foreach($pageSeos as $page)
                <div class="p-6 flex items-center justify-between hover:bg-white-smoke-50 transition-colors">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-lg bg-{{ $page['has_seo'] ? 'pepper-green' : 'chicken-comb' }}-100 flex items-center justify-center">
                            @if($page['has_seo'])
                                <svg class="w-5 h-5 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            @else
                                <svg class="w-5 h-5 text-chicken-comb-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                            @endif
                        </div>
                        
                        <div>
                            <h3 class="text-h5 font-semibold text-the-end-900">{{ $page['title'] }}</h3>
                            <p class="text-body-sm text-the-end-600">
                                @if($page['has_seo'])
                                    SEO configured
                                    @if($page['seo']->meta_description)
                                        • {{ Str::limit($page['seo']->meta_description, 60) }}
                                    @endif
                                @else
                                    No SEO configuration
                                @endif
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-3">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm 
                            {{ $page['has_seo'] ? 'bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200' : 'bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200' }}">
                            {{ $page['has_seo'] ? 'Configured' : 'Not Configured' }}
                        </span>
                        
                        <x-core.button 
                            href="{{ route('admin.page-seo.edit', $page['identifier']) }}" 
                            variant="primary" 
                            size="small"
                        >
                            Edit SEO
                        </x-core.button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection