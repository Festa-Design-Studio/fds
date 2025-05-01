@extends('layouts.work')

@section('title', 'Our Work - Festa Design Studio')

@section('breadcrumbs')
    <!-- Breadcrumb -->
    <x-core.breadcrumbs :items="[
        ['label' => 'Work', 'url' => '']
    ]" class="" />
@endsection

@section('content')

    <!-- 2. Hero Section -->
    <x-work.hero 
        title="Our Portfolio of Impact"
        description="Explore our collection of purpose-driven projects that create meaningful change for organizations making a difference."
    />

    <!-- 3. Metrics Section -->
    <x-work.metrics :metrics="$metrics" :version="time()" />

    <!-- 4. Filter Component -->
    <x-work.filter 
        :sectorOptions="$sectorOptions"
        :industryOptions="$industryOptions"
        :sdgOptions="$sdgOptions"
        searchPlaceholder="Search projects..."
    />

    <!-- 5. Robust Work Grid -->
    <section class="py-16 px-4 md:px-8 lg:px-16">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-h2 font-bold text-the-end-900 mb-8">Our Projects</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 work-grid">
                @foreach($projects as $project)
                    @php
                        // Safely prepare tags with error handling
                        $tags = [];
                        
                        // Handle sector
                        if ($project->sector_id && is_object($project->sector) && isset($project->sector->name)) {
                            $tags[] = ['type' => 'sector', 'label' => $project->sector->name];
                        } elseif ($project->sector && is_string($project->sector)) {
                            $tags[] = ['type' => 'sector', 'label' => $project->sector];
                        }
                        
                        // Handle industry
                        if ($project->industry_id && is_object($project->industry) && isset($project->industry->name)) {
                            $tags[] = ['type' => 'industry', 'label' => $project->industry->name];
                        } elseif ($project->industry && is_string($project->industry)) {
                            $tags[] = ['type' => 'industry', 'label' => $project->industry];
                        }
                        
                        // Handle SDG alignment
                        if ($project->sdg_alignment_id && is_object($project->sdgAlignment) && isset($project->sdgAlignment->name)) {
                            $tags[] = [
                                'type' => 'sdg', 
                                'label' => $project->sdgAlignment->name,
                                'code' => $project->sdgAlignment->code ?? ('sdg' . $project->sdg_alignment_id)
                            ];
                        } elseif ($project->sdg_alignment && is_string($project->sdg_alignment)) {
                            // Determine SDG label and code
                            $sdgCode = $project->sdg_alignment;
                            $sdgLabel = $project->sdg_alignment;
                            
                            // If it starts with 'sdg', extract the number
                            if (str_starts_with(strtolower($sdgCode), 'sdg')) {
                                $sdgNumber = substr($sdgCode, 3);
                                
                                // Map SDG numbers to labels
                                $sdgLabels = [
                                    '1' => 'No Poverty',
                                    '2' => 'Zero Hunger',
                                    '3' => 'Good Health & Well-being',
                                    '4' => 'Quality Education',
                                    '5' => 'Gender equality',
                                    '6' => 'Clean water & sanitation',
                                    '7' => 'Affordable & clean energy',
                                    '8' => 'Decent work & economic growth',
                                    '9' => 'Industry, innovation and infrastructure',
                                    '10' => 'Reduced inequalities',
                                    '11' => 'Sustainable cities & communities',
                                    '12' => 'Responsible consumption & production',
                                    '13' => 'Climate Action',
                                    '14' => 'Life below water',
                                    '15' => 'Life on land',
                                    '16' => 'Peace, justice & strong institutions',
                                    '17' => 'Partnerships for the goals'
                                ];
                                
                                if (isset($sdgLabels[$sdgNumber])) {
                                    $sdgLabel = $sdgLabels[$sdgNumber];
                                }
                            }
                            
                            $tags[] = ['type' => 'sdg', 'label' => $sdgLabel, 'code' => $sdgCode];
                        }
                        
                        // Prepare the item for the card
                        $item = [
                            'title' => $project->title,
                            'description' => $project->excerpt,
                            'image' => $project->featured_image ? asset('storage/' . $project->featured_image) : null,
                            'url' => route('work.show', $project->slug),
                            'tags' => $tags
                        ];
                    @endphp
                    
                    <div 
                        class="work-item" 
                        data-sector="{{ $tags[0]['label'] ?? '' }}" 
                        data-industry="{{ isset($tags[1]) ? $tags[1]['label'] : '' }}" 
                        data-sdg="{{ isset($tags[2]) ? ($tags[2]['code'] ?? $tags[2]['label']) : '' }}"
                        data-title="{{ $item['title'] ?? '' }}"
                        data-description="{{ $item['description'] ?? '' }}"
                    >
                        <x-work.card 
                            :title="$item['title']" 
                            :description="$item['description']" 
                            :image="$item['image']" 
                            :url="$item['url']"
                            :tags="$item['tags']"
                        />
                    </div>
                @endforeach
            </div>
            
            <!-- No results message -->
            <div class="text-center hidden no-results-message">
                <p class="text-body-lg text-the-end-700">No matching projects found. Please try different filter criteria.</p>
            </div>
            
            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                {{ $projects->links() }}
            </div>
        </div>
    </section>

    <!-- 7. Testimonial Section with Load More Button -->
    <section class="py-20 px-4 md:px-8 lg:px-16">
        <!-- Testimonial Component -->
        <x-work.testimonial-section 
            title="What Our Partners Say"
            description="Real stories from organizations making a difference with our collaborative approach to social impact design."
            :testimonials="$testimonials"
        />

        <!-- Load More Testimonials Button -->
        @if(count($testimonials) > 3)
            <div class="max-w-7xl mx-auto mt-8 text-center flex justify-center">
                <x-core.button 
                    variant="secondary" 
                    size="large"
                    id="load-more-testimonials" 
                    type="button"
                    :fullWidth="false"
                    class="mx-auto inline-flex"
                >
                    Load more testimonials
                </x-core.button>
            </div>
        @endif
    </section>
@endsection 

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle work filtering logic
        const sectorSelect = document.querySelector('select[name="sector"]');
        const industrySelect = document.querySelector('select[name="industry"]');
        const sdgSelect = document.querySelector('select[name="sdg"]');
        const searchInput = document.querySelector('input[name="search"]');
        const workItems = document.querySelectorAll('.work-item');
        const noResultsMessage = document.querySelector('.no-results-message');

        function filterProjects() {
            const sectorValue = sectorSelect ? sectorSelect.value.toLowerCase() : '';
            const industryValue = industrySelect ? industrySelect.value.toLowerCase() : '';
            const sdgValue = sdgSelect ? sdgSelect.value.toLowerCase() : '';
            const searchValue = searchInput ? searchInput.value.toLowerCase() : '';
            
            let visibleCount = 0;
            
            workItems.forEach(item => {
                const itemSector = (item.dataset.sector || '').toLowerCase();
                const itemIndustry = (item.dataset.industry || '').toLowerCase();
                const itemSdg = (item.dataset.sdg || '').toLowerCase();
                const itemTitle = (item.dataset.title || '').toLowerCase();
                const itemDescription = (item.dataset.description || '').toLowerCase();
                
                const matchesSector = !sectorValue || itemSector.includes(sectorValue);
                const matchesIndustry = !industryValue || itemIndustry.includes(industryValue);
                const matchesSdg = !sdgValue || itemSdg.includes(sdgValue);
                const matchesSearch = !searchValue || 
                    itemTitle.includes(searchValue) || 
                    itemDescription.includes(searchValue);
                
                const isVisible = matchesSector && matchesIndustry && matchesSdg && matchesSearch;
                
                item.style.display = isVisible ? '' : 'none';
                
                if (isVisible) {
                    visibleCount++;
                }
            });
            
            // Show/hide no results message
            if (noResultsMessage) {
                noResultsMessage.style.display = visibleCount === 0 ? 'block' : 'none';
            }
        }
        
        // Attach event listeners
        if (sectorSelect) sectorSelect.addEventListener('change', filterProjects);
        if (industrySelect) industrySelect.addEventListener('change', filterProjects);
        if (sdgSelect) sdgSelect.addEventListener('change', filterProjects);
        if (searchInput) {
            searchInput.addEventListener('input', filterProjects);
            searchInput.addEventListener('keyup', filterProjects);
        }
        
        // Handle the "Load more testimonials" button functionality
        const loadMoreButton = document.getElementById('load-more-testimonials');
        if (!loadMoreButton) return;
        
        // Access testimonials data that was exported by the testimonial-section component
        const testimonials = window.festaTestimonials || [];
        const container = document.getElementById('testimonials-container');
        if (!container || !testimonials.length) return;
        
        // Show only the first 3 testimonials initially
        let displayedCount = 3;
        
        // Initial display only shows first 3 testimonials
        const initialTestimonials = Array.from(container.children);
        initialTestimonials.forEach((item, index) => {
            if (index >= displayedCount) {
                item.style.display = 'none';
            }
        });

        // Update display when button is clicked
        loadMoreButton.addEventListener('click', function() {
            displayedCount += 3;
            
            // Show more testimonials
            initialTestimonials.forEach((item, index) => {
                if (index < displayedCount) {
                    item.style.display = '';
                }
            });
            
            // Hide button if all testimonials are shown
            if (displayedCount >= testimonials.length) {
                loadMoreButton.style.display = 'none';
            }
        });
    });
</script>
@endpush 