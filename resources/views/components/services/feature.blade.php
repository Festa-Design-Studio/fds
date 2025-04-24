@props([
    'title' => '',
    'description' => '',
    'icon' => null,
    'bgColor' => 'bg-white-smoke-50',
])

<div class="{{ $bgColor }} rounded-xl p-6 md:p-8 transition-all duration-300 hover:shadow-md">
    @if ($icon)
        <div class="mb-5 inline-flex h-12 w-12 items-center justify-center rounded-full bg-chicken-comb-100 text-chicken-comb-600">
            {{ $icon }}
        </div>
    @endif
    
    <h3 class="mb-3 text-h5 font-semibold text-the-end-900">{{ $title }}</h3>
    
    @if ($description)
        <p class="text-body text-the-end-700">{{ $description }}</p>
    @endif
    
    @if ($slot->isNotEmpty())
        <div class="mt-4">
            {{ $slot }}
        </div>
    @endif
</div> 