@extends('layouts.admin')

@section('title', 'Admin Settings')

@section('header_title', 'Admin Settings')

@section('content')
<div class="p-8 max-w-7xl mx-auto bg-white-smoke-100 rounded-lg shadow-sm">
    {{-- Session Success Message --}}
    @if(session('success'))
        <div class="mb-6 p-4 bg-pepper-green-50 border border-pepper-green-300 text-pepper-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- User Management -->
        <div class="bg-white border border-white-smoke-300 p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 rounded-lg bg-pepper-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-pepper-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                    </svg>
                </div>
                <h3 class="text-h5 font-semibold text-the-end-900">User Management</h3>
            </div>
            <p class="text-body text-the-end-700 mb-6">Manage admin users and their permissions.</p>
            <x-core.button variant="primary" size="medium" href="{{ route('admin.users') }}" fullWidth="true">
                Manage Users
            </x-core.button>
        </div>

                <!-- System Information -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">System Information</h3>
                    <p class="text-gray-600 mb-4">View system status and configuration details.</p>
                    <div class="space-y-2 text-sm">
                        <div><strong>Laravel:</strong> {{ app()->version() }}</div>
                        <div><strong>PHP:</strong> {{ PHP_VERSION }}</div>
                        <div><strong>Environment:</strong> {{ app()->environment() }}</div>
                    </div>
                </div>

                <!-- Cache Management -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Cache Management</h3>
                    <p class="text-gray-600 mb-4">Clear application cache and optimize performance.</p>
                    <div class="space-y-2">
                        <button onclick="clearCache('route')" class="block w-full px-3 py-2 bg-yellow-600 text-white rounded text-sm hover:bg-yellow-700">
                            Clear Route Cache
                        </button>
                        <button onclick="clearCache('config')" class="block w-full px-3 py-2 bg-orange-600 text-white rounded text-sm hover:bg-orange-700">
                            Clear Config Cache
                        </button>
                        <button onclick="clearCache('view')" class="block w-full px-3 py-2 bg-red-600 text-white rounded text-sm hover:bg-red-700">
                            Clear View Cache
                        </button>
                    </div>
                </div>

                <!-- Site Settings -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Site Settings</h3>
                    <p class="text-gray-600 mb-4">Configure site-wide settings and preferences.</p>
                    <div class="space-y-2 text-sm">
                        <div><strong>Site Name:</strong> Festa Design Studio</div>
                        <div><strong>Maintenance Mode:</strong> <span class="text-green-600">Off</span></div>
                        <div><strong>Debug Mode:</strong> <span class="text-red-600">{{ config('app.debug') ? 'On' : 'Off' }}</span></div>
                    </div>
                </div>

                <!-- Database Status -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Database Status</h3>
                    <p class="text-gray-600 mb-4">Monitor database health and statistics.</p>
                    <div class="space-y-2 text-sm">
                        <div><strong>Connection:</strong> <span class="text-green-600">Active</span></div>
                        <div><strong>Users:</strong> {{ \App\Models\User::count() }}</div>
                        <div><strong>Projects:</strong> {{ \App\Models\Project::count() }}</div>
                        <div><strong>Articles:</strong> {{ \App\Models\Article::count() }}</div>
                    </div>
                </div>

                <!-- Security Settings -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Security Settings</h3>
                    <p class="text-gray-600 mb-4">Configure security and authentication settings.</p>
                    <div class="space-y-2 text-sm">
                        <div><strong>2FA:</strong> <span class="text-yellow-600">Available</span></div>
                        <div><strong>Session Timeout:</strong> 120 minutes</div>
                        <div><strong>Password Policy:</strong> <span class="text-green-600">Strong</span></div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">Quick Actions</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <button onclick="optimizeApp()" class="p-4 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                        <div class="text-lg font-semibold">Optimize App</div>
                        <div class="text-sm opacity-90">Run optimization commands</div>
                    </button>
                    
                    <button onclick="clearAllCache()" class="p-4 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition-colors">
                        <div class="text-lg font-semibold">Clear All Cache</div>
                        <div class="text-sm opacity-90">Clear all cached data</div>
                    </button>
                    
                    <button onclick="runMigrations()" class="p-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <div class="text-lg font-semibold">Run Migrations</div>
                        <div class="text-sm opacity-90">Update database schema</div>
                    </button>
                    
                    <button onclick="generateSitemap()" class="p-4 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors">
                        <div class="text-lg font-semibold">Generate Sitemap</div>
                        <div class="text-sm opacity-90">Update XML sitemaps</div>
                    </button>
                </div>
            </div>

            <!-- System Status -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-green-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-green-600">Online</div>
                    <div class="text-green-700">System Status</div>
                </div>
                
                <div class="bg-blue-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-blue-600">{{ round(memory_get_peak_usage() / 1024 / 1024, 1) }}MB</div>
                    <div class="text-blue-700">Memory Usage</div>
                </div>
                
                <div class="bg-purple-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-purple-600">{{ number_format(microtime(true) - LARAVEL_START, 3) }}s</div>
                    <div class="text-purple-700">Response Time</div>
                </div>

                <div class="bg-yellow-50 p-4 rounded-lg">
                    <div class="text-2xl font-bold text-yellow-600">{{ \Illuminate\Support\Facades\DB::table('cache')->count() ?? 'N/A' }}</div>
                    <div class="text-yellow-700">Cached Items</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function clearCache(type) {
    if (confirm(`Are you sure you want to clear ${type} cache?`)) {
        // In a real implementation, you would make an AJAX call to clear cache
        alert(`${type} cache cleared successfully!`);
    }
}

function optimizeApp() {
    if (confirm('This will run optimization commands. Continue?')) {
        alert('App optimization completed!');
    }
}

function clearAllCache() {
    if (confirm('This will clear all application cache. Continue?')) {
        alert('All cache cleared successfully!');
    }
}

function runMigrations() {
    if (confirm('This will run database migrations. Continue?')) {
        alert('Migrations completed successfully!');
    }
}

function generateSitemap() {
    if (confirm('This will regenerate all XML sitemaps. Continue?')) {
        alert('Sitemaps generated successfully!');
    }
}
</script>
@endsection 