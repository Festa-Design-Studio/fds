@props([
    'eyebrow' => null,
    'title' => '',
    'description' => null,
    'alignment' => 'center', // 'left', 'center', 'right'
    'variant' => 'default', // 'default', 'primary', 'secondary'
    'size' => 'large', // 'small', 'medium', 'large'
    'spacing' => 'normal' // 'tight', 'normal', 'loose'
])

@php
    // Define alignment classes
    $alignmentClasses = [
        'left' => 'text-left',
        'center' => 'text-center',
        'right' => 'text-right'
    ];

    // Define size classes
    $sizeClasses = [
        'small' => [
            'eyebrow' => 'text-body-sm',
            'title' => 'text-h4',
            'description' => 'text-body',
            'maxWidth' => 'max-w-2xl'
        ],
        'medium' => [
            'eyebrow' => 'text-body',
            'title' => 'text-h3',
            'description' => 'text-body-lg',
            'maxWidth' => 'max-w-3xl'
        ],
        'large' => [
            'eyebrow' => 'text-body-lg',
            'title' => 'text-h2',
            'description' => 'text-body-lg',
            'maxWidth' => 'max-w-4xl'
        ]
    ];

    // Define variant classes
    $variantClasses = [
        'default' => [
            'eyebrow' => 'text-the-end-600',
            'title' => 'text-the-end-900',
            'description' => 'text-the-end-700'
        ],
        'primary' => [
            'eyebrow' => 'text-pepper-green-600',
            'title' => 'text-the-end-900',
            'description' => 'text-the-end-700'
        ],
        'secondary' => [
            'eyebrow' => 'text-chicken-comb-600',
            'title' => 'text-the-end-900',
            'description' => 'text-the-end-700'
        ]
    ];

    // Define spacing classes
    $spacingClasses = [
        'tight' => [
            'container' => 'space-y-2',
            'titleMargin' => 'mt-1',
            'descriptionMargin' => 'mt-2'
        ],
        'normal' => [
            'container' => 'space-y-4',
            'titleMargin' => 'mt-2',
            'descriptionMargin' => 'mt-4'
        ],
        'loose' => [
            'container' => 'space-y-6',
            'titleMargin' => 'mt-3',
            'descriptionMargin' => 'mt-6'
        ]
    ];

    // Get current classes
    $currentAlign = $alignmentClasses[$alignment] ?? $alignmentClasses['center'];
    $currentSize = $sizeClasses[$size] ?? $sizeClasses['large'];
    $currentVariant = $variantClasses[$variant] ?? $variantClasses['default'];
    $currentSpacing = $spacingClasses[$spacing] ?? $spacingClasses['normal'];

    // Container classes
    $containerClasses = $alignment === 'center' ? 'mx-auto' : '';
@endphp

<div class="{{ $currentAlign }} {{ $currentSize['maxWidth'] }} {{ $containerClasses }} {{ $attributes->get('class') }}">
    <div class="{{ $currentSpacing['container'] }}">
        {{-- Eyebrow Text --}}
        @if($eyebrow)
            <div class="{{ $currentSize['eyebrow'] }} font-medium uppercase tracking-wider {{ $currentVariant['eyebrow'] }}">
                {{ $eyebrow }}
            </div>
        @endif

        {{-- Title --}}
        @if($title)
            <h2 class="{{ $currentSize['title'] }} font-bold {{ $currentVariant['title'] }} {{ $eyebrow ? $currentSpacing['titleMargin'] : '' }}">
                {{ $title }}
            </h2>
        @endif

        {{-- Description --}}
        @if($description)
            <p class="{{ $currentSize['description'] }} {{ $currentVariant['description'] }} leading-relaxed {{ ($title || $eyebrow) ? $currentSpacing['descriptionMargin'] : '' }}">
                {{ $description }}
            </p>
        @endif

        {{-- Slot for additional content --}}
        @if($slot->isNotEmpty())
            <div class="{{ ($title || $eyebrow || $description) ? 'mt-6' : '' }}">
                {{ $slot }}
            </div>
        @endif
    </div>
</div>