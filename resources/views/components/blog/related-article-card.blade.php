@props([
    'title' => 'Article Title',
    'excerpt' => 'A brief excerpt from the article that gives readers an idea of what the content is about.',
    'url' => '#',
    'thumbnail' => null
])

<a href="{{ $url }}" {{ $attributes->merge(['class' => 'group']) }}>
    <div class="relative w-full h-48 flex-shrink-0 mb-4 rounded-lg overflow-hidden">
        <img src="{{ $thumbnail ?? 'https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80' }}" 
            alt="{{ $title }}" 
            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
    </div>
    <h4 class="text-h5 font-semibold text-the-end-900 group-hover:text-pepper-green-600 transition-colors duration-150 mb-2">
        {{ $title }}
    </h4>
    <p class="text-body-sm text-the-end-700">
        {{ $excerpt }}
    </p>
</a> 