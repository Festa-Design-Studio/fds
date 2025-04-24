@props([
    'type' => 'default', // default, design, trends, strategy, case-studies
])

@php
    // Type-specific classes
    $typeClasses = match($type) {
        'design' => "bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200",
        'trends' => "bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200",
        'strategy' => "bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200",
        'case-studies' => "bg-pot-of-gold-50 text-pot-of-gold-700 border border-pot-of-gold-200",
        default => "bg-white-smoke-50 text-the-end-900 border border-the-end-200",
    };
    
    $baseClasses = "inline-flex items-center px-3 py-1 rounded-full text-body-sm";
    $classes = "{$baseClasses} {$typeClasses}";
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span> 