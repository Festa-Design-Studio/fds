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
        
        <x-core.button variant="secondary" size="large" :href="$buttonUrl">
          {{ $buttonText }}
        </x-core.button>
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