# 📌 Case study Project show page

## **Main Content Area**

- Begins with a **Hero Section**: project title, client name (hyperlinked), sector, Industry, and SDG alignment tags.
- Followed by a **Case Study Excerpt** and **Media (image/video)**.
- Structured sections for:
    - Objectives
    - The Challenge
    - The Solution
    - The Results
    - Navigation to previous/next case studies

---

## **📐 Hierarchy of Content**

1. **High-Level Sections**:
    - Case Study Header (title, partner info, sector/industry/SDG)
    - Excerpt (summary of project impact)
    - Main Body Content (Objectives → Challenge → Solution → Results)
    - Visual Gallery (Image/Video with captions)
    - Navigation to previous/next case studies
2. **Mid-Level Structure** (within each section):
    - Section Title (e.g., “The Solution”)
    - Subheadings (e.g., “Discovery & Strategy”, “Design Implementation”)
    - Nested sub-sections (e.g., persona, keyword strategy)
    - Text content and supporting visuals (figures with captions)

## **✍️ Hierarchy of Typography System**

Typography classes suggest a clear and intentional hierarchy:

| **Use Case** | **Class** | **Font Size** | **Notes** |
| --- | --- | --- | --- |
| Main Page Title | text-h1 | Display header | Bold and large |
| Section Title | text-h2 | Subheader | Emphasis via color |
| Subsection Title | text-h4, text-h6 | Smaller headings | Semantic visual break |
| Paragraphs | text-body, text-body-lg | Standard copy | Legible and spaced |
| Captions / Meta info | text-body-sm | Smaller | Used for tags, image captions, and testimonials |

---

## **🎨 Color System**

The color system is vibrant yet minimal, reflecting accessibility and ethical design themes:

| **Use** | **Tailwind Class** | **Color Description** |
| --- | --- | --- |
| Primary Brand | bg-chicken-comb-600, text-chicken-comb-700 | Golden orange accent |
| Secondary Brand | bg-pepper-green-600, text-pepper-green | Deep green for trust |
| Background | bg-white-smoke-50 | Soft whites and gradients |
| Text | text-the-end-900, text-the-end-700 | Neutral blacks and grays |
| Utility Tags | Border and text classes with shade variants | Visual tag system (sector, industry, SDG) |
| Highlight Gradient | from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100 | Soft storytelling background |

## Case Study Content Area Layout and Hierarchy

### Work Case study Show page Main Content area

Code snippets:

```html
<!-- Work Case study Show page Main Content area-->
    <main class="bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50">
    
    <!-- Project Work Case Study Header here -->
    
    <!-- Project Work Case Study Body -->
    
    <!-- Project Work Case Study Footer -->
    
    </main>
```

### Project Work Case Study Header here

**Project Case Study Header**

- **Project Title**: h1
- **Client Info**: Partner name and link
- **Tags**:
    - Sector (e.g., Nonprofit)
    - Industry (e.g., Research and development)
    - SDG alignment (e.g., Quality education)
- **Excerpt**: Summary paragraph
- **Hero Image**: Large featured image (aspect ratio video style)

Code snippets:

```html
<!-- Project Work Case Study Header Layout -->
        <article class="py-20 px-4 md:px-8 lg:px-16">
            <div class="max-w-3xl mx-auto">
                <article class="space-y-12">
                    <div class="space-y-8">
                        <!-- Case Study Page Title -->
                        <h1 class="text-h1 font-black text-the-end-900 lg:max-w-4xl">Redesigning for Purpose — Ethical UX for Dr. G’s Lab</h1>

                        <!-- Client business name and website -->
                        <div class="grid grid-cols-2 ">
                            <div class="space-y-2">
                                <p class="text-body font-medium text-the-end mb-2">Partner</p>
                                <a href="#"
                                    class="text-body text-pepper-green-600 hover:text-pepper-green-700 transition-colors duration-150">Dr.
                                    G's Lab</a>
                            </div>

                            <!-- Work categories and Project showcase filter tags -->
                            <div class="flex-col space-y-4">
                                <div class="space-y-2">
                                    <p class="text-body font-medium text-the-end">Sector</p>
                                    <!-- Sector Tag -->
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm
                                    bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200">
                                    Nonprofit
                                    </span>
                                </div>
                                <div class="space-y-2">
                                    <p class="text-body font-medium text-the-end">Industry</p>
                                    <!-- Industry Tag -->
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm
                                    bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                                    Research and development
                                    </span>
                                </div>

                                <div class="space-y-2">
                                    <p class="text-body font-medium text-the-end">SDG alignment</p>
                                    <!-- SDG Tag -->
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm
                                    bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200">
                                    Quality education
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Case Study Excerpt  -->
                    <div class="">
                        <p class="text-body-lg text-the-end-700 lg:max-w-3xl">Dr. G’s Lab is a mission-driven organization at the intersection of science and empathy. The team approached Festa Design Studio to rethink how their digital presence could better reflect their trauma-informed, inclusive, and ethical design values.</p>
                    </div>

                    <!-- Hero Image/Video/GIF support functionalities -->
                    <div class="aspect-video w-full rounded-2xl overflow-hidden bg-white-smoke-100">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            alt="Dr. G's Lab Research Space" class="w-full h-full object-cover">
                    </div>
                </article>
        </article>
```

### Project Work Case Study Body

*This section is where the **Trix Rich Text Editor** is used to manage content like copy, images, and captions.*

- **Subsection: Objectives**
    - h2 title
    - Multiple h3 goals + paragraphs
- **Subsection: The Challenge**
    - h2 title
    - Paragraph intro
    - Several h4 problems with p details
    - **Single image with figure + figcaption**
- **Subsection: The Solution**
    - h2 title
    - Intro paragraph
    - 2 nested blocks:
        - **Discovery & Strategy**
            - h3, followed by h4 points with p
        - **Design Implementation**
            - h3, followed by h4 points with p
    - **Gallery**: Grid of 4 figure elements (image + figcaption)
- **Subsection: The Results**
    - h2 title
    - Overview paragraph
    - Several h4 results with p explanations
    - **Gallery**: Grid of 4 figure elements

Code snippets:

```html
<!-- Project Work Case Study Body -->
    <article class="mx-auto max-w-3xl py-20 px-4 md:px-8 lg:px-16">
        
        <!-- Case Study Body Introduction. Must utilize Installed Trix Rich Text editor -->
        <div class="space-y-8 mb-16">
            <h2 class="text-h2 font-bold text-pepper-green">Objectives</h2>
            <div class="space-y-3.5">
                
            <h3 class="text-h4 font-semibold text-the-end-900">Redefine brand positioning</h3>
            <p class="text-body-lg text-the-end-700">Translate the core values of trauma-informed research, inclusivity, and ethics into a coherent and compelling brand identity.</p>

            <h3 class="text-h4 font-semibold text-the-end-900">Create a human-centered website</h3>
            <p class="text-body-lg text-the-end-700">Build a responsive, accessible, and emotionally aware website experience that welcomes users from various sectors—nonprofits, startups, and institutions.</p>

            <h3 class="text-h4 font-semibold text-the-end-900">Increase stakeholder engagement</h3>
            <p class="text-body-lg text-the-end-700">Develop a content and structure system that guides prospective partners, funders, and collaborators through clear user journeys.</p>

            <h3 class="text-h4 font-semibold text-the-end-900">Build digital credibility</h3>
            <p class="text-body-lg text-the-end-700">Establish a strong visual and verbal brand system that presents Dr. G’s Lab as a forward-thinking, trustworthy leader in ethical UX and research.</p>
            </div>
        </div>

        <!-- The Challenge Must utilize Installed Trix Rich Text editor -->
        <div class="space-y-8 mb-16">
            <h2 class="text-h2 font-bold text-pepper-green">The challenge</h2>
            <p class="text-body text-the-end-700">Despite a powerful mission and committed team, Dr. G’s Lab struggled with misalignment between their internal identity and their public-facing content.</p>
            
            <div class="space-y-3">
                <h4 class="text-h6 font-medium text-chicken-comb-600">Fragmented messaging</h4>
                <p class="text-body text-the-end-700">The previous site failed to communicate the full scope of services and impact areas. Messaging lacked emotional depth and was inconsistent across channels.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Disconnected user experience</h4>
                <p class="text-body text-the-end-700">The site didn’t accommodate the different mental models and goals of their audiences—nonprofit leaders, startup founders, and academics.</p>

                <h3 class="text-h6 font-medium text-chicken-comb-600">Limited visibility and SEO optimization</h3>
                <p class="text-body text-the-end-700">No clear keyword strategy or content structure existed to support discoverability, resulting in low engagement and minimal search presence.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Low accessibility and inclusion</h4>
                <p class="text-body text-the-end-700">Their website experience did not reflect their trauma-informed and inclusive approach, creating a mismatch in trust and perception.</p>

            </div>

            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            
        </div>

        <!-- The Solution Must utilize Installed Trix Rich Text editor -->
        <div class="space-y-8 mb-16">
            <h2 class="text-h2 font-bold text-pepper-green">The solution</h2>
            <p class="text-body text-the-end-700">Our response combined UX research, strategic communication design, and ethical branding to realign Dr. G’s Lab’s public presence with their mission.</p>
            
            <div class="space-y-3">
                <h3 class="text-h4 font-semibold text-the-end-900">Discovery & strategy</h3>

                <h4 class="text-h6 font-medium text-chicken-comb-600">User persona development</h4>
                <p class="text-body text-the-end-700">Built detailed personas—like Sarah (Nonprofit Leader), Alex (Startup Founder), and Dr. Emily (Institutional Rep)—with insight into their goals, motivations, and behavioral patterns. Each persona guided decisions in navigation, content, and messaging tone.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Keyword strategy & content mapping</h4>
                <p class="text-body text-the-end-700">Conducted SEO and language research to find how each persona searches for services. Created a content plan structured around these keywords while staying true to brand voice.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Competitor & audience journey mapping</h4>
                <p class="text-body text-the-end-700">Audited similar organizations to define positioning gaps. Mapped audience journeys to identify emotional and logical points of interaction on the website.</p>

            </div>

            <div class="space-y-3">
                <h3 class="text-h4 font-semibold text-the-end-900">Design implementation</h3>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Modular information architecture</h4>
                <p class="text-body text-the-end-700">Designed a scalable content structure that adapts for different users and page types. Created a site map that supports storytelling, service clarity, and quick access to high-priority pages.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Visual & verbal identity system</h4>
                <p class="text-body text-the-end-700">Developed a color palette rooted in accessibility, a typographic hierarchy that guides reading flow, and a messaging framework with empathy, clarity, and expertise.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Inclusive UX & Trauma-informed design</h4>
                <p class="text-body text-the-end-700">Integrated accessibility best practices with soft color transitions, clear call-to-actions, and emotionally safe micro-interactions.</p>

            </div>

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">

                <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            </div>
        </div>

         <!-- The Results Must utilize Installed Trix Rich Text editor -->
         <div class="space-y-8">
            <h2 class="text-h2 font-bold text-pepper-green">The results</h2>
            <p class="text-body text-the-end-700">Our work with Dr. G’s Lab generated measurable improvements and increased brand clarity across every touchpoint.</p>
            
            <div class="space-y-3">
                <h4 class="text-h6 font-medium text-chicken-comb-600">Refined and aligned messaging</h4>
                <p class="text-body text-the-end-700">Stakeholders could clearly articulate what the lab stands for and how it differs from competitors. Messaging matched mission.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Improved user experience across devices</h4>
                <p class="text-body text-the-end-700">The new website offered responsive, intuitive navigation and modular blocks designed for each user type—improving on-page time and reducing bounce rates.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Stronger SEO and search visibility</h4>
                <p class="text-body text-the-end-700">With new on-page keywords and metadata structured around services and sector needs, organic search rankings improved.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Increased partner and fundraising interest</h4>
                <p class="text-body text-the-end-700">A professional and emotionally aligned website helped the organization build trust with funders, partners, and institutions exploring collaborations.</p>

                
            </div>

            

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">

                <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            </div>
        </div>

    </article>
```

### **Case Study Footer Navigation**

- Previous case study (left aligned)
- Next case study (right aligned)

Code snippet:

```html
<!-- Case Study Footer -->
    <section class="py-20 px-4 md:px-8 lg:px-16">
        <div class="max-w-3xl mx-auto space-y-12">
    
        <!-- Case Study Navigation for Previous and Next project -->
        <div class="flex justify-between items-center pt-8 border-t border-white-smoke-300">
            <!-- Dynamic naming of the previous case study and hyperlinking -->
            <a href="/case-studies/previous" class="inline-flex items-center text-pepper-green-600 hover:text-pepper-green-700">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Name of previous case study
            </a>
            <!-- Dynamic naming of the next case study and hyperlinking -->
            <a href="/case-studies/next" class="inline-flex items-center text-pepper-green-600 hover:text-pepper-green-700">
            Name of next case study
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            </a>
        </div>
        </div>
    </section> 
```

**For example purposes**: This is how thy main content area content hierarchy would look like based on the HTML below:

```html
 <!-- Work Case study Show page Main Content area-->
<main class="bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50">

        <!-- Project Case Study Header Layout -->
        <article class="py-20 px-4 md:px-8 lg:px-16">
            <div class="max-w-3xl mx-auto">
                <article class="space-y-12">
                    <div class="space-y-8">
                        <!-- Case Study Page Title -->
                        <h1 class="text-h1 font-black text-the-end-900 lg:max-w-4xl">Redesigning for Purpose — Ethical UX for Dr. G’s Lab</h1>

                        <!-- Client business name and website -->
                        <div class="grid grid-cols-2 ">
                            <div class="space-y-2">
                                <p class="text-body font-medium text-the-end mb-2">Partner</p>
                                <a href="#"
                                    class="text-body text-pepper-green-600 hover:text-pepper-green-700 transition-colors duration-150">Dr.
                                    G's Lab</a>
                            </div>

                            <!-- Work categories and Project showcase filter tags -->
                            <div class="flex-col space-y-4">
                                <div class="space-y-2">
                                    <p class="text-body font-medium text-the-end">Sector</p>
                                    <!-- Sector Tag -->
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm
                                    bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200">
                                    Nonprofit
                                    </span>
                                </div>
                                <div class="space-y-2">
                                    <p class="text-body font-medium text-the-end">Industry</p>
                                    <!-- Industry Tag -->
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm
                                    bg-chicken-comb-50 text-chicken-comb-700 border border-chicken-comb-200">
                                    Research and development
                                    </span>
                                </div>

                                <div class="space-y-2">
                                    <p class="text-body font-medium text-the-end">SDG alignment</p>
                                    <!-- SDG Tag -->
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm
                                    bg-apocalyptic-orange-50 text-apocalyptic-orange-700 border border-apocalyptic-orange-200">
                                    Quality education
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Case Study Excerpt  -->
                    <div class="">
                        <p class="text-body-lg text-the-end-700 lg:max-w-3xl">Dr. G’s Lab is a mission-driven organization at the intersection of science and empathy. The team approached Festa Design Studio to rethink how their digital presence could better reflect their trauma-informed, inclusive, and ethical design values.</p>
                    </div>

                    <!-- Hero Image/Video/GIF support functionalities -->
                    <div class="aspect-video w-full rounded-2xl overflow-hidden bg-white-smoke-100">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            alt="Dr. G's Lab Research Space" class="w-full h-full object-cover">
                    </div>
                </article>
        </article>

    <!-- Work Case Study Body -->
    <article class="mx-auto max-w-3xl py-20 px-4 md:px-8 lg:px-16">
        
        <!-- Case Study Body Introduction. Must utilize Installed Trix Rich Text editor -->
        <div class="space-y-8 mb-16">
            <h2 class="text-h2 font-bold text-pepper-green">Objectives</h2>
            <div class="space-y-3.5">
                
            <h3 class="text-h4 font-semibold text-the-end-900">Redefine brand positioning</h3>
            <p class="text-body-lg text-the-end-700">Translate the core values of trauma-informed research, inclusivity, and ethics into a coherent and compelling brand identity.</p>

            <h3 class="text-h4 font-semibold text-the-end-900">Create a human-centered website</h3>
            <p class="text-body-lg text-the-end-700">Build a responsive, accessible, and emotionally aware website experience that welcomes users from various sectors—nonprofits, startups, and institutions.</p>

            <h3 class="text-h4 font-semibold text-the-end-900">Increase stakeholder engagement</h3>
            <p class="text-body-lg text-the-end-700">Develop a content and structure system that guides prospective partners, funders, and collaborators through clear user journeys.</p>

            <h3 class="text-h4 font-semibold text-the-end-900">Build digital credibility</h3>
            <p class="text-body-lg text-the-end-700">Establish a strong visual and verbal brand system that presents Dr. G’s Lab as a forward-thinking, trustworthy leader in ethical UX and research.</p>
            </div>
        </div>

        <!-- The Challenge Must utilize Installed Trix Rich Text editor -->
        <div class="space-y-8 mb-16">
            <h2 class="text-h2 font-bold text-pepper-green">The challenge</h2>
            <p class="text-body text-the-end-700">Despite a powerful mission and committed team, Dr. G’s Lab struggled with misalignment between their internal identity and their public-facing content.</p>
            
            <div class="space-y-3">
                <h4 class="text-h6 font-medium text-chicken-comb-600">Fragmented messaging</h4>
                <p class="text-body text-the-end-700">The previous site failed to communicate the full scope of services and impact areas. Messaging lacked emotional depth and was inconsistent across channels.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Disconnected user experience</h4>
                <p class="text-body text-the-end-700">The site didn’t accommodate the different mental models and goals of their audiences—nonprofit leaders, startup founders, and academics.</p>

                <h3 class="text-h6 font-medium text-chicken-comb-600">Limited visibility and SEO optimization</h3>
                <p class="text-body text-the-end-700">No clear keyword strategy or content structure existed to support discoverability, resulting in low engagement and minimal search presence.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Low accessibility and inclusion</h4>
                <p class="text-body text-the-end-700">Their website experience did not reflect their trauma-informed and inclusive approach, creating a mismatch in trust and perception.</p>

            </div>

            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            
        </div>

        <!-- The Solution Must utilize Installed Trix Rich Text editor -->
        <div class="space-y-8 mb-16">
            <h2 class="text-h2 font-bold text-pepper-green">The solution</h2>
            <p class="text-body text-the-end-700">Our response combined UX research, strategic communication design, and ethical branding to realign Dr. G’s Lab’s public presence with their mission.</p>
            
            <div class="space-y-3">
                <h3 class="text-h4 font-semibold text-the-end-900">Discovery & strategy</h3>

                <h4 class="text-h6 font-medium text-chicken-comb-600">User persona development</h4>
                <p class="text-body text-the-end-700">Built detailed personas—like Sarah (Nonprofit Leader), Alex (Startup Founder), and Dr. Emily (Institutional Rep)—with insight into their goals, motivations, and behavioral patterns. Each persona guided decisions in navigation, content, and messaging tone.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Keyword strategy & content mapping</h4>
                <p class="text-body text-the-end-700">Conducted SEO and language research to find how each persona searches for services. Created a content plan structured around these keywords while staying true to brand voice.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Competitor & audience journey mapping</h4>
                <p class="text-body text-the-end-700">Audited similar organizations to define positioning gaps. Mapped audience journeys to identify emotional and logical points of interaction on the website.</p>

            </div>

            <div class="space-y-3">
                <h3 class="text-h4 font-semibold text-the-end-900">Design implementation</h3>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Modular information architecture</h4>
                <p class="text-body text-the-end-700">Designed a scalable content structure that adapts for different users and page types. Created a site map that supports storytelling, service clarity, and quick access to high-priority pages.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Visual & verbal identity system</h4>
                <p class="text-body text-the-end-700">Developed a color palette rooted in accessibility, a typographic hierarchy that guides reading flow, and a messaging framework with empathy, clarity, and expertise.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Inclusive UX & Trauma-informed design</h4>
                <p class="text-body text-the-end-700">Integrated accessibility best practices with soft color transitions, clear call-to-actions, and emotionally safe micro-interactions.</p>

            </div>

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">

                <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            </div>
        </div>

         <!-- The Results Must utilize Installed Trix Rich Text editor -->
         <div class="space-y-8">
            <h2 class="text-h2 font-bold text-pepper-green">The results</h2>
            <p class="text-body text-the-end-700">Our work with Dr. G’s Lab generated measurable improvements and increased brand clarity across every touchpoint.</p>
            
            <div class="space-y-3">
                <h4 class="text-h6 font-medium text-chicken-comb-600">Refined and aligned messaging</h4>
                <p class="text-body text-the-end-700">Stakeholders could clearly articulate what the lab stands for and how it differs from competitors. Messaging matched mission.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Improved user experience across devices</h4>
                <p class="text-body text-the-end-700">The new website offered responsive, intuitive navigation and modular blocks designed for each user type—improving on-page time and reducing bounce rates.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Stronger SEO and search visibility</h4>
                <p class="text-body text-the-end-700">With new on-page keywords and metadata structured around services and sector needs, organic search rankings improved.</p>

                <h4 class="text-h6 font-medium text-chicken-comb-600">Increased partner and fundraising interest</h4>
                <p class="text-body text-the-end-700">A professional and emotionally aligned website helped the organization build trust with funders, partners, and institutions exploring collaborations.</p>

                
            </div>

            

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">

                <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            <!-- Image with Caption -->
            <figure>
                <div
                    class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                        alt="Descriptive image alt text" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">Informative caption
                    that provides context for the image</figcaption>
            </figure>
            

            </div>
        </div>

    </article>

    
    <!-- Case Study Footer -->
    <section class="py-20 px-4 md:px-8 lg:px-16">
        <div class="max-w-3xl mx-auto space-y-12">
    
        <!-- Case Study Navigation for Previous and Next project -->
        <div class="flex justify-between items-center pt-8 border-t border-white-smoke-300">
            <!-- Dynamic naming of the previous case study and hyperlinking -->
            <a href="/case-studies/previous" class="inline-flex items-center text-pepper-green-600 hover:text-pepper-green-700">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Name of previous case study
            </a>
            <!-- Dynamic naming of the next case study and hyperlinking -->
            <a href="/case-studies/next" class="inline-flex items-center text-pepper-green-600 hover:text-pepper-green-700">
            Name of next case study
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            </a>
        </div>
        </div>
    </section> 
    
</main>
```

## Tailwind Config

**Check the “Tailwind.config.js” for the color and typography system as a reference”**

Code:

```jsx
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {

        /* Font family "Inter" */
        fontFamily: {
            Inter: ['Inter', 'sans-serif'],
            },

        /* Festa Headline and body system */
      
          fontSize: {
            'display': ['clamp(3rem, 8vw, 4rem)', { lineHeight: '1.1', letterSpacing: '-0.02em' }],
            'h1': ['clamp(2.25rem, 6vw, 3rem)', { lineHeight: '1.2', letterSpacing: '-0.01em' }],
            'h2': ['clamp(1.875rem, 5vw, 2.25rem)', { lineHeight: '1.3', letterSpacing: '-0.01em' }],
            'h3': ['clamp(1.5rem, 4vw, 1.875rem)', { lineHeight: '1.4', letterSpacing: '0' }],
            'h4': ['clamp(1.25rem, 3.5vw, 1.5rem)', { lineHeight: '1.4', letterSpacing: '0' }],
            'h5': ['clamp(1.125rem, 3vw, 1.25rem)', { lineHeight: '1.5', letterSpacing: '0' }],
            'h6': ['clamp(1rem, 2.5vw, 1.125rem)', { lineHeight: '1.5', letterSpacing: '0' }],
            'body-lg': ['clamp(1rem, 2.5vw, 1.125rem)', { lineHeight: '1.7', letterSpacing: '-0.01em' }],
            'body': ['1rem', { lineHeight: '1.6', letterSpacing: '0' }],
            'body-sm': ['0.875rem', { lineHeight: '1.5', letterSpacing: '0.01em' }],
          },
      
       /* Festa Color system */
          colors: {
            'chicken-comb': {
              '50': '#fef2f2',
              '100': '#fee2e2',
              '200': '#fecaca',
              '300': '#fca5a5',
              '400': '#f87171',
              'DEFAULT': '#e12729',
              '600': '#dc2626',
              '700': '#b91c1c',
              '800': '#991b1b',
              '900': '#7f1d1d',
              '950': '#46090a',
            },
            'apocalyptic-orange': {
              '50': '#fff7ed',
              '100': '#ffedd5',
              '200': '#fed7aa',
              '300': '#fdba74',
              'DEFAULT': '#f37324',
              '500': '#f97316',
              '600': '#ea580c',
              '700': '#c2410c',
              '800': '#9a3412',
              '900': '#7c2d12',
              '950': '#431407',
            },
            'pepper-green': {
              '50': '#ecfff7',
              '100': '#d1ffe9',
              '200': '#a7ffd8',
              '300': '#6fffc1',
              '400': '#00f28b',
              'DEFAULT': '#007f4e',
              '600': '#00b369',
              '700': '#008f54',
              '800': '#007144',
              '900': '#005c38',
              '950': '#003921',
            },
            'pot-of-gold': {
              '50': '#fefce8',
              '100': '#fef9c3',
              'DEFAULT': '#f8cc1b',
              '300': '#fde047',
              '400': '#facc15',
              '500': '#eab308',
              '600': '#ca8a04',
              '700': '#a16207',
              '800': '#854d0e',
              '900': '#713f12',
              '950': '#412007',
            },
            'leaf': {
              '50': '#f3f9ec',
              '100': '#e5f2d8',
              'DEFAULT': '#72b043',
              '300': '#bcd99b',
              '400': '#a3ca78',
              '500': '#8bbb55',
              '600': '#729b45',
              '700': '#5b7c37',
              '800': '#46612b',
              '900': '#384d22',
              '950': '#16250e',
            },
            'white-smoke': {
              '50': '#ffffff',
              '100': '#fafafa',
              'DEFAULT': '#f6f6f6',
              '300': '#e5e5e5',
              '400': '#d4d4d4',
              '500': '#a3a3a3',
              '600': '#737373',
              '700': '#525252',
              '800': '#404040',
              '900': '#333333',
              '950': '#292929',
            },
            'the-end': {
              '50': '#f6f6f6',
              '100': '#e7e7e7',
              '200': '#d1d1d1',
              '300': '#b0b0b0',
              '400': '#888888',
              'DEFAULT': '#2a2a2a',
              '600': '#4d4d4d',
              '700': '#434343',
              '800': '#3f3f3f',
              '900': '#3d3d3d',
            },
          },

        extend: {
        },
    },

    plugins: [forms],
};

```