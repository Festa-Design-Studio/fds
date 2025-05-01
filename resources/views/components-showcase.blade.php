@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-h1 font-bold text-the-end-900 mb-10">Festa Component Showcase</h1>
        
        <!-- Quick Access Links -->
        <div class="mb-10 p-4 bg-white-smoke-100 rounded-lg border border-white-smoke-300">
            <h2 class="text-h4 font-medium text-the-end-900 mb-4">Quick Access</h2>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('test.thank-you') }}" target="_blank" class="inline-flex items-center px-6 py-3 bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 transition-colors">
                    View Thank You Page
                </a>
                <a href="{{ url('/thank-you') }}" target="_blank" class="inline-flex items-center px-6 py-3 bg-pepper-green-600 text-white-smoke-50 rounded-full hover:bg-pepper-green-700 transition-colors">
                    Original Thank You URL
                </a>
            </div>
        </div>
        
        <section class="mb-16">
            <h2 class="text-h3 font-semibold text-the-end-900 mb-6">Core Components</h2>
            
            <div class="space-y-10">
                <!-- Navigation Components -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Navigation Components</h3>
                    
                    <div class="space-y-8">
                        <!-- Header Component -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Header</h4>
                            <p class="text-body text-the-end-700 mb-3">Note: The header is implemented throughout the site. Below is a static preview.</p>
                            <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                                <!-- Static preview image of the header to avoid duplicating functionality -->
                                <div class="bg-white-smoke-50 p-4">
                                    <img src="https://placehold.co/1200x160/fff/333?text=Festa+Header+Component" alt="Header Component Preview" class="w-full rounded-lg shadow-sm" />
                                    <p class="mt-2 text-center text-sm text-the-end-500">Header component is implemented sitewide</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Breadcrumbs Component -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Breadcrumbs</h4>
                            <div class="border border-white-smoke-300 rounded-xl overflow-hidden bg-white p-6">
                                <x-core.breadcrumbs :items="[
                                    ['label' => 'Services', 'url' => '/services'],
                                    ['label' => 'Web Design', 'url' => '/services/web-design'],
                                    ['label' => 'Responsive Development', 'url' => '']
                                ]" />
                            </div>
                        </div>
                        
                        <!-- Truncated Breadcrumbs Component -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Truncated Breadcrumbs</h4>
                            <div class="border border-white-smoke-300 rounded-xl overflow-hidden bg-white p-6">
                                <x-core.breadcrumbs-truncated 
                                    :homeUrl="'/'" 
                                    :homeLabel="'Home'" 
                                    :items="[
                                        ['label' => 'Services', 'url' => '/services'],
                                        ['label' => 'Web Design', 'url' => '/services/web-design'],
                                        ['label' => 'Advanced Techniques', 'url' => '/services/web-design/advanced-techniques']
                                    ]" 
                                    :currentLabel="'Responsive Development'" 
                                    :maxWidth="'150px'" 
                                />
                            </div>
                        </div>
                        
                        <!-- Footer Component -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Footer</h4>
                            <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                                <x-core.footer :simplified="true" />
                                <div class="py-4 px-4 bg-white-smoke-100 text-center text-body-sm text-the-end-600">
                                    <p>Note: Full footer with all sections is implemented throughout the site.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Buttons -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Buttons</h3>
                    
                    <p class="text-body text-the-end-700 mb-6">Button variants showcase</p>
                    
                    <div class="flex flex-wrap gap-4 mb-8">
                        <x-core.button variant="primary">
                            Primary Button
                        </x-core.button>
                        
                        <x-core.button variant="secondary">
                            Secondary Button
                        </x-core.button>
                        
                        <x-core.button variant="neutral">
                            Neutral Button
                        </x-core.button>
                    </div>
                    
                    <p class="text-body text-the-end-700 mb-6">Button sizes showcase</p>
                    
                    <div class="flex flex-wrap gap-4">
                        <x-core.button variant="primary" size="small">
                            Small Button
                        </x-core.button>
                        
                        <x-core.button variant="primary" size="medium">
                            Medium Button
                        </x-core.button>
                        
                        <x-core.button variant="primary" size="large">
                            Large Button
                        </x-core.button>
                    </div>
                </div>
                
                <!-- Tags -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Tags</h3>
                    
                    <p class="text-body text-the-end-700 mb-6">Tag variants showcase</p>
                    
                    <div class="flex flex-wrap gap-4 mb-8">
                        <x-core.tag>
                            Default Tag
                        </x-core.tag>
                        
                        <x-core.tag variant="success">
                            Success
                        </x-core.tag>
                        
                        <x-core.tag variant="warning">
                            Warning
                        </x-core.tag>
                        
                        <x-core.tag variant="error">
                            Error
                        </x-core.tag>
                        
                        <x-core.tag variant="info">
                            Info
                        </x-core.tag>
                    </div>
                    
                    <p class="text-body text-the-end-700 mb-6">Tags with icons</p>
                    
                    <div class="flex flex-wrap gap-4">
                        <x-core.tag :withIcon="true">
                            Default
                        </x-core.tag>
                        
                        <x-core.tag variant="success" :withIcon="true">
                            Success
                        </x-core.tag>
                        
                        <x-core.tag variant="warning" :withIcon="true">
                            Warning
                        </x-core.tag>
                        
                        <x-core.tag variant="error" :withIcon="true">
                            Error
                        </x-core.tag>
                        
                        <x-core.tag variant="info" :withIcon="true">
                            Info
                        </x-core.tag>
                    </div>
                </div>
                
                <!-- Form elements -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Form Elements</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Text inputs -->
                        <div class="space-y-6">
                            <x-core.input 
                                name="text-input"
                                label="Text Input"
                                placeholder="Enter text here"
                            />
                            
                            <x-core.input 
                                name="search"
                                placeholder="Search..."
                                :leadingIcon="true"
                            >
                                <x-slot name="leadingIcon">
                                    <svg class="h-5 w-5 text-the-end-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </x-slot>
                            </x-core.input>
                            
                            <x-core.password-input 
                                name="password"
                                label="Password Input"
                                placeholder="Enter your password"
                            />
                            
                            <x-core.select 
                                name="options" 
                                label="Select Input"
                                placeholder="Choose an option"
                            >
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </x-core.select>
                            
                            <x-core.textarea 
                                name="message"
                                label="Text Area"
                                placeholder="Tell us about your project"
                                rows="5"
                            ></x-core.textarea>
                        </div>
                        
                        <!-- Radio and file upload -->
                        <div class="space-y-6">
                            <div class="space-y-2">
                                <label class="text-the-end-900 text-body-sm font-medium">Radio Options</label>
                                <div class="space-y-2">
                                    <x-core.radio 
                                        name="choices" 
                                        value="option1" 
                                        label="Option 1" 
                                        checked="true"
                                    />
                                    
                                    <x-core.radio 
                                        name="choices" 
                                        value="option2" 
                                        label="Option 2" 
                                    />
                                    
                                    <x-core.radio 
                                        name="choices" 
                                        value="option3" 
                                        label="Option 3" 
                                        disabled="true"
                                    />
                                </div>
                            </div>
                            
                            <x-core.file-upload 
                                name="document" 
                                label="File Upload Component" 
                                accept=".pdf,.doc,.docx"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Team Member Components -->
        <section class="mb-16">
            <h2 class="text-h3 font-semibold text-the-end-900 mb-6">Team Member Components</h2>
            
            <div class="space-y-10 p-6 bg-white-smoke-50 rounded-lg">
                <!-- Avatar Component -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Team Member Avatar</h3>
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden bg-white p-6">
                        <x-about.team.team-member.avatar 
                            name="Abayomi Ogundipe"
                            title="Founder, Festa Design Studio"
                            email="abayomi@festa.design"
                            linkedin="https://www.linkedin.com/in/abayomiogundipe"
                            avatar="/src/img/Abayomi-Ogundipe.jpg"
                        />
                    </div>
                </div>
                
                <!-- Summary Component -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Team Member Summary</h3>
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden bg-white p-6">
                        <x-about.team.team-member.summary 
                            summary="International development professional with 15+ years of experience in program design, management, and fundraising. Demonstrated success in leading global teams, securing over $900,000 in funding, and implementing high-impact educational initiatives.

Expertise in developing innovative STEAM (Science, Tech, Engineering, Arts & Maths) programs reaching 3,200+ underserved youth and managing cross-cultural partnerships with UN agencies, OECD donors, private philanthropy and corporate sponsors."
                        />
                    </div>
                </div>
                
                <!-- Experience Component -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Team Member Experience</h3>
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden bg-white p-6">
                        <x-about.team.team-member.experience 
                            :experiences="[
                                [
                                    'title' => 'Founder',
                                    'company' => 'Festa Design Studio',
                                    'period' => '2023 – Present',
                                    'description' => 'Leading UX research, design systems, and implementation of accessible web applications for nonprofits and mission-driven startups.',
                                    'logo' => '/src/img/fds-logomark.png',
                                ],
                                [
                                    'title' => 'Founder',
                                    'company' => 'TEKEDU',
                                    'period' => '2013 – 2023',
                                    'description' => 'Designed digital experiences and optimized interfaces for multiple nonprofit organizations, boosting user engagement.',
                                    'logo' => '/src/img/tekedu.png',
                                ]
                            ]"
                            title="Professional experience"
                        />
                    </div>
                </div>
                
                <!-- Education Component -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Team Member Education</h3>
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden bg-white p-6">
                        <x-about.team.team-member.education 
                            :education="[
                                [
                                    'degree' => 'Advanced Diploma, International Development',
                                    'institution' => 'University of Cambridge, UK',
                                ],
                                [
                                    'degree' => 'B.Sc. in Business Administration',
                                    'institution' => 'University of Lagos, Nigeria',
                                ]
                            ]"
                        />
                    </div>
                </div>
                
                <!-- Certifications Component -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Team Member Certifications</h3>
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden bg-white p-6">
                        <x-about.team.team-member.certifications 
                            :certifications="[
                                [
                                    'name' => 'Professional Diploma in UX Design',
                                    'institution' => 'UX Design Institute, Ireland',
                                    'logo' => '/src/img/ux-design-institute.jpeg',
                                ],
                                [
                                    'name' => 'Professional Diploma in Front-end Web Development',
                                    'institution' => 'General Assembly, Washington D.C.',
                                    'logo' => '/src/img/general-assembly.png',
                                ]
                            ]"
                        />
                    </div>
                </div>
                
                <!-- Skills Component -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Team Member Skills</h3>
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden bg-white p-6">
                        <x-about.team.team-member.skills
                            :skills="[
                                'UX research & design' => ['UX Research', 'Interaction Design', 'Design Systems', 'Figma'],
                                'Frontend web development' => ['Tailwind CSS', 'Laravel', 'PHP', 'jQuery', 'HTML5', 'CSS'],
                            ]"
                        />
                    </div>
                </div>
                
                <!-- Press Component -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Team Member Press</h3>
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden bg-white p-6">
                        <x-about.team.team-member.press
                            :press="[
                                [
                                    'title' => 'Moldova: Hire Me',
                                    'source' => 'The Institute for War & Peace Reporting',
                                    'url' => 'https://iwpr.net/impact/moldova-hire-me',
                                ],
                                [
                                    'title' => 'Moldova ramps up IT training for girls',
                                    'source' => 'UN Women Europe and Central Asia',
                                    'url' => 'https://example.com/article-2',
                                ]
                            ]"
                        />
                    </div>
                </div>
            </div>
        </section>
        
        <section class="mb-16">
            <h2 class="text-h3 font-semibold text-the-end-900 mb-6">Page Components</h2>
            
            <div class="space-y-10">
                <!-- Home Hero -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Home Hero</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-home.hero 
                            title="Creative Digital Solutions"
                            subtitle="Transforming ideas into exceptional digital experiences"
                        />
                    </div>
                </div>
                
                <!-- Blog Components -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Blog Components</h3>
                    
                    <div class="space-y-8">
                        <!-- Blog Categories -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Article Categories</h4>
                            <div class="p-6 bg-the-end-100/30 rounded-lg border border-white-smoke-300">
                                <div class="flex flex-wrap gap-3">
                                    <x-blog.category type="design">Design tips</x-blog.category>
                                    <x-blog.category type="trends">Trends</x-blog.category>
                                    <x-blog.category type="strategy">Strategy</x-blog.category>
                                    <x-blog.category type="case-studies">Case Studies</x-blog.category>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Article Cards -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Article Cards</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <x-blog.article-card 
                                    title="The Future of Sustainable Design"
                                    excerpt="Discover how sustainable design practices are shaping the future of our industry and creating positive environmental impact."
                                    date="Aug 15, 2023"
                                    readTime="5 min read"
                                    image="https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                    category="Design tips"
                                    categoryType="design"
                                    author="Abayomi Ogundipe"
                                    authorTitle="Design Lead"
                                    authorAvatar="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                />
                                
                                <x-blog.article-card 
                                    title="Web3 and the Evolution of Digital Marketing"
                                    excerpt="An in-depth look at how Web3 technologies are revolutionizing marketing strategies for forward-thinking brands."
                                    date="Jul 22, 2023"
                                    readTime="8 min read"
                                    image="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                    category="Trends"
                                    categoryType="trends"
                                    author="Sarah Johnson"
                                    authorTitle="Marketing Strategist"
                                    authorAvatar="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                />
                                
                                <x-blog.article-card 
                                    title="Building a Cohesive Brand Identity"
                                    excerpt="Learn the key elements needed to create a consistent and effective brand identity that resonates with your target audience."
                                    date="Jun 10, 2023"
                                    readTime="6 min read"
                                    image="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                    category="Strategy"
                                    categoryType="strategy"
                                    author="Michael Chen"
                                    authorTitle="Brand Strategist"
                                    authorAvatar="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                />
                            </div>
                        </div>
                        
                        <!-- Compact Article Cards -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Compact Article Cards</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <x-blog.compact-card 
                                    title="Accessibility in Design Systems"
                                    date="Aug 15, 2023"
                                    readTime="5 min read"
                                    image="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                    url="#"
                                />
                                
                                <x-blog.compact-card 
                                    title="Color Theory for Digital Products"
                                    date="Jul 23, 2023"
                                    readTime="4 min read"
                                    image="https://images.unsplash.com/photo-1579546929518-9e396f3cc809?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                    url="#"
                                />
                            </div>
                        </div>
                        
                        <!-- Featured Article -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Featured Article</h4>
                            <x-blog.featured-article 
                                title="How Purpose-Driven Design Transformed a Nonprofit's Digital Presence"
                                excerpt="Discover how our collaborative approach helped a community organization increase engagement by 230% and expand their reach to new audiences."
                                image="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                category="Case Study"
                                categoryType="case-studies"
                                author="Sarah Johnson"
                                authorTitle="Lead Designer"
                                authorAvatar="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                date="June 12, 2023"
                            />
                        </div>
                        
                        <!-- Article Grid Section Layout -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Article Grid Section Layout</h4>
                            <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                                <x-blog.grid-section 
                                    title="Our Blog"
                                    subtitle="Insights and inspiration from the world of design"
                                    :categories="[
                                        ['type' => 'design', 'label' => 'Design tips'],
                                        ['type' => 'trends', 'label' => 'Trends'],
                                        ['type' => 'strategy', 'label' => 'Strategy'],
                                        ['type' => 'case-studies', 'label' => 'Case Studies']
                                    ]"
                                >
                                    <x-blog.article-card 
                                        title="The Future of Sustainable Design"
                                        excerpt="Discover how sustainable design practices are shaping the future."
                                        date="Aug 15, 2023"
                                        readTime="5 min read"
                                        image="https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                        category="Design tips"
                                        categoryType="design"
                                        author="Abayomi Ogundipe"
                                        authorTitle="Design Lead"
                                        authorAvatar="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                        url="/blog/future-sustainable-design"
                                    />
                                    
                                    <x-blog.article-card 
                                        title="Web3 and Marketing Evolution"
                                        excerpt="An in-depth look at how Web3 technologies are changing marketing."
                                        date="Jul 22, 2023"
                                        readTime="8 min read"
                                        image="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                        category="Trends"
                                        categoryType="trends"
                                        author="Sarah Johnson"
                                        authorTitle="Marketing Strategist"
                                        authorAvatar="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                        url="/blog/web3-marketing-evolution"
                                    />
                                    
                                    <x-blog.article-card 
                                        title="Building Brand Identity"
                                        excerpt="Learn the key elements needed to create a consistent brand identity."
                                        date="Jun 10, 2023"
                                        readTime="6 min read"
                                        image="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                        category="Strategy"
                                        categoryType="strategy"
                                        author="Michael Chen"
                                        authorTitle="Brand Strategist"
                                        authorAvatar="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                        url="/blog/building-brand-identity"
                                    />
                                </x-blog.grid-section>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Work Card Grid -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Work Cards</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <x-work.card 
                            title="Brand Redesign for Tech Startup"
                            description="A comprehensive brand identity redesign that helped this startup stand out in a competitive market."
                            image="https://images.unsplash.com/photo-1587440871875-191322ee64b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                            :tags="[
                                ['type' => 'sector', 'label' => 'Startup'],
                                ['type' => 'industry', 'label' => 'Technology']
                            ]"
                        />
                        
                        <x-work.card 
                            title="E-commerce Website Redesign"
                            description="A user-focused redesign that increased conversions by 38% and improved overall customer satisfaction."
                            image="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                            :tags="[
                                ['type' => 'sector', 'label' => 'Retail'],
                                ['type' => 'industry', 'label' => 'E-commerce']
                            ]"
                        />
                        
                        <x-work.card 
                            title="Mobile App UI/UX"
                            description="An intuitive, accessible mobile app design that simplified a complex healthcare process for users."
                            image="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                            :tags="[
                                ['type' => 'sector', 'label' => 'Healthcare'],
                                ['type' => 'industry', 'label' => 'Technology'],
                                ['type' => 'sdg', 'label' => 'Good Health & Well-being']
                            ]"
                        />
                    </div>
                </div>
                
                <!-- Services Features -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Service Features</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <x-services.feature 
                            title="Web Design"
                            description="Create beautiful, responsive websites that engage users and drive conversions."
                        >
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </x-slot>
                        </x-services.feature>
                        
                        <x-services.feature 
                            title="Brand Identity"
                            description="Develop a strong, cohesive brand identity that resonates with your target audience."
                            bgColor="bg-chicken-comb-50"
                        >
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                </svg>
                            </x-slot>
                        </x-services.feature>
                        
                        <x-services.feature 
                            title="Digital Marketing"
                            description="Increase your online visibility and reach your target audience with effective digital marketing strategies."
                            bgColor="bg-pepper-green-50"
                        >
                            <x-slot name="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                </svg>
                            </x-slot>
                        </x-services.feature>
                    </div>
                </div>
                
                <!-- Services Components -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Services Components</h3>
                    
                    <div class="space-y-16">
                        <!-- Service Card Hero Section -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Service Card Hero Section</h4>
                            <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                                <x-services.service-card-hero-section>
                                    <x-services.service-card-grid>
                                        <x-services.service-card 
                                            title="Brand Identity"
                                            description="Develop a cohesive visual identity that resonates with your audience and communicates your values."
                                            linkText="Learn about our branding process"
                                        />
                                        
                                        <x-services.service-card 
                                            title="UX Design"
                                            description="Create intuitive, accessible user experiences that prioritize ease of use and engagement."
                                            linkText="Explore our UX methodology"
                                        />
                                        
                                        <x-services.service-card 
                                            title="Digital Strategy"
                                            description="Build a comprehensive digital strategy aligned with your mission and organizational goals."
                                            linkText="Discover our strategic approach"
                                        />
                                    </x-services.service-card-grid>
                                </x-services.service-card-hero-section>
                            </div>
                        </div>
                        
                        <!-- Industry Expertise Section -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Industry Expertise Section</h4>
                            <div class="border border-white-smoke-300 rounded-xl overflow-hidden p-6">
                                <x-services.industry-expertise-section
                                    title="Service Design"
                                    description="Creating meaningful service experiences that improve satisfaction and outcomes for all stakeholders involved in the process."
                                >
                                    <x-services.service-mini-cards-grid>
                                        <x-services.service-mini-card
                                            title="Healthcare"
                                            description="Improving patient experience and operational efficiency through thoughtful service design"
                                        />
                                        
                                        <x-services.service-mini-card
                                            title="Education"
                                            description="Enhancing learning outcomes through accessible, inclusive educational experiences"
                                        />
                                        
                                        <x-services.service-mini-card
                                            title="Financial Services"
                                            description="Simplifying complex financial processes to improve literacy and decision-making"
                                        />
                                    </x-services.service-mini-cards-grid>
                                </x-services.industry-expertise-section>
                            </div>
                        </div>
                        
                        <!-- Sectors We Serve Section -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Sectors We Serve Section</h4>
                            <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                                <x-services.sectors-we-serve-section>
                                    <x-services.sector-card-grid>
                                        <x-services.sector-card
                                            title="Nonprofit"
                                            description="Amplify your impact with purpose-driven design solutions that connect with your community and advance your mission."
                                        />
                                        
                                        <x-services.sector-card
                                            title="Education"
                                            description="Create engaging learning experiences and platforms that improve outcomes and accessibility for all students."
                                        />
                                    </x-services.sector-card-grid>
                                </x-services.sectors-we-serve-section>
                            </div>
                        </div>
                        
                        <!-- Services Page Example -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Services Page Layout Example</h4>
                            <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                                <div class="p-4 bg-white-smoke-50">
                                    <!-- Breadcrumb -->
                                    <x-core.breadcrumbs :items="[
                                        ['label' => 'Services', 'url' => '']
                                    ]" class="mb-6" />
                                    
                                    <!-- Hero Section -->
                                    <x-services.service-card-hero-section>
                                        <div class="text-center space-y-6 max-w-3xl mx-auto">
                                            <span class="text-body-sm text-chicken-comb-600 uppercase tracking-wider">Services</span>
                                            <h1 class="text-h1 font-black md:max-w-xl mx-auto text-the-end-900">Design that transforms purpose into impact</h1>
                                            <p class="text-body-lg md:max-w-xl mx-auto text-the-end-700">
                                                Strategic design services tailored to amplify your organization's impact and advance your mission for social good
                                            </p>
                                        </div>
                                    </x-services.service-card-hero-section>
                                    
                                    <!-- Services Grid -->
                                    <div class="max-w-7xl mx-auto py-20 px-4 md:px-8 lg:px-16">
                                        <x-services.service-card-grid>
                                            <x-services.service-card
                                                title="Project Design"
                                                description="Comprehensive design solutions for projects that require strategic thinking and creative execution."
                                                linkText="Learn more"
                                            />
                                            
                                            <x-services.service-card
                                                title="Communication Design"
                                                description="Strategic visual and verbal communication that connects with your audience and amplifies your message."
                                                linkText="Learn more"
                                            />
                                            
                                            <x-services.service-card
                                                title="Campaign Design"
                                                description="End-to-end campaign design that drives engagement and delivers measurable results for your initiatives."
                                                linkText="Learn more"
                                            />
                                        </x-services.service-card-grid>
                                    </div>
                                    
                                    <!-- Sectors We Serve Section -->
                                    <x-services.sectors-we-serve-section>
                                        <x-services.sector-card-grid>
                                            <x-services.sector-card
                                                title="Nonprofit"
                                                description="Supporting missions that drive social change with impactful design solutions."
                                            />
                                            <x-services.sector-card
                                                title="Startups"
                                                description="Helping purpose-driven businesses scale their impact through effective design."
                                            />
                                        </x-services.sector-card-grid>
                                    </x-services.sectors-we-serve-section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Work Components Showcase Section -->
        <section class="mb-16">
            <h2 class="text-h3 font-semibold text-the-end-900 mb-6">Work Components</h2>
            
            <div class="space-y-16">
                <!-- Work Hero -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Work Hero</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-work.hero 
                            title="Our Portfolio of Impact"
                            description="Explore our collection of purpose-driven projects that create meaningful change for organizations making a difference."
                        />
                    </div>
                </div>
                
                <!-- Work Metrics -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Impact Metrics</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-work.metrics 
                            :metrics="[
                                [
                                    'value' => '500+',
                                    'title' => 'Organizations',
                                    'description' => 'Empowered through purposeful design',
                                    'colorClass' => 'text-chicken-comb-600'
                                ],
                                [
                                    'value' => '98%',
                                    'title' => 'Satisfaction',
                                    'description' => 'From our partner organizations',
                                    'colorClass' => 'text-pepper-green-600'
                                ],
                                [
                                    'value' => '1M+',
                                    'title' => 'Lives Impacted',
                                    'description' => 'Through our collaborative work',
                                    'colorClass' => 'text-apocalyptic-orange-600'
                                ],
                                [
                                    'value' => '10+',
                                    'title' => 'Years',
                                    'description' => 'Creating meaningful change',
                                    'colorClass' => 'text-pot-of-gold-600'
                                ]
                            ]"
                        />
                    </div>
                </div>
                
                <!-- Work Filter -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Work Filter</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-work.filter 
                            :sectorOptions="[
                                'nonprofit' => 'Nonprofit',
                                'startup' => 'Startup',
                                'education' => 'Education',
                                'healthcare' => 'Healthcare'
                            ]"
                            :industryOptions="[
                                'tech' => 'Technology',
                                'healthcare' => 'Healthcare',
                                'education' => 'Education',
                                'environment' => 'Environment'
                            ]"
                            :sdgOptions="[
                                'sdg1' => 'No Poverty',
                                'sdg2' => 'Zero Hunger',
                                'sdg3' => 'Good Health & Well-being',
                                'sdg4' => 'Quality Education',
                                'sdg13' => 'Climate Action'
                            ]"
                            searchPlaceholder="Search projects..."
                        />
                    </div>
                </div>
                
                <!-- Work Tags -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Work Tags</h3>
                    
                    <div class="p-6 bg-white-smoke-50 rounded-lg border border-white-smoke-300">
                        <div class="flex flex-col gap-6">
                            <div>
                                <h4 class="text-h5 font-medium text-the-end-900 mb-3">Individual Tags</h4>
                                <div class="flex flex-wrap gap-3">
                                    <x-work.tag type="sector" label="Nonprofit" />
                                    <x-work.tag type="industry" label="Healthcare" />
                                    <x-work.tag type="sdg" label="Climate Action" />
                                </div>
                            </div>
                            
                            <div>
                                <h4 class="text-h5 font-medium text-the-end-900 mb-3">Tag Group</h4>
                                <x-work.tag-group 
                                    :tags="[
                                        ['type' => 'sector', 'label' => 'Nonprofit'],
                                        ['type' => 'industry', 'label' => 'Healthcare'],
                                        ['type' => 'sdg', 'label' => 'Climate Action']
                                    ]"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Work Card and Grid -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Work Grid</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-work.grid 
                            title="Featured Projects"
                            :items="[
                                [
                                    'title' => 'Eco-Friendly Packaging Design',
                                    'description' => 'Redesigned packaging to reduce environmental impact while maintaining product protection and brand appeal.',
                                    'image' => 'https://images.unsplash.com/photo-1605600659873-d808a13e4d2a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
                                    'url' => '#',
                                    'tags' => [
                                        ['type' => 'sector', 'label' => 'Consumer Goods'],
                                        ['type' => 'sdg', 'label' => 'Responsible Consumption']
                                    ]
                                ],
                                [
                                    'title' => 'Health Education Campaign',
                                    'description' => 'Created accessible health education materials that reached over 25,000 underserved community members.',
                                    'image' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
                                    'url' => '#',
                                    'tags' => [
                                        ['type' => 'sector', 'label' => 'Nonprofit'],
                                        ['type' => 'industry', 'label' => 'Healthcare'],
                                        ['type' => 'sdg', 'label' => 'Good Health & Well-being']
                                    ]
                                ],
                                [
                                    'title' => 'Community Engagement Platform',
                                    'description' => 'Built a digital platform that connected community organizations with volunteers, increasing participation by 215%.',
                                    'image' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
                                    'url' => '#',
                                    'tags' => [
                                        ['type' => 'sector', 'label' => 'Nonprofit'],
                                        ['type' => 'industry', 'label' => 'Community']
                                    ]
                                ],
                                [
                                    'title' => 'Nonprofit Rebrand',
                                    'description' => 'Revitalized a 20-year-old nonprofit\'s brand identity to appeal to both long-time supporters and new audiences.',
                                    'image' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
                                    'url' => '#',
                                    'tags' => [
                                        ['type' => 'sector', 'label' => 'Nonprofit'],
                                        ['type' => 'industry', 'label' => 'Brand Identity']
                                    ]
                                ]
                            ]"
                        >
                            <x-slot name="footer">
                                <x-core.button variant="secondary" size="large">
                                    Load More Projects
                                </x-core.button>
                            </x-slot>
                        </x-work.grid>
                    </div>
                </div>
                
                <!-- Work Testimonials -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Testimonials</h3>
                    
                    <div>
                        <h4 class="text-h5 font-medium text-the-end-900 mb-3">Individual Testimonial</h4>
                        <div class="mb-8">
                            <x-work.testimonial 
                                quote='The design system has completely transformed how we approach our projects. We've seen a 45% increase in engagement since implementing their recommendations.'
                                authorName="Elena Rodriguez"
                                authorTitle="Lead Designer, TechCorp"
                            />
                        </div>
                        
                        <h4 class="text-h5 font-medium text-the-end-900 mb-3">Testimonial Section</h4>
                        <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                            <x-work.testimonial-section 
                                title="What Our Partners Say"
                                description="Real stories from organizations making a difference with our collaborative approach to social impact design."
                                :testimonials="[
                                    [
                                        'quote' => 'The design system has completely transformed how we approach our projects. We\'ve seen a 45% increase in engagement.',
                                        'authorName' => 'Elena Rodriguez',
                                        'authorTitle' => 'Lead Designer, TechCorp'
                                    ],
                                    [
                                        'quote' => 'Working with Festa helped us clarify our message and reach more people in need. Their strategic approach made all the difference.',
                                        'authorName' => 'Michael Chen',
                                        'authorTitle' => 'Executive Director, Health Forward'
                                    ],
                                    [
                                        'quote' => 'Our rebrand exceeded all expectations. Festa took the time to understand our mission and translated it beautifully into our visual identity.',
                                        'authorName' => 'Sarah Johnson',
                                        'authorTitle' => 'Communications Director, EcoAction'
                                    ]
                                ]"
                            />
                        </div>
                    </div>
                </div>
                
                <!-- Case Study Components -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Case Study Components</h3>
                    
                    <div class="space-y-8">
                        <!-- Case Study Header Component -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Case Study Header</h4>
                            <div class="border border-white-smoke-300 rounded-xl overflow-hidden bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50 p-6">
                                <x-work.case-study-header
                                    title="Redesigning for Purpose — Ethical UX for Dr. G's Lab"
                                    :client="(object)['name' => 'Dr. G\'s Lab', 'slug' => 'dr-gs-lab']"
                                    sector="Nonprofit"
                                    industry="Research and development"
                                    sdgAlignment="Quality education"
                                    excerpt="Dr. G's Lab is a mission-driven organization at the intersection of science and empathy. The team approached Festa Design Studio to rethink how their digital presence could better reflect their trauma-informed, inclusive, and ethical design values."
                                    featuredImage="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                />
                            </div>
                        </div>
                        
                        <!-- Case Study Body Component -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Case Study Body</h4>
                            <div class="border border-white-smoke-300 rounded-xl overflow-hidden bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50 p-6">
                                <x-work.case-study-body
                                    objectives="<h3 class='text-h4 font-semibold text-the-end-900'>Redefine brand positioning</h3>
                                    <p class='text-body-lg text-the-end-700'>Translate the core values of trauma-informed research, inclusivity, and ethics into a coherent and compelling brand identity.</p>"
                                    challenge="<p class='text-body text-the-end-700'>Despite a powerful mission and committed team, Dr. G's Lab struggled with misalignment between their internal identity and their public-facing content.</p>
                                    
                                    <div class='space-y-3'>
                                        <h4 class='text-h6 font-medium text-chicken-comb-600'>Fragmented messaging</h4>
                                        <p class='text-body text-the-end-700'>The previous site failed to communicate the full scope of services and impact areas. Messaging lacked emotional depth and was inconsistent across channels.</p>
                                    </div>"
                                    solution="<p class='text-body text-the-end-700'>Our response combined UX research, strategic communication design, and ethical branding to realign Dr. G's Lab's public presence with their mission.</p>"
                                    :solutionGallery="[
                                        ['url' => 'https://images.unsplash.com/photo-1523726491678-bf852e717f6a', 'alt' => 'Solution image', 'caption' => 'Informative caption that provides context for the image'],
                                        ['url' => 'https://images.unsplash.com/photo-1523726491678-bf852e717f6a', 'alt' => 'Solution image', 'caption' => 'Informative caption that provides context for the image']
                                    ]"
                                    results="<p class='text-body text-the-end-700'>Our work with Dr. G's Lab generated measurable improvements and increased brand clarity across every touchpoint.</p>
                                    
                                    <div class='space-y-3'>
                                        <h4 class='text-h6 font-medium text-chicken-comb-600'>Refined and aligned messaging</h4>
                                        <p class='text-body text-the-end-700'>Stakeholders could clearly articulate what the lab stands for and how it differs from competitors. Messaging matched mission.</p>
                                    </div>"
                                />
                            </div>
                        </div>
                        
                        <!-- Case Study Footer Component -->
                        <div>
                            <h4 class="text-h5 font-medium text-the-end-900 mb-3">Case Study Footer</h4>
                            <div class="border border-white-smoke-300 rounded-xl overflow-hidden bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50 p-6">
                                <x-work.case-study-footer
                                    :previousProject="(object)['title' => 'Previous Case Study', 'slug' => 'previous-case-study']"
                                    :nextProject="(object)['title' => 'Next Case Study', 'slug' => 'next-case-study']"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="mb-16">
            <h2 class="text-h3 font-semibold text-the-end-900 mb-6">Blog Show Page Components</h2>
            
            <div class="space-y-10">
                <!-- Article Header -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Article Header</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-blog.article-header 
                            :article="[
                                'title' => 'Creating Effective User Experiences with Modern Design Principles',
                                'excerpt' => 'Learn how to apply modern design principles to create intuitive and engaging user experiences that delight your audience.',
                                'category' => 'UX Design',
                                'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
                                'published_at' => now()->subDays(5),
                                'reading_time' => 7,
                                'author' => [
                                    'name' => 'Samuel Wilson',
                                    'avatar' => 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80',
                                    'title' => 'Lead Experience Designer'
                                ]
                            ]"
                        />
                    </div>
                </div>
                
                <!-- Article Interaction Components -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Article Interaction Components</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden p-8">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 border-t border-b border-the-end-200 py-4">
                            <!-- Share Article -->
                            <x-blog.rate-article :articleId="123" />
                            
                            <!-- Rate Article -->
                            <x-blog.share-article 
                                title="Creating Effective User Experiences with Modern Design Principles"
                                url="https://yourdomain.com/blog/creating-effective-user-experiences"
                            />
                        </div>
                    </div>
                </div>
                
                <!-- Related Articles Section -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Related Articles Section</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden p-8">
                        <x-blog.related-articles-section 
                            title="You Might Also Like"
                            :articles="[
                                [
                                    'title' => 'The Psychology Behind Effective UI Design',
                                    'excerpt' => 'Understanding how users think and interact with digital interfaces is key to creating effective designs.',
                                    'url' => '#',
                                    'thumbnail' => 'https://images.unsplash.com/photo-1517430816045-df4b7de11d1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80'
                                ],
                                [
                                    'title' => 'Color Theory for Digital Products',
                                    'excerpt' => 'Learn how to use color effectively to create accessible, engaging, and brand-consistent digital products.',
                                    'url' => '#',
                                    'thumbnail' => 'https://images.unsplash.com/photo-1579546929518-9e396f3cc809?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80'
                                ],
                                [
                                    'title' => 'Implementing Effective Design Systems',
                                    'excerpt' => 'A comprehensive guide to creating, implementing, and maintaining design systems for scalable products.',
                                    'url' => '#',
                                    'thumbnail' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80'
                                ]
                            ]"
                        />
                    </div>
                </div>
                
                <!-- Article Footer Component -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Article Footer</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden p-8">
                        <x-blog.article-footer 
                            :articleId="123"
                            title="Creating Effective User Experiences with Modern Design Principles"
                            url="https://yourdomain.com/blog/creating-effective-user-experiences"
                            :relatedArticles="[
                                [
                                    'title' => 'The Psychology Behind Effective UI Design',
                                    'excerpt' => 'Understanding how users think and interact with digital interfaces is key to creating effective designs.',
                                    'url' => '#',
                                    'thumbnail' => 'https://images.unsplash.com/photo-1517430816045-df4b7de11d1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80'
                                ],
                                [
                                    'title' => 'Color Theory for Digital Products',
                                    'excerpt' => 'Learn how to use color effectively to create accessible, engaging, and brand-consistent digital products.',
                                    'url' => '#',
                                    'thumbnail' => 'https://images.unsplash.com/photo-1579546929518-9e396f3cc809?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80'
                                ],
                                [
                                    'title' => 'Implementing Effective Design Systems',
                                    'excerpt' => 'A comprehensive guide to creating, implementing, and maintaining design systems for scalable products.',
                                    'url' => '#',
                                    'thumbnail' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80'
                                ]
                            ]"
                        />
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Toolkit Components Section -->
        <section class="mb-16">
            <h2 class="text-h3 font-semibold text-the-end-900 mb-6">Toolkit Components</h2>
            
            <div class="space-y-16">
                <!-- Hero Section -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Toolkit Hero Section</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-toolkit.hero-section />
                    </div>
                </div>
                
                <!-- Tags -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Toolkit Tags</h3>
                    
                    <div class="p-6 bg-white-smoke-50 rounded-lg border border-white-smoke-300">
                        <div class="flex flex-wrap gap-3">
                            <x-toolkit.tags>Project design</x-toolkit.tags>
                            
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                                Logframe
                            </span>
                        </div>
                    </div>
                </div>
                
                <!-- Card -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Toolkit Card</h3>
                    
                    <div>
                        <x-toolkit.card
                            title="Fundraising email marketing for nonprofits"
                            description="Create detailed profiles of your ideal audience to craft messaging that resonates with their values and needs."
                        >
                            <x-slot name="image">
                                <svg class="w-16 h-auto" viewBox="0 0 512 512"><title>mailchimp</title><g><rect width="512" height="512" fill="#ffe01b" rx="15%"></rect><path fill="#1e1e1e" d="M418 306l-6-17s25-38-37-51c0 0 4-47-18-69 48-47 37-118-72-72C229-10 13 241 103 281c-9 12-9 72 53 78 42 90 144 96 203 69s93-113 59-122zm-263 40c-51-5-56-75-12-82s55 86 12 82zm-15-95c-14 0-31 19-31 19-68-33 123-252 164-167 0 0-100 48-133 148zm200 85c0-4-21 6-59-7 3-21 48 18 123-33l6 21c28-5 0 90-90 89-73-1-96-76-56-117 8-8-29-24-22-59 3-15 16-37 49-31s40-24 62-13 9 53 12 59 35 7 41 24-41 54-114 44c-17-2-27 20-16 34 22 32 112 11 127-20-38 29-116 40-122 9 22 10 59 4 59 0zm-58-6zm-73-152c22-27 51-43 51-43l-6 15s21-16 44-16l-8 8c26 1 37 11 37 11s-61-18-118 25zm135 39c13-1 9 29 9 29h-8s-14-28-1-29zm-59 33c-9 1-19 6-18 2 4-16 41-12 40 2s-9-6-22-4zm21 12c1 2-7 0-13 1s-12 4-12 2 23-11 25-3zm20 3c3-6 15 0 12 6s-15 0-12-6zm25 2c-6 0-6-13 0-13s6 14 0 14zm-180 53c3 3-6 9-13 4s8-29-10-35-13 17-18 14 7-35 28-22-6 33 6 39 5-2 7 0z"></path></g></svg>
                            </x-slot>
                            
                            <x-slot name="tags">
                                <x-toolkit.tags>Project design</x-toolkit.tags>
                                
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                                    Logframe
                                </span>
                            </x-slot>
                            
                            <x-core.button variant="neutral" size="small">View Tool</x-core.button>
                        </x-toolkit.card>
                    </div>
                </div>
                
                <!-- Grid -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Toolkit Grid</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-toolkit.grid>
                            <x-toolkit.card 
                                title="SEO Toolkit for Nonprofits" 
                                description="Essential SEO tools tailored for nonprofit organizations."
                            >
                                <x-slot name="image">
                                    <svg class="w-16 h-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="4" fill="#4CAF50" opacity="0.1"/>
                                        <path d="M12 16L7 13.5V8.5L12 6L17 8.5V13.5L12 16Z" stroke="#4CAF50" stroke-width="1.5"/>
                                        <path d="M12 16V11M12 11L7 8.5M12 11L17 8.5" stroke="#4CAF50" stroke-width="1.5"/>
                                    </svg>
                                </x-slot>
                                
                                <x-slot name="tags">
                                    <x-toolkit.tags>Project design</x-toolkit.tags>
                                </x-slot>
                                
                                <x-core.button variant="neutral" size="small">View Tool</x-core.button>
                            </x-toolkit.card>
                            
                            <x-toolkit.card 
                                title="Social Media Calendar" 
                                description="Plan and organize your social media content effectively."
                            >
                                <x-slot name="image">
                                    <svg class="w-16 h-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="24" height="24" rx="4" fill="#F44336" opacity="0.1"/>
                                        <rect x="4" y="5" width="16" height="14" rx="2" stroke="#F44336" stroke-width="1.5"/>
                                        <path d="M4 9H20" stroke="#F44336" stroke-width="1.5"/>
                                        <path d="M8 13H10" stroke="#F44336" stroke-width="1.5" stroke-linecap="round"/>
                                        <path d="M14 13H16" stroke="#F44336" stroke-width="1.5" stroke-linecap="round"/>
                                        <path d="M8 16H10" stroke="#F44336" stroke-width="1.5" stroke-linecap="round"/>
                                        <path d="M14 16H16" stroke="#F44336" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </x-slot>
                                
                                <x-slot name="tags">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                                        Content Calendar
                                    </span>
                                </x-slot>
                                
                                <x-core.button variant="neutral" size="small">View Tool</x-core.button>
                            </x-toolkit.card>
                            
                            <x-toolkit.card 
                                title="Fundraising Email Templates" 
                                description="Ready-to-use email templates for effective fundraising campaigns."
                            >
                                <x-slot name="image">
                                    <svg class="w-16 h-auto" viewBox="0 0 512 512"><title>mailchimp</title><g><rect width="512" height="512" fill="#ffe01b" rx="15%"></rect><path fill="#1e1e1e" d="M418 306l-6-17s25-38-37-51c0 0 4-47-18-69 48-47 37-118-72-72C229-10 13 241 103 281c-9 12-9 72 53 78 42 90 144 96 203 69s93-113 59-122zm-263 40c-51-5-56-75-12-82s55 86 12 82zm-15-95c-14 0-31 19-31 19-68-33 123-252 164-167 0 0-100 48-133 148zm200 85c0-4-21 6-59-7 3-21 48 18 123-33l6 21c28-5 0 90-90 89-73-1-96-76-56-117 8-8-29-24-22-59 3-15 16-37 49-31s40-24 62-13 9 53 12 59 35 7 41 24-41 54-114 44c-17-2-27 20-16 34 22 32 112 11 127-20-38 29-116 40-122 9 22 10 59 4 59 0zm-58-6zm-73-152c22-27 51-43 51-43l-6 15s21-16 44-16l-8 8c26 1 37 11 37 11s-61-18-118 25zm135 39c13-1 9 29 9 29h-8s-14-28-1-29zm-59 33c-9 1-19 6-18 2 4-16 41-12 40 2s-9-6-22-4zm21 12c1 2-7 0-13 1s-12 4-12 2 23-11 25-3zm20 3c3-6 15 0 12 6s-15 0-12-6zm25 2c-6 0-6-13 0-13s6 14 0 14zm-180 53c3 3-6 9-13 4s8-29-10-35-13 17-18 14 7-35 28-22-6 33 6 39 5-2 7 0z"></path></g></svg>
                                </x-slot>
                                
                                <x-slot name="tags">
                                    <x-toolkit.tags>Project design</x-toolkit.tags>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                                        Mailchimp
                                    </span>
                                </x-slot>
                                
                                <x-core.button variant="neutral" size="small">View Tool</x-core.button>
                            </x-toolkit.card>
                        </x-toolkit.grid>
                    </div>
                </div>
                
                <!-- Filter and Search -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Toolkit Filters and Search</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-toolkit.filter-section>
                            <x-slot name="filters">
                                <x-toolkit.select 
                                    :options="[
                                        'project-design' => 'Project design',
                                        'communication-design' => 'Communication design',
                                        'campaign-design' => 'Campaign design'
                                    ]"
                                    placeholder="Toolkits"
                                />
                                
                                <x-toolkit.select 
                                    :options="[
                                        'mailchimp' => 'Mailchimp',
                                        'logframe' => 'Logframe',
                                        'google-ads' => 'Google Ads display'
                                    ]"
                                    placeholder="Design tools"
                                />
                            </x-slot>
                            
                            <x-slot name="search">
                                <x-core.input 
                                    name="search"
                                    placeholder="Search tools..."
                                    :leadingIcon="true"
                                >
                                    <x-slot name="leadingIcon">
                                        <svg class="h-5 w-5 text-the-end-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                        </svg>
                                    </x-slot>
                                </x-core.input>
                            </x-slot>
                        </x-toolkit.filter-section>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- About Components Section -->
        <section class="mb-16">
            <h2 class="text-h3 font-semibold text-the-end-900 mb-6">About Components</h2>
            
            <div class="space-y-16">
                <!-- Hero Section -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">About Hero Section</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-about.hero-section />
                    </div>
                </div>
                
                <!-- Team Card -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Team Card</h3>
                    
                    <div>
                        <x-about.team-card
                            name="Abayomi Ogundipe"
                            position="Founder & Design lead"
                            image="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                            linkedin="https://linkedin.com/in/abayomi-ogundipe"
                        >
                            <x-core.button variant="neutral" size="small">
                                View Profile
                            </x-core.button>
                        </x-about.team-card>
                    </div>
                </div>
                
                <!-- Team Section -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Team Section</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-about.team-section title="Our Amazing Team">
                            <x-slot name="header">
                                <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto mt-4">
                                    Meet the talented individuals behind our creative design solutions.
                                </p>
                            </x-slot>
                            
                            <x-about.team-card
                                name="Abayomi Ogundipe"
                                position="Founder & Design lead"
                                image="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                linkedin="https://linkedin.com/in/abayomi-ogundipe"
                            />
                            
                            <x-about.team-card
                                name="Sarah Johnson"
                                position="Project Manager"
                                image="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                linkedin="https://linkedin.com/in/sarah-johnson"
                            />
                            
                            <x-about.team-card
                                name="Michael Chen"
                                position="UX Designer"
                                image="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                linkedin="https://linkedin.com/in/michael-chen"
                            />
                        </x-about.team-section>
                    </div>
                </div>
                
                <!-- How We Work Section -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">How We Work Section</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-about.how-we-work />
                    </div>
                </div>
                
                <!-- Partner Logo -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Partner Logo</h3>
                    
                    <div class="p-6 bg-white-smoke-50 rounded-lg border border-white-smoke-300">
                        <x-about.partner-logo>
                            <svg class="h-28 w-auto opacity-75 hover:opacity-100 transition-opacity" viewBox="0 0 337.6 72">
                                <title>Microsoft_logo</title>
                                <g>
                                    <path fill="#737373"
                                        d="M140.4,14.4v43.2h-7.5V23.7h-0.1l-13.4,33.9h-5l-13.7-33.9h-0.1v33.9h-6.9V14.4h10.8l12.4,32h0.2l13.1-32H140.4 z M146.6,17.7c0-1.2,0.4-2.2,1.3-3c0.9-0.8,1.9-1.2,3.1-1.2c1.3,0,2.4,0.4,3.2,1.2s1.3,1.8,1.3,3c0,1.2-0.4,2.2-1.3,3 c-0.9,0.8-1.9,1.2-3.2,1.2s-2.3-0.4-3.1-1.2C147.1,19.8,146.6,18.8,146.6,17.7z M154.7,26.6v31h-7.3v-31H154.7z M176.8,52.3 c1.1,0,2.3-0.2,3.6-0.8c1.3-0.5,2.5-1.2,3.6-2v6.8c-1.2,0.7-2.5,1.2-4,1.5c-1.5,0.3-3.1,0.5-4.9,0.5c-4.6,0-8.3-1.4-11.1-4.3 c-2.9-2.9-4.3-6.6-4.3-11c0-5,1.5-9.1,4.4-12.3c2.9-3.2,7-4.8,12.4-4.8c1.4,0,2.8,0.2,4.1,0.5c1.4,0.3,2.5,0.8,3.3,1.2v7 c-1.1-0.8-2.3-1.5-3.4-1.9c-1.2-0.4-2.4-0.7-3.6-0.7c-2.9,0-5.2,0.9-7,2.8s-2.6,4.4-2.6,7.6c0,3.1,0.9,5.6,2.6,7.3 C171.6,51.4,173.9,52.3,176.8,52.3z M204.7,26.1c0.6,0,1.1,0,1.6,0.1s0.9,0.2,1.2,0.3v7.4c-0.4-0.3-0.9-0.6-1.7-0.8 s-1.6-0.4-2.7-0.4c-1.8,0-3.3,0.8-4.5,2.3s-1.9,3.8-1.9,7v15.6h-7.3v-31h7.3v4.9h0.1c0.7-1.7,1.7-3,3-4 C201.2,26.6,202.8,26.1,204.7,26.1z M207.9,42.6c0-5.1,1.5-9.2,4.3-12.2c2.9-3,6.9-4.5,12-4.5c4.8,0,8.6,1.4,11.3,4.3 s4.1,6.8,4.1,11.7c0,5-1.5,9-4.3,12c-2.9,3-6.8,4.5-11.8,4.5c-4.8,0-8.6-1.4-11.4-4.2 C209.3,51.3,207.9,47.4,207.9,42.6z M215.5,42.3c0,3.2,0.7,5.7,2.2,7.4s3.6,2.6,6.3,2.6c2.6,0,4.7-0.8,6.1-2.6 c1.4-1.7,2.1-4.2,2.1-7.6c0-3.3-0.7-5.8-2.1-7.6c-1.4-1.7-3.5-2.6-6-2.6c-2.7,0-4.7,0.9-6.2,2.7C216.2,36.5,215.5,39,215.5,42.3z M250.5,34.8c0,1,0.3,1.9,1,2.5 c0.7,0.6,2.1,1.3,4.4,2.2c2.9,1.2,5,2.5,6.1,3.9c1.2,1.5,1.8,3.2,1.8,5.3c0,2.9-1.1,5.2-3.4,7c-2.2,1.8-5.3,2.6-9.1,2.6 c-1.3,0-2.7-0.2-4.3-0.5c-1.6-0.3-2.9-0.7-4-1.2v-7.2c1.3,0.9,2.8,1.7,4.3,2.2c1.5,0.5,2.9,0.8,4.2,0.8c1.6,0,2.9-0.2,3.6-0.7 c0.8-0.5,1.2-1.2,1.2-2.3c0-1-0.4-1.8-1.2-2.6c-0.8-0.7-2.4-1.5-4.6-2.4c-2.7-1.1-4.6-2.4-5.7-3.8s-1.7-3.2-1.7-5.4 c0-2.8,1.1-5.1,3.3-6.9c2.2-1.8,5.1-2.7,8.6-2.7c1.1,0,2.3,0.1,3.6,0.4s2.5,0.6,3.4,0.9V34c-1-0.6-2.1-1.2-3.4-1.7 c-1.3-0.5-2.6-0.7-3.8-0.7c-1.4,0-2.5,0.3-3.2,0.8C250.9,33.1,250.5,33.8,250.5,34.8z M266.9,42.6c0-5.1,1.5-9.2,4.3-12.2 c2.9-3,6.9-4.5,12-4.5c4.8,0,8.6,1.4,11.3,4.3s4.1,6.8,4.1,11.7c0,5-1.5,9-4.3,12c-2.9,3-6.8,4.5-11.8,4.5c-4.8,0-8.6-1.4-11.4-4.2 C268.4,51.3,266.9,47.4,266.9,42.6z M274.5,42.3c0,3.2,0.7,5.7,2.2,7.4s3.6,2.6,6.3,2.6c2.6,0,4.7-0.8,6.1-2.6 c1.4-1.7,2.1-4.2,2.1-7.6c0-3.3-0.7-5.8-2.1-7.6c-1.4-1.7-3.5-2.6-6-2.6c-2.7,0-4.7,0.9-6.2,2.7C275.3,36.5,274.5,39,274.5,42.3z M322.9,32.6h-10.9v25h-7.4v-25h-5.2v-6h5.2v-4.3c0-3.2,1.1-5.9,3.2-8s4.8-3.1,8.1-3.1c0.9,0,1.7,0.1,2.4,0.1s1.3,0.2,1.8,0.4v6.3 c-0.2-0.1-0.7-0.3-1.3-0.5c-0.6-0.2-1.3-0.3-2.1-0.3c-1.5,0-2.7,0.5-3.5,1.4c-0.8,0.9-1.2,2.4-1.2,4.2v3.7h10.9v-7l7.3-2.2v9.2h7.4 v6h-7.4v14.5c0,1.9,0.4,3.2,1,4c0.7,0.8,1.8,1.2,3.3,1.2c0.4,0,0.9-0.1,1.5-0.3c0.6-0.2,1.1-0.4,1.5-0.7v6c-0.5,0.3-1.2,0.5-2.3,0.7 c-1.1,0.2-2.1,0.3-3.2,0.3c-3.1,0-5.4-0.8-6.9-2.4c-1.5-1.6-2.3-4.1-2.3-7.4L322.9,32.6L322.9,32.6z">
                                    </path>
                                    <path fill="#F25022" d="M0 0H34.2V34.2H0z"></path>
                                    <path fill="#7FBA00" d="M37.8 0H72V34.2H37.8z"></path>
                                    <path fill="#00A4EF" d="M0 37.8H34.2V72H0z"></path>
                                    <path fill="#FFB900" d="M37.8 37.8H72V72H37.8z"></path>
                                </g>
                            </svg>
                        </x-about.partner-logo>
                    </div>
                </div>
                
                <!-- Partners Section -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Partners Section</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-about.partners-section 
                            title="Organizations We've Worked With" 
                            description="We're proud to collaborate with leading organizations across various sectors."
                        >
                            <x-about.partner-logo>
                                <svg class="h-28 w-auto opacity-75 hover:opacity-100 transition-opacity" viewBox="0 0 337.6 72">
                                    <title>Microsoft_logo</title>
                                    <g>
                                        <path fill="#737373" d="M140.4,14.4v43.2h-7.5V23.7h-0.1l-13.4,33.9h-5l-13.7-33.9h-0.1v33.9h-6.9V14.4h10.8l12.4,32h0.2l13.1-32H140.4z"></path>
                                        <path fill="#F25022" d="M0 0H34.2V34.2H0z"></path>
                                        <path fill="#7FBA00" d="M37.8 0H72V34.2H37.8z"></path>
                                        <path fill="#00A4EF" d="M0 37.8H34.2V72H0z"></path>
                                        <path fill="#FFB900" d="M37.8 37.8H72V72H37.8z"></path>
                                    </g>
                                </svg>
                            </x-about.partner-logo>
                            
                            <x-about.partner-logo>
                                <svg class="h-28 w-auto opacity-75 hover:opacity-100 transition-opacity" viewBox="0 0 200 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30 15H5C2.23858 15 0 17.2386 0 20V40C0 42.7614 2.23858 45 5 45H30C32.7614 45 35 42.7614 35 40V20C35 17.2386 32.7614 15 30 15Z" fill="#0A66C2"/>
                                    <path d="M8.64286 23.5714H13.3929V37.5H8.64286V23.5714ZM11.0179 14.6429C12.6964 14.6429 14.0714 16.0179 14.0714 17.6964C14.0714 19.375 12.6964 20.75 11.0179 20.75C9.33929 20.75 7.96429 19.375 7.96429 17.6964C7.96429 16.0179 9.33929 14.6429 11.0179 14.6429Z" fill="white"/>
                                    <path d="M16.4821 23.5714H21.0893V25.7143H21.1607C21.9107 24.3929 23.6607 23 26.3393 23C31.1607 23 32.1429 26.1964 32.1429 30.3036V37.5H27.3929V31.1429C27.3929 29.3214 27.3214 26.9643 24.7857 26.9643C22.25 26.9643 21.2321 28.9643 21.2321 31.0714V37.5H16.4821V23.5714Z" fill="white"/>
                                </svg>
                            </x-about.partner-logo>
                            
                            <x-about.partner-logo>
                                <svg class="h-28 w-auto opacity-75 hover:opacity-100 transition-opacity" viewBox="0 0 200 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M35 30C35 38.2843 28.2843 45 20 45C11.7157 45 5 38.2843 5 30C5 21.7157 11.7157 15 20 15C28.2843 15 35 21.7157 35 30Z" fill="#4285F4"/>
                                    <path d="M74.5 15H67.5L60 45H67L69 35H73L75 45H82L74.5 15ZM69.5 30L71 22.5L72.5 30H69.5Z" fill="#EA4335"/>
                                    <path d="M90 15H83V45H90V15Z" fill="#FBBC05"/>
                                    <path d="M115 15H108V32.5L102 15H95V45H102V27.5L108 45H115V15Z" fill="#34A853"/>
                                </svg>
                            </x-about.partner-logo>
                            
                            <x-about.partner-logo>
                                <svg class="h-28 w-auto opacity-75 hover:opacity-100 transition-opacity" viewBox="0 0 200 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 15H35V45H5V15Z" fill="#FF9900"/>
                                    <path d="M75 30C75 38.2843 68.2843 45 60 45C51.7157 45 45 38.2843 45 30C45 21.7157 51.7157 15 60 15C68.2843 15 75 21.7157 75 30Z" fill="#FF9900"/>
                                    <path d="M115 15H85V45H115V15Z" fill="#FF9900"/>
                                </svg>
                            </x-about.partner-logo>
                        </x-about.partners-section>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Home Components Section -->
        <section class="mb-16">
            <h2 class="text-h3 font-semibold text-the-end-900 mb-6">Home Components</h2>
            
            <div class="space-y-16">
                <!-- Hero Section -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Home Hero Section</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-home.hero-section>
                            <x-slot name="button">
                                <x-core.button variant="primary" size="large">
                                    Why We Design for Good
                                </x-core.button>
                            </x-slot>
                        </x-home.hero-section>
                    </div>
                </div>
                
                <!-- Work Section -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Work Section</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-home.work-section
                            title="Our Recent Work"
                            description="Creative design solutions that drive real impact"
                            buttonText="See All Projects"
                            buttonUrl="#"
                        >
                            <x-work.card
                                title="Community Engagement Platform"
                                description="A digital solution connecting nonprofits with volunteers to increase community involvement."
                                image="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                url="#"
                                :tags="[
                                    ['type' => 'sector', 'label' => 'Nonprofit'],
                                    ['type' => 'industry', 'label' => 'Community']
                                ]"
                            />
                        </x-home.work-section>
                    </div>
                </div>
                
                <!-- Insights Section -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Insights Section</h3>
                    
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <x-home.insights-section
                            title="Latest Articles"
                            description="Insights from our team on design, strategy, and impact"
                            buttonText="Read Our Blog"
                            buttonUrl="#"
                        >
                            <x-blog.article-card 
                                title="The Future of Purpose-Driven Design"
                                excerpt="How designers are shaping positive social impact through thoughtful, strategic approaches to digital experiences."
                                date="Jun 15, 2023"
                                readTime="5 min read"
                                image="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                category="Design Insights"
                                categoryType="default"
                                author="Samuel Wilson"
                                authorAvatar="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80"
                                url="#"
                            />
                        </x-home.insights-section>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Utility Components Section -->
        <section class="mb-16">
            <h2 class="text-h3 font-semibold text-the-end-900 mb-6">Utility Components</h2>
            
            <div class="space-y-16">
                <!-- 404 Page -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">404 Not Found Page</h3>
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <section class="bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100 min-h-screen flex items-center justify-center px-4 py-12">
                            <div class="max-w-lg text-center space-y-6">
                                <h1 class="text-display font-black text-the-end-900">404</h1>
                                <h2 class="text-h2 font-bold text-the-end-900">Page Not Found</h2>
                                <p class="text-body-lg text-the-end-700">The page you're looking for seems to have taken a different path.</p>
                                
                                <!-- Large Primary Button -->
                                <a href="{{ url('/') }}" 
                                    class="inline-flex lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
                                    Return back home
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Contact Components Section -->
        <section class="mb-16">
            <h2 class="text-h3 font-semibold text-the-end-900 mb-6">Contact Components</h2>
            
            <div class="space-y-16">
                <!-- Talk to Festa Form -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Talk to Festa Form</h3>
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden p-6">
                        <x-contact.talk-to-festa-form access_key="9e78fe8d-0945-41da-851e-7be12cc06087" />
                    </div>
                </div>
                
                <!-- Thank You Page Preview -->
                <div>
                    <h3 class="text-h4 font-medium text-the-end-900 mb-4">Thank You Page Preview</h3>
                    <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                        <div class="p-4 bg-white-smoke-50 text-center">
                            <p class="text-body-sm text-the-end-500 mb-4">Thank You Page Preview (scaled down version)</p>
                            
                            <div class="h-[600px] overflow-hidden relative rounded-lg">
                                <iframe src="{{ route('contact.thank-you') }}" class="w-full h-full"></iframe>
                            </div>
                            
                            <div class="mt-4">
                                <a href="{{ route('contact.thank-you') }}" target="_blank" class="text-pepper-green-600 hover:underline">
                                    Open Thank You page in a new tab →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Newly Added Components -->
        <div class="mt-12">
            <h2 class="text-h3 font-semibold text-the-end-900 mb-6">Newly Added Components</h2>
            
            <!-- Project Design Service Components -->
            <div class="border-t border-white-smoke-300 pt-8 mt-8">
                <h3 class="text-h4 font-medium text-the-end-900 mb-4">Project Design Service Components</h3>
                
                <div class="space-y-12">
                    <!-- Hero Section -->
                    <div>
                        <h4 class="text-h5 font-medium text-the-end-900 mb-3">Project Design Hero Section</h4>
                        <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                            <x-services.project-design.hero-section />
                        </div>
                    </div>
                    
                    <!-- Core Services CTA -->
                    <div>
                        <h4 class="text-h5 font-medium text-the-end-900 mb-3">Core Services CTA</h4>
                        <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                            <x-services.project-design.core-services-cta />
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- About Components -->
            <div class="border-t border-white-smoke-300 pt-8 mt-8">
                <h3 class="text-h4 font-medium text-the-end-900 mb-4">About Components</h3>
                
                <div class="space-y-12">
                    <!-- SDG Section -->
                    <div>
                        <h4 class="text-h5 font-medium text-the-end-900 mb-3">SDG Section</h4>
                        <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                            <x-about.sdg-section />
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Our Process Components -->
            <div class="border-t border-white-smoke-300 pt-8 mt-8">
                <h3 class="text-h4 font-medium text-the-end-900 mb-4">Our Process Components</h3>
                
                <div class="space-y-12">
                    <!-- Hero Section -->
                    <div>
                        <h4 class="text-h5 font-medium text-the-end-900 mb-3">Our Process Hero Section</h4>
                        <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                            <x-about.our-process.hero-section />
                        </div>
                    </div>
                    
                    <!-- Philosophy Section -->
                    <div>
                        <h4 class="text-h5 font-medium text-the-end-900 mb-3">Our Philosophy Section</h4>
                        <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                            <x-about.our-process.philosophy-section />
                        </div>
                    </div>
                    
                    <!-- Methodology Section -->
                    <div>
                        <h4 class="text-h5 font-medium text-the-end-900 mb-3">Our Methodology Section</h4>
                        <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                            <x-about.our-process.methodology-section />
                        </div>
                    </div>
                    
                    <!-- Impact Measurement Section -->
                    <div>
                        <h4 class="text-h5 font-medium text-the-end-900 mb-3">Impact Measurement Section</h4>
                        <div class="border border-white-smoke-300 rounded-xl overflow-hidden">
                            <x-about.our-process.impact-measurement-section />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 