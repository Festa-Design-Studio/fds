<!-- Our-process Hero Section with Video -->
@php
    $vimeoEmbedCode = '<iframe src="https://player.vimeo.com/video/1005973852" class="w-full h-full" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
@endphp

<section class="relative py-20 px-4 md:px-8 lg:px-16 bg-gradient-to-br from-pepper-green-50 to-leaf-50">
    <div class="max-w-4xl mx-auto text-center space-y-8">
        <h1 class="text-h1 font-black text-the-end-900">Remote<span class="text-chicken-comb-600">-</span>first
            culture studio</h1>
        <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
            Flexible working environment, client-centered confidentiality, embedded partnership for seamless collaboration.
        </p>
        
        <!-- Video Container Component -->
        <x-core.video-container 
            :embedCode="$vimeoEmbedCode"
            class="max-w-4xl shadow-xl border-0 bg-transparent p-0"
            title="Remote-first culture studio video"
            ariaLabel="Video showcasing Festa Design Studio's remote-first culture and working environment"
        />
    </div>
</section> 