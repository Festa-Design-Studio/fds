@props([
    'name' => '',
    'id' => null,
    'label' => '',
    'placeholder' => 'Tell us about your project',
    'rows' => 3,
    'disabled' => false,
    'required' => false,
])

@php
    $id = $id ?? $name;
    $textareaClasses = "w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 outline-chicken-comb-600 disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed";
@endphp

<div class="space-y-2">
    @if ($label)
        <label for="{{ $id }}" class="text-the-end-900 text-body-sm font-medium">{{ $label }}</label>
    @endif
    
    <textarea
        name="{{ $name }}"
        id="{{ $id }}"
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        {{ $disabled ? 'disabled' : '' }}
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => $textareaClasses]) }}
    >{{ $slot }}</textarea>
</div> 