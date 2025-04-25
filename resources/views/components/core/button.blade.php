@props([
    'type' => 'button',
    'variant' => 'primary', // primary, secondary, neutral
    'size' => 'large', // small, medium, large
    'disabled' => false,
    'fullWidth' => false,
    'href' => null,
])

@php
    // Base classes
    $baseClasses = "transition-all duration-150 ease-in-out rounded-full flex items-center justify-center";
    
    // Full width class
    $widthClass = $fullWidth ? "w-full" : "lg:w-auto md:w-auto w-full";
    
    // Size classes
    $sizeClasses = [
        'small' => "px-3 py-1.5 text-body-sm h-[32px]",
        'medium' => "px-4 py-2 text-body h-[40px]",
        'large' => "px-6 py-3 text-body-lg h-[48px]",
    ][$size] ?? "px-6 py-3 text-body-lg h-[48px]";
    
    // Variant classes
    $variantClasses = match($variant) {
        'primary' => "bg-chicken-comb-600 text-white-smoke-50 hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2",
        'secondary' => "border-2 text-the-end-700 border-pepper-green-600/50 hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2",
        'neutral' => "border-2 text-the-end-700 border-white-smoke-400 hover:bg-white-smoke-300/50 active:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2",
        default => "bg-chicken-comb-600 text-white-smoke-50 hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2",
    };
    
    // Combining classes
    $classes = "{$baseClasses} {$widthClass} {$sizeClasses} {$variantClasses}";
@endphp

@if($href)
    <a 
        href="{{ $href }}"
        {{ $disabled ? 'disabled' : '' }} 
        {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button 
        type="{{ $type }}" 
        {{ $disabled ? 'disabled' : '' }} 
        {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif 