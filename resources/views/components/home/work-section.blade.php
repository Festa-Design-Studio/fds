@props(['title' => 'Impact in action', 'description' => 'Discover how our collaborative design approach drives real-world change for mission-driven organizations.', 'buttonText' => 'View all our work', 'buttonUrl' => '/work'])

<!-- Work section -->
<section class="py-20 px-4 md:px-8 lg:px-16 bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50">
  <div class="max-w-6xl mx-auto">
    <div class="grid md:grid-cols-2 gap-12 items-center">
      <div class="space-y-8">
        <div class="space-y-4">
          <h2 class="text-h2 font-bold text-pepper-green">{{ $title }}</h2>
          <p class="text-body-lg text-the-end-700 max-w-md">{{ $description }}</p>
        </div>
        
        <!-- Large Secondary Button -->
        <a href="{{ $buttonUrl }}"
          class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-pepper-green-600/50 text-the-end-700 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center">
          {{ $buttonText }}
        </a>
      </div>
      
      <!-- Work card slot -->
      @if(!empty($slot))
        {{ $slot }}
      @else
        <x-work.card
          title="Community Engagement Platform"
          description="Built a digital platform that connected community organizations with volunteers and resources to amplify their impact."
          image="/assets/images/work/community-platform.jpg"
          url="/work/community-platform"
          :tags="[
              ['type' => 'sector', 'label' => 'Nonprofit'],
              ['type' => 'industry', 'label' => 'Community']
          ]"
        />
      @endif
    </div>
  </div>
</section> 