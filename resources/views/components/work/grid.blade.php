@props([
    'title' => 'Projects',
    'items' => [],
])

<section class="py-12 px-4 md:px-8 lg:px-16">
    <div class="max-w-7xl mx-auto space-y-12">
        @if($title)
            <h2 class="text-h3 font-semibold text-the-end-900">{{ $title }}</h2>
        @endif
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($items as $item)
                <x-work.card 
                    :title="$item['title'] ?? ''" 
                    :description="$item['description'] ?? ''" 
                    :image="$item['image'] ?? ''" 
                    :url="$item['url'] ?? '#'"
                    :tags="$item['tags'] ?? []"
                />
            @endforeach
            
            {{ $slot }}
        </div>
        
        @if(isset($footer))
            <div class="mt-12 flex justify-center">
                {{ $footer }}
            </div>
        @endif
    </div>
</section> 