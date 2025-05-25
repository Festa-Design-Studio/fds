<!-- Sector We Serve Hero Section for Nonprofits and Startups component -->
<section class="relative py-20 px-4 md:px-8 lg:px-16 overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
  <!-- Animated SVG Background -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <svg width="100%" height="600" viewBox="0 0 800 600">
      <defs>
        <linearGradient
          id="texturedGradient"
          x1="0%"
          y1="0%"
          x2="100%"
          y2="100%"
        >
          <stop
            offset="0%"
            style="stop-color: #fef9c3; stop-opacity: 0.4"
          />
          <stop
            offset="100%"
            style="stop-color: #fee2e2; stop-opacity: 0.2"
          />
        </linearGradient>

        <pattern
          id="grain"
          width="100"
          height="100"
          patternUnits="userSpaceOnUse"
        >
          <rect width="100" height="100" fill="#f6f6f6" opacity="0.05">
            <animate
              attributeName="opacity"
              values="0.05;0.1;0.05"
              dur="3s"
              repeatCount="indefinite"
            />
          </rect>
        </pattern>
      </defs>

      <!-- Layered Elements -->
      <g>
        <!-- Main circular element with texture -->
        <circle cx="400" cy="300" r="150" fill="url(#texturedGradient)" />
        <circle cx="400" cy="300" r="150" fill="url(#grain)">
          <animate
            attributeName="r"
            values="150;160;150"
            dur="10s"
            repeatCount="indefinite"
          />
        </circle>

        <!-- Floating overlapping circles -->
        <circle
          cx="300"
          cy="250"
          r="50"
          fill="url(#texturedGradient)"
          opacity="0.6"
        >
          <animate
            attributeName="cy"
            values="250;270;250"
            dur="8s"
            repeatCount="indefinite"
          />
        </circle>

        <circle
          cx="500"
          cy="350"
          r="70"
          fill="url(#texturedGradient)"
          opacity="0.4"
        >
          <animate
            attributeName="cy"
            values="350;330;350"
            dur="12s"
            repeatCount="indefinite"
          />
        </circle>

        <!-- Soft flowing paths -->
        <path
          d="M250,400 C350,350 450,450 550,400"
          fill="none"
          stroke="#72b043"
          stroke-width="2"
          opacity="0.15"
        >
          <animate
            attributeName="d"
            values="M250,400 C350,350 450,450 550,400;
                    M250,400 C350,450 450,350 550,400;
                    M250,400 C350,350 450,450 550,400"
            dur="15s"
            repeatCount="indefinite"
          />
        </path>
      </g>
    </svg>
  </div>

  <div class="absolute inset-0 pattern-grid opacity-10"></div>
  <div class="max-w-4xl mx-auto text-center relative z-10 space-y-8">
    <span class="text-body-sm text-pepper-green-600 font-medium">{{ $eyebrow ?? 'Amplifying nonprofit organizations' }}</span>
    <h1 class="text-h1 font-black text-the-end-900">
      {{ $title ?? 'Transform Your mission into visual impact' }}
    </h1>
    <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
      {{ $description ?? 'Amplify your nonprofit\'s voice through purpose-driven design that speaks louder than words. We help you communicate complex missions effectively and enhance donor engagement.' }}
    </p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <!-- Secondary CTA Button -->
      <x-core.button 
        variant="secondary" 
        size="large"
        :href="$buttonUrl ?? null"
        aria-label="{{ $buttonAriaLabel ?? 'Start your impact journey with Festa Design Studio' }}">
        {{ $buttonText ?? 'Start Your Impact Journey' }}
      </x-core.button>
    </div>
  </div>
</section>

<style>
/* Grid pattern background */
.pattern-grid {
  background-image: 
    linear-gradient(rgba(0, 127, 78, 0.1) 1px, transparent 1px),
    linear-gradient(90deg, rgba(0, 127, 78, 0.1) 1px, transparent 1px);
  background-size: 20px 20px;
}
</style> 