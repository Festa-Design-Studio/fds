@csrf

<div class="space-y-8">
    <!-- Basic Information -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <x-core.input 
                name="title" 
                label="Project Title" 
                :value="$project->title ?? old('title')" 
                required
            />
        </div>
        
        <div>
            <x-core.input 
                name="slug" 
                label="Slug" 
                :value="$project->slug ?? old('slug')" 
                required
                helpText="Used in the URL, should be unique"
            />
        </div>
        
        <div>
            <x-core.select 
                name="client_id" 
                label="Client" 
                :value="$project->client_id ?? old('client_id')"
            >
                <option value="">Select a client</option>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}" @selected(($project->client_id ?? old('client_id')) == $client->id)>
                        {{ $client->name }}
                    </option>
                @endforeach
            </x-core.select>
        </div>
        
        <div>
            <x-core.select 
                name="sector" 
                label="Sector" 
                :value="$project->sector ?? old('sector')"
            >
                <option value="">Select a sector</option>
                @foreach($sectors as $value => $label)
                    <option value="{{ $value }}" @selected(($project->sector ?? old('sector')) == $value)>
                        {{ $label }}
                    </option>
                @endforeach
            </x-core.select>
        </div>
        
        <div>
            <x-core.select 
                name="industry" 
                label="Industry" 
                :value="$project->industry ?? old('industry')"
            >
                <option value="">Select an industry</option>
                @foreach($industries as $value => $label)
                    <option value="{{ $value }}" @selected(($project->industry ?? old('industry')) == $value)>
                        {{ $label }}
                    </option>
                @endforeach
            </x-core.select>
        </div>
        
        <div>
            <x-core.select 
                name="sdg_alignment" 
                label="SDG Alignment" 
                :value="$project->sdg_alignment ?? old('sdg_alignment')"
            >
                <option value="">Select SDG alignment</option>
                @foreach($sdgOptions as $value => $label)
                    <option value="{{ $value }}" @selected(($project->sdg_alignment ?? old('sdg_alignment')) == $value)>
                        {{ $label }}
                    </option>
                @endforeach
            </x-core.select>
        </div>
    </div>
    
    <!-- Excerpt -->
    <div>
        <x-core.textarea 
            name="excerpt" 
            label="Excerpt" 
            :value="$project->excerpt ?? old('excerpt')" 
            required
            rows="3"
            helpText="A brief summary of the case study that appears at the top"
        />
    </div>
    
    <!-- Featured Image -->
    <div>
        <x-core.file-upload 
            name="featured_image" 
            label="Featured Image" 
            accept="image/*"
            helpText="Main image shown at the top of the case study"
        />
        
        @if(isset($project) && $project->featured_image)
            <div class="mt-2">
                <div class="flex items-center gap-2">
                    <div class="w-16 h-16 rounded overflow-hidden bg-white-smoke-100">
                        <img src="{{ asset('storage/' . $project->featured_image) }}" alt="Featured image" class="w-full h-full object-cover">
                    </div>
                    <div class="text-body-sm text-the-end-600">Current featured image</div>
                </div>
            </div>
        @endif
    </div>
    
    <!-- Rich Text Content Sections -->
    <div class="border-t border-white-smoke-300 pt-8">
        <h2 class="text-h4 font-semibold text-the-end-900 mb-6">Case Study Content</h2>
        
        <!-- Objectives -->
        <div class="mb-8">
            <x-core.rich-text-editor 
                name="objectives" 
                label="Objectives" 
                :value="$project->objectives ?? old('objectives')"
                helpText="Outline the key goals of the project"
            />
        </div>
        
        <!-- Challenge -->
        <div class="mb-8">
            <x-core.rich-text-editor 
                name="challenge" 
                label="The Challenge" 
                :value="$project->challenge ?? old('challenge')"
                helpText="Describe the problems or challenges the client faced"
            />
        </div>
        
        <!-- Solution -->
        <div class="mb-8">
            <x-core.rich-text-editor 
                name="solution" 
                label="The Solution" 
                :value="$project->solution ?? old('solution')"
                helpText="Explain the approach and solution implemented"
            />
            
            <!-- Solution Gallery -->
            <div class="mt-4 p-4 bg-white-smoke-50 rounded-lg">
                <h3 class="text-h6 font-medium text-the-end-900 mb-3">Solution Gallery</h3>
                
                <div id="solution-gallery-container" class="space-y-4">
                    @if(isset($project) && !empty($project->solution_gallery))
                        @foreach($project->solution_gallery as $index => $image)
                            <div class="solution-gallery-item p-4 bg-white border border-white-smoke-300 rounded-lg">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div>
                                        <x-core.file-upload 
                                            name="solution_gallery[{{ $index }}][url]" 
                                            label="Image" 
                                            accept="image/*"
                                        />
                                        
                                        @if(!empty($image['url']))
                                            <div class="mt-2">
                                                <div class="w-16 h-16 rounded overflow-hidden bg-white-smoke-100">
                                                    <img src="{{ asset('storage/' . $image['url']) }}" alt="Gallery image" class="w-full h-full object-cover">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <div>
                                        <x-core.input 
                                            name="solution_gallery[{{ $index }}][alt]" 
                                            label="Alt Text" 
                                            :value="$image['alt'] ?? ''"
                                            helpText="For accessibility"
                                        />
                                    </div>
                                    
                                    <div>
                                        <x-core.input 
                                            name="solution_gallery[{{ $index }}][caption]" 
                                            label="Caption" 
                                            :value="$image['caption'] ?? ''"
                                        />
                                    </div>
                                </div>
                                
                                <div class="mt-2 flex justify-end">
                                    <button type="button" class="remove-gallery-item px-2 py-1 text-chicken-comb-600 hover:text-chicken-comb-700 text-body-sm">
                                        Remove
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                
                <div class="mt-4">
                    <button type="button" id="add-solution-image" class="px-3 py-2 bg-white border border-pepper-green-300 text-pepper-green-600 hover:bg-pepper-green-50 rounded-lg text-body-sm">
                        + Add Solution Image
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Results -->
        <div class="mb-8">
            <x-core.rich-text-editor 
                name="results" 
                label="The Results" 
                :value="$project->results ?? old('results')"
                helpText="Highlight the outcomes and impact of the project"
            />
            
            <!-- Results Gallery -->
            <div class="mt-4 p-4 bg-white-smoke-50 rounded-lg">
                <h3 class="text-h6 font-medium text-the-end-900 mb-3">Results Gallery</h3>
                
                <div id="results-gallery-container" class="space-y-4">
                    @if(isset($project) && !empty($project->results_gallery))
                        @foreach($project->results_gallery as $index => $image)
                            <div class="results-gallery-item p-4 bg-white border border-white-smoke-300 rounded-lg">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div>
                                        <x-core.file-upload 
                                            name="results_gallery[{{ $index }}][url]" 
                                            label="Image" 
                                            accept="image/*"
                                        />
                                        
                                        @if(!empty($image['url']))
                                            <div class="mt-2">
                                                <div class="w-16 h-16 rounded overflow-hidden bg-white-smoke-100">
                                                    <img src="{{ asset('storage/' . $image['url']) }}" alt="Gallery image" class="w-full h-full object-cover">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <div>
                                        <x-core.input 
                                            name="results_gallery[{{ $index }}][alt]" 
                                            label="Alt Text" 
                                            :value="$image['alt'] ?? ''"
                                            helpText="For accessibility"
                                        />
                                    </div>
                                    
                                    <div>
                                        <x-core.input 
                                            name="results_gallery[{{ $index }}][caption]" 
                                            label="Caption" 
                                            :value="$image['caption'] ?? ''"
                                        />
                                    </div>
                                </div>
                                
                                <div class="mt-2 flex justify-end">
                                    <button type="button" class="remove-gallery-item px-2 py-1 text-chicken-comb-600 hover:text-chicken-comb-700 text-body-sm">
                                        Remove
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                
                <div class="mt-4">
                    <button type="button" id="add-results-image" class="px-3 py-2 bg-white border border-pepper-green-300 text-pepper-green-600 hover:bg-pepper-green-50 rounded-lg text-body-sm">
                        + Add Results Image
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Form Actions -->
    <div class="flex justify-end space-x-3 pt-4 border-t border-white-smoke-300">
        <x-core.button :href="route('admin.case-studies.index')" variant="neutral">
            Cancel
        </x-core.button>
        
        <x-core.button type="submit" variant="primary">
            {{ isset($project) ? 'Update Case Study' : 'Create Case Study' }}
        </x-core.button>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Solution Gallery
        const solutionGalleryContainer = document.getElementById('solution-gallery-container');
        const addSolutionImageBtn = document.getElementById('add-solution-image');
        
        if (addSolutionImageBtn) {
            addSolutionImageBtn.addEventListener('click', function() {
                const index = document.querySelectorAll('.solution-gallery-item').length;
                addGalleryItem(solutionGalleryContainer, 'solution_gallery', index);
            });
        }
        
        // Results Gallery
        const resultsGalleryContainer = document.getElementById('results-gallery-container');
        const addResultsImageBtn = document.getElementById('add-results-image');
        
        if (addResultsImageBtn) {
            addResultsImageBtn.addEventListener('click', function() {
                const index = document.querySelectorAll('.results-gallery-item').length;
                addGalleryItem(resultsGalleryContainer, 'results_gallery', index);
            });
        }
        
        // Handle remove buttons for existing gallery items
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-gallery-item')) {
                const galleryItem = e.target.closest('.solution-gallery-item, .results-gallery-item');
                if (galleryItem) {
                    galleryItem.remove();
                }
            }
        });
        
        // Function to add a new gallery item
        function addGalleryItem(container, fieldName, index) {
            const newItem = document.createElement('div');
            newItem.className = `${fieldName.replace('_', '-')}-item p-4 bg-white border border-white-smoke-300 rounded-lg`;
            
            newItem.innerHTML = `
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="${fieldName}_${index}_url" class="block text-body font-medium text-the-end-900 mb-1">
                            Image
                        </label>
                        <input type="file" name="${fieldName}[${index}][url]" id="${fieldName}_${index}_url" 
                               class="block w-full px-3 py-2 bg-white-smoke-50 border border-white-smoke-300 rounded text-body-sm">
                    </div>
                    
                    <div>
                        <label for="${fieldName}_${index}_alt" class="block text-body font-medium text-the-end-900 mb-1">
                            Alt Text
                        </label>
                        <input type="text" name="${fieldName}[${index}][alt]" id="${fieldName}_${index}_alt" 
                               class="block w-full px-3 py-2 bg-white-smoke-50 border border-white-smoke-300 rounded text-body-sm"
                               placeholder="Describe the image for accessibility">
                        <p class="text-body-sm text-the-end-600 mt-1">For accessibility</p>
                    </div>
                    
                    <div>
                        <label for="${fieldName}_${index}_caption" class="block text-body font-medium text-the-end-900 mb-1">
                            Caption
                        </label>
                        <input type="text" name="${fieldName}[${index}][caption]" id="${fieldName}_${index}_caption" 
                               class="block w-full px-3 py-2 bg-white-smoke-50 border border-white-smoke-300 rounded text-body-sm"
                               placeholder="Caption for the image">
                    </div>
                </div>
                
                <div class="mt-2 flex justify-end">
                    <button type="button" class="remove-gallery-item px-2 py-1 text-chicken-comb-600 hover:text-chicken-comb-700 text-body-sm">
                        Remove
                    </button>
                </div>
            `;
            
            container.appendChild(newItem);
        }
    });
</script>
@endpush 