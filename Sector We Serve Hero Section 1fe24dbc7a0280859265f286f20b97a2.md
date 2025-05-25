# Sector We Serve Hero Section

**Create “Sector we serve hero section” component**

File path: 

**(”resources/views/components/services/sectors/sector-hero.blade.php”)**

Code snippet for **“Sector we serve hero section”** component:

```html
<!-- Sector We Serve Hero Section for Nonprofits and Startups component -->
    <section
      class="relative py-20 px-4 md:px-8 lg:px-16 overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100"
    >
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
        <span class="text-body-sm text-pepper-green-600 font-medium"
          >Amplifying nonprofit organizations</span
        >
        <h1 class="text-h1 font-black text-the-end-900">
          Transform Your mission into visual impact
        </h1>
        <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
          Amplify your nonprofit's voice through purpose-driven design that
          speaks louder than words. We help you communicate complex missions
          effectively and enhance donor engagement.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <!-- Primary Button -->
          <button
            class="lg:w-auto md:w-auto w-full px-6 py-3 bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2"
            aria-label="Start your impact journey with Festa Design Studio"
          >
            Start Your Impact Journey
          </button>
        </div>
      </div>
    </section>

```

