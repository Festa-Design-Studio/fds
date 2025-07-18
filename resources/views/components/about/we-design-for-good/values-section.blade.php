<!-- Values Section -->
<section class="py-20 px-4 md:px-8 lg:px-16 bg-white-smoke-100">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="text-body-sm text-chicken-comb-600 uppercase tracking-wide font-medium">
                Our Values
            </span>
            <h2 class="text-h2 font-bold text-pepper-green mt-4 mb-6">
                {{ $content->title ?? 'Principles that guide our work' }}
            </h2>
            <p class="text-body-lg text-the-end-700 max-w-3xl mx-auto">
                {{ $content->subtitle ?? 'These core values shape every decision we make and every solution we create, ensuring our design work contributes to a more equitable and sustainable world.' }}
            </p>
        </div>

        <!-- Values Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Accessibility -->
            <div class="text-center space-y-6">
                <div class="w-20 h-20 bg-pepper-green-50 rounded-full flex items-center justify-center mx-auto">
                    <svg class="w-10 h-10 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m13 0h-6M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-3">Accessibility</h3>
                    <p class="text-body-sm text-the-end-700">
                        Design should be inclusive and accessible to all, regardless of ability, background, or circumstance.
                    </p>
                </div>
            </div>

            <!-- Sustainability -->
            <div class="text-center space-y-6">
                <div class="w-20 h-20 bg-chicken-comb-50 rounded-full flex items-center justify-center mx-auto">
                    <svg class="w-10 h-10 text-chicken-comb-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-3">Sustainability</h3>
                    <p class="text-body-sm text-the-end-700">
                        Our solutions consider long-term environmental and social impact, creating lasting positive change.
                    </p>
                </div>
            </div>

            <!-- Collaboration -->
            <div class="text-center space-y-6">
                <div class="w-20 h-20 bg-apocalyptic-orange-50 rounded-full flex items-center justify-center mx-auto">
                    <svg class="w-10 h-10 text-apocalyptic-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-3">Collaboration</h3>
                    <p class="text-body-sm text-the-end-700">
                        We work hand-in-hand with communities and organizations to create solutions that truly serve their needs.
                    </p>
                </div>
            </div>

            <!-- Innovation -->
            <div class="text-center space-y-6">
                <div class="w-20 h-20 bg-pot-of-gold-50 rounded-full flex items-center justify-center mx-auto">
                    <svg class="w-10 h-10 text-pot-of-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-h4 font-semibold text-the-end-900 mb-3">Innovation</h3>
                    <p class="text-body-sm text-the-end-700">
                        We embrace creative problem-solving and emerging technologies to address complex social challenges.
                    </p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <div class="bg-gradient-to-r from-pepper-green-50 via-chicken-comb-50 to-apocalyptic-orange-50 rounded-2xl p-8 border border-white-smoke-300">
                <h3 class="text-h3 font-bold text-the-end-900 mb-4">
                    Ready to create impact together?
                </h3>
                <p class="text-body-lg text-the-end-700 mb-8 max-w-2xl mx-auto">
                    Join us in designing solutions that drive positive social change and contribute to a more sustainable future for all.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-core.button variant="primary" size="large" href="/contact">
                        Start a project
                    </x-core.button>
                    <x-core.button variant="secondary" size="large" href="/work">
                        View our impact
                    </x-core.button>
                </div>
            </div>
        </div>
    </div>
</section>