# 📌 Festa’s Admin Work Page

## Setup Admin Work Blade Pages, Navigation in Sidebar, Routes,  Controllers, CRUD:

**Execute the following:**

- Setup directory for admin work Blade views “index, create, edit, etc” in “/views/admin/work”
- Setup the routes and navigation links in: “/views/components/core/admin-sidebar.blade.php”.

### **Another Important instruction:**

This is the full HTML code snippets of the Admin Work Show Page “/admin/work/index.blade.php”:

**Admin Work page “/index.blade.php”**

Code snippets

```html
<div
      class="bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100 min-h-screen py-12 px-4 md:px-8 lg:px-16"
    >
      <div class="max-w-7xl mx-auto">
        <div class="bg-white-smoke-50 rounded-2xl shadow-xl overflow-hidden">
          <!-- Header -->
          <div class="p-6 md:p-8 border-b border-the-end-200">
            <div
              class="flex flex-col md:flex-row justify-between items-center gap-4"
            >
              <div class="flex items-center gap-4">
                <svg
                  class="h-9 w-auto"
                  viewBox="0 0 16 14.75"
                  preserveAspectRatio="xMidYMid meet"
                >
                  <g fill="#e12729">
                    <defs></defs>
                    <path
                      class="cls-1"
                      d="M15,3.57V1.02H.98v12.74h2.55v-5.1h1.27v5.1h10.19v-7.64h-2.55v-2.55h2.55ZM4.8,6.12h-1.27v-2.55h1.27v2.55ZM8.94,6.12v5.1h-1.59V3.57h1.59v2.55ZM12.45,11.21h-.96v-2.55h.96v2.55Z"
                      fill="#e12729"
                    ></path>
                  </g>
                </svg>
                <h2 class="text-h2 font-bold text-the-end-900">Work</h2>
              </div>
              <a href="/src/dashboard/create-new-work-blade-php.html">
                <!-- Secondary Button -->
              <button
              class="lg:w-auto md:w-auto w-full px-6 py-3 border-2 text-body-lg text-the-end-700 border-pepper-green-600/50 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2"
            >
              Create new work
            </button>
              </a>
            </div>
          </div>

          <!-- Admin Dashboard Main Content layout -->
          <div
            class="grid md:grid-cols-12 divide-y md:divide-y-0 md:divide-x divide-the-end-200"
          >
            <!-- Admin Sidebar Navigation -->
            <div class="md:col-span-3 p-6">
              <nav class="space-y-10">
                <!--admin home page-->
                <div>
                  <a
                    href="admin-dashboard-page.html"
                    class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 font-medium"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
                      />
                    </svg>
                    <span class="text-body">Dashboard</span>
                  </a>
                </div>

                <!-- Pages Sidebar Admin navigation-->
                <div class="space-y-3">
                  <span class="font-semibold text-white-smoke-500 text-body-lg"
                    >Pages</span
                  >

                  <!-- Admin Services-->
                  <a
                    href="#"
                    class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd"
                      />
                      <path
                        fill-rule="evenodd"
                        d="M13.5 10a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm-3 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm-3 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="text-body text-the-end-700">Services</span>
                  </a>

                  <!-- Admin work-->
                  <a
                    href="#"
                    class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                        clip-rule="evenodd"
                      />
                      <path
                        d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"
                      />
                    </svg>
                    <span class="text-body text-chicken-comb-600">Work</span>
                  </a>

                  <!-- Admin About-->
                  <a
                    href="#"
                    class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="text-body text-the-end-700">About</span>
                  </a>

                  <!-- Admin Toolkit-->
                  <a
                    href="#"
                    class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M5 3a2 2 0 00-2 2v1h14V5a2 2 0 00-2-2H5zm12 4H3v8a2 2 0 002 2h10a2 2 0 002-2V7zM7 9a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1zm0 4a1 1 0 100-2h.01a1 1 0 100 2H7z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="text-body text-the-end-700">Toolkit</span>
                  </a>

                  <!-- Admin Festa Design System-->
                  <a
                    href="#"
                    class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm0 4a1 1 0 000 2h6a1 1 0 100-2H7zm6 5a1 1 0 100-2H7a1 1 0 100 2h6z"
                        clip-rule="evenodd"
                      />
                      <path
                        d="M4 16a1 1 0 011-1h2a1 1 0 110 2H5a1 1 0 01-1-1zm8-5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                      />
                    </svg>
                    <span class="text-body text-the-end-700"
                      >Festa design system</span
                    >
                  </a>

                  <!-- Admin Contact-->
                  <a
                    href="#"
                    class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"
                        clip-rule="evenodd"
                      />
                      <path
                        d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"
                      />
                    </svg>
                    <span class="text-body text-the-end-700">Contact</span>
                  </a>

                  <!-- Admin Privacy policy -->
                  <a
                    href="#"
                    class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="text-body text-the-end-700">Privacy</span>
                  </a>

                  <!-- Admin Terms and condition -->
                  <a
                    href="#"
                    class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 0h8v12H6V4z"
                        clip-rule="evenodd"
                      />
                      <path
                        fill-rule="evenodd"
                        d="M7 8a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1zm0 4a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="text-body text-the-end-700">Terms</span>
                  </a>
                </div>

                <!-- Blog Sidebar Admin navigation-->
                <div class="space-y-3">
                  <span class="font-semibold text-white-smoke-500 text-body-lg"
                    >Blog</span
                  >

                  <!-- Blog admin create post-->
                  <a
                    href="#"
                    class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="text-body text-the-end-700">Create post</span>
                  </a>

                  <!-- Blog admin post-->
                  <a
                    href="#"
                    class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                      />
                      <path
                        d="M7 8h6a1 1 0 100-2H7a1 1 0 000 2zm0 4h6a1 1 0 100-2H7a1 1 0 100 2zm0 4h4a1 1 0 100-2H7a1 1 0 100 2z"
                      />
                    </svg>
                    <span class="text-body text-the-end-700">Posts</span>
                  </a>

                  <!-- Blog admin categories-->
                  <a
                    href="#"
                    class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="text-body text-the-end-700">Categories</span>
                  </a>

                  <!-- Blog User Admin -->
                  <a
                    href="#"
                    class="flex items-center gap-2 text-the-end-700 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"
                      />
                    </svg>
                    <span class="text-body">User roles</span>
                  </a>
                </div>

                <!-- General Administrator dashboard setting-->
                <div class="space-y-3">
                  <span class="font-semibold text-white-smoke-500 text-body-lg"
                    >Administrator</span
                  >

                  <!-- General settings-->
                  <a
                    href="#"
                    class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="text-body text-the-end-700">Settings</span>
                  </a>

                  <!-- Logout-->
                  <a
                    href="#"
                    class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors"
                  >
                    <svg
                      class="w-5 h-5"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M3 3a1 1 0 00-1 1v12a1 1 0 001 1h6a1 1 0 001-1v-2a1 1 0 10-2 0v1H4V5h4v1a1 1 0 102 0V4a1 1 0 00-1-1H3z"
                        clip-rule="evenodd"
                      />
                      <path
                        fill-rule="evenodd"
                        d="M12.293 7.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L14.586 11H7a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span class="text-body text-the-end-700">Logout</span>
                  </a>
                </div>
              </nav>
            </div>

            <!-- Admin Dashboard Main Content area-->
            <div class="md:col-span-9 p-6">
              <div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
                <div class="">
                  <div class="flex sm:flex-col justify-between gap-3 items-center mb-16">
                    <!-- Sector select -->
                    <div class="relative">
                        <select
                        class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600"
                        >
                        <option value="">Sector</option>
                        <option value="nonprofit">Nonprofit</option>
                        <option value="startup">Startup</option>
                        </select>
                        <svg
                        class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-the-end-400 pointer-events-none"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7"
                        ></path>
                        </svg>
                    </div>
                    <!-- Industry select -->
                    <div class="relative">
                        <select
                        class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600"
                        >
                        <option value="">Industry</option>
                        <option value="education">Education</option>
                        <option value="healthcare">Healthcare</option>
                        <option value="research-and-development">Research and development</option>
                        </select>
                        <svg
                        class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-the-end-400 pointer-events-none"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7"
                        ></path>
                        </svg>
                    </div>
                    <!-- SDG select -->
                    <div class="relative">
                        <select
                        class="appearance-none pl-4 pr-10 py-2 text-body text-the-end-400 rounded-full border border-the-end-200 focus:outline-none focus:border-pepper-green-600"
                        >
                        <option value="Sustainable development goals">SDG goals</option>
                        <option value="sdg1">No Poverty</option>
                        <option value="sdg2">Zero Hunger</option>
                        <option value="sdg3">Good health & well-being</option>
                        <option value="sdg4">Quality Education</option>
                        <option value="sdg5">Gender equality</option>
                        <option value="sdg6">Clean water & sanitation</option>
                        <option value="sdg7">Affordable & clean energy</option>
                        <option value="sdg8">Decent work & economic growth</option>
                        <option value="sdg9">industry, innovation and infrastructure</option>
                        <option value="sdg10">Reduced inequalities</option>
                        <option value="sdg11">Sustainable cities & communities</option>
                        <option value="sdg12">Responsible consumption & production</option>
                        <option value="sdg13">Climate Action</option>
                        <option value="sdg14">Life below water</option>
                        <option value="sdg15">Life on land</option>
                        <option value="sdg16">Peace, justice & strong institutions</option>
                        <option value="sdg17">Partnerships for the goals</option>
                        </select>
                        <svg
                        class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-the-end-400 pointer-events-none"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7"
                        ></path>
                        </svg>
                    </div>
                    <!-- Search input -->
                    <div class="relative">
                        <input type="text" class="w-full pl-10 pr-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full
                            text-the-end-900 placeholder-the-end-400
                            focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
                            hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                            placeholder="Search...">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-the-end-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                  </div>
                  <div class="space-y-4">
                    <!-- admin work card -->
                    <div
                      class="flex items-center justify-between p-4 bg-white-smoke-50 rounded-lg"
                    >
                      <div class="space-y-1">
                        <!-- admin Work title-->
                        <h4 class="text-body-lg font-medium text-the-end-900">
                          Designing for Accessibility
                        </h4>
                        <!-- admin Work excerpt-->
                        <p class="text-body-sm text-the-end-600">
                          Published on March 8, 2025
                        </p>
                        <div class="flex gap-6 items-center mt-1">
                          <!-- admin work tag Category -->
                          <!-- Sector Tag -->
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm
                                bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200">
                                Nonprofit
                            </span>
                          <!-- Show number of post views-->
                          <p class="text-body-sm text-the-end-600">
                            1.2k views
                          </p>
                        </div>
                      </div>
                      <div class="flex gap-2">
                        <button
                          class="p-2 text-pepper-green-600 hover:bg-pepper-green-50 rounded-lg transition-colors"
                        >
                          Edit
                        </button>
                        <button
                          class="p-2 text-pot-of-gold-500 hover:bg-pot-of-gold-50 rounded-lg transition-colors"
                        >
                          View
                        </button>
                        <button
                          class="p-2 text-chicken-comb-600 hover:bg-chicken-comb-50 rounded-lg transition-colors"
                        >
                          Delete
                        </button>
                      </div>
                    </div>

                    <div
                      class="flex items-center justify-between p-4 bg-white-smoke-50 rounded-lg"
                    >
                      <div class="space-y-1">
                        <!-- admin Work title-->
                        <h4 class="text-body-lg font-medium text-the-end-900">
                          Designing for Accessibility
                        </h4>
                        <!-- admin Work excerpt-->
                        <p class="text-body-sm text-the-end-600">
                          Published on March 8, 2025
                        </p>
                        <div class="flex gap-6 items-center mt-1">
                          <!-- admin work tag Category -->
                          <!-- Sector Tag -->
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm
                    bg-pepper-green-50 text-pepper-green-700 border border-pepper-green-200">
                    Startup
                </span>
                          <!-- Show number of post views-->
                          <p class="text-body-sm text-the-end-600">
                            1.2k views
                          </p>
                        </div>
                      </div>
                      <div class="flex gap-2">
                        <button
                          class="p-2 text-pepper-green-600 hover:bg-pepper-green-50 rounded-lg transition-colors"
                        >
                          Edit
                        </button>
                        <button
                          class="p-2 text-pot-of-gold-500 hover:bg-pot-of-gold-50 rounded-lg transition-colors"
                        >
                          View
                        </button>
                        <button
                          class="p-2 text-chicken-comb-600 hover:bg-chicken-comb-50 rounded-lg transition-colors"
                        >
                          Delete
                        </button>
                      </div>
                    </div>

                    <!-- repeat admin work card  -->
                  </div>

                  <div class="flex justify-between items-center mt-6">
                    <p class="text-the-end-600">Showing 1-2 of 248 posts</p>
                    <div class="flex gap-2">
                      <button
                        class="lg:w-auto md:w-auto w-full px-3 py-1.5 text-body-sm h-[32px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 active:bg-white-smoke-300 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center"
                      >
                        Previous
                      </button>

                      <button
                        class="lg:w-auto md:w-auto w-full px-3 py-1.5 text-body-sm h-[32px] border-2 border-pepper-green-600/50 text-the-end rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center"
                      >
                        Next
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
```

This is the full HTML code snippets of the Admin Work Create Page “/admin/work/create.blade.php”:

**Admin Work Create page “/create.blade.php”**

Code snippets:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/output.css">
    <title>Create New Work</title>
</head>
<body>

    <div class="bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100 min-h-screen py-12 px-4 md:px-8 lg:px-16">
        <div class="max-w-7xl mx-auto">
          <div class="bg-white-smoke-50 rounded-2xl shadow-xl overflow-hidden">
            <!-- Header -->
            <div class="p-6 md:p-8 border-b border-the-end-200">
              <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-4">
                    <svg class="h-9 w-auto" viewBox="0 0 16 14.75" preserveAspectRatio="xMidYMid meet">
                        <g fill="#e12729">
                            <defs></defs>
                            <path class="cls-1"
                                d="M15,3.57V1.02H.98v12.74h2.55v-5.1h1.27v5.1h10.19v-7.64h-2.55v-2.55h2.55ZM4.8,6.12h-1.27v-2.55h1.27v2.55ZM8.94,6.12v5.1h-1.59V3.57h1.59v2.55ZM12.45,11.21h-.96v-2.55h.96v2.55Z"
                                fill="#e12729"></path>
                        </g>
                    </svg>
                  <h2 class="text-h2 font-bold text-the-end-900">Create New Work</h2>
                </div>
                <a href="/src/dashboard/admin-work-blade-php.html">
                    <!-- Large Neutral Button -->
                <button
                class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-white-smoke-400 text-the-end-700 rounded-full hover:bg-white-smoke-300/50 disabled:text-the-end-300 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-white-smoke-400 focus:ring-offset-2 inline-flex items-center justify-center">
                Back to Work
            </button>
                </a>
              </div>
            </div>
      
            <!-- Admin Create New Work Main Content layout -->
            <div class="grid md:grid-cols-12 divide-y md:divide-y-0 md:divide-x divide-the-end-200">
              
                <!-- Admin Sidebar Navigation -->
              <div class="md:col-span-3 p-6">
                <nav class="space-y-10">
                    <!--admin home page-->
                    <div>
                        <a href="#" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 font-medium">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                            </svg>
                            <span class="text-body">Dashboard</span>
                        </a>
                    </div>

                    <!-- Pages Sidebar Admin navigation-->
                    <div class="space-y-3">
                        <span class="font-semibold text-white-smoke-500 text-body-lg">Pages</span>

                        <!-- Admin Services-->
                        <a href="#" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M13.5 10a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm-3 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm-3 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-body text-the-end-700">Services</span>
                          </a>

                        <!-- Admin work-->
                        <a href="#" class="flex items-center gap-2 text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                            </svg>
                            <span class="text-body text-the-end-700">Work</span>
                          </a>

                          <!-- Admin About-->
                        <a href="#" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-body text-the-end-700">About</span>
                          </a>

                          <!-- Admin Toolkit-->
                        <a href="#" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v1h14V5a2 2 0 00-2-2H5zm12 4H3v8a2 2 0 002 2h10a2 2 0 002-2V7zM7 9a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1zm0 4a1 1 0 100-2h.01a1 1 0 100 2H7z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-body text-the-end-700">Toolkit</span>
                          </a>

                          <!-- Admin Festa Design System-->
                        <a href="#" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm0 4a1 1 0 000 2h6a1 1 0 100-2H7zm6 5a1 1 0 100-2H7a1 1 0 100 2h6z" clip-rule="evenodd" />
                                <path d="M4 16a1 1 0 011-1h2a1 1 0 110 2H5a1 1 0 01-1-1zm8-5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                            <span class="text-body text-the-end-700">Festa design system</span>
                          </a>

                          <!-- Admin Contact-->
                        <a href="#" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" clip-rule="evenodd" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <span class="text-body text-the-end-700">Contact</span>
                          </a>

                          <!-- Admin Privacy policy -->
                        <a href="#" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-body text-the-end-700">Privacy</span>
                          </a>

                          <!-- Admin Terms and condition -->
                        <a href="#" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 0h8v12H6V4z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M7 8a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1zm0 4a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-body text-the-end-700">Terms</span>
                          </a>
                        
                    </div>

                    <!-- Blog Sidebar Admin navigation-->
                    <div class="space-y-3">
                        <span class="font-semibold text-white-smoke-500 text-body-lg">Blog</span>

                        <!-- Blog admin create post-->
                        <a href="#" class="flex items-center gap-2 text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-body">Create post</span>
                          </a>

                        <!-- Blog admin post-->
                        <a href="#" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"/>
                                <path d="M7 8h6a1 1 0 100-2H7a1 1 0 000 2zm0 4h6a1 1 0 100-2H7a1 1 0 100 2zm0 4h4a1 1 0 100-2H7a1 1 0 100 2z"/>
                            </svg>
                            <span class="text-body text-the-end-700">Posts</span>
                          </a>

                        <!-- Blog admin categories-->
                        <a href="#" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-body text-the-end-700">Categories</span>
                          </a>

                          <!-- Blog User Admin -->
                        <a href="#" class="flex items-center gap-2  text-the-end-600 hover:text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                            </svg>
                            <span class="text-body">User roles</span>
                          </a>
                    </div>

                    <!-- General Administrator dashboard setting-->
                    <div class="space-y-3">
                        <span class="font-semibold text-white-smoke-500 text-body-lg ">Administrator</span>

                        <!-- General settings-->
                        <a href="#" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-body text-the-end-700">Settings</span>
                          </a>

                        <!-- Logout-->
                        <a href="#" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 001 1h6a1 1 0 001-1v-2a1 1 0 10-2 0v1H4V5h4v1a1 1 0 102 0V4a1 1 0 00-1-1H3z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M12.293 7.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L14.586 11H7a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-body text-the-end-700">Logout</span>
                          </a>

                        
                    </div>
                  

                  
                  
                </nav>
              </div>
      
              <!-- Admin Create New Work Main Content area for publishing with rich text editor-->
              <div class="md:col-span-9 p-6">
                <div class="p-8 max-w-4xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
                    <form class="space-y-4">
                      <div class="grid grid-cols-2 gap-10">
                        <div>

                            <label class="block text-body font-medium text-the-end-400 mb-2" for="title">
                              Work  Title
                            </label>
                            <input
                              type="text"
                              id="title"
                              class="w-full h-10 px-4 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full 
                              text-the-end-900 placeholder-the-end-400
                              focus:ring-1 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
                              hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50
                              disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed"
                              placeholder="Enter article headline"
                              required
                            />

                            <label class="block text-body font-medium text-the-end-400 mb-2 mt-4" for="content">
                                Work Sub-headline (excerpt)
                            </label>

                            <textarea
                                id="content"
                                rows="3"
                                class="w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
                                text-the-end-900 placeholder-the-end-400
                                focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600
                                hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                                placeholder="Write your article sub-headline..."
                                required
                            ></textarea>

                              <div class="space-y-2">
                                <label class="text-the-end-400 text-body font-medium">Select Date</label>
                                <input type="date" 
                                  class="w-full h-10 px-3 py-2 text-body  bg-white-smoke-50 border border-the-end-200 rounded-md 
                                  text-the-end-700
                                  focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600
                                  hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                                />
                              </div>
                          </div>
                          
                          <div class="space-y-3.5">
                            <div>
                                <label class="block text-body font-medium text-the-end-400 mb-2" for="category">
                                    Sector
                                </label>
                                <select
                                    id="category"
                                    class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full 
                                    text-the-end-900 appearance-none
                                    focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600
                                    hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                                    required
                                >
                                    <option value="">Select a category</option>
                                    <option value="trends">Trends</option>
                                    <option value="toolkit">Toolkit</option>
                                    <option value="strategy">Strategy</option>
                                    <option value="case-study">Case study</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-body font-medium text-the-end-400 mb-2" for="category">
                                    Industry
                                </label>
                                <select
                                    id="category"
                                    class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full 
                                    text-the-end-900 appearance-none
                                    focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600
                                    hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                                    required
                                >
                                    <option value="">Select a category</option>
                                    <option value="trends">Trends</option>
                                    <option value="toolkit">Toolkit</option>
                                    <option value="strategy">Strategy</option>
                                    <option value="case-study">Case study</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-body font-medium text-the-end-400 mb-2" for="category">
                                    SDG
                                </label>
                                <select
                                    id="category"
                                    class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-full 
                                    text-the-end-900 appearance-none
                                    focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600
                                    hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                                    required
                                >
                                    <option value="">Select a category</option>
                                    <option value="trends">Trends</option>
                                    <option value="toolkit">Toolkit</option>
                                    <option value="strategy">Strategy</option>
                                    <option value="case-study">Case study</option>
                                </select>
                            </div>
                            

                            <div>
                                <label class="block text-body font-medium text-the-end-400 mb-2.5 mt-4">
                                    Featured Image
                                  </label>
                                  <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-white-smoke-300 border-dashed rounded-lg hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50">
                                    <div class="space-y-1 text-center">
                                      <svg class="mx-auto h-6 w-6 text-the-end-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                      <div class="flex text-body-sm text-the-end-600">
                                        <label class="relative cursor-pointer rounded-md font-medium text-chicken-comb-600 ">
                                          <span>Upload a file</span>
                                          <input type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                      </div>
                                      <p class="text-[11px] text-the-end-400">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                  </div>
                                  <div class="space-y-2 mt-2">
                                    <label class="block text-body font-medium text-the-end-400">Select if featured post</label>
                                    <div class="space-y-1">
                                      <label class="flex items-center space-x-2">
                                        <input type="checkbox" 
                                          class="w-4 h-4 border-the-end-200 text-pepper-green-600 
                                          focus:ring-pepper-green-300 hover:border-pepper-green-500"
                                        />
                                        <span class="text-the-end-900">Featured post</span>
                                      </label>
                                      
                                    </div>
                                  </div>
                              </div>

                          </div>
                      </div>

                      <!-- Work Content Area must use Trix rich tect editor-->
                      <div>
                        <label class="block text-body font-medium text-the-end-400 mb-2" for="content">
                            Work content
                        </label>
                        <textarea
                            id="content"
                            rows="10"
                            class="w-full px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
                            text-the-end-900 placeholder-the-end-400
                            focus:ring-2 focus:ring-pepper-green-300 focus:border-pepper-green-600
                            hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                            placeholder="Write your article content here..."
                            required
                        ></textarea>
                      </div>

                      <div class="flex items-center space-x-4">
                        
                        <!-- Large Secondary Button -->
                    <button
                    class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] border-2 border-pepper-green-600/50 text-the-end-700 rounded-full hover:bg-pepper-green-50 active:bg-pepper-green-100 disabled:border-pepper-green-200 disabled:text-pepper-green-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-pepper-green-600 focus:ring-offset-2 inline-flex items-center justify-center">
                    Save work
                </button>
                        
                        <!-- Large Primary Button -->
                    <button
                    class="lg:w-auto md:w-auto w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
                    Publish work
                </button>
                        
                      </div>
                      
                    </form>
                  </div>
      
                
              </div>
            </div>
          </div>
        </div>
      </div>

      
    
</body>
</html>
```

**IMPORTANT:**

**For “edit.blade.php”**

use the convention for “create”