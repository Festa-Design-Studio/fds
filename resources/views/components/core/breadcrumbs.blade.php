@props(['items' => []])

<nav aria-label="Breadcrumb" {{ $attributes->merge(['class' => 'mx-auto px-4 sm:px-6 lg:px-6 py-4 sm:py-6 lg:py-6']) }}>
    <div class="flex items-center space-x-2 text-sm">
        <a href="/" class="px-2 py-1 text-body text-the-end-400 hover:text-pepper-green-600 transition">
            Home
        </a>
        
        @foreach($items as $index => $item)
            <svg class="w-4 h-4 text-the-end-400" viewBox="0 0 16 16" fill="none">
                <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="2" />
            </svg>
            
            @if($index === count($items) - 1 || empty($item['url']))
                <span class="px-2 py-1 text-body text-chicken-comb-600" aria-current="page">
                    {{ $item['label'] }}
                </span>
            @else
                <a href="{{ $item['url'] }}" class="px-2 py-1 text-body text-the-end-400 hover:text-pepper-green-600 transition">
                    {{ $item['label'] }}
                </a>
            @endif
        @endforeach
    </div>
</nav> 