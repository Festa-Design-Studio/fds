@props([
    'quote' => '',
    'authorName' => '',
    'authorTitle' => '',
])

<div class="p-6 md:p-8 bg-white-smoke-100 border border-white-smoke-300 rounded-xl">
    <div class="mb-6">
        <svg class="w-12 h-12 fill-chicken-comb-600" viewBox="0 0 32 32" aria-hidden="true" focusable="false">
            <title>testimonial</title>
            <g>
                <defs></defs>
                <path class="cls-1" d="M12.09,29.04H1.65c-.36,0-.65-.29-.65-.65v-13.04C1,9.06,3.33,4.91,7.92,3.01c.33-.14.71.02.85.35s-.02.71-.35.85c-3.9,1.61-5.96,5.14-6.11,10.48h9.77c.36,0,.65.29.65.65v13.04c0,.36-.29.65-.65.65Z"></path>
                <path class="cls-1" d="M30.35,29.04h-10.43c-.36,0-.65-.29-.65-.65v-13.04c0-6.29,2.33-10.44,6.92-12.34.33-.14.71.02.85.35s-.02.71-.35.85c-3.9,1.61-5.96,5.14-6.11,10.48h9.77c.36,0,.65.29.65.65v13.04c0,.36-.29.65-.65.65h0Z"></path>
            </g>
        </svg>
    </div>
    <blockquote class="text-body leading-[1.7] mb-4 text-the-end-700">
        {{ $quote }}
    </blockquote>
    <div class="mt-6">
        <div class="text-body font-medium text-the-end">{{ $authorName }}</div>
        <div class="text-body-sm text-the-end-600">{{ $authorTitle }}</div>
    </div>
</div> 