@props([
    'name' => '',
    'id' => null,
    'value' => '',
    'label' => '',
    'checked' => false,
    'disabled' => false,
    'required' => false,
])

@php
    $id = $id ?? $name;
    $checkboxClasses = "h-4 w-4 border-the-end-300 text-chicken-comb-600 focus:ring-chicken-comb-600/70 focus:ring-1 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed rounded";
@endphp

<div class="flex items-center gap-2">
    <input
        type="checkbox"
        name="{{ $name }}"
        id="{{ $id }}"
        value="{{ $value }}"
        {{ $checked ? 'checked' : '' }}
        {{ $disabled ? 'disabled' : '' }}
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => $checkboxClasses]) }}
    />
    @if ($label)
        <label for="{{ $id }}" class="text-the-end-900 text-body-sm">{{ $label }}</label>
    @endif
</div> 