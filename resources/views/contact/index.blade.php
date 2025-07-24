@extends('layouts.app')

@section('title', $pageSeo?->og_title ?: 'Contact Us - Festa Design Studio')

@section('meta_description', $pageSeo?->meta_description ?: 'Get in touch with Festa Design Studio. Ready to transform your mission into visual impact? Contact our design team for nonprofit, startup, and social impact design projects.')

@section('meta_keywords', $pageSeo?->meta_keywords ?: 'contact festa design studio, nonprofit design consultation, social impact design contact, design for good contact')

@section('og_title', $pageSeo?->og_title ?: 'Contact Us - Festa Design Studio')
@section('og_description', $pageSeo?->og_description ?: 'Get in touch with Festa Design Studio. Ready to transform your mission into visual impact? Contact our design team for social impact projects.')
@section('og_image', $pageSeo?->og_image ?: asset('images/contact-og-image.jpg'))
@section('og_url', url()->current())

@section('twitter_title', $pageSeo?->twitter_title ?: 'Contact Us - Festa Design Studio')
@section('twitter_description', $pageSeo?->twitter_description ?: 'Get in touch with Festa Design Studio. Ready to transform your mission into visual impact?')
@section('twitter_image', $pageSeo?->twitter_image ?: asset('images/contact-twitter-card.jpg'))

@section('structured_data')
@if($pageSeo?->structured_data)
{!! json_encode($pageSeo->structured_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
@else
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Contact Festa Design Studio",
    "description": "Get in touch with Festa Design Studio for nonprofit, startup, and social impact design projects",
    "url": "{{ url()->current() }}",
    "mainEntity": {
        "@type": "Organization",
        "name": "Festa Design Studio",
        "url": "{{ route('home') }}",
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Customer Service",
            "email": "hello@festa.design"
        }
    }
}
</script>
@endif
@endsection

@section('breadcrumbs')
    <!-- Breadcrumb navigation -->
    <x-core.breadcrumbs :items="[
        ['label' => 'Contact', 'url' => '']
    ]" />
@endsection

@section('content')
<!-- Contact Hero Section -->
<section class="py-28 px-6 text-center max-w-4xl mx-auto space-y-6 bg">
  <p class="text-body-sm text-chicken-comb-600 uppercase tracking-wider mb-2">
    Contact Us
  </p>
  <h1 class="text-h1 font-black text-the-end-900 mb-4">Let's create impact together</h1>
  <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto mb-8">
    Ready to bring your vision to life? Whether you're a nonprofit, startup, or impact-driven organization, we're here to help you design for good.
  </p>
</section>

<!-- Contact Options Section -->
<section class="py-20 px-6 md:px-8 lg:px-16 mx-auto max-w-7xl">
    <div class="grid lg:grid-cols-2 gap-16 items-start">
        
        <!-- Talk to Festa - Primary Option -->
        <div class="bg-white-smoke-100 p-8 lg:p-10 rounded-lg border border-the-end-200 shadow-sm">
            <div class="mb-8">
                <h2 class="text-h2 font-bold text-chicken-comb-600 mb-4">Talk to Festa</h2>
                <p class="text-body text-the-end-700 mb-6">
                    Ready to start a project? Tell us about your organization and let's explore how we can work together to create meaningful impact.
                </p>
                <ul class="space-y-3 text-body-sm text-the-end-600 mb-8">
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-pepper-green-600" viewBox="0 0 16 16">
                            <path d="M13.78 4.22a.75.75 0 0 1 0 1.06l-7.25 7.25a.75.75 0 0 1-1.06 0L2.22 9.28a.75.75 0 0 1 1.06-1.06L6 10.94l6.72-6.72a.75.75 0 0 1 1.06 0z" fill="currentColor" />
                        </svg>
                        Detailed project planning discussion
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-pepper-green-600" viewBox="0 0 16 16">
                            <path d="M13.78 4.22a.75.75 0 0 1 0 1.06l-7.25 7.25a.75.75 0 0 1-1.06 0L2.22 9.28a.75.75 0 0 1 1.06-1.06L6 10.94l6.72-6.72a.75.75 0 0 1 1.06 0z" fill="currentColor" />
                        </svg>
                        Custom proposal and timeline
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-pepper-green-600" viewBox="0 0 16 16">
                            <path d="M13.78 4.22a.75.75 0 0 1 0 1.06l-7.25 7.25a.75.75 0 0 1-1.06 0L2.22 9.28a.75.75 0 0 1 1.06-1.06L6 10.94l6.72-6.72a.75.75 0 0 1 1.06 0z" fill="currentColor" />
                        </svg>
                        Response within 2 business days
                    </li>
                </ul>
            </div>
            
            <x-core.button 
                href="{{ route('contact.talk-to-festa') }}" 
                variant="primary" 
                size="large"
                fullWidth="true"
            >
                Start the conversation
            </x-core.button>
        </div>

        <!-- Quick Contact - Secondary Option -->
        <div class="bg-white-smoke-50 p-8 lg:p-10 rounded-lg border border-the-end-200">
            <div class="mb-8">
                <h2 class="text-h3 font-bold text-pepper-green mb-4">Quick Contact</h2>
                <p class="text-body text-the-end-700 mb-6">
                    Have a quick question or want to say hello? Send us a message and we'll get back to you soon.
                </p>
            </div>

            <form action="https://api.web3forms.com/submit" method="POST" class="space-y-6">
                <!-- Hidden Fields -->
                <input type="hidden" name="access_key" value="9e78fe8d-0945-41da-851e-7be12cc06087">
                <input type="hidden" name="to" value="hello@festa.design">
                <input type="hidden" name="redirect" value="{{ url('/thank-you') }}">
                <input type="hidden" name="subject" value="Quick Contact Form Submission">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <x-core.text-input 
                        name="name"
                        label="Your Name"
                        placeholder="John Doe"
                        required="true"
                    />
                    
                    <x-core.text-input 
                        name="email"
                        label="Email Address"
                        type="email"
                        placeholder="john@example.com"
                        required="true"
                    />
                </div>
                
                <x-core.select 
                    name="inquiry_type" 
                    label="What's this about?"
                    required="true"
                >
                    <option value="" disabled selected>Choose an option</option>
                    <option value="general_inquiry">General inquiry</option>
                    <option value="project_question">Project question</option>
                    <option value="partnership">Partnership opportunity</option>
                    <option value="press_media">Press & Media</option>
                    <option value="other">Other</option>
                </x-core.select>
                
                <x-core.textarea 
                    name="message"
                    label="Your Message"
                    placeholder="Tell us what's on your mind..."
                    rows="4"
                    required="true"
                ></x-core.textarea>
                
                <x-core.button 
                    type="submit" 
                    variant="secondary" 
                    size="large"
                    fullWidth="true"
                >
                    Send Message
                </x-core.button>
            </form>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section class="py-20 px-6 md:px-8 lg:px-16 mx-auto max-w-7xl bg-white-smoke-100 rounded-lg my-20">
    <div class="text-center mb-16">
        <h2 class="text-h2 font-bold text-the-end-900 mb-4">Other ways to reach us</h2>
        <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
            Prefer a different way to connect? Here are all the ways you can get in touch with the Festa team.
        </p>
    </div>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8">
        <!-- Email -->
        <div class="text-center p-6">
            <div class="w-16 h-16 bg-chicken-comb-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-chicken-comb-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a1 1 0 001.42 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Email Us</h3>
            <p class="text-body-sm text-the-end-600 mb-4">Drop us a line anytime</p>
            <a href="mailto:hello@festa.design" class="text-chicken-comb-600 hover:text-chicken-comb-700 font-medium">
                hello@festa.design
            </a>
        </div>

        <!-- Social Media -->
        <div class="text-center p-6">
            <div class="w-16 h-16 bg-pepper-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-pepper-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a2 2 0 01-2-2v-6a2 2 0 012-2h8z"/>
                </svg>
            </div>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Follow Us</h3>
            <p class="text-body-sm text-the-end-600 mb-4">Stay updated with our latest work</p>
            <div class="flex justify-center gap-4">
                <a href="https://www.linkedin.com/company/festadesignstudio/" target="_blank" rel="noopener noreferrer" class="text-pepper-green-600 hover:text-pepper-green-700">LinkedIn</a>
                <a href="https://www.instagram.com/festadesignstudio/" target="_blank" rel="noopener noreferrer" class="text-pepper-green-600 hover:text-pepper-green-700">Instagram</a>
                <a href="https://github.com/Festa-Design-Studio" target="_blank" rel="noopener noreferrer" class="text-pepper-green-600 hover:text-pepper-green-700">GitHub</a>
            </div>
        </div>

        <!-- Response Time -->
        <div class="text-center p-6">
            <div class="w-16 h-16 bg-pot-of-gold-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-pot-of-gold-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Response Time</h3>
            <p class="text-body-sm text-the-end-600 mb-4">We typically respond within</p>
            <span class="text-pot-of-gold-600 font-medium">2 business days</span>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 px-6 md:px-8 lg:px-16 mx-auto max-w-5xl">
    <div class="text-center mb-16">
        <h2 class="text-h2 font-bold text-the-end-900 mb-4">Frequently Asked Questions</h2>
        <p class="text-body-lg text-the-end-700 max-w-2xl mx-auto">
            Quick answers to common questions. Don't see what you're looking for? Feel free to reach out!
        </p>
    </div>

    <div class="space-y-8">
        <div class="border-b border-the-end-200 pb-6">
            <h3 class="text-h4 font-semibold text-the-end-900 mb-3">What types of organizations do you work with?</h3>
            <p class="text-body text-the-end-700">
                We specialize in working with nonprofits, startups, and impact-driven organizations that are creating positive change in the world. If you're working to make a difference, we'd love to help you tell your story.
            </p>
        </div>

        <div class="border-b border-the-end-200 pb-6">
            <h3 class="text-h4 font-semibold text-the-end-900 mb-3">How long does a typical project take?</h3>
            <p class="text-body text-the-end-700">
                Project timelines vary depending on scope and complexity. Generally, project design work takes 2-4 weeks, communication design 3-6 weeks, and campaign design 4-8 weeks. We'll provide a detailed timeline during our initial conversation.
            </p>
        </div>

        <div class="border-b border-the-end-200 pb-6">
            <h3 class="text-h4 font-semibold text-the-end-900 mb-3">What's included in your services?</h3>
            <p class="text-body text-the-end-700">
                Each service includes strategy development, design execution, and implementation support. You'll also receive all source files, style guides, and training materials to ensure you can maintain and extend your project.
            </p>
        </div>

        <div class="pb-6">
            <h3 class="text-h4 font-semibold text-the-end-900 mb-3">Do you work with international organizations?</h3>
            <p class="text-body text-the-end-700">
                Absolutely! We work with organizations around the world. All our communication happens digitally, and we're experienced in coordinating across different time zones to ensure smooth collaboration.
            </p>
        </div>
    </div>
</section>
@endsection