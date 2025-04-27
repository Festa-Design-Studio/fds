@props(['transparent' => false])

<!-- Header Navigation -->
<header class="w-full {{ $transparent ? 'absolute top-0 left-0 right-0 z-50' : '' }}">
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
          href="/services"
          class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
          >Services</a
        >
        <a
          href="/work"
          class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
          >Work</a
        >
        <a
          href="/about"
          class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
          >About</a
        >
        <a
          href="/contact"
          class="text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
          >Contact</a
        >
      </div>

      <!-- Primary Medium CTA Button Column -->
      <div class="flex items-center space-x-4">
        <!-- "Talk to Festa" Primary Medium CTA Button -->
        <x-core.button variant="primary" size="small" href="/contact/talktofesta" class="hidden md:flex">
            Talk to Festa
        </x-core.button>

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
        href="/services"
        class="block px-3 py-2 text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
        >Services</a
      >
      <a
        href="/work"
        class="block px-3 py-2 text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
        >Work</a
      >
      <a
        href="/about"
        class="block px-3 py-2 text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
        >About</a
      >
      <a
        href="/contact"
        class="block px-3 py-2 text-body text-the-end-700 hover:text-pepper-green-600 transition-colors duration-150"
        >Contact</a
      >
    </div>

    <!-- Mobile Primary Medium Button -->
    <div class="px-5 pt-4 pb-3">
      <x-core.button variant="primary" size="small" href="/contact" class="w-full">
          Talk to Festa
      </x-core.button>
    </div>
  </div>
</header>

<script>
  // Mobile menu toggle functionality
  document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const navContent = document.getElementById('nav-content');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');
    
    if (mobileMenuButton && navContent) {
      mobileMenuButton.addEventListener('click', function() {
        const expanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !expanded);
        navContent.classList.toggle('hidden');
        hamburgerIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
      });
    }
  });
</script> 