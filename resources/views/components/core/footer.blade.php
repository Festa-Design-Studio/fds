@props(['simplified' => false])

<footer {{ $attributes->merge(['class' => 'w-full bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100']) }}>
    <div class="mx-auto px-4 sm:px-6 lg:px-6 py-4 sm:py-6 lg:py-6">
        <!-- Main footer content -->
        @if(!$simplified)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-12 mb-12">
                <!-- Column 1: Brand -->
                <div class="flex flex-col space-y-4 max-w-72">
                    <svg class="w-24 h-24" viewBox="0 0 16 16"><title>we-design-for-good</title><g><defs></defs><path class="cls-12" d="M4.61,5.99c.17-.3.39-.57.63-.81l-2.06-2.26c-.52.5-.96,1.07-1.31,1.7l2.74,1.36Z" fill="#56c22b"></path><path class="cls-11" d="M9.66,4.39c.31.14.6.33.86.54l2.07-2.26c-.54-.47-1.16-.86-1.83-1.14l-1.1,2.86Z" fill="#dda63a"></path><path class="cls-5" d="M14.39,5.07l-2.74,1.36c.13.31.22.63.27.97l3.05-.29c-.09-.72-.29-1.41-.58-2.04" fill="#c5192d"></path><path class="cls-8" d="M11.45,6.04l2.74-1.36c-.34-.63-.77-1.2-1.28-1.7l-2.07,2.25c.24.24.44.51.61.81" fill="#4c9f38"></path><path class="cls-15" d="M4.06,7.99c0-.06,0-.12,0-.18l-3.05-.27c0,.15-.02.3-.02.46,0,.58.07,1.15.21,1.69l2.94-.84c-.06-.27-.09-.56-.09-.85" fill="#3f7e44"></path><path class="cls-17" d="M11.07,10.49c-.22.26-.47.5-.74.7l1.61,2.6c.6-.4,1.13-.9,1.58-1.46l-2.44-1.84Z" fill="#fcc30b"></path><path class="cls-14" d="M11.97,7.99c0,.29-.03.57-.09.84l2.94.85c.13-.54.21-1.1.21-1.69,0-.14,0-.29-.01-.43l-3.05.29s0,.09,0,.14" fill="#ff3a21"></path><path class="cls-13" d="M5.01,10.55l-2.43,1.85c.45.56.99,1.04,1.59,1.44l1.61-2.6c-.28-.2-.54-.43-.76-.69" fill="#ff9f24"></path><path class="cls-1" d="M4.11,7.37c.05-.34.15-.67.29-.98l-2.74-1.36c-.3.64-.51,1.34-.6,2.07l3.05.27Z" fill="#0a97d9"></path><path class="cls-9" d="M11.56,14.03l-1.61-2.6c-.29.16-.61.29-.94.38l.57,3.01c.71-.16,1.37-.43,1.98-.79" fill="#a21942"></path><path class="cls-4" d="M11.76,9.26c-.11.31-.25.61-.43.88l2.44,1.84c.4-.57.71-1.2.92-1.88l-2.94-.84Z" fill="#26bde2"></path><path class="cls-10" d="M8.59,11.9c-.19.03-.38.04-.57.04-.16,0-.31,0-.46-.03l-.57,3.01c.34.05.68.08,1.03.08.39,0,.77-.03,1.14-.09l-.57-3.01Z" fill="#ff6924"></path><path class="cls-2" d="M8.27,4.04c.34.02.67.09.98.19l1.1-2.86c-.65-.23-1.35-.37-2.08-.39v3.06Z" fill="#e8203a"></path><path class="cls-3" d="M7.12,11.84c-.34-.08-.67-.2-.97-.37l-1.61,2.6c.62.35,1.3.62,2.01.77l.57-3.01Z" fill="#dd1367"></path><path class="cls-16" d="M6.83,4.22c.32-.1.65-.16,1-.18V.98c-.74.02-1.44.15-2.1.38l1.11,2.85Z" fill="#19486a"></path><path class="cls-7" d="M4.74,10.2c-.19-.29-.35-.6-.47-.93l-2.94.84c.22.7.55,1.35.97,1.94l2.44-1.85Z" fill="#bf8b2e"></path><path class="cls-6" d="M5.57,4.89c.26-.2.54-.38.85-.51l-1.11-2.85c-.66.28-1.27.65-1.8,1.1l2.06,2.26Z" fill="#00689d"></path></g></svg>
                    <h2 class="text-h4 text-the-end font-bold">We design for good</h2>
                    <p class="text-body-sm text-the-end-700">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam dolor cum.</p>
                    <!-- Primary large button -->
                    <x-core.button variant="primary" size="large" href="/contact/talktofesta">
                        Talk to Festa
                    </x-core.button>
                </div>
          
                <!-- Column 2: Navigation -->
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 col-span-2">
                    <div class="space-y-4">
                        <h3 class="text-h5 font-semibold text-the-end-900">What we do</h3>
                        <ul class="space-y-2">
                            <li><a href="/services/project-design" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors">Project design</a></li>
                            <li><a href="/services/communication-design" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors">Communication design</a></li>
                            <li><a href="/services/campaign-design" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors">Campaign design</a></li>
                        </ul>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-h5 font-semibold text-the-end-900">Sector we serve</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ route('services.sectors.nonprofits') }}" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors">Nonprofit</a></li>
                            <li><a href="{{ route('services.sectors.startup') }}" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors">Startup</a></li>
                        </ul>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-h5 font-semibold text-the-end-900">Resources</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ route('resources.blog') }}" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors">Blog</a></li>
                            <li><a href="{{ route('resources.toolkit') }}" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors">Toolkit</a></li>
                            <li><a href="{{ route('resources.design-system') }}" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors">Festa design system</a></li>
                        </ul>
                    </div>
                </div>
          
                <!-- Column 3: Newsletter -->
                <div id="newsletter" class="space-y-4">
                    <h3 class="text-h5 font-semibold text-the-end-900">Subscribe to our newsletter</h3>
                    <p class="text-body-sm text-the-end-700">Get weekly updates on our latest projects and initiatives.</p>
                    <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex flex-col gap-3">
                        @csrf
                        
                        <!-- Email input -->
                        <x-core.text-input
                            name="email"
                            placeholder="Enter your email"
                            type="email"
                            value="{{ old('email') }}"
                            required
                        />
                        
                        <!-- Subscribe button -->
                        <x-core.button variant="secondary" size="medium" type="submit" :fullWidth="true">
                            Subscribe
                        </x-core.button>
                    </form>
                    
                    <!-- Newsletter Messages -->
                    @if(session('newsletter_success'))
                        <div class="mt-3 p-3 bg-pepper-green-50 border border-pepper-green-200 rounded-lg text-pepper-green-800 text-body-sm">
                            {{ session('newsletter_success') }}
                        </div>
                    @endif
                    
                    @if(session('newsletter_error'))
                        <div class="mt-3 p-3 bg-chicken-comb-50 border border-chicken-comb-200 rounded-lg text-chicken-comb-800 text-body-sm">
                            {{ session('newsletter_error') }}
                        </div>
                    @endif
                    
                    @if(session('newsletter_info'))
                        <div class="mt-3 p-3 bg-apocalyptic-orange-50 border border-apocalyptic-orange-200 rounded-lg text-apocalyptic-orange-800 text-body-sm">
                            {{ session('newsletter_info') }}
                        </div>
                    @endif
                    
                    @error('email')
                        <div class="mt-3 p-3 bg-chicken-comb-50 border border-chicken-comb-200 rounded-lg text-chicken-comb-800 text-body-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        @endif

        <!-- Social Links -->
        <div class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-the-end-200">
            <div class="flex space-x-6 mb-4 md:mb-0">
                <a href="https://www.linkedin.com/company/festadesignstudio" target="_blank" rel="noopener noreferrer" class="text-the-end-700 hover:text-pepper-green-600 transition-colors">
                    <svg class="w-5 h-5 fill-the-end-700 hover:fill-pepper-green-600 transition-colors" viewBox="0 0 33 33"><title>logo-linkedin</title><g><path d="M31.74 0h-30.36c-0.76 0-1.38 0.62-1.38 1.38v30.36c0 0.76 0.62 1.38 1.38 1.38h30.36c0.76 0 1.38-0.62 1.38-1.38v-30.36c0-0.76-0.62-1.38-1.38-1.38z m-21.94 28.22h-4.9v-15.8h4.9v15.8z m-2.42-17.94c-1.59 0-2.83-1.24-2.83-2.83s1.24-2.83 2.83-2.83 2.83 1.24 2.83 2.83c0 1.52-1.24 2.83-2.83 2.83z m20.84 17.94h-4.9v-7.66c0-1.86 0-4.21-2.55-4.21s-2.97 2-2.97 4.07v7.8h-4.9v-15.8h4.69v2.14h0.07c0.62-1.24 2.28-2.55 4.63-2.55 4.97 0 5.86 3.24 5.86 7.52v8.69z"></path></g></svg>
                </a>
                
                <a href="https://www.instagram.com/festadesignstudio/?igsh=cndnZDhsZTRia2Rw&utm_source=qr" target="_blank" rel="noopener noreferrer" class="text-the-end-700 hover:text-pepper-green-600 transition-colors">
                    <svg class="w-5 h-5 fill-the-end-700 hover:fill-pepper-green-600" viewBox="0 0 33 33"><title>logo-instagram</title><g><path d="M16.56 4.68c3.87 0 4.33 0.01 5.86 0.09a8.04 8.04 0 0 1 2.69 0.49 4.8 4.8 0 0 1 2.75 2.75 8.04 8.04 0 0 1 0.5 2.7c0.07 1.53 0.08 1.99 0.08 5.85s-0.01 4.33-0.08 5.86a8.04 8.04 0 0 1-0.5 2.69 4.8 4.8 0 0 1-2.75 2.75 8.04 8.04 0 0 1-2.69 0.5c-1.53 0.07-1.99 0.08-5.86 0.08s-4.33-0.01-5.86-0.08a8.04 8.04 0 0 1-2.69-0.5 4.8 4.8 0 0 1-2.75-2.75 8.04 8.04 0 0 1-0.5-2.69c-0.07-1.53-0.08-1.99-0.08-5.86s0.01-4.33 0.08-5.85a8.04 8.04 0 0 1 0.5-2.7 4.8 4.8 0 0 1 2.75-2.75 8.04 8.04 0 0 1 2.69-0.49c1.53-0.07 1.99-0.08 5.86-0.09m0-2.61c-3.93 0-4.43 0.02-5.97 0.09a10.64 10.64 0 0 0-3.52 0.67 7.1 7.1 0 0 0-2.57 1.67 7.1 7.1 0 0 0-1.67 2.57 10.64 10.64 0 0 0-0.67 3.52c-0.07 1.54-0.09 2.04-0.09 5.97s0.02 4.43 0.09 5.97a10.64 10.64 0 0 0 0.67 3.52 7.1 7.1 0 0 0 1.67 2.57 7.1 7.1 0 0 0 2.57 1.67 10.64 10.64 0 0 0 3.52 0.67c1.55 0.07 2.04 0.09 5.97 0.09s4.43-0.02 5.98-0.09a10.64 10.64 0 0 0 3.51-0.67 7.42 7.42 0 0 0 4.24-4.24 10.64 10.64 0 0 0 0.67-3.52c0.07-1.54 0.09-2.04 0.09-5.97s-0.02-4.43-0.09-5.97a10.64 10.64 0 0 0-0.67-3.52 7.1 7.1 0 0 0-1.67-2.57 7.1 7.1 0 0 0-2.57-1.67 10.64 10.64 0 0 0-3.52-0.67c-1.54-0.07-2.04-0.09-5.97-0.09z" ></path><path d="M16.56 9.12a7.44 7.44 0 1 0 7.44 7.44 7.44 7.44 0 0 0-7.44-7.44z m0 12.27a4.83 4.83 0 1 1 4.83-4.83 4.83 4.83 0 0 1-4.83 4.83z" ></path><path  d="M24.29 7.09a1.74 1.74 0 1 0 0 3.47 1.74 1.74 0 1 0 0-3.47z"></path></g></svg>
                </a>
                
                <a href="https://github.com/Festa-Design-Studio" target="_blank" rel="noopener noreferrer" class="text-the-end-700 hover:text-pepper-green-600 transition-colors">
                    <svg class="w-5 h-5 fill-the-end-700 hover:fill-pepper-green-600" viewBox="0 0 33 33"><title>logo-github</title><g><path fill-rule="evenodd" clip-rule="evenodd" d="M16.56 0.41c-9.14 0-16.56 7.41-16.56 16.56 0 7.32 4.74 13.52 11.33 15.71 0.83 0.15 1.13-0.36 1.13-0.8 0-0.39-0.01-1.43-0.03-2.81-4.61 1-5.58-2.22-5.57-2.22-0.75-1.91-1.84-2.42-1.84-2.42-1.5-1.03 0.11-1.01 0.11-1.01 1.66 0.12 2.54 1.71 2.54 1.71 1.48 2.53 3.88 1.8 4.82 1.37 0.15-1.07 0.58-1.8 1.05-2.21-3.68-0.42-7.54-1.84-7.55-8.19 0-1.81 0.65-3.29 1.71-4.44-0.17-0.42-0.74-2.1 0.16-4.38 0 0 1.39-0.45 4.56 1.69 1.32-0.37 2.74-0.55 4.14-0.55 1.41 0.01 2.82 0.19 4.15 0.55 3.16-2.14 4.55-1.7 4.55-1.69 0.9 2.28 0.34 3.96 0.16 4.38 1.06 1.16 1.7 2.64 1.7 4.44 0 6.36-3.87 7.76-7.56 8.17 0.59 0.51 1.12 1.52 1.13 3.07 0 2.21-0.02 4-0.02 4.54 0 0.44 0.3 0.96 1.13 0.8 6.58-2.19 11.32-8.4 11.32-15.71 0-9.15-7.42-16.56-16.56-16.56z"></path></g></svg>
                </a>
            </div>
            <div class="flex space-x-6 text-body-sm">
                <a href="/privacy" class="text-the-end-700 hover:text-pepper-green-600 transition-colors">Privacy</a>
                <a href="/terms" class="text-the-end-700 hover:text-pepper-green-600 transition-colors">Terms</a>
                <a href="/sitemap" class="text-the-end-700 hover:text-pepper-green-600 transition-colors">Sitemap</a>
            </div>
        </div>
    </div>
</footer> 