@props([
    'sectorOptions' => [],
    'industryOptions' => [],
    'sdgOptions' => [],
    'searchPlaceholder' => 'Search projects...'
])

<section class="sticky top-0 z-50 py-8 px-4 md:px-8 lg:px-16 border-t border-b border-the-end-100 bg-white/80 backdrop-blur-lg [&:has(+ section:is(.testimonial))]:relative">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row gap-4 items-start md:items-center justify-between">
            <!-- Filter options -->
            <div class="flex flex-wrap gap-3">
                <!-- Sector select -->
                <div class="w-auto min-w-[160px]">
                    <x-core.select 
                        name="sector" 
                        placeholder="All sectors"
                        class="min-w-[160px]"
                    >
                        @foreach($sectorOptions as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </x-core.select>
                </div>

                <!-- Industry select -->
                <div class="w-auto min-w-[160px]">
                    <x-core.select 
                        name="industry" 
                        placeholder="All industries"
                        class="min-w-[160px]"
                    >
                        @foreach($industryOptions as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </x-core.select>
                </div>

                <!-- SDG select -->
                <div class="w-auto min-w-[160px]">
                    <x-core.select 
                        name="sdg" 
                        placeholder="SDG goals"
                        class="min-w-[160px]"
                    >
                        @foreach($sdgOptions as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </x-core.select>
                </div>
            </div>

            <!-- Search field -->
            <div class="w-full md:w-auto">
                <x-core.input 
                    name="search" 
                    placeholder="{{ $searchPlaceholder }}"
                    :leadingIcon="true"
                    class="min-w-[200px]"
                >
                    <x-slot name="leadingIcon">
                        <svg class="h-5 w-5 text-the-end-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </x-slot>
                </x-core.input>
            </div>
        </div>
    </div>
</section> 