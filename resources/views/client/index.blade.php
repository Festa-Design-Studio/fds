@extends('layouts.app')

@section('title', 'Our Clients - Festa Design Studio')

@section('breadcrumbs')
    <x-core.breadcrumbs :items="[
        ['label' => 'Work', 'url' => route('work')],
        ['label' => 'Clients']
    ]" />
@endsection

@section('content')
    <main class="mx-auto bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50 py-12 px-4 md:px-8 lg:px-16">
        <!-- Clients Header -->
        <section class="py-12 px-4 md:px-8 lg:px-16">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-h1 font-black text-the-end-900 mb-4">Our Clients</h1>
                <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
                    We've partnered with a diverse range of organizations committed to making positive social and environmental impact.
                </p>
            </div>
        </section>
        
        <!-- Clients Grid -->
        <section class="py-12 px-4 md:px-8 lg:px-16">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($clients as $client)
                        <div class="bg-gradient-to-t from-white-smoke-100 via-pepper-green-50 to-white-smoke-50 rounded-2xl p-6 border border-white-smoke-300 shadow-sm">
                            <div class="p-8 flex flex-col items-center text-center">
                                @if($client->logo)
                                    <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }} logo" class="h-24 w-auto object-contain mb-6">
                                @else
                                    <div class="w-24 h-24 bg-white-smoke-300 rounded-full flex items-center justify-center mb-6">
                                        <span class="text-h3 font-bold text-the-end-700">{{ substr($client->name, 0, 1) }}</span>
                                    </div>
                                @endif
                                
                                <h3 class="text-h3 font-bold text-the-end-900 mb-3">{{ $client->name }}</h3>
                                
                                @if($client->description)
                                    <p class="text-the-end-700 text-body-sm mb-6 line-clamp-3">{{ Str::limit(strip_tags($client->description), 120) }}</p>
                                @endif
                                
                                <div class="mt-auto">
                                    <x-core.button href="{{ route('client.show', $client->slug) }}" variant="neutral" size="small">
                                        View Client's work
                                    </x-core.button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-3 text-center py-16">
                            <p class="text-the-end-600 mb-4">No clients available yet.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
@endsection 