@extends('layouts.app')

@section('title', $team_member->name . ' - Festa Design Studio Team')

@section('content')
<!-- Breadcrumbs navigation -->
<x-core.breadcrumbs-truncated
    :items="[
        ['label' => 'About', 'url' => route('about')],
        ['label' => 'Team', 'url' => route('about.team')]
    ]"
    :currentLabel="$team_member->name"
/>

<!-- Team member main content area -->
<article class="max-w-3xl mx-auto py-16 px-6 sm:px-12 bg-white-smoke-50 font-Inter text-the-end-900">
  
  <!-- Avatar component -->
  <x-about.team.team-member.avatar 
    :name="$team_member->name"
    :title="$team_member->title"
    :email="$team_member->email"
    :linkedin="$team_member->linkedin"
    :avatar="$team_member->avatar"
  />
  
  <!-- Summary component -->
  @if($team_member->summary)
    <x-about.team.team-member.summary :summary="$team_member->summary" />
  @endif
  
  <!-- Professional Experience component -->
  @if($team_member->professional_experience)
    <x-about.team.team-member.experience 
      :experiences="is_string($team_member->professional_experience) ? json_decode($team_member->professional_experience, true) : $team_member->professional_experience" 
      title="Professional experience"
    />
  @endif
  
  <!-- Volunteer Experience component -->
  @if($team_member->volunteer_experience)
    <x-about.team.team-member.experience 
      :experiences="is_string($team_member->volunteer_experience) ? json_decode($team_member->volunteer_experience, true) : $team_member->volunteer_experience" 
      title="Volunteer experience"
    />
  @endif
  
  <!-- Education component -->
  @if($team_member->education)
    <x-about.team.team-member.education :education="is_string($team_member->education) ? json_decode($team_member->education, true) : $team_member->education" />
  @endif
  
  <!-- Certifications component -->
  @if($team_member->certifications)
    <x-about.team.team-member.certifications :certifications="is_string($team_member->certifications) ? json_decode($team_member->certifications, true) : $team_member->certifications" />
  @endif
  
  <!-- Skills component -->
  @if($team_member->skills)
    <x-about.team.team-member.skills :skills="is_string($team_member->skills) ? json_decode($team_member->skills, true) : $team_member->skills" />
  @endif
  
  <!-- Press mentions component -->
  @if($team_member->press)
    <x-about.team.team-member.press :press="is_string($team_member->press) ? json_decode($team_member->press, true) : $team_member->press" />
  @endif
  
</article>
@endsection 