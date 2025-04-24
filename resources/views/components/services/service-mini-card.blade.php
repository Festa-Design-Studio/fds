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
      <h4 class="text-body font-medium text-the-end-900">{{ $title ?? 'Education' }}</h4>
      <p class="text-body-sm text-the-end-600">
        {{ $description ?? 'Mapping learning outcomes and building inclusive education projects' }}
      </p>
    </div>
  </div>
</div> 