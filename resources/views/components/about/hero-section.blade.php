<!-- About Hero section -->
<section class="relative h-screen bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100 py-20 px-4 md:px-8 lg:px-16 overflow-hidden flex items-center justify-center">

  <!-- Background SVG Animation -->
  <div class="absolute inset-0 w-full min-h-[600px] overflow-hidden">
    <!-- Interactive Demo Container -->
    <svg width="100%" height="600" viewBox="0 0 800 600">
      <defs>
        <linearGradient id="flowGradient" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" style="stop-color:#72b043;stop-opacity:0.15" />
          <stop offset="100%" style="stop-color:#f8cc1b;stop-opacity:0.1" />
        </linearGradient>
      </defs>

      <!-- Flowing Ribbons -->
      <path d="M0,300 C200,200 400,400 600,300 S800,200 1000,300" fill="none" stroke="url(#flowGradient)"
        stroke-width="3">
        <animate attributeName="d" values="M0,300 C200,200 400,400 600,300 S800,200 1000,300;
                  M0,300 C200,400 400,200 600,300 S800,400 1000,300;
                  M0,300 C200,200 400,400 600,300 S800,200 1000,300" dur="20s" repeatCount="indefinite" />
      </path>

      <!-- Floating Orbs -->
      <g>
        <circle cx="200" cy="200" r="30" fill="#007f4e" opacity="0.2">
          <animate attributeName="cy" values="200;180;200" dur="8s" repeatCount="indefinite" />
        </circle>
        <circle cx="400" cy="400" r="40" fill="#f37324" opacity="0.15">
          <animate attributeName="cy" values="400;420;400" dur="10s" repeatCount="indefinite" />
        </circle>
        <circle cx="600" cy="300" r="35" fill="#72b043" opacity="0.18">
          <animate attributeName="cy" values="300;280;300" dur="12s" repeatCount="indefinite" />
        </circle>
      </g>

      <!-- Ethereal Wisps -->
      <g>
        <path d="M100,100 Q200,50 300,100 T500,100" fill="none" stroke="#f8cc1b" stroke-width="2" opacity="0.1">
          <animate attributeName="d" values="M100,100 Q200,50 300,100 T500,100;
                    M100,100 Q200,150 300,100 T500,100;
                    M100,100 Q200,50 300,100 T500,100" dur="15s" repeatCount="indefinite" />
        </path>
      </g>

      <!-- Pulsing Elements -->
      <g>
        <rect x="150" y="450" width="60" height="60" rx="15" fill="#007f4e" opacity="0.12">
          <animate attributeName="transform" type="scale" values="1;1.2;1" dur="6s" repeatCount="indefinite"
            additive="sum" />
        </rect>
        <polygon points="650,200 680,250 620,250" fill="#f37324" opacity="0.15">
          <animate attributeName="transform" type="rotate" values="0,650,230; 360,650,230" dur="18s"
            repeatCount="indefinite" />
        </polygon>
      </g>
    </svg>

  </div>

  <!-- About Hero Headline and Subheadline -->
  <div class="max-w-4xl mx-auto text-center relative z-10 space-y-8">
    <span class="text-body-sm text-pepper-green-600 uppercase tracking-wide">Vision</span>

    <h1 class="text-h1 font-black text-chicken-comb-600">Shaping tomorrow's impact</h1>
    <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
      We envision a world where purposeful organizations are empowered by design to drive positive social impact,
      making strategic and ethical design solutions accessible to all who seek to transform lives and communities.
    </p>
  </div>
</section> 