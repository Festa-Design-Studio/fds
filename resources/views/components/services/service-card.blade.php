<!-- Service card -->
<div class="bg-white-smoke-100 border border-white-smoke-300 rounded-lg p-6 hover:shadow-lg transition-all duration-200"
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
  <h3 class="text-h4 font-semibold text-the-end-900 mb-4">{{ $title ?? 'Project design' }}</h3>
  <p class="text-body-sm text-the-end-700 mb-4">
    {{ $description ?? 'Data-driven insights to inform design decisions and maximize impact.' }}
  </p>

  <!--Service card link-->
  <a
    href="{{ $link ?? '#' }}"
    class="text-pepper-green-600 text-body font-medium hover:text-pepper-green-700 transition-colors inline-flex items-center"
  >
    {{ $linkText ?? 'Learn how we design project' }}
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