@props([
    'name' => 'content',
    'label' => null,
    'value' => '',
    'required' => false,
    'placeholder' => 'Start writing rich content here...',
    'uploadUrl' => route('api.upload-image'),
    'helpText' => null,
])

<div {{ $attributes->merge(['class' => 'space-y-2']) }}>
    @if($label)
        <label for="festa-editor-{{ $name }}" class="block text-body font-medium text-the-end-900">
            {{ $label }}
            @if($required)
                <span class="text-chicken-comb-600">*</span>
            @endif
        </label>
    @endif
    
    <div 
        id="festa-editor-{{ $name }}" 
        class="festa-rich-text-field" 
        data-field-name="{{ $name }}"
        data-upload-url="{{ $uploadUrl }}"
        data-content="{{ htmlspecialchars($value) }}"
    >
        {!! $value !!}
    </div>
    
    @if($helpText)
        <p class="text-body-sm text-the-end-600">{{ $helpText }}</p>
    @endif
    
    <input type="hidden" name="{{ $name }}" value="{{ $value }}">
</div>

@once
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/festa-rich-text-editor.css') }}">
    @endpush
    
    @push('scripts')
        <script src="{{ asset('js/festa-rich-text-editor.js') }}"></script>
        <script src="{{ asset('js/festa-editor-init.js') }}"></script>
    @endpush
@endonce 