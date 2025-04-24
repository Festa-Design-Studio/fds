# 📌 Festa’s Admin Structure and Layout

## Setup Admin Layout, Navigation Sidebar, Routes, Auths and their Controllers ONLY:

**IMPORTANT**:
When i say “ONLY”, i meant we are strictly working on this specific tasks.

**Execute the following:**

- Setup admin layout in: “/views/layouts/admin.blade.php”.
- Setup admin sidebar navigation links in: “/views/components/core/admin-sidebar.blade.php”.
    - **Important instructions**:
        - Grab the sidebar navigation “HTML element” as the  “<!-- Admin Sidebar Navigation -→” for the “admin-sidebar” component.

**Another Important instruction:**

Make sure you stick to the layout style and design of the “Full HTML code snippets”.

This is the full HTML code snippets of the Admin Dashboard Page “/admin/index.blade.php”:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/output.css">
    <title>Admin Dashboard</title>
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
                  <h2 class="text-h2 font-bold text-the-end-900">Welcome to Festa's administrator</h2>
                </div>
                <button class="px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 inline-flex items-center justify-center gap-2">
                  Create New Post
                </button>
              </div>
            </div>
      
            <!-- Admin Dashboard Main Content layout -->
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
                        <a href="/src/dashboard/admin-work-blade-php.html" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
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
                        <a href="#" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-body text-the-end-700">Create post</span>
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
                        <a href="#" class="flex items-center gap-2 text-chicken-comb-600 transition-colors">
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

              
      
              <!-- Admin Dashboard Main Content area-->
              <div class="md:col-span-9 p-6">

                <div class="grid md:grid-cols-3 gap-6 mb-8">
                  <!--Data showing how many user visited each articles and number of articles, total toolkit and downloads, total work case study published and their views-->
                    <div class="bg-pepper-green-50 p-6 rounded-xl border border-white-smoke-300">
                      <span class="text-body-sm text-pepper-green-600/50">Articles</span>
                      <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Total posts</h3>
                      <p class="text-h4 font-bold text-pepper-green-600 mb-2">248</p>
                      <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Total views</h3>
                      <p class="text-h4 font-bold text-pepper-green-600">1.3k</p>
                    </div>
                    <div class="bg-chicken-comb-50 p-6 rounded-xl border border-white-smoke-300">
                      <span class="text-body-sm text-chicken-comb-600/50">Toolkit</span>
                      <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Total posts</h3>
                      <p class="text-h4 font-bold text-chicken-comb-600 mb-2">36</p>
                      <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Total download</h3>
                      <p class="text-h4 font-bold text-chicken-comb-600">23</p>
                    </div>
                    <div class="bg-apocalyptic-orange-50 p-6 rounded-xl border border-white-smoke-300">
                      <span class="text-body-sm text-apocalyptic-orange-600/50">Work</span>
                      <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Total posts</h3>
                      <p class="text-h4 font-bold text-chicken-comb-600 mb-2">36</p>
                      <h3 class="text-h4 font-semibold text-the-end-900 mb-2">Total views</h3>
                      <p class="text-h4 font-bold text-chicken-comb-600">6.3k</p>
                    </div>
                  </div>

                  <!-- Content area will be added later in development -->
      
                
              </div>
            </div>
          </div>
        </div>
      </div>

</body>
</html>
```

## Setup Auth and use the code snippets below

### **📌 Login layout**

Code snippet for **Login layout**:

```html
<!-- Login Form Section Container with Background Gradient -->
<section class="min-h-screen bg-gradient-to-br from-pepper-green-50 via-leaf-50 to-chicken-comb-50 py-12 px-4 flex items-center justify-center">
    <!-- Login Form Card Container -->
    <div class="max-w-md w-full bg-white-smoke-50 rounded-2xl shadow-xl p-8 space-y-6">
      <!-- Logo Container -->
      <div class="flex justify-center mb-8">
        <svg class=" h-20 w-auto" viewBox="0 0 16 14.75" preserveAspectRatio="xMidYMid meet">
            <g fill="#e12729">
                <defs></defs>
                <path class="cls-1"
                    d="M15,3.57V1.02H.98v12.74h2.55v-5.1h1.27v5.1h10.19v-7.64h-2.55v-2.55h2.55ZM4.8,6.12h-1.27v-2.55h1.27v2.55ZM8.94,6.12v5.1h-1.59V3.57h1.59v2.55ZM12.45,11.21h-.96v-2.55h.96v2.55Z"
                    fill="#e12729"></path>
            </g>
        </svg>
      </div>
      
      <!-- Welcome Text Container -->
      <div class="text-center">
        <h1 class="text-h2 font-bold text-the-end-900">Welcome Back</h1>
        <p class="text-body text-the-end-700 mt-2">Sign in to your admin dashboard</p>
      </div>
      
      <!-- Login Form -->
      <form class="space-y-6">
        <!-- Email Input Group -->
        <div class="space-y-2">
          <label class="text-the-end-900 text-body-sm font-medium">Email Address</label>
          <input type="email" 
            class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
            text-the-end-900 placeholder-the-end-400
            focus:ring-2 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
            hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50
            disabled:bg-white-smoke-100 disabled:text-the-end-300 disabled:cursor-not-allowed"
            placeholder="Enter your email"
          >
        </div>
        
        <!-- Password Input Group -->
        <div class="space-y-2">
          <label class="text-the-end-900 text-body-sm font-medium">Password</label>
          <div class="relative">
            <input type="password" 
              class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
              text-the-end-900 placeholder-the-end-400
              focus:ring-2 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
              hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
              placeholder="Enter your password"
            >
            <!-- Password Visibility Toggle Button -->
            <button class="absolute inset-y-0 right-0 px-3 text-the-end-400 hover:text-the-end-600">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
              </svg>
            </button>
          </div>
        </div>
        
        <!-- Remember Me and Forgot Password Row -->
        <div class="flex items-center justify-between">
          <label class="flex items-center space-x-2">
            <input type="checkbox" 
              class="w-4 h-4 border-the-end-200 text-pepper-green-600 
              focus:ring-pepper-green-300 hover:border-pepper-green-500"
            >
            <span class="text-the-end-900 text-body-sm">Remember me</span>
          </label>
          <a href="#" class="text-body-sm text-pepper-green-600 hover:text-pepper-green-700">Forgot password?</a>
        </div>
        <!-- Large Primary Submit Button -->
        <button 
        type="submit" 
          class="w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
        Sign in
        </button>
  
        <!-- Sign Up Link -->
        <div class="text-center">
          <span class="text-body-sm text-the-end-700">Don't have an account?</span>
          <a href="#" class="text-body-sm text-pepper-green-600 hover:text-pepper-green-700 ml-1">Sign up</a>
        </div>
      </form>
    </div>
  </section>
```

### **📌 Forgot password layout**

Code snippet for **Forgot password layout**:

```html
<!--Forgot password-->
    <section class="min-h-screen bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100 py-12 px-4 flex items-center justify-center">
        <div class="max-w-md w-full bg-white-smoke-50 rounded-2xl shadow-xl p-8 space-y-6">
          <div class="flex justify-center mb-8">
            <svg class=" h-20 w-auto" viewBox="0 0 16 14.75" preserveAspectRatio="xMidYMid meet">
                <g fill="#e12729">
                    <defs></defs>
                    <path class="cls-1"
                        d="M15,3.57V1.02H.98v12.74h2.55v-5.1h1.27v5.1h10.19v-7.64h-2.55v-2.55h2.55ZM4.8,6.12h-1.27v-2.55h1.27v2.55ZM8.94,6.12v5.1h-1.59V3.57h1.59v2.55ZM12.45,11.21h-.96v-2.55h.96v2.55Z"
                        fill="#e12729"></path>
                </g>
            </svg>
          </div>
          
          <div class="text-center">
            <h1 class="text-h2 font-bold text-the-end-900">Forgot Password?</h1>
            <p class="text-body text-the-end-700 mt-2">Enter your email to reset your password</p>
          </div>
          
          <form class="space-y-6">
            <div class="space-y-2">
              <label class="text-the-end-900 text-body-sm font-medium">Email Address</label>
              <input type="email" 
                class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
                text-the-end-900 placeholder-the-end-400
                focus:ring-2 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
                hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                placeholder="Enter your email"
              >
            </div>

            <!-- Large Primary Reset password Button -->
            <button
            type="submit" 
            class="w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
            Large Button
        </button>
      
            <div class="text-center">
              <a href="#" class="text-body-sm text-pepper-green-600 hover:text-pepper-green-700">Back to Login</a>
            </div>
          </form>
        </div>
      </section>
```

### **📌** Register User **layout**

Code snippet for Register User **layout**:

```html
<!--Register User Layout-->
    <section class="min-h-screen bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100 py-12 px-4 flex items-center justify-center">
        <div class="max-w-md w-full bg-white-smoke-50 rounded-2xl shadow-xl p-8 space-y-6">
          <div class="flex justify-center mb-8">
            <svg class=" h-20 w-auto" viewBox="0 0 16 14.75" preserveAspectRatio="xMidYMid meet">
                <g fill="#e12729">
                    <defs></defs>
                    <path class="cls-1"
                        d="M15,3.57V1.02H.98v12.74h2.55v-5.1h1.27v5.1h10.19v-7.64h-2.55v-2.55h2.55ZM4.8,6.12h-1.27v-2.55h1.27v2.55ZM8.94,6.12v5.1h-1.59V3.57h1.59v2.55ZM12.45,11.21h-.96v-2.55h.96v2.55Z"
                        fill="#e12729"></path>
                </g>
            </svg>
          </div>
          
          <div class="text-center">
            <h1 class="text-h2 font-bold text-the-end-900">Create Account</h1>
            <p class="text-body text-the-end-700 mt-2">Join our community today</p>
          </div>
          
          <form class="space-y-6">
            <div class="space-y-2">
              <label class="text-the-end-900 text-body-sm font-medium">Full Name</label>
              <input type="text" 
                class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
                text-the-end-900 placeholder-the-end-400
                focus:ring-2 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
                hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                placeholder="Enter your name"
              >
            </div>
            
            <div class="space-y-2">
              <label class="text-the-end-900 text-body-sm font-medium">Email Address</label>
              <input type="email" 
                class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
                text-the-end-900 placeholder-the-end-400
                focus:ring-2 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
                hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                placeholder="Enter your email"
              >
            </div>
      
            <div class="space-y-2">
              <label class="text-the-end-900 text-body-sm font-medium">Password</label>
              <input type="password" 
                class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
                text-the-end-900 placeholder-the-end-400
                focus:ring-2 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
                hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                placeholder="Create a password"
              >
            </div>
      
            <div class="space-y-2">
              <label class="text-the-end-900 text-body-sm font-medium">Confirm Password</label>
              <input type="password" 
                class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
                text-the-end-900 placeholder-the-end-400
                focus:ring-2 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
                hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
                placeholder="Confirm your password"
              >
            </div>
    
            <!-- Large Primary Button -->
            <button
            type="submit" 
            class="w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
            Create account
        </button>
      
            <div class="text-center">
              <span class="text-body-sm text-the-end-700">Already have an account?</span>
              <a href="#" class="text-body-sm text-pepper-green-600 hover:text-pepper-green-700 ml-1">Sign in</a>
            </div>
          </form>
        </div>
      </section>
```

### **📌** Reset Password **layout**

Code snippet for Reset Password **layout**:

```html
<!-- Reset Password Form Section Container with Background Gradient -->
<section class="min-h-screen bg-gradient-to-br from-pepper-green-50 via-leaf-50 to-chicken-comb-50 py-12 px-4 flex items-center justify-center">
    <!-- Reset Password Form Card Container -->
    <div class="max-w-md w-full bg-white-smoke-50 rounded-2xl shadow-xl p-8 space-y-6">
      <!-- Logo Container -->
      <div class="flex justify-center mb-8">
        <svg class=" h-20 w-auto" viewBox="0 0 16 14.75" preserveAspectRatio="xMidYMid meet">
            <g fill="#e12729">
                <defs></defs>
                <path class="cls-1"
                    d="M15,3.57V1.02H.98v12.74h2.55v-5.1h1.27v5.1h10.19v-7.64h-2.55v-2.55h2.55ZM4.8,6.12h-1.27v-2.55h1.27v2.55ZM8.94,6.12v5.1h-1.59V3.57h1.59v2.55ZM12.45,11.21h-.96v-2.55h.96v2.55Z"
                    fill="#e12729"></path>
            </g>
        </svg>
      </div>
      
      <!-- Welcome Text Container -->
      <div class="text-center">
        <h1 class="text-h2 font-bold text-the-end-900">Reset Your Password</h1>
        <p class="text-body text-the-end-700 mt-2">Enter your new password below</p>
      </div>
      
      <!-- Reset Password Form -->
      <form class="space-y-6">
        <!-- New Password Input Group -->
        <div class="space-y-2">
          <label class="text-the-end-900 text-body-sm font-medium">New Password</label>
          <input type="password" 
            class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
            text-the-end-900 placeholder-the-end-400
            focus:ring-2 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
            hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
            placeholder="Enter new password"
          >
        </div>
        
        <!-- Confirm Password Input Group -->
        <div class="space-y-2">
          <label class="text-the-end-900 text-body-sm font-medium">Confirm Password</label>
          <input type="password" 
            class="w-full h-10 px-3 py-2 bg-white-smoke-50 border border-the-end-200 rounded-md 
            text-the-end-900 placeholder-the-end-400
            focus:ring-2 focus:ring-chicken-comb-300 focus:border-chicken-comb-600
            hover:bg-chicken-comb-50 hover:border-chicken-comb-600/50"
            placeholder="Confirm new password"
          >
        </div>

        <!-- Large Primary Submit Button -->
        <button
        type="submit"
        class="w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
        Reset password
    </button>
  
        <!-- Back to Login Link -->
        <div class="text-center">
          <a href="#" class="text-body-sm text-pepper-green-600 hover:text-pepper-green-700">Back to Login</a>
        </div>
      </form>
    </div>
  </section>
  
```

### **📌 Verify email layout**

Code snippet for Verify email **layout**:

```html
<!--Verify email-->
    <section class="min-h-screen bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100 py-12 px-4 flex items-center justify-center">
        <div class="max-w-md w-full bg-white-smoke-50 rounded-2xl shadow-xl p-8 space-y-6">
          <div class="flex justify-center mb-8">
            <svg class=" h-20 w-auto" viewBox="0 0 16 14.75" preserveAspectRatio="xMidYMid meet">
                <g fill="#e12729">
                    <defs></defs>
                    <path class="cls-1"
                        d="M15,3.57V1.02H.98v12.74h2.55v-5.1h1.27v5.1h10.19v-7.64h-2.55v-2.55h2.55ZM4.8,6.12h-1.27v-2.55h1.27v2.55ZM8.94,6.12v5.1h-1.59V3.57h1.59v2.55ZM12.45,11.21h-.96v-2.55h.96v2.55Z"
                        fill="#e12729"></path>
                </g>
            </svg>
          </div>
          
          <div class="text-center">
            <h1 class="text-h2 font-bold text-the-end-900">Verify your email</h1>
            <p class="text-body text-the-end-700 mt-2">Please check your email for the verification link we sent you</p>
          </div>
          
          <div class="text-center space-y-4">
            <p class="text-body text-the-end-700">Didn't receive the email?</p>
            
           

            <!-- Large Primary Button -->
            <button
            type="button" 
            class="w-full px-6 py-3 text-body-lg h-[48px] bg-chicken-comb-600 text-white-smoke-50 rounded-full hover:bg-chicken-comb-700 active:bg-chicken-comb-800 disabled:bg-chicken-comb-200 disabled:cursor-not-allowed transition-all duration-150 ease-in-out focus:ring-2 focus:ring-chicken-comb-600 focus:ring-offset-2 flex items-center justify-center">
            Resend verification email
        </button>
      
            <div class="text-center">
              <a href="#" class="text-body-sm text-pepper-green-600 hover:text-pepper-green-700">Back to Login</a>
            </div>
          </div>
        </div>
      </section>
```