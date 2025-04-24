@props([
    'name' => '',
    'id' => null,
    'value' => '',
    'label' => 'Password',
    'placeholder' => 'Enter your password',
    'disabled' => false,
    'required' => false,
])

@php
    $id = $id ?? $name;
    $inputClasses = "w-full px-4 py-2 pr-10 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 outline-chicken-comb-600 disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed";
@endphp

<div class="space-y-2">
    @if ($label)
        <label for="{{ $id }}" class="text-the-end-900 text-body-sm font-medium">{{ $label }}</label>
    @endif
    
    <div class="relative">
        <input
            type="password"
            name="{{ $name }}"
            id="{{ $id }}"
            value="{{ $value }}"
            placeholder="{{ $placeholder }}"
            {{ $disabled ? 'disabled' : '' }}
            {{ $required ? 'required' : '' }}
            {{ $attributes->merge(['class' => $inputClasses]) }}
        />
        
        <button 
            type="button" 
            class="absolute inset-y-0 right-0 pr-3 flex items-center toggle-password"
            onclick="togglePasswordVisibility('{{ $id }}')"
        >
            <svg class="h-5 w-5 text-the-end-400 show-password" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
            </svg>
            <svg class="h-5 w-5 text-the-end-400 hide-password hidden" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd"/>
                <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"/>
            </svg>
        </button>
    </div>
</div>

<script>
    // This function will be included in the page
    function togglePasswordVisibility(inputId) {
        const input = document.getElementById(inputId);
        const button = input.nextElementSibling;
        const showIcon = button.querySelector('.show-password');
        const hideIcon = button.querySelector('.hide-password');

        if (input.type === 'password') {
            input.type = 'text';
            showIcon.classList.add('hidden');
            hideIcon.classList.remove('hidden');
        } else {
            input.type = 'password';
            showIcon.classList.remove('hidden');
            hideIcon.classList.add('hidden');
        }
    }
</script> 