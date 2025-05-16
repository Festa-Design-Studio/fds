@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-the-end-700']) }}>
    {{ $value ?? $slot }}
</label> 