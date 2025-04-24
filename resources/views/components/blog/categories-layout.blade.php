@props([
    'categories' => [],
    'justifyCenter' => true,
])

<div class="flex flex-wrap {{ $justifyCenter ? 'justify-center' : '' }} gap-2">
    @foreach ($categories as $category)
        @if (isset($category['type']) && isset($category['label']))
            <x-blog.category :type="$category['type']">{{ $category['label'] }}</x-blog.category>
        @endif
    @endforeach
    
    {{ $slot }}
</div> 