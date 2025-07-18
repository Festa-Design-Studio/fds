@extends('layouts.app')

@section('title', 'Guidelines - Festa Design System')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-apocalyptic-orange-50 via-white-smoke-50 to-pot-of-gold-50">
    <!-- Header Section -->
    <div class="max-w-6xl mx-auto px-8 py-16">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <ol class="flex items-center space-x-2 text-body-sm">
                <li><a href="{{ route('resources.design-system') }}" class="text-pepper-green-600 hover:text-pepper-green-700">Design System</a></li>
                <li class="text-the-end-400">/</li>
                <li class="text-the-end-900 font-medium">Guidelines</li>
            </ol>
        </nav>
        
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-h1 font-bold text-the-end-900 mb-4">Design Guidelines</h1>
            <p class="text-body-lg text-the-end-600 max-w-2xl mx-auto mb-8">
                Comprehensive guidelines for using the Festa Design System effectively. 
                Learn best practices, accessibility standards, and implementation patterns.
            </p>
            <x-core.tag variant="info" withIcon="true">Accessibility First, Purpose-Driven Design</x-core.tag>
        </div>
    </div>

    <!-- Guidelines Navigation -->
    <div class="max-w-6xl mx-auto px-8 mb-16">
        <div class="bg-white/80 backdrop-blur-sm border border-white-smoke-300 rounded-2xl p-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="#principles" class="flex flex-col items-center p-4 rounded-xl bg-apocalyptic-orange-50 hover:bg-apocalyptic-orange-100 transition-colors group">
                    <div class="w-8 h-8 bg-apocalyptic-orange-600 rounded-full mb-2 group-hover:scale-110 transition-transform"></div>
                    <span class="text-body-sm font-medium text-apocalyptic-orange-700">Principles</span>
                    <span class="text-body-sm text-apocalyptic-orange-600">Design philosophy</span>
                </a>
                <a href="#accessibility" class="flex flex-col items-center p-4 rounded-xl bg-pepper-green-50 hover:bg-pepper-green-100 transition-colors group">
                    <div class="w-8 h-8 bg-pepper-green-600 rounded-full mb-2 group-hover:scale-110 transition-transform"></div>
                    <span class="text-body-sm font-medium text-pepper-green-700">Accessibility</span>
                    <span class="text-body-sm text-pepper-green-600">Inclusive design</span>
                </a>
                <a href="#usage" class="flex flex-col items-center p-4 rounded-xl bg-chicken-comb-50 hover:bg-chicken-comb-100 transition-colors group">
                    <div class="w-8 h-8 bg-chicken-comb-600 rounded-full mb-2 group-hover:scale-110 transition-transform"></div>
                    <span class="text-body-sm font-medium text-chicken-comb-700">Usage</span>
                    <span class="text-body-sm text-chicken-comb-600">Best practices</span>
                </a>
                <a href="#implementation" class="flex flex-col items-center p-4 rounded-xl bg-pot-of-gold-50 hover:bg-pot-of-gold-100 transition-colors group">
                    <div class="w-8 h-8 bg-pot-of-gold-600 rounded-full mb-2 group-hover:scale-110 transition-transform"></div>
                    <span class="text-body-sm font-medium text-pot-of-gold-700">Implementation</span>
                    <span class="text-body-sm text-pot-of-gold-600">Code standards</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Design Principles Section -->
    <section id="principles" class="max-w-6xl mx-auto px-8 py-16">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 bg-apocalyptic-orange-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-h2 font-bold text-the-end-900">Design Principles</h2>
                    <p class="text-body text-the-end-600">Core philosophy that guides every design decision</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Purpose-Driven Design -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <div class="w-16 h-16 bg-pepper-green-100 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Purpose-Driven Design</h3>
                    <p class="text-body text-the-end-600 mb-6">Every design decision serves a meaningful purpose. We create solutions that amplify social impact and drive positive change.</p>
                    <div class="space-y-2">
                        <x-core.tag variant="success">Social Impact</x-core.tag>
                        <x-core.tag variant="success">Meaningful Solutions</x-core.tag>
                    </div>
                </div>

                <!-- Human-Centered Approach -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <div class="w-16 h-16 bg-chicken-comb-100 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-chicken-comb-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Human-Centered Approach</h3>
                    <p class="text-body text-the-end-600 mb-6">We design for real people with diverse needs and backgrounds. Empathy and understanding drive our design process.</p>
                    <div class="space-y-2">
                        <x-core.tag variant="warning">User Research</x-core.tag>
                        <x-core.tag variant="warning">Inclusive Design</x-core.tag>
                    </div>
                </div>

                <!-- Impact-Focused Solutions -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <div class="w-16 h-16 bg-apocalyptic-orange-100 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-apocalyptic-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Impact-Focused Solutions</h3>
                    <p class="text-body text-the-end-600 mb-6">We measure success by the positive impact our designs create. Every solution is optimized for measurable outcomes.</p>
                    <div class="space-y-2">
                        <x-core.tag variant="info">Measurable Impact</x-core.tag>
                        <x-core.tag variant="info">Data-Driven</x-core.tag>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accessibility Section -->
    <section id="accessibility" class="max-w-6xl mx-auto px-8 py-16 bg-white/50">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 bg-pepper-green-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-h2 font-bold text-the-end-900">Accessibility Standards</h2>
                    <p class="text-body text-the-end-600">WCAG 2.1 AA compliance and inclusive design practices</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Color Contrast -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Color Contrast</h3>
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-3">Minimum Requirements</h4>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-3 bg-pepper-green-50 rounded-lg">
                                    <span class="text-body text-the-end-900">Normal text</span>
                                    <x-core.tag variant="success">4.5:1</x-core.tag>
                                </div>
                                <div class="flex items-center justify-between p-3 bg-pepper-green-50 rounded-lg">
                                    <span class="text-body text-the-end-900">Large text (18px+)</span>
                                    <x-core.tag variant="success">3:1</x-core.tag>
                                </div>
                                <div class="flex items-center justify-between p-3 bg-pepper-green-50 rounded-lg">
                                    <span class="text-body text-the-end-900">UI components</span>
                                    <x-core.tag variant="success">3:1</x-core.tag>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-3">Color Examples</h4>
                            <div class="space-y-2">
                                <div class="flex items-center gap-3 p-3 bg-the-end-900 text-white rounded-lg">
                                    <div class="w-4 h-4 bg-white rounded"></div>
                                    <span>White on The End 900</span>
                                    <x-core.tag>15.3:1</x-core.tag>
                                </div>
                                <div class="flex items-center gap-3 p-3 bg-pepper-green-600 text-white rounded-lg">
                                    <div class="w-4 h-4 bg-white rounded"></div>
                                    <span>White on Pepper Green 600</span>
                                    <x-core.tag>4.7:1</x-core.tag>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Keyboard Navigation -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Keyboard Navigation</h3>
                    <div class="space-y-4">
                        <div class="p-4 border-l-4 border-pepper-green-600 bg-pepper-green-50">
                            <h4 class="font-semibold text-pepper-green-900 mb-2">✓ Do</h4>
                            <ul class="space-y-1 text-body-sm text-pepper-green-800">
                                <li>• Provide visible focus indicators</li>
                                <li>• Support Tab and Shift+Tab navigation</li>
                                <li>• Use proper ARIA labels</li>
                                <li>• Implement logical tab order</li>
                            </ul>
                        </div>
                        
                        <div class="p-4 border-l-4 border-chicken-comb-600 bg-chicken-comb-50">
                            <h4 class="font-semibold text-chicken-comb-900 mb-2">✗ Don't</h4>
                            <ul class="space-y-1 text-body-sm text-chicken-comb-800">
                                <li>• Remove focus outlines without alternatives</li>
                                <li>• Create keyboard traps</li>
                                <li>• Skip interactive elements in tab order</li>
                                <li>• Use only color to convey information</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Screen Readers -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Screen Reader Support</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-3">Semantic HTML</h4>
                            <div class="bg-the-end-50 p-4 rounded-lg">
                                <code class="text-body-sm text-the-end-800">
                                    &lt;button&gt;Submit Form&lt;/button&gt;<br>
                                    &lt;nav aria-label="Main navigation"&gt;<br>
                                    &lt;main role="main"&gt;<br>
                                    &lt;h1&gt;Page Title&lt;/h1&gt;
                                </code>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-3">ARIA Attributes</h4>
                            <div class="space-y-2 text-body-sm">
                                <div class="flex justify-between p-2 bg-white-smoke-50 rounded">
                                    <span>aria-label</span>
                                    <span class="text-the-end-600">Accessible name</span>
                                </div>
                                <div class="flex justify-between p-2 bg-white-smoke-50 rounded">
                                    <span>aria-describedby</span>
                                    <span class="text-the-end-600">Additional description</span>
                                </div>
                                <div class="flex justify-between p-2 bg-white-smoke-50 rounded">
                                    <span>aria-expanded</span>
                                    <span class="text-the-end-600">Collapsible state</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testing -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Accessibility Testing</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-3">Testing Tools</h4>
                            <div class="space-y-2">
                                <x-core.tag variant="info">WAVE Browser Extension</x-core.tag>
                                <x-core.tag variant="info">axe DevTools</x-core.tag>
                                <x-core.tag variant="info">Lighthouse Accessibility</x-core.tag>
                                <x-core.tag variant="info">VoiceOver/NVDA Testing</x-core.tag>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-3">Testing Checklist</h4>
                            <div class="space-y-2 text-body-sm">
                                <div class="flex items-center gap-2">
                                    <div class="w-4 h-4 bg-pepper-green-600 rounded-sm flex items-center justify-center">
                                        <svg class="w-2 h-2 text-white" fill="currentColor" viewBox="0 0 8 8">
                                            <path d="M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z"/>
                                        </svg>
                                    </div>
                                    <span>Keyboard navigation works</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-4 h-4 bg-pepper-green-600 rounded-sm flex items-center justify-center">
                                        <svg class="w-2 h-2 text-white" fill="currentColor" viewBox="0 0 8 8">
                                            <path d="M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z"/>
                                        </svg>
                                    </div>
                                    <span>Screen reader compatibility</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-4 h-4 bg-pepper-green-600 rounded-sm flex items-center justify-center">
                                        <svg class="w-2 h-2 text-white" fill="currentColor" viewBox="0 0 8 8">
                                            <path d="M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z"/>
                                        </svg>
                                    </div>
                                    <span>Color contrast meets standards</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-4 h-4 bg-pepper-green-600 rounded-sm flex items-center justify-center">
                                        <svg class="w-2 h-2 text-white" fill="currentColor" viewBox="0 0 8 8">
                                            <path d="M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z"/>
                                        </svg>
                                    </div>
                                    <span>No automatic motion triggers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Usage Guidelines Section -->
    <section id="usage" class="max-w-6xl mx-auto px-8 py-16">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 bg-chicken-comb-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-h2 font-bold text-the-end-900">Usage Best Practices</h2>
                    <p class="text-body text-the-end-600">How to use components effectively and consistently</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Button Usage -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Button Guidelines</h3>
                    
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-4">When to Use Each Variant</h4>
                            <div class="space-y-3">
                                <div class="flex items-center gap-4 p-3 bg-chicken-comb-50 rounded-lg">
                                    <x-core.button variant="primary" size="small">Primary</x-core.button>
                                    <span class="text-body-sm text-the-end-700">Main actions, form submissions</span>
                                </div>
                                <div class="flex items-center gap-4 p-3 bg-pepper-green-50 rounded-lg">
                                    <x-core.button variant="secondary" size="small">Secondary</x-core.button>
                                    <span class="text-body-sm text-the-end-700">Alternative actions, navigation</span>
                                </div>
                                <div class="flex items-center gap-4 p-3 bg-white-smoke-50 rounded-lg">
                                    <x-core.button variant="neutral" size="small">Neutral</x-core.button>
                                    <span class="text-body-sm text-the-end-700">Subtle actions, cancel buttons</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4 border-l-4 border-chicken-comb-600 bg-chicken-comb-50">
                            <h4 class="font-semibold text-chicken-comb-900 mb-2">⚠️ Important</h4>
                            <p class="text-body-sm text-chicken-comb-800">Use only one primary button per section to maintain clear hierarchy.</p>
                        </div>
                    </div>
                </div>

                <!-- Typography Usage -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Typography Guidelines</h3>
                    
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-4">Heading Hierarchy</h4>
                            <div class="space-y-3">
                                <div class="p-3 bg-the-end-50 rounded-lg">
                                    <h1 class="text-h1 text-the-end-900">H1</h1>
                                    <span class="text-body-sm text-the-end-600">Page titles, one per page</span>
                                </div>
                                <div class="p-3 bg-the-end-50 rounded-lg">
                                    <h2 class="text-h2 text-the-end-900">H2</h2>
                                    <span class="text-body-sm text-the-end-600">Section headers</span>
                                </div>
                                <div class="p-3 bg-the-end-50 rounded-lg">
                                    <h3 class="text-h3 text-the-end-900">H3</h3>
                                    <span class="text-body-sm text-the-end-600">Subsection headers</span>
                                </div>
                                <div class="p-3 bg-the-end-50 rounded-lg">
                                    <h4 class="text-h4 text-the-end-900">H4</h4>
                                    <span class="text-body-sm text-the-end-600">Component titles</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4 border-l-4 border-pepper-green-600 bg-pepper-green-50">
                            <h4 class="font-semibold text-pepper-green-900 mb-2">💡 Tip</h4>
                            <p class="text-body-sm text-pepper-green-800">Never skip heading levels. Always follow semantic order.</p>
                        </div>
                    </div>
                </div>

                <!-- Color Usage -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Color Guidelines</h3>
                    
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-4">Color Meanings</h4>
                            <div class="space-y-3">
                                <div class="flex items-center gap-4 p-3 bg-pepper-green-50 rounded-lg">
                                    <div class="w-6 h-6 bg-pepper-green-600 rounded-full"></div>
                                    <div>
                                        <div class="font-medium text-the-end-900">Pepper Green</div>
                                        <div class="text-body-sm text-the-end-600">Success, growth, positive actions</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 p-3 bg-chicken-comb-50 rounded-lg">
                                    <div class="w-6 h-6 bg-chicken-comb-600 rounded-full"></div>
                                    <div>
                                        <div class="font-medium text-the-end-900">Chicken Comb</div>
                                        <div class="text-body-sm text-the-end-600">Errors, urgent actions, warnings</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 p-3 bg-apocalyptic-orange-50 rounded-lg">
                                    <div class="w-6 h-6 bg-apocalyptic-orange-600 rounded-full"></div>
                                    <div>
                                        <div class="font-medium text-the-end-900">Apocalyptic Orange</div>
                                        <div class="text-body-sm text-the-end-600">Caution, pending states</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4 border-l-4 border-apocalyptic-orange-600 bg-apocalyptic-orange-50">
                            <h4 class="font-semibold text-apocalyptic-orange-900 mb-2">⚠️ Warning</h4>
                            <p class="text-body-sm text-apocalyptic-orange-800">Don't use color alone to convey information. Always provide text or icons as backup.</p>
                        </div>
                    </div>
                </div>

                <!-- Spacing Usage -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Spacing Guidelines</h3>
                    
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-4">Consistent Rhythm</h4>
                            <div class="space-y-3">
                                <div class="flex items-center gap-4">
                                    <div class="w-8 h-8 bg-pot-of-gold-600 rounded"></div>
                                    <span class="text-body-sm">Use 8px base grid system</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-16 h-8 bg-pot-of-gold-600 rounded"></div>
                                    <span class="text-body-sm">Maintain visual hierarchy</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-24 h-8 bg-pot-of-gold-600 rounded"></div>
                                    <span class="text-body-sm">Create breathing room</span>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-3">Common Patterns</h4>
                            <div class="text-body-sm space-y-1 text-the-end-700">
                                <p>• Related elements: 8-16px spacing</p>
                                <p>• Component sections: 24-32px spacing</p>
                                <p>• Page sections: 64-96px spacing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Implementation Section -->
    <section id="implementation" class="max-w-6xl mx-auto px-8 py-16 bg-white/50">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 bg-pot-of-gold-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-h2 font-bold text-the-end-900">Implementation Standards</h2>
                    <p class="text-body text-the-end-600">Code quality and development guidelines</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Code Standards -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Code Quality Standards</h3>
                    
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-4">HTML Standards</h4>
                            <div class="bg-the-end-50 p-4 rounded-lg">
                                <code class="text-body-sm text-the-end-800 leading-relaxed">
                                    &lt;!-- ✓ Good: Semantic HTML --&gt;<br>
                                    &lt;button class="btn-primary"&gt;<br>
                                    &nbsp;&nbsp;Submit Form<br>
                                    &lt;/button&gt;<br><br>
                                    &lt;!-- ✗ Bad: Non-semantic --&gt;<br>
                                    &lt;div class="btn-primary"&gt;<br>
                                    &nbsp;&nbsp;Submit Form<br>
                                    &lt;/div&gt;
                                </code>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-4">CSS Standards</h4>
                            <div class="space-y-2 text-body-sm">
                                <p>• Use Tailwind CSS utility classes</p>
                                <p>• Follow component-based architecture</p>
                                <p>• Maintain consistent naming conventions</p>
                                <p>• Optimize for performance</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Component Guidelines -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Component Guidelines</h3>
                    
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-4">Blade Components</h4>
                            <div class="bg-the-end-50 p-4 rounded-lg">
                                <code class="text-body-sm text-the-end-800 leading-relaxed">
                                    &lt;!-- Component Usage --&gt;<br>
                                    &lt;x-core.button <br>
                                    &nbsp;&nbsp;variant="primary"<br>
                                    &nbsp;&nbsp;size="large"<br>
                                    &nbsp;&nbsp;href="/contact"<br>
                                    &gt;<br>
                                    &nbsp;&nbsp;Get Started<br>
                                    &lt;/x-core.button&gt;
                                </code>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-4">Component Props</h4>
                            <div class="space-y-2 text-body-sm">
                                <p>• Always provide default values</p>
                                <p>• Use descriptive prop names</p>
                                <p>• Document component usage</p>
                                <p>• Follow consistent patterns</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Performance -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Performance Guidelines</h3>
                    
                    <div class="space-y-4">
                        <div class="p-4 border-l-4 border-pepper-green-600 bg-pepper-green-50">
                            <h4 class="font-semibold text-pepper-green-900 mb-2">✓ Optimize</h4>
                            <ul class="space-y-1 text-body-sm text-pepper-green-800">
                                <li>• Minimize CSS bundle size</li>
                                <li>• Use lazy loading for images</li>
                                <li>• Optimize web fonts</li>
                                <li>• Compress assets</li>
                            </ul>
                        </div>
                        
                        <div class="p-4 border-l-4 border-chicken-comb-600 bg-chicken-comb-50">
                            <h4 class="font-semibold text-chicken-comb-900 mb-2">✗ Avoid</h4>
                            <ul class="space-y-1 text-body-sm text-chicken-comb-800">
                                <li>• Unused CSS classes</li>
                                <li>• Large unoptimized images</li>
                                <li>• Blocking JavaScript</li>
                                <li>• Excessive DOM nesting</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Testing -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Testing Requirements</h3>
                    
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-3">Browser Testing</h4>
                            <div class="grid grid-cols-2 gap-2 text-body-sm">
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 bg-pepper-green-600 rounded-full"></div>
                                    <span>Chrome (latest)</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 bg-pepper-green-600 rounded-full"></div>
                                    <span>Firefox (latest)</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 bg-pepper-green-600 rounded-full"></div>
                                    <span>Safari (latest)</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 bg-pepper-green-600 rounded-full"></div>
                                    <span>Edge (latest)</span>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="text-body-lg font-medium text-the-end-900 mb-3">Device Testing</h4>
                            <div class="space-y-1 text-body-sm">
                                <p>• Mobile: 320px - 768px</p>
                                <p>• Tablet: 768px - 1024px</p>
                                <p>• Desktop: 1024px+</p>
                            </div>
                        </div>
                    </div>
                </div>
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