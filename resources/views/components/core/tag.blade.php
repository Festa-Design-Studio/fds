@props([
    'variant' => 'default', // default, success, warning, error, info
    'withIcon' => false, 
])

@php
    // Variant classes
    $variantClasses = match($variant) {
        'success' => "bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200",
        'warning' => "bg-pot-of-gold-50 text-pot-of-gold-700 border border-pot-of-gold-200",
        'error' => "bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200",
        'info' => "bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200",
        default => "bg-white-smoke-50 text-the-end-900 border border-the-end-200",
    };
    
    $baseClasses = "inline-flex items-center px-2.5 py-1 rounded-full text-body-sm";
    $classes = "{$baseClasses} {$variantClasses}";
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    @if ($withIcon)
        <svg class="mr-1.5 h-3 w-3" viewBox="0 0 12 12" fill="currentColor">
            @switch($variant)
                @case('success')
                    <path d="M4 8l-2-2 1-1 1 1 3-3 1 1-4 4z"/>
                    @break
                @case('warning')
                    <path d="M6 1a1 1 0 011 1v4a1 1 0 11-2 0V2a1 1 0 011-1zM6 9a1 1 0 100 2 1 1 0 000-2z"/>
                    @break
                @case('error')
                    <path d="M4.293 4.293a1 1 0 011.414 0L7 5.586l1.293-1.293a1 1 0 111.414 1.414L8.414 7l1.293 1.293a1 1 0 01-1.414 1.414L7 8.414l-1.293 1.293a1 1 0 01-1.414-1.414L5.586 7 4.293 5.707a1 1 0 010-1.414z"/>
                    @break
                @case('info')
                    <path d="M6 1a1 1 0 011 1v1a1 1 0 11-2 0V2a1 1 0 011-1zM6 5a1 1 0 100 2 1 1 0 000-2zM4.5 9h3a.5.5 0 110 1h-3a.5.5 0 010-1z"/>
                    @break
                @default
                    <circle cx="6" cy="6" r="3"/>
            @endswitch
        </svg>
    @endif
    
    {{ $slot }}
</span> 