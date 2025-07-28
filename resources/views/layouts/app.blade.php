<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Festa Design Studio')</title>
    <meta name="description" content="@yield('meta_description', 'Festa Design Studio')">
    @hasSection('meta_keywords')
    <meta name="keywords" content="@yield('meta_keywords')">
    @endif
    
    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="@yield('og_title', 'Festa Design Studio')">
    <meta property="og:description" content="@yield('og_description', 'Design studio specializing in nonprofit and social impact design solutions')">
    <meta property="og:image" content="@yield('og_image', asset('images/festa-og-image.jpg'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Festa Design Studio">
    
    {{-- Twitter Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Festa Design Studio')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Design studio specializing in nonprofit and social impact design solutions')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/festa-twitter-card.jpg'))">
    
    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
    
    @stack('meta')
    
    {{-- Page-specific structured data --}}
    @yield('structured_data')
    
    {{-- Organization Schema for Festa Design Studio --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Festa Design Studio",
        "url": "{{ route('home') }}",
        "logo": "{{ asset('images/festa-logo.png') }}",
        "description": "Design studio specializing in nonprofit and social impact design solutions",
        "email": "hello@festadesignstudio.com",
        "foundingDate": "2020",
        "knowsAbout": [
            "Nonprofit Design",
            "Social Impact Design", 
            "Communication Design",
            "Campaign Design",
            "Project Design",
            "Design for Good"
        ],
        "serviceArea": "Global",
        "sameAs": [
            "https://www.linkedin.com/company/festadesignstudio/",
            "https://www.instagram.com/festadesignstudio/",
            "https://github.com/Festa-Design-Studio"
        ],
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Global",
            "addressCountry": "Worldwide"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-XXX-XXX-XXXX",
            "contactType": "Customer Service",
            "availableLanguage": "English"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Design Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Project Design",
                        "description": "Complete project design solutions for nonprofits and social enterprises"
                    }
                },
                {
                    "@type": "Offer", 
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Communication Design",
                        "description": "Strategic communication design for social impact organizations"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service", 
                        "name": "Campaign Design",
                        "description": "Design campaigns that drive social change and engagement"
                    }
                }
            ]
        }
    }
    </script>
    
    @vite([
        'resources/css/app.css', 
        'resources/css/toolkit-filters.css',
        'resources/css/festa-rich-text-editor.css',
        'resources/js/app.js', 
        'resources/js/toolkit-filter.js',
        'resources/js/mobile.js'
    ])
    @livewireStyles
</head>
<body class="bg-white-smoke-50">
    <!-- Header -->
    <x-core.header />

    <!-- Breadcrumbs -->
    @yield('breadcrumbs')
    
    <!-- Main Content -->
    <main class="">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <x-core.footer />
    
    @include('cookie-consent::index')
    <script>
        document.addEventListener('laravelCookieConsentAccepted', function () {
            // Load Google Analytics script dynamically
            var gaScript = document.createElement('script');
            gaScript.async = true;
            gaScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-VVPR0KH690';
            document.head.appendChild(gaScript);

            // Initialize GA4 after script loads
            gaScript.onload = function() {
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                window.gtag = gtag;
                
                gtag('js', new Date());
                gtag('config', 'G-VVPR0KH690', {
                    page_title: document.title,
                    page_location: window.location.href,
                    send_page_view: true,
                    // Enhanced measurement features
                    enhanced_measurements: {
                        scrolls: true,
                        outbound_clicks: true,
                        site_search: true,
                        video_engagement: true,
                        file_downloads: true
                    }
                });

                // Make gtag globally available for custom events
                window.gtag = gtag;
                
                // Enhanced tracking initialization
                initializeEnhancedTracking();
            };
        });

        // Enhanced tracking functions
        function initializeEnhancedTracking() {
            // Track newsletter signups
            trackNewsletterSignups();
            
            // Track contact form interactions
            trackContactForms();
            
            // Track resource/toolkit interactions
            trackResourceDownloads();
            
            // Track work portfolio engagement
            trackPortfolioViews();
            
            // Track scroll depth
            trackScrollDepth();
            
            // Track external link clicks
            trackExternalLinks();
            
            // Track Festa-specific interactions
            trackFestaInteractions();
        }

        // Newsletter signup tracking
        function trackNewsletterSignups() {
            document.addEventListener('submit', function(e) {
                if (e.target.matches('form') && e.target.action.includes('newsletter')) {
                    if (typeof gtag !== 'undefined') {
                        gtag('event', 'newsletter_signup', {
                            event_category: 'engagement',
                            event_label: 'newsletter_subscription',
                            value: 1
                        });
                    }
                }
            });
        }

        // Contact form tracking
        function trackContactForms() {
            // Track contact form submissions
            document.addEventListener('submit', function(e) {
                if (e.target.matches('form') && (e.target.action.includes('contact') || e.target.action.includes('talktofesta'))) {
                    if (typeof gtag !== 'undefined') {
                        gtag('event', 'contact_form_submit', {
                            event_category: 'lead_generation',
                            event_label: 'contact_form',
                            value: 5
                        });
                    }
                }
            });

            // Track "Talk to Festa" button clicks
            document.addEventListener('click', function(e) {
                if (e.target.matches('a[href*="talktofesta"]') || 
                    e.target.closest('a[href*="talktofesta"]')) {
                    if (typeof gtag !== 'undefined') {
                        gtag('event', 'talk_to_festa_click', {
                            event_category: 'engagement',
                            event_label: 'cta_button'
                        });
                    }
                }
            });
        }

        // Resource and toolkit tracking
        function trackResourceDownloads() {
            document.addEventListener('click', function(e) {
                var target = e.target.closest('a');
                if (target && typeof gtag !== 'undefined') {
                    // Track toolkit resource clicks
                    if (target.href.includes('toolkit') || target.classList.contains('toolkit-resource')) {
                        gtag('event', 'toolkit_resource_click', {
                            event_category: 'engagement',
                            event_label: 'toolkit_interaction',
                            resource_name: target.textContent.trim()
                        });
                    }
                    
                    // Track blog article clicks
                    if (target.href.includes('/blog/') || target.href.includes('/resources/blog/')) {
                        gtag('event', 'blog_article_click', {
                            event_category: 'content_engagement',
                            event_label: 'blog_article',
                            article_title: target.textContent.trim()
                        });
                    }
                }
            });
        }

        // Portfolio/work tracking
        function trackPortfolioViews() {
            // Track work/case study views
            if (window.location.pathname.includes('/work/')) {
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'portfolio_view', {
                        event_category: 'content_engagement',
                        event_label: 'case_study_view',
                        page_path: window.location.pathname
                    });
                }
            }

            // Track service page views
            if (window.location.pathname.includes('/services/')) {
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'service_page_view', {
                        event_category: 'service_interest',
                        event_label: window.location.pathname.split('/').pop(),
                        page_path: window.location.pathname
                    });
                }
            }
        }

        // Scroll depth tracking
        function trackScrollDepth() {
            var scrollDepthMarks = [25, 50, 75, 90];
            var scrollDepthReached = [];

            window.addEventListener('scroll', function() {
                var scrollPercent = Math.round((window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100);
                
                scrollDepthMarks.forEach(function(mark) {
                    if (scrollPercent >= mark && !scrollDepthReached.includes(mark)) {
                        scrollDepthReached.push(mark);
                        if (typeof gtag !== 'undefined') {
                            gtag('event', 'scroll_depth', {
                                event_category: 'engagement',
                                event_label: mark + '_percent',
                                value: mark
                            });
                        }
                    }
                });
            });
        }

        // External link tracking
        function trackExternalLinks() {
            document.addEventListener('click', function(e) {
                var target = e.target.closest('a');
                if (target && target.hostname !== window.location.hostname && target.href.startsWith('http')) {
                    if (typeof gtag !== 'undefined') {
                        gtag('event', 'external_link_click', {
                            event_category: 'outbound',
                            event_label: target.hostname,
                            link_url: target.href
                        });
                    }
                }
            });
        }

        // Custom event for specific Festa Design Studio interactions
        function trackFestaInteractions() {
            // Track service inquiry buttons
            document.addEventListener('click', function(e) {
                if (e.target.matches('button, a') && 
                    (e.target.textContent.includes('Get Started') || 
                     e.target.textContent.includes('Learn More') ||
                     e.target.textContent.includes('View Our Work') ||
                     e.target.textContent.includes('View all'))) {
                    if (typeof gtag !== 'undefined') {
                        gtag('event', 'cta_interaction', {
                            event_category: 'conversion',
                            event_label: e.target.textContent.trim(),
                            button_location: window.location.pathname
                        });
                    }
                }
            });

            // Track team member page views
            if (window.location.pathname.includes('/about/team/')) {
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'team_member_view', {
                        event_category: 'about_engagement',
                        event_label: 'team_member_profile',
                        member_slug: window.location.pathname.split('/').pop()
                    });
                }
            }
        }
    </script>
    @livewireScripts
    @stack('scripts')
</body>
</html>
