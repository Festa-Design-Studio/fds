@props([
    'type' => 'text',
    'name' => '',
    'id' => null,
    'value' => '',
    'label' => '',
    'placeholder' => '',
    'disabled' => false,
    'leadingIcon' => false,
])

@php
    $id = $id ?? $name;
    $baseInputClasses = "w-full px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 outline-chicken-comb-600 disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed";
    
    if ($leadingIcon) {
        $inputClasses = "pl-10 " . $baseInputClasses;
    } else {
        $inputClasses = $baseInputClasses;
    }
@endphp

<div class="space-y-2">
    @if ($label)
        <label for="{{ $id }}" class="text-the-end-900 text-body-sm font-medium">{{ $label }}</label>
    @endif
    
    <div class="relative">
        <input
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $id }}"
            value="{{ $value }}"
            placeholder="{{ $placeholder }}"
            {{ $disabled ? 'disabled' : '' }}
            {{ $attributes->merge(['class' => $inputClasses]) }}
        />
        
        @if ($leadingIcon)
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                {{ $leadingIcon }}
            </div>
        @endif
    </div>
</div> 