<!-- Toolkit Select options type and Search field Layout -->
<section class="sticky top-0 z-10 py-8 px-4 md:px-8 lg:px-16 border-t border-b border-the-end-100 backdrop-blur-md bg-white-smoke/10">
  <div class="max-w-7xl mx-auto">
    <form action="{{ route('resources.toolkit') }}" method="GET">
      <div class="flex flex-col md:flex-row gap-4 items-start md:items-center justify-between">
        <!-- Filter options -->
        <div class="flex flex-wrap gap-2">
          {{ $filters ?? '' }}
        </div>
        
        <!-- Search -->
        <div class="flex gap-2 items-center">
          {{ $search ?? '' }}
          <button type="submit" class="lg:w-auto md:w-auto px-6 py-2 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 inline-flex items-center justify-center">
            Filter
          </button>
        </div>
      </div>
    </form>
  </div>
</section> 