# Google Analytics 4 Setup Guide - Festa Design Studio

## 📊 Implementation Status

✅ **GA4 Measurement ID**: `G-VVPR0KH690` - Implemented  
✅ **Enhanced Tracking**: Active and collecting data  
✅ **Cookie Consent**: GDPR compliant implementation

---

## 🎯 Step 1: Mark Key Events as Conversions

### Access Conversions in GA4:

1. Go to [Google Analytics](https://analytics.google.com/)
2. Select your **Festa Design Studio** property
3. Navigate to **Configure > Conversions**

### Events to Mark as Conversions:

#### A. Newsletter Signup Conversion

```
Event Name: newsletter_signup
Action: Toggle "Mark as conversion" to ON
Value: This tracks newsletter subscriptions from your website
```

#### B. Contact Form Conversion

```
Event Name: contact_form_submit
Action: Toggle "Mark as conversion" to ON
Value: This tracks lead generation from contact forms
```

#### C. High Engagement Conversion

```
Event Name: scroll_depth
Condition: Only when value >= 75
Action: Toggle "Mark as conversion" to ON
Value: This tracks highly engaged users
```

### Creating Custom Conversion for Scroll Depth:

1. In GA4, go to **Configure > Conversions**
2. Click **New conversion event**
3. Event name: `high_engagement_scroll`
4. Conditions:
    - Event name equals `scroll_depth`
    - Parameter `value` is greater than or equal to `75`

---

## 👥 Step 2: Set Up Audience Segments

### Access Audiences in GA4:

1. Navigate to **Configure > Audiences**
2. Click **New audience**

### Recommended Audiences:

#### A. Highly Engaged Visitors

```
Name: Highly Engaged Users
Conditions:
- Event: scroll_depth with value >= 75
- OR Session duration > 2 minutes
- OR Pages per session > 3
Membership duration: 30 days
```

#### B. Service Interest Audience

```
Name: Service Interested Users
Conditions:
- Event: service_page_view
- OR Event: cta_interaction with button_location contains "/services/"
Membership duration: 90 days
```

#### C. Portfolio Engaged Audience

```
Name: Portfolio Engaged Users
Conditions:
- Event: portfolio_view
- OR Event: blog_article_click
Membership duration: 60 days
```

#### D. Potential Leads

```
Name: Potential Leads
Conditions:
- Event: talk_to_festa_click
- OR Event: contact_form_submit
- OR Event: newsletter_signup
Membership duration: 180 days
```

---

## 📈 Step 3: Create Custom Reports

### Access Reports in GA4:

1. Navigate to **Explore**
2. Click **Create a new exploration**

### Report 1: Festa Design Engagement Overview

**Report Type**: Free Form
**Dimensions**:

-   Page path and screen class
-   Event name
-   Source/Medium

**Metrics**:

-   Events
-   Event count per user
-   Conversions

**Filters**:

-   Event name = `portfolio_view, service_page_view, blog_article_click, cta_interaction`

### Report 2: Lead Generation Funnel

**Report Type**: Funnel Exploration
**Steps**:

1. Page view (any page)
2. Service page view (`service_page_view`)
3. CTA interaction (`cta_interaction`)
4. Contact form view (page_location contains "contact")
5. Contact form submit (`contact_form_submit`)

### Report 3: Content Performance Dashboard

**Report Type**: Free Form
**Dimensions**:

-   Page title and screen name
-   Event name

**Metrics**:

-   Views
-   Average engagement time
-   Scroll depth events
-   Conversions

**Segment**: Apply "Highly Engaged Users" audience

---

## ⚙️ Step 4: Enhanced Event Configuration

### Custom Dimensions (Optional Enhancement):

To get even more insights, you can set up custom dimensions:

1. Go to **Configure > Custom definitions**
2. Create custom dimensions:

```
Dimension 1:
Name: Project Category
Parameter: content_group1
Scope: Event

Dimension 2:
Name: Service Type
Parameter: service_type
Scope: Event

Dimension 3:
Name: User Engagement Level
Parameter: engagement_level
Scope: User
```

---

## 🔧 Step 5: Goal and Conversion Values

### Assign Values to Conversions:

1. In **Configure > Conversions**, edit each conversion
2. Assign monetary values:

```
newsletter_signup: $2.00 (lead value)
contact_form_submit: $25.00 (qualified lead value)
high_engagement_scroll: $1.00 (engagement value)
```

---

## 📊 Step 6: Set Up Alerts

### Create Intelligence Alerts:

1. Navigate to **Configure > Custom alerts**
2. Create alerts for:

```
Alert 1: Contact Form Spike
Condition: contact_form_submit increases by 50% week-over-week
Frequency: Daily

Alert 2: Traffic Drop
Condition: Sessions decrease by 30% day-over-day
Frequency: Daily

Alert 3: High Conversion Day
Condition: Conversions increase by 100% day-over-day
Frequency: Daily
```

---

## 🚀 Step 7: Integration Setup

### Link to Google Search Console:

1. In GA4, go to **Admin > Property Settings**
2. Click **Search Console links**
3. Link your verified Search Console property
4. Enable all web streams

### Link to Google Ads (if applicable):

1. Go to **Admin > Google Ads links**
2. Link your Google Ads account
3. Enable auto-tagging and conversion imports

---

## 📋 Implementation Checklist

### Immediate Setup (Do Today):

-   [ ] Mark newsletter_signup as conversion
-   [ ] Mark contact_form_submit as conversion
-   [ ] Create high_engagement_scroll conversion
-   [ ] Set up "Highly Engaged Users" audience
-   [ ] Create "Potential Leads" audience

### This Week:

-   [ ] Set up Engagement Overview report
-   [ ] Create Lead Generation Funnel
-   [ ] Configure custom alerts
-   [ ] Link Google Search Console

### Optional Enhancements:

-   [ ] Set up custom dimensions
-   [ ] Assign conversion values
-   [ ] Create advanced audience segments
-   [ ] Set up automated reports via email

---

## 🔍 Testing Your Setup

### Verify Events Are Firing:

1. Go to **Reports > Realtime**
2. Visit your website and perform actions:
    - Scroll down 75% on a page
    - Click a "Learn More" button
    - Visit a service page
    - Click on a portfolio item
3. Check that events appear in real-time

### Test Conversions:

1. After setting up conversions, perform test actions
2. Check **Reports > Realtime > Conversions**
3. Verify conversion events are tracked

---

## 📞 Support & Troubleshooting

### Common Issues:

-   **Events not showing**: Check browser console for errors
-   **Conversions not tracking**: Verify event names match exactly
-   **Real-time data missing**: Ensure cookies are accepted

### Analytics Health Check:

Run this test monthly:

1. Check that all key events are firing
2. Verify conversion rates are reasonable
3. Review audience growth
4. Monitor custom report accuracy

---

**Last Updated**: January 2024  
**GA4 Property**: Festa Design Studio  
**Measurement ID**: G-VVPR0KH690
