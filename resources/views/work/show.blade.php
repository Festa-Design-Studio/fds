<x-app-layout>
    <main class="bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50">
        
        <!-- Project Case Study Header -->
        <x-work.case-study-header 
            :title="$project->title"
            :client="$project->client"
            :sector="$project->sector"
            :industry="$project->industry"
            :sdgAlignment="$project->sdg_alignment"
            :excerpt="$project->excerpt"
            :featuredImage="$project->featured_image"
        />
        
        <!-- Project Work Case Study Body -->
        <article class="mx-auto max-w-3xl py-20 px-4 md:px-8 lg:px-16">
            <div class="prose max-w-none">
                {!! $project->content !!}
            </div>
        </article>
        
        <!-- Project Work Case Study Footer -->
        <x-work.case-study-footer 
            :previousProject="$previousProject"
            :nextProject="$nextProject"
        />
        
    </main>
</x-app-layout> 