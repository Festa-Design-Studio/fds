@props([
    'type' => 'default', // default, design, trends, strategy, case-studies
    'url' => null,
    'colorClass' => null,
])

@php
    $baseClasses = "inline-flex items-center px-3 py-1 rounded-full text-body-sm transition-colors duration-150 ease-in-out";
    if ($colorClass) {
        $classes = "$baseClasses $colorClass";
    } else {
        $typeClasses = match(strtolower($type)) {
            'design' => "bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200 hover:bg-pepper-green-100",
            'trends' => "bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200 hover:bg-chicken-comb-100",
            'strategy' => "bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200 hover:bg-apocalyptic-orange-100",
            'case-studies' => "bg-pot-of-gold-50 text-pot-of-gold-700 border border-pot-of-gold-200 hover:bg-pot-of-gold-100",
            default => "bg-white-smoke-100 text-the-end-700 border border-white-smoke-300 hover:bg-white-smoke-200",
        };
        $classes = "$baseClasses $typeClasses";
    }
@endphp

@if ($url)
    <a href="{{ $url }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <span {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </span>
@endif 