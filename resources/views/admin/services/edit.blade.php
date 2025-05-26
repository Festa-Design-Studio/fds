@extends('layouts.admin')

@section('title', 'Edit Service - ' . $service->title)

@section('header_title', 'Edit ' . $service->title)

@section('action_button')
<x-core.button variant="secondary" size="medium" href="{{ route('admin.services') }}">
    Back to Services
</x-core.button>
@endsection

@section('content')
<div class="p-8 max-w-7xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    {{-- Session Success Message --}}
    @if(session('success'))
        <div class="mb-6 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    {{-- Error Messages --}}
    @if($errors->any())
        <div class="mb-6 p-4 bg-chicken-comb-50 border border-chicken-comb-300 text-chicken-comb-700 rounded-lg">
            <strong class="font-bold">There were some problems with your input.</strong>
            <ul class="mt-3 list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.services.update', $service->type) }}" method="POST" class="space-y-8">
        @csrf
        @method('PUT')

        <!-- Basic Information Section -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg bg-pepper-green-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h2 class="text-h5 font-semibold text-the-end-900">Basic Information</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <x-core.text-input 
                    name="title" 
                    label="Service Title" 
                    value="{{ old('title', $service->title) }}"
                    placeholder="e.g., Project Design"
                    required />

                <x-core.text-input 
                    name="display_order" 
                    label="Display Order" 
                    type="number"
                    value="{{ old('display_order', $service->display_order) }}"
                    placeholder="1" />
            </div>

            <div class="mt-6">
                <x-core.textarea 
                    name="description" 
                    label="Service Description" 
                    rows="3"
                    placeholder="Brief description of the service..."
                    required>{{ old('description', $service->description) }}</x-core.textarea>
            </div>

            <div class="mt-6">
                <x-core.textarea 
                    name="content" 
                    label="Service Content" 
                    rows="4"
                    placeholder="Detailed content about the service...">{{ old('content', $service->content) }}</x-core.textarea>
            </div>

            <div class="mt-6 flex items-center">
                <!-- Hidden input to ensure a value is always sent -->
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" 
                       name="is_active" 
                       id="is_active" 
                       value="1"
                       {{ old('is_active', $service->is_active) ? 'checked' : '' }} 
                       class="w-4 h-4 border-the-end-200 text-pepper-green-600 focus:ring-pepper-green-300 hover:border-pepper-green-500 rounded">
                <label for="is_active" class="ml-2 text-body text-the-end-900">Service is active</label>
            </div>
        </div>

        <!-- Expertise Section -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg bg-chicken-comb-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-chicken-comb-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h2 class="text-h5 font-semibold text-the-end-900">Expertise Section</h2>
            </div>

            <div class="space-y-6">
                <x-core.text-input 
                    name="expertise_title" 
                    label="Expertise Title" 
                    value="{{ old('expertise_title', $service->expertise_title) }}"
                    placeholder="e.g., Project design expertise" />

                <x-core.textarea 
                    name="expertise_description" 
                    label="Expertise Description" 
                    rows="3"
                    placeholder="Describe your expertise in this service area...">{{ old('expertise_description', $service->expertise_description) }}</x-core.textarea>
            </div>
        </div>

        <!-- Deliverables Section -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg bg-apocalyptic-orange-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-apocalyptic-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                    </svg>
                </div>
                <h2 class="text-h5 font-semibold text-the-end-900">Service Deliverables</h2>
            </div>

            <div id="deliverables-container" class="space-y-4">
                @foreach($service->deliverables as $index => $deliverable)
                    <div class="deliverable-item bg-white-smoke-50 border border-white-smoke-300 p-4 rounded-lg space-y-4">
                        <div class="flex justify-between items-center">
                            <h4 class="text-body-lg font-medium text-the-end-900">Deliverable {{ $index + 1 }}</h4>
                            <button type="button" onclick="removeDeliverable(this)" class="text-chicken-comb-600 hover:text-chicken-comb-800 transition-colors">
                                <span class="sr-only">Remove Deliverable</span>
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>

                        <x-core.text-input 
                            name="deliverables[{{ $index }}][title]" 
                            label="Deliverable Title" 
                            value="{{ old('deliverables.'.$index.'.title', $deliverable->title) }}"
                            placeholder="e.g., Theory of change" />

                        <x-core.textarea 
                            name="deliverables[{{ $index }}][description]" 
                            label="Deliverable Description" 
                            rows="2"
                            placeholder="Describe what this deliverable includes...">{{ old('deliverables.'.$index.'.description', $deliverable->description) }}</x-core.textarea>
                    </div>
                @endforeach
            </div>

            <x-core.button type="button" variant="outline" size="medium" onclick="addDeliverable()" class="mt-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Add New Deliverable
            </x-core.button>
        </div>

        <div class="flex justify-end">
            <x-core.button type="submit" variant="primary" size="large">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                Update Service
            </x-core.button>
        </div>
    </form>
</div>

@push('scripts')
<script>
    function addDeliverable() {
        const container = document.getElementById('deliverables-container');
        const index = container.children.length;
        
        const template = `
            <div class="deliverable-item bg-white-smoke-50 border border-white-smoke-300 p-4 rounded-lg space-y-4">
                <div class="flex justify-between items-center">
                    <h4 class="text-body-lg font-medium text-the-end-900">Deliverable ${index + 1}</h4>
                    <button type="button" onclick="removeDeliverable(this)" class="text-chicken-comb-600 hover:text-chicken-comb-800 transition-colors">
                        <span class="sr-only">Remove Deliverable</span>
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div>
                    <label for="deliverables[${index}][title]" class="block text-body font-medium text-the-end-400 mb-2">Deliverable Title</label>
                    <input type="text" 
                           name="deliverables[${index}][title]" 
                           placeholder="e.g., Theory of change"
                           class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-pepper-green-300 focus:border-pepper-green-600">
                </div>

                <div>
                    <label for="deliverables[${index}][description]" class="block text-body font-medium text-the-end-400 mb-2">Deliverable Description</label>
                    <textarea name="deliverables[${index}][description]" 
                              rows="2" 
                              placeholder="Describe what this deliverable includes..."
                              class="w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600"></textarea>
                </div>
            </div>
        `;
        
        container.insertAdjacentHTML('beforeend', template);
    }

    function removeDeliverable(button) {
        const item = button.closest('.deliverable-item');
        if (item) {
            // Add fade-out animation
            item.style.transition = 'opacity 0.2s ease-out';
            item.style.opacity = '0';
            
            // Remove element after animation
            setTimeout(() => {
                item.remove();
                reindexDeliverables();
            }, 200);
        }
    }

    function reindexDeliverables() {
        const items = document.querySelectorAll('.deliverable-item');
        items.forEach((item, index) => {
            // Update the header
            const header = item.querySelector('h4');
            if (header) {
                header.textContent = `Deliverable ${index + 1}`;
            }
            
            // Update input names and labels
            item.querySelectorAll('input, textarea').forEach(input => {
                const name = input.getAttribute('name');
                if (name) {
                    input.setAttribute('name', name.replace(/\[\d+\]/, `[${index}]`));
                }
            });
            
            item.querySelectorAll('label').forEach(label => {
                const forAttr = label.getAttribute('for');
                if (forAttr) {
                    label.setAttribute('for', forAttr.replace(/\[\d+\]/, `[${index}]`));
                }
            });
        });
    }

    // Add form submission handler to clean up empty deliverables
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                // Remove any deliverable items that have empty title or description
                const deliverableItems = document.querySelectorAll('.deliverable-item');
                deliverableItems.forEach(item => {
                    const titleInput = item.querySelector('input[name*="[title]"]');
                    const descriptionInput = item.querySelector('textarea[name*="[description]"]');
                    
                    if (titleInput && descriptionInput) {
                        const title = titleInput.value.trim();
                        const description = descriptionInput.value.trim();
                        
                        // If either title or description is empty, remove this item before submission
                        if (!title || !description) {
                            item.remove();
                        }
                    }
                });
                
                // Reindex after cleanup
                reindexDeliverables();
            });
        }
    });
</script>
@endpush
@endsection 