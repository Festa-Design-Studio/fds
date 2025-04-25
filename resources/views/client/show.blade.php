<x-app-layout>
    <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="mb-8">
                @if($client->logo)
                    <img src="{{ asset($client->logo) }}" alt="{{ $client->name }} Logo" class="h-24 w-auto mb-4">
                @endif
                
                <h1 class="text-3xl font-bold text-pepper-green-800">{{ $client->name }}</h1>
                
                @if($client->website)
                    <a href="{{ $client->website }}" target="_blank" rel="noopener noreferrer" 
                       class="text-pepper-green-600 hover:text-pepper-green-700 transition-colors duration-150">
                        Visit Client Website
                    </a>
                @endif
            </div>
            
            <div class="prose max-w-none">
                {!! $client->description !!}
            </div>
            
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-pepper-green-800 mb-6">Our Work with {{ $client->name }}</h2>
                
                {{-- This section would ideally show case studies related to this client --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- This would be populated with case studies in a real implementation --}}
                    <p class="col-span-full text-gray-600">No case studies currently available for this client.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 