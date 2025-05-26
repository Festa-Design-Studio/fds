@extends('layouts.admin')

@section('title', 'Edit Service Sector')

@section('header_title', 'Edit ' . $sector->title)

@section('action_button')
<x-core.button variant="secondary" size="medium" href="{{ route('admin.services') }}">
    Back to Services
</x-core.button>
@endsection

@php
$expertiseItems = old('expertise_items', $sector->expertise_items);
// Handle the case where expertise_items might be a JSON string
if (is_string($expertiseItems)) {
    $expertiseItems = json_decode($expertiseItems, true) ?? [];
} elseif (!is_array($expertiseItems)) {
    $expertiseItems = [];
}
@endphp

@section('content')
<div class="p-8 max-w-7xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    {{-- Session Success Message --}}
    @if(session('success'))
        <div class="mb-6 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    {{-- Error Messages --}}
    @if ($errors->any())
        <div class="mb-6 p-4 bg-chicken-comb-50 border border-chicken-comb-300 text-chicken-comb-700 rounded-lg">
            <strong class="font-bold">There were some problems with your input.</strong>
            <ul class="mt-3 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.services.sectors.update', $sector->type) }}" id="sectorForm" class="space-y-8">
        @csrf
        @method('PUT')

        <!-- Hero Section -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg bg-pepper-green-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                </div>
                <h2 class="text-h5 font-semibold text-the-end-900">Hero Section</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <x-core.text-input 
                    name="hero_eyebrow" 
                    label="Eyebrow Text" 
                    value="{{ old('hero_eyebrow', $sector->hero_eyebrow) }}"
                    placeholder="e.g., Empowering nonprofits" />
                
                <x-core.text-input 
                    name="hero_button_text" 
                    label="Button Text" 
                    value="{{ old('hero_button_text', $sector->hero_button_text) }}"
                    placeholder="e.g., Start Your Impact Journey" />
            </div>

            <div class="mt-6">
                <x-core.text-input 
                    name="hero_title" 
                    label="Title" 
                    value="{{ old('hero_title', $sector->hero_title) }}"
                    placeholder="e.g., Transform your mission Into visual impact" />
            </div>

            <div class="mt-6">
                <x-core.textarea 
                    name="hero_description" 
                    label="Description" 
                    rows="3"
                    placeholder="Describe the hero section content...">{{ old('hero_description', $sector->hero_description) }}</x-core.textarea>
            </div>
        </div>

        <!-- Challenge Section -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg bg-chicken-comb-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-chicken-comb-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                </div>
                <h2 class="text-h5 font-semibold text-the-end-900">Challenge Section</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <x-core.text-input 
                    name="challenge_eyebrow" 
                    label="Eyebrow Text" 
                    value="{{ old('challenge_eyebrow', $sector->challenge_eyebrow) }}"
                    placeholder="e.g., The Challenge" />
                
                <x-core.text-input 
                    name="challenge_title" 
                    label="Title" 
                    value="{{ old('challenge_title', $sector->challenge_title) }}"
                    placeholder="e.g., Nonprofit Sector Challenges" />
            </div>

            <div class="mb-6">
                <x-core.textarea 
                    name="challenge_description" 
                    label="Description" 
                    rows="3"
                    placeholder="Describe the challenges...">{{ old('challenge_description', $sector->challenge_description) }}</x-core.textarea>
            </div>

            <!-- Challenge Cards -->
            @php
                $challengeItems = $sector->challenge_items ?: [];
            @endphp
            
            <div class="space-y-6">
                <h3 class="text-h6 font-medium text-the-end-900">Challenge Cards</h3>
                
                <div id="challenge-cards-container" class="space-y-4">
                    @foreach($challengeItems as $index => $item)
                    <div class="bg-white-smoke-50 border border-white-smoke-300 p-4 rounded-lg space-y-4 challenge-card">
                        <div class="flex justify-between items-center">
                            <h4 class="text-body-lg font-medium text-the-end-900">Challenge Card {{ $index + 1 }}</h4>
                            <button type="button" onclick="removeChallengeCard(this)" class="text-chicken-comb-600 hover:text-chicken-comb-800 transition-colors">
                                <span class="sr-only">Remove Challenge Card</span>
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>

                        <x-core.text-input 
                            name="challenge_items[{{ $index }}][title]" 
                            label="Challenge Title" 
                            value="{{ $item['title'] ?? '' }}"
                            placeholder="e.g., Limited Resources" />

                        <x-core.textarea 
                            name="challenge_items[{{ $index }}][description]" 
                            label="Description" 
                            rows="3"
                            placeholder="Describe this challenge...">{{ $item['description'] ?? '' }}</x-core.textarea>

                        <div>
                            <x-core.input-label for="challenge_items[{{ $index }}][icon]" value="Icon SVG Code" />
                            <textarea 
                                name="challenge_items[{{ $index }}][icon]" 
                                rows="4" 
                                placeholder="e.g., <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2-1.343-2-3-2z'/></svg>"
                                class="mt-1 block w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600">{{ $item['icon'] ?? '' }}</textarea>
                            <p class="mt-1 text-body-sm text-the-end-600">Enter the complete SVG code for the icon</p>
                        </div>

                        <x-core.text-input 
                            name="challenge_items[{{ $index }}][source]" 
                            label="Source (Optional)" 
                            value="{{ $item['source'] ?? '' }}"
                            placeholder="e.g., Nonprofit Finance Fund Survey 2023" />

                        <x-core.text-input 
                            name="challenge_items[{{ $index }}][sourceUrl]" 
                            label="Source URL (Optional)" 
                            type="url"
                            value="{{ $item['sourceUrl'] ?? '' }}"
                            placeholder="https://example.com" />
                    </div>
                    @endforeach
                </div>

                <x-core.button type="button" variant="outline" size="medium" onclick="addChallengeCard()">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Add New Challenge Card
                </x-core.button>
            </div>
        </div>

        <!-- Expertise Section -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg bg-pepper-green-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h2 class="text-h5 font-semibold text-the-end-900">Expertise Section</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <x-core.text-input 
                    name="expertise_eyebrow" 
                    label="Eyebrow Text" 
                    value="{{ old('expertise_eyebrow', $sector->expertise_eyebrow) }}"
                    placeholder="e.g., Our Expertise" />
                
                <x-core.text-input 
                    name="expertise_title" 
                    label="Title" 
                    value="{{ old('expertise_title', $sector->expertise_title) }}"
                    placeholder="e.g., How We Help" />
            </div>

            <div class="mb-6">
                <x-core.textarea 
                    name="expertise_description" 
                    label="Description" 
                    rows="3"
                    placeholder="Describe your expertise...">{{ old('expertise_description', $sector->expertise_description) }}</x-core.textarea>
            </div>

            <!-- Expertise Cards -->
            <div class="space-y-6">
                <h3 class="text-h6 font-medium text-the-end-900">Expertise Cards</h3>
                
                <div class="space-y-4" id="expertise-cards-container">
                    @foreach($expertiseItems as $index => $item)
                    <div class="bg-white-smoke-50 border border-white-smoke-300 p-4 rounded-lg space-y-4">
                        <div class="flex justify-between items-center">
                            <h4 class="text-body-lg font-medium text-the-end-900">Card {{ $index + 1 }}</h4>
                            @if($index > 1)
                            <button type="button" onclick="removeExpertiseCard(this)" class="text-chicken-comb-600 hover:text-chicken-comb-800 transition-colors">
                                <span class="sr-only">Remove Card</span>
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                            @endif
                        </div>

                        <x-core.text-input 
                            name="expertise_items[{{ $index }}][title]" 
                            label="Card Title" 
                            value="{{ $item['title'] }}"
                            placeholder="e.g., Strategic Planning" />

                        <div>
                            <x-core.input-label for="expertise_items[{{ $index }}][icon]" value="Icon SVG Code" />
                            <textarea 
                                name="expertise_items[{{ $index }}][icon]" 
                                rows="4" 
                                placeholder="e.g., <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7'/></svg>"
                                class="mt-1 block w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600">{{ $item['icon'] ?? '' }}</textarea>
                            <p class="mt-1 text-body-sm text-the-end-600">Enter the complete SVG code for the expertise icon</p>
                        </div>

                        <x-core.textarea 
                            name="expertise_items[{{ $index }}][intro]" 
                            label="Introduction Text" 
                            rows="2"
                            placeholder="Brief introduction...">{{ $item['intro'] }}</x-core.textarea>

                        <div>
                            <x-core.input-label value="Key Points" />
                            <div class="space-y-2" id="points-container-{{ $index }}">
                                @foreach($item['points'] as $pointIndex => $point)
                                <div class="flex items-center space-x-2">
                                    <input type="text" 
                                        name="expertise_items[{{ $index }}][points][]" 
                                        value="{{ $point }}" 
                                        required
                                        class="flex-1 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600"
                                        placeholder="Enter key point...">
                                    <button type="button" onclick="removePoint(this)" class="text-chicken-comb-600 hover:text-chicken-comb-800 transition-colors">
                                        <span class="sr-only">Remove Point</span>
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                @endforeach
                            </div>
                            <x-core.button type="button" variant="outline" size="small" onclick="addPoint({{ $index }})" class="mt-2">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                                Add Point
                            </x-core.button>
                        </div>

                        <x-core.textarea 
                            name="expertise_items[{{ $index }}][conclusion]" 
                            label="Conclusion" 
                            rows="2"
                            placeholder="Concluding statement...">{{ $item['conclusion'] }}</x-core.textarea>
                    </div>
                    @endforeach
                </div>

                <x-core.button type="button" variant="outline" size="medium" onclick="addExpertiseCard()">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Add New Card
                </x-core.button>
            </div>
        </div>

        <!-- General Settings -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-lg bg-the-end-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-the-end-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h2 class="text-h5 font-semibold text-the-end-900">General Settings</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <x-core.text-input 
                    name="title" 
                    label="Page Title" 
                    value="{{ old('title', $sector->title) }}"
                    placeholder="e.g., Nonprofit Sector" />

                <x-core.text-input 
                    name="display_order" 
                    label="Display Order" 
                    type="number"
                    value="{{ old('display_order', $sector->display_order) }}"
                    placeholder="1" />
            </div>

            <div class="mt-6">
                <x-core.textarea 
                    name="description" 
                    label="Meta Description" 
                    rows="3"
                    placeholder="SEO meta description...">{{ old('description', $sector->description) }}</x-core.textarea>
            </div>
        </div>

        <div class="flex justify-end">
            <x-core.button type="submit" variant="primary" size="large">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                Update Sector
            </x-core.button>
        </div>
    </form>
</div>

@push('scripts')
<script>
    function addPoint(cardIndex) {
        const container = document.getElementById(`points-container-${cardIndex}`);
        const newPoint = document.createElement('div');
        newPoint.className = 'flex items-center space-x-2';
        newPoint.innerHTML = `
            <input type="text" 
                name="expertise_items[${cardIndex}][points][]" 
                value=""
                required
                class="flex-1 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600"
                placeholder="Enter key point...">
            <button type="button" onclick="removePoint(this)" class="text-chicken-comb-600 hover:text-chicken-comb-800 transition-colors">
                <span class="sr-only">Remove Point</span>
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        `;
        container.appendChild(newPoint);
        
        // Focus the new input
        const input = newPoint.querySelector('input');
        input.focus();
    }

    function removePoint(button) {
        const pointElement = button.closest('.flex');
        if (pointElement) {
            // Add fade-out animation
            pointElement.style.transition = 'opacity 0.2s ease-out';
            pointElement.style.opacity = '0';
            
            // Remove element after animation
            setTimeout(() => {
                pointElement.remove();
            }, 200);
        }
    }

    function addExpertiseCard() {
        const container = document.getElementById('expertise-cards-container');
        const cardIndex = container.querySelectorAll('.bg-white-smoke-50').length;
        const newCard = document.createElement('div');
        newCard.className = 'bg-white-smoke-50 border border-white-smoke-300 p-4 rounded-lg space-y-4';
        newCard.innerHTML = `
            <div class="flex justify-between items-center">
                <h4 class="text-body-lg font-medium text-the-end-900">Card ${cardIndex + 1}</h4>
                <button type="button" onclick="removeExpertiseCard(this)" class="text-chicken-comb-600 hover:text-chicken-comb-800 transition-colors">
                    <span class="sr-only">Remove Card</span>
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div>
                <label for="expertise_items[${cardIndex}][title]" class="block text-body font-medium text-the-end-400 mb-2">Card Title</label>
                <input type="text" 
                    name="expertise_items[${cardIndex}][title]" 
                    placeholder="e.g., Strategic Planning"
                    class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-pepper-green-300 focus:border-pepper-green-600">
            </div>

            <div>
                <label for="expertise_items[${cardIndex}][icon]" class="block text-body font-medium text-the-end-400 mb-2">Icon SVG Code</label>
                <textarea 
                    name="expertise_items[${cardIndex}][icon]" 
                    rows="4" 
                    placeholder="e.g., <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7'/></svg>"
                    class="w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600"></textarea>
                <p class="mt-1 text-body-sm text-the-end-600">Enter the complete SVG code for the expertise icon</p>
            </div>

            <div>
                <label for="expertise_items[${cardIndex}][intro]" class="block text-body font-medium text-the-end-400 mb-2">Introduction Text</label>
                <textarea 
                    name="expertise_items[${cardIndex}][intro]" 
                    rows="2" 
                    placeholder="Brief introduction..."
                    class="w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600"></textarea>
            </div>

            <div>
                <label class="block text-body font-medium text-the-end-400 mb-2">Key Points</label>
                <div class="space-y-2" id="points-container-${cardIndex}">
                </div>
                <button type="button" 
                    onclick="addPoint(${cardIndex})" 
                    class="mt-2 lg:w-auto md:w-auto w-full px-4 py-2 text-body h-[40px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Add Point
                </button>
            </div>

            <div>
                <label for="expertise_items[${cardIndex}][conclusion]" class="block text-body font-medium text-the-end-400 mb-2">Conclusion</label>
                <textarea 
                    name="expertise_items[${cardIndex}][conclusion]" 
                    rows="2" 
                    placeholder="Concluding statement..."
                    class="w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600"></textarea>
            </div>
        `;
        container.appendChild(newCard);
    }

    function removeExpertiseCard(button) {
        const card = button.closest('.bg-white-smoke-50');
        if (card) {
            // Add fade-out animation
            card.style.transition = 'opacity 0.2s ease-out';
            card.style.opacity = '0';
            
            // Remove element after animation
            setTimeout(() => {
                card.remove();
                // Reindex remaining cards
                const container = document.getElementById('expertise-cards-container');
                const cards = container.querySelectorAll('.bg-white-smoke-50');
                cards.forEach((card, index) => {
                    card.querySelector('h4').textContent = `Card ${index + 1}`;
                    updateExpertiseCardInputNames(card, index);
                });
            }, 200);
        }
    }

    function updateExpertiseCardInputNames(card, newIndex) {
        // Update input names
        card.querySelectorAll('input, textarea').forEach(input => {
            const name = input.getAttribute('name');
            if (name) {
                input.setAttribute('name', name.replace(/expertise_items\[\d+\]/, `expertise_items[${newIndex}]`));
            }
        });
        
        // Update points container ID
        const pointsContainer = card.querySelector('[id^="points-container-"]');
        if (pointsContainer) {
            pointsContainer.id = `points-container-${newIndex}`;
        }
        
        // Update add point button onclick
        const addPointButton = card.querySelector('button[onclick^="addPoint"]');
        if (addPointButton) {
            addPointButton.setAttribute('onclick', `addPoint(${newIndex})`);
        }
    }

    // Challenge card management functions
    function addChallengeCard() {
        const container = document.getElementById('challenge-cards-container');
        const cardIndex = container.querySelectorAll('.challenge-card').length;
        const newCard = document.createElement('div');
        newCard.className = 'bg-white-smoke-50 border border-white-smoke-300 p-4 rounded-lg space-y-4 challenge-card';
        newCard.innerHTML = `
            <div class="flex justify-between items-center">
                <h4 class="text-body-lg font-medium text-the-end-900">Challenge Card ${cardIndex + 1}</h4>
                <button type="button" onclick="removeChallengeCard(this)" class="text-chicken-comb-600 hover:text-chicken-comb-800 transition-colors">
                    <span class="sr-only">Remove Challenge Card</span>
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div>
                <label for="challenge_items[${cardIndex}][title]" class="block text-body font-medium text-the-end-400 mb-2">Challenge Title</label>
                <input type="text" 
                    name="challenge_items[${cardIndex}][title]" 
                    value="" 
                    placeholder="e.g., Limited Resources"
                    class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-pepper-green-300 focus:border-pepper-green-600">
            </div>

            <div>
                <label for="challenge_items[${cardIndex}][description]" class="block text-body font-medium text-the-end-400 mb-2">Description</label>
                <textarea 
                    name="challenge_items[${cardIndex}][description]" 
                    rows="3" 
                    placeholder="Describe this challenge..."
                    class="w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600"></textarea>
            </div>

            <div>
                <label for="challenge_items[${cardIndex}][icon]" class="block text-body font-medium text-the-end-400 mb-2">Icon SVG Code</label>
                <textarea 
                    name="challenge_items[${cardIndex}][icon]" 
                    rows="4" 
                    placeholder="e.g., <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2-1.343-2-3-2z'/></svg>"
                    class="w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md text-the-end-900 placeholder-the-end-400 focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600"></textarea>
                <p class="mt-1 text-body-sm text-the-end-600">Enter the complete SVG code for the icon</p>
            </div>

            <div>
                <label for="challenge_items[${cardIndex}][source]" class="block text-body font-medium text-the-end-400 mb-2">Source (Optional)</label>
                <input type="text" 
                    name="challenge_items[${cardIndex}][source]" 
                    value="" 
                    placeholder="e.g., Nonprofit Finance Fund Survey 2023"
                    class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-pepper-green-300 focus:border-pepper-green-600">
            </div>

            <div>
                <label for="challenge_items[${cardIndex}][sourceUrl]" class="block text-body font-medium text-the-end-400 mb-2">Source URL (Optional)</label>
                <input type="url" 
                    name="challenge_items[${cardIndex}][sourceUrl]" 
                    value="" 
                    placeholder="https://example.com"
                    class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full text-the-end-900 placeholder-the-end-400 focus:ring-1 focus:ring-pepper-green-300 focus:border-pepper-green-600">
            </div>
        `;
        container.appendChild(newCard);
    }

    function removeChallengeCard(button) {
        const card = button.closest('.challenge-card');
        if (card) {
            // Add fade-out animation
            card.style.transition = 'opacity 0.2s ease-out';
            card.style.opacity = '0';
            
            // Remove element after animation
            setTimeout(() => {
                card.remove();
                // Reindex remaining challenge cards
                const cards = document.querySelectorAll('.challenge-card');
                cards.forEach((card, index) => {
                    card.querySelector('h4').textContent = `Challenge Card ${index + 1}`;
                    updateChallengeCardInputNames(card, index);
                });
            }, 200);
        }
    }

    function updateChallengeCardInputNames(card, newIndex) {
        // Update input names
        card.querySelectorAll('input, textarea').forEach(input => {
            const name = input.getAttribute('name');
            if (name && name.includes('challenge_items')) {
                input.setAttribute('name', name.replace(/challenge_items\[\d+\]/, `challenge_items[${newIndex}]`));
            }
        });
    }

    // Update form submission handler
    document.getElementById('sectorForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Debug: Log form data before processing
        console.log('Form submission started');

        // Clean up empty points before submission
        const expertiseItems = [];
        const cards = document.querySelectorAll('.bg-white-smoke-50');
        
        // Debug: Log number of cards found
        console.log('Processing cards:', cards.length);
        
        cards.forEach((card, index) => {
            const titleInput = card.querySelector(`input[name="expertise_items[${index}][title]"]`);
            const iconTextarea = card.querySelector(`textarea[name="expertise_items[${index}][icon]"]`);
            const introTextarea = card.querySelector(`textarea[name="expertise_items[${index}][intro]"]`);
            const pointInputs = card.querySelectorAll(`input[name="expertise_items[${index}][points][]"]`);
            const conclusionTextarea = card.querySelector(`textarea[name="expertise_items[${index}][conclusion]"]`);
            
            // Debug: Log card data
            console.log('Processing card:', index, {
                title: titleInput?.value,
                icon: iconTextarea?.value,
                intro: introTextarea?.value,
                pointsCount: pointInputs?.length,
                conclusion: conclusionTextarea?.value
            });

            if (titleInput && introTextarea && conclusionTextarea) {
                const points = Array.from(pointInputs)
                    .map(input => input.value.trim())
                    .filter(point => point !== '');

                const expertiseItem = {
                    title: titleInput.value.trim(),
                    intro: introTextarea.value.trim(),
                    points: points,
                    conclusion: conclusionTextarea.value.trim()
                };

                // Add icon if provided
                if (iconTextarea && iconTextarea.value.trim()) {
                    expertiseItem.icon = iconTextarea.value.trim();
                }

                expertiseItems.push(expertiseItem);
            }
        });

        // Debug: Log final expertise items
        console.log('Final expertise items:', expertiseItems);

        // Process challenge items
        const challengeItems = [];
        const challengeCards = document.querySelectorAll('.challenge-card');
        
        challengeCards.forEach((card, index) => {
            const titleInput = card.querySelector(`input[name*="challenge_items"][name*="[title]"]`);
            const descriptionTextarea = card.querySelector(`textarea[name*="challenge_items"][name*="[description]"]`);
            const iconTextarea = card.querySelector(`textarea[name*="challenge_items"][name*="[icon]"]`);
            const sourceInput = card.querySelector(`input[name*="challenge_items"][name*="[source]"]`);
            const sourceUrlInput = card.querySelector(`input[name*="challenge_items"][name*="[sourceUrl]"]`);
            
            if (titleInput && descriptionTextarea && iconTextarea) {
                const challengeItem = {
                    title: titleInput.value.trim(),
                    description: descriptionTextarea.value.trim(),
                    icon: iconTextarea.value.trim()
                };
                
                if (sourceInput && sourceInput.value.trim()) {
                    challengeItem.source = sourceInput.value.trim();
                }
                
                if (sourceUrlInput && sourceUrlInput.value.trim()) {
                    challengeItem.sourceUrl = sourceUrlInput.value.trim();
                }
                
                challengeItems.push(challengeItem);
            }
        });

        // Debug: Log final challenge items
        console.log('Final challenge items:', challengeItems);

        // Create a FormData object
        const formData = new FormData(this);

        // Remove any existing expertise_items and challenge_items fields
        formData.delete('expertise_items');
        formData.delete('challenge_items');

        // Add the expertise items as a JSON string
        formData.append('expertise_items', JSON.stringify(expertiseItems));
        
        // Add the challenge items as a JSON string
        formData.append('challenge_items', JSON.stringify(challengeItems));

        // Add the _method field for PUT request
        formData.append('_method', 'PUT');

        // Get CSRF token
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Debug: Log final form data
        console.log('Form data entries:');
        for (let [key, value] of formData.entries()) {
            console.log(`${key}: ${value}`);
        }

        // Submit the form using fetch
        fetch(this.action, {
            method: 'POST', // Always use POST for Laravel's form method spoofing
            body: formData,
            headers: {
                'X-CSRF-TOKEN': token,
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            },
            credentials: 'same-origin'
        })
        .then(async response => {
            const data = await response.json();
            if (!response.ok) {
                console.error('Response error:', {
                    status: response.status,
                    data: data
                });
                return Promise.reject(data);
            }
            return data;
        })
        .then(data => {
            if (data.success) {
                // Show success message
                const successMessage = document.createElement('div');
                successMessage.className = 'bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 px-4 py-3 rounded-lg relative mb-4';
                successMessage.innerHTML = `
                    <span class="block sm:inline">Sector updated successfully!</span>
                `;
                const form = document.getElementById('sectorForm');
                form.parentNode.insertBefore(successMessage, form);

                // Scroll to top
                window.scrollTo(0, 0);

                // Reload after a short delay
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            } else {
                console.error('Error:', data);
                throw new Error(data.error || 'Error updating sector');
            }
        })
        .catch(error => {
            console.error('Caught error:', error);
            
            // Show error message
            const errorMessage = document.createElement('div');
            errorMessage.className = 'bg-chicken-comb-50 border border-chicken-comb-300 text-chicken-comb-700 px-4 py-3 rounded-lg relative mb-4';
            
            let errorHtml = '<strong class="font-bold">Error!</strong><br>';
            
            if (error.errors) {
                // Handle validation errors
                Object.entries(error.errors).forEach(([field, messages]) => {
                    errorHtml += `<span class="block">${field}: ${messages.join(', ')}</span>`;
                });
            } else {
                errorHtml += `<span class="block">${error.message || 'Error updating sector. Please try again.'}</span>`;
            }
            
            errorMessage.innerHTML = errorHtml;
            
            const form = document.getElementById('sectorForm');
            form.parentNode.insertBefore(errorMessage, form);

            // Scroll to top to show error message
            window.scrollTo(0, 0);

            // If we have validation errors, highlight the fields
            if (error.errors) {
                Object.keys(error.errors).forEach(field => {
                    const input = document.querySelector(`[name="${field}"]`);
                    if (input) {
                        input.classList.add('border-chicken-comb-600');
                        const errorText = document.createElement('p');
                        errorText.className = 'mt-1 text-body-sm text-chicken-comb-600';
                        errorText.textContent = error.errors[field][0];
                        input.parentNode.appendChild(errorText);
                    }
                });
            }
        });
    });
</script>
@endpush
@endsection 