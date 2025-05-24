<nav class="space-y-10">
    <!--admin home page-->
    <div>
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 font-medium">
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
        <a href="{{ route('admin.services') }}" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M13.5 10a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm-3 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm-3 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" clip-rule="evenodd" />
            </svg>
            <span class="text-body text-the-end-700">Services</span>
        </a>

        <!-- Admin work-->
        <a href="{{ route('admin.work.index') }}" class="flex items-center gap-2 {{ request()->routeIs('admin.work.index') ? 'text-chicken-comb-600' : 'text-the-end-600 hover:text-chicken-comb-600' }} transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
            </svg>
            <span class="text-body text-the-end-700">Work</span>
        </a>

        <!-- Admin Work Metrics -->
        <a href="{{ route('admin.work.metrics.index') }}" class="flex items-center gap-2 ml-6 {{ request()->routeIs('admin.work.metrics.*') ? 'text-chicken-comb-600' : 'text-the-end-600 hover:text-chicken-comb-600' }} transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zm6-4a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zm6-3a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
            </svg>
            <span class="text-body text-the-end-700">Metrics</span>
        </a>

        <!-- Admin Work Testimonials -->
        <a href="{{ route('admin.work.testimonials.index') }}" class="flex items-center gap-2 ml-6 {{ request()->routeIs('admin.work.testimonials.*') ? 'text-chicken-comb-600' : 'text-the-end-600 hover:text-chicken-comb-600' }} transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"/>
            </svg>
            <span class="text-body text-the-end-700">Testimonials</span>
        </a>

        <!-- Admin Clients -->
        <a href="{{ route('admin.clients.index') }}" class="flex items-center gap-2 {{ request()->routeIs('admin.clients*') ? 'text-chicken-comb-600' : 'text-the-end-600 hover:text-chicken-comb-600' }} transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
            </svg>
            <span class="text-body text-the-end-700">Clients</span>
        </a>

        <!-- Admin About-->
        <a href="{{ route('admin.about') }}" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
            </svg>
            <span class="text-body text-the-end-700">About</span>
        </a>

        <!-- Admin Team Members -->
        <a href="{{ route('admin.about.team.index') }}" class="flex items-center gap-2 {{ request()->routeIs('admin.about.team.*') ? 'text-chicken-comb-600' : 'text-the-end-600 hover:text-chicken-comb-600' }} transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
            </svg>
            <span class="text-body text-the-end-700">Team Members</span>
        </a>

        <!-- Admin Toolkit-->
        <a href="{{ route('admin.toolkit.index') }}" class="flex items-center gap-2 {{ request()->routeIs('admin.toolkit.*') ? 'text-chicken-comb-600' : 'text-the-end-600 hover:text-chicken-comb-600' }} transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v1h14V5a2 2 0 00-2-2H5zm12 4H3v8a2 2 0 002 2h10a2 2 0 002-2V7zM7 9a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1zm0 4a1 1 0 100-2h.01a1 1 0 100 2H7z" clip-rule="evenodd" />
            </svg>
            <span class="text-body text-the-end-700">Toolkit</span>
        </a>

        <!-- Admin Festa Design System-->
        <a href="{{ route('admin.design-system') }}" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm0 4a1 1 0 000 2h6a1 1 0 100-2H7zm6 5a1 1 0 100-2H7a1 1 0 100 2h6z" clip-rule="evenodd" />
                <path d="M4 16a1 1 0 011-1h2a1 1 0 110 2H5a1 1 0 01-1-1zm8-5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
            </svg>
            <span class="text-body text-the-end-700">Festa design system</span>
        </a>

        <!-- Admin Contact-->
        <a href="{{ route('admin.contact') }}" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" clip-rule="evenodd" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
            </svg>
            <span class="text-body text-the-end-700">Contact</span>
        </a>

        <!-- Admin Privacy policy -->
        <a href="{{ route('admin.privacy') }}" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
            <span class="text-body text-the-end-700">Privacy</span>
        </a>

        <!-- Admin Terms and condition -->
        <a href="{{ route('admin.terms') }}" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
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
        <a href="{{ route('admin.blog.create') }}" class="flex items-center gap-2 {{ request()->routeIs('admin.blog.create') ? 'text-chicken-comb-600' : 'text-the-end-600 hover:text-chicken-comb-600' }} transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd"/>
            </svg>
            <span class="text-body {{ request()->routeIs('admin.blog.create') ? '' : 'text-the-end-700' }}">Create post</span>
        </a>

        <!-- Blog admin post-->
        <a href="{{ route('admin.blog.posts') }}" class="flex items-center gap-2 {{ request()->routeIs('admin.blog.posts') || request()->routeIs('admin.blog.edit') ? 'text-chicken-comb-600' : 'text-the-end-600 hover:text-chicken-comb-600' }} transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"/>
                <path d="M7 8h6a1 1 0 100-2H7a1 1 0 000 2zm0 4h6a1 1 0 100-2H7a1 1 0 100 2zm0 4h4a1 1 0 100-2H7a1 1 0 100 2z"/>
            </svg>
            <span class="text-body {{ request()->routeIs('admin.blog.posts') || request()->routeIs('admin.blog.edit') ? '' : 'text-the-end-700' }}">Posts</span>
        </a>

        <!-- Blog admin categories-->
        <a href="{{ route('admin.blog.categories.index') }}" class="flex items-center gap-2 {{ request()->routeIs('admin.blog.categories.index') || request()->routeIs('admin.blog.categories.create') || request()->routeIs('admin.blog.categories.edit') ? 'text-chicken-comb-600' : 'text-the-end-600 hover:text-chicken-comb-600' }} transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
            </svg>
            <span class="text-body {{ request()->routeIs('admin.blog.categories.index') || request()->routeIs('admin.blog.categories.create') || request()->routeIs('admin.blog.categories.edit') ? '' : 'text-the-end-700' }}">Categories</span>
        </a>

        <!-- Blog User Admin -->
        <a href="{{ route('admin.users') }}" class="flex items-center gap-2 text-chicken-comb-600 transition-colors">
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
        <a href="{{ route('admin.settings') }}" class="flex items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
            </svg>
            <span class="text-body text-the-end-700">Settings</span>
        </a>

        <!-- Logout-->
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <a href="{{ route('logout') }}" 
               onclick="event.preventDefault(); this.closest('form').submit();"
               class="flex mt-3 items-center gap-2 text-the-end-600 hover:text-chicken-comb-600 transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 001 1h6a1 1 0 001-1v-2a1 1 0 10-2 0v1H4V5h4v1a1 1 0 102 0V4a1 1 0 00-1-1H3z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M12.293 7.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L14.586 11H7a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
                <span class="text-body text-the-end-700">Logout</span>
            </a>
        </form>
    </div>
</nav> 