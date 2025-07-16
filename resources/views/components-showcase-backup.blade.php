@extends('layouts.app')

@section('title', 'Components Showcase - Festa Design Studio')

@push('meta')
    <meta name="description" content="Comprehensive showcase of all Festa Design Studio components - buttons, forms, cards, and more. A living style guide for developers.">
    <meta name="keywords" content="components, design system, UI library, Festa Design Studio, Laravel components">
@endpush

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-h1 font-bold text-pepper-green mb-4">Components Showcase</h1>
                <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
                    A comprehensive collection of all Festa Design Studio components. This living style guide demonstrates 
                    component usage, props, and variations across the design system.
                </p>
            </div>

            <!-- Navigation -->
            <nav class="sticky top-0 z-10 bg-white-smoke-50 border border-white-smoke-300 rounded-lg p-4 mb-8">
                <div class="flex flex-wrap gap-2 justify-center">
                    <a href="#core" class="px-4 py-2 text-body-sm bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200 rounded-full hover:bg-pepper-green-100 transition-colors">Core Components</a>
                    <a href="#blog" class="px-4 py-2 text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200 rounded-full hover:bg-chicken-comb-100 transition-colors">Blog Components</a>
                    <a href="#work" class="px-4 py-2 text-body-sm bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200 rounded-full hover:bg-apocalyptic-orange-100 transition-colors">Work Components</a>
                    <a href="#services" class="px-4 py-2 text-body-sm bg-pot-of-gold-50 text-pot-of-gold-700 border border-pot-of-gold-200 rounded-full hover:bg-pot-of-gold-100 transition-colors">Services Components</a>
                    <a href="#toolkit" class="px-4 py-2 text-body-sm bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200 rounded-full hover:bg-pepper-green-100 transition-colors">Toolkit Components</a>
                    <a href="#about" class="px-4 py-2 text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200 rounded-full hover:bg-chicken-comb-100 transition-colors">About Components</a>
                    <a href="#home" class="px-4 py-2 text-body-sm bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200 rounded-full hover:bg-apocalyptic-orange-100 transition-colors">Home Components</a>
                    <a href="#contact" class="px-4 py-2 text-body-sm bg-pot-of-gold-50 text-pot-of-gold-700 border border-pot-of-gold-200 rounded-full hover:bg-pot-of-gold-100 transition-colors">Contact Components</a>
                </div>
            </nav>

            <!-- Core Components Section -->
            <section id="core" class="mb-16">
                <div class="mb-8">
                    <h2 class="text-h2 font-bold text-pepper-green mb-4">Core Components</h2>
                    <p class="text-body-lg text-the-end-700 mb-6">
                        Foundation-level UI elements used throughout the application. These components form the building blocks of the design system.
                    </p>
                </div>

                <!-- Buttons -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-pepper-green mb-4">Buttons</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="space-y-6">
                            <!-- Primary Buttons -->
                            <div>
                                <h4 class="text-h5 font-semibold mb-3">Primary Buttons</h4>
                                <div class="flex flex-wrap gap-4">
                                    <x-core.button variant="primary" size="small">Primary Small</x-core.button>
                                    <x-core.button variant="primary" size="medium">Primary Medium</x-core.button>
                                    <x-core.button variant="primary" size="large">Primary Large</x-core.button>
                                </div>
                            </div>

                            <!-- Secondary Buttons -->
                            <div>
                                <h4 class="text-h5 font-semibold mb-3">Secondary Buttons</h4>
                                <div class="flex flex-wrap gap-4">
                                    <x-core.button variant="secondary" size="small">Secondary Small</x-core.button>
                                    <x-core.button variant="secondary" size="medium">Secondary Medium</x-core.button>
                                    <x-core.button variant="secondary" size="large">Secondary Large</x-core.button>
                                </div>
                            </div>

                            <!-- Neutral Buttons -->
                            <div>
                                <h4 class="text-h5 font-semibold mb-3">Neutral Buttons</h4>
                                <div class="flex flex-wrap gap-4">
                                    <x-core.button variant="neutral" size="small">Neutral Small</x-core.button>
                                    <x-core.button variant="neutral" size="medium">Neutral Medium</x-core.button>
                                    <x-core.button variant="neutral" size="large">Neutral Large</x-core.button>
                                </div>
                            </div>

                            <!-- Disabled States -->
                            <div>
                                <h4 class="text-h5 font-semibold mb-3">Disabled States</h4>
                                <div class="flex flex-wrap gap-4">
                                    <x-core.button variant="primary" size="medium" disabled>Disabled Primary</x-core.button>
                                    <x-core.button variant="secondary" size="medium" disabled>Disabled Secondary</x-core.button>
                                    <x-core.button variant="neutral" size="medium" disabled>Disabled Neutral</x-core.button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-core.button variant="primary" size="medium"&gt;Button Text&lt;/x-core.button&gt;
&lt;x-core.button variant="secondary" size="large" disabled&gt;Disabled Button&lt;/x-core.button&gt;</code></pre>
                        <p class="text-body-sm text-the-end-700 mt-2">
                            <strong>Props:</strong> variant (primary|secondary|neutral), size (small|medium|large), disabled (boolean)
                        </p>
                    </div>
                </div>

                <!-- Form Inputs -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-pepper-green mb-4">Form Inputs</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="space-y-6">
                            <!-- Text Input -->
                            <div>
                                <h4 class="text-h5 font-semibold mb-3">Text Input</h4>
                                <div class="max-w-md">
                                    <x-core.text-input name="demo_text" placeholder="Enter your text here" />
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div>
                                <h4 class="text-h5 font-semibold mb-3">Textarea</h4>
                                <div class="max-w-md">
                                    <x-core.textarea name="demo_textarea" placeholder="Enter your message here" rows="4" />
                                </div>
                            </div>

                            <!-- Select -->
                            <div>
                                <h4 class="text-h5 font-semibold mb-3">Select</h4>
                                <div class="max-w-md">
                                    <x-core.select name="demo_select">
                                        <option value="">Choose an option</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </x-core.select>
                                </div>
                            </div>

                            <!-- Checkbox -->
                            <div>
                                <h4 class="text-h5 font-semibold mb-3">Checkbox</h4>
                                <div class="space-y-2">
                                    <x-core.checkbox name="demo_checkbox1" value="1" label="Option 1" />
                                    <x-core.checkbox name="demo_checkbox2" value="2" label="Option 2" checked />
                                    <x-core.checkbox name="demo_checkbox3" value="3" label="Option 3 (disabled)" disabled />
                                </div>
                            </div>

                            <!-- Radio -->
                            <div>
                                <h4 class="text-h5 font-semibold mb-3">Radio</h4>
                                <div class="space-y-2">
                                    <x-core.radio name="demo_radio" value="1" label="Option 1" />
                                    <x-core.radio name="demo_radio" value="2" label="Option 2" checked />
                                    <x-core.radio name="demo_radio" value="3" label="Option 3" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-core.text-input name="email" placeholder="Enter email" /&gt;
&lt;x-core.textarea name="message" placeholder="Your message" rows="4" /&gt;
&lt;x-core.select name="category"&gt;...&lt;/x-core.select&gt;
&lt;x-core.checkbox name="terms" value="1" label="I agree to terms" /&gt;
&lt;x-core.radio name="type" value="1" label="Option 1" /&gt;</code></pre>
                    </div>
                </div>

                <!-- Tags -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-pepper-green mb-4">Tags</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="space-y-4">
                            <div class="flex flex-wrap gap-2">
                                <x-core.tag variant="primary">Primary Tag</x-core.tag>
                                <x-core.tag variant="secondary">Secondary Tag</x-core.tag>
                                <x-core.tag variant="success">Success Tag</x-core.tag>
                                <x-core.tag variant="warning">Warning Tag</x-core.tag>
                                <x-core.tag variant="danger">Danger Tag</x-core.tag>
                                <x-core.tag variant="info">Info Tag</x-core.tag>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-core.tag variant="primary"&gt;Tag Text&lt;/x-core.tag&gt;</code></pre>
                        <p class="text-body-sm text-the-end-700 mt-2">
                            <strong>Props:</strong> variant (primary|secondary|success|warning|danger|info)
                        </p>
                    </div>
                </div>
            </section>

            <!-- Blog Components Section -->
            <section id="blog" class="mb-16">
                <div class="mb-8">
                    <h2 class="text-h2 font-bold text-chicken-comb-600 mb-4">Blog Components</h2>
                    <p class="text-body-lg text-the-end-700 mb-6">
                        Components for article and content presentation, including cards, categories, ratings, and sharing functionality.
                    </p>
                </div>

                <!-- Article Cards -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-chicken-comb-600 mb-4">Article Cards</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="space-y-6">
                            <!-- Full Article Card -->
                            <div>
                                <h4 class="text-h5 font-semibold mb-3">Article Card</h4>
                                <div class="max-w-md">
                                    <x-blog.article-card 
                                        title="Monitoring and evaluation visual toolkit"
                                        excerpt="A comprehensive guide to creating effective monitoring and evaluation systems for nonprofit organizations."
                                        date="{{ now()->subDays(3)->format('M j, Y') }}"
                                        readTime="5 min read"
                                        image="uploads/blog/sample-image.jpg"
                                        category="Project Design"
                                        author="Abayomi Ogundipe"
                                        authorTitle="Creative Director"
                                        authorAvatar="avatars/author.jpg"
                                        url="/resources/blog/monitoring-evaluation-toolkit"
                                    />
                                </div>
                            </div>

                            <!-- Compact Article Card -->
                            <div>
                                <h4 class="text-h5 font-semibold mb-3">Compact Article Card</h4>
                                <div class="max-w-md">
                                    <x-blog.compact-card 
                                        title="Design systems for nonprofits"
                                        date="{{ now()->subDays(1)->format('M j, Y') }}"
                                        readTime="3 min read"
                                        url="/resources/blog/design-systems-nonprofits"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-blog.article-card 
    title="Article Title"
    excerpt="Article excerpt"
    :published_at="$article-&gt;published_at"
    slug="article-slug"
    image_path="path/to/image.jpg"
    :category="$article-&gt;category"
    :author="$article-&gt;author"
/&gt;</code></pre>
                    </div>
                </div>

                <!-- Category Components -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-chicken-comb-600 mb-4">Category Components</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="space-y-4">
                            <div class="flex flex-wrap gap-2">
                                <x-blog.category type="design">Project Design</x-blog.category>
                                <x-blog.category type="trends">Communication Design</x-blog.category>
                                <x-blog.category type="strategy">Campaign Design</x-blog.category>
                                <x-blog.category type="case-studies">Research</x-blog.category>
                                <x-blog.category type="default">Tools</x-blog.category>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-blog.category type="design"&gt;Category Name&lt;/x-blog.category&gt;</code></pre>
                    </div>
                </div>
            </section>

            <!-- Work Components Section -->
            <section id="work" class="mb-16">
                <div class="mb-8">
                    <h2 class="text-h2 font-bold text-apocalyptic-orange-600 mb-4">Work Components</h2>
                    <p class="text-body-lg text-the-end-700 mb-6">
                        Components for portfolio and project showcase, including project cards, filtering, testimonials, and metrics.
                    </p>
                </div>

                <!-- Work Cards -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-apocalyptic-orange-600 mb-4">Work Cards</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="max-w-md">
                            <x-work.card 
                                title="Àlá Premium Charcoal"
                                description="Nigeria's premier export-grade hardwood charcoal supplier, specializing in wholesale distribution."
                                image="uploads/projects/sample-project.jpg"
                                url="/work/ala-premium-charcoal"
                                :tags="[
                                    ['type' => 'sector', 'label' => 'Startup'],
                                    ['type' => 'industry', 'label' => 'Environment'],
                                    ['type' => 'sdg', 'label' => 'SDG 17']
                                ]"
                            />
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-work.card 
    title="Project Title"
    excerpt="Project description"
    slug="project-slug"
    featured_image="path/to/image.jpg"
    :client="$project-&gt;client"
    :tags="$project-&gt;tags"
/&gt;</code></pre>
                    </div>
                </div>

                <!-- Work Tags -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-apocalyptic-orange-600 mb-4">Work Tags</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="space-y-4">
                            <div class="flex flex-wrap gap-2">
                                <x-work.tag type="sector" label="Nonprofit" />
                                <x-work.tag type="sector" label="Startup" />
                                <x-work.tag type="industry" label="Healthcare" />
                                <x-work.tag type="industry" label="Education" />
                                <x-work.tag type="sdg" label="SDG 1" />
                                <x-work.tag type="sdg" label="SDG 17" />
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-work.tag type="sector" label="Startup" /&gt;
&lt;x-work.tag type="industry" label="Healthcare" /&gt;
&lt;x-work.tag type="sdg" label="SDG 1" /&gt;</code></pre>
                    </div>
                </div>
            </section>

            <!-- Services Components Section -->
            <section id="services" class="mb-16">
                <div class="mb-8">
                    <h2 class="text-h2 font-bold text-pot-of-gold-600 mb-4">Services Components</h2>
                    <p class="text-body-lg text-the-end-700 mb-6">
                        Components for service and sector presentation, including service cards, sector components, and call-to-action sections.
                    </p>
                </div>

                <!-- Service Cards -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-pot-of-gold-600 mb-4">Service Cards</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="space-y-6">
                            <!-- Service Card -->
                            <div>
                                <h4 class="text-h5 font-semibold mb-3">Service Card</h4>
                                <div class="max-w-md">
                                    <x-services.service-card 
                                        title="Project Design"
                                        description="From concept to completion, we design impactful projects that drive real change for communities and organizations."
                                        icon="project-design"
                                        slug="project-design"
                                    />
                                </div>
                            </div>

                            <!-- Service Mini Card -->
                            <div>
                                <h4 class="text-h5 font-semibold mb-3">Service Mini Card</h4>
                                <div class="max-w-sm">
                                    <x-services.service-mini-card 
                                        title="Communication Design"
                                        description="Clear, compelling communication that resonates with your audience."
                                        icon="communication-design"
                                        slug="communication-design"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-services.service-card 
    title="Service Title"
    description="Service description"
    icon="service-icon"
    slug="service-slug"
/&gt;</code></pre>
                    </div>
                </div>

                <!-- Sector Cards -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-pot-of-gold-600 mb-4">Sector Cards</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="max-w-md">
                            <x-services.sector-card 
                                title="Nonprofits"
                                description="Empowering organizations that create positive social impact through strategic design solutions."
                                icon="nonprofit-icon"
                                slug="nonprofits"
                            />
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-services.sector-card 
    title="Sector Name"
    description="Sector description"
    icon="sector-icon"
    slug="sector-slug"
/&gt;</code></pre>
                    </div>
                </div>
            </section>

            <!-- Toolkit Components Section -->
            <section id="toolkit" class="mb-16">
                <div class="mb-8">
                    <h2 class="text-h2 font-bold text-pepper-green mb-4">Toolkit Components</h2>
                    <p class="text-body-lg text-the-end-700 mb-6">
                        Components for resource library and filtering, including resource cards, filtering interfaces, and custom select dropdowns.
                    </p>
                </div>

                <!-- Toolkit Cards -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-pepper-green mb-4">Toolkit Cards</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="max-w-md">
                            <x-toolkit.card 
                                title="Fundraising email marketing for nonprofits"
                                description="Create detailed profiles of your ideal audience to craft messaging that resonates with their values and needs."
                            >
                                <x-slot name="tags">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <x-toolkit.tags type="service" label="Project design" />
                                        <x-toolkit.tags type="tool" label="Logframe" />
                                    </div>
                                </x-slot>
                                <x-core.button variant="secondary" size="small" href="https://example.com">
                                    Learn more
                                </x-core.button>
                            </x-toolkit.card>
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-toolkit.card 
    title="Resource Title"
    description="Resource description"
    icon="resource-icon"
    link="https://example.com"
    :tags="$resource-&gt;tags"
/&gt;</code></pre>
                    </div>
                </div>

                <!-- Toolkit Tags -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-pepper-green mb-4">Toolkit Tags</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="space-y-4">
                            <div class="flex flex-wrap gap-2">
                                <x-toolkit.tags type="service" label="Project design" />
                                <x-toolkit.tags type="service" label="Communication design" />
                                <x-toolkit.tags type="tool" label="Mailchimp" />
                                <x-toolkit.tags type="tool" label="Logframe" />
                                <x-toolkit.tags type="tool" label="Google Ads" />
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-toolkit.tags type="service" label="Project design" /&gt;
&lt;x-toolkit.tags type="tool" label="Mailchimp" /&gt;</code></pre>
                    </div>
                </div>
            </section>

            <!-- About Components Section -->
            <section id="about" class="mb-16">
                <div class="mb-8">
                    <h2 class="text-h2 font-bold text-chicken-comb-600 mb-4">About Components</h2>
                    <p class="text-body-lg text-the-end-700 mb-6">
                        Components for team and company information, including team member profiles, partner logos, and hero sections.
                    </p>
                </div>

                <!-- Team Cards -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-chicken-comb-600 mb-4">Team Cards</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="max-w-sm">
                            <x-about.team-card 
                                name="Abayomi Ogundipe"
                                position="Founder & Design Lead"
                                image="images/team/abayomi-ogundipe.jpg"
                                linkedin="https://linkedin.com/in/abayomi-ogundipe"
                            />
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-about.team-card 
    name="Member Name"
    role="Member Role"
    image="path/to/image.jpg"
    linkedin="https://linkedin.com/in/member"
    slug="member-slug"
/&gt;</code></pre>
                    </div>
                </div>

                <!-- Partner Logos -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-chicken-comb-600 mb-4">Partner Logos</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="flex justify-center">
                            <x-about.partner-logo>
                                <a href="https://microsoft.com" target="_blank" rel="noopener noreferrer">
                                    <img src="images/partners/microsoft-logo.svg" alt="Microsoft" class="h-12 w-auto">
                                </a>
                            </x-about.partner-logo>
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-about.partner-logo 
    name="Partner Name"
    logo="path/to/logo.svg"
    url="https://partner.com"
/&gt;</code></pre>
                    </div>
                </div>
            </section>

            <!-- Home Components Section -->
            <section id="home" class="mb-16">
                <div class="mb-8">
                    <h2 class="text-h2 font-bold text-apocalyptic-orange-600 mb-4">Home Components</h2>
                    <p class="text-body-lg text-the-end-700 mb-6">
                        Homepage-specific components including hero sections, work showcases, and insights sections.
                    </p>
                </div>

                <!-- Hero Section -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-apocalyptic-orange-600 mb-4">Hero Section</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="bg-gradient-to-b from-pepper-green-50 to-white-smoke-50 p-6 rounded">
                            <h4 class="text-h1 font-black text-the-end-900 mb-4">Design that amplifies social impact</h4>
                            <p class="text-body-lg text-the-end-700 mb-6">
                                Empowering purpose-driven organizations to create meaningful change through strategic, ethical design solutions.
                            </p>
                            <x-core.button variant="secondary" size="large">Why we design for good</x-core.button>
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-home.hero-section 
    title="Hero Title"
    description="Hero description"
    button_text="Button Text"
    button_url="/link"
/&gt;</code></pre>
                    </div>
                </div>
            </section>

            <!-- Contact Components Section -->
            <section id="contact" class="mb-16">
                <div class="mb-8">
                    <h2 class="text-h2 font-bold text-pot-of-gold-600 mb-4">Contact Components</h2>
                    <p class="text-body-lg text-the-end-700 mb-6">
                        Components for contact and inquiry forms, including contact forms and specialized inquiry forms.
                    </p>
                </div>

                <!-- Contact Form -->
                <div class="mb-12">
                    <h3 class="text-h3 font-semibold text-pot-of-gold-600 mb-4">Contact Form</h3>
                    <div class="p-6 bg-white rounded-lg shadow-sm border border-white-smoke-300 mb-4">
                        <div class="max-w-md">
                            <form class="space-y-4">
                                <x-core.text-input name="name" placeholder="Your Name" />
                                <x-core.text-input type="email" name="email" placeholder="Your Email" />
                                <x-core.text-input name="subject" placeholder="Subject" />
                                <x-core.textarea name="message" placeholder="Your Message" rows="4" />
                                <x-core.button variant="primary" size="medium" type="submit">Send Message</x-core.button>
                            </form>
                        </div>
                    </div>
                    <div class="p-4 bg-white-smoke-50 rounded border border-white-smoke-300">
                        <h4 class="text-h5 font-semibold mb-2">Usage:</h4>
                        <pre class="text-body-sm bg-white-smoke-100 p-3 rounded overflow-x-auto"><code>&lt;x-contact.form 
    action="/contact"
    method="POST"
/&gt;</code></pre>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <div class="text-center pt-12 border-t border-white-smoke-300">
                <p class="text-body-sm text-the-end-700">
                    This showcase demonstrates the complete Festa Design Studio component library. 
                    For more information, visit our <a href="/resources/design-system" class="text-pepper-green-600 hover:text-pepper-green-700">design system documentation</a>.
                </p>
            </div>
        </div>
    </div>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Highlight active section in navigation
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('nav a[href^="#"]');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('bg-pepper-green-100', 'bg-chicken-comb-100', 'bg-apocalyptic-orange-100', 'bg-pot-of-gold-100');
                if (link.getAttribute('href').substring(1) === current) {
                    if (current === 'core' || current === 'toolkit') {
                        link.classList.add('bg-pepper-green-100');
                    } else if (current === 'blog' || current === 'about') {
                        link.classList.add('bg-chicken-comb-100');
                    } else if (current === 'work' || current === 'home') {
                        link.classList.add('bg-apocalyptic-orange-100');
                    } else if (current === 'services' || current === 'contact') {
                        link.classList.add('bg-pot-of-gold-100');
                    }
                }
            });
        });
    </script>
@endsection