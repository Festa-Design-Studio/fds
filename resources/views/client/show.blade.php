@extends('layouts.app')

@section('title', $client->name . ' - Festa Design Studio')

@section('breadcrumbs')
    <x-core.breadcrumbs-truncated
        :items="[
            ['label' => 'Work', 'url' => route('work')],
            ['label' => 'Clients', 'url' => route('clients')]
        ]"
        :currentLabel="$client->name"
    />
@endsection

@section('content')
    <main class="mx-auto bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50 ">
        <!-- Client Header -->
        <section class="py-12 px-7 md:px-8 lg:px-16">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-h1 font-black text-the-end-900 mb-6">{{ $client->name }}</h1>
                
                @if($client->logo)
                <figure class="mb-8">
                    <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }} logo" class="h-16 md:h-20">
                </figure>
                @endif
                
                @if($client->description)
                <p class="text-body-lg text-the-end-700 mb-6">{!! $client->description !!}</p>
                @endif
                
                @if($client->website_url)
                <a href="{{ $client->website_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-pepper-green-600 hover:text-pepper-green-800">
                    Visit Website
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
                @endif
            </div>
        </section>
        
        <!-- Related Projects -->
        <section class="py-12 px-7 md:px-8 lg:px-16 border-t border-white-smoke-300 ">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-h2 font-semibold text-the-end-900 mb-8">Projects with {{ $client->name }}</h2>
                
                @if($client->projects->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($client->projects as $project)
                    <div class="rounded-2xl border border-white-smoke-300 shadow-sm bg-gradient-to-t from-white-smoke-100 via-pepper-green-50 to-white-smoke-50">
                        @if($project->featured_image)
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="{{ asset('storage/' . $project->featured_image) }}" alt="{{ $project->title }}" class="w-full h-full object-cove roundr transition-transform duration-500 hover:scale-105">
                        </div>
                        @endif
                        <div class="p-6">
                            <h3 class="text-h4 font-medium text-the-end-900 mb-2">{{ $project->title }}</h3>
                            <p class="text-the-end-700 text-body-sm mb-4 line-clamp-2">{{ $project->excerpt }}</p>
                            <x-core.button href="{{ route('work.show', $project->slug) }}" variant="secondary" size="small">
                                View Client's work
                            </x-core.button>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="text-center py-10">
                    <p class="text-the-end-600">No projects available yet.</p>
                </div>
                @endif
            </div>
        </section>
    </main>
@endsection 