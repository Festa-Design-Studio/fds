@extends('layouts.app')

@section('title', "$project->title - Festa Design Studio")

@section('breadcrumbs')
    <!-- Breadcrumb navigation -->
    <x-core.breadcrumbs :items="[
        ['label' => 'Work', 'url' => route('work')],
        ['label' => $project->title, 'url' => '']
    ]" />
@endsection

@section('content')
<!-- Work Case study Show page Content area-->
<div class="bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50">
    
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
        :content="$project->content"
    />
    
    <!-- Project Work Case Study Footer -->
    <x-work.case-study-footer
        :previousProject="$previousProject"
        :nextProject="$nextProject"
    />
</div>
@endsection 