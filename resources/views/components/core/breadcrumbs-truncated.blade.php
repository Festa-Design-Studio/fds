@props([
    'homeUrl' => '/',
    'homeLabel' => 'Home',
    'items' => [],
    'currentLabel' => '',
    'maxWidth' => '150px'
])

<nav aria-label="Breadcrumb" {{ $attributes->merge(['class' => 'mx-auto']) }}>
    <div class="flex items-center space-x-2 text-sm">
        <a href="{{ $homeUrl }}" class="px-2 py-1 text-body text-the-end-400 hover:text-pepper-green-600 transition">
            {{ $homeLabel }}
        </a>
        
        <svg class="w-4 h-4 text-the-end-400" viewBox="0 0 16 16" fill="none">
            <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="2"/>
        </svg>
        
        @if(count($items) > 1)
            <span class="text-the-end-400">...</span>
            
            <svg class="w-4 h-4 text-the-end-400" viewBox="0 0 16 16" fill="none">
                <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="2"/>
            </svg>
            
            @if(!empty($items[count($items) - 1]['url']))
                <a href="{{ $items[count($items) - 1]['url'] }}" class="px-2 py-1 truncate max-w-[{{ $maxWidth }}] text-body text-the-end-400 hover:text-pepper-green-600 transition">
                    {{ $items[count($items) - 1]['label'] }}
                </a>
            @else
                <span class="px-2 py-1 truncate max-w-[{{ $maxWidth }}] text-body text-the-end-400">
                    {{ $items[count($items) - 1]['label'] }}
                </span>
            @endif
        @endif
        
        <svg class="w-4 h-4 text-the-end-400" viewBox="0 0 16 16" fill="none">
            <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="2"/>
        </svg>
        
        <span class="px-2 py-1 font-medium text-chicken-comb-600" aria-current="page">
            {{ $currentLabel }}
        </span>
    </div>
</nav> 