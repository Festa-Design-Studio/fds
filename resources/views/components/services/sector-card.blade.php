<div
  class="rounded-lg bg-white-smoke-50 overflow-hidden transition-all duration-200 hover:shadow-lg border border-white-smoke-300 group"
>
  <!-- Sector card Header -->
  <div class="p-6 bg-gradient-to-br from-chicken-comb-50 to-leaf-100">
    <div
      class="w-12 h-12 text-chicken-comb-600 transition-transform duration-200 group-hover:scale-110"
    >
      <!-- Sector Icon -->
      @if(isset($icon))
        {{ $icon }}
      @else
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
      @endif
    </div>
  </div>

  <!-- Sector card title and description -->
  <div class="p-6 space-y-4">
    <div class="flex items-start justify-between">
      <h3 class="text-h4 font-bold text-the-end-900">{{ $title ?? 'Nonprofit' }}</h3>
    </div>
    <p class="text-body-sm text-the-end-700">
      {{ $description ?? 'Transform your vision into impactful design solutions that drive meaningful change.' }}
    </p>

    <!-- Sector link -->
    <a
      href="{{ $link ?? '#' }}"
      class="inline-flex items-center text-chicken-comb-600 hover:text-chicken-comb-700"
    >
      {{ $linkText ?? 'Learn more' }}
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