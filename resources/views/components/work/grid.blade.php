@props([
    'title' => 'Projects',
    'items' => [],
])

<section class="py-12 px-4 md:px-8 lg:px-16">
    <div class="max-w-7xl mx-auto space-y-12">
        @if($title)
            <h2 class="text-h3 font-semibold text-the-end-900">{{ $title }}</h2>
        @endif
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 work-grid">
            @foreach($items as $item)
                <div 
                    class="work-item" 
                    data-sector="{{ $item['tags'][0]['label'] ?? '' }}" 
                    data-industry="{{ isset($item['tags'][1]) ? $item['tags'][1]['label'] : '' }}" 
                    data-sdg="{{ isset($item['tags'][2]) ? ($item['tags'][2]['code'] ?? $item['tags'][2]['label']) : '' }}"
                    data-title="{{ $item['title'] ?? '' }}"
                    data-description="{{ $item['description'] ?? '' }}"
                >
                    <x-work.card 
                        :title="$item['title'] ?? ''" 
                        :description="$item['description'] ?? ''" 
                        :image="$item['image'] ?? ''" 
                        :url="$item['url'] ?? '#'"
                        :tags="$item['tags'] ?? []"
                    />
                </div>
            @endforeach
            
            {{ $slot }}
        </div>
        
        <!-- No results message -->
        <div class="text-center hidden no-results-message">
            <p class="text-body-lg text-the-end-700">No matching projects found. Please try different filter criteria.</p>
        </div>
        
        @if(isset($footer))
            <div class="mt-12 flex justify-center">
                {{ $footer }}
            </div>
        @endif
    </div>
</section> 