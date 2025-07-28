/**
 * Google Analytics Testing Script for Festa Design Studio
 * Use this script to test if your GA4 implementation is working correctly
 *
 * Usage: Open browser console and run: testAnalyticsImplementation()
 */

function testAnalyticsImplementation() {
    console.log("🧪 Testing Festa Design Studio Analytics Implementation...");

    // Check if gtag is available
    if (typeof gtag === "undefined") {
        console.error(
            "❌ gtag is not available. Make sure you accept cookies first."
        );
        return;
    }

    console.log("✅ gtag is available");

    // Test 1: Basic page view
    console.log("📊 Test 1: Basic page view tracking");
    gtag("event", "test_page_view", {
        event_category: "test",
        event_label: "analytics_test",
        test_timestamp: new Date().toISOString(),
    });

    // Test 2: Newsletter signup simulation
    console.log("📧 Test 2: Newsletter signup event");
    gtag("event", "newsletter_signup", {
        event_category: "engagement",
        event_label: "newsletter_subscription",
        value: 1,
        test_mode: true,
    });

    // Test 3: Contact form simulation
    console.log("📞 Test 3: Contact form submit event");
    gtag("event", "contact_form_submit", {
        event_category: "lead_generation",
        event_label: "contact_form",
        value: 5,
        test_mode: true,
    });

    // Test 4: CTA interaction
    console.log("🎯 Test 4: CTA interaction event");
    gtag("event", "cta_interaction", {
        event_category: "conversion",
        event_label: "Test CTA Button",
        button_location: window.location.pathname,
        test_mode: true,
    });

    // Test 5: Scroll depth
    console.log("📜 Test 5: Scroll depth event");
    gtag("event", "scroll_depth", {
        event_category: "engagement",
        event_label: "75_percent",
        value: 75,
        test_mode: true,
    });

    // Test 6: Portfolio view
    console.log("💼 Test 6: Portfolio view event");
    gtag("event", "portfolio_view", {
        event_category: "content_engagement",
        event_label: "case_study_view",
        page_path: "/work/test-project",
        test_mode: true,
    });

    // Test 7: Service page view
    console.log("🔧 Test 7: Service page view event");
    gtag("event", "service_page_view", {
        event_category: "service_interest",
        event_label: "project-design",
        page_path: "/services/project-design",
        test_mode: true,
    });

    console.log("✅ All test events sent!");
    console.log(
        "📈 Check your Google Analytics Real-Time reports to see the events."
    );
    console.log(
        "🔗 Go to: https://analytics.google.com/analytics/web/#/realtime/rt-event"
    );

    return {
        message: "Analytics test completed successfully!",
        measurement_id: "G-VVPR0KH690",
        events_sent: 7,
        next_steps: [
            "Check GA4 Real-Time reports",
            "Verify events appear in Events section",
            "Confirm conversions are tracking (if set up)",
            "Test on different pages of your site",
        ],
    };
}

/**
 * Test specific event types individually
 */
function testSpecificEvent(eventType) {
    if (typeof gtag === "undefined") {
        console.error(
            "❌ gtag is not available. Make sure you accept cookies first."
        );
        return;
    }

    const eventTests = {
        newsletter: () => {
            gtag("event", "newsletter_signup", {
                event_category: "engagement",
                event_label: "newsletter_subscription",
                value: 1,
                test_mode: true,
            });
            console.log("📧 Newsletter signup test event sent");
        },

        contact: () => {
            gtag("event", "contact_form_submit", {
                event_category: "lead_generation",
                event_label: "contact_form",
                value: 5,
                test_mode: true,
            });
            console.log("📞 Contact form test event sent");
        },

        scroll: () => {
            gtag("event", "scroll_depth", {
                event_category: "engagement",
                event_label: "75_percent",
                value: 75,
                test_mode: true,
            });
            console.log("📜 Scroll depth test event sent");
        },

        cta: () => {
            gtag("event", "cta_interaction", {
                event_category: "conversion",
                event_label: "Test CTA Button",
                button_location: window.location.pathname,
                test_mode: true,
            });
            console.log("🎯 CTA interaction test event sent");
        },
    };

    if (eventTests[eventType]) {
        eventTests[eventType]();
    } else {
        console.log("Available test types:", Object.keys(eventTests));
    }
}

/**
 * Check analytics implementation status
 */
function checkAnalyticsStatus() {
    console.log("🔍 Checking Festa Design Studio Analytics Status...");

    const status = {
        gtag_available: typeof gtag !== "undefined",
        measurement_id: "G-VVPR0KH690",
        current_page: window.location.pathname,
        user_agent: navigator.userAgent,
        cookies_enabled: navigator.cookieEnabled,
        timestamp: new Date().toISOString(),
    };

    console.table(status);

    if (status.gtag_available) {
        console.log("✅ Analytics is properly loaded and ready");
        console.log("🧪 Run testAnalyticsImplementation() to test events");
    } else {
        console.log("❌ Analytics not loaded. Please:");
        console.log("1. Accept cookies on the website");
        console.log("2. Wait for scripts to load");
        console.log("3. Check browser console for errors");
    }

    return status;
}

// Auto-run status check when script loads
if (typeof window !== "undefined") {
    // Wait a bit for gtag to load, then check status
    setTimeout(() => {
        if (document.readyState === "complete") {
            console.log("📊 Festa Design Studio Analytics Test Script Loaded");
            console.log("🎯 Use checkAnalyticsStatus() to check setup");
            console.log("🧪 Use testAnalyticsImplementation() to test events");
        }
    }, 2000);
}

/**
 * Quick debug helper for common issues
 */
function debugAnalytics() {
    const debug = {
        gtag_function: typeof gtag,
        dataLayer_exists:
            typeof dataLayer !== "undefined" && Array.isArray(dataLayer),
        dataLayer_length:
            typeof dataLayer !== "undefined" ? dataLayer.length : 0,
        cookie_consent: document.querySelector("[data-cookie-consent]")
            ? "Found"
            : "Not found",
        ga_script: document.querySelector('script[src*="googletagmanager"]')
            ? "Loaded"
            : "Not loaded",
        current_domain: window.location.hostname,
        protocol: window.location.protocol,
    };

    console.log("🔧 Analytics Debug Information:");
    console.table(debug);

    return debug;
}
