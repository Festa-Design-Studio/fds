<!-- Impact Framework Section -->
<section class="py-20 px-4 md:px-8 lg:px-16 bg-gradient-to-br from-white-smoke-50 via-pepper-green-50 to-white-smoke-50">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="text-body-sm text-pepper-green-600 uppercase tracking-wide font-medium">
                Impact Framework
            </span>
            <h2 class="text-h2 font-bold text-the-end-900 mt-4 mb-6">
                {{ $content->title ?? 'How we measure success' }}
            </h2>
            <p class="text-body-lg text-the-end-700 max-w-3xl mx-auto">
                {{ $content->subtitle ?? 'Our design process is built on measurable outcomes that align with the United Nations Sustainable Development Goals, ensuring every project contributes to global progress.' }}
            </p>
        </div>

        <!-- Framework Grid -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Framework Content -->
            <div class="space-y-8">
                <!-- Phase 1 -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-pepper-green-600 text-white rounded-full flex items-center justify-center font-bold">
                        1
                    </div>
                    <div>
                        <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Discovery & Assessment</h3>
                        <p class="text-body text-the-end-700">
                            We begin by understanding the organization's mission, challenges, and community needs to identify where design can create the greatest impact.
                        </p>
                    </div>
                </div>

                <!-- Phase 2 -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-chicken-comb-600 text-white rounded-full flex items-center justify-center font-bold">
                        2
                    </div>
                    <div>
                        <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Strategic Design</h3>
                        <p class="text-body text-the-end-700">
                            Our design solutions are crafted to address specific social challenges while building organizational capacity for sustainable growth.
                        </p>
                    </div>
                </div>

                <!-- Phase 3 -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-apocalyptic-orange-600 text-white rounded-full flex items-center justify-center font-bold">
                        3
                    </div>
                    <div>
                        <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Implementation & Measurement</h3>
                        <p class="text-body text-the-end-700">
                            We work alongside organizations to implement solutions and establish metrics that track both design effectiveness and social impact.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Visual Element -->
            <div class="bg-white-smoke-100 rounded-2xl p-8 border border-white-smoke-300">
                <div class="aspect-square w-full">
                    <svg width="100%" height="100%" viewBox="0 0 400 400" class="rounded-xl">
                        <defs>
                            <linearGradient id="impactGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#72b043;stop-opacity:0.2" />
                                <stop offset="50%" style="stop-color:#f37324;stop-opacity:0.15" />
                                <stop offset="100%" style="stop-color:#f8cc1b;stop-opacity:0.2" />
                            </linearGradient>
                        </defs>
                        
                        <!-- Central Hub -->
                        <circle cx="200" cy="200" r="60" fill="url(#impactGradient)" stroke="#72b043" stroke-width="3">
                            <animate attributeName="r" values="60;70;60" dur="4s" repeatCount="indefinite" />
                        </circle>
                        
                        <!-- Connecting Lines -->
                        <g stroke="#72b043" stroke-width="2" opacity="0.6">
                            <line x1="200" y1="140" x2="200" y2="80">
                                <animate attributeName="opacity" values="0.6;1;0.6" dur="3s" repeatCount="indefinite" />
                            </line>
                            <line x1="260" y1="200" x2="320" y2="200">
                                <animate attributeName="opacity" values="0.6;1;0.6" dur="3s" begin="1s" repeatCount="indefinite" />
                            </line>
                            <line x1="200" y1="260" x2="200" y2="320">
                                <animate attributeName="opacity" values="0.6;1;0.6" dur="3s" begin="2s" repeatCount="indefinite" />
                            </line>
                        </g>
                        
                        <!-- Impact Nodes -->
                        <circle cx="200" cy="80" r="20" fill="#f37324" opacity="0.8" />
                        <circle cx="320" cy="200" r="20" fill="#f8cc1b" opacity="0.8" />
                        <circle cx="200" cy="320" r="20" fill="#007f4e" opacity="0.8" />
                        
                        <!-- Center Text -->
                        <text x="200" y="200" text-anchor="middle" dominant-baseline="middle" fill="#2a2a2a" font-size="14" font-weight="bold">
                            IMPACT
                        </text>
                    </svg>
                </div>
                <div class="text-center mt-6">
                    <h4 class="text-h5 font-semibold text-the-end-900 mb-2">Holistic Approach</h4>
                    <p class="text-body-sm text-the-end-700">
                        Every project connects to our broader mission of creating sustainable social change through thoughtful design.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>