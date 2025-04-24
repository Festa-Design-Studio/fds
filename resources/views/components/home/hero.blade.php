@props([
    'title' => 'Welcome to Festa Design Studio',
    'subtitle' => 'Creating exceptional digital experiences and brands that resonate',
    'bgImage' => '',
])

<section class="relative w-full h-[90vh] flex items-center justify-center {{ $bgImage ? '' : 'bg-white-smoke-50' }}">
    @if ($bgImage)
        <div class="absolute inset-0 z-0">
            <img src="{{ $bgImage }}" alt="Hero background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-the-end-900/50"></div>
        </div>
    @endif

    <div class="container mx-auto px-4 md:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-display font-semibold {{ $bgImage ? 'text-white-smoke-50' : 'text-the-end-900' }} mb-6">
                {{ $title }}
            </h1>
            <p class="text-h5 mb-8 {{ $bgImage ? 'text-white-smoke-100' : 'text-the-end-700' }}">
                {{ $subtitle }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-core.button variant="primary" size="large">
                    View Our Work
                </x-core.button>
                <x-core.button variant="secondary" size="large">
                    Get in Touch
                </x-core.button>
            </div>
        </div>
    </div>
</section> 