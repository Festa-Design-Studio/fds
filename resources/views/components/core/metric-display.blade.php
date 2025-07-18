@props([
    'icon' => null,
    'title' => '',
    'description' => '',
    'value' => null,
    'variant' => 'default', // 'default', 'primary', 'secondary', 'accent', 'warning'
    'size' => 'medium', // 'small', 'medium', 'large'
    'layout' => 'vertical', // 'vertical', 'horizontal'
    'hover' => true,
    'iconColor' => null
])

@php
    // Define size classes
    $sizeClasses = [
        'small' => [
            'container' => 'p-4',
            'icon' => 'w-8 h-8',
            'iconContainer' => 'w-10 h-10',
            'title' => 'text-h6',
            'description' => 'text-body-sm',
            'value' => 'text-h5'
        ],
        'medium' => [
            'container' => 'p-6',
            'icon' => 'w-6 h-6',
            'iconContainer' => 'w-12 h-12',
            'title' => 'text-h5',
            'description' => 'text-body',
            'value' => 'text-h4'
        ],
        'large' => [
            'container' => 'p-8',
            'icon' => 'w-8 h-8',
            'iconContainer' => 'w-14 h-14',
            'title' => 'text-h4',
            'description' => 'text-body-lg',
            'value' => 'text-h3'
        ]
    ];

    // Define variant classes
    $variantClasses = [
        'default' => [
            'container' => 'bg-white border-white-smoke-300',
            'iconContainer' => 'bg-white-smoke-100',
            'iconColor' => 'text-the-end-600',
            'title' => 'text-the-end-900',
            'description' => 'text-the-end-700',
            'value' => 'text-the-end-800'
        ],
        'primary' => [
            'container' => 'bg-pepper-green-50 border-pepper-green-200',
            'iconContainer' => 'bg-pepper-green-100',
            'iconColor' => 'text-pepper-green-600',
            'title' => 'text-the-end-900',
            'description' => 'text-the-end-700',
            'value' => 'text-pepper-green-700'
        ],
        'secondary' => [
            'container' => 'bg-leaf-50 border-leaf-200',
            'iconContainer' => 'bg-leaf-100',
            'iconColor' => 'text-leaf-600',
            'title' => 'text-the-end-900',
            'description' => 'text-the-end-700',
            'value' => 'text-leaf-700'
        ],
        'accent' => [
            'container' => 'bg-chicken-comb-50 border-chicken-comb-200',
            'iconContainer' => 'bg-chicken-comb-100',
            'iconColor' => 'text-chicken-comb-600',
            'title' => 'text-the-end-900',
            'description' => 'text-the-end-700',
            'value' => 'text-chicken-comb-700'
        ],
        'warning' => [
            'container' => 'bg-apocalyptic-orange-50 border-apocalyptic-orange-200',
            'iconContainer' => 'bg-apocalyptic-orange-100',
            'iconColor' => 'text-apocalyptic-orange-600',
            'title' => 'text-the-end-900',
            'description' => 'text-the-end-700',
            'value' => 'text-apocalyptic-orange-700'
        ]
    ];

    // Get current size and variant classes
    $currentSize = $sizeClasses[$size] ?? $sizeClasses['medium'];
    $currentVariant = $variantClasses[$variant] ?? $variantClasses['default'];

    // Override icon color if provided
    $finalIconColor = $iconColor ?? $currentVariant['iconColor'];

    // Layout-specific classes
    $layoutClasses = $layout === 'horizontal' 
        ? 'flex flex-row items-start gap-4' 
        : 'flex flex-col items-center text-center';

    // Hover classes
    $hoverClasses = $hover ? 'hover:shadow-md hover:-translate-y-1 transition-all duration-300' : '';
@endphp

<div class="border rounded-xl shadow-sm {{ $currentVariant['container'] }} {{ $currentSize['container'] }} {{ $hoverClasses }} {{ $attributes->get('class') }}">
    <div class="{{ $layoutClasses }}">
        {{-- Icon Container --}}
        @if($icon)
            <div class="flex-shrink-0 {{ $currentSize['iconContainer'] }} rounded-lg flex items-center justify-center {{ $currentVariant['iconContainer'] }}">
                <div class="{{ $currentSize['icon'] }} {{ $finalIconColor }}">
                    {!! $icon !!}
                </div>
            </div>
        @endif

        {{-- Content --}}
        <div class="{{ $layout === 'horizontal' ? 'flex-1' : 'w-full' }}">
            {{-- Value (if provided) --}}
            @if($value)
                <div class="{{ $currentSize['value'] }} font-bold {{ $currentVariant['value'] }} {{ $layout === 'horizontal' ? 'mb-1' : 'mb-2' }}">
                    {{ $value }}
                </div>
            @endif

            {{-- Title --}}
            @if($title)
                <h3 class="{{ $currentSize['title'] }} font-semibold {{ $currentVariant['title'] }} {{ $layout === 'horizontal' ? 'mb-2' : ($icon ? 'mb-3 mt-4' : 'mb-3') }}">
                    {{ $title }}
                </h3>
            @endif

            {{-- Description --}}
            @if($description)
                <p class="{{ $currentSize['description'] }} {{ $currentVariant['description'] }} leading-relaxed">
                    {{ $description }}
                </p>
            @endif

            {{-- Slot for additional content --}}
            @if($slot->isNotEmpty())
                <div class="{{ $layout === 'horizontal' ? 'mt-3' : 'mt-4' }}">
                    {{ $slot }}
                </div>
            @endif
        </div>
    </div>
</div>