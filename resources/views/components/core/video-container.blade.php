@props([
    'embedCode' => '',
    'caption' => '',
    'title' => '',
    'ariaLabel' => ''
])

<figure {{ $attributes->merge(['class' => 'bg-white-smoke-50 rounded-lg border border-white-smoke-300 p-4 md:p-8 lg:p-8 mx-auto my-6']) }}>
    <div class="relative w-full aspect-video overflow-hidden rounded-lg">
        @if($embedCode)
            {!! $embedCode !!}
        @else
            <!-- Video placeholder when no embed code is provided -->
            <div class="absolute inset-0 flex items-center justify-center bg-white-smoke-100 text-the-end-500 rounded-lg">
                <div class="text-center space-y-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                    <span class="text-body-sm">Video placeholder</span>
                </div>
            </div>
        @endif
    </div>
    @if($caption)
        <figcaption class="mt-4 text-pepper-green-700 text-body-sm text-center">
            {{ $caption }}
        </figcaption>
    @endif
</figure> 