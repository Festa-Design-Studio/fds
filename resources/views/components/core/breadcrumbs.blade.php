@props(['items' => []])

<nav aria-label="Breadcrumb" {{ $attributes->merge(['class' => 'mx-auto px-4 sm:px-6 lg:px-6 py-4 sm:py-6 lg:py-6']) }}>
    <ol class="flex flex-wrap items-center gap-2 text-body-xs">
        <li>
            <a href="/" class="text-the-end-400 text-body hover:text-pepper-green transition">
                Home
            </a>
        </li>
        
        @foreach($items as $index => $item)
            <li class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3 text-the-end-400">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                
                @if($index === count($items) - 1 || empty($item['url']))
                    <span class="text-body text-chicken-comb-600" aria-current="page">
                        {{ $item['label'] }}
                    </span>
                @else
                    <a href="{{ $item['url'] }}" class="text-the-end-400 hover:text-pepper-green text-body  transition">
                        {{ $item['label'] }}
                    </a>
                @endif
            </li>
        @endforeach
    </ol>
</nav> 