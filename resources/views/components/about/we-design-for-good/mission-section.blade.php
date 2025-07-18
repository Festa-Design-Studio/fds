<!-- Mission Section -->
<section id="our-mission" class="py-20 px-4 md:px-8 lg:px-16 bg-white-smoke-50">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="text-body-sm text-chicken-comb-600 uppercase tracking-wide font-medium">
                Our Mission
            </span>
            <h2 class="text-h2 font-bold text-pepper-green mt-4 mb-6">
                {{ $content->title ?? 'Purposeful design for lasting impact' }}
            </h2>
            <p class="text-body-lg text-the-end-700 max-w-3xl mx-auto">
                {{ $content->subtitle ?? 'We believe design has the power to transform organizations, communities, and lives. Our approach goes beyond visual appeal to create solutions that drive real social change.' }}
            </p>
        </div>

        <!-- Mission Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Strategic Approach -->
            <div class="bg-white-smoke-100 rounded-2xl p-8 border border-white-smoke-300">
                <div class="w-16 h-16 bg-pepper-green-50 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Strategic Approach</h3>
                <p class="text-body text-the-end-700">
                    We align design solutions with organizational goals and social impact objectives, ensuring every project contributes to meaningful change.
                </p>
            </div>

            <!-- Ethical Framework -->
            <div class="bg-white-smoke-100 rounded-2xl p-8 border border-white-smoke-300">
                <div class="w-16 h-16 bg-chicken-comb-50 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-chicken-comb-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Ethical Framework</h3>
                <p class="text-body text-the-end-700">
                    Our work is guided by principles of accessibility, inclusivity, and sustainability, ensuring design serves all communities equitably.
                </p>
            </div>

            <!-- Global Perspective -->
            <div class="bg-white-smoke-100 rounded-2xl p-8 border border-white-smoke-300 md:col-span-2 lg:col-span-1">
                <div class="w-16 h-16 bg-apocalyptic-orange-50 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-apocalyptic-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-h4 font-semibold text-the-end-900 mb-4">Global Perspective</h3>
                <p class="text-body text-the-end-700">
                    We understand that social challenges are interconnected and require solutions that consider cultural context and global implications.
                </p>
            </div>
        </div>
    </div>
</section>