<!-- Hero Section -->
<section
  class="bg-gradient-to-b from-pepper-green-50 to-white-smoke-50 py-20 px-4 md:px-8 lg:px-16">
  <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
    <!-- Hero title, sub-title and CTA button "Why we design for good"-->
    <div class="space-y-6">
      <h1 class="text-display font-black text-the-end-900">
        Design that amplifies social impact
      </h1>
      <p class="text-body-lg text-the-end-700">
        Empowering purpose-driven organizations to create meaningful change
        through strategic, ethical design solutions.
      </p>

      @if(isset($button))
        {{ $button }}
      @else
        <x-core.button variant="secondary" size="large">
          Learn more about us
        </x-core.button>
      @endif
    </div>
    <div class="relative aspect-square rounded-2xl overflow-hidden">
      <!-- Interactive Demo Container -->
      <svg class="w-full h-full" viewBox="0 0 800 600">
        <defs>
          <linearGradient
            id="culturalGradient3"
            x1="0%"
            y1="0%"
            x2="100%"
            y2="100%"
          >
            <stop offset="0%" style="stop-color:#ecfff7;stop-opacity:0.8" />
            <stop offset="50%" style="stop-color:#fee2e2;stop-opacity:0.6" />
            <stop offset="100%" style="stop-color:#fef9c3;stop-opacity:0.8" />
          </linearGradient>
        </defs>

        <!-- Central Circular Motif -->
        <g transform="translate(400,300)">
          <circle r="120" fill="url(#culturalGradient3)" opacity="0.3">
            <animate
              attributeName="r"
              values="120;140;120"
              dur="15s"
              repeatCount="indefinite"
            />
          </circle>

          <!-- Rotating Petals -->
          <g>
            <animateTransform
              attributeName="transform"
              type="rotate"
              values="0;360"
              dur="40s"
              repeatCount="indefinite"
            />
            <path
              d="M0,-80 C20,-60 20,-20 0,0 C-20,-20 -20,-60 0,-80"
              fill="#72b043"
              opacity="0.2"
            />
            <path
              d="M0,-80 C20,-60 20,-20 0,0 C-20,-20 -20,-60 0,-80"
              transform="rotate(60)"
              fill="#72b043"
              opacity="0.2"
            />
            <path
              d="M0,-80 C20,-60 20,-20 0,0 C-20,-20 -20,-60 0,-80"
              transform="rotate(120)"
              fill="#72b043"
              opacity="0.2"
            />
            <path
              d="M0,-80 C20,-60 20,-20 0,0 C-20,-20 -20,-60 0,-80"
              transform="rotate(180)"
              fill="#72b043"
              opacity="0.2"
            />
            <path
              d="M0,-80 C20,-60 20,-20 0,0 C-20,-20 -20,-60 0,-80"
              transform="rotate(240)"
              fill="#72b043"
              opacity="0.2"
            />
            <path
              d="M0,-80 C20,-60 20,-20 0,0 C-20,-20 -20,-60 0,-80"
              transform="rotate(300)"
              fill="#72b043"
              opacity="0.2"
            />
          </g>
        </g>

        <!-- Floating Geometric Elements -->
        <g transform="translate(200,200)">
          <rect width="60" height="60" fill="#f37324" opacity="0.2">
            <animateTransform
              attributeName="transform"
              type="rotate"
              values="0;180;360"
              dur="20s"
              repeatCount="indefinite"
            />
            <animate
              attributeName="y"
              values="0;20;0"
              dur="8s"
              repeatCount="indefinite"
            />
          </rect>
        </g>

        <g transform="translate(600,400)">
          <polygon points="0,-30 26,15 -26,15" fill="#007f4e" opacity="0.2">
            <animateTransform
              attributeName="transform"
              type="rotate"
              values="0;180;360"
              dur="15s"
              repeatCount="indefinite"
            />
            <animate
              attributeName="y"
              values="0;-20;0"
              dur="10s"
              repeatCount="indefinite"
            />
          </polygon>
        </g>

        <!-- Flowing Lines -->
        <path
          d="M200,500 C300,450 500,550 600,500"
          fill="none"
          stroke="#f8cc1b"
          stroke-width="2"
          opacity="0.2"
        >
          <animate
            attributeName="d"
            values="M200,500 C300,450 500,550 600,500;
                          M200,500 C300,550 500,450 600,500;
                          M200,500 C300,450 500,550 600,500"
            dur="20s"
            repeatCount="indefinite"
          />
        </path>
      </svg>
    </div>
  </div>
</section> 