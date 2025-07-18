@extends('layouts.app')

@section('title', 'Component Library - Festa Design System')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50">
    <!-- Header Section -->
    <div class="max-w-6xl mx-auto px-8 py-16">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <ol class="flex items-center space-x-2 text-body-sm">
                <li><a href="{{ route('resources.design-system') }}" class="text-pepper-green-600 hover:text-pepper-green-700">Design System</a></li>
                <li class="text-the-end-400">/</li>
                <li class="text-the-end-900 font-medium">Component Library</li>
            </ol>
        </nav>
        
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-h1 font-bold text-the-end-900 mb-4">Component Library</h1>
            <p class="text-body-lg text-the-end-600 max-w-2xl mx-auto mb-8">
                Explore our comprehensive component library organized by Atomic Design methodology. 
                From atoms to complete pages, discover the building blocks of the Festa Design System.
            </p>
            <x-core.tag variant="success" withIcon="true">30+ Components Available</x-core.tag>
        </div>
    </div>

    <!-- Atomic Design Navigation -->
    <div class="max-w-6xl mx-auto px-8 mb-16">
        <div class="bg-white/80 backdrop-blur-sm border border-white-smoke-300 rounded-2xl p-6">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                <a href="#atoms" class="flex flex-col items-center p-4 rounded-xl bg-pepper-green-50 hover:bg-pepper-green-100 transition-colors group">
                    <div class="w-8 h-8 bg-pepper-green-600 rounded-full mb-2 group-hover:scale-110 transition-transform"></div>
                    <span class="text-body-sm font-medium text-pepper-green-700">Atoms</span>
                    <span class="text-body-sm text-pepper-green-600">8 items</span>
                </a>
                <a href="#molecules" class="flex flex-col items-center p-4 rounded-xl bg-chicken-comb-50 hover:bg-chicken-comb-100 transition-colors group">
                    <div class="w-8 h-8 bg-chicken-comb-600 rounded-full mb-2 group-hover:scale-110 transition-transform"></div>
                    <span class="text-body-sm font-medium text-chicken-comb-700">Molecules</span>
                    <span class="text-body-sm text-chicken-comb-600">12 items</span>
                </a>
                <a href="#organisms" class="flex flex-col items-center p-4 rounded-xl bg-apocalyptic-orange-50 hover:bg-apocalyptic-orange-100 transition-colors group">
                    <div class="w-8 h-8 bg-apocalyptic-orange-600 rounded-full mb-2 group-hover:scale-110 transition-transform"></div>
                    <span class="text-body-sm font-medium text-apocalyptic-orange-700">Organisms</span>
                    <span class="text-body-sm text-apocalyptic-orange-600">8 items</span>
                </a>
                <a href="#templates" class="flex flex-col items-center p-4 rounded-xl bg-pot-of-gold-50 hover:bg-pot-of-gold-100 transition-colors group">
                    <div class="w-8 h-8 bg-pot-of-gold-600 rounded-full mb-2 group-hover:scale-110 transition-transform"></div>
                    <span class="text-body-sm font-medium text-pot-of-gold-700">Templates</span>
                    <span class="text-body-sm text-pot-of-gold-600">4 items</span>
                </a>
                <a href="#pages" class="flex flex-col items-center p-4 rounded-xl bg-the-end-50 hover:bg-the-end-100 transition-colors group">
                    <div class="w-8 h-8 bg-the-end-600 rounded-full mb-2 group-hover:scale-110 transition-transform"></div>
                    <span class="text-body-sm font-medium text-the-end-700">Pages</span>
                    <span class="text-body-sm text-the-end-600">6 items</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Atoms Section -->
    <section id="atoms" class="max-w-6xl mx-auto px-8 py-16">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-12 h-12 bg-pepper-green-600 rounded-full flex items-center justify-center">
                    <div class="w-4 h-4 bg-white rounded-full"></div>
                </div>
                <div>
                    <h2 class="text-h2 font-bold text-the-end-900">Atoms</h2>
                    <p class="text-body text-the-end-600">Basic building blocks of the design system</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Colors -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Color Palette</h3>
                    <div class="grid grid-cols-3 gap-3 mb-4">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-pepper-green-600 rounded-xl mx-auto mb-2"></div>
                            <p class="text-body-sm text-the-end-600">Pepper Green</p>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-chicken-comb-600 rounded-xl mx-auto mb-2"></div>
                            <p class="text-body-sm text-the-end-600">Chicken Comb</p>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-apocalyptic-orange-600 rounded-xl mx-auto mb-2"></div>
                            <p class="text-body-sm text-the-end-600">Apocalyptic Orange</p>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-pot-of-gold-600 rounded-xl mx-auto mb-2"></div>
                            <p class="text-body-sm text-the-end-600">Pot of Gold</p>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-white-smoke-600 border border-white-smoke-300 rounded-xl mx-auto mb-2"></div>
                            <p class="text-body-sm text-the-end-600">White Smoke</p>
                        </div>
                        <div class="text-center">
                            <div class="w-12 h-12 bg-the-end-600 rounded-xl mx-auto mb-2"></div>
                            <p class="text-body-sm text-the-end-600">The End</p>
                        </div>
                    </div>
                    <x-core.button variant="secondary" size="small" href="{{ route('resources.design-system.tokens') }}">
                        View All Colors
                    </x-core.button>
                </div>

                <!-- Typography -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Typography</h3>
                    <div class="space-y-3 mb-4">
                        <div class="flex items-center justify-between">
                            <h1 class="text-h1 text-the-end-900">Aa</h1>
                            <span class="text-body-sm text-the-end-600">H1 / 48px</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <h2 class="text-h2 text-the-end-900">Aa</h2>
                            <span class="text-body-sm text-the-end-600">H2 / 36px</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-body-lg text-the-end-900">Aa</span>
                            <span class="text-body-sm text-the-end-600">Body Large / 20px</span>
                        </div>
                    </div>
                    <x-core.button variant="secondary" size="small" href="{{ route('resources.design-system.tokens') }}">
                        View Typography Scale
                    </x-core.button>
                </div>

                <!-- Icons -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Icons</h3>
                    <div class="grid grid-cols-4 gap-4 mb-4">
                        <div class="flex justify-center">
                            <svg class="w-6 h-6 text-the-end-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div class="flex justify-center">
                            <svg class="w-6 h-6 text-the-end-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </div>
                        <div class="flex justify-center">
                            <svg class="w-6 h-6 text-the-end-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                        </div>
                        <div class="flex justify-center">
                            <svg class="w-6 h-6 text-the-end-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    <x-core.tag>Heroicons Library</x-core.tag>
                </div>

                <!-- Spacing -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Spacing Scale</h3>
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-pepper-green-600 rounded"></div>
                            <span class="text-body-sm text-the-end-600">4px</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 bg-pepper-green-600 rounded"></div>
                            <span class="text-body-sm text-the-end-600">16px</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-pepper-green-600 rounded"></div>
                            <span class="text-body-sm text-the-end-600">32px</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-16 h-16 bg-pepper-green-600 rounded"></div>
                            <span class="text-body-sm text-the-end-600">64px</span>
                        </div>
                    </div>
                    <x-core.tag>Tailwind Scale</x-core.tag>
                </div>
            </div>
        </div>
    </section>

    <!-- Molecules Section -->
    <section id="molecules" class="max-w-6xl mx-auto px-8 py-16 bg-white/50">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-12 h-12 bg-chicken-comb-600 rounded-full flex items-center justify-center">
                    <div class="flex gap-1">
                        <div class="w-2 h-2 bg-white rounded-full"></div>
                        <div class="w-2 h-2 bg-white rounded-full"></div>
                    </div>
                </div>
                <div>
                    <h2 class="text-h2 font-bold text-the-end-900">Molecules</h2>
                    <p class="text-body text-the-end-600">Simple groups of UI elements functioning together</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Buttons -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Buttons</h3>
                    <div class="space-y-4 mb-4">
                        <div class="flex flex-wrap gap-3">
                            <x-core.button variant="primary" size="large">Primary</x-core.button>
                            <x-core.button variant="secondary" size="large">Secondary</x-core.button>
                            <x-core.button variant="neutral" size="large">Neutral</x-core.button>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <x-core.button variant="primary" size="medium">Medium</x-core.button>
                            <x-core.button variant="secondary" size="small">Small</x-core.button>
                        </div>
                    </div>
                    <x-core.tag variant="success">3 Variants, 3 Sizes</x-core.tag>
                </div>

                <!-- Tags -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Tags</h3>
                    <div class="space-y-3 mb-4">
                        <div class="flex flex-wrap gap-2">
                            <x-core.tag variant="success">Success</x-core.tag>
                            <x-core.tag variant="warning">Warning</x-core.tag>
                            <x-core.tag variant="error">Error</x-core.tag>
                            <x-core.tag variant="info">Info</x-core.tag>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <x-core.tag>Default</x-core.tag>
                            <x-core.tag variant="success" withIcon="true">With Icon</x-core.tag>
                        </div>
                    </div>
                    <x-core.tag variant="info">5 Variants, Icon Support</x-core.tag>
                </div>

                <!-- Form Elements -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Form Elements</h3>
                    <div class="space-y-4 mb-4">
                        <x-core.text-input name="example" placeholder="Text input example" />
                        <x-core.select name="example_select">
                            <option>Select an option</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                        </x-core.select>
                        <x-core.textarea name="example_textarea" rows="3" placeholder="Textarea example"></x-core.textarea>
                    </div>
                    <x-core.tag variant="warning">Input, Select, Textarea</x-core.tag>
                </div>

                <!-- Cards -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Card Components</h3>
                    <div class="space-y-3 mb-4">
                        <div class="bg-white-smoke-50 border border-white-smoke-200 rounded-xl p-4">
                            <h4 class="text-body-lg font-semibold text-the-end-900 mb-1">Basic Card</h4>
                            <p class="text-body-sm text-the-end-600">Simple card with title and content</p>
                        </div>
                        <div class="bg-pepper-green-50 border border-pepper-green-200 rounded-xl p-4">
                            <h4 class="text-body-lg font-semibold text-pepper-green-900 mb-1">Themed Card</h4>
                            <p class="text-body-sm text-pepper-green-700">Card with color theming</p>
                        </div>
                    </div>
                    <x-core.tag>Blog, Work, Service Cards</x-core.tag>
                </div>
            </div>
        </div>
    </section>

    <!-- Organisms Section -->
    <section id="organisms" class="max-w-6xl mx-auto px-8 py-16">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-12 h-12 bg-apocalyptic-orange-600 rounded-full flex items-center justify-center">
                    <div class="grid grid-cols-2 gap-1">
                        <div class="w-2 h-2 bg-white rounded-full"></div>
                        <div class="w-2 h-2 bg-white rounded-full"></div>
                        <div class="w-2 h-2 bg-white rounded-full"></div>
                        <div class="w-2 h-2 bg-white rounded-full"></div>
                    </div>
                </div>
                <div>
                    <h2 class="text-h2 font-bold text-the-end-900">Organisms</h2>
                    <p class="text-body text-the-end-600">Complex UI components made of groups of molecules</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Header Component -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Header Component</h3>
                    <div class="bg-white-smoke-50 border border-white-smoke-200 rounded-xl p-4 mb-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-8 h-8 bg-chicken-comb-600 rounded"></div>
                                <span class="text-body font-semibold text-the-end-900">Logo</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-body-sm text-the-end-600">Home</span>
                                <span class="text-body-sm text-the-end-600">About</span>
                                <span class="text-body-sm text-the-end-600">Services</span>
                                <div class="w-6 h-6 bg-the-end-300 rounded"></div>
                            </div>
                        </div>
                    </div>
                    <x-core.tag>Navigation, Logo, Mobile Menu</x-core.tag>
                </div>

                <!-- Blog Grid -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Blog Grid</h3>
                    <div class="grid grid-cols-2 gap-2 mb-4">
                        <div class="bg-white-smoke-50 border border-white-smoke-200 rounded-lg p-3">
                            <div class="w-full h-12 bg-the-end-200 rounded mb-2"></div>
                            <div class="w-3/4 h-2 bg-the-end-300 rounded mb-1"></div>
                            <div class="w-1/2 h-2 bg-the-end-200 rounded"></div>
                        </div>
                        <div class="bg-white-smoke-50 border border-white-smoke-200 rounded-lg p-3">
                            <div class="w-full h-12 bg-the-end-200 rounded mb-2"></div>
                            <div class="w-3/4 h-2 bg-the-end-300 rounded mb-1"></div>
                            <div class="w-1/2 h-2 bg-the-end-200 rounded"></div>
                        </div>
                    </div>
                    <x-core.tag variant="info">Article Cards, Categories</x-core.tag>
                </div>

                <!-- Work Portfolio -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Work Portfolio</h3>
                    <div class="space-y-3 mb-4">
                        <div class="bg-white-smoke-50 border border-white-smoke-200 rounded-xl p-4">
                            <div class="flex items-center justify-between mb-2">
                                <div class="w-3/4 h-3 bg-the-end-300 rounded"></div>
                                <div class="flex gap-1">
                                    <div class="w-12 h-4 bg-pepper-green-200 rounded-full"></div>
                                    <div class="w-8 h-4 bg-chicken-comb-200 rounded-full"></div>
                                </div>
                            </div>
                            <div class="w-1/2 h-2 bg-the-end-200 rounded"></div>
                        </div>
                    </div>
                    <x-core.tag variant="warning">Project Cards, Filters, Tags</x-core.tag>
                </div>

                <!-- Contact Form -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Contact Forms</h3>
                    <div class="space-y-3 mb-4">
                        <div class="w-full h-8 bg-white-smoke-100 border border-white-smoke-300 rounded"></div>
                        <div class="w-full h-8 bg-white-smoke-100 border border-white-smoke-300 rounded"></div>
                        <div class="w-full h-16 bg-white-smoke-100 border border-white-smoke-300 rounded"></div>
                        <div class="w-24 h-8 bg-chicken-comb-600 rounded-full"></div>
                    </div>
                    <x-core.tag variant="error">Form Validation, Submit</x-core.tag>
                </div>
            </div>
        </div>
    </section>

    <!-- Templates Section -->
    <section id="templates" class="max-w-6xl mx-auto px-8 py-16 bg-white/50">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-12 h-12 bg-pot-of-gold-600 rounded-full flex items-center justify-center">
                    <div class="w-8 h-6 bg-white rounded border-2 border-white"></div>
                </div>
                <div>
                    <h2 class="text-h2 font-bold text-the-end-900">Templates</h2>
                    <p class="text-body text-the-end-600">Page-level layouts and structures</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Landing Page Template -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Landing Page</h3>
                    <div class="bg-white-smoke-50 border border-white-smoke-200 rounded-xl p-4 mb-4">
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div class="w-16 h-4 bg-chicken-comb-200 rounded"></div>
                                <div class="flex gap-1">
                                    <div class="w-3 h-3 bg-the-end-200 rounded"></div>
                                    <div class="w-3 h-3 bg-the-end-200 rounded"></div>
                                    <div class="w-3 h-3 bg-the-end-200 rounded"></div>
                                </div>
                            </div>
                            <div class="w-full h-16 bg-pepper-green-100 rounded"></div>
                            <div class="grid grid-cols-3 gap-2">
                                <div class="h-8 bg-white-smoke-200 rounded"></div>
                                <div class="h-8 bg-white-smoke-200 rounded"></div>
                                <div class="h-8 bg-white-smoke-200 rounded"></div>
                            </div>
                        </div>
                    </div>
                    <x-core.tag>Hero, Features, CTA</x-core.tag>
                </div>

                <!-- Article Layout -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Article Layout</h3>
                    <div class="bg-white-smoke-50 border border-white-smoke-200 rounded-xl p-4 mb-4">
                        <div class="space-y-2">
                            <div class="w-3/4 h-4 bg-the-end-300 rounded"></div>
                            <div class="w-1/2 h-2 bg-the-end-200 rounded"></div>
                            <div class="w-full h-12 bg-the-end-100 rounded mt-3"></div>
                            <div class="space-y-1">
                                <div class="w-full h-1 bg-the-end-200 rounded"></div>
                                <div class="w-full h-1 bg-the-end-200 rounded"></div>
                                <div class="w-3/4 h-1 bg-the-end-200 rounded"></div>
                            </div>
                        </div>
                    </div>
                    <x-core.tag variant="info">Header, Content, Related</x-core.tag>
                </div>

                <!-- Dashboard Layout -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Dashboard Layout</h3>
                    <div class="bg-white-smoke-50 border border-white-smoke-200 rounded-xl p-4 mb-4">
                        <div class="flex gap-2">
                            <div class="w-1/4 h-16 bg-the-end-300 rounded"></div>
                            <div class="flex-1 space-y-2">
                                <div class="w-full h-6 bg-the-end-200 rounded"></div>
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="h-4 bg-white-smoke-300 rounded"></div>
                                    <div class="h-4 bg-white-smoke-300 rounded"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-core.tag variant="warning">Sidebar, Content, Grid</x-core.tag>
                </div>

                <!-- Service Page -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-6">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Service Page</h3>
                    <div class="bg-white-smoke-50 border border-white-smoke-200 rounded-xl p-4 mb-4">
                        <div class="space-y-3">
                            <div class="w-full h-8 bg-pepper-green-100 rounded"></div>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="h-6 bg-white-smoke-200 rounded"></div>
                                <div class="h-6 bg-white-smoke-200 rounded"></div>
                            </div>
                            <div class="w-full h-6 bg-chicken-comb-100 rounded"></div>
                        </div>
                    </div>
                    <x-core.tag variant="success">Hero, Services, CTA</x-core.tag>
                </div>
            </div>
        </div>
    </section>

    <!-- Pages Section -->
    <section id="pages" class="max-w-6xl mx-auto px-8 py-16">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-12 h-12 bg-the-end-600 rounded-full flex items-center justify-center">
                    <div class="w-8 h-8 bg-white rounded border border-white">
                        <div class="w-full h-2 bg-the-end-600 rounded-t"></div>
                    </div>
                </div>
                <div>
                    <h2 class="text-h2 font-bold text-the-end-900">Pages</h2>
                    <p class="text-body text-the-end-600">Complete page implementations</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Homepage -->
                <a href="{{ route('home') }}" target="_blank" class="bg-white border border-white-smoke-300 rounded-2xl p-6 hover:shadow-md transition-shadow group">
                    <div class="w-full h-32 bg-gradient-to-br from-pepper-green-100 to-chicken-comb-100 rounded-xl mb-4 flex items-center justify-center">
                        <span class="text-body-sm font-medium text-the-end-600">Homepage</span>
                    </div>
                    <h3 class="text-body-lg font-semibold text-the-end-900 mb-2 group-hover:text-pepper-green-600">Homepage</h3>
                    <p class="text-body-sm text-the-end-600">Hero, work showcase, blog preview</p>
                </a>

                <!-- Services -->
                <a href="{{ route('services') }}" target="_blank" class="bg-white border border-white-smoke-300 rounded-2xl p-6 hover:shadow-md transition-shadow group">
                    <div class="w-full h-32 bg-gradient-to-br from-chicken-comb-100 to-apocalyptic-orange-100 rounded-xl mb-4 flex items-center justify-center">
                        <span class="text-body-sm font-medium text-the-end-600">Services</span>
                    </div>
                    <h3 class="text-body-lg font-semibold text-the-end-900 mb-2 group-hover:text-pepper-green-600">Services</h3>
                    <p class="text-body-sm text-the-end-600">Service cards, sectors, expertise</p>
                </a>

                <!-- Work Portfolio -->
                <a href="{{ route('work') }}" target="_blank" class="bg-white border border-white-smoke-300 rounded-2xl p-6 hover:shadow-md transition-shadow group">
                    <div class="w-full h-32 bg-gradient-to-br from-apocalyptic-orange-100 to-pot-of-gold-100 rounded-xl mb-4 flex items-center justify-center">
                        <span class="text-body-sm font-medium text-the-end-600">Work</span>
                    </div>
                    <h3 class="text-body-lg font-semibold text-the-end-900 mb-2 group-hover:text-pepper-green-600">Work Portfolio</h3>
                    <p class="text-body-sm text-the-end-600">Project cards, filters, case studies</p>
                </a>

                <!-- About -->
                <a href="{{ route('about') }}" target="_blank" class="bg-white border border-white-smoke-300 rounded-2xl p-6 hover:shadow-md transition-shadow group">
                    <div class="w-full h-32 bg-gradient-to-br from-pot-of-gold-100 to-white-smoke-100 rounded-xl mb-4 flex items-center justify-center">
                        <span class="text-body-sm font-medium text-the-end-600">About</span>
                    </div>
                    <h3 class="text-body-lg font-semibold text-the-end-900 mb-2 group-hover:text-pepper-green-600">About</h3>
                    <p class="text-body-sm text-the-end-600">Team, process, values</p>
                </a>

                <!-- Blog -->
                <a href="{{ route('resources.blog') }}" target="_blank" class="bg-white border border-white-smoke-300 rounded-2xl p-6 hover:shadow-md transition-shadow group">
                    <div class="w-full h-32 bg-gradient-to-br from-white-smoke-100 to-the-end-100 rounded-xl mb-4 flex items-center justify-center">
                        <span class="text-body-sm font-medium text-the-end-600">Blog</span>
                    </div>
                    <h3 class="text-body-lg font-semibold text-the-end-900 mb-2 group-hover:text-pepper-green-600">Blog</h3>
                    <p class="text-body-sm text-the-end-600">Articles, categories, featured posts</p>
                </a>

                <!-- Contact -->
                <a href="{{ route('contact') }}" target="_blank" class="bg-white border border-white-smoke-300 rounded-2xl p-6 hover:shadow-md transition-shadow group">
                    <div class="w-full h-32 bg-gradient-to-br from-the-end-100 to-pepper-green-100 rounded-xl mb-4 flex items-center justify-center">
                        <span class="text-body-sm font-medium text-the-end-600">Contact</span>
                    </div>
                    <h3 class="text-body-lg font-semibold text-the-end-900 mb-2 group-hover:text-pepper-green-600">Contact</h3>
                    <p class="text-body-sm text-the-end-600">Contact forms, info</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Back to Design System -->
    <div class="max-w-6xl mx-auto px-8 py-16">
        <div class="text-center">
            <x-core.button variant="secondary" size="large" href="{{ route('resources.design-system') }}">
                ← Back to Design System
            </x-core.button>
        </div>
    </div>
</div>
@endsection