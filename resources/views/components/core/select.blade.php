@props([
    'name' => '',
    'id' => null,
    'label' => '',
    'disabled' => false,
    'placeholder' => 'Choose an option',
])

@php
    $id = $id ?? $name;
    $selectClasses = "w-full px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 outline-chicken-comb-600 disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed";
@endphp

<div class="space-y-2">
    @if ($label)
        <label for="{{ $id }}" class="text-the-end-900 text-body-sm font-medium">{{ $label }}</label>
    @endif
    
    <select
        name="{{ $name }}"
        id="{{ $id }}"
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge(['class' => $selectClasses]) }}
    >
        <option value="">{{ $placeholder }}</option>
        {{ $slot }}
    </select>
</div> 