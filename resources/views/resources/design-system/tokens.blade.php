@extends('layouts.app')

@section('title', 'Design Tokens - Festa Design System')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-chicken-comb-50 via-white-smoke-50 to-apocalyptic-orange-50">
    <!-- Header Section -->
    <div class="max-w-6xl mx-auto px-8 py-16">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <ol class="flex items-center space-x-2 text-body-sm">
                <li><a href="{{ route('resources.design-system') }}" class="text-pepper-green-600 hover:text-pepper-green-700">Design System</a></li>
                <li class="text-the-end-400">/</li>
                <li class="text-the-end-900 font-medium">Design Tokens</li>
            </ol>
        </nav>
        
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-h1 font-bold text-the-end-900 mb-4">Design Tokens</h1>
            <p class="text-body-lg text-the-end-600 max-w-2xl mx-auto mb-8">
                The foundational design decisions of the Festa Design System. These tokens ensure consistency 
                across all components and maintain our meaningful design language.
            </p>
            <x-core.tag variant="warning" withIcon="true">6 Color Families, Typography Scale & More</x-core.tag>
        </div>
    </div>

    <!-- Token Categories Navigation -->
    <div class="max-w-6xl mx-auto px-8 mb-16">
        <div class="bg-white/80 backdrop-blur-sm border border-white-smoke-300 rounded-2xl p-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="#colors" class="flex flex-col items-center p-4 rounded-xl bg-chicken-comb-50 hover:bg-chicken-comb-100 transition-colors group">
                    <div class="w-8 h-8 bg-chicken-comb-600 rounded-full mb-2 group-hover:scale-110 transition-transform"></div>
                    <span class="text-body-sm font-medium text-chicken-comb-700">Colors</span>
                    <span class="text-body-sm text-chicken-comb-600">6 families</span>
                </a>
                <a href="#typography" class="flex flex-col items-center p-4 rounded-xl bg-apocalyptic-orange-50 hover:bg-apocalyptic-orange-100 transition-colors group">
                    <div class="w-8 h-8 bg-apocalyptic-orange-600 rounded-full mb-2 group-hover:scale-110 transition-transform"></div>
                    <span class="text-body-sm font-medium text-apocalyptic-orange-700">Typography</span>
                    <span class="text-body-sm text-apocalyptic-orange-600">Scale & weights</span>
                </a>
                <a href="#spacing" class="flex flex-col items-center p-4 rounded-xl bg-pot-of-gold-50 hover:bg-pot-of-gold-100 transition-colors group">
                    <div class="w-8 h-8 bg-pot-of-gold-600 rounded-full mb-2 group-hover:scale-110 transition-transform"></div>
                    <span class="text-body-sm font-medium text-pot-of-gold-700">Spacing</span>
                    <span class="text-body-sm text-pot-of-gold-600">Tailwind scale</span>
                </a>
                <a href="#elevation" class="flex flex-col items-center p-4 rounded-xl bg-the-end-50 hover:bg-the-end-100 transition-colors group">
                    <div class="w-8 h-8 bg-the-end-600 rounded-full mb-2 group-hover:scale-110 transition-transform"></div>
                    <span class="text-body-sm font-medium text-the-end-700">Elevation</span>
                    <span class="text-body-sm text-the-end-600">Shadows & borders</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Colors Section -->
    <section id="colors" class="max-w-6xl mx-auto px-8 py-16">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 bg-chicken-comb-600 rounded-full flex items-center justify-center">
                    <div class="w-6 h-6 bg-white rounded-full"></div>
                </div>
                <div>
                    <h2 class="text-h2 font-bold text-the-end-900">Color System</h2>
                    <p class="text-body text-the-end-600">Meaningful color names that reflect our design philosophy</p>
                </div>
            </div>
            
            <!-- Pepper Green -->
            <div class="bg-white border border-white-smoke-300 rounded-2xl p-8 mb-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-pepper-green-600 rounded-2xl shadow-md"></div>
                    <div>
                        <h3 class="text-h4 font-semibold text-the-end-900">Pepper Green</h3>
                        <p class="text-body text-the-end-600">Primary color for growth and sustainability</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 lg:grid-cols-10 gap-4">
                    <div class="text-center">
                        <div class="w-full h-16 bg-pepper-green-50 rounded-xl mb-2 border border-pepper-green-100"></div>
                        <p class="text-body-sm font-mono text-the-end-900">50</p>
                        <p class="text-body-sm text-the-end-600">#F0FDF4</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pepper-green-100 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">100</p>
                        <p class="text-body-sm text-the-end-600">#DCFCE7</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pepper-green-200 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">200</p>
                        <p class="text-body-sm text-the-end-600">#BBF7D0</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pepper-green-300 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">300</p>
                        <p class="text-body-sm text-the-end-600">#86EFAC</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pepper-green-400 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">400</p>
                        <p class="text-body-sm text-the-end-600">#4ADE80</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pepper-green-500 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">500</p>
                        <p class="text-body-sm text-the-end-600">#22C55E</p>
                    </div>
                    <div class="text-center border-2 border-pepper-green-600 rounded-xl">
                        <div class="w-full h-16 bg-pepper-green-600 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-pepper-green-600 font-bold">600</p>
                        <p class="text-body-sm text-pepper-green-600 font-semibold">#059669</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pepper-green-700 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">700</p>
                        <p class="text-body-sm text-the-end-600">#047857</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pepper-green-800 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">800</p>
                        <p class="text-body-sm text-the-end-600">#065F46</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pepper-green-900 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">900</p>
                        <p class="text-body-sm text-the-end-600">#064E3B</p>
                    </div>
                </div>
            </div>

            <!-- Chicken Comb -->
            <div class="bg-white border border-white-smoke-300 rounded-2xl p-8 mb-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-chicken-comb-600 rounded-2xl shadow-md"></div>
                    <div>
                        <h3 class="text-h4 font-semibold text-the-end-900">Chicken Comb</h3>
                        <p class="text-body text-the-end-600">Accent color for urgency and importance</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 lg:grid-cols-10 gap-4">
                    <div class="text-center">
                        <div class="w-full h-16 bg-chicken-comb-50 rounded-xl mb-2 border border-chicken-comb-100"></div>
                        <p class="text-body-sm font-mono text-the-end-900">50</p>
                        <p class="text-body-sm text-the-end-600">#FEF2F2</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-chicken-comb-100 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">100</p>
                        <p class="text-body-sm text-the-end-600">#FEE2E2</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-chicken-comb-200 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">200</p>
                        <p class="text-body-sm text-the-end-600">#FECACA</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-chicken-comb-300 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">300</p>
                        <p class="text-body-sm text-the-end-600">#FCA5A5</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-chicken-comb-400 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">400</p>
                        <p class="text-body-sm text-the-end-600">#F87171</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-chicken-comb-500 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">500</p>
                        <p class="text-body-sm text-the-end-600">#EF4444</p>
                    </div>
                    <div class="text-center border-2 border-chicken-comb-600 rounded-xl">
                        <div class="w-full h-16 bg-chicken-comb-600 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-chicken-comb-600 font-bold">600</p>
                        <p class="text-body-sm text-chicken-comb-600 font-semibold">#DC2626</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-chicken-comb-700 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">700</p>
                        <p class="text-body-sm text-the-end-600">#B91C1C</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-chicken-comb-800 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">800</p>
                        <p class="text-body-sm text-the-end-600">#991B1B</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-chicken-comb-900 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">900</p>
                        <p class="text-body-sm text-the-end-600">#7F1D1D</p>
                    </div>
                </div>
            </div>

            <!-- Apocalyptic Orange -->
            <div class="bg-white border border-white-smoke-300 rounded-2xl p-8 mb-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-apocalyptic-orange-600 rounded-2xl shadow-md"></div>
                    <div>
                        <h3 class="text-h4 font-semibold text-the-end-900">Apocalyptic Orange</h3>
                        <p class="text-body text-the-end-600">Warning and energy color</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 lg:grid-cols-10 gap-4">
                    <div class="text-center">
                        <div class="w-full h-16 bg-apocalyptic-orange-50 rounded-xl mb-2 border border-apocalyptic-orange-100"></div>
                        <p class="text-body-sm font-mono text-the-end-900">50</p>
                        <p class="text-body-sm text-the-end-600">#FFF7ED</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-apocalyptic-orange-100 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">100</p>
                        <p class="text-body-sm text-the-end-600">#FFEDD5</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-apocalyptic-orange-200 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">200</p>
                        <p class="text-body-sm text-the-end-600">#FED7AA</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-apocalyptic-orange-300 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">300</p>
                        <p class="text-body-sm text-the-end-600">#FDBA74</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-apocalyptic-orange-400 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">400</p>
                        <p class="text-body-sm text-the-end-600">#FB923C</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-apocalyptic-orange-500 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">500</p>
                        <p class="text-body-sm text-the-end-600">#F97316</p>
                    </div>
                    <div class="text-center border-2 border-apocalyptic-orange-600 rounded-xl">
                        <div class="w-full h-16 bg-apocalyptic-orange-600 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-apocalyptic-orange-600 font-bold">600</p>
                        <p class="text-body-sm text-apocalyptic-orange-600 font-semibold">#EA580C</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-apocalyptic-orange-700 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">700</p>
                        <p class="text-body-sm text-the-end-600">#C2410C</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-apocalyptic-orange-800 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">800</p>
                        <p class="text-body-sm text-the-end-600">#9A3412</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-apocalyptic-orange-900 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">900</p>
                        <p class="text-body-sm text-the-end-600">#7C2D12</p>
                    </div>
                </div>
            </div>

            <!-- Pot of Gold -->
            <div class="bg-white border border-white-smoke-300 rounded-2xl p-8 mb-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-pot-of-gold-600 rounded-2xl shadow-md"></div>
                    <div>
                        <h3 class="text-h4 font-semibold text-the-end-900">Pot of Gold</h3>
                        <p class="text-body text-the-end-600">Success and achievement color</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 lg:grid-cols-10 gap-4">
                    <div class="text-center">
                        <div class="w-full h-16 bg-pot-of-gold-50 rounded-xl mb-2 border border-pot-of-gold-100"></div>
                        <p class="text-body-sm font-mono text-the-end-900">50</p>
                        <p class="text-body-sm text-the-end-600">#FFFBEB</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pot-of-gold-100 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">100</p>
                        <p class="text-body-sm text-the-end-600">#FEF3C7</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pot-of-gold-200 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">200</p>
                        <p class="text-body-sm text-the-end-600">#FDE68A</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pot-of-gold-300 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">300</p>
                        <p class="text-body-sm text-the-end-600">#FCD34D</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pot-of-gold-400 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">400</p>
                        <p class="text-body-sm text-the-end-600">#FBBF24</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pot-of-gold-500 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">500</p>
                        <p class="text-body-sm text-the-end-600">#F59E0B</p>
                    </div>
                    <div class="text-center border-2 border-pot-of-gold-600 rounded-xl">
                        <div class="w-full h-16 bg-pot-of-gold-600 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-pot-of-gold-600 font-bold">600</p>
                        <p class="text-body-sm text-pot-of-gold-600 font-semibold">#D97706</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pot-of-gold-700 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">700</p>
                        <p class="text-body-sm text-the-end-600">#B45309</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pot-of-gold-800 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">800</p>
                        <p class="text-body-sm text-the-end-600">#92400E</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-pot-of-gold-900 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">900</p>
                        <p class="text-body-sm text-the-end-600">#78350F</p>
                    </div>
                </div>
            </div>

            <!-- White Smoke -->
            <div class="bg-white border border-white-smoke-300 rounded-2xl p-8 mb-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-white-smoke-600 border-2 border-white-smoke-300 rounded-2xl shadow-md"></div>
                    <div>
                        <h3 class="text-h4 font-semibold text-the-end-900">White Smoke</h3>
                        <p class="text-body text-the-end-600">Neutral background and subtle elements</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 lg:grid-cols-10 gap-4">
                    <div class="text-center">
                        <div class="w-full h-16 bg-white-smoke-50 rounded-xl mb-2 border border-white-smoke-200"></div>
                        <p class="text-body-sm font-mono text-the-end-900">50</p>
                        <p class="text-body-sm text-the-end-600">#F9FAFB</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-white-smoke-100 rounded-xl mb-2 border border-white-smoke-200"></div>
                        <p class="text-body-sm font-mono text-the-end-900">100</p>
                        <p class="text-body-sm text-the-end-600">#F3F4F6</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-white-smoke-200 rounded-xl mb-2 border border-white-smoke-300"></div>
                        <p class="text-body-sm font-mono text-the-end-900">200</p>
                        <p class="text-body-sm text-the-end-600">#E5E7EB</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-white-smoke-300 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">300</p>
                        <p class="text-body-sm text-the-end-600">#D1D5DB</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-white-smoke-400 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">400</p>
                        <p class="text-body-sm text-the-end-600">#9CA3AF</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-white-smoke-500 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">500</p>
                        <p class="text-body-sm text-the-end-600">#6B7280</p>
                    </div>
                    <div class="text-center border-2 border-white-smoke-600 rounded-xl">
                        <div class="w-full h-16 bg-white-smoke-600 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-white-smoke-600 font-bold">600</p>
                        <p class="text-body-sm text-white-smoke-600 font-semibold">#4B5563</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-white-smoke-700 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">700</p>
                        <p class="text-body-sm text-the-end-600">#374151</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-white-smoke-800 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">800</p>
                        <p class="text-body-sm text-the-end-600">#1F2937</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-white-smoke-900 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">900</p>
                        <p class="text-body-sm text-the-end-600">#111827</p>
                    </div>
                </div>
            </div>

            <!-- The End -->
            <div class="bg-white border border-white-smoke-300 rounded-2xl p-8 mb-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-the-end-600 rounded-2xl shadow-md"></div>
                    <div>
                        <h3 class="text-h4 font-semibold text-the-end-900">The End</h3>
                        <p class="text-body text-the-end-600">Primary text and content color</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 lg:grid-cols-10 gap-4">
                    <div class="text-center">
                        <div class="w-full h-16 bg-the-end-50 rounded-xl mb-2 border border-the-end-100"></div>
                        <p class="text-body-sm font-mono text-the-end-900">50</p>
                        <p class="text-body-sm text-the-end-600">#F8FAFC</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-the-end-100 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">100</p>
                        <p class="text-body-sm text-the-end-600">#F1F5F9</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-the-end-200 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">200</p>
                        <p class="text-body-sm text-the-end-600">#E2E8F0</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-the-end-300 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">300</p>
                        <p class="text-body-sm text-the-end-600">#CBD5E1</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-the-end-400 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">400</p>
                        <p class="text-body-sm text-the-end-600">#94A3B8</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-the-end-500 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">500</p>
                        <p class="text-body-sm text-the-end-600">#64748B</p>
                    </div>
                    <div class="text-center border-2 border-the-end-600 rounded-xl">
                        <div class="w-full h-16 bg-the-end-600 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-600 font-bold">600</p>
                        <p class="text-body-sm text-the-end-600 font-semibold">#475569</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-the-end-700 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">700</p>
                        <p class="text-body-sm text-the-end-600">#334155</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-the-end-800 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">800</p>
                        <p class="text-body-sm text-the-end-600">#1E293B</p>
                    </div>
                    <div class="text-center">
                        <div class="w-full h-16 bg-the-end-900 rounded-xl mb-2"></div>
                        <p class="text-body-sm font-mono text-the-end-900">900</p>
                        <p class="text-body-sm text-the-end-600">#0F172A</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Typography Section -->
    <section id="typography" class="max-w-6xl mx-auto px-8 py-16 bg-white/50">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 bg-apocalyptic-orange-600 rounded-full flex items-center justify-center">
                    <span class="text-white font-bold text-lg">Aa</span>
                </div>
                <div>
                    <h2 class="text-h2 font-bold text-the-end-900">Typography Scale</h2>
                    <p class="text-body text-the-end-600">Semantic typography tokens for consistent text hierarchy</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Headings -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Heading Scale</h3>
                    <div class="space-y-6">
                        <div class="border-b border-white-smoke-200 pb-4">
                            <h1 class="text-h1 font-bold text-the-end-900 mb-2">Design for Good</h1>
                            <div class="flex items-center justify-between text-body-sm text-the-end-600">
                                <span>text-h1</span>
                                <span>48px / Bold / 1.2 line-height</span>
                            </div>
                        </div>
                        <div class="border-b border-white-smoke-200 pb-4">
                            <h2 class="text-h2 font-bold text-the-end-900 mb-2">Strategic Design Solutions</h2>
                            <div class="flex items-center justify-between text-body-sm text-the-end-600">
                                <span>text-h2</span>
                                <span>36px / Bold / 1.3 line-height</span>
                            </div>
                        </div>
                        <div class="border-b border-white-smoke-200 pb-4">
                            <h3 class="text-h3 font-bold text-the-end-900 mb-2">Component Library</h3>
                            <div class="flex items-center justify-between text-body-sm text-the-end-600">
                                <span>text-h3</span>
                                <span>24px / Bold / 1.4 line-height</span>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-h4 font-semibold text-the-end-900 mb-2">Design Tokens</h4>
                            <div class="flex items-center justify-between text-body-sm text-the-end-600">
                                <span>text-h4</span>
                                <span>18px / Semibold / 1.5 line-height</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Body Text -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Body Text Scale</h3>
                    <div class="space-y-6">
                        <div class="border-b border-white-smoke-200 pb-4">
                            <p class="text-body-lg text-the-end-900 mb-2">Large body text for important content and introductions that need emphasis.</p>
                            <div class="flex items-center justify-between text-body-sm text-the-end-600">
                                <span>text-body-lg</span>
                                <span>20px / Regular / 1.6 line-height</span>
                            </div>
                        </div>
                        <div class="border-b border-white-smoke-200 pb-4">
                            <p class="text-body text-the-end-900 mb-2">Standard body text for regular content and descriptions throughout the interface.</p>
                            <div class="flex items-center justify-between text-body-sm text-the-end-600">
                                <span>text-body</span>
                                <span>16px / Regular / 1.6 line-height</span>
                            </div>
                        </div>
                        <div>
                            <p class="text-body-sm text-the-end-600 mb-2">Small body text for secondary information, captions, and metadata.</p>
                            <div class="flex items-center justify-between text-body-sm text-the-end-600">
                                <span>text-body-sm</span>
                                <span>14px / Regular / 1.5 line-height</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Font Weights -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Font Weight Scale</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between border-b border-white-smoke-200 pb-3">
                            <span class="text-body font-normal text-the-end-900">Regular Weight</span>
                            <div class="text-right text-body-sm text-the-end-600">
                                <div>font-normal</div>
                                <div>400</div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-b border-white-smoke-200 pb-3">
                            <span class="text-body font-medium text-the-end-900">Medium Weight</span>
                            <div class="text-right text-body-sm text-the-end-600">
                                <div>font-medium</div>
                                <div>500</div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-b border-white-smoke-200 pb-3">
                            <span class="text-body font-semibold text-the-end-900">Semibold Weight</span>
                            <div class="text-right text-body-sm text-the-end-600">
                                <div>font-semibold</div>
                                <div>600</div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-body font-bold text-the-end-900">Bold Weight</span>
                            <div class="text-right text-body-sm text-the-end-600">
                                <div>font-bold</div>
                                <div>700</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Font Family -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Font Families</h3>
                    <div class="space-y-4">
                        <div class="border-b border-white-smoke-200 pb-4">
                            <p class="text-body-lg text-the-end-900 mb-2">Inter, system font stack</p>
                            <div class="text-body-sm text-the-end-600">
                                <div class="font-mono">font-sans</div>
                                <div>Primary interface font</div>
                            </div>
                        </div>
                        <div>
                            <p class="text-body-lg font-mono text-the-end-900 mb-2">SF Mono, Menlo, Monaco</p>
                            <div class="text-body-sm text-the-end-600">
                                <div class="font-mono">font-mono</div>
                                <div>Code and technical content</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Spacing Section -->
    <section id="spacing" class="max-w-6xl mx-auto px-8 py-16">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 bg-pot-of-gold-600 rounded-full flex items-center justify-center">
                    <div class="grid grid-cols-2 gap-1">
                        <div class="w-2 h-2 bg-white rounded"></div>
                        <div class="w-2 h-2 bg-white rounded"></div>
                        <div class="w-2 h-2 bg-white rounded"></div>
                        <div class="w-2 h-2 bg-white rounded"></div>
                    </div>
                </div>
                <div>
                    <h2 class="text-h2 font-bold text-the-end-900">Spacing Scale</h2>
                    <p class="text-body text-the-end-600">Consistent spacing system based on Tailwind CSS scale</p>
                </div>
            </div>
            
            <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-body-lg font-semibold text-the-end-900 mb-4">Micro Spacing</h3>
                        <div class="space-y-3">
                            <div class="flex items-center gap-4">
                                <div class="w-1 h-4 bg-pot-of-gold-600"></div>
                                <div class="text-body-sm">
                                    <div class="font-mono">1 • 4px</div>
                                    <div class="text-the-end-600">Border widths</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-2 h-4 bg-pot-of-gold-600"></div>
                                <div class="text-body-sm">
                                    <div class="font-mono">2 • 8px</div>
                                    <div class="text-the-end-600">Icon gaps</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-3 h-4 bg-pot-of-gold-600"></div>
                                <div class="text-body-sm">
                                    <div class="font-mono">3 • 12px</div>
                                    <div class="text-the-end-600">Small padding</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-body-lg font-semibold text-the-end-900 mb-4">Component Spacing</h3>
                        <div class="space-y-3">
                            <div class="flex items-center gap-4">
                                <div class="w-4 h-4 bg-pot-of-gold-600"></div>
                                <div class="text-body-sm">
                                    <div class="font-mono">4 • 16px</div>
                                    <div class="text-the-end-600">Button padding</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-6 h-4 bg-pot-of-gold-600"></div>
                                <div class="text-body-sm">
                                    <div class="font-mono">6 • 24px</div>
                                    <div class="text-the-end-600">Card padding</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-8 h-4 bg-pot-of-gold-600"></div>
                                <div class="text-body-sm">
                                    <div class="font-mono">8 • 32px</div>
                                    <div class="text-the-end-600">Section gaps</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-body-lg font-semibold text-the-end-900 mb-4">Layout Spacing</h3>
                        <div class="space-y-3">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-4 bg-pot-of-gold-600"></div>
                                <div class="text-body-sm">
                                    <div class="font-mono">12 • 48px</div>
                                    <div class="text-the-end-600">Component gaps</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-4 bg-pot-of-gold-600"></div>
                                <div class="text-body-sm">
                                    <div class="font-mono">16 • 64px</div>
                                    <div class="text-the-end-600">Section padding</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-24 h-4 bg-pot-of-gold-600"></div>
                                <div class="text-body-sm">
                                    <div class="font-mono">24 • 96px</div>
                                    <div class="text-the-end-600">Page sections</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-body-lg font-semibold text-the-end-900 mb-4">Container Spacing</h3>
                        <div class="space-y-3">
                            <div class="flex items-center gap-4">
                                <div class="w-32 h-4 bg-pot-of-gold-600"></div>
                                <div class="text-body-sm">
                                    <div class="font-mono">32 • 128px</div>
                                    <div class="text-the-end-600">Hero sections</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-40 h-4 bg-pot-of-gold-600"></div>
                                <div class="text-body-sm">
                                    <div class="font-mono">40 • 160px</div>
                                    <div class="text-the-end-600">Major sections</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-48 h-4 bg-pot-of-gold-600"></div>
                                <div class="text-body-sm">
                                    <div class="font-mono">48 • 192px</div>
                                    <div class="text-the-end-600">Page spacing</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Elevation Section -->
    <section id="elevation" class="max-w-6xl mx-auto px-8 py-16 bg-white/50">
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 bg-the-end-600 rounded-full flex items-center justify-center shadow-lg">
                    <div class="w-6 h-6 bg-white rounded shadow-md"></div>
                </div>
                <div>
                    <h2 class="text-h2 font-bold text-the-end-900">Elevation & Shadows</h2>
                    <p class="text-body text-the-end-600">Shadow system for depth and visual hierarchy</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Shadow Scale -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Shadow Scale</h3>
                    <div class="space-y-6">
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-white border border-white-smoke-200 rounded-xl"></div>
                            <div>
                                <div class="font-mono text-body-sm">shadow-none</div>
                                <div class="text-body-sm text-the-end-600">Flat elements</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-white shadow-sm rounded-xl"></div>
                            <div>
                                <div class="font-mono text-body-sm">shadow-sm</div>
                                <div class="text-body-sm text-the-end-600">Subtle cards</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-white shadow-md rounded-xl"></div>
                            <div>
                                <div class="font-mono text-body-sm">shadow-md</div>
                                <div class="text-body-sm text-the-end-600">Elevated cards</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-white shadow-lg rounded-xl"></div>
                            <div>
                                <div class="font-mono text-body-sm">shadow-lg</div>
                                <div class="text-body-sm text-the-end-600">Modals, dropdowns</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-white shadow-xl rounded-xl"></div>
                            <div>
                                <div class="font-mono text-body-sm">shadow-xl</div>
                                <div class="text-body-sm text-the-end-600">Floating elements</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Border Radius -->
                <div class="bg-white border border-white-smoke-300 rounded-2xl p-8">
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-6">Border Radius</h3>
                    <div class="space-y-6">
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-pepper-green-100 border-2 border-pepper-green-300"></div>
                            <div>
                                <div class="font-mono text-body-sm">rounded-none</div>
                                <div class="text-body-sm text-the-end-600">0px</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-pepper-green-100 border-2 border-pepper-green-300 rounded"></div>
                            <div>
                                <div class="font-mono text-body-sm">rounded</div>
                                <div class="text-body-sm text-the-end-600">4px</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-pepper-green-100 border-2 border-pepper-green-300 rounded-lg"></div>
                            <div>
                                <div class="font-mono text-body-sm">rounded-lg</div>
                                <div class="text-body-sm text-the-end-600">8px</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-pepper-green-100 border-2 border-pepper-green-300 rounded-xl"></div>
                            <div>
                                <div class="font-mono text-body-sm">rounded-xl</div>
                                <div class="text-body-sm text-the-end-600">12px</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-pepper-green-100 border-2 border-pepper-green-300 rounded-2xl"></div>
                            <div>
                                <div class="font-mono text-body-sm">rounded-2xl</div>
                                <div class="text-body-sm text-the-end-600">16px</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-pepper-green-100 border-2 border-pepper-green-300 rounded-full"></div>
                            <div>
                                <div class="font-mono text-body-sm">rounded-full</div>
                                <div class="text-body-sm text-the-end-600">50%</div>
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