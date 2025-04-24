@props(['title' => 'Knowledge for impact', 'description' => 'Explore our latest thoughts on design, social impact, and creating meaningful change.', 'buttonText' => 'View all articles', 'buttonUrl' => '/blog'])

<!-- Latest insight section -->
<section class="py-20 px-4 md:px-8 lg:px-16 bg-leaf-50">
  <div class="max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-12 items-center">
      <div class="space-y-8">
        <div class="space-y-4">
          <h2 class="text-h2 font-bold text-pepper-green">{{ $title }}</h2>
          <p class="text-body-lg text-the-end-700 max-w-md">{{ $description }}</p>
        </div>
        <a href="{{ $buttonUrl }}"
          class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 border-pepper-green-600/50 text-the-end rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center">
          {{ $buttonText }}
        </a>
      </div>
      
      <!-- Article Card slot -->
      @if(!empty($slot))
        {{ $slot }}
      @else
        <x-blog.article-card 
          title="The Future of Purpose-Driven Design"
          excerpt="Discover how sustainable design practices are shaping the future of our industry and creating meaningful impact."
          date="Jun 15, 2023"
          readTime="5 min read"
          image="/assets/images/blog/article-1.jpg"
          category="Design tips"
          categoryType="default"
          author="Abayomi Ogundipe"
          authorTitle="Design Lead"
          authorAvatar="/assets/images/team/abayomi.jpg"
          url="/blog/purpose-driven-design"
        />
      @endif
    </div>
  </div>
</section> 