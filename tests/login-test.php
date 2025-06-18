<?php

// Load the Laravel application
require_once __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

// Boot the application
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Test authentication
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// Create a test user if doesn't exist
$email = 'test@example.com';
$testUser = User::where('email', $email)->first();

if (! $testUser) {
    $testUser = User::create([
        'name' => 'Test User',
        'email' => $email,
        'password' => bcrypt('password'),
        'email_verified_at' => now(),
    ]);
    echo "Created test user: {$email}\n";
} else {
    echo "Test user already exists: {$email}\n";
}

// Attempt to login
$credentials = [
    'email' => $email,
    'password' => 'password',
];

if (Auth::attempt($credentials)) {
    echo "Authentication successful!\n";
    echo 'User: '.Auth::user()->name."\n";
    echo 'Email: '.Auth::user()->email."\n";
} else {
    echo "Authentication failed!\n";
}

// Check if routes exist
$router = app('router');
$adminDashboardRoute = $router->getRoutes()->getByName('admin.dashboard');
$dashboardRoute = $router->getRoutes()->getByName('dashboard');

echo "\nRoutes check:\n";
echo 'admin.dashboard route exists: '.($adminDashboardRoute ? 'Yes' : 'No')."\n";
echo 'dashboard route exists: '.($dashboardRoute ? 'Yes' : 'No')."\n";

// Check database sessions
$sessionCount = DB::table('sessions')->count();
echo "\nDatabase sessions count: {$sessionCount}\n";
