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

### Buttons

Code snippets for button hierarchy:

```html
<!-- Primary Button -->
                    <button
                        class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2">
                        Primary action
                    </button>

                    <!-- Secondary Button -->
                    <button
                        class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-pepper-green-600/50 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2">
                        Secondary action
                    </button>

                    <!-- Neutral Button -->
                    <button
                        class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-white-smoke-400  rounded-full hover:bg-white-smoke-300/50 active:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2">
                        Tertiary action
                    </button>
```

Code snippets for button sizes:

```html
<!-- Primary Buttons sizes -->
                    <div class="flex flex-col gap-4">
                    <!-- Small Button -->
                    <button
                    class="lg:w-auto md:w-auto w-full px-3 py-1.5 text-body-sm h-[32px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2">
                    Small Button
                    </button>

                    <!-- Primary Medium Button -->
                    <button
                        class="lg:w-auto md:w-auto w-full px-4 py-2 text-body h-[40px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2">
                        Medium Button
                    </button>

                    <!-- Large Primary Button -->
                    <button
                        class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
                        Large Button
                    </button>
                    </div>

                    <!-- Secondary Buttons sizes -->
                    <div class="flex flex-col gap-4">
                        <!-- Small Secondary Button -->
                        <button
                        class="lg:w-auto md:w-auto w-full px-3 py-1.5 text-body-sm h-[32px] border-2 border-pepper-green-600/50 text-the-end rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center">
                        Small button
                        </button>

                        <!-- Medium Secondary Button -->
                        <button
                            class="lg:w-auto md:w-auto w-full px-4 py-2 text-body h-[40px] border-2 border-pepper-green-600/50 text-the-end-700 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center">
                            Medium button
                        </button>

                        <!-- Large Secondary Button -->
                        <button
                            class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-pepper-green-600/50 text-the-end-700 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center">
                            Large button
                        </button>
                    </div>

                    <!-- Neutral Buttons sizes-->
                    <div class="flex flex-col gap-4">
                        <!-- Small Neutral Button -->
                        <button
                        class="lg:w-auto md:w-auto w-full px-3 py-1.5 text-body-sm h-[32px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 active:bg-white-smoke-300 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
                        Small button
                        </button>

                        <!-- Medium Neutral Button -->
                        <button
                            class="lg:w-auto md:w-auto w-full px-4 py-2 text-body h-[40px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
                            Medium button
                        </button>

                        <!-- Large Neutral Button -->
                        <button
                            class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
                            Large button
                        </button>
                    </div>
```

### Forms

Code snippets for **Basic text input**:

```html
<!-- Basic text input -->
<div class="space-y-2">
  <label class="text-the-end-900 text-body-sm font-medium">Email Address</label>
  <input
    type="email"
    class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 outline-chicken-comb-600 disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed"
    placeholder="Enter your email"
  />
</div>
```

Code snippets for **Input with icon**:

```html
<!-- Input with icon -->
<div class="relative">
  <input
    type="text"
    class="w-full pl-10 pr-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 outline-chicken-comb-600"
    placeholder="Search..."
  />
  <div
    class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
  >
    <svg
      class="h-5 w-5 text-the-end-400"
      viewBox="0 0 20 20"
      fill="currentColor"
    >
      <path
        fill-rule="evenodd"
        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
        clip-rule="evenodd"
      ></path>
    </svg>
  </div>
</div>
```

Code snippets for **Select Input**:

```html
<!-- Select Input -->
<div class="space-y-2">
  <label class="text-the-end-900 text-body-sm font-medium">Select Option</label>
  <select
    class="w-full px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 outline-chicken-comb-600"
  >
    <option value="">Choose an option</option>
    <option value="1">Option 1</option>
    <option value="2">Option 2</option>
    <option value="3">Option 3</option>
  </select>
</div>
```

Code snippets for **Radio Button**:

```html
<!-- Radio Button -->
        <div class="space-y-2">
            <div class="flex items-center gap-2">
                <input type="radio" 
                    class="h-4 w-4 border-the-end-300 text-chicken-comb-600 
                    focus:ring-chicken-comb-600/70 focus:ring-1 focus:ring-offset-2 
                    disabled:opacity-50  disabled:cursor-not-allowed outline-chicken-comb-600 ">
                <label class="text-the-end-900 text-body-sm">Option 1</label>
            </div>
        </div>
```

Code snippets for **File upload**:

```html
<!-- File upload -->
        <div class="space-y-2">
            <label class="text-the-end-900 text-body-sm font-medium">Upload File</label>
            <div class="flex items-center justify-center w-full">
                <label class="flex flex-col items-center justify-center w-full h-32 
                    border-2 border-the-end-200 border-dashed rounded-xl 
                    cursor-pointer bg-white-smoke-50 hover:bg-chicken-comb-50 
                    hover:border-chicken-comb-600/50">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-the-end-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                            </path>
                        </svg>
                        <p class="mb-2 text-sm text-the-end-500">
                            <span class="font-medium">Click to upload</span> or drag and drop
                        </p>
                    </div>
                    <input type="file" class="hidden" />
                </label>
            </div>
        </div>
```

Code snippets for **Password input**:

```html
<!-- Password Input -->
                    <div class="space-y-2">
                        <label class="text-the-end-900 text-body-sm font-medium">Password</label>
                        <div class="relative">
                            <input type="password" 
                                class="w-full px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full
                                text-the-end-900 placeholder-the-end-400
                                focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
                                hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                                placeholder="Enter your password">
                            <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <svg class="h-5 w-5 text-the-end-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                    </div>
```

Code snippets for **Basic tags**:

```html
<!-- Basic tags -->
<div
  class="space-y-6 bg-the-end-100/30 p-8 rounded-lg border border-white-smoke-300"
>
  <h2 class="text-body-lg font-medium text-the-end-700">Basic tags</h2>

  <div class="inline-flex flex-wrap gap-2">
    <!-- Default Tag -->
    <span
      class="inline-flex items-center px-2.5 py-1 rounded-full text-body-sm bg-white-smoke-50 text-the-end-900 border border-the-end-200"
    >
      Default Tag
    </span>

    <!-- Success Tag -->
    <span
      class="inline-flex items-center px-2.5 py-1 rounded-full text-body-sm bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200"
    >
      Success
    </span>

    <!-- Warning Tag -->
    <span
      class="inline-flex items-center px-2.5 py-1 rounded-full text-body-sm bg-pot-of-gold-50 text-pot-of-gold-700 border border-pot-of-gold-200"
    >
      Warning
    </span>

    <!-- Error Tag -->
    <span
      class="inline-flex items-center px-2.5 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200"
    >
      Error
    </span>

    <!-- Info Tag -->
    <span
      class="inline-flex items-center px-2.5 py-1 rounded-full text-body-sm bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200"
    >
      Info
    </span>
  </div>
</div>
```

Code snippets for **Text area**:

```html
<!-- Text Area-->
            <div class="space-y-2">
              <label class="text-the-end-900 text-body-sm font-medium">Text area</label>
              <textarea
                class="w-full h-32 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
                text-the-end-900 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
                hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 outline-chicken-comb-600"
                
                placeholder="Tell us about your project"
              ></textarea>
            </div>
```

Code snippets for Header navigation:

```html
<!-- Header Navigation -->
<header class="w-full">
  <nav class="mx-auto px-4 sm:px-6 lg:px-6 py-4 sm:py-6 lg:py-6">
    <div class="flex justify-between items-start h-auto">
      <!-- Logo Column -->
      <div class="flex-shrink-0">
        <a href="/" class="block">
          <span class="sr-only">Festa Design Studio</span>
          <!-- Desktop Logo - Increased size -->
          <svg
            class="hidden md:block h-40 w-auto"
            viewBox="0 0 27 40"
            preserveAspectRatio="xMidYMid meet"
          >
            <g>
              <defs></defs>
              <path
                class="cls-1"
                d="M1,28.93v-3.04h2.13v.66h-1.31v.52h1.18v.66h-1.18v1.19h-.82Z"
                fill="#2a2a2a"
              ></path>
              <path
                class="cls-1"
                d="M3.44,28.93v-3.04h2.19v.66h-1.36v.52h1.25v.66h-1.25v.52h1.36v.66h-2.18Z"
                fill="#2a2a2a"
              ></path>
              <path
                class="cls-1"
                d="M7.67,26.85c0-.1-.04-.18-.11-.23-.07-.06-.17-.08-.3-.08-.09,0-.15.01-.21.03-.05.02-.09.05-.12.08s-.04.07-.04.12c0,.04,0,.07.02.1.02.03.04.06.07.08.03.02.08.04.13.06.05.02.11.04.19.05l.25.05c.17.04.31.08.43.14s.22.13.29.21.13.17.17.26c.04.1.05.2.06.32,0,.2-.05.37-.15.51-.1.14-.24.24-.42.32-.18.07-.4.11-.66.11s-.49-.04-.69-.12c-.2-.08-.35-.2-.46-.36-.11-.16-.16-.37-.16-.62h.78c0,.09.03.17.07.23s.1.11.18.14c.08.03.17.05.27.05.09,0,.16-.01.22-.03s.1-.05.13-.09c.03-.04.05-.08.05-.13,0-.05-.02-.09-.05-.12-.03-.04-.08-.07-.14-.09s-.16-.05-.27-.08l-.3-.07c-.27-.06-.48-.16-.64-.29s-.23-.32-.23-.56c0-.19.05-.36.15-.51.1-.14.25-.26.43-.34.19-.08.4-.12.64-.12s.46.04.64.12c.18.08.32.2.41.35.1.15.15.32.15.52h-.79Z"
                fill="#2a2a2a"
              ></path>
              <path
                class="cls-1"
                d="M8.73,26.56v-.66h2.64v.66h-.91v2.37h-.81v-2.37h-.91Z"
                fill="#2a2a2a"
              ></path>
              <path
                class="cls-1"
                d="M12.08,28.93h-.89l1-3.04h1.13l1,3.04h-.89l-.66-2.2h-.02l-.66,2.2ZM11.92,27.74h1.67v.62h-1.67v-.62Z"
                fill="#2a2a2a"
              ></path>
              <g>
                <path
                  class="cls-1"
                  d="M2.17,33.94H1v-3.04h1.16c.31,0,.58.06.81.18s.4.3.53.52c.12.23.19.5.19.81s-.06.59-.19.81c-.12.23-.3.4-.52.52-.23.12-.49.18-.8.18ZM1.82,33.24h.31c.15,0,.28-.02.38-.07.11-.05.19-.13.24-.25.06-.12.08-.28.08-.5s-.03-.38-.09-.5c-.06-.12-.14-.2-.25-.25-.11-.05-.24-.07-.4-.07h-.29v1.64Z"
                  fill="#2a2a2a"
                ></path>
                <path
                  class="cls-1"
                  d="M4.06,33.94v-3.04h2.19v.66h-1.36v.52h1.25v.66h-1.25v.52h1.36v.66h-2.18Z"
                  fill="#2a2a2a"
                ></path>
                <path
                  class="cls-1"
                  d="M8.29,31.86c0-.1-.04-.18-.11-.23-.07-.06-.17-.08-.3-.08-.09,0-.15.01-.21.03-.05.02-.09.05-.12.08s-.04.07-.04.12c0,.04,0,.07.02.1.02.03.04.06.07.08.03.02.08.04.13.06.05.02.11.04.19.05l.25.05c.17.04.31.08.43.14s.22.13.29.21.13.17.17.26c.04.1.05.2.06.32,0,.2-.05.37-.15.51-.1.14-.24.24-.42.32-.18.07-.4.11-.66.11s-.49-.04-.69-.12c-.2-.08-.35-.2-.46-.36-.11-.16-.16-.37-.16-.62h.78c0,.09.03.17.07.23s.1.11.18.14c.08.03.17.05.27.05.09,0,.16-.01.22-.03s.1-.05.13-.09c.03-.04.05-.08.05-.13,0-.05-.02-.09-.05-.12-.03-.04-.08-.07-.14-.09s-.16-.05-.27-.08l-.3-.07c-.27-.06-.48-.16-.64-.29s-.23-.32-.23-.56c0-.19.05-.36.15-.51.1-.14.25-.26.43-.34.19-.08.4-.12.64-.12s.46.04.64.12c.18.08.32.2.41.35.1.15.15.32.15.52h-.79Z"
                  fill="#2a2a2a"
                ></path>
                <path
                  class="cls-1"
                  d="M10.26,30.91v3.04h-.82v-3.04h.82Z"
                  fill="#2a2a2a"
                ></path>
                <path
                  class="cls-1"
                  d="M12.63,31.91c-.01-.05-.03-.1-.06-.14-.03-.04-.06-.07-.1-.1-.04-.03-.09-.05-.14-.06-.05-.01-.11-.02-.18-.02-.14,0-.26.03-.35.1-.1.07-.17.16-.22.29-.05.12-.08.27-.08.45s.02.33.07.46c.05.13.12.22.22.29.1.07.21.1.36.1.13,0,.23-.02.31-.05.08-.04.15-.09.19-.16s.06-.15.06-.24h.14s-.69.01-.69.01v-.59h1.35v.42c0,.28-.06.51-.18.71-.12.2-.28.35-.48.45-.21.1-.44.16-.71.16-.3,0-.55-.06-.78-.19-.22-.13-.4-.3-.52-.54-.13-.23-.19-.51-.19-.83,0-.25.04-.47.11-.67.08-.19.18-.36.32-.49.14-.13.29-.24.47-.3.18-.07.37-.1.58-.1.18,0,.35.03.5.08.15.05.29.12.41.22s.22.2.29.33c.07.13.12.27.13.42h-.83Z"
                  fill="#2a2a2a"
                ></path>
                <path
                  class="cls-1"
                  d="M16.51,30.91v3.04h-.69l-1.1-1.6h-.02v1.6h-.82v-3.04h.7l1.08,1.59h.02v-1.59h.82Z"
                  fill="#2a2a2a"
                ></path>
              </g>
              <g>
                <path
                  class="cls-2"
                  d="M2.71,36.87c0-.1-.04-.18-.11-.23-.07-.06-.17-.08-.3-.08-.09,0-.15.01-.21.03-.05.02-.09.05-.12.08s-.04.07-.04.12c0,.04,0,.07.02.1.02.03.04.06.07.08.03.02.08.04.13.06.05.02.11.04.19.05l.25.05c.17.04.31.08.43.14s.22.13.29.21.13.17.17.26c.04.1.05.2.06.32,0,.2-.05.37-.15.51-.1.14-.24.24-.42.32-.18.07-.4.11-.66.11s-.49-.04-.69-.12c-.2-.08-.35-.2-.46-.36-.11-.16-.16-.37-.16-.62h.78c0,.09.03.17.07.23s.1.11.18.14c.08.03.17.05.27.05.09,0,.16-.01.22-.03s.1-.05.13-.09c.03-.04.05-.08.05-.13,0-.05-.02-.09-.05-.12-.03-.04-.08-.07-.14-.09s-.16-.05-.27-.08l-.3-.07c-.27-.06-.48-.16-.64-.29s-.23-.32-.23-.56c0-.19.05-.36.15-.51.1-.14.25-.26.43-.34.19-.08.4-.12.64-.12s.46.04.64.12c.18.08.32.2.41.35.1.15.15.32.15.52h-.79Z"
                  fill="#e02829"
                ></path>
                <path
                  class="cls-2"
                  d="M3.78,36.58v-.66h2.64v.66h-.91v2.37h-.81v-2.37h-.91Z"
                  fill="#e02829"
                ></path>
                <path
                  class="cls-2"
                  d="M8.52,35.92h.82v1.95c0,.23-.06.43-.17.6-.11.17-.26.3-.46.39-.2.09-.43.14-.68.14s-.49-.05-.69-.14c-.2-.09-.35-.22-.46-.39-.11-.17-.16-.37-.16-.6v-1.95h.82v1.87c0,.09.02.18.06.25s.1.13.17.17c.07.04.16.06.25.06s.18-.02.25-.06c.07-.04.13-.1.17-.17s.06-.16.06-.25v-1.87Z"
                  fill="#e02829"
                ></path>
                <path
                  class="cls-2"
                  d="M10.9,38.95h-1.17v-3.04h1.16c.31,0,.58.06.81.18s.4.3.53.52c.12.23.19.5.19.81s-.06.59-.19.81c-.12.23-.3.4-.52.52-.23.12-.49.18-.8.18ZM10.56,38.25h.31c.15,0,.28-.02.38-.07.11-.05.19-.13.24-.25.06-.12.08-.28.08-.5s-.03-.38-.09-.5c-.06-.12-.14-.2-.25-.25-.11-.05-.24-.07-.4-.07h-.29v1.64Z"
                  fill="#e02829"
                ></path>
                <path
                  class="cls-2"
                  d="M13.62,35.92v3.04h-.82v-3.04h.82Z"
                  fill="#e02829"
                ></path>
                <path
                  class="cls-2"
                  d="M16.95,37.43c0,.34-.07.62-.2.85-.13.23-.31.41-.53.53-.22.12-.47.18-.75.18s-.53-.06-.75-.18c-.22-.12-.4-.3-.53-.53-.13-.23-.2-.52-.2-.85s.07-.62.2-.85c.13-.23.31-.41.53-.53.22-.12.47-.18.75-.18s.52.06.75.18c.22.12.4.29.53.53.13.23.2.52.2.85ZM16.1,37.43c0-.18-.02-.34-.07-.46-.05-.13-.12-.22-.21-.28-.09-.06-.21-.1-.34-.1s-.25.03-.34.1c-.09.06-.16.16-.21.28-.05.13-.07.28-.07.46s.02.34.07.46c.05.13.12.22.21.28.09.06.21.1.34.1s.25-.03.34-.1c.09-.06.16-.16.21-.28.05-.13.07-.28.07-.46Z"
                  fill="#e02829"
                ></path>
              </g>
              <path
                class="cls-2"
                d="M26,5.66V1.12H1v22.73h4.55v-9.09h2.27v9.09h18.18v-13.64h-4.55v-4.55h4.55ZM7.82,10.21h-2.27v-4.55h2.27v4.55ZM15.2,10.21v9.09h-2.84V5.66h2.84v4.55ZM21.45,19.3h-1.7v-4.55h1.7v4.55Z"
                fill="#e02829"
              ></path>
            </g>
          </svg>
          <!-- Mobile Logo - Slightly increased -->
          <svg
            class="md:hidden h-20 w-auto"
            viewBox="0 0 16 14.75"
            preserveAspectRatio="xMidYMid meet"
          >
            <g fill="#e12729">
              <defs></defs>
              <path
                class="cls-1"
                d="M15,3.57V1.02H.98v12.74h2.55v-5.1h1.27v5.1h10.19v-7.64h-2.55v-2.55h2.55ZM4.8,6.12h-1.27v-2.55h1.27v2.55ZM8.94,6.12v5.1h-1.59V3.57h1.59v2.55ZM12.45,11.21h-.96v-2.55h.96v2.55Z"
                fill="#e12729"
              ></path>
            </g>
          </svg>
        </a>
      </div>

      <!-- Navigation Links Column -->
      <div class="hidden md:flex items-center space-x-8">
        <a
          href="service.html"
          class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
          >Services</a
        >
        <a
          href="work.html"
          class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
          >Work</a
        >
        <a
          href="about.html"
          class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
          >About</a
        >
        <a
          href="contact.html"
          class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
          >Contact</a
        >
      </div>

      <!-- Primary Medium CTA Button Column -->
      <div class="flex items-center space-x-4">
        <!-- "Talktofesta Primary Medium CTA Button here -->

        <!-- Mobile Menu Button -->
        <button
          id="mobile-menu-button"
          type="button"
          class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-the-end-700 hover:text-pepper-green-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-pepper-green-600"
          aria-expanded="false"
        >
          <span class="sr-only">Open main menu</span>
          <svg
            id="hamburger-icon"
            aria-label="Toggle navigation open"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
          <!-- Close Icon -->
          <svg
            id="close-icon"
            aria-label="Toggle navigation close"
            class="w-6 h-6 hidden text-chicken-comb"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            ></path>
          </svg>
        </button>
      </div>
    </div>
  </nav>

  <!-- Mobile Menu (Hidden by default) -->
  <div id="nav-content" class="md:hidden hidden">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <a
        href="service.html"
        class="block px-3 py-2 text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
        >Services</a
      >
      <a
        href="work.html"
        class="block px-3 py-2 text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
        >Work</a
      >
      <a
        href="about.html"
        class="block px-3 py-2 text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
        >About</a
      >
      <a
        href="contact.html"
        class="block px-3 py-2 text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
        >Contact</a
      >
    </div>

    <!-- Mobile Primary Medium Button -->
    <div class="px-2 pt-2 pb-3">
      <!-- "Talktofesta Primary Medium CTA Button here -->
    </div>
  </div>
</header>
```

**JavaScript code snippets to toggle “Header Navigation” in mobile view”**

- Create a js file called “mobile.js”, add the js code in the file and save in “resources/js/”.
- Use “vite” to manage “mobile.js” file.
- Update the app.layout page by adding m”mobile/js” in script control.

```jsx
document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const navContent = document.getElementById('nav-content');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');
  
    mobileMenuButton.addEventListener('click', function () {
      navContent.classList.toggle('hidden');
      hamburgerIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('hidden');
    });
  
    // Close menu when clicking outside
    document.addEventListener('click', function (event) {
      const isClickInsideNav = navContent.contains(event.target);
      const isClickOnButton = mobileMenuButton.contains(event.target);
  
      if (!isClickInsideNav && !isClickOnButton && !navContent.classList.contains('hidden')) {
        navContent.classList.add('hidden');
        hamburgerIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
      }
    });
  
    // Handle window resize
    window.addEventListener('resize', function () {
      if (window.innerWidth >= 768) {
        navContent.classList.remove('hidden');
        hamburgerIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
      } else {
        navContent.classList.add('hidden');
      }
    });
  });
```

Code snippets for **Footer navigation:**

```html
<!--Footer navigation-->
                <footer class="w-full bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <div class=" mx-auto px-4 sm:px-6 lg:px-6 py-4 sm:py-6 lg:py-6">
                      <!-- Main footer content -->
                      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-12 mb-12">
                        <!-- Column 1: Brand -->
                        <div class="flex flex-col space-y-6 max-w-72">
                          <svg class="w-24 h-24" viewBox="0 0 16 16"><title>we-design-for-good</title><g><defs></defs><path class="cls-12" d="M4.61,5.99c.17-.3.39-.57.63-.81l-2.06-2.26c-.52.5-.96,1.07-1.31,1.7l2.74,1.36Z" fill="#56c22b"></path><path class="cls-11" d="M9.66,4.39c.31.14.6.33.86.54l2.07-2.26c-.54-.47-1.16-.86-1.83-1.14l-1.1,2.86Z" fill="#dda63a"></path><path class="cls-5" d="M14.39,5.07l-2.74,1.36c.13.31.22.63.27.97l3.05-.29c-.09-.72-.29-1.41-.58-2.04" fill="#c5192d"></path><path class="cls-8" d="M11.45,6.04l2.74-1.36c-.34-.63-.77-1.2-1.28-1.7l-2.07,2.25c.24.24.44.51.61.81" fill="#4c9f38"></path><path class="cls-15" d="M4.06,7.99c0-.06,0-.12,0-.18l-3.05-.27c0,.15-.02.3-.02.46,0,.58.07,1.15.21,1.69l2.94-.84c-.06-.27-.09-.56-.09-.85" fill="#3f7e44"></path><path class="cls-17" d="M11.07,10.49c-.22.26-.47.5-.74.7l1.61,2.6c.6-.4,1.13-.9,1.58-1.46l-2.44-1.84Z" fill="#fcc30b"></path><path class="cls-14" d="M11.97,7.99c0,.29-.03.57-.09.84l2.94.85c.13-.54.21-1.1.21-1.69,0-.14,0-.29-.01-.43l-3.05.29s0,.09,0,.14" fill="#ff3a21"></path><path class="cls-13" d="M5.01,10.55l-2.43,1.85c.45.56.99,1.04,1.59,1.44l1.61-2.6c-.28-.2-.54-.43-.76-.69" fill="#ff9f24"></path><path class="cls-1" d="M4.11,7.37c.05-.34.15-.67.29-.98l-2.74-1.36c-.3.64-.51,1.34-.6,2.07l3.05.27Z" fill="#0a97d9"></path><path class="cls-9" d="M11.56,14.03l-1.61-2.6c-.29.16-.61.29-.94.38l.57,3.01c.71-.16,1.37-.43,1.98-.79" fill="#a21942"></path><path class="cls-4" d="M11.76,9.26c-.11.31-.25.61-.43.88l2.44,1.84c.4-.57.71-1.2.92-1.88l-2.94-.84Z" fill="#26bde2"></path><path class="cls-10" d="M8.59,11.9c-.19.03-.38.04-.57.04-.16,0-.31,0-.46-.03l-.57,3.01c.34.05.68.08,1.03.08.39,0,.77-.03,1.14-.09l-.57-3.01Z" fill="#ff6924"></path><path class="cls-2" d="M8.27,4.04c.34.02.67.09.98.19l1.1-2.86c-.65-.23-1.35-.37-2.08-.39v3.06Z" fill="#e8203a"></path><path class="cls-3" d="M7.12,11.84c-.34-.08-.67-.2-.97-.37l-1.61,2.6c.62.35,1.3.62,2.01.77l.57-3.01Z" fill="#dd1367"></path><path class="cls-16" d="M6.83,4.22c.32-.1.65-.16,1-.18V.98c-.74.02-1.44.15-2.1.38l1.11,2.85Z" fill="#19486a"></path><path class="cls-7" d="M4.74,10.2c-.19-.29-.35-.6-.47-.93l-2.94.84c.22.7.55,1.35.97,1.94l2.44-1.85Z" fill="#bf8b2e"></path><path class="cls-6" d="M5.57,4.89c.26-.2.54-.38.85-.51l-1.11-2.85c-.66.28-1.27.65-1.8,1.1l2.06,2.26Z" fill="#00689d"></path></g></svg>
                          <h2 class="text-h4 text-the-end font-bold">We design for good</h2>
                          <p class="text-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam dolor cum.</p>
                          <!-- Use large primary button here -->
                        </div>
                  
                        <!-- Column 2: Navigation -->
                        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 col-span-2">
                          <div class="space-y-4">
                            <h3 class="text-h5 font-semibold text-the-end-900">What we do</h3>
                            <ul class="space-y-2">
                              <li><a href="#" class="text-body text-the-end-700 hover:text-pepper-green-600  transition-colors">Project design</a></li>
                              <li><a href="#" class="text-body text-the-end-700 hover:text-pepper-green-600  transition-colors">Communication design</a></li>
                              <li><a href="#" class="text-body text-the-end-700 hover:text-pepper-green-600  transition-colors">Campaign design</a></li>
                            </ul>
                          </div>
                          <div class="space-y-4">
                            <h3 class="text-h5 font-semibold text-the-end-900">Sector we serve</h3>
                            <ul class="space-y-2">
                              <li><a href="#" class="text-body text-the-end-700 hover:text-pepper-green-600  transition-colors">Nonprofit</a></li>
                              <li><a href="#" class="text-body text-the-end-700 hover:text-pepper-green-600  transition-colors">Startup</a></li>
                            </ul>
                          </div>
                          <div class="space-y-4">
                            <h3 class="text-h5 font-semibold text-the-end-900">Resources</h3>
                            <ul class="space-y-2">
                              <li><a href="#" class="text-body text-the-end-700 hover:text-pepper-green-600  transition-colors">Blog</a></li>
                              <li><a href="#" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors">Toolkit</a></li>
                              <li><a href="#" class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors">How we design</a></li>
                              <li><a href="#" class="text-body text-the-end-700 hover:text-pepper-green-600  transition-colors">Festa design system</a></li>
                            </ul>
                          </div>
                        </div>
                  
                        <!-- Column 3: Newsletter -->
                        <div class="space-y-4">
                          <h3 class="text-h5 font-semibold text-the-end-900">Subscribe to our newsletter</h3>
                          <p class="text-body-sm  text-the-end-700">Get weekly updates on our latest projects and initiatives.</p>
                          <form class="flex flex-col gap-3">
                           <!-- Use the form component here -->
                            
                            <!--Use secondary medium button system -->
                          </form>
                        </div>
                      </div>

                  
                      <!-- Social Links -->
                      <div class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-the-end-200">
                        <div class="flex space-x-6 mb-4 md:mb-0">
                          <a href="#" class="text-the-end-700 hover:text-pepper-green-600 transition-colors">
                            <svg class="w-5 h-5 fill-the-end-700 hover:fill-pepper-green-600 transition-colors" viewBox="0 0 33 33"><title>logo-linkedin</title><g><path d="M31.74 0h-30.36c-0.76 0-1.38 0.62-1.38 1.38v30.36c0 0.76 0.62 1.38 1.38 1.38h30.36c0.76 0 1.38-0.62 1.38-1.38v-30.36c0-0.76-0.62-1.38-1.38-1.38z m-21.94 28.22h-4.9v-15.8h4.9v15.8z m-2.42-17.94c-1.59 0-2.83-1.24-2.83-2.83s1.24-2.83 2.83-2.83 2.83 1.24 2.83 2.83c0 1.52-1.24 2.83-2.83 2.83z m20.84 17.94h-4.9v-7.66c0-1.86 0-4.21-2.55-4.21s-2.97 2-2.97 4.07v7.8h-4.9v-15.8h4.69v2.14h0.07c0.62-1.24 2.28-2.55 4.63-2.55 4.97 0 5.86 3.24 5.86 7.52v8.69z"></path></g></svg>
                          </a>
                
                          <a href="#" class="text-the-end-700 hover:text-pepper-green-600 transition-colors">
                            <svg class="w-5 h-5 fill-the-end-700 hover:fill-pepper-green-600" viewBox="0 0 33 33"><title>logo-instagram</title><g><path d="M16.56 4.68c3.87 0 4.33 0.01 5.86 0.09a8.04 8.04 0 0 1 2.69 0.49 4.8 4.8 0 0 1 2.75 2.75 8.04 8.04 0 0 1 0.5 2.7c0.07 1.53 0.08 1.99 0.08 5.85s-0.01 4.33-0.08 5.86a8.04 8.04 0 0 1-0.5 2.69 4.8 4.8 0 0 1-2.75 2.75 8.04 8.04 0 0 1-2.69 0.5c-1.53 0.07-1.99 0.08-5.86 0.08s-4.33-0.01-5.86-0.08a8.04 8.04 0 0 1-2.69-0.5 4.8 4.8 0 0 1-2.75-2.75 8.04 8.04 0 0 1-0.5-2.69c-0.07-1.53-0.08-1.99-0.08-5.86s0.01-4.33 0.08-5.85a8.04 8.04 0 0 1 0.5-2.7 4.8 4.8 0 0 1 2.75-2.75 8.04 8.04 0 0 1 2.69-0.49c1.53-0.07 1.99-0.08 5.86-0.09m0-2.61c-3.93 0-4.43 0.02-5.97 0.09a10.64 10.64 0 0 0-3.52 0.67 7.1 7.1 0 0 0-2.57 1.67 7.1 7.1 0 0 0-1.67 2.57 10.64 10.64 0 0 0-0.67 3.52c-0.07 1.54-0.09 2.04-0.09 5.97s0.02 4.43 0.09 5.97a10.64 10.64 0 0 0 0.67 3.52 7.1 7.1 0 0 0 1.67 2.57 7.1 7.1 0 0 0 2.57 1.67 10.64 10.64 0 0 0 3.52 0.67c1.55 0.07 2.04 0.09 5.97 0.09s4.43-0.02 5.98-0.09a10.64 10.64 0 0 0 3.51-0.67 7.42 7.42 0 0 0 4.24-4.24 10.64 10.64 0 0 0 0.67-3.52c0.07-1.54 0.09-2.04 0.09-5.97s-0.02-4.43-0.09-5.97a10.64 10.64 0 0 0-0.67-3.52 7.1 7.1 0 0 0-1.67-2.57 7.1 7.1 0 0 0-2.57-1.67 10.64 10.64 0 0 0-3.52-0.67c-1.54-0.07-2.04-0.09-5.97-0.09z" ></path><path d="M16.56 9.12a7.44 7.44 0 1 0 7.44 7.44 7.44 7.44 0 0 0-7.44-7.44z m0 12.27a4.83 4.83 0 1 1 4.83-4.83 4.83 4.83 0 0 1-4.83 4.83z" ></path><path  d="M24.29 7.09a1.74 1.74 0 1 0 0 3.47 1.74 1.74 0 1 0 0-3.47z"></path></g></svg>
                          </a>
                
                          <a href="#" class="text-the-end-700 hover:text-pepper-green-600  transition-colors">
                            <svg class="w-5 h-5 fill-the-end-700 hover:fill-pepper-green-600" viewBox="0 0 33 33"><title>logo-github</title><g><path fill-rule="evenodd" clip-rule="evenodd" d="M16.56 0.41c-9.14 0-16.56 7.41-16.56 16.56 0 7.32 4.74 13.52 11.33 15.71 0.83 0.15 1.13-0.36 1.13-0.8 0-0.39-0.01-1.43-0.03-2.81-4.61 1-5.58-2.22-5.57-2.22-0.75-1.91-1.84-2.42-1.84-2.42-1.5-1.03 0.11-1.01 0.11-1.01 1.66 0.12 2.54 1.71 2.54 1.71 1.48 2.53 3.88 1.8 4.82 1.37 0.15-1.07 0.58-1.8 1.05-2.21-3.68-0.42-7.54-1.84-7.55-8.19 0-1.81 0.65-3.29 1.71-4.44-0.17-0.42-0.74-2.1 0.16-4.38 0 0 1.39-0.45 4.56 1.69 1.32-0.37 2.74-0.55 4.14-0.55 1.41 0.01 2.82 0.19 4.15 0.55 3.16-2.14 4.55-1.7 4.55-1.69 0.9 2.28 0.34 3.96 0.16 4.38 1.06 1.16 1.7 2.64 1.7 4.44 0 6.36-3.87 7.76-7.56 8.17 0.59 0.51 1.12 1.52 1.13 3.07 0 2.21-0.02 4-0.02 4.54 0 0.44 0.3 0.96 1.13 0.8 6.58-2.19 11.32-8.4 11.32-15.71 0-9.15-7.42-16.56-16.56-16.56z"></path></g></svg>
                          </a>
                        </div>
                        <div class="flex space-x-6 text-body-sm">
                          <a href="#" class="text-the-end-700 hover:text-pepper-green-600 dark:text-white-smoke-200 dark:hover:text-pepper-green-400 transition-colors">Privacy</a>
                          <a href="#" class="text-the-end-700 hover:text-pepper-green-600 dark:text-white-smoke-200 dark:hover:text-pepper-green-400 transition-colors">Terms</a>
                          <a href="#" class="text-the-end-700 hover:text-pepper-green-600 dark:text-white-smoke-200 dark:hover:text-pepper-green-400 transition-colors">Sitemap</a>
                        </div>
                      </div>
                    </div>
                </footer>
```

Code snippets for **Basic breadcrumb navigation**:

```html
<!-- Basic Breadcrumb -->
<div
  class="rounded-2xl p-6 shadow-sm border border-the-end-200 bg-white-smoke-100 mb-12"
>
  <h3 class="text-h3 font-medium text-the-end mb-4 max-w-xl">
    Basic breadcrumb
  </h3>
  <!-- Basic Breadcrumb -->
  <nav class="">
    <div class="flex items-center space-x-2 text-sm">
      <a
        href="#"
        class="px-2 py-1 text-body text-the-end-400 hover:text-pepper-green-600"
        >Home</a
      >
      <svg class="w-4 h-4 text-the-end-400" viewBox="0 0 16 16" fill="none">
        <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="2" />
      </svg>
      <a
        href="#"
        class="px-2 py-1 text-body text-the-end-400 hover:text-pepper-green-600"
        >Services</a
      >
      <svg class="w-4 h-4 text-the-end-400" viewBox="0 0 16 16" fill="none">
        <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="2" />
      </svg>
      <span class="px-2 py-1 text-body text-chicken-comb-600"
        >Project design</span
      >
    </div>
  </nav>
</div>
```

Code snippets for **Breadcrumb with Truncation navigation**:

```html
<!-- Responsive Breadcrumb with Truncation -->
            <div class="rounded-2xl p-6 shadow-sm border border-the-end-200 bg-white-smoke-100 mb-12">
                <h3 class="text-h3 font-medium text-the-end mb-4 max-w-xl">Responsive Breadcrumb with truncation
                </h3>
                <!-- Responsive Breadcrumb with Truncation -->
                <nav>
                    <div class="flex items-center space-x-2 text-sm">
                    <a href="#" class="px-2 py-1 text-body text-the-end-400 hover:text-pepper-green-600">Home</a>
                    <svg class="w-4 h-4 text-the-end-400" viewBox="0 0 16 16" fill="none">
                        <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    <span class="text-the-end-400">...</span>
                    <svg class="w-4 h-4 text-the-end-400" viewBox="0 0 16 16" fill="none">
                        <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    <a href="#" class="px-2 py-1 truncate max-w-[150px] text-body text-the-end-400 hover:text-pepper-green-600">Very Long Page Name</a>
                    <svg class="w-4 h-4 text-the-end-400" viewBox="0 0 16 16" fill="none">
                        <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    <span class="px-2 py-1 font-medium text-chicken-comb-600">Current</span>
                    </div>
                </nav>
            </div>
```

## Blog components

/resources/views/components/blog

Code snippets for **Article Categories**:

```html
<!-- Design tips Article Category -->
<span
  class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200"
>
  Design tips
</span>

<!-- Trends Article Category -->
<span
  class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200"
>
  Trends
</span>

<!-- Strategy Article Category -->
<span
  class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200"
>
  Strategy
</span>

<!-- Case Studies Article Category -->
<span
  class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-pot-of-gold-50 text-pot-of-gold-700 border border-pot-of-gold-200"
>
  Case Studies
</span>
```

Code snippets for **Article Card**:

```html
<!-- Article Card -->
         <article class="bg-white-smoke-100 rounded-lg overflow-hidden border border-white-smoke-300">
            <!-- Article Card Image Container -->
            <div class="relative aspect-[16/9]">
                <img class="w-full h-full object-cover" src="/src/img/boy.jpeg" alt="Blog post thumbnail">
                <!-- Article Card Category Badge -->
                <div class="absolute top-4 left-4">
                    <!-- Use Category Badge here -->
                </span>
                </div>
            </div>

            <!-- Article Card Content Container -->
            <div class="p-4 space-y-3">
                <!-- Article Card Meta Information -->
                <div class="flex items-center space-x-4 text-body-sm text-the-end-600">
                    <span class="flex items-center">
                        <!-- Article Card Calendar Icon -->
                        <svg class="w-4 h-4 fill-the-end-600 mr-2" viewBox="0 0 48 48">
                            <title>calendar-day-view</title>
                            <g fill="#2a2a2a">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 13H46V35H2V13Z" fill="#2a2a2a"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 39H46V42H2V39Z" fill="#2a2a2a"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6H46V9H2V6Z" fill="#2a2a2a"></path>
                            </g>
                        </svg>
                        Aug 15, 2023
                    </span>
                    <span class="flex items-center">
                        <!-- Article Card Clock Icon -->
                        <svg class="w-4 h-4 fill-the-end-600 mr-2" viewBox="0 0 48 48">
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 2C11.8497 2 2 11.8497 2 24C2 36.1503 11.8497 46 24 46C36.1503 46 46 36.1503 46 24C46 11.8497 36.1503 2 24 2ZM25.5 23.1875V9H22.5V24.8126L35.937 33.5758L37.5758 31.063L25.5 23.1875Z"></path>
                            </g>
                        </svg>
                        5 min read
                    </span>
                </div>

                <!-- Article Card Title -->
                <h3 class="text-h4 font-bold text-the-end-900 hover:text-pepper-green-600 transition-colors duration-200">
                    The Future of Sustainable Design
                </h3>

                <!-- Article Card Excerpt -->
                <p class="text-body-sm text-the-end-700 line-clamp-2">
                    Discover how sustainable design practices are shaping the future of our industry and creating positive environmental impact.
                </p>

                <!-- Article Card Author -->
                <div class="flex items-center justify-between pt-4 border-t border-the-end-100">
                    <div class="flex items-center space-x-3">
                        <!-- Author Avatar -->
                        <img class="w-10 h-10 rounded-full" src="/src/img/Abayomi-Ogundipe.jpg" alt="Author avatar">
                        <!-- Author Name and Title -->
                        <div>
                            <p class="text-body-sm font-medium text-the-end-900">Abayomi Ogundipe</p>
                            <p class="text-body-sm text-the-end-600">Design Lead</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
```

Code snippets for **Featured Article Card**:

```html
<!-- Featured Article Section -->
        <article class="py-12 px-4 md:px-8 lg:px-16">
            <div class="max-w-5xl mx-auto">
                <div class="bg-gradient-to-r from-chicken-comb-100 via-apocalyptic-orange-100 to-pot-of-gold-100 rounded-xl overflow-hidden">
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Featured Article Image Column -->
                        <div class="aspect-[4/3] md:aspect-auto">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                alt="Team collaborating on a social impact project" 
                                class="w-full h-full object-cover">
                        </div>
                        <!-- Content Column -->
                        <div class="p-8 md:p-12 flex flex-col justify-center">
                             <!-- Featured using Default Tag here -->
                           
                        </span>

                            <h2 class="text-h2 font-bold text-the-end-900 mb-4">How Purpose-Driven Design Transformed a Nonprofit's Digital Presence</h2>
                            <p class="text-body-lg text-the-end-700 mb-6">
                                Discover how our collaborative approach helped a community organization increase engagement by 230% and expand their reach to new audiences.
                            </p>
                            <div class="flex items-center space-x-4 mb-8">
                                <img src="https://i.pravatar.cc/60?img=32" alt="Author" class="w-12 h-12 rounded-full">
                                <div>
                                    <p class="text-body font-medium text-the-end-900">Sarah Johnson</p>
                                    <p class="text-body-sm text-the-end-600">Lead Designer • June 12, 2023</p>
                                </div>
                            </div>
                            
                            <!-- Small Secondary Button -->
                               <a href="#">
                                    <!-- Small Secondary Button here -->
                               </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
```

Code snippets for **Article Categories layout**:

```html
<!-- Article Categories layout -->
         <div class="flex flex-wrap justify-center gap-2">
            <!-- All Article Category Default here -->
            
            <!-- Design tips Article Category here -->
            
            <!-- Trends Article Category here -->
            
            <!-- Strategy Article Category here -->
            
            <!-- Case Studies Article Category here -->
        </div>
```

Code snippets for Article Grid Section Layout:

- for **Article card**
- for **Article Categories layout**
- for **Article Section Headline and Subheadline**
- for **Load More Article Cards Button**

```html
<!-- Article  Grid Section Layout -->
<section class="py-12 px-4 md:px-8 lg:px-16">
  <div class="max-w-7xl mx-auto space-y-14">
    <!-- Blog Grid Section Headline-->
    <div class="text-center">
      <h2 class="text-h2 font-bold text-the-end">Latest Articles</h2>
      <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto mt-4">
        Explore our latest insights on design, impact, and innovation
      </p>
    </div>

    <!-- Article Categories here -->

    <!-- Blog Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Article Card here -->
    </div>

    <!-- Load More Article Cards Secondary Button here -->
  </div>
</section>
```

Code snippets for Article compact card:

```html
<!-- Compact Article Card -->
<div class="bg-white-smoke-300/40 rounded-lg overflow-hidden flex">
  <!-- Compact Article Image Container -->
  <div class="relative w-1/3">
    <img
      class="w-full h-full object-cover"
      src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
      alt="Blog post thumbnail"
    />
  </div>

  <!-- Compact Article Content Container -->
  <div class="w-2/3 p-4 space-y-2">
    <!-- Title -->
    <h3
      class="text-h5 font-bold text-the-end-900 hover:text-pepper-green-600 transition-colors duration-200 line-clamp-2"
    >
      Accessibility in Design Systems
    </h3>

    <!-- Compact Article Meta Information -->
    <div class="flex items-center space-x-2 text-body-sm text-the-end-600">
      <span>Aug 15, 2023</span>
      <span>•</span>
      <span>5 min read</span>
    </div>
  </div>
</div>
```

### Blog show page components

A dedicated section that displays individual blog post meta information such as categories, title and excerpt, author, date and time of read, Article cover media. This includes the full article text, metadata like author and date, and associated media.

Code snippet for **Article Show page Header Layout**:

```html
<!-- Article Show page Header Layout -->
        <article class="py-8 px-4 md:px-8 lg:px-16 mb-10">
            <div class="lg:max-w-3xl mx-auto">
                <div class="space-y-10">
                    <div class="space-y-6">
                        <!-- Article Category here -->
                        
                        <!--Article title-->
                        <h1 class="text-h1 font-black text-the-end-900 mb-5">Creating impact through purposeful
                            design systems</h1>
                            <!--Article Excerpt-->
                        <p class="text-body-lg text-the-end-700 mb-6 lg:max-w-2xl">Explore how thoughtfully crafted
                            design systems can drive meaningful change and create lasting social impact in today's
                            digital landscape.</p>
                    </div>

                    <div class="grid grid-cols-2 gap-6 items-center">

                        <!-- Article Card Author -->
                        <div class="flex items-center space-x-3">
                             <!-- Author Avatar -->
                            <img src="/src/img/Abayomi-Ogundipe.jpg" alt="Abayomi Ogundipe"
                                class="w-14 h-14 rounded-full">
                                <!-- Author Name and Title -->
                            <div>
                                <span class="text-the-end-400 text-body-sm  hidden sm:block">Written by</span>
                                <p class="text-body font-medium text-the-end-700">Abayomi Ogundipe</p>
                                <p class="text-body-sm text-the-end-400 hidden sm:block">Festa Design Studio</p>
                            </div>
                        </div>

                        

                        <!-- Articles date and time of read -->
                        <div class="flex-col space-y-1">
                            <div class="flex items-center space-x-1">
                                <svg class="w-4 h-4 fill-chicken-comb-600 mr-2" viewBox="0 0 48 48">
                                    <title>calendar-day-view</title>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 13H46V35H2V13Z"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 39H46V42H2V39Z"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6H46V9H2V6Z"></path>
                                    </g>
                                </svg>
                                <!-- Article Show page date -->
                                <div class="text-body-sm text-the-end-400">
                                    <time datetime="2025-03-07">March 7, 2025</time>
                                </div>
                            </div>

                            <div class="flex items-center space-x-1">
                                <!-- Article Card Clock Icon -->
                            <svg class="w-4 h-4 fill-chicken-comb-600 mr-2" viewBox="0 0 48 48">
                                <g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24 2C11.8497 2 2 11.8497 2 24C2 36.1503 11.8497 46 24 46C36.1503 46 46 36.1503 46 24C46 11.8497 36.1503 2 24 2ZM25.5 23.1875V9H22.5V24.8126L35.937 33.5758L37.5758 31.063L25.5 23.1875Z"></path>
                                </g>
                            </svg>
                                <!-- Article Show page Read Time -->
                                <div class="text-body-sm text-the-end-400">
                                   <span>5 min read</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    
                    

                    <!-- Article Featured/Cover Hero Image/Video/GIF support functionalities video embedded from Vimeo -->
                    <div class="aspect-video w-full rounded-2xl overflow-hidden bg-white-smoke-100">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            alt="Dr. G's Lab Research Space" class="w-full h-full object-cover">
                    </div>
                </div>
        </article>
```

Code snippet for **Article Show page Rate this article**:

```html
<!-- Rate this article -->
<div class="flex flex-col items-center md:items-start w-full">
  <div class="space-y-1 md:text-left text-center">
    <label class="text-the-end-400 text-body-sm">Rate this article</label>
    <div class="flex space-x-0">
      <button
        type="submit"
        class="p-1 text-the-end-400 hover:text-pepper-green-600"
      >
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
          <path
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
          ></path>
        </svg>
      </button>
      <button
        type="submit"
        class="p-1 text-the-end-400 hover:text-pepper-green-600"
      >
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
          <path
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
          ></path>
        </svg>
      </button>
      <button
        type="submit"
        class="p-1 text-the-end-400 hover:text-pepper-green-600"
      >
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
          <path
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
          ></path>
        </svg>
      </button>
      <button
        type="submit"
        class="p-1 text-the-end-400 hover:text-pepper-green-600"
      >
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
          <path
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
          ></path>
        </svg>
      </button>
      <button
        type="submit"
        class="p-1 text-the-end-400 hover:text-pepper-green-600"
      >
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
          <path
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
          ></path>
        </svg>
      </button>
    </div>
  </div>
</div>
```

Code snippet for **Article Show page Share this article**:

```html
<!-- Share this article -->
<div class="flex flex-col items-center md:items-end w-full">
  <div class="space-y-1 md:text-right text-center">
    <label class="text-the-end-400 text-body-sm">Share this article</label>
    <div class="flex space-x-1.5">
      <button type="button" class="p-1">
        <svg
          class="w-5 h-5 fill-the-end-400 hover:fill-pepper-green-600"
          viewBox="0 0 33 33"
        >
          <title>Share on linkedin</title>
          <g>
            <path
              d="M31.74 0h-30.36c-0.76 0-1.38 0.62-1.38 1.38v30.36c0 0.76 0.62 1.38 1.38 1.38h30.36c0.76 0 1.38-0.62 1.38-1.38v-30.36c0-0.76-0.62-1.38-1.38-1.38z m-21.94 28.22h-4.9v-15.8h4.9v15.8z m-2.42-17.94c-1.59 0-2.83-1.24-2.83-2.83s1.24-2.83 2.83-2.83 2.83 1.24 2.83 2.83c0 1.52-1.24 2.83-2.83 2.83z m20.84 17.94h-4.9v-7.66c0-1.86 0-4.21-2.55-4.21s-2.97 2-2.97 4.07v7.8h-4.9v-15.8h4.69v2.14h0.07c0.62-1.24 2.28-2.55 4.63-2.55 4.97 0 5.86 3.24 5.86 7.52v8.69z"
            ></path>
          </g>
        </svg>
      </button>
      <button
        type="submit"
        class="p-1 text-the-end-400 hover:text-pepper-green-600"
      >
        <svg
          class="w-5 h-5 fill-the-end-400 hover:fill-pepper-green-600"
          viewBox="0 0 48 48"
        >
          <title>logo-facebook</title>
          <g>
            <path
              d="M47,24.138A23,23,0,1,0,20.406,46.859V30.786H14.567V24.138h5.839V19.07c0-5.764,3.434-8.948,8.687-8.948a35.388,35.388,0,0,1,5.149.449v5.66h-2.9a3.325,3.325,0,0,0-3.732,2.857,3.365,3.365,0,0,0-.015.737v4.313h6.379l-1.02,6.648H27.594V46.859A23,23,0,0,0,47,24.138Z"
            ></path>
          </g>
        </svg>
      </button>
      <button
        type="submit"
        class="p-1 text-the-end-400 hover:text-pepper-green-600"
      >
        <svg
          class="w-5 h-5 fill-the-end-400 hover:fill-pepper-green-600"
          viewBox="0 0 1200 1227"
        >
          <title>logo</title>
          <g>
            <defs></defs>
            <path
              class="st0"
              d="M714.2,519.3L1160.9,0h-105.9l-387.9,450.9L357.3,0H0l468.5,681.8L0,1226.4h105.9l409.6-476.2,327.2,476.2h357.3l-485.9-707.1h0ZM569.2,687.8l-47.5-67.9L144,79.7h162.6l304.8,436,47.5,67.9,396.2,566.7h-162.6l-323.3-462.4h0Z"
            ></path>
          </g>
        </svg>
      </button>
      <button
        type="submit"
        class="p-1 text-the-end-400 hover:text-pepper-green-600"
      >
        <svg
          class="w-5 h-5 fill-the-end-400 hover:fill-pepper-green-600"
          viewBox="0 0 48 48"
        >
          <title>clone-3</title>
          <g>
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M34 28C34 31.3137 31.3137 34 28 34L10 34C6.68629 34 4 31.3137 4 28L4 10C4 6.68629 6.68629 4 10 4L28 4C31.3137 4 34 6.68629 34 10L34 28Z"
            ></path>
            <path
              d="M38 44C41.3137 44 44 41.3137 44 38L44 20C44 16.6863 41.3137 14 38 14L37 14L37 29C37 33.4183 33.4183 37 29 37L14 37L14 38C14 41.3137 16.6863 44 20 44L38 44Z"
            ></path>
          </g>
        </svg>
      </button>
    </div>
  </div>
</div>
```

Code snippet for **Article Show page Related Article Card**:

```html
<!-- Related Article Card -->
<a href="#">
  <div class="aspect-w-16 aspect-h-9 mb-4 rounded-lg overflow-hidden">
    <img
      src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
      alt="Sustainable Design Practices for a Better Tomorrow"
      class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
    />
  </div>
  <h4
    class="text-h5 font-semibold text-the-end-900 group-hover:text-pepper-green-600 transition-colors duration-150 mb-4"
  >
    Sustainable Design Practices for a Better Tomorrow
  </h4>
  <p class="text-body-sm text-the-end-700">
    Explore how environmentally conscious design choices can create a positive
    impact while meeting business objectives.
  </p>
</a>
```

Code snippet for **Article Show page Related Article Grid Section**:

```html
<!-- Related Articles Section -->
<div class="mb-12">
  <h3 class="text-h4 font-bold text-the-end-900 mb-6">Related articles</h3>
  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Related Article Card here -->
  </div>
</div>
```

Code snippet for **Article Show page Footer Section**:

```html
<!-- Article Footer Section-->
<div class="space-y-10 mt-28">
  <!-- Rate and share article section-->
  <div
    class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 border-t border-b border-the-end-200 py-4"
  >
    <!-- Rate this article -->

    <!-- Share this article -->
  </div>

  <!-- Related Article Grid Section -->
</div>
```

## Work components

/resources/views/components/work

Code snippets for **Work Hero Section**:

```html
<!-- Work Page Hero Section -->
<section class="py-16 px-4 md:px-8 lg:px-16">
  <div class="max-w-7xl mx-auto text-center space-y-6">
    <h1 class="text-h1 font-black text-the-end-900">Our impactful work</h1>
    <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
      Explore our collection of purpose-driven projects that create meaningful
      change.
    </p>
  </div>
</section>
```

Code snippets for **Impact Metric cards**:

```html
<!-- Impact Metric 1 -->
<div class="text-center space-y-3">
  <span class="text-display font-black text-chicken-comb-600">500+</span>
  <h3 class="text-h4 font-bold text-the-end-900">Organizations</h3>
  <p class="text-body text-the-end-700">Empowered through purposeful design</p>
</div>

<!-- Impact Metric 2 -->
<div class="text-center space-y-3">
  <span class="text-display font-black text-pepper-green-600">98%</span>
  <h3 class="text-h4 font-bold text-the-end-900">Satisfaction</h3>
  <p class="text-body text-the-end-700">From our partner organizations</p>
</div>

<!-- Impact Metric 3 -->
<div class="text-center space-y-3">
  <span class="text-display font-black text-apocalyptic-orange-600">1M+</span>
  <h3 class="text-h4 font-bold text-the-end-900">Lives Impacted</h3>
  <p class="text-body text-the-end-700">Through our collaborative work</p>
</div>

<!-- Impact Metric 4 -->
<div class="text-center space-y-3">
  <span class="text-display font-black text-pot-of-gold-600">10+</span>
  <h3 class="text-h4 font-bold text-the-end-900">Years</h3>
  <p class="text-body text-the-end-700">Creating meaningful change</p>
</div>
```

Code snippets for **Impact Metrics Cards Layout**:

```html
<!-- Impact Metrics Cards Layout -->
    <section class="py-20 px-4 md:px-8 lg:px-16">
      <div class="max-w-7xl mx-auto">
        <!-- Impact Metric card here"-->
      </div>
    </section>
```

Code snippets for **Work Select options type**:

```html
<!-- Sector select -->
<div class="relative">
  <select
    class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600"
  >
    <option value="">Sector</option>
    <option value="nonprofit">Nonprofit</option>
    <option value="startup">Startup</option>
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
<!-- Industry select -->
<div class="relative">
  <select
    class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600"
  >
    <option value="">Industry</option>
    <option value="education">Education</option>
    <option value="healthcare">Healthcare</option>
    <option value="research-and-development">Research and development</option>
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
<!-- SDG select -->
<div class="relative">
  <select
    class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600"
  >
    <option value="Sustainable development goals">SDG goals</option>
    <option value="sdg1">No Poverty</option>
    <option value="sdg2">Zero Hunger</option>
    <option value="sdg3">Good health & well-being</option>
    <option value="sdg4">Quality Education</option>
    <option value="sdg5">Gender equality</option>
    <option value="sdg6">Clean water & sanitation</option>
    <option value="sdg7">Affordable & clean energy</option>
    <option value="sdg8">Decent work & economic growth</option>
    <option value="sdg9">industry, innovation and infrastructure</option>
    <option value="sdg10">Reduced inequalities</option>
    <option value="sdg11">Sustainable cities & communities</option>
    <option value="sdg12">Responsible consumption & production</option>
    <option value="sdg13">Climate Action</option>
    <option value="sdg14">Life below water</option>
    <option value="sdg15">Life on land</option>
    <option value="sdg16">Peace, justice & strong institutions</option>
    <option value="sdg17">Partnerships for the goals</option>
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

Code snippets for **Work Select options type Layout**:

```html
<!-- Work Select options type Layout -->
    <div class="flex flex-wrap gap-2">

      <!-- Sector select here -->

      <!-- Industry select -->

      <!-- SDG select -->

    </div>
```

Code snippets for **Search field for finding “Work card”**:

```html
<!-- Use the "input.blade.php" component -->
```

Code snippets for **Work Select options type and  Search field for finding “Work card” Layout**:

```html
<!-- Work categories and Project showcase filter tags -->
     <section class="sticky top-0 z-10 py-8 px-4 md:px-8 lg:px-16 border-t border-b border-the-end-100 backdrop-blur-md bg-white-smoke/10 ">
      <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row gap-4 items-start md:items-center justify-between">
							
							<!-- Work Select options type Layout here -->
	
						<!-- Search field for finding “Work card” -->

          </div>
        </div>
      </section>
```

This is **“Work Tag”** code snippets for  **“Work card”**:

```html
<!-- Sector Tag -->
<span
  class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200"
>
  Nonprofit
</span>

<!-- Industry Tag -->
<span
  class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200"
>
  Healthcare
</span>

<!-- SDG Tag -->
<span
  class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200"
>
  Climate Action
</span>
```

Code snippets for **Work tags layout**:

```html
 <!-- Work Tags layout -->
            <div class="inline-flex flex-wrap gap-2">
                <!-- Work Tags here -->
            </div>
```

Code snippets for **Work card**:

```html
<!-- Work card -->
<article
  class="bg-gradient-to-t from-white-smoke-100 via-pepper-green-50 to-white-smoke-50 rounded-2xl p-6 border border-white-smoke-300 shadow-sm"
>
  <div class="space-y-6">
    <div class="aspect-video rounded-xl bg-white-smoke-100 overflow-hidden">
      <!-- Project showcase card image placeholder -->
      <img
        src="/src/img/boy.jpeg"
        alt="Project image"
        class="w-full object-cover"
      />
    </div>

    <!-- Work categories and Project showcase filter tags -->
    <div class="space-y-4">
      
      <!-- Work Tags layout here -->

      <!-- Project showcase title and description -->
      <h3 class="text-h4 font-semibold text-the-end-900">
        Optimizing Dr. G's Lab's communication efforts
      </h3>
      <p class="text-body-sm text-the-end-700">
        A brief description of the project and its impact. Highlight key
        achievements and outcomes that demonstrate value.
      </p>

      <!-- Work card CTA button Use the Secondary button system -->
      <div class="flex items-center gap-4">
        <a href="">
          <a href="">
             <!-- Use small secondary button "View project" -->
           </a>
        </a>
      </div>
    </div>
  </div>
</article>
```

Code snippets for **Work card Grid Layout**:

```html
<!-- Work card Grid Layout -->
    <section class="py-12 px-4 md:px-8 lg:px-16">
      <div class="max-w-7xl mx-auto space-y-12">
        <h2 class="text-h3 font-semibold text-the-end-900">Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">

          <!-- Work cards here -->

        </div>
      </div>
    </section>
```

Code snippets for **Load more work button**

```html
<!-- Load More Work button use Secondary large button -->
```

Code snippets for **Basic Testimonial card**:

```html
<!-- Basic Testimonial Card -->
<div
  class="p-6 md:p-8 bg-white-smoke-100 border border-white-smoke-300 rounded-xl"
>
  <div class="mb-6">
    <svg
      class="w-12 h-12 fill-chicken-comb-600"
      viewBox="0 0 32 32"
      aria-hidden="true"
      focusable="false"
    >
      <title>testimonial</title>
      <g>
        <defs></defs>
        <path
          class="cls-1"
          d="M12.09,29.04H1.65c-.36,0-.65-.29-.65-.65v-13.04C1,9.06,3.33,4.91,7.92,3.01c.33-.14.71.02.85.35s-.02.71-.35.85c-3.9,1.61-5.96,5.14-6.11,10.48h9.77c.36,0,.65.29.65.65v13.04c0,.36-.29.65-.65.65Z"
        ></path>
        <path
          class="cls-1"
          d="M30.35,29.04h-10.43c-.36,0-.65-.29-.65-.65v-13.04c0-6.29,2.33-10.44,6.92-12.34.33-.14.71.02.85.35s-.02.71-.35.85c-3.9,1.61-5.96,5.14-6.11,10.48h9.77c.36,0,.65.29.65.65v13.04c0,.36-.29.65-.65.65h0Z"
        ></path>
      </g>
    </svg>
  </div>
  <blockquote class="text-body-lg leading-[1.7] mb-4 text-the-end-700">
    The design system has completely transformed how we approach our projects.
  </blockquote>
  <div class="mt-6">
    <div class="text-body font-medium text-the-end">Elena Rodriguez</div>
    <div class="text-body-sm text-the-end-600">Lead Designer, TechCorp</div>
  </div>
</div>
```

Code snippets for **Grid Layout for Basic Testimonial Card**:

```html
<!-- Grid Layout for Basic Testimonial Card -->
  <div class="p-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Basic Testimonial Cards here -->

    </div>
  </div>
```

Code snippets for **Testimonial Section Layout**:

```html
<!-- Work Page Testimonial Section Layout -->
  <section class="py-20 px-4 md:px-8 lg:px-16">
    <div class="max-w-7xl mx-auto text-center space-y-6">
      <h2 class="text-h2 font-bold text-pepper-green">What our impact partners say</h2>
      <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
        Real stories from organizations making a difference with our collaborative approach to social impact design.
      </p>
    </div>

			<!-- Grid Layout for Basic Testimonial Card here -->

    </section>
```

### Case study show page components

## Services components

/resources/views/components/services

Code snippets for **Service card**:

```html
<!-- Service card -->
<div
  class="bg-white-smoke-100 border border-white-smoke-300 rounded-lg p-6 hover:shadow-lg transition-all duration-200"
>
  <!-- Service card icon layout -->
  <div
    class="w-12 h-12 bg-pepper-green-100 rounded-full flex items-center justify-center mb-4"
  >
    <!-- Service card Icon -->
    <svg class="w-8 h-auto fill-chicken-comb-600" viewBox="0 0 48 48">
      <path
        d="M39,30a1,1,0,0,0,1,1h1a6.989,6.989,0,0,1,6,3.408V8a7,7,0,0,0-7.011-7A1,1,0,0,0,39,2Z"
      ></path>
      <path
        d="M41,33H39.777A2.777,2.777,0,0,1,37,30.223V7H2A1,1,0,0,0,1,8V42a1,1,0,0,0,1,1H41a5,5,0,0,0,0-10Zm-9,3a1,1,0,0,1-1,1H15a1,1,0,0,1-1-1V32a1,1,0,0,1,2,0v3H30V15H21v9a1,1,0,0,1-1,1H15a1,1,0,0,1,0-2h4V15H8V36a1,1,0,0,1-2,0V14a1,1,0,0,1,1-1H31a1,1,0,0,1,1,1Z"
      ></path>
    </svg>
  </div>

  <!--Service card title and description-->
  <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Project design</h3>
  <p class="text-body-sm text-the-end-700 mb-4">
    Data-driven insights to inform design decisions and maximize impact.
  </p>

  <!--Service card link-->
  <a
    href="#"
    class="text-pepper-green-600 text-body font-medium hover:text-pepper-green-700 transition-colors inline-flex items-center"
  >
    Learn how we design project
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-4 w-4 ml-1"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M9 5l7 7-7 7"
      ></path>
    </svg>
  </a>
</div>
```

Code snippets for **Service mini card**:

```html
<!-- Service mini card -->
<div
  class="bg-white-smoke-50 rounded-lg p-4 transition-all duration-150 hover:shadow-sm hover:bg-white-smoke-100 border border-the-end-100"
>
  <div class="flex items-start gap-3">
    <div class="p-1.5 bg-pepper-green-100 rounded">
      <!-- Service mini showcard icon -->
      <svg class="w-4 h-4 text-pepper-green-600" viewBox="0 0 16 16">
        <path
          d="M13.78 4.22a.75.75 0 0 1 0 1.06l-7.25 7.25a.75.75 0 0 1-1.06 0L2.22 9.28a.75.75 0 0 1 1.06-1.06L6 10.94l6.72-6.72a.75.75 0 0 1 1.06 0z"
          fill="currentColor"
        />
      </svg>
    </div>
    <div>
      <!-- Service mini showcard title and description-->
      <h4 class="text-body font-medium text-the-end-900">Education</h4>
      <p class="text-body-sm text-the-end-600">
        Mapping learning outcomes and building inclusive education projects
      </p>
    </div>
  </div>
</div>
```

Code snippets for **Service mini cards grid layout**:

```html
<!-- Service mini card grid layout -->
<div
  class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-10 mx-auto mb-12"
>
  <!-- Service mini cards here -->
</div>
```

```html
<!-- Industry expertise service mini card section-->
      <div class="mx-auto">

        <!-- Service mini card layout -->
        <div>
          <div class="flex flex-col lg:flex-row justify-between items-baseline gap-4 border-t border-white-smoke-300 lg:mb-20 mb-6">
            <!-- Service mini card layout with title and description -->
            <h3 class="text-h5 mt-10 mb-1.5 lg:mb-0 lg:w-1/3 text-chicken-comb-600">Project design</h3>
            <p class="text-body-sm text-the-end-700 mb-4 lg:w-1/3">
              Building meaningful project frameworks, step by step.
              We help nonprofits and startups turn bold ideas into structured, scalable initiatives. Industries we've supported include:
            </p>
          </div>

          <!-- Service mini card grid layout here -->

          </div>
      </div>
```

Code snippets for **Service card grid layout**:

```html
<!-- Service card grid layout-->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
	      <!-- Service cards here -->
      </div>
```

Code snippets for **Service card Hero Section**:

```html
<!-- service card hero section layout-->
  <section class="bg-gradient-to-b from-pepper-green-50 to-transparent py-20 px-4 md:px-8 lg:px-16">
    <div class="max-w-7xl mx-auto">

      <!-- Service showcase card grid layout here-->

    </div>
  </section>
```

Code snippets for **Sector card**:

```html
<div
  class="rounded-lg bg-white-smoke-50 overflow-hidden transition-all duration-200 hover:shadow-lg border border-white-smoke-300"
>
  <!-- Sector card Header -->
  <div class="p-6 bg-gradient-to-br from-chicken-comb-50 to-leaf-100">
    <div
      class="w-12 h-12 text-chicken-comb-600 transition-transform duration-200 group-hover:scale-110"
    >
      <!-- Sector Icon -->
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="32"
        height="32"
        viewBox="0 0 32 32"
      >
        <title>nonprofit</title>
        <g fill="#2a2a2a">
          <defs></defs>
          <path
            class="cls-1"
            d="M1.56,5.24L15.34,1.55l4.22,15.74-13.77,3.69L1.56,5.24Z"
            fill-rule="evenodd"
            fill="#2a2a2a"
          ></path>
          <path
            class="cls-2"
            d="M15.78,20.41l1.06,3.97,14.15-4.08-5.13-6.91.99-8.58-7.97,2.14,2.63,9.82c.29,1.09-.35,2.2-1.44,2.49l-4.3,1.15Z"
            fill="#2a2a2a"
          ></path>
          <path
            class="cls-1"
            d="M2.97,3.5l7.16,26.41-1.97.53L1,4.04l1.97-.53Z"
            fill-rule="evenodd"
            fill="#2a2a2a"
          ></path>
        </g>
      </svg>
    </div>
  </div>

  <!-- Sector card title and description -->
  <div class="p-6 space-y-4">
    <div class="flex items-start justify-between">
      <h3 class="text-h4 font-bold text-the-end-900">Nonprofit</h3>
    </div>
    <p class="text-body-sm text-the-end-700">
      Transform your vision into impactful design solutions that drive
      meaningful change.
    </p>

    <!-- Sector link -->
    <a
      href="#"
      class="inline-flex items-center text-chicken-comb-600 hover:text-chicken-comb-700"
    >
      Learn more
      <svg class="w-4 h-4 ml-4" viewBox="0 0 16 16">
        <g fill="#2a2a2a">
          <line
            x1="0.5"
            y1="8"
            x2="15.5"
            y2="8"
            fill="none"
            stroke="#2a2a2a"
            stroke-linecap="round"
            stroke-linejoin="round"
          ></line>
          <polyline
            points="10.5 3 15.5 8 10.5 13"
            fill="none"
            stroke="#2a2a2a"
            stroke-linecap="round"
            stroke-linejoin="round"
          ></polyline>
        </g>
      </svg>
    </a>
  </div>
</div>
```

Code snippets for **Sector card grid layout**:

```html
<!-- Sector card grid layout-->
<div
  class="grid lg:grid-cols-2 md:grid-cols-1 grid-cols-1 gap-10 mx-auto mb-12 max-w-3xl"
>

<!-- Sector cards here -->

</div>
```

Code snippets for **Sector we serve section**:

```html
<!-- Sectors we serve section -->
  <section class="py-20 px-4 md:px-8 lg:px-16 bg-leaf-50 space-y-10">
    <div class="max-w-7xl mx-auto text-center space-y-6">
      <!-- Sectors we serve eyebrow, headline and subheadline-->
      <span class="text-body-sm text-chicken-comb-600 uppercase tracking-wider">Sectors we serve</span>
      <h2 class="text-h2 font-bold text-pepper-green">Partnering across purpose-driven industries</h2>
      <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
        Creating transformative design solutions for organizations dedicated to positive social change and sustainable
        impact.
      </p>
    </div>
    
    <!-- Sector card grid layout here-->

  </section>
```

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

Code snippets for **Services CTA: “Newly added”**

```html
<!-- CTA Section -->
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

Code snippets for **How we work**:

```html
 <!-- How we Work  Section of About page -->
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
    <button
    class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-pepper-green-600/50 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2">
    Learn more about our process
</button>
  </div>

</section>
```

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

## Our process components **“Newly added”**

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