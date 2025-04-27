# 📌 Team Member

**IMPORTANT:** 

- Team member page (“about/team/team-member-name”) is a “child page” of “About page” (“views/about/team”).
- Check the directory to ensure you have found the right directory.
- Routes and controller have been created for “About page” which is the parent page for team-member.
- Check admin sidebar nav in (”views/components/core/admin-sidebar.blade.php”) and create a team member link inside pages section.
- Use the admin layout in (”views/layout/admin.blade.php”) to team member CRUD page layout. We must keep the same layout style for all admin pages.
- Make sure you add the team member components created in (”views/components-showcase.blade.php

# ✨ Team Member Components, Page and Management Setup

code snippets for **avatar component**:

```html
<!-- Team member avatar header section -->
<header class="text-center space-y-4 pb-8">
  <!-- Team member avatar -->
  <img
    src="/src/img/Abayomi-Ogundipe.jpg"
    alt="Portrait of Abayomi Ogundipe"
    class="mx-auto rounded-full w-28 h-28"
  />

  <!-- Team member name and title -->
  <h1 class="text-h1 font-bold text-the-end-900">Abayomi Ogundipe</h1>

  <p class="text-body-lg text-the-end-700">Founder, Festa Design Studio</p>

  <!-- Team email and linkedin -->
  <div class="text-body text-the-end-600 flex flex-col items-center space-y-1">
    <a
      href="mailto:abayomi@festa.design"
      class="hover:underline text-apocalyptic-orange-600"
      >abayomi@festa.design</a
    >
    <a
      href="https://www.linkedin.com/in/abayomiogundipe"
      target="_blank"
      rel="noopener noreferrer"
      class="hover:underline text-apocalyptic-orange-600"
    >
      LinkedIn
    </a>
  </div>
</header>
```

code snippets for **summary component**:

```html
<!-- Team member Professional Summary section -->
<section class="mt-10 space-y-4">
  <h2
    class="text-h3 font-semibold text-the-end-900 border-b border-white-smoke-300 pb-2"
  >
    Professional summary
  </h2>
  <p class="text-body text-the-end-700 leading-relaxed">
    International development professional with 15+ years of experience in
    program design, management, and fundraising. Demonstrated success in leading
    global teams, securing over $900,000 in funding, and implementing
    high-impact educational initiatives.
  </p>
  <p class="text-body text-the-end-700 leading-relaxed">
    Expertise in developing innovative STEAM (Science, Tech, Engineering, Arts &
    Maths) programs reaching 3,200+ underserved youth and managing
    cross-cultural partnerships with UN agencies, OECD donors, private
    philanthropy and corporate sponsors.
  </p>
</section>
```

Code snippet for **experience component**:

```html
<!-- Professional Experience section -->
        <section class="mt-10 space-y-6">
          <h2 class="text-h3 font-semibold text-the-end-900 border-b border-white-smoke-300 pb-2">Professional experience</h2>
      
          <div class="space-y-6">
            <div class="flex items-start gap-4">
              <img src="/src/img/fds-logomark.png" alt="Festa Design Studio" class="w-12 h-12 object-contain">
              <div class="space-y-2">
                <h3 class="text-h4 font-medium text-the-end-800">Founder — Festa Design Studio</h3>
                <p class="text-body-sm text-chicken-comb-600">2023 – Present</p>
                <p class="text-body-sm text-the-end-700">
                  Leading UX research, design systems, and implementation of accessible web applications for nonprofits and mission-driven startups.
                </p>
              </div>
            </div>
      
            <div class="flex items-start gap-4">
              <img src="/src/img/tekedu.png" alt="TEKEDU" class="w-12 h-12 object-contain">
              <div class="space-y-2">
                <h3 class="text-h4 font-medium text-the-end-800">Founder — TEKEDU</h3>
                <p class="text-body-sm text-chicken-comb-600">2013 – 2023</p>
                <p class="text-body-sm text-the-end-700">
                  Designed digital experiences and optimized interfaces for multiple nonprofit organizations, boosting user engagement.
                </p>
              </div>
            </div>
          </div>
      
        </section>
```

Code snippets for **volunteer experience (continuation of professional experience component)**:

```html
<!-- Volunteer Experience  section-->
        <section class="mt-10 space-y-6">
          <h2 class="text-h3 font-semibold text-the-end-900 border-b border-white-smoke-300 pb-2">Volunteer experience</h2>
      
          <div class="space-y-6">
            <div class="flex items-start gap-4">
              <img src="/src/img/Global_Shapers_Logo.svg" alt="Global Shapers Community, World Economic Forum" class="w-12 h-12 object-contain">
              <div class="space-y-2">
                <h3 class="text-h4 font-medium text-the-end-800">Founding curator — Global Shapers Chisinau</h3>
                <p class="text-body-sm text-chicken-comb-600">2015 – 2016</p>
                <p class="text-body-sm text-the-end-700">
                  Mobilized young leaders to develop and deliver community impact projects under the World Economic Forum's Global Shapers initiative.
                </p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <img src="/src/img/code-week-logo.png" alt="EU Code Week" class="w-12 h-12 object-contain">
              <div class="space-y-2">
                <h3 class="text-h4 font-medium text-the-end-800">Ambassador — EU Code Week / EU Robotics Week</h3>
                <p class="text-body-sm text-chicken-comb-600">2014 – 2017</p>
                <p class="text-body-sm text-the-end-700">
                  Mobilized young leaders to develop and deliver community impact projects under the World Economic Forum's Global Shapers initiative.
                </p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <img src="/src/img/Technovation-Logo_Girls.jpg" alt="Technovation girls" class="w-12 h-12 object-contain">
              <div class="space-y-2">
                <h3 class="text-h4 font-medium text-the-end-800">Technovation Girls</h3>
                <p class="text-body-sm text-chicken-comb-600">2014 – 2018</p>
                <p class="text-body-sm text-the-end-700">
                  Mobilized young leaders to develop and deliver community impact projects under the World Economic Forum's Global Shapers initiative.
                </p>
              </div>
            </div>
      
            <div class="flex items-start gap-4">
              <img src="/src/img/aiesec.png" alt="AIESEC Moldova and Nigeria" class="w-12 h-12 object-contain">
              <div class="space-y-2">
                <h3 class="text-h4 font-medium text-the-end-800">Vice president — AIESEC Moldova and Nigeria</h3>
                <p class="text-body-sm text-chicken-comb-600">2010 – 2013</p>
                <p class="text-body-sm text-the-end-700">
                  Led exchange programs, leadership development initiatives, and international partnerships impacting youth across two countries.
                </p>
              </div>
            </div>
          </div>
      
        </section>
```

code snippets for **education component**:

```html
<!-- Education section -->
<section class="mt-10 space-y-4">
  <h2
    class="text-h3 font-semibold text-the-end-900 border-b border-white-smoke-300 pb-2"
  >
    Education
  </h2>
  <ul
    class="list-disc list-outside ml-3.5 text-body-sm text-the-end-700 space-y-2.5"
  >
    <li>
      Advanced Diploma, International Development —
      <span class="text-chicken-comb-600">University of Cambridge, UK</span>
    </li>
    <li>
      B.Sc. in Business Administration —
      <span class="text-chicken-comb-600">University of Lagos, Nigeria</span>
    </li>
  </ul>
</section>
```

Code snippet for **certifications section**:

```html
 <!-- Certifications section-->
        <section class="mt-10 space-y-6">
          <h2 class="text-h3 font-semibold text-the-end-900 border-b border-white-smoke-300 pb-2">Certifications</h2>
      
          <div class="space-y-6">
            <div class="flex items-center gap-4">
              <img class="w-10 h-10" src="/src/img/ux-design-institute.jpeg" alt="UX Design Institute" class="w-10 h-10 object-contain">
              <div>
                <p class="text-body-sm text-the-end-700">
                  Professional Diploma in UX Design — <span class="text-chicken-comb-600">UX Design Institute, Ireland</span>
                </p>
              </div>
            </div>
      
            <div class="flex items-center gap-4">
                 <img class="w-10 h-10" src="/src/img/general-assembly.png" alt="General Assembly" class="w-10 h-10 object-contain">              
              <div>
                <p class="text-body-sm text-the-end-700">
                  Professional Diploma in Front-end Web Development — <span class="text-chicken-comb-600">General Assembly, Washington D.C.</span>
                </p>
              </div>
            </div>
          </div>
      
        </section>
```

Code snippets for **skills section component**:

```html
<!-- Skills section-->
        <section class="mt-10 space-y-8">
          <h2 class="text-h3 font-semibold text-the-end-900 border-b border-white-smoke-300 pb-2">Skills</h2>
      
          <!-- UX Research and Design skills -->
          <div>
            <h3 class="text-h4 font-medium text-the-end-800 mb-2">UX research & design</h3>
            <ul class="flex flex-wrap gap-2 text-body-sm text-the-end-700">
              <li class="bg-leaf-100 px-3 py-1 rounded-full">UX Research</li>
              <li class="bg-leaf-100 px-3 py-1 rounded-full">Interaction Design</li>
              <li class="bg-leaf-100 px-3 py-1 rounded-full">Design Systems</li>
              <li class="bg-leaf-100 px-3 py-1 rounded-full">Figma</li>
            </ul>
          </div>
      
          <!-- Web development design Skills -->
          <div>
            <h3 class="text-h4 font-medium text-the-end-800 mb-2">Frontend web development</h3>
            <ul class="flex flex-wrap gap-2 text-body-sm text-the-end-700">
              <li class="bg-leaf-100 px-3 py-1 rounded-full">Tailwind CSS</li>
              <li class="bg-leaf-100 px-3 py-1 rounded-full">Laravel</li>
              <li class="bg-leaf-100 px-3 py-1 rounded-full">PHP</li>
              <li class="bg-leaf-100 px-3 py-1 rounded-full">jQuery</li>
              <li class="bg-leaf-100 px-3 py-1 rounded-full">HTML5</li>
              <li class="bg-leaf-100 px-3 py-1 rounded-full">CSS</li>
            </ul>
          </div>
      
        </section>
```

Code snippets for **As seen in component section**:

```html
<!-- As seen in  section-->
        <section class="mt-10 space-y-8">
          <h2 class="text-h3 font-semibold text-the-end-900 border-b border-white-smoke-300 pb-2">As seen in</h2>

          <ul class="space-y-4 text-body-sm text-the-end-700">
            <li>
              <a href="https://iwpr.net/impact/moldova-hire-me" target="_blank" rel="noopener noreferrer" class="text-apocalyptic-orange-600 hover:underline">
                “Moldova: Hire Me” — The Institute for War & Peace Reporting
              </a>
            </li>
            <li>
              <a href="https://example.com/article-2" target="_blank" rel="noopener noreferrer" class="text-apocalyptic-orange-600 hover:underline">
                “Moldova ramps up IT training for girls” — UN Women Europe and Central Asia
              </a>
            </li>
            <li>
              <a href="https://2016.cybersecforum.eu/en/speakers/" target="_blank" rel="noopener noreferrer" class="text-apocalyptic-orange-600 hover:underline">
                “Speaker at 2016 CYBERSEC” — European Cybersecurity Forum

              </a>
            </li>
            <li>
              <a href="https://www.etf.europa.eu/en/news-and-events/events/innovative-learning-tools-and-ideas-bring-down-digital-gender-gap" target="_blank" rel="noopener noreferrer" class="text-apocalyptic-orange-600 hover:underline">
                “Innovative learning tools and ideas to bring down the digital gender gap” — European Training Foundation

              </a>
            </li>
            <li>
              <a href="https://codeweek.eu/blog/meet-the-ambassadors-abayomi-ogundipe-moldova/" target="_blank" rel="noopener noreferrer" class="text-apocalyptic-orange-600 hover:underline">
                “Meet EU Code Week Ambassador to Moldova” — EU Code Week, European Commission

              </a>
            </li>
            <li>
              <a href="https://codeweek.eu/blog/meet-the-ambassadors-abayomi-ogundipe-moldova/" target="_blank" rel="noopener noreferrer" class="text-apocalyptic-orange-600 hover:underline">
                “MiscellaneousGirlsGoIT is leading young women in acquiring IT skills in Moldova” — Moldova.org

              </a>
            </li>
            <li>
              <a href="https://codeweek.eu/blog/meet-the-ambassadors-abayomi-ogundipe-moldova/" target="_blank" rel="noopener noreferrer" class="text-apocalyptic-orange-600 hover:underline">
                “National Coordinators in Europe and beyond” — EU Robotics Week

              </a>
            </li>
          </ul>
        </section>
```

For SEO reasons, the team member page must use the semantic html for content main layout:

```html
<!-- Team member main content are -->
<article class="max-w-3xl mx-auto py-16 px-6 sm:px-12 bg-white-smoke-50 font-Inter text-the-end-900">
  <!-- Team member header section here -->
   <!-- Team member Professional Summary section here -->
    <!-- Professional Experience section -->

    <!--and others-->
  </article>
```

## 📂 1. Directory Structure

- Admin CRUD Management Views → `/admin/about/team/members/...`
- Public Team Member Show Page → `/admin/about/team/members/...`
- Blade Components → `resources/views/components/about/team/...`

## 🏗️ 2. Blade Components

Inside `components/about/team/team-member/`:

- `avatar.blade.php`
- `summary.blade.php`
- `experience.blade.php`
- `education.blade.php`
- `certifications.blade.php`
- `skills.blade.php`
- `press.blade.php`

Import and reuse inside `show.blade.php`.

## ⚙️ 3. Model and Migration

- Create `TeamMember` model.
- Create `team_members` table.
- Fields:
    - `name`, `title`, `email`, `linkedin`, `summary`
    - `professional_experience` (JSON)
    - `volunteer_experience` (JSON)
    - `education` (JSON)
    - `certifications` (JSON)
    - `skills` (JSON)
    - `press` (JSON)
    - `avatar`

Run migration:

```bash
php artisan migrate

```

## 💖 4. Controller and CRUD

- Create `App\Http\Controllers\About\Team\TeamMemberController`
- Full CRUD:
    - index
    - create
    - store
    - show
    - edit
    - update
    - destroy

## 🛣️ 5. Routes

In `routes/web.php`:

```php
// Public route
Route::get('/about/team/members/{team_member}', [TeamMemberController::class, 'show'])->name('about.team.members.show');

// Admin CRUD routes
Route::prefix('admin/about/team/members')->middleware(['auth'])->group(function () {
    Route::get('/', [TeamMemberController::class, 'index'])->name('admin.about.team.members.index');
    Route::get('/create', [TeamMemberController::class, 'create'])->name('admin.about.team.members.create');
    Route::post('/', [TeamMemberController::class, 'store'])->name('admin.about.team.members.store');
    Route::get('/{team_member}/edit', [TeamMemberController::class, 'edit'])->name('admin.about.team.members.edit');
    Route::put('/{team_member}', [TeamMemberController::class, 'update'])->name('admin.about.team.members.update');
    Route::delete('/{team_member}', [TeamMemberController::class, 'destroy'])->name('admin.about.team.members.destroy');
});
```

## 🛡️ 6. Validation Rules (for TeamMember)

- Name → required
- Title → required
- Email → optional, valid email format
- LinkedIn → optional, valid URL
- Summary → required
- Other fields → optional JSON arrays

## 🌐 7. URL Structure

- Public Team Member Show Page: `/about/team/{team_member}`
- Admin CRUD Panel: `/admin/about/team/team-member/`

## 🛠️ 8. Public Show Page Structure

In `resources/views/about/team/team-member/show.blade.php`:

- Uses Blade components for:
    - Avatar
    - Professional Summary
    - Professional Experience
    - Volunteer Experience
    - Education
    - Certifications
    - Skills
    - Press Mentions
- Data is passed cleanly with `:props`
- JSON fields are decoded using `json_decode`
- Sections are only displayed if content exists

## 📋 9. Admin Pages

- `index.blade.php` — Lists all team members in a table view (Name, Title, Email, Actions)
- `create.blade.php` — Form for creating a new team member
- `edit.blade.php` — Form for editing a team member
- `_form.blade.php` — Partial form reused by create and edit views

### Admin Actions:

- Add new team member
- Edit existing team member
- Delete team member

## 🌱 10. Seeder and Factory for Testing

- Create `TeamMemberFactory` using:

```bash
php artisan make:factory TeamMemberFactory --model=TeamMember

```

- Factory Fields:
    - Name, Title, Email, LinkedIn
    - Summary
    - Professional Experience (JSON)
    - Volunteer Experience (JSON)
    - Education (JSON)
    - Certifications (JSON)
    - Skills (JSON)
    - Press Mentions (JSON)
    - Avatar image
- Create a Seeder:

```bash
php artisan make:seeder TeamMemberSeeder

```

- Seeder Example:

```php
public function run(): void
{
    TeamMember::factory()->count(10)->create();
}

```

- Add the Seeder to `DatabaseSeeder.php`.
- Run seeder:

```bash
php artisan db:seed

```

✅ This will automatically generate 10 fake team members for testing.

---

# ✅ Deliverables

- Admin CRUD Views (index, create, edit)
- Public-facing Team Member Show Page
- Blade Components
- Resourceful Controller
- Database Migration
- Auth Middleware Protection (Admin)
- Public Show Page with Components
- Admin Forms and Table Listing
- Team Member Seeder and Factory
- No bugs