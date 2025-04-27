# TalktoFesta Form Implementation Instructions

## 1. Create Blade Component Directory

- Path: `resources/views/components/contact/`
- Create a file inside this directory called `talk-to-festa-form.blade.php`

## 2. Create Blade Component File

Paste the following structure into `talk-to-festa-form.blade.php`:

- A complete `<form>` tag setup with Web3Forms integration.
- Use `action="<https://api.web3forms.com/submit>"`.
- Add hidden fields:
    - `access_key` with your Web3Forms access key.
    - `to` field with value `talktofesta@festa.design`.
    - `redirect` field with value `/thank-you`.

## 3. Form Sections and Fields

### Form Introduction

- Heading (`Talk to Festa`) using class `text-h2 font-bold text-chicken-comb-600`.
- Brief paragraph using class `text-body text-the-end-700`.

### Organization Details Section

- Input `organization_name` (text input).
    - *use defined input component (”views/components/core/input.blade.php”)*
- Textarea `organization_mission`.
    - *use defined textarea component (”views/components/core/textarea.blade.php”)*
- Radio buttons `organization_type` with values:
    - Nonprofit
    - Startup
    - Other
- Conditional text input `organization_type_other` for "Other" specification.
    - *use defined radio component (”views/components/core/radio.blade.php”)*

### Organization Contact Person Section

- Input `representative_name` (text input).
- Input `representative_email` (email input).
- Input `representative_phone` (telephone input).
    - *use defined text input component (”views/components/core/input.blade.php”)*

### Project Scope Section

- Radio buttons `project_type` with values:
    - Project Design
    - Communication Design
    - Campaign Design
        - *use defined radio component (”views/components/core/radio.blade.php”)*
- Textarea `project_description`.
- Select dropdown `project_budget` with options:
    - `$500 - $1,500`
    - `$1,500 - $3,000`
    - `$3,000 - $5,000`
    - `More`
        - *use defined select component (”views/components/core/select.blade.php”)*

### Legal Section

- Checkbox `how_we_work_agreement`.
- Checkbox `terms_agreement`.
    - *use defined checkbox component (”views/components/core/checkbox.blade.php”)*

### Submit Button

- Full width button with text `Talk to Festa`, using Primary large button.
    - *use defined primary button large component (”views/components/core/button.blade.php”)*

## 4. Tailwind Styling

- Follow Festa Design System colors and typography:
    - Backgrounds: `white-smoke-100`
    - Inputs border: `white-smoke-300`
    - Typography classes: `text-h2`, `text-body`, `text-the-end-700`, etc.
    - Primary button background: `bg-chicken-comb-600`, with hover and active states.

## 5. Usage in Blade Views

Create Talktofesta.blade.php file (example: `resources/views/contact/talktofesta.blade.php`), call the component like this:

```
<x-contact.talk-to-festa-form />

```

## 6. Create Thank You Page Blade View

- Path: `resources/views/contact/thank-you.blade.php`

Paste the following structure into `thank-you.blade.php`:

```
@extends('layouts.app')

@section('content')
<main class="relative min-h-screen bg-gradient-to-br from-white-smoke-50 via-pot-of-gold-50 to-white-smoke-100 flex flex-col items-center justify-center px-6 py-16 overflow-hidden">

  <!-- Floating Shapes -->
  <div class="absolute inset-0 pointer-events-none">
    <svg class="absolute top-10 left-10 w-32 h-32 opacity-20 animate-float-slow" viewBox="0 0 100 100" fill="none">
      <circle cx="50" cy="50" r="50" fill="#DCFCE7" />
    </svg>

    <svg class="absolute bottom-20 right-20 w-24 h-24 opacity-30 animate-float-medium" viewBox="0 0 100 100" fill="none">
      <rect width="100" height="100" rx="20" fill="#FFEDD5" />
    </svg>

    <svg class="absolute top-1/2 left-1/2 w-20 h-20 opacity-25 animate-float-fast" viewBox="0 0 100 100" fill="none">
      <polygon points="50,0 100,100 0,100" fill="#F0FDF4" />
    </svg>
  </div>

  <!-- Thank You Content -->
  <section class="relative z-10 text-center space-y-6">
    <h1 class="text-h1 font-bold text-the-end-900">Thank You!</h1>
    <p class="text-body-lg text-the-end-700 max-w-xl mx-auto">
      We've received your message and will get back to you shortly.<br>
      Let's create something impactful together.
    </p>
    <a href="/" class="inline-block mt-6 bg-apocalyptic-orange-600 hover:bg-apocalyptic-orange-700 text-white font-bold py-3 px-6 rounded-lg text-body-lg transition">
      Return Home
    </a>
  </section>

</main>
@endsection

```

- Add animation CSS classes in Tailwind config or via inline `<style>` section.

## 7. Final Notes

- No JavaScript is needed unless you want enhanced UX for form submission.
- Ensure Tailwind classes and custom colors are configured correctly.
- Minimal setup needed thanks to Web3Forms integration.

---

**This completes the TalktoFesta Form and Thank You Page implementation instructions.**

Fully ready to launch!