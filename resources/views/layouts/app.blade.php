<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Festa Design Studio')</title>
    <meta name="description" content="@yield('meta_description', 'Festa Design Studio')">
    @stack('meta')
    
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
            "https://www.linkedin.com/company/festa-design-studio",
            "https://www.behance.net/festadesignstudio",
            "https://dribbble.com/festadesignstudio"
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
            gaScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX'; // Replace with your GA4 Measurement ID
            document.head.appendChild(gaScript);

            // Initialize GA4 after script loads
            gaScript.onload = function() {
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                window.gtag = gtag;
                gtag('js', new Date());
                gtag('config', 'G-XXXXXXXXXX'); // Replace with your GA4 Measurement ID
            };
        });
    </script>
    @livewireScripts
    @stack('scripts')
</body>
</html>
