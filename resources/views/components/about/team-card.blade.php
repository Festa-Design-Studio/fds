@props(['name', 'position', 'image', 'linkedin' => null])

<!-- Team Card -->
<div class="bg-white-smoke-100 rounded-3xl p-6 border border-the-end-200">
  <!-- Team Member Image -->
  <div class="aspect-square rounded-2xl overflow-hidden mb-6">
    <img
      src="{{ $image }}"
      alt="{{ $name }}"
      class="w-full h-full object-cover"
    />
  </div>
  <!-- Team Member Name and Position -->
  <h4 class="text-h4 font-semibold text-the-end-900 mb-2">{{ $name }}</h4>
  <p class="text-body-lg text-pepper-green-600 mb-4">{{ $position }}</p>

  <div class="flex gap-4 mb-6">
    @if($linkedin)
    <!--Linkedin-->
    <a href="{{ $linkedin }}" class="text-leaf hover:scale-110 transition-all">
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
    @endif
  </div>

  <!--Slot for additional content-->
  {{ $slot ?? '' }}
</div> 