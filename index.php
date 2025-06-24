<?php
// Azure App Service entry point
// This file redirects to the Laravel public directory

// Check if we're already in the public directory
if (file_exists(__DIR__ . '/index.php') && file_exists(__DIR__ . '/../bootstrap/app.php')) {
    // We're in the public directory, load Laravel
    require __DIR__ . '/index.php';
} elseif (file_exists(__DIR__ . '/public/index.php')) {
    // We're in the root directory, redirect to public
    require __DIR__ . '/public/index.php';
} else {
    // Fallback error message
    die('Laravel application not found. Please check your deployment.');
}