<!-- Basic Information -->
<div class="space-y-6">
    <h2 class="text-h3 font-semibold text-the-end-800 border-b border-gray-200 pb-2">Basic Information</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-the-end-700">Name <span class="text-apocalyptic-orange-500">*</span></label>
            <x-core.input 
                type="text" 
                name="name" 
                id="name" 
                value="{{ old('name', $team_member->name ?? '') }}"
                required
                class="mt-1"
            />
            @error('name')
                <p class="mt-1 text-sm text-apocalyptic-orange-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- Title -->
        <div>
            <label for="title" class="block text-sm font-medium text-the-end-700">Title <span class="text-apocalyptic-orange-500">*</span></label>
            <x-core.input 
                type="text" 
                name="title" 
                id="title" 
                value="{{ old('title', $team_member->title ?? '') }}"
                required
                class="mt-1"
            />
            @error('title')
                <p class="mt-1 text-sm text-apocalyptic-orange-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-the-end-700">Email <span class="text-apocalyptic-orange-500">*</span></label>
            <x-core.input 
                type="email" 
                name="email" 
                id="email" 
                value="{{ old('email', $team_member->email ?? '') }}"
                required
                class="mt-1"
            />
            @error('email')
                <p class="mt-1 text-sm text-apocalyptic-orange-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- LinkedIn -->
        <div>
            <label for="linkedin" class="block text-sm font-medium text-the-end-700">LinkedIn</label>
            <x-core.input 
                type="url" 
                name="linkedin" 
                id="linkedin" 
                value="{{ old('linkedin', $team_member->linkedin ?? '') }}"
                class="mt-1"
            />
            @error('linkedin')
                <p class="mt-1 text-sm text-apocalyptic-orange-500">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>

<!-- Bio -->
<div class="mt-8 space-y-6">
    <h2 class="text-h3 font-semibold text-the-end-800 border-b border-gray-200 pb-2">Bio</h2>
    
    <div>
        <label for="summary" class="block text-sm font-medium text-the-end-700">Professional Summary <span class="text-apocalyptic-orange-500">*</span></label>
        <x-core.textarea 
            name="summary" 
            id="summary" 
            rows="4"
            required
            class="mt-1"
        >{{ old('summary', $team_member->summary ?? '') }}</x-core.textarea>
        @error('summary')
            <p class="mt-1 text-sm text-apocalyptic-orange-500">{{ $message }}</p>
        @enderror
    </div>
</div>

<!-- Avatar -->
<div class="mt-8 space-y-6">
    <h2 class="text-h3 font-semibold text-the-end-800 border-b border-gray-200 pb-2">Profile Image</h2>
    
    <div>
        <label for="avatar" class="block text-sm font-medium text-the-end-700">Avatar</label>
        <x-core.input 
            type="file" 
            name="avatar" 
            id="avatar" 
            accept="image/*"
            class="mt-1"
        />
        @error('avatar')
            <p class="mt-1 text-sm text-apocalyptic-orange-500">{{ $message }}</p>
        @enderror
        
        @if(isset($team_member) && $team_member->avatar)
            <div class="mt-4">
                <img src="{{ asset('storage/' . $team_member->avatar) }}" alt="{{ $team_member->name }}" class="w-32 h-32 object-cover rounded-lg">
            </div>
        @endif
    </div>
</div>

<!-- Professional Experience -->
<div class="mt-10 space-y-6">
    <h2 class="text-h3 font-semibold text-the-end-800 border-b border-gray-200 pb-2">Professional Experience</h2>
    
    <div id="professional-experience-container">
        @if(isset($team_member) && $team_member->professional_experience)
            @php
                $experiences = is_string($team_member->professional_experience) 
                    ? json_decode($team_member->professional_experience, true) 
                    : $team_member->professional_experience;
            @endphp
            
            @foreach($experiences as $index => $experience)
                <div class="experience-item border border-white-smoke-200 rounded-md p-4 mb-4">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-body-lg font-medium">Experience</h3>
                        <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-experience">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Company Name</label>
                            <x-core.input 
                                type="text" 
                                name="professional_experience[{{ $index }}][company]" 
                                value="{{ $experience['company'] ?? '' }}"
                                class="mt-1"
                            />
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Role</label>
                            <x-core.input 
                                type="text" 
                                name="professional_experience[{{ $index }}][role]" 
                                value="{{ $experience['role'] ?? '' }}"
                                class="mt-1"
                            />
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Period</label>
                            <x-core.input 
                                type="text" 
                                name="professional_experience[{{ $index }}][period]" 
                                value="{{ $experience['period'] ?? '' }}" 
                                placeholder="e.g. 2018 - Present"
                                class="mt-1"
                            />
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Company Logo</label>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="flex-grow">
                                    <x-core.input 
                                        type="text" 
                                        name="professional_experience[{{ $index }}][logo]" 
                                        placeholder="/src/img/company-logo.png"
                                        value="{{ $experience['logo'] ?? '' }}"
                                        class="logo-path-input"
                                    />
                                </div>
                                <div class="flex-shrink-0">
                                    <label for="prof-exp-logo-{{ $index }}" class="px-3 py-2 bg-white-smoke-100 text-the-end-800 rounded hover:bg-white-smoke-200 cursor-pointer inline-block">
                                        Upload
                                    </label>
                                    <input 
                                        type="file" 
                                        id="prof-exp-logo-{{ $index }}" 
                                        class="hidden logo-upload" 
                                        data-section="professional_experience"
                                        data-index="{{ $index }}"
                                        accept="image/*"
                                    >
                                </div>
                            </div>
                            <div class="logo-preview mt-2 {{ ($experience['logo'] ?? '') ? '' : 'hidden' }}">
                                @if(isset($experience['logo']) && $experience['logo'])
                                    @php
                                        $logoPath = $experience['logo'];
                                        if (str_starts_with($logoPath, 'team-members/')) {
                                            $logoUrl = asset('storage/' . $logoPath);
                                        } elseif (str_starts_with($logoPath, '/')) {
                                            $logoUrl = $logoPath;
                                        } else {
                                            $logoUrl = $logoPath;
                                        }
                                    @endphp
                                    <img src="{{ $logoUrl }}" alt="Logo preview" class="h-10 w-auto">
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-the-end-700">Description</label>
                        <x-core.textarea 
                            name="professional_experience[{{ $index }}][description]" 
                            rows="2"
                            class="mt-1"
                        >{{ $experience['description'] ?? '' }}</x-core.textarea>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    
    <x-core.button 
        type="button" 
        id="add-professional-experience" 
        variant="neutral"
        class="flex items-center gap-2"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Add Professional Experience
    </x-core.button>
</div>

<!-- Volunteer Experience -->
<div class="mt-10 space-y-6">
    <h2 class="text-h3 font-semibold text-the-end-800 border-b border-gray-200 pb-2">Volunteer Experience</h2>
    
    <div id="volunteer-experience-container">
        @if(isset($team_member) && $team_member->volunteer_experience)
            @php
                $experiences = is_string($team_member->volunteer_experience) 
                    ? json_decode($team_member->volunteer_experience, true) 
                    : $team_member->volunteer_experience;
            @endphp
            
            @foreach($experiences as $index => $experience)
                <div class="experience-item border border-white-smoke-200 rounded-md p-4 mb-4">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-body-lg font-medium">Experience</h3>
                        <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-volunteer-experience">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Organization Name</label>
                            <x-core.input 
                                type="text" 
                                name="volunteer_experience[{{ $index }}][organization]" 
                                value="{{ $experience['organization'] ?? '' }}"
                                class="mt-1"
                            />
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Role</label>
                            <x-core.input 
                                type="text" 
                                name="volunteer_experience[{{ $index }}][role]" 
                                value="{{ $experience['role'] ?? '' }}"
                                class="mt-1"
                            />
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Period</label>
                            <x-core.input 
                                type="text" 
                                name="volunteer_experience[{{ $index }}][period]" 
                                value="{{ $experience['period'] ?? '' }}" 
                                placeholder="e.g. 2018 - Present"
                                class="mt-1"
                            />
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Organization Logo</label>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="flex-grow">
                                    <x-core.input 
                                        type="text" 
                                        name="volunteer_experience[{{ $index }}][logo]" 
                                        placeholder="/src/img/organization-logo.png"
                                        value="{{ $experience['logo'] ?? '' }}"
                                        class="logo-path-input"
                                    />
                                </div>
                                <div class="flex-shrink-0">
                                    <label for="vol-exp-logo-{{ $index }}" class="px-3 py-2 bg-white-smoke-100 text-the-end-800 rounded hover:bg-white-smoke-200 cursor-pointer inline-block">
                                        Upload
                                    </label>
                                    <input 
                                        type="file" 
                                        id="vol-exp-logo-{{ $index }}" 
                                        class="hidden logo-upload" 
                                        data-section="volunteer_experience"
                                        data-index="{{ $index }}"
                                        accept="image/*"
                                    >
                                </div>
                            </div>
                            <div class="logo-preview mt-2 {{ ($experience['logo'] ?? '') ? '' : 'hidden' }}">
                                @if(isset($experience['logo']) && $experience['logo'])
                                    @php
                                        $logoPath = $experience['logo'];
                                        if (str_starts_with($logoPath, 'team-members/')) {
                                            $logoUrl = asset('storage/' . $logoPath);
                                        } elseif (str_starts_with($logoPath, '/')) {
                                            $logoUrl = $logoPath;
                                        } else {
                                            $logoUrl = $logoPath;
                                        }
                                    @endphp
                                    <img src="{{ $logoUrl }}" alt="Logo preview" class="h-10 w-auto">
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-the-end-700">Description</label>
                        <x-core.textarea 
                            name="volunteer_experience[{{ $index }}][description]" 
                            rows="2"
                            class="mt-1"
                        >{{ $experience['description'] ?? '' }}</x-core.textarea>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    
    <x-core.button 
        type="button" 
        id="add-volunteer-experience" 
        variant="neutral"
        class="flex items-center gap-2"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Add Volunteer Experience
    </x-core.button>
</div>

<!-- Education -->
<div class="mt-10 space-y-6">
    <h2 class="text-h3 font-semibold text-the-end-800 border-b border-gray-200 pb-2">Education</h2>
    
    <div id="education-container">
        @if(isset($team_member) && $team_member->education)
            @php
                $educations = is_string($team_member->education) 
                    ? json_decode($team_member->education, true) 
                    : $team_member->education;
            @endphp
            
            @foreach($educations as $index => $education)
                <div class="experience-item border border-white-smoke-200 rounded-md p-4 mb-4">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-body-lg font-medium">Education</h3>
                        <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-education">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Institution Name</label>
                            <input 
                                type="text" 
                                name="education[{{ $index }}][institution]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                value="{{ $education['institution'] ?? '' }}"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Degree</label>
                            <input 
                                type="text" 
                                name="education[{{ $index }}][degree]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                value="{{ $education['degree'] ?? '' }}"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Field of Study</label>
                            <input 
                                type="text" 
                                name="education[{{ $index }}][field]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                value="{{ $education['field'] ?? '' }}"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Period</label>
                            <input 
                                type="text" 
                                name="education[{{ $index }}][period]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                value="{{ $education['period'] ?? '' }}" 
                                placeholder="e.g. 2018 - 2022"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Institution Logo</label>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="flex-grow">
                                    <input 
                                        type="text" 
                                        name="education[{{ $index }}][logo]" 
                                        class="block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800 logo-path-input"
                                        placeholder="/src/img/institution-logo.png"
                                        value="{{ $education['logo'] ?? '' }}"
                                    >
                                </div>
                                <div class="flex-shrink-0">
                                    <label for="edu-logo-{{ $index }}" class="px-3 py-2 bg-white-smoke-100 text-the-end-800 rounded hover:bg-white-smoke-200 cursor-pointer inline-block">
                                        Upload
                                    </label>
                                    <input 
                                        type="file" 
                                        id="edu-logo-{{ $index }}" 
                                        class="hidden logo-upload" 
                                        data-section="education"
                                        data-index="{{ $index }}"
                                        accept="image/*"
                                    >
                                </div>
                            </div>
                            <div class="logo-preview mt-2 {{ ($education['logo'] ?? '') ? '' : 'hidden' }}">
                                @if(isset($education['logo']) && $education['logo'])
                                    @php
                                        $logoPath = $education['logo'];
                                        if (str_starts_with($logoPath, 'team-members/')) {
                                            $logoUrl = asset('storage/' . $logoPath);
                                        } elseif (str_starts_with($logoPath, '/')) {
                                            $logoUrl = $logoPath;
                                        } else {
                                            $logoUrl = $logoPath;
                                        }
                                    @endphp
                                    <img src="{{ $logoUrl }}" alt="Logo preview" class="h-10 w-auto">
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-the-end-700">Description</label>
                        <textarea 
                            name="education[{{ $index }}][description]" 
                            rows="2" 
                            class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                        >{{ $education['description'] ?? '' }}</textarea>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    
    <button 
        type="button" 
        id="add-education" 
        class="px-4 py-2 bg-white-smoke-100 text-the-end-800 rounded-lg hover:bg-white-smoke-200 font-medium flex items-center gap-2"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Add Education
    </button>
</div>

<!-- Certifications -->
<div class="mt-10 space-y-6">
    <h2 class="text-h3 font-semibold text-the-end-800 border-b border-gray-200 pb-2">Certifications</h2>
    
    <div id="certifications-container">
        @if(isset($team_member) && $team_member->certifications)
            @php
                $certifications = is_string($team_member->certifications) 
                    ? json_decode($team_member->certifications, true) 
                    : $team_member->certifications;
            @endphp
            
            @foreach($certifications as $index => $certification)
                <div class="experience-item border border-white-smoke-200 rounded-md p-4 mb-4">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-body-lg font-medium">Certification</h3>
                        <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-certification">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Certification Name</label>
                            <input 
                                type="text" 
                                name="certifications[{{ $index }}][name]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                value="{{ $certification['name'] ?? '' }}"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Issuing Organization</label>
                            <input 
                                type="text" 
                                name="certifications[{{ $index }}][organization]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                value="{{ $certification['organization'] ?? '' }}"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Date Obtained</label>
                            <input 
                                type="text" 
                                name="certifications[{{ $index }}][date]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                value="{{ $certification['date'] ?? '' }}" 
                                placeholder="e.g. January 2023"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Organization Logo</label>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="flex-grow">
                                    <input 
                                        type="text" 
                                        name="certifications[{{ $index }}][logo]" 
                                        class="block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800 logo-path-input"
                                        placeholder="/src/img/organization-logo.png"
                                        value="{{ $certification['logo'] ?? '' }}"
                                    >
                                </div>
                                <div class="flex-shrink-0">
                                    <label for="cert-logo-{{ $index }}" class="px-3 py-2 bg-white-smoke-100 text-the-end-800 rounded hover:bg-white-smoke-200 cursor-pointer inline-block">
                                        Upload
                                    </label>
                                    <input 
                                        type="file" 
                                        id="cert-logo-{{ $index }}" 
                                        class="hidden logo-upload" 
                                        data-section="certifications"
                                        data-index="{{ $index }}"
                                        accept="image/*"
                                    >
                                </div>
                            </div>
                            <div class="logo-preview mt-2 {{ ($certification['logo'] ?? '') ? '' : 'hidden' }}">
                                @if(isset($certification['logo']) && $certification['logo'])
                                    @php
                                        $logoPath = $certification['logo'];
                                        if (str_starts_with($logoPath, 'team-members/')) {
                                            $logoUrl = asset('storage/' . $logoPath);
                                        } elseif (str_starts_with($logoPath, '/')) {
                                            $logoUrl = $logoPath;
                                        } else {
                                            $logoUrl = $logoPath;
                                        }
                                    @endphp
                                    <img src="{{ $logoUrl }}" alt="Logo preview" class="h-10 w-auto">
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-the-end-700">Description</label>
                        <textarea 
                            name="certifications[{{ $index }}][description]" 
                            rows="2" 
                            class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                        >{{ $certification['description'] ?? '' }}</textarea>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    
    <button 
        type="button" 
        id="add-certification" 
        class="px-4 py-2 bg-white-smoke-100 text-the-end-800 rounded-lg hover:bg-white-smoke-200 font-medium flex items-center gap-2"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Add Certification
    </button>
</div>

<!-- Skills -->
<div class="mt-10 space-y-6">
    <h2 class="text-h3 font-semibold text-the-end-800 border-b border-gray-200 pb-2">Skills</h2>
    
    <div id="skills-container">
        @if(isset($team_member) && $team_member->skills)
            @php
                $skills = is_string($team_member->skills) 
                    ? json_decode($team_member->skills, true) 
                    : $team_member->skills;
            @endphp
            
            @foreach($skills as $index => $skillCategory)
                <div class="skill-category border border-white-smoke-200 rounded-md p-4 mb-4" data-index="{{ $index }}">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-body-lg font-medium">Skill Category</h3>
                        <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-skill-category">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="mb-4">
                        <x-core.input
                            type="text"
                            name="skills[{{ $index }}][category]"
                            label="Category Name"
                            placeholder="e.g. UX Research & Design"
                            value="{{ $skillCategory['category'] ?? '' }}"
                        />
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-the-end-700">Skills</label>
                        <div class="skills-list space-y-2">
                            @if(isset($skillCategory['skills']) && is_array($skillCategory['skills']))
                                @foreach($skillCategory['skills'] as $skillIndex => $skill)
                                    <div class="flex items-center gap-2">
                                        <x-core.input
                                            type="text"
                                            name="skills[{{ $index }}][skills][]"
                                            placeholder="e.g. UX Research"
                                            value="{{ $skill }}"
                                        />
                                        <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-skill">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <x-core.button
                            type="button"
                            variant="neutral"
                            size="small"
                            class="mt-2 add-skill"
                        >
                            Add Skill
                        </x-core.button>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    
    <x-core.button
        type="button"
        variant="neutral"
        id="add-skill-category"
        class="flex items-center gap-2"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Add Skill Category
    </x-core.button>
</div>

<!-- Press Mentions -->
<div class="mt-10 space-y-6">
    <h2 class="text-h3 font-semibold text-the-end-800 border-b border-gray-200 pb-2">As Seen In</h2>
    
    <div id="press-container">
        @if(isset($team_member) && $team_member->press)
            @php
                $pressItems = is_string($team_member->press) 
                    ? json_decode($team_member->press, true) 
                    : $team_member->press;
            @endphp
            
            @foreach($pressItems as $index => $pressItem)
                <div class="press-item border border-white-smoke-200 rounded-md p-4 mb-4">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-body-lg font-medium">Press Mention</h3>
                        <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-press">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Title</label>
                            <input 
                                type="text" 
                                name="press[{{ $index }}][title]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                value="{{ $pressItem['title'] ?? '' }}"
                                placeholder="e.g. Moldova: Hire Me"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Publication</label>
                            <input 
                                type="text" 
                                name="press[{{ $index }}][publication]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                value="{{ $pressItem['publication'] ?? '' }}"
                                placeholder="e.g. The Institute for War & Peace Reporting"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">URL</label>
                            <input 
                                type="url" 
                                name="press[{{ $index }}][url]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                value="{{ $pressItem['url'] ?? '' }}"
                                placeholder="e.g. https://iwpr.net/impact/moldova-hire-me"
                            >
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    
    <button 
        type="button" 
        id="add-press" 
        class="px-4 py-2 bg-white-smoke-100 text-the-end-800 rounded-lg hover:bg-white-smoke-200 font-medium flex items-center gap-2"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Add Press Mention
    </button>
</div>

<!-- Submit Button -->
<div class="mt-8">
    <x-core.button type="submit" class="w-full md:w-auto">
        {{ isset($team_member) ? 'Update Team Member' : 'Create Team Member' }}
    </x-core.button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Professional Experience
        const professionalExperienceContainer = document.getElementById('professional-experience-container');
        let professionalExperienceCount = professionalExperienceContainer.children.length;

        function addProfessionalExperience() {
            const template = `
                <div class="experience-item border border-white-smoke-200 rounded-md p-4 mb-4">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-body-lg font-medium">Experience</h3>
                        <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-experience">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Company Name</label>
                            <x-core.input 
                                type="text" 
                                name="professional_experience[${professionalExperienceCount}][company]" 
                                class="mt-1"
                            />
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Role</label>
                            <x-core.input 
                                type="text" 
                                name="professional_experience[${professionalExperienceCount}][role]" 
                                class="mt-1"
                            />
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Period</label>
                            <x-core.input 
                                type="text" 
                                name="professional_experience[${professionalExperienceCount}][period]" 
                                class="mt-1"
                                placeholder="e.g. 2018 - Present"
                            />
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Company Logo</label>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="flex-grow">
                                    <x-core.input 
                                        type="text" 
                                        name="professional_experience[${professionalExperienceCount}][logo]" 
                                        class="logo-path-input"
                                    />
                                </div>
                                <div class="flex-shrink-0">
                                    <label for="prof-logo-${professionalExperienceCount}" class="px-3 py-2 bg-white-smoke-100 text-the-end-800 rounded hover:bg-white-smoke-200 cursor-pointer inline-block">
                                        Upload
                                    </label>
                                    <input 
                                        type="file" 
                                        id="prof-logo-${professionalExperienceCount}" 
                                        class="hidden logo-upload" 
                                        data-section="professional_experience"
                                        data-index="${professionalExperienceCount}"
                                        accept="image/*"
                                    >
                                </div>
                            </div>
                            <div class="logo-preview mt-2 hidden"></div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-the-end-700">Description</label>
                        <x-core.textarea 
                            name="professional_experience[${professionalExperienceCount}][description]" 
                            rows="2"
                            class="mt-1"
                        ></x-core.textarea>
                    </div>
                </div>
            `;
            
            professionalExperienceContainer.insertAdjacentHTML('beforeend', template);
            professionalExperienceCount++;
        }

        document.getElementById('add-professional-experience').addEventListener('click', addProfessionalExperience);

        // Volunteer Experience
        const volunteerExperienceContainer = document.getElementById('volunteer-experience-container');
        let volunteerExperienceCount = volunteerExperienceContainer.children.length;

        function addVolunteerExperience() {
            const template = `
                <div class="experience-item border border-white-smoke-200 rounded-md p-4 mb-4">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-body-lg font-medium">Experience</h3>
                        <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-volunteer-experience">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Organization Name</label>
                            <x-core.input 
                                type="text" 
                                name="volunteer_experience[${volunteerExperienceCount}][organization]" 
                                class="mt-1"
                            />
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Role</label>
                            <x-core.input 
                                type="text" 
                                name="volunteer_experience[${volunteerExperienceCount}][role]" 
                                class="mt-1"
                            />
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Period</label>
                            <x-core.input 
                                type="text" 
                                name="volunteer_experience[${volunteerExperienceCount}][period]" 
                                class="mt-1"
                                placeholder="e.g. 2018 - Present"
                            />
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Organization Logo</label>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="flex-grow">
                                    <x-core.input 
                                        type="text" 
                                        name="volunteer_experience[${volunteerExperienceCount}][logo]" 
                                        class="logo-path-input"
                                    />
                                </div>
                                <div class="flex-shrink-0">
                                    <label for="vol-logo-${volunteerExperienceCount}" class="px-3 py-2 bg-white-smoke-100 text-the-end-800 rounded hover:bg-white-smoke-200 cursor-pointer inline-block">
                                        Upload
                                    </label>
                                    <input 
                                        type="file" 
                                        id="vol-logo-${volunteerExperienceCount}" 
                                        class="hidden logo-upload" 
                                        data-section="volunteer_experience"
                                        data-index="${volunteerExperienceCount}"
                                        accept="image/*"
                                    >
                                </div>
                            </div>
                            <div class="logo-preview mt-2 hidden"></div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-the-end-700">Description</label>
                        <x-core.textarea 
                            name="volunteer_experience[${volunteerExperienceCount}][description]" 
                            rows="2"
                            class="mt-1"
                        ></x-core.textarea>
                    </div>
                </div>
            `;
            
            volunteerExperienceContainer.insertAdjacentHTML('beforeend', template);
            volunteerExperienceCount++;
        }

        document.getElementById('add-volunteer-experience').addEventListener('click', addVolunteerExperience);

        // Education
        const educationContainer = document.getElementById('education-container');
        let educationCount = educationContainer.children.length;

        function addEducation() {
            const template = `
                <div class="experience-item border border-white-smoke-200 rounded-md p-4 mb-4">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-body-lg font-medium">Education</h3>
                        <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-education">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Institution Name</label>
                            <input 
                                type="text" 
                                name="education[${educationCount}][institution]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Degree</label>
                            <input 
                                type="text" 
                                name="education[${educationCount}][degree]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Field of Study</label>
                            <input 
                                type="text" 
                                name="education[${educationCount}][field]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Period</label>
                            <input 
                                type="text" 
                                name="education[${educationCount}][period]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                placeholder="e.g. 2018 - 2022"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Institution Logo</label>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="flex-grow">
                                    <input 
                                        type="text" 
                                        name="education[${educationCount}][logo]" 
                                        class="block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800 logo-path-input"
                                        placeholder="/src/img/institution-logo.png"
                                    >
                                </div>
                                <div class="flex-shrink-0">
                                    <label for="edu-logo-${educationCount}" class="px-3 py-2 bg-white-smoke-100 text-the-end-800 rounded hover:bg-white-smoke-200 cursor-pointer inline-block">
                                        Upload
                                    </label>
                                    <input 
                                        type="file" 
                                        id="edu-logo-${educationCount}" 
                                        class="hidden logo-upload" 
                                        data-section="education"
                                        data-index="${educationCount}"
                                        accept="image/*"
                                    >
                                </div>
                            </div>
                            <div class="logo-preview mt-2 hidden"></div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-the-end-700">Description</label>
                        <textarea 
                            name="education[${educationCount}][description]" 
                            rows="2" 
                            class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                        ></textarea>
                    </div>
                </div>
            `;
            
            educationContainer.insertAdjacentHTML('beforeend', template);
            educationCount++;
        }

        document.getElementById('add-education').addEventListener('click', addEducation);

        // Certifications
        const certificationsContainer = document.getElementById('certifications-container');
        let certificationsCount = certificationsContainer.children.length;

        function addCertification() {
            const template = `
                <div class="experience-item border border-white-smoke-200 rounded-md p-4 mb-4">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-body-lg font-medium">Certification</h3>
                        <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-certification">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Certification Name</label>
                            <input 
                                type="text" 
                                name="certifications[${certificationsCount}][name]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Issuing Organization</label>
                            <input 
                                type="text" 
                                name="certifications[${certificationsCount}][organization]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Date Obtained</label>
                            <input 
                                type="text" 
                                name="certifications[${certificationsCount}][date]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                placeholder="e.g. January 2023"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Organization Logo</label>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="flex-grow">
                                    <input 
                                        type="text" 
                                        name="certifications[${certificationsCount}][logo]" 
                                        class="block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800 logo-path-input"
                                        placeholder="/src/img/organization-logo.png"
                                    >
                                </div>
                                <div class="flex-shrink-0">
                                    <label for="cert-logo-${certificationsCount}" class="px-3 py-2 bg-white-smoke-100 text-the-end-800 rounded hover:bg-white-smoke-200 cursor-pointer inline-block">
                                        Upload
                                    </label>
                                    <input 
                                        type="file" 
                                        id="cert-logo-${certificationsCount}" 
                                        class="hidden logo-upload" 
                                        data-section="certifications"
                                        data-index="${certificationsCount}"
                                        accept="image/*"
                                    >
                                </div>
                            </div>
                            <div class="logo-preview mt-2 hidden"></div>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-the-end-700">Description</label>
                        <textarea 
                            name="certifications[${certificationsCount}][description]" 
                            rows="2" 
                            class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                        ></textarea>
                    </div>
                </div>
            `;
            
            certificationsContainer.insertAdjacentHTML('beforeend', template);
            certificationsCount++;
        }

        document.getElementById('add-certification').addEventListener('click', addCertification);

        // Skills
        const skillsContainer = document.getElementById('skills-container');
        let skillsCount = skillsContainer.children.length;

        function addSkillCategory() {
            const template = `
                <div class="skill-category border border-white-smoke-200 rounded-md p-4 mb-4" data-index="${skillsCount}">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-body-lg font-medium">Skill Category</h3>
                        <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-skill-category">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="mb-4">
                        <div class="space-y-2">
                            <label for="skills-${skillsCount}-category" class="text-the-end-900 text-body-sm font-medium">Category Name</label>
                            <div class="relative">
                                <input
                                    type="text"
                                    name="skills[${skillsCount}][category]"
                                    id="skills-${skillsCount}-category"
                                    placeholder="e.g. UX Research & Design"
                                    class="w-full px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 outline-chicken-comb-600 disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed"
                                />
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-the-end-700">Skills</label>
                        <div class="skills-list space-y-2">
                            <div class="flex items-center gap-2">
                                <div class="relative flex-grow">
                                    <input
                                        type="text"
                                        name="skills[${skillsCount}][skills][]"
                                        placeholder="e.g. UX Research"
                                        class="w-full px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 outline-chicken-comb-600 disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed"
                                    />
                                </div>
                                <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-skill">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <button 
                            type="button" 
                            class="mt-2 px-3 py-1 bg-white-smoke-100 text-the-end-800 rounded hover:bg-white-smoke-200 text-sm font-medium add-skill"
                        >
                            Add Skill
                        </button>
                    </div>
                </div>
            `;
            
            skillsContainer.insertAdjacentHTML('beforeend', template);
            skillsCount++;
        }

        document.getElementById('add-skill-category').addEventListener('click', addSkillCategory);

        // Press Mentions
        const pressContainer = document.getElementById('press-container');
        let pressCount = pressContainer.children.length;

        function addPressMention() {
            const template = `
                <div class="press-item border border-white-smoke-200 rounded-md p-4 mb-4">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-body-lg font-medium">Press Mention</h3>
                        <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-press">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Title</label>
                            <input 
                                type="text" 
                                name="press[${pressCount}][title]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                placeholder="e.g. Moldova: Hire Me"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Publication</label>
                            <input 
                                type="text" 
                                name="press[${pressCount}][publication]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                placeholder="e.g. The Institute for War & Peace Reporting"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">URL</label>
                            <input 
                                type="url" 
                                name="press[${pressCount}][url]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                placeholder="e.g. https://iwpr.net/impact/moldova-hire-me"
                            >
                        </div>
                    </div>
                </div>
            `;
            
            pressContainer.insertAdjacentHTML('beforeend', template);
            pressCount++;
        }

        document.getElementById('add-press').addEventListener('click', addPressMention);

        // Event delegation for removing items
        document.addEventListener('click', function(e) {
            // Remove professional experience
            if (e.target.closest('.remove-experience')) {
                e.target.closest('.experience-item').remove();
                updateIndices('professional_experience');
            }
            
            // Remove volunteer experience
            if (e.target.closest('.remove-volunteer-experience')) {
                e.target.closest('.experience-item').remove();
                updateIndices('volunteer_experience');
            }
            
            // Remove education
            if (e.target.closest('.remove-education')) {
                e.target.closest('.experience-item').remove();
                updateIndices('education');
            }
            
            // Remove certification
            if (e.target.closest('.remove-certification')) {
                e.target.closest('.experience-item').remove();
                updateIndices('certifications');
            }
            
            // Remove skill category
            if (e.target.closest('.remove-skill-category')) {
                e.target.closest('.skill-category').remove();
                updateIndices('skills');
            }
            
            // Remove skill
            if (e.target.closest('.remove-skill')) {
                e.target.closest('.flex').remove();
            }
            
            // Remove press mention
            if (e.target.closest('.remove-press')) {
                e.target.closest('.press-item').remove();
                updateIndices('press');
            }
        });

        // Add skill to category
        document.addEventListener('click', function(e) {
            if (e.target.closest('.add-skill')) {
                const skillCategory = e.target.closest('.skill-category');
                const skillsList = skillCategory.querySelector('.skills-list');
                const categoryIndex = skillCategory.dataset.index;
                
                const skillTemplate = `
                    <div class="flex items-center gap-2">
                        <div class="relative flex-grow">
                            <input 
                                type="text" 
                                name="skills[${categoryIndex}][skills][]" 
                                placeholder="e.g. UX Research"
                                class="w-full px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600 hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50 outline-chicken-comb-600 disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed"
                            />
                        </div>
                        <button type="button" class="text-apocalyptic-orange-600 hover:text-apocalyptic-orange-800 remove-skill">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    </div>
                `;
                
                skillsList.insertAdjacentHTML('beforeend', skillTemplate);
            }
        });

        // Update indices for form fields
        function updateIndices(section) {
            const container = document.getElementById(`${section}-container`);
            const items = container.querySelectorAll(`.${section === 'skills' ? 'skill-category' : `${section}-item`}`);
            
            items.forEach((item, index) => {
                // Update data-index attribute for skill categories
                if (section === 'skills') {
                    item.dataset.index = index;
                    
                    // Update all skill inputs within this category
                    const skillInputs = item.querySelectorAll('input[name^="skills"][name$="][skills][]"]');
                    skillInputs.forEach(input => {
                        input.setAttribute('name', `skills[${index}][skills][]`);
                    });
                    
                    // Update category input
                    const categoryInput = item.querySelector(`input[name^="skills"][name$="][category]"]`);
                    if (categoryInput) {
                        categoryInput.setAttribute('name', `skills[${index}][category]`);
                        categoryInput.setAttribute('id', `skills-${index}-category`);
                    }
                }
                
                // Update input names
                const inputs = item.querySelectorAll('input, textarea');
                inputs.forEach(input => {
                    const name = input.getAttribute('name');
                    if (name && !name.includes('[skills][]')) {
                        input.setAttribute('name', name.replace(/\[\d+\]/, `[${index}]`));
                    }
                });
            });
        }

        // Handle logo uploads
        document.addEventListener('change', function(e) {
            if (e.target.classList.contains('logo-upload')) {
                const file = e.target.files[0];
                if (!file) return;

                console.log('File selected:', file.name, file.type, file.size);
                console.log('Section:', e.target.dataset.section);
                console.log('Index:', e.target.dataset.index);

                const formData = new FormData();
                formData.append('logo', file);
                formData.append('section', e.target.dataset.section);

                // Find the logo path input and logo preview elements more reliably
                const experienceItem = e.target.closest('.experience-item');
                const logoPathInput = experienceItem.querySelector('.logo-path-input');
                const logoPreview = experienceItem.querySelector('.logo-preview');

                console.log('Logo path input:', logoPathInput);
                console.log('Logo preview:', logoPreview);

                fetch('/admin/about/team/upload-logo', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                })
                .then(response => {
                    console.log('Response status:', response.status);
                    return response.json();
                })
                .then(data => {
                    console.log('Response data:', data);
                    if (data.success) {
                        logoPathInput.value = data.path;
                        logoPreview.innerHTML = `<img src="${data.url}" alt="Logo preview" class="h-10 w-auto">`;
                        logoPreview.classList.remove('hidden');
                    } else {
                        console.error('Upload failed:', data.message);
                        alert('Failed to upload logo: ' + (data.message || 'Unknown error'));
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Failed to upload logo: ' + error.message);
                });
            }
        });
    });
</script> 