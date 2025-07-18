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
    
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/mobile.js'])
</head>
<body class="bg-white-smoke-50">
    <!-- Header -->
    <x-core.header />

    <!-- Breadcrumbs -->
    @yield('breadcrumbs')
    
    <!-- Main Content -->
    <main class="bg-gradient-to-br from-pepper-green-50 via-white-smoke-50 to-chicken-comb-50">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <x-core.footer />
    
    <!-- Alpine.js -->
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    
    <!-- Scripts Stack -->
    @stack('scripts')

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
</body>
</html>
