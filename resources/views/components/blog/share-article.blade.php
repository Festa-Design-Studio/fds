@props([
    'title' => 'Article Title',
    'url' => 'https://example.com/article'
])

<div {{ $attributes->merge(['class' => 'flex flex-col items-center md:items-end w-full']) }}>
    <div class="space-y-1 md:text-right text-center">
        <label class="text-the-end-400 text-body-sm">Share this article</label>
        <div class="flex space-x-1.5">
            <button type="button" class="p-1">
                <svg class="w-5 h-5 fill-the-end-400 hover:fill-pepper-green-600" viewBox="0 0 33 33">
                    <title>Share on linkedin</title>
                    <g>
                        <path d="M31.74 0h-30.36c-0.76 0-1.38 0.62-1.38 1.38v30.36c0 0.76 0.62 1.38 1.38 1.38h30.36c0.76 0 1.38-0.62 1.38-1.38v-30.36c0-0.76-0.62-1.38-1.38-1.38z m-21.94 28.22h-4.9v-15.8h4.9v15.8z m-2.42-17.94c-1.59 0-2.83-1.24-2.83-2.83s1.24-2.83 2.83-2.83 2.83 1.24 2.83 2.83c0 1.52-1.24 2.83-2.83 2.83z m20.84 17.94h-4.9v-7.66c0-1.86 0-4.21-2.55-4.21s-2.97 2-2.97 4.07v7.8h-4.9v-15.8h4.69v2.14h0.07c0.62-1.24 2.28-2.55 4.63-2.55 4.97 0 5.86 3.24 5.86 7.52v8.69z"></path>
                    </g>
                </svg>
            </button>
            <button type="submit" class="p-1 text-the-end-400 hover:text-pepper-green-600">
                <svg class="w-5 h-5 fill-the-end-400 hover:fill-pepper-green-600" viewBox="0 0 48 48">
                    <title>logo-facebook</title>
                    <g>
                        <path d="M47,24.138A23,23,0,1,0,20.406,46.859V30.786H14.567V24.138h5.839V19.07c0-5.764,3.434-8.948,8.687-8.948a35.388,35.388,0,0,1,5.149.449v5.66h-2.9a3.325,3.325,0,0,0-3.732,2.857,3.365,3.365,0,0,0-.015.737v4.313h6.379l-1.02,6.648H27.594V46.859A23,23,0,0,0,47,24.138Z"></path>
                    </g>
                </svg>
            </button>
            <button type="submit" class="p-1 text-the-end-400 hover:text-pepper-green-600">
                <svg class="w-5 h-5 fill-the-end-400 hover:fill-pepper-green-600" viewBox="0 0 1200 1227">
                    <title>logo</title>
                    <g>
                        <defs></defs>
                        <path class="st0" d="M714.2,519.3L1160.9,0h-105.9l-387.9,450.9L357.3,0H0l468.5,681.8L0,1226.4h105.9l409.6-476.2,327.2,476.2h357.3l-485.9-707.1h0ZM569.2,687.8l-47.5-67.9L144,79.7h162.6l304.8,436,47.5,67.9,396.2,566.7h-162.6l-323.3-462.4h0Z"></path>
                    </g>
                </svg>
            </button>
            <button type="submit" class="p-1 text-the-end-400 hover:text-pepper-green-600">
                <svg class="w-5 h-5 fill-the-end-400 hover:fill-pepper-green-600" viewBox="0 0 48 48">
                    <title>clone-3</title>
                    <g>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M34 28C34 31.3137 31.3137 34 28 34L10 34C6.68629 34 4 31.3137 4 28L4 10C4 6.68629 6.68629 4 10 4L28 4C31.3137 4 34 6.68629 34 10L34 28Z"></path>
                        <path d="M38 44C41.3137 44 44 41.3137 44 38L44 20C44 16.6863 41.3137 14 38 14L37 14L37 29C37 33.4183 33.4183 37 29 37L14 37L14 38C14 41.3137 16.6863 44 20 44L38 44Z"></path>
                    </g>
                </svg>
            </button>
        </div>
    </div>
</div> 