@extends('layouts.app')

@section('title', "$project->title - Festa Design Studio")

@section('content')
<!-- Work Case study Show page Main Content area-->
<main class="bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50">
    
    <!-- Project Work Case Study Header -->
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
    <x-work.case-study-body
        :objectives="$project->objectives"
        :challenge="$project->challenge"
        :solution="$project->solution"
        :solutionGallery="$project->solution_gallery"
        :results="$project->results"
        :resultsGallery="$project->results_gallery"
    />
    
    <!-- Project Work Case Study Footer -->
    <x-work.case-study-footer
        :previousProject="$previousProject"
        :nextProject="$nextProject"
    />
</main>
@endsection 