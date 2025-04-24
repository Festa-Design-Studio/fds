@props([
    'type' => 'sector', // Options: sector, industry, sdg
    'label' => '',
])

@php
    $classes = match($type) {
        'sector' => 'bg-pepper-green-50 text-pepper-green-700 border-pepper-green-200',
        'industry' => 'bg-chicken-comb-50 text-chicken-comb-700 border-chicken-comb-200',
        'sdg' => 'bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border-apocalyptic-orange-200',
        default => 'bg-the-end-50 text-the-end-700 border-the-end-200'
    };
@endphp

<span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm border {{ $classes }}">
    {{ $label }}
</span> 