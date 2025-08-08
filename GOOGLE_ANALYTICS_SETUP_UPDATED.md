# ✅ Google Analytics 4 (GA4) Setup Guide for Festa Design Studio

This is an updated setup guide that aligns with the current Google Analytics dashboard interface and your already implemented JavaScript (`analytics-test.js`) and Blade files.

---

## 1. ✅ Confirm GA4 Script Installation

Make sure the following GA4 tag is in your layout file (e.g., `app.blade.php`):

```html
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VVPR0KH690"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-VVPR0KH690');
</script>
```

---

## 2. 🧪 Test Your Setup

In your browser’s developer console, run:

```js
checkAnalyticsStatus(); // checks if GA is loaded
testAnalyticsImplementation(); // fires test events
```

Then go to [GA Real-time reports](https://analytics.google.com/analytics/web/#/realtime/rt-event) to view event activity.

---

## 3. 🧭 Understanding the New GA4 "Build Audience" Interface

- **Create a custom audience**: Manually set conditions based on user behavior (e.g., visited `/work` but no form submission).
- **Suggested audiences**: Predefined segments like "Seven-day inactive users". Useful for re-engagement or trend analysis.

---

## 4. 🎯 Create Event-Based Audiences

Example: Group users who submitted your contact form.

**Steps**:
1. Admin → Audiences → New Audience → "Create a custom audience"
2. Condition: `event_name equals contact_form_submit`
3. Name it: `Contact Form Submitters`
4. Save

This audience is now usable in reporting and remarketing.

---

## 5. ✅ Mark Events as Conversions

To treat events like `newsletter_signup` as conversions:

**Steps**:
1. Go to Admin → Events
2. Click "Mark as conversion" next to each relevant event

These now appear in the Conversions section of reports.

---

## 6. 🧩 Debug with DebugView

To debug events live:

1. Install Chrome GA Debugger Extension
2. Enable it, reload your site
3. Go to Admin → DebugView to inspect live data

---

## 7. 📊 Enable Google Signals

For demographic and cross-device data:

1. Go to Admin → Data Settings → Data Collection
2. Enable **Google Signals**

---

## 8. 📐 Set Up Custom Dimensions (Optional)

Example: Track CTA button label

**Steps**:
1. Go to Admin → Custom Definitions → Custom Dimensions
2. Add new dimension:
   - Name: `button_label`
   - Scope: Event
   - Parameter: `button_location`

---

## ✅ Summary Checklist

- [x] GA4 Script is loaded
- [x] Events fire using `gtag()`
- [x] Audiences are configured from custom or suggested options
- [x] Key events marked as conversions
- [x] Real-time validation using DebugView

You're now fully aligned with the updated Google Analytics interface and your implementation is ready to support performance analysis and retargeting.