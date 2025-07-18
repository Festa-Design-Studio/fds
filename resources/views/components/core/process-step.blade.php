@props([
    'number' => null,
    'icon' => null,
    'title' => '',
    'description' => '',
    'variant' => 'default', // 'default', 'primary', 'secondary', 'accent'
    'size' => 'medium', // 'small', 'medium', 'large'
    'layout' => 'vertical', // 'vertical', 'horizontal'
    'badgeColor' => null,
    'hover' => true
])

@php
    // Define size classes
    $sizeClasses = [
        'small' => [
            'container' => 'p-4',
            'badge' => 'w-8 h-8 text-sm',
            'title' => 'text-h6',
            'description' => 'text-body-sm'
        ],
        'medium' => [
            'container' => 'p-6',
            'badge' => 'w-10 h-10 text-base',
            'title' => 'text-h5',
            'description' => 'text-body'
        ],
        'large' => [
            'container' => 'p-8',
            'badge' => 'w-12 h-12 text-lg',
            'title' => 'text-h4',
            'description' => 'text-body-lg'
        ]
    ];

    // Define variant classes
    $variantClasses = [
        'default' => [
            'container' => 'bg-white border-white-smoke-300',
            'badge' => 'bg-white-smoke-100 text-the-end-700',
            'title' => 'text-the-end-900',
            'description' => 'text-the-end-700'
        ],
        'primary' => [
            'container' => 'bg-pepper-green-50 border-pepper-green-200',
            'badge' => 'bg-pepper-green-100 text-pepper-green-700',
            'title' => 'text-the-end-900',
            'description' => 'text-the-end-700'
        ],
        'secondary' => [
            'container' => 'bg-leaf-50 border-leaf-200',
            'badge' => 'bg-leaf-100 text-leaf-700',
            'title' => 'text-the-end-900',
            'description' => 'text-the-end-700'
        ],
        'accent' => [
            'container' => 'bg-chicken-comb-50 border-chicken-comb-200',
            'badge' => 'bg-chicken-comb-100 text-chicken-comb-700',
            'title' => 'text-the-end-900',
            'description' => 'text-the-end-700'
        ]
    ];

    // Get current size and variant classes
    $currentSize = $sizeClasses[$size] ?? $sizeClasses['medium'];
    $currentVariant = $variantClasses[$variant] ?? $variantClasses['default'];

    // Override badge color if provided
    if ($badgeColor) {
        $currentVariant['badge'] = $badgeColor;
    }

    // Layout-specific classes
    $layoutClasses = $layout === 'horizontal' 
        ? 'flex flex-row items-start gap-4' 
        : 'flex flex-col items-center text-center';

    // Hover classes
    $hoverClasses = $hover ? 'hover:shadow-md hover:-translate-y-1 transition-all duration-300' : '';
@endphp

<div class="border rounded-xl shadow-sm {{ $currentVariant['container'] }} {{ $currentSize['container'] }} {{ $hoverClasses }} {{ $attributes->get('class') }}">
    <div class="{{ $layoutClasses }}">
        {{-- Badge (Number or Icon) --}}
        @if($number || $icon)
            <div class="flex-shrink-0 {{ $currentSize['badge'] }} rounded-full flex items-center justify-center font-semibold {{ $currentVariant['badge'] }}">
                @if($icon)
                    {!! $icon !!}
                @else
                    {{ $number }}
                @endif
            </div>
        @endif

        {{-- Content --}}
        <div class="{{ $layout === 'horizontal' ? 'flex-1' : 'w-full' }}">
            @if($title)
                <h3 class="{{ $currentSize['title'] }} font-semibold {{ $currentVariant['title'] }} {{ $layout === 'horizontal' ? 'mb-2' : 'mb-3 mt-4' }}">
                    {{ $title }}
                </h3>
            @endif

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