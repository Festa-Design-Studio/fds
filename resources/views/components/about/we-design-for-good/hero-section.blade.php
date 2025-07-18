<!-- We Design for Good Hero Section -->
<section class="relative py-20 px-4 md:px-8 lg:px-16 bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50 overflow-hidden">
    
    <!-- Background Pattern -->
    <div class="absolute inset-0 w-full h-full overflow-hidden">
        <svg width="100%" height="600" viewBox="0 0 800 600" class="absolute top-0 left-0">
            <defs>
                <linearGradient id="goodGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#72b043;stop-opacity:0.1" />
                    <stop offset="50%" style="stop-color:#f37324;stop-opacity:0.08" />
                    <stop offset="100%" style="stop-color:#f8cc1b;stop-opacity:0.1" />
                </linearGradient>
            </defs>
            
            <!-- Flowing Impact Lines -->
            <path d="M0,200 C200,150 400,250 600,200 S800,150 1000,200" fill="none" stroke="url(#goodGradient)" stroke-width="2">
                <animate attributeName="d" values="M0,200 C200,150 400,250 600,200 S800,150 1000,200;
                          M0,200 C200,250 400,150 600,200 S800,250 1000,200;
                          M0,200 C200,150 400,250 600,200 S800,150 1000,200" dur="25s" repeatCount="indefinite" />
            </path>
            
            <!-- SDG Inspired Circles -->
            <g>
                <circle cx="150" cy="150" r="25" fill="#72b043" opacity="0.15">
                    <animate attributeName="cy" values="150;130;150" dur="8s" repeatCount="indefinite" />
                </circle>
                <circle cx="650" cy="400" r="35" fill="#f37324" opacity="0.12">
                    <animate attributeName="cy" values="400;420;400" dur="12s" repeatCount="indefinite" />
                </circle>
                <circle cx="300" cy="500" r="30" fill="#007f4e" opacity="0.18">
                    <animate attributeName="cy" values="500;480;500" dur="10s" repeatCount="indefinite" />
                </circle>
            </g>
        </svg>
    </div>

    <div class="max-w-4xl mx-auto text-center relative z-10 space-y-8">
        <!-- Eyebrow -->
        <span class="text-body-sm text-pepper-green-600 uppercase tracking-wide font-medium">
            Our Commitment
        </span>

        <!-- Main Headline -->
        <h1 class="text-h1 font-black text-the-end-900">
            {{ $content->title ?? 'We design for good' }}
        </h1>

        <!-- Sub-headline -->
        <p class="text-body-lg text-the-end-700 max-w-3xl mx-auto">
            {{ $content->subtitle ?? 'Our commitment to creating meaningful impact through design extends beyond aesthetics to address real-world challenges and drive positive social change across communities worldwide.' }}
        </p>

        <!-- CTA to jump to content -->
        <div class="pt-6">
            <x-core.button variant="secondary" size="large" href="#our-mission">
                Explore our mission
            </x-core.button>
        </div>
    </div>
</section>