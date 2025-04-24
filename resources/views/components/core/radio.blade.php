@props([
    'name' => '',
    'id' => null,
    'value' => '',
    'label' => '',
    'checked' => false,
    'disabled' => false,
])

@php
    $id = $id ?? "{$name}_{$value}";
    $radioClasses = "h-4 w-4 border-the-end-300 text-chicken-comb-600 focus:ring-chicken-comb-600/70 focus:ring-1 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed outline-chicken-comb-600";
@endphp

<div class="flex items-center gap-2">
    <input
        type="radio"
        name="{{ $name }}"
        id="{{ $id }}"
        value="{{ $value }}"
        {{ $checked ? 'checked' : '' }}
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge(['class' => $radioClasses]) }}
    />
    @if ($label)
        <label for="{{ $id }}" class="text-the-end-900 text-body-sm">{{ $label }}</label>
    @endif
</div> 