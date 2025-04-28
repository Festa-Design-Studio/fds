@props(['skills'])

@php
    // Ensure skills is an array/object for foreach
    $skillsData = is_string($skills) ? json_decode($skills, true) : $skills;
    
    // If still not an array/object, initialize as empty array to prevent errors
    if (!is_array($skillsData) && !is_object($skillsData)) {
        $skillsData = [];
    }
    
    // Debug the skills data structure
    // Log::info('Skills data structure:', ['skills' => $skillsData]);
    
    // Process skills data to ensure proper structure
    $processedSkills = [];
    
    foreach ($skillsData as $skillCategory) {
        // Skip if not a valid array/object
        if (!is_array($skillCategory) && !is_object($skillCategory)) {
            continue;
        }
        
        // Get category name, default to 'Other' if missing
        $category = isset($skillCategory['category']) ? $skillCategory['category'] : 'Other';
        
        // Get skills array, ensure it's an array
        $skillList = isset($skillCategory['skills']) && is_array($skillCategory['skills']) 
            ? $skillCategory['skills'] 
            : [];
        
        // Add to processed skills
        if (!isset($processedSkills[$category])) {
            $processedSkills[$category] = [];
        }
        
        // Add each skill to the category
        foreach ($skillList as $skill) {
            if (!empty($skill) && !in_array($skill, $processedSkills[$category])) {
                $processedSkills[$category][] = $skill;
            }
        }
    }
@endphp

<!-- Skills section-->
<section class="mt-10 space-y-8">
  <h2 class="text-h3 font-semibold text-pepper-green border-b border-white-smoke-300 pb-2">Skills</h2>

  @if(count($processedSkills) > 0)
    @foreach($processedSkills as $category => $skillList)
      <div>
        <h3 class="text-h5 font-medium text-the-end-800 mb-3">{{ $category }}</h3>
        <ul class="flex flex-wrap gap-2 text-body-sm text-the-end-700">
          @foreach($skillList as $skill)
            <li class="bg-leaf-100 px-3 py-1 rounded-full">{{ $skill }}</li>
          @endforeach
        </ul>
      </div>
    @endforeach
  @else
    <p class="text-body-sm text-the-end-700">No skills listed.</p>
  @endif
</section> 