@props([
    'name' => '',
    'id' => null,
    'label' => 'Upload File',
    'disabled' => false,
    'accept' => '',
])

@php
    $id = $id ?? $name;
@endphp

<div class="space-y-2">
    <label for="{{ $id }}" class="text-the-end-900 text-body-sm font-medium">{{ $label }}</label>
    <div class="flex items-center justify-center w-full">
        <label for="{{ $id }}" class="flex flex-col items-center justify-center w-full h-32 
            border-2 border-the-end-200 border-dashed rounded-xl 
            cursor-pointer bg-white-smoke-50 hover:bg-chicken-comb-50 
            hover:border-chicken-comb-600/50 {{ $disabled ? 'opacity-50 cursor-not-allowed' : '' }}">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg class="w-8 h-8 mb-4 text-the-end-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                    </path>
                </svg>
                <p class="mb-2 text-sm text-the-end-500">
                    <span class="font-medium">Click to upload</span> or drag and drop
                </p>
            </div>
            <input 
                type="file" 
                name="{{ $name }}" 
                id="{{ $id }}" 
                {{ $disabled ? 'disabled' : '' }}
                {{ $accept ? "accept={$accept}" : '' }}
                {{ $attributes->merge(['class' => 'hidden']) }}
            />
        </label>
    </div>
</div> 