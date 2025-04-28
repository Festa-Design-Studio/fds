@props(['skills'])

@php
    // Ensure skills is an array/object for foreach
    $skillsData = is_string($skills) ? json_decode($skills, true) : $skills;
    
    // If still not an array/object, initialize as empty array to prevent errors
    if (!is_array($skillsData) && !is_object($skillsData)) {
        $skillsData = [];
    }
@endphp

<!-- Skills section-->
<section class="mt-10 space-y-8">
  <h2 class="text-h3 font-semibold text-the-end-900 border-b border-white-smoke-300 pb-2">Skills</h2>

  @foreach($skillsData as $skillCategory)
    <div>
      <h3 class="text-h4 font-medium text-the-end-800 mb-2">{{ $skillCategory['category'] ?? 'Skills' }}</h3>
      <ul class="flex flex-wrap gap-2 text-body-sm text-the-end-700">
        @php
            // Get the skills array from the category
            $skillList = $skillCategory['skills'] ?? [];
            
            // Ensure skillList is an array
            if (!is_array($skillList)) {
                $skillList = [];
            }
        @endphp
        
        @foreach($skillList as $skill)
          <li class="bg-leaf-100 px-3 py-1 rounded-full">{{ $skill }}</li>
        @endforeach
      </ul>
    </div>
  @endforeach
</section> 