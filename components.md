## Toolkit components

/resources/views/components/toolkit

Code snippets for **Sector Hero Section**:

```html
<!-- Toolkit Hero section -->
<section class="bg-white-smoke-50 py-16 px-4 md:px-8 lg:px-16">
  <div class="max-w-4xl mx-auto">
    <div class="space-y-12">
      <!--Eyebrow, Toolkit Hero Headline and Subheadline-->
      <div class="text-center space-y-6">
        <span
          class="text-body-sm text-chicken-comb-600 uppercase tracking-wider"
          >Design Toolkit Library</span
        >
        <h1 class="text-h1 font-black text-the-end-900">
          Essential tools for Nonprofits 📝 and Startups 🚀
        </h1>
        <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
          Access our weekly curated collection of design resources to elevate
          your workflow
        </p>
      </div>

      <!--Signup for Toolkit-->
      <div
        class="bg-gradient-to-r from-chicken-comb-100 via-apocalyptic-orange-100 to-pot-of-gold-100 border border-white-smoke-300 p-10 rounded-2xl"
      >
        <div class="text-center mb-8">
          <h2 class="text-h2 font-bold text-pepper-green mb-2">
            Never miss new tools
          </h2>
          <p class="text-body text-the-end-700">
            Get updates on the latest design resources.
          </p>
        </div>

        <!-- Sign up for tools -->
        <form class="max-w-lg mx-auto">
          <div class="flex flex-col sm:flex-row gap-4">
            <input
              type="email"
              class="w-full h-[48px] px-6 py-3 rounded-full border-2 border-pepper-green-600/50 focus:ring-1 focus:ring-pepper-green-300 focus:border-pepper-green-600 hover:bg-pepper-green-50 focus:ring-offset-1 outline-none transition-all duration-150"
              placeholder="Enter your email..."
            />

            <button
              type="submit"
              class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-pepper-green-600/50 bg-pepper-green-600 text-white-smoke rounded-full hover:bg-pepper-green-700 active:bg-pepper-green-700 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center"
            >
              Subscribe
            </button>
          </div>
          <p class="text-body-sm text-the-end-700/80 text-center mt-4">
            We'll send you one email per week. Unsubscribe anytime.
          </p>
        </form>
      </div>
    </div>
  </div>
</section>
```

Code snippets for **Toolkit Tags for Toolkit cards**:

```html
<!-- Toolkit Tags for Toolkit cards -->
<span
  class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200"
>
  Project design
</span>

<!-- Design tools tags -->
<span
  class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200"
>
  Logframe
</span>
```

Code snippets for **Toolkit Tags Layout for Toolkit Cards**:

```html
<!-- Toolkit card tags layout -->
   <div class="inline-flex flex-wrap gap-2">

    <!-- Toolkit Tags here -->

    </div>
```

Code snippets for **Toolkit Card**:

```html
<!-- Toolkit Card -->
            <article class="bg-white-smoke-100 rounded-xl border border-white-smoke-300">
                <div class="p-6 space-y-4">
                  <!-- Toolkit card image -->
                  <div class="">
                    <svg class="w-16 h-auto" viewBox="0 0 512 512"><title>mailchimp</title><g><rect width="512" height="512" fill="#ffe01b" rx="15%"></rect><path fill="#1e1e1e" d="M418 306l-6-17s25-38-37-51c0 0 4-47-18-69 48-47 37-118-72-72C229-10 13 241 103 281c-9 12-9 72 53 78 42 90 144 96 203 69s93-113 59-122zm-263 40c-51-5-56-75-12-82s55 86 12 82zm-15-95c-14 0-31 19-31 19-68-33 123-252 164-167 0 0-100 48-133 148zm200 85c0-4-21 6-59-7 3-21 48 18 123-33l6 21c28-5 0 90-90 89-73-1-96-76-56-117 8-8-29-24-22-59 3-15 16-37 49-31s40-24 62-13 9 53 12 59 35 7 41 24-41 54-114 44c-17-2-27 20-16 34 22 32 112 11 127-20-38 29-116 40-122 9 22 10 59 4 59 0zm-58-6zm-73-152c22-27 51-43 51-43l-6 15s21-16 44-16l-8 8c26 1 37 11 37 11s-61-18-118 25zm135 39c13-1 9 29 9 29h-8s-14-28-1-29zm-59 33c-9 1-19 6-18 2 4-16 41-12 40 2s-9-6-22-4zm21 12c1 2-7 0-13 1s-12 4-12 2 23-11 25-3zm20 3c3-6 15 0 12 6s-15 0-12-6zm25 2c-6 0-6-13 0-13s6 14 0 14zm-180 53c3 3-6 9-13 4s8-29-10-35-13 17-18 14 7-35 28-22-6 33 6 39 5-2 7 0z"></path></g></svg>
                  </div>
                  
                  <!-- Toolkit card tags layout -->
                    <div class="inline-flex flex-wrap gap-2">
                        
                      <!-- Toolkit Tag -->
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm
                            bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200">
                            Project design
                        </span>

                        <!-- Design tools tags -->
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm
                            bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                            Logframe
                        </span>
                    </div>
  
                  <!-- Toolkit Title and Description -->
                  <h3 class="text-h4 font-bold mb-2 text-the-end-900">Fundraising email marketing for nonprofits</h3>
                  <p class="text-body-sm text-the-end-700 mb-4">Create detailed profiles of your ideal audience to craft messaging that resonates with their values and needs.</p>
                  
                  <!-- Toolkit CTA buttons here. Use neutral small button -->
                </div>
              </article>
```

Code snippets for **Toolkit Card Grid Layout**:

```html
<!-- Toolkit card Grid layout -->
    <section class="py-12 px-4 md:px-8 lg:px-16">
      <div class="max-w-7xl mx-auto space-y-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

          <!-- Toolkit Cards here -->

        </div>
      </div>
    </section>
```

Code snippers for **Load More Toolkits button:**

```html
<!-- Use Secondary large button -->
```

Code snippers for **Toolkits select option type:**

```html
<!-- Toolkits select -->
<div class="relative">
  <select
    class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600"
  >
    <option value="">Toolkits</option>
    <option value="project-design">Project design</option>
    <option value="communication-design">Communication design</option>
    <option value="campaign-design">campaign design</option>
  </select>
  <svg
    class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-the-end-400 pointer-events-none"
    fill="none"
    stroke="currentColor"
    viewBox="0 0 24 24"
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      d="M19 9l-7 7-7-7"
    ></path>
  </svg>
</div>
<!-- Design tools select -->
<div class="relative">
  <select
    class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600"
  >
    <option value="">Design tools</option>
    <option value="education">Mailchimp</option>
    <option value="healthcare">Logfram</option>
    <option value="research-and-development">Google Ads display</option>
  </select>
  <svg
    class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-the-end-400 pointer-events-none"
    fill="none"
    stroke="currentColor"
    viewBox="0 0 24 24"
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      d="M19 9l-7 7-7-7"
    ></path>
  </svg>
</div>
```

Code snippets for **Toolkits select option type Layout**:

```html
<!-- Toolkits Select option type Layout -->
    <div class="flex flex-wrap gap-2">

      <!-- Toolkits select here -->
      
      <!-- Design tools select -->

    </div>
```

Code snippets for **Search field for finding “Toolkit cards”**:

```html
<!-- Use the "input.blade.php" component -->
```

Code snippets for **Toolkit Select options type and  Search field for finding “Toolkit cards” Layout**:

```html
<!-- Work categories and Project showcase filter tags -->
     <section class="sticky top-0 z-10 py-8 px-4 md:px-8 lg:px-16 border-t border-b border-the-end-100 backdrop-blur-md bg-white-smoke/10 ">
      <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row gap-4 items-start md:items-center justify-between">
							
							<!-- Toolkits Select option type Layout here -->
	
						<!-- Search field for finding “Toolkit cards -->

          </div>
        </div>
      </section>
```

## About components

/resources/views/components/about

Code snippets for **About Hero Section**

```html
<!-- About Hero section -->
  <section class="relative h-screen bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100 py-20 px-4 md:px-8 lg:px-16 overflow-hidden space-y-8">

    <!-- Background SVG Animation -->
    <div class="absolute inset-0 w-full h-full min-h-[600px]  overflow-hidden">
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
      <span class="text-body-sm text-pepper-green-600 font-medium">Vision</span>

      <h1 class="text-h1 font-black text-chicken-comb-600">Shaping tomorrow's impact</h1>
      <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
        We envision a world where purposeful organizations are empowered by design to drive positive social impact,
        making strategic and ethical design solutions accessible to all who seek to transform lives and communities.
      </p>
    </div>
  </section>
```

Code snippets for **Team card:**

```html
<!-- Team Card -->
<div class="bg-white-smoke-100 rounded-3xl p-6 border border-the-end-200">
  <!-- Team Member Image -->
  <div class="aspect-square rounded-2xl overflow-hidden mb-6">
    <img
      src="/src/img/Abayomi-Ogundipe.jpg"
      alt="Team Member"
      class="w-full h-full object-cover"
    />
  </div>
  <!-- Team Member Name and Position -->
  <h4 class="text-h4 font-semibold text-the-end-900 mb-2">Abayomi Ogundipe</h4>
  <p class="text-body-lg text-pepper-green-600 mb-4">Founder & Design lead</p>

  <div class="flex gap-4 mb-6">
    <!--Linkedin-->
    <a href="#" class="text-leaf hover:scale-110 transition-all">
      <svg class="w-5 h-5 fill-the-end" viewBox="0 0 32 32">
        <g>
          <defs></defs>
          <path
            class="cls-1"
            d="M29.75,1H2.25c-.75,0-1.25.5-1.25,1.25v27.5c0,.75.5,1.25,1.25,1.25h27.5c.75,0,1.25-.5,1.25-1.25V2.25c0-.75-.5-1.25-1.25-1.25ZM9.87,26.62h-4.38v-14.38h4.5v14.38h-.12ZM7.63,10.25c-1.37,0-2.62-1.13-2.62-2.62,0-1.37,1.13-2.62,2.62-2.62,1.37,0,2.62,1.13,2.62,2.62s-1.13,2.62-2.62,2.62ZM26.62,26.62h-4.5v-7c0-1.63,0-3.75-2.25-3.75-2.37,0-2.62,1.75-2.62,3.62v7.13h-4.5v-14.38h4.25v2h0c.62-1.12,2-2.25,4.25-2.25,4.5,0,5.38,3,5.38,6.88v7.75Z"
          ></path>
        </g>
      </svg>
    </a>
  </div>

  <!--Small neutral button-->
</div>
```

Code snippets for **Team section layout:**

```html
<!-- Team Section layout -->
  <section class="py-20 px-4 md:px-8 lg:px-16">
    <div class="max-w-7xl mx-auto">
      <!-- Section Header -->
      <div class="text-center mb-12">
        <h2 class="text-h2 font-bold text-pepper-green mb-4">Meet our team</h2>

      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Team Cards here -->

      </div>
    </div>
  </section>
```

Code snippets for **partners logo card**:

```html
<!-- Partners Logo card -->
          <div class="flex items-center justify-center p-4 rounded-lg ">
            <svg class="h-28 w-auto opacity-75 hover:opacity-100 transition-opacity" viewBox="0 0 337.6 72">
              <title>Microsoft_logo</title>
              <g>
                <path fill="#737373"
                  d="M140.4,14.4v43.2h-7.5V23.7h-0.1l-13.4,33.9h-5l-13.7-33.9h-0.1v33.9h-6.9V14.4h10.8l12.4,32h0.2l13.1-32H140.4 z M146.6,17.7c0-1.2,0.4-2.2,1.3-3c0.9-0.8,1.9-1.2,3.1-1.2c1.3,0,2.4,0.4,3.2,1.2s1.3,1.8,1.3,3c0,1.2-0.4,2.2-1.3,3 c-0.9,0.8-1.9,1.2-3.2,1.2s-2.3-0.4-3.1-1.2C147.1,19.8,146.6,18.8,146.6,17.7z M154.7,26.6v31h-7.3v-31H154.7z M176.8,52.3 c1.1,0,2.3-0.2,3.6-0.8c1.3-0.5,2.5-1.2,3.6-2v6.8c-1.2,0.7-2.5,1.2-4,1.5c-1.5,0.3-3.1,0.5-4.9,0.5c-4.6,0-8.3-1.4-11.1-4.3 c-2.9-2.9-4.3-6.6-4.3-11c0-5,1.5-9.1,4.4-12.3c2.9-3.2,7-4.8,12.4-4.8c1.4,0,2.8,0.2,4.1,0.5c1.4,0.3,2.5,0.8,3.3,1.2v7 c-1.1-0.8-2.3-1.5-3.4-1.9c-1.2-0.4-2.4-0.7-3.6-0.7c-2.9,0-5.2,0.9-7,2.8s-2.6,4.4-2.6,7.6c0,3.1,0.9,5.6,2.6,7.3 C171.6,51.4,173.9,52.3,176.8,52.3z M204.7,26.1c0.6,0,1.1,0,1.6,0.1s0.9,0.2,1.2,0.3v7.4c-0.4-0.3-0.9-0.6-1.7-0.8 s-1.6-0.4-2.7-0.4c-1.8,0-3.3,0.8-4.5,2.3s-1.9,3.8-1.9,7v15.6h-7.3v-31h7.3v4.9h0.1c0.7-1.7,1.7-3,3-4 C201.2,26.6,202.8,26.1,204.7,26.1z M207.9,42.6c0-5.1,1.5-9.2,4.3-12.2c2.9-3,6.9-4.5,12-4.5c4.8,0,8.6,1.4,11.3,4.3 s4.1,6.8,4.1,11.7c0,5-1.5,9-4.3,12c-2.9,3-6.8,4.5-11.8,4.5c-4.8,0-8.6-1.4-11.4-4.2C209.3,51.3,207.9,47.4,207.9,42.6z M215.5,42.3c0,3.2,0.7,5.7,2.2,7.4s3.6,2.6,6.3,2.6c2.6,0,4.7-0.8,6.1-2.6c1.4-1.7,2.1-4.2,2.1-7.6c0-3.3-0.7-5.8-2.1-7.6 c-1.4-1.7-3.5-2.6-6-2.6c-2.7,0-4.7,0.9-6.2,2.7C216.2,36.5,215.5,39,215.5,42.3z M250.5,34.8c0,1,0.3,1.9,1,2.5 c0.7,0.6,2.1,1.3,4.4,2.2c2.9,1.2,5,2.5,6.1,3.9c1.2,1.5,1.8,3.2,1.8,5.3c0,2.9-1.1,5.2-3.4,7c-2.2,1.8-5.3,2.6-9.1,2.6 c-1.3,0-2.7-0.2-4.3-0.5c-1.6-0.3-2.9-0.7-4-1.2v-7.2c1.3,0.9,2.8,1.7,4.3,2.2c1.5,0.5,2.9,0.8,4.2,0.8c1.6,0,2.9-0.2,3.6-0.7 c0.8-0.5,1.2-1.2,1.2-2.3c0-1-0.4-1.8-1.2-2.6c-0.8-0.7-2.4-1.5-4.6-2.4c-2.7-1.1-4.6-2.4-5.7-3.8s-1.7-3.2-1.7-5.4 c0-2.8,1.1-5.1,3.3-6.9c2.2-1.8,5.1-2.7,8.6-2.7c1.1,0,2.3,0.1,3.6,0.4s2.5,0.6,3.4,0.9V34c-1-0.6-2.1-1.2-3.4-1.7 c-1.3-0.5-2.6-0.7-3.8-0.7c-1.4,0-2.5,0.3-3.2,0.8C250.9,33.1,250.5,33.8,250.5,34.8z M266.9,42.6c0-5.1,1.5-9.2,4.3-12.2 c2.9-3,6.9-4.5,12-4.5c4.8,0,8.6,1.4,11.3,4.3s4.1,6.8,4.1,11.7c0,5-1.5,9-4.3,12c-2.9,3-6.8,4.5-11.8,4.5c-4.8,0-8.6-1.4-11.4-4.2 C268.4,51.3,266.9,47.4,266.9,42.6z M274.5,42.3c0,3.2,0.7,5.7,2.2,7.4s3.6,2.6,6.3,2.6c2.6,0,4.7-0.8,6.1-2.6 c1.4-1.7,2.1-4.2,2.1-7.6c0-3.3-0.7-5.8-2.1-7.6c-1.4-1.7-3.5-2.6-6-2.6c-2.7,0-4.7,0.9-6.2,2.7C275.3,36.5,274.5,39,274.5,42.3z M322.9,32.6h-10.9v25h-7.4v-25h-5.2v-6h5.2v-4.3c0-3.2,1.1-5.9,3.2-8s4.8-3.1,8.1-3.1c0.9,0,1.7,0.1,2.4,0.1s1.3,0.2,1.8,0.4v6.3 c-0.2-0.1-0.7-0.3-1.3-0.5c-0.6-0.2-1.3-0.3-2.1-0.3c-1.5,0-2.7,0.5-3.5,1.4c-0.8,0.9-1.2,2.4-1.2,4.2v3.7h10.9v-7l7.3-2.2v9.2h7.4 v6h-7.4v14.5c0,1.9,0.4,3.2,1,4c0.7,0.8,1.8,1.2,3.3,1.2c0.4,0,0.9-0.1,1.5-0.3c0.6-0.2,1.1-0.4,1.5-0.7v6c-0.5,0.3-1.2,0.5-2.3,0.7 c-1.1,0.2-2.1,0.3-3.2,0.3c-3.1,0-5.4-0.8-6.9-2.4c-1.5-1.6-2.3-4.1-2.3-7.4L322.9,32.6L322.9,32.6z">
                </path>
                <path fill="#F25022" d="M0 0H34.2V34.2H0z"></path>
                <path fill="#7FBA00" d="M37.8 0H72V34.2H37.8z"></path>
                <path fill="#00A4EF" d="M0 37.8H34.2V72H0z"></path>
                <path fill="#FFB900" d="M37.8 37.8H72V72H37.8z"></path>
              </g>
            </svg>
          </div>
```

Code snippets for **partners logo card grid layout**:

```html
<!-- partners logo card grid layout -->
      <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4 md:gap-6">
        
        <!-- Partners Logo cards here -->

          </div>
          </div>
```

```html
<!-- Clients logo-->
  <section class="py-20 px-4 md:px-8 lg:px-16">
    <div class="max-w-7xl mx-auto">
      <!-- Section Header -->
      <div class="text-center mb-12">
        <h2 class="text-h2 font-bold text-pepper-green">Our partners</h2>
        <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto mt-4">Working together with leading organizations to
          create meaningful impact through design.</p>

      </div>

      <!-- partners logo card grid layout -->

      </div>
      </section>
```

## Home components

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

Code snippets for Latest Inight

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