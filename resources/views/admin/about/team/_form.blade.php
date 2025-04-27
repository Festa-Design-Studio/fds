<!-- Basic Information -->
<div class="space-y-6">
    <h2 class="text-h3 font-semibold text-the-end-800 border-b border-gray-200 pb-2">Basic Information</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-the-end-700">Name <span class="text-apocalyptic-orange-500">*</span></label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                value="{{ old('name', $team_member->name ?? '') }}" 
                required
            >
        </div>
        
        <!-- Title -->
        <div>
            <label for="title" class="block text-sm font-medium text-the-end-700">Title <span class="text-apocalyptic-orange-500">*</span></label>
            <input 
                type="text" 
                name="title" 
                id="title" 
                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                value="{{ old('title', $team_member->title ?? '') }}" 
                required
            >
        </div>
        
        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-the-end-700">Email</label>
            <input 
                type="email" 
                name="email" 
                id="email" 
                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                value="{{ old('email', $team_member->email ?? '') }}"
            >
        </div>
        
        <!-- LinkedIn -->
        <div>
            <label for="linkedin" class="block text-sm font-medium text-the-end-700">LinkedIn URL</label>
            <input 
                type="url" 
                name="linkedin" 
                id="linkedin" 
                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                value="{{ old('linkedin', $team_member->linkedin ?? '') }}"
            >
        </div>
    </div>
    
    <!-- Avatar -->
    <div>
        <label class="block text-sm font-medium text-the-end-700 mb-1">Avatar</label>
        
        @if(isset($team_member) && $team_member->avatar)
            <div class="mb-3 flex items-center space-x-3">
                <img 
                    src="{{ asset('storage/' . $team_member->avatar) }}" 
                    alt="{{ $team_member->name }}" 
                    class="w-16 h-16 rounded-full object-cover"
                >
                <span class="text-sm text-the-end-600">Current avatar</span>
            </div>
        @endif
        
        <input 
            type="file" 
            name="avatar" 
            id="avatar" 
            class="mt-1 block w-full text-sm text-the-end-700 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-white-smoke-100 file:text-the-end-800 hover:file:bg-white-smoke-200"
            accept="image/*"
        >
        <p class="mt-1 text-sm text-the-end-500">Upload a square image for best results. Maximum size: 2MB.</p>
    </div>
    
    <!-- Summary -->
    <div>
        <label for="summary" class="block text-sm font-medium text-the-end-700">Professional Summary <span class="text-apocalyptic-orange-500">*</span></label>
        <textarea 
            name="summary" 
            id="summary" 
            rows="4" 
            class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
            required
        >{{ old('summary', $team_member->summary ?? '') }}</textarea>
        <p class="mt-1 text-sm text-the-end-500">A brief professional summary that highlights your expertise and background.</p>
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
                            <input 
                                type="text" 
                                name="professional_experience[{{ $index }}][company]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                value="{{ $experience['company'] ?? '' }}"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Role</label>
                            <input 
                                type="text" 
                                name="professional_experience[{{ $index }}][role]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                value="{{ $experience['role'] ?? '' }}"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Period</label>
                            <input 
                                type="text" 
                                name="professional_experience[{{ $index }}][period]" 
                                class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                                value="{{ $experience['period'] ?? '' }}" 
                                placeholder="e.g. 2018 - Present"
                            >
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-the-end-700">Company Logo</label>
                            <div class="flex items-center gap-2 mt-1">
                                <div class="flex-grow">
                                    <input 
                                        type="text" 
                                        name="professional_experience[{{ $index }}][logo]" 
                                        class="block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800 logo-path-input"
                                        placeholder="/src/img/company-logo.png"
                                        value="{{ $experience['logo'] ?? '' }}"
                                    >
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
                        <textarea 
                            name="professional_experience[{{ $index }}][description]" 
                            rows="2" 
                            class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                        >{{ $experience['description'] ?? '' }}</textarea>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    
    <button 
        type="button" 
        id="add-professional-experience" 
        class="px-4 py-2 bg-white-smoke-100 text-the-end-800 rounded-lg hover:bg-white-smoke-200 font-medium flex items-center gap-2"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Add Professional Experience
    </button>
</div>

<!-- Similar sections for other components (volunteer experience, education, certifications, skills, press) -->
<!-- These would follow the same pattern as the professional experience section -->

<!-- Update the volunteer experience logo field similar to professional experience -->
<div>
    <label class="block text-sm font-medium text-the-end-700">Organization Logo</label>
    <div class="flex items-center gap-2 mt-1">
        <div class="flex-grow">
            <input 
                type="text" 
                name="volunteer_experience[${volunteerExpCount}][logo]" 
                class="block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800 logo-path-input"
                placeholder="/src/img/organization-logo.png"
            >
        </div>
        <div class="flex-shrink-0">
            <label for="vol-exp-logo-${volunteerExpCount}" class="px-3 py-2 bg-white-smoke-100 text-the-end-800 rounded hover:bg-white-smoke-200 cursor-pointer inline-block">
                Upload
            </label>
            <input 
                type="file" 
                id="vol-exp-logo-${volunteerExpCount}" 
                class="hidden logo-upload" 
                data-section="volunteer_experience"
                data-index="${volunteerExpCount}"
                accept="image/*"
            >
        </div>
    </div>
    <div class="logo-preview mt-2 hidden">
        <img src="" alt="Logo preview" class="h-10 w-auto">
    </div>
</div>

<!-- Update the certifications logo field similar to professional experience -->
<div>
    <label class="block text-sm font-medium text-the-end-700">Institution Logo</label>
    <div class="flex items-center gap-2 mt-1">
        <div class="flex-grow">
            <input 
                type="text" 
                name="certifications[${certificationCount}][logo]" 
                class="block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800 logo-path-input"
                placeholder="/src/img/certification-logo.png"
            >
        </div>
        <div class="flex-shrink-0">
            <label for="cert-logo-${certificationCount}" class="px-3 py-2 bg-white-smoke-100 text-the-end-800 rounded hover:bg-white-smoke-200 cursor-pointer inline-block">
                Upload
            </label>
            <input 
                type="file" 
                id="cert-logo-${certificationCount}" 
                class="hidden logo-upload" 
                data-section="certifications"
                data-index="${certificationCount}"
                accept="image/*"
            >
        </div>
    </div>
    <div class="logo-preview mt-2 hidden">
        <img src="" alt="Logo preview" class="h-10 w-auto">
    </div>
</div>

<script>
    // Wait for the DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Professional Experience Add/Remove
        const professionalExpContainer = document.getElementById('professional-experience-container');
        const addProfessionalExpBtn = document.getElementById('add-professional-experience');
        
        let professionalExpCount = professionalExpContainer.querySelectorAll('.experience-item').length;
        
        // Add new professional experience
        addProfessionalExpBtn.addEventListener('click', function() {
            const newExperience = document.createElement('div');
            newExperience.className = 'experience-item border border-white-smoke-200 rounded-md p-4 mb-4';
            newExperience.innerHTML = `
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
                        <input 
                            type="text" 
                            name="professional_experience[${professionalExpCount}][company]" 
                            class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                        >
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-the-end-700">Role</label>
                        <input 
                            type="text" 
                            name="professional_experience[${professionalExpCount}][role]" 
                            class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                        >
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-the-end-700">Period</label>
                        <input 
                            type="text" 
                            name="professional_experience[${professionalExpCount}][period]" 
                            class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                            placeholder="e.g. 2018 - Present"
                        >
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-the-end-700">Company Logo</label>
                        <div class="flex items-center gap-2 mt-1">
                            <div class="flex-grow">
                                <input 
                                    type="text" 
                                    name="professional_experience[${professionalExpCount}][logo]" 
                                    class="block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800 logo-path-input"
                                    placeholder="/src/img/company-logo.png"
                                >
                            </div>
                            <div class="flex-shrink-0">
                                <label for="prof-exp-logo-${professionalExpCount}" class="px-3 py-2 bg-white-smoke-100 text-the-end-800 rounded hover:bg-white-smoke-200 cursor-pointer inline-block">
                                    Upload
                                </label>
                                <input 
                                    type="file" 
                                    id="prof-exp-logo-${professionalExpCount}" 
                                    class="hidden logo-upload" 
                                    data-section="professional_experience"
                                    data-index="${professionalExpCount}"
                                    accept="image/*"
                                >
                            </div>
                        </div>
                        <div class="logo-preview mt-2 hidden">
                            <!-- Preview image will be displayed here after upload -->
                        </div>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-the-end-700">Description</label>
                    <textarea 
                        name="professional_experience[${professionalExpCount}][description]" 
                        rows="2" 
                        class="mt-1 block w-full rounded-md border-white-smoke-300 shadow-sm focus:border-apocalyptic-orange-500 focus:ring-apocalyptic-orange-500 text-body text-the-end-800"
                    ></textarea>
                </div>
            `;
            
            professionalExpContainer.appendChild(newExperience);
            professionalExpCount++;
            
            // Add event listener to the remove button
            const removeBtn = newExperience.querySelector('.remove-experience');
            removeBtn.addEventListener('click', function() {
                newExperience.remove();
                updateProfessionalExpIndices();
            });
        });
        
        // Add event listeners to existing remove buttons
        document.querySelectorAll('.remove-experience').forEach(button => {
            button.addEventListener('click', function() {
                button.closest('.experience-item').remove();
                updateProfessionalExpIndices();
            });
        });
        
        // Update indices after removing an item
        function updateProfessionalExpIndices() {
            const items = professionalExpContainer.querySelectorAll('.experience-item');
            items.forEach((item, index) => {
                item.querySelectorAll('input, textarea').forEach(input => {
                    const nameAttr = input.getAttribute('name');
                    if (nameAttr) {
                        const newName = nameAttr.replace(/professional_experience\[\d+\]/, `professional_experience[${index}]`);
                        input.setAttribute('name', newName);
                    }
                });
            });
            professionalExpCount = items.length;
        }
        
        // Handle logo uploads
        function setupLogoUploads() {
            document.querySelectorAll('.logo-upload').forEach(fileInput => {
                fileInput.addEventListener('change', function(e) {
                    const file = e.target.files[0];
                    if (!file) return;
                    
                    const section = this.dataset.section;
                    const index = this.dataset.index;
                    const formData = new FormData();
                    formData.append('logo', file);
                    formData.append('section', section);
                    
                    // Show loading state
                    const parentDiv = this.closest('div').parentElement;
                    const previewDiv = parentDiv.nextElementSibling;
                    const pathInput = parentDiv.querySelector('.logo-path-input');
                    
                    // Add loading indicator
                    previewDiv.innerHTML = '<div class="text-sm text-the-end-600">Uploading...</div>';
                    previewDiv.classList.remove('hidden');
                    
                    // Send AJAX request
                    fetch('{{ route('admin.about.team.upload-logo') }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            // Update the logo path input field
                            pathInput.value = data.path;
                            
                            // Show the preview
                            previewDiv.innerHTML = `
                                <img src="${data.url}" alt="Logo preview" class="h-10 w-auto">
                                <p class="text-xs text-the-end-500 mt-1">Logo uploaded successfully</p>
                            `;
                            previewDiv.classList.remove('hidden');
                        } else {
                            previewDiv.innerHTML = `<div class="text-sm text-apocalyptic-orange-600">Upload failed: ${data.message}</div>`;
                        }
                    })
                    .catch(error => {
                        console.error('Error uploading logo:', error);
                        previewDiv.innerHTML = '<div class="text-sm text-apocalyptic-orange-600">Upload failed. Please try again.</div>';
                    });
                });
            });
        }
        
        // Set up initial logo uploads
        setupLogoUploads();
        
        // Ensure new logo uploads are set up after adding new experiences
        const addProfessionalExpBtn = document.getElementById('add-professional-experience');
        if (addProfessionalExpBtn) {
            const originalClickHandler = addProfessionalExpBtn.onclick;
            addProfessionalExpBtn.onclick = function(e) {
                if (originalClickHandler) {
                    originalClickHandler.call(this, e);
                }
                // Set up logo uploads for newly added fields
                setTimeout(setupLogoUploads, 100);
            };
        }
        
        // Similarly, for other add buttons (volunteer experience, certifications)
        const addVolunteerExpBtn = document.getElementById('add-volunteer-experience');
        if (addVolunteerExpBtn) {
            const originalClickHandler = addVolunteerExpBtn.onclick;
            addVolunteerExpBtn.onclick = function(e) {
                if (originalClickHandler) {
                    originalClickHandler.call(this, e);
                }
                setTimeout(setupLogoUploads, 100);
            };
        }
        
        const addCertificationBtn = document.getElementById('add-certification');
        if (addCertificationBtn) {
            const originalClickHandler = addCertificationBtn.onclick;
            addCertificationBtn.onclick = function(e) {
                if (originalClickHandler) {
                    originalClickHandler.call(this, e);
                }
                setTimeout(setupLogoUploads, 100);
            };
        }
    });
</script> 