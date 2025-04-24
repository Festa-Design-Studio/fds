@props([
    'title' => '',
    'description' => '',
    'image' => '',
    'url' => '#',
    'tags' => [],
])

<article class="bg-gradient-to-t from-white-smoke-100 via-pepper-green-50 to-white-smoke-50 rounded-2xl p-6 border border-white-smoke-300 shadow-sm">
    <div class="space-y-6">
        <div class="aspect-video rounded-xl bg-white-smoke-100 overflow-hidden">
            @if ($image)
                <img 
                    src="{{ $image }}" 
                    alt="{{ $title }}" 
                    class="w-full h-full object-cover"
                />
            @else
                <div class="flex h-full w-full items-center justify-center bg-white-smoke-300">
                    <span class="text-the-end-500">No image available</span>
                </div>
            @endif
        </div>

        <div class="space-y-3.5">
            @if (count($tags) > 0)
                <x-work.tag-group :tags="$tags" />
            @endif

            <h3 class="text-h4 font-semibold text-the-end-900">
                {{ $title }}
            </h3>
            
            @if ($description)
                <p class="text-body-sm text-the-end-700">
                    {{ $description }}
                </p>
            @endif

            <div class="flex items-center gap-4">
                <x-core.button href="{{ $url }}" variant="secondary" size="small">
                    View work
                </x-core.button>
            </div>
        </div>
    </div>
</article> 