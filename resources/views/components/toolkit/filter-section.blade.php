<!-- Toolkit Select options type and Search field Layout -->
<section class="sticky top-0 z-10 py-8 px-4 md:px-8 lg:px-16 border-t border-b border-the-end-100 backdrop-blur-md bg-white-smoke/10">
  <div class="max-w-7xl mx-auto">
    <div class="flex flex-col md:flex-row gap-4 items-start md:items-center justify-between">
      <!-- Filter options -->
      <div class="flex flex-wrap gap-2">
        {{ $filters ?? '' }}
      </div>
      
      <!-- Search -->
      {{ $search ?? '' }}
    </div>
  </div>
</section> 