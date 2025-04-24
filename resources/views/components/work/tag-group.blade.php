@props(['tags' => []])

<div class="inline-flex flex-wrap gap-2">
    @foreach($tags as $tag)
        <x-work.tag 
            :type="$tag['type'] ?? 'sector'" 
            :label="$tag['label'] ?? ''"
        />
    @endforeach
    
    {{ $slot }}
</div> 