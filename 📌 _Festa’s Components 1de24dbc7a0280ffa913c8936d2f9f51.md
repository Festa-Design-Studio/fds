# 📌 Festa’s Components

/resources/views/components/

This page documents the core components used throughout the Festa Design Studio website, with detailed code snippets and implementation guidelines. Components are organized by their respective sections, following the project structure.

## Directory Structure Overview

All components are stored in the components directory, with section-specific components in their respective subdirectories:

- Core components: Base elements used across the entire site
- Blog components: Elements specific to blog posts and listings
- Work components: Portfolio and case study related elements
- Services components: Service page specific elements
- Toolkit components: Resource toolkit specific components
- About components: Team and company information elements
- Home components: Homepage specific sections
- Contact components: Contact form and information elements

Each component follows Tailwind CSS conventions and implements Festa's design system tokens.

## Core components

/resources/views/components/core

### Project design service components

/resources/views/components/services/project-design

Code snippets for **Project design service hero section: “Newly added”**

```html
<!-- Project design service Hero Section -->
<section class="py-10 px-6 text-center max-w-5xl mx-auto">
  <p class="text-body-sm text-chicken-comb-600 uppercase tracking-wider mb-2">
    Project Design
  </p>
  <h1 class="text-h1 font-bold mb-4">Designing for impact and clarity</h1>
  <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto mb-8">
    We partner with nonprofits and purpose-led teams to co-create strong project
    frameworks, strategies, and funding narratives that drive real change.
  </p>
  <button
    class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-pepper-green-600/50 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2"
  >
    How we work
  </button>
</section>
```

Code snippets for **Core Services CTA: “Newly added”**

```html
<!-- Core Services CTA Section -->
<section class="py-20 px-6 text-center lg:max-w-5xl mx-auto">
  <h2 class="text-h2 font-bold text-pepper-green mb-4">
    Not seeing what you’re looking for?
  </h2>
  <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto mb-8">
    If your needs are unique or not listed above, we’d still love to hear from
    you. Let's explore how Festa can help bring your ideas to life.
  </p>
  <!-- Primary Button -->
  <button
    class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2"
  >
    Talk to Festa
  </button>
</section>
```

## About components

/resources/views/components/about

Code snippets for **SDG Section:** “**Just added**”

```html
<!-- SDG Section -->
<section class="py-20 px-4 md:px-8 lg:px-16 bg-white-smoke-100">
  <div class="max-w-7xl mx-auto text-center space-y-8">
    <!-- Eyebrow -->
    <p class="text-body-sm text-chicken-comb-600 uppercase tracking-wide">
      Sustainable Development Goals
    </p>

    <!-- Section Title -->
    <h2 class="text-h2 font-bold text-pepper-green">We design for good</h2>

    <!-- Section Description -->
    <p class="text-body-lg text-the-end-700 max-w-3xl mx-auto">
      We align our design solutions with the United Nations' Sustainable
      Development Goals to create meaningful impact across the globe.
    </p>

    <!-- SDG Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
      <!-- SDG Goal 1 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-1.svg"
          alt="SDG 1: No Poverty"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 2 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-2.svg"
          alt="SDG 2: Zero Hunger"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 3 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-3.svg"
          alt="SDG 3: Good Health and Well-being"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 4 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-4.svg"
          alt="SDG 4: Quality Education"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 5 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-5.svg"
          alt="SDG 5: Gender Equality"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 6 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-6.svg"
          alt="SDG 6: Clean Water and Sanitation"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 7 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-7.svg"
          alt="SDG 7: Affordable and Clean Energy"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 8 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-8.svg"
          alt="SDG 8: Decent Work and Economic Growth"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 9 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-9.svg"
          alt="SDG 9: Industry, Innovation, and Infrastructure"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 10 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-10.svg"
          alt="SDG 10: Reduced Inequalities"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 11 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-11.svg"
          alt="SDG 11: Sustainable Cities and Communities"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 12 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-12.svg"
          alt="SDG 12: Responsible Consumption and Production"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 13 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-13.svg"
          alt="SDG 13: Climate Action"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 14 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-14.svg"
          alt="SDG 14: Life Below Water"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 15 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-15.svg"
          alt="SDG 15: Life on Land"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 16 -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/sdg-16.svg"
          alt="SDG 16: Peace, Justice, and Strong Institutions"
          class="w-24 h-24"
        />
      </div>
      <!-- SDG Goal 17 -->
      <div class="flex items-center justify-center">
        <img
          src="/sdg/sdg-17.svg"
          alt="SDG 17: Partnerships for the Goals"
          class="w-24 h-24"
        />
      </div>
      <!-- Global goals -->
      <div class="flex items-center justify-center">
        <img
          src="/src/img/global-goals.svg"
          alt="Global Goals"
          class="w-24 h-24"
        />
      </div>
    </div>

    <!-- CTA Button -->
    <button
      class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-pepper-green-600/50 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2"
    >
      Learn more about SDGs
    </button>
  </div>
</section>
```




### Our process components **“Newly added”**

/resources/views/components/about/our-process

This is a child page of **“about” page**. “/resources/views/about/our-process”

Code snippets for **Our Process Hero Section: “Newly added”**

```html
<!-- Our-process Hero Section with Video -->
    <section class="relative py-20 px-4 md:px-8 lg:px-16 bg-gradient-to-br from-pepper-green-50 to-leaf-50">
        <div class="max-w-4xl mx-auto text-center space-y-8">
            <h1 class="text-h1 font-black text-the-end-900">Remote<span class="text-chicken-comb-600">-</span>first
                culture studio</h1>
            <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
                Flexible working environment, client-centered confidentiality, embedded partnership for seamless collaboration.
            </p>
            <!-- Vimeo Video Embed -->
            <div class="aspect-video rounded-xl overflow-hidden shadow-xl">
                <embed src="https://player.vimeo.com/video/1005973852" class="w-full h-full mx-auto" type="video/mp4">
            </div>
        </div>
    </section>
```

Code snippets for **Our Philosophy Section: “Newly added”**

```html
<!-- Our Philosophy Section -->
<article
  class="bg-apocalyptic-orange-50 text-the-end-900 py-20 px-8 lg:px-16 mx-auto justify-items-center"
>
  <div class="max-w-3xl mx-auto text-center space-y-8 mb-16">
    <h2 class="text-h2 font-bold text-pepper-green">Our design philosophy</h2>
    <p class="text-body text-the-end-700 max-w-2xl mx-auto">
      At Festa Design Studio, we believe that thoughtful design has the power to
      amplify social impact and drive meaningful change. Our design philosophy
      is built on three core principles:
    </p>
  </div>

  <!-- 2-Column Grid -->
  <section class="grid grid-cols-1 md:grid-cols-2 gap-20 max-w-3xl mx-auto">
    <div class="space-y-4">
      <div class="flex items-center space-x-4">
        <p
          class="bg-white-smoke-300 rounded-3xl p-3 text-body-lg text-chicken-comb-600 font-semibold"
        >
          1
        </p>
        <h3 class="text-h4 font-semibold text-the-end-700">
          Purpose-Driven Design
        </h3>
      </div>
      <p class="text-body-sm text-the-end-600">
        Every design decision we make is intentionally aligned with our clients'
        missions for social good. We believe that effective design must serve a
        greater purpose beyond aesthetics.
      </p>
    </div>
    <div class="space-y-4">
      <div class="flex items-center space-x-4">
        <p
          class="bg-white-smoke-300 rounded-3xl p-3 text-body-lg text-chicken-comb-600 font-semibold"
        >
          2
        </p>
        <h3 class="text-h4 font-semibold text-the-end-700">
          Human-Centered Approach
        </h3>
      </div>
      <p class="text-body-sm text-the-end-600">
        We place people at the heart of our design process, deeply understanding
        the needs of both our clients and their target audiences to create
        solutions that genuinely resonate and drive engagement.
      </p>
    </div>
    <div class="space-y-4 md:col-span-2 mx-auto" style="max-width: 450px;">
      <div class="flex items-center space-x-4">
        <p
          class="bg-white-smoke-300 rounded-3xl p-3 text-body-lg text-chicken-comb-600 font-semibold"
        >
          3
        </p>
        <h3 class="text-h4 font-semibold text-the-end-700">
          Impact-Focused Solutions
        </h3>
      </div>
      <p class="text-body-sm text-the-end-600">
        Our designs are crafted to deliver measurable results. We combine
        creative excellence with strategic thinking to create solutions that
        advance our clients' goals for positive social change.
      </p>
    </div>
  </section>
</article>
```

Code snippets for **Our methodology Section: “Newly added”**

```html
<!-- Our methodology Section -->
<article
  class="bg-leaf-50 text-the-end-900 py-20 px-8 lg:px-16 mx-auto justify-items-center"
>
  <div class="max-w-3xl mx-auto text-center space-y-8 mb-16">
    <h2 class="text-h2 font-bold text-pepper-green">Our methodology</h2>
  </div>

  <!-- 2-Column Grid -->
  <section class="grid grid-cols-1 md:grid-cols-2 gap-20 max-w-3xl">
    <div class="space-y-4">
      <div class="flex items-center space-x-4">
        <p
          class="bg-white-smoke-300 rounded-3xl p-3 text-body-lg text-chicken-comb-600 font-semibold"
        >
          1
        </p>
        <h3 class="text-h4 font-semibold text-the-end-700">Discovery</h3>
      </div>
      <p class="text-body-sm text-the-end-600">
        The initial discovery period where we learn about your organization and
        craft a tailored proposal that aligns with your goals and budget.
      </p>
    </div>
    <div class="space-y-4">
      <div class="flex items-center space-x-4">
        <p
          class="bg-white-smoke-300 rounded-3xl p-3 text-body-lg text-chicken-comb-600 font-semibold"
        >
          2
        </p>
        <h3 class="text-h4 font-semibold text-the-end-700">Agreement</h3>
      </div>
      <p class="text-body-sm text-the-end-600">
        A structured process to formalize our partnership through detailed
        discussions, documentation, and contract signing.
      </p>
    </div>
    <div class="space-y-4">
      <div class="flex items-center space-x-4">
        <p
          class="bg-white-smoke-300 rounded-3xl p-3 text-body-lg text-chicken-comb-600 font-semibold"
        >
          3
        </p>
        <h3 class="text-h4 font-semibold text-the-end-700">Discovery</h3>
      </div>
      <p class="text-body-sm text-the-end-600">
        Deep research and collaborative planning to develop a comprehensive
        understanding of your needs and create an effective design strategy.
      </p>
    </div>
    <div class="space-y-4">
      <div class="flex items-center space-x-4">
        <p
          class="bg-white-smoke-300 rounded-3xl p-3 text-body-lg text-chicken-comb-600 font-semibold"
        >
          4
        </p>
        <h3 class="text-h4 font-semibold text-the-end-700">Design & Build</h3>
      </div>
      <p class="text-body-sm text-the-end-600">
        An iterative design process with regular feedback loops and structured
        reviews, culminating in careful execution with proper documentation.
      </p>
    </div>
    <div class="space-y-4">
      <div class="flex items-center space-x-4">
        <p
          class="bg-white-smoke-300 rounded-3xl p-3 text-body-lg text-chicken-comb-600 font-semibold"
        >
          5
        </p>
        <h3 class="text-h4 font-semibold text-the-end-700">Optimization</h3>
      </div>
      <p class="text-body-sm text-the-end-600">
        Thorough evaluation of results against success metrics, with detailed
        reporting and ongoing support to ensure lasting impact.
      </p>
    </div>
  </section>
</article>
```

Code snippets for **Impact Measurement Section: “Newly added”**

```html
<!-- Impact Measurement Section -->
      <article class="bg-white-smoke-300 text-the-end-900 py-20 px-8 lg:px-16 mx-auto justify-items-center">
       
        <div class="max-w-3xl mx-auto text-center space-y-8 mb-20">
            <h2 class="text-h2 font-bold text-pepper-green">Impact we measure</h2>
        </div>
       
        <!-- 2-Column Grid -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-20 max-w-3xl">
          <div class="space-y-4">
            <div class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-chicken-comb-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h11M9 21V3m0 0L3 10m6-7l6 7" />
            </svg>
              <h3 class="text-h4 font-semibold text-the-end-700">Organizations empowered</h3>
            </div>
            <p class="text-body-sm text-the-end-600">Tracking the number of organizations served through our design solutions.</p>
          </div>
          <div class="space-y-4">
            <div class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-chicken-comb-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v18h18M3 8h18M8 3v18" />
            </svg>
            <h3 class="text-h4 font-semibold text-the-end-700">Performance improvements</h3>
              </div>
            <p class="text-body-sm text-the-end-600">Measuring improvements in client organizations' key performance indicators (engagement rates, fundraising success, program participation).</p>
          </div>
          <div class="space-y-4">
            <div class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-chicken-comb-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 0V4m0 8h4" />
            </svg>
            <h3 class="text-h4 font-semibold text-the-end-700">Client satisfaction</h3>
              </div>
            <p class="text-body-sm text-the-end-600">Collecting satisfaction scores and qualitative feedback on our design services' impact.</p>
          </div>
          <div class="space-y-4">
            <div class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-chicken-comb-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4h16v16H4zM8 8h8v8H8z" />
            </svg>
            <h3 class="text-h4 font-semibold text-the-end-700">Impact case studies</h3>
              </div>
            <p class="text-body-sm text-the-end-600">Developing detailed case studies showing tangible social impact achieved.</p>
          </div>
          <div class="space-y-4">
            <div class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-chicken-comb-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4m4-4h8m-8 8h8" />
            </svg>
            <h3 class="text-h4 font-semibold text-the-end-700">Accessibility Growth</h3>
              </div>
            <p class="text-body-sm text-the-end-600">Monitoring the accessibility of our services across organizations of varying sizes and budgets.</p>
          </div>
        </section>

   
      </article>
```



/resources/views/components/home

code snippets for Hero section

```html
<!-- Hero Section -->
<section
  class="bg-gradient-to-b from-pepper-green-50 to-white-smoke-50 py-20 px-4 md:px-8 lg:px-16"
>
  <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
    <!-- Hero title, sub-title and CTA button "Why we design for good"-->
    <div class="space-y-6">
      <h1 class="text-display font-black text-the-end-900">
        Design that amplifies social impact
      </h1>
      <p class="text-body-lg text-the-end-700">
        Empowering purpose-driven organizations to create meaningful change
        through strategic, ethical design solutions.
      </p>

      <!-- Secondary Button her -->
    </div>
    <div class="relative aspect-square rounded-2xl overflow-hidden">
      <!-- Interactive Demo Container -->
      <svg width="100%" height="600" viewBox="0 0 800 600">
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
```

Code snippets for **Work section in home page**

```html
<!-- Work section -->
      <section class="py-20 px-4 md:px-8 lg:px-16 bg-white-smoke-100/30">
        <div class="max-w-7xl mx-auto">
          <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
              <div class="space-y-4">
                <h2 class="text-h2 font-bold text-pepper-green">Impact in action</h2>
                <p class="text-body-lg text-the-end-700 max-w-md">Discover how our collaborative design approach drives real-world change for mission-driven organizations.</p>
              </div>
              

                        <!-- Large Secondary Button -->
                    <button
                    class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-pepper-green-600/50 text-the-end-700 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center">
                    View all our work
                </button>
            </div>
            
            <!-- Work card here -->
          
          </div>
        </div>
      </section>
```

Code snippets for Latest Insight 

```html
<!-- Latest insight section -->
      <section class="py-20 px-4 md:px-8 lg:px-16 bg-gradient-to-tr from-apocalyptic-orange-50 via-pot-of-gold-50 to-white-smoke-50">
        <div class="max-w-7xl mx-auto">
          <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
              <div class="space-y-4">
                <h2 class="text-h2 font-bold text-pepper-green">Knowledge for impact</h2>
                <p class="text-body-lg text-the-end-700 max-w-md">Explore our latest thoughts on design, social impact, and creating meaningful change.</p>
              </div>
              <button
                            class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 border-pepper-green-600/50 text-the-end rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2">
                            View all articles
                        </button>
            </div>
            
              <!-- Article Card here -->
           
      
          </div>
        </div>
      </section>

```