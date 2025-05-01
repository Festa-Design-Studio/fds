<!-- How we Work Section -->
<section class="relative bg-white-smoke-50 py-24 px-4 md:px-8 lg:px-16 overflow-hidden">
  
  <!-- SVG Background -->
  <div class="absolute inset-0 z-0 pointer-events-none">
    <svg width="100%" height="100%" viewBox="0 0 800 400" class="w-full h-full">
      <defs>
        <linearGradient id="festaBg1" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" style="stop-color:#72b043;stop-opacity:0.3"/>
          <stop offset="100%" style="stop-color:#f8cc1b;stop-opacity:0.2"/>
        </linearGradient>
        <linearGradient id="festaBg2" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" style="stop-color:#007f4e;stop-opacity:0.2"/>
          <stop offset="100%" style="stop-color:#f37324;stop-opacity:0.1"/>
        </linearGradient>
      </defs>

      <!-- Animated Geometric Shapes -->
      <g>
        <rect x="100" y="100" width="80" height="80" rx="20" fill="url(#festaBg1)">
          <animate attributeName="transform" type="rotate"
            values="0 140 140; 10 140 140; 0 140 140"
            dur="8s" repeatCount="indefinite"/>
        </rect>

        <circle cx="300" cy="200" r="40" fill="url(#festaBg2)">
          <animate attributeName="r"
            values="40;45;40"
            dur="6s" repeatCount="indefinite"/>
        </circle>

        <polygon points="500,150 550,250 450,250" fill="url(#festaBg1)">
          <animate attributeName="transform" type="translate"
            values="0,0; 0,20; 0,0"
            dur="7s" repeatCount="indefinite"/>
        </polygon>
      </g>

      <!-- Flowing Lines -->
      <g>
        <path d="M100,300 C250,250 350,350 500,300" 
              fill="none" 
              stroke="#72b043" 
              stroke-width="2"
              opacity="0.3">
          <animate attributeName="d" 
            values="M100,300 C250,250 350,350 500,300;
                    M100,300 C250,350 350,250 500,300;
                    M100,300 C250,250 350,350 500,300"
            dur="10s" repeatCount="indefinite"/>
        </path>

        <path d="M150,350 C300,300 400,400 550,350" 
              fill="none" 
              stroke="#007f4e" 
              stroke-width="1.5"
              opacity="0.2">
          <animate attributeName="d" 
            values="M150,350 C300,300 400,400 550,350;
                    M150,350 C300,400 400,300 550,350;
                    M150,350 C300,300 400,400 550,350"
            dur="12s" repeatCount="indefinite"/>
        </path>
      </g>
    </svg>
  </div>

  <!-- Content -->
  <div class="relative max-w-6xl mx-auto flex flex-col items-center space-y-8">
    <!-- Eyebrow Label -->
    <p class="text-body-sm text-chicken-comb-600 uppercase tracking-wide">
      How We Work
    </p>

    <!-- Main Heading -->
    <h2 class="text-h2 font-bold text-pepper-green text-center max-w-3xl">
      Our approach is rooted in purpose collaboration and measurable impact
    </h2>

    <!-- Supporting Paragraph -->
    <p class="text-body-lg text-the-end-700 max-w-2xl text-center">
      Every project begins with understanding — your goals, your community, and your vision for change. We design with empathy, clarity, and an unwavering commitment to making a difference.
    </p>

    <!-- Secondary Button -->
    <x-core.button
      variant="secondary"
      size="large"
      href="{{ route('about.process') }}"
    >
      Learn more about our process
    </x-core.button>
  </div>
</section> 